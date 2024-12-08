<?php

namespace Tests\Feature\User;

use Mockery;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\App;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    protected $basePayload;

    protected function setUp(): void
    {
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

    public function test_store_creates_user_with_image()
    {
        // Cria uma imagem fake
        Storage::fake('public');
        $file = UploadedFile::fake()->image('perfil-image.png');
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['image'] = $file;
        // Chama a rota do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica a estrutura e conteúdo da resposta
        $response->assertStatus(201)
            ->assertJsonStructure(['msg', 'user']);
        // Verifica se o usuário foi criado no banco de dados
        $this->assertDatabaseHas('users', ['email' => 'johndoe@example.com']);
        // Verifica se a imagem foi salva no storage
        $this->assertFileExists(Storage::disk('public')->path('images/users/' . $file->hashName()));
    }

    public function test_login_sucessful()
    {
        $password = 'Password!1';
        // Cria um usuário com uma senha conhecida
        $user = User::factory()->create([
            'password' => Hash::make($password),
        ]);
        // Tenta fazer o login com um usuário válido
        $response = $this->postJson(
            route('user.login'),
            [
                'email' => $user->email,
                'password' => $password,
            ]
        );
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
