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

    public function test_login_fails_with_wrong_password()
    {
        // Cria um usuário
        $password = 'correct-password';
        $user = User::factory()->create(['password' => Hash::make($password)]);
        // Tentar fazer o login com uma senha inválida
        $response = $this->postJson(route('user.login'), ['email' => $user->email, 'password' => 'wrong-password']);
        // Verifica o status e a estrutura da resposta
        $response->assertStatus(401)
            ->assertJson(['msg' => 'Email ou senha incorretos!']);
    }

    public function test_login_fails_with_wrong_email()
    {
        // Cria um usuário com uma senha conhecida
        $password = 'correct-password';
        $email = 'teste@gmail.com';
        $user = User::factory()->create(['password' => Hash::make($password), 'email' => $email]);
        // Tentar fazer o login com um email inválido
        $response = $this->postJson(route('user.login'), ['email' => 'wrong@gmail.com', 'password' => 'correct-password']);
        // Verifica o status e a estrutura da resposta
        $response->assertStatus(401)
            ->assertJson(['msg' => 'Email ou senha incorretos!']);
    }

    public function test_refresh_token_successfully()
    {
        // Cria e autentica o usuário criado
        $user = User::factory()->create();
        Sanctum::actingAs($user);
        // Chama a rota de refresh-token
        $response = $this->postJson(route('user.refreshToken'));
        // Verifica o status e a estrutura da resposta
        $response->assertStatus(200)
            ->assertJsonStructure(['msg', 'token'])
            ->assertJson(['msg' => 'Token renovado com sucesso']);
    }

    public function test_logout_successfully()
    {
        // Cria e autentica o usuário criado
        $user = User::factory()->create();
        Sanctum::actingAs($user);
        // Faz uma requisição para a rota de logout
        $response = $this->postJson(route('user.logout'));
        // Verifica o status e a estrutura da resposta
        $response->assertStatus(200)
            ->assertJson(['msg' => 'Usuário deslogado com sucesso']);
    }

    public function test_destruct_all_tokens_successfully()
    {
        // Cria e autentica o usuário criado
        $user = User::factory()->create();
        Sanctum::actingAs($user);
        // Faz uma requisição para a rota de destruct all tokens
        $response = $this->postJson(route('user.destructAllTokens'));
        // Verifica o status e a estrutura da resposta
        $response->assertStatus(200)
            ->assertJson(['msg' => 'Tokens destruídos com sucesso']);
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

    public function test_show_requires_authentication()
    {
        // Cria um usuário
        $user = User::factory()->create();
        // Faz uma requisição para a rota show sem autenticação
        $response = $this->getJson(route('users.show', $user->id));
        // Verifica se a resposta é 401 (Unauthorized)
        $response->assertStatus(401);
    }

    public function test_show_user_not_found()
    {
        // Cria um usuário
        Sanctum::actingAs(
            User::factory()->create(),
            ['*']
        );
        // Faz uma requisição para a rota show com um ID de um usuário que não existe
        $response = $this->getJson(route('users.show', '200'));
        // Verifica o status e a estrutura da resposta
        $response->assertStatus(404)
            ->assertJson(['error' => 'Registro não encontrado']);
    }

    public function test_update_user_with_new_image_when_no_image_exists()
    {
        // Cria um usuário sem imagem
        $user = User::factory()->create(['image' => null]);
        // Autentica o usuário criado
        Sanctum::actingAs($user);
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

    public function test_update_user_with_new_image_when_image_already_exists()
    {
        // Cria uma imagem inicial
        $existingFile = UploadedFile::fake()->image('existing-image.png');
        $existingPath = $existingFile->store('images/users', 'public');
        // Cria um usuário com uma imagem existente
        Storage::fake('public');
        $user = User::factory()->create(['image' => $existingPath]);
        // Autentica o usuário criado
        Sanctum::actingAs($user, ['*']);
        // Cria uma nova imagem para atualização
        $newFile = UploadedFile::fake()->image('new-image.png');
        // Dados simulados para atualização
        $payload = [
            'name' => 'Updated Name',
            'image' => $newFile,
        ];
        // Chama a rota do método update
        $response = $this->putJson(route('users.update', $user->id), $payload);
        // Verifica o status e a estrutura da resposta
        $response->assertStatus(200)
            ->assertJsonStructure(['msg', 'user'])
            ->assertJson(['msg' => 'Usuário atualizado com sucesso']);
        // Verifica se o usuário foi atualizado no banco
        $this->assertDatabaseHas('users', ['id' => $user->id, 'name' => 'Updated Name']);
        // Verifica se a nova imagem foi salva no Storage e a antiga foi removida
        $this->assertFileExists(Storage::disk('public')->path('images/users/' . $newFile->hashName()));
        $this->assertFileDoesNotExist(Storage::disk('public')->path($existingPath));
    }

    public function test_update_user_without_image()
    {
        // Cria um usuário sem imagem
        $user = User::factory()->create();
        // Autentica o usuário criado
        Sanctum::actingAs(
            $user,
            ['*']
        );
        // Dados simulados para atualização
        $payload = [
            'name' => 'Updated Name',
        ];
        // Chama a rota do método update passando o id do usuário criado acima e os dados para atualização
        $response = $this->putJson(route('users.update', $user->id), $payload);
        // Verifica o status e a estrutura da resposta
        $response->assertStatus(200)
            ->assertJsonStructure(['msg', 'user'])
            ->assertJson(['msg' => 'Usuário atualizado com sucesso']);
        // Verifica se o usuário realmente foi atualizado no banco de dados
        $this->assertDatabaseHas('users', ['id' => $user->id, 'name' => 'Updated Name']);
    }

    public function test_update_requires_authentication()
    {
        // Cria um usuário
        $user = User::factory()->create();
        // Faz uma requisição para a rota show sem autenticação
        $response = $this->putJson(route('users.update', $user->id));
        // Verifica se a resposta é 401 (Unauthorized)
        $response->assertStatus(401);
    }

    public function test_update_user_not_found()
    {
        // Cria um usuário
        Sanctum::actingAs(
            User::factory()->create(),
            ['*']
        );
        // Faz uma requisição para a rota show com um ID de um usuário que não existe
        $response = $this->putJson(route('users.update', '200'));
        // Verifica o status e a estrutura da resposta
        $response->assertStatus(404)
            ->assertJson(['error' => 'Registro não encontrado']);
    }

    public function test_destroy_user_successfully()
    {
        // Cria um usuário sem imagem
        $user = User::factory()->create();
        // Cria e insere no usuário uma iumagem
        Storage::fake('public');
        $file = UploadedFile::fake()->image('image.png');
        $user->image = $file->store('images/users', 'public');
        $user->save();
        // Autentica o usuário criado
        Sanctum::actingAs(
            $user,
            ['*']
        );
        // Chama a rota do método destroy passando o id do usuário criado acima
        $response = $this->deleteJson(route('users.destroy', $user->id));
        // Verifica o status e a estrutura da resposta
        $response->assertStatus(200)
            ->assertJson(['msg' => 'Usuário excluído com sucesso']);
        // Verifica se o usuário realmente foi deletado do banco de dados
        $this->assertDatabaseMissing('users', ['id' => $user->id]);
        // Verifica se a imagem do usuário foi excluída
        $this->assertFileDoesNotExist(Storage::disk('public')->path('images/users/' . $file->hashName()));
    }

    public function test_destroy_requires_authentication()
    {
        // Cria um usuário
        $user = User::factory()->create();
        // Faz uma requisição para a rota show sem autenticação
        $response = $this->deleteJson(route('users.destroy', $user->id));
        // Verifica se a resposta é 401 (Unauthorized)
        $response->assertStatus(401);
    }

    public function test_destroy_user_not_found()
    {
        // Cria um usuário
        Sanctum::actingAs(
            User::factory()->create(),
            ['*']
        );
        // Faz uma requisição para a rota show com um ID de um usuário que não existe
        $response = $this->deleteJson(route('users.destroy', '200'));
        // Verifica o status e a estrutura da resposta
        $response->assertStatus(404)
            ->assertJson(['error' => 'Registro não encontrado']);
    }
}
