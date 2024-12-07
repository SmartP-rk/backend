<?php

namespace Tests\Feature\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_store_creates_user_and_returns_success_message()
    {
        // Dados simulados para criar o usuário
        $payload = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => '!Password123',
            'cpf' => '000.000.000-00',
            'phone' => '(53) 99911-2233',
            'user_type' => '1',
        ];
        // Chama a rota do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o usuário foi criado no banco de dados
        $this->assertDatabaseHas('users', [
            'email' => 'johndoe@example.com'
        ]);
        // Verifica a estrutura e conteúdo da resposta
        $response->assertStatus(201)
                ->assertJsonStructure([
                    'msg',
                    'user' => ['id', 'name', 'email', 'cpf', 'phone', 'user_type', 'created_at', 'updated_at']
                ])
                ->assertJson([
                    'msg' => 'Usuário cadastrado com sucesso',
                    'user' => [
                        'name' => 'John Doe',
                        'email' => 'johndoe@example.com',
                        'cpf' => '000.000.000-00',
                        'phone' => '(53) 99911-2233',
                        'user_type' => '1',
                    ]
                ]);
        // Valida que a senha foi armazenada como hash
        $user = User::where('email', 'johndoe@example.com')->first();
        $this->assertTrue(Hash::check('!Password123', $user->password));
    }

    public function test_login_sucessful(){
        $password = 'Password!1';
        // Cria um usuário com uma senha conhecida
        $user = User::factory()->create([
            'password' => Hash::make($password),
        ]);
        // Tenta fazer o login com um usuário válido
        $response = $this->postJson(route('user.login'),
        [
            'email' => $user->email,
            'password' => $password,
        ]);
        // Verifica o status da resposta e a estrutura
        $response->assertStatus(200)
            ->assertJsonStructure([
                'msg',
                'user' => ['id', 'name', 'email', 'cpf', 'phone', 'user_type', 'created_at', 'updated_at'],
                'token',
            ])
            ->assertJson([
                'msg' => 'Usuário autenticado com sucesso',
            ]);
    }
}
