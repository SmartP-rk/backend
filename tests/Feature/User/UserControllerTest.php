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

    protected $basePayload;

    protected function setUp(): void{
        parent::setUp();
        $this->basePayload = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => '!Password123',
            'cpf' => '000.000.000-00',
            'phone' => '(53) 99911-2233',
            'user_type' => '1',
            'image' => null,
        ];
    }

    public function test_store_creates_user_without_image()
    {
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        // Chama a rota do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
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
        // Verifica se o usuário foi criado no banco de dados
        $this->assertDatabaseHas('users', [
            'email' => 'johndoe@example.com'
        ]);
        // Valida que a senha foi armazenada como hash
        $user = User::where('email', 'johndoe@example.com')->first();
        $this->assertTrue(Hash::check('!Password123', $user->password));
    }
}
