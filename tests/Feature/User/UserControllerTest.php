<?php

namespace Tests\Feature\User;

use Mockery;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;

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

    public function test_show_user_successfully()
    {
        // Cria um usuário
        $user = User::factory()->create();
        // Cria e autentica outra usuário
        Sanctum::actingAs(
            User::factory()->create(),
            ['*']
        );
        // Chama a rota do método show passando o id do usuário criado acima
        $response = $this->getJson(route('users.show', $user->id));
        // Verifica o status da resposta e a estrutura
        $response->assertStatus(200)
            ->assertJsonStructure(['user']);
    }

    public function test_update_user_with_new_image()
    {
        // Cria um usuário sem imagem
        $user = User::factory()->create();
        // Autentica o usuário criado
        Sanctum::actingAs(
            $user,
            ['*']
        );
        // Cria uma imagem
        Storage::fake('public');
        $file = UploadedFile::fake()->image('new-image.png');
        // Dados simulados para atualização
        $payload = [
            'name' => 'Updated Name',
            'image' => $file,
        ];
        // Chama a rota do método update passando o id do usuário criado acima e os dados para atualização
        $response = $this->putJson(route('users.update', $user->id), $payload);
        // Verifica o status e a estrutura da resposta
        $response->assertStatus(200)
            ->assertJsonStructure(['msg', 'user'])
            ->assertJson(['msg' => 'Usuário atualizado com sucesso']);
        // Verifica se o usuário realmente foi atualizado no banco de dados
        $this->assertDatabaseHas('users', ['id' => $user->id, 'name' => 'Updated Name']);
        // Verifca se a imagem foi salva no Storage
        $this->assertFileExists(Storage::disk('public')->path('images/users/' . $file->hashName()));
    }

    // public function test_update_user_without_image()
    // {
    //     $user = User::factory()->create();

    //     $payload = [
    //         'name' => 'Updated Name',
    //     ];

    //     $response = $this->putJson(route('users.update', $user->id), $payload);

    //     $response->assertStatus(200)
    //         ->assertJsonStructure(['msg', 'user']);
    //     $this->assertDatabaseHas('users', ['id' => $user->id, 'name' => 'Updated Name']);
    // }

    // public function test_update_fails_with_invalid_data()
    // {
    //     $user = User::factory()->create();

    //     $payload = [
    //         'email' => 'invalid-email', // Supondo que essa validação falhe
    //     ];

    //     $response = $this->putJson(route('users.update', $user->id), $payload);

    //     $response->assertStatus(422);
    // }
}
