<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_name_is_required(){
        // Dados simulados para criar o usuário
        $payload = [
            'name' => '',
            'email' => 'johndoe@example.com',
            'password' => '!Password123',
            'cpf' => '000.000.000-00',
            'phone' => '(53) 99911-2233',
            'user_type' => '1',
        ];
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica a estrutura e conteúdo da resposta
        $response->assertStatus(422)->assertJsonValidationErrors(['name']);
    }

    public function test_name_must_not_excced_255_characters(){
        // Dados simulados para criar o usuário
        $payload = [
            'name' => str_repeat('a', 256), // Cria uma string com 256 caracteres
            'email' => 'johndoe@example.com',
            'password' => '!Password123',
            'cpf' => '000.000.000-00',
            'phone' => '(53) 99911-2233',
            'user_type' => '1',
        ];
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para name
        $response->assertStatus(422)->assertJsonValidationErrors(['name']);
    }

    public function test_email_is_required(){
        // Dados simulados para criar o usuário
        $payload = [
            'name' => 'John Doe',
            'email' => '',
            'password' => '!Password123',
            'cpf' => '000.000.000-00',
            'phone' => '(53) 99911-2233',
            'user_type' => '1',
        ];
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para email
        $response->assertStatus(422)->assertJsonValidationErrors(['email']);
    }

    public function test_email_is_valid(){
        // Dados simulados para criar o usuário
        $payload = [
            'name' => 'John Doe',
            'email' => 'teste-email',
            'password' => '!Password123',
            'cpf' => '000.000.000-00',
            'phone' => '(53) 99911-2233',
            'user_type' => '1',
        ];
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para email
        $response->assertStatus(422)->assertJsonValidationErrors(['email']);
    }

    public function test_password_must_have_at_least_8_characters(){
        // Dados simulados para criar o usuário
        $payload = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => str_repeat('a', 7),
            'cpf' => '000.000.000-00',
            'phone' => '(53) 99911-2233',
            'user_type' => '1',
        ];
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para password
        $response->assertStatus(422)->assertJsonValidationErrors(['password']);
    }

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
                    'user' => ['id', 'name', 'email', 'created_at', 'updated_at']
                ])
                ->assertJson([
                    'msg' => 'Usuário cadastrado com sucesso',
                    'user' => [
                        'name' => 'John Doe',
                        'email' => 'johndoe@example.com'
                    ]
                ]);

        // Valida que a senha foi armazenada como hash
        $user = User::where('email', 'johndoe@example.com')->first();
        $this->assertTrue(Hash::check('!Password123', $user->password));
    }
}
