<?php

namespace Tests\Feature\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Concerns\AssertsStatusCodes;
use Tests\TestCase;
use App\Models\User;

class UserStoreRequestTest extends TestCase
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

    public function test_password_is_required(){
        // Dados simulados para criar o usuário
        $payload = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => '',
            'cpf' => '000.000.000-00',
            'phone' => '(53) 99911-2233',
            'user_type' => '1',
        ];
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para password
        $response->assertStatus(422)->assertJsonValidationErrors(['password' => 'O campo senha é obrigatório']);
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

    public function test_password_must_have_at_least_one_uppercase_letter(){
        // Dados simulados para criar o usuário
        $payload = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password1!',
            'cpf' => '000.000.000-00',
            'phone' => '(53) 99911-2233',
            'user_type' => '1',
        ];
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para password
        $response->assertStatus(422)->assertJsonValidationErrors(['password' => 'A senha deve ter pelo menos uma letra maiúscula, uma letra minúscula, um número e um caracter especial']);
    }

    public function test_password_must_have_at_laest_one_lowercase_letter(){
        // Dados simulados para criar o usuário
        $payload = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'PASSWORD1!',
            'cpf' => '000.000.000-00',
            'phone' => '(53) 99911-2233',
            'user_type' => '1',
        ];
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para password
        $response->assertStatus(422)->assertJsonValidationErrors(['password' => 'A senha deve ter pelo menos uma letra maiúscula, uma letra minúscula, um número e um caracter especial']);
    }

    public function test_password_must_have_at_least_one_number(){
        // Dados simulados para criar o usuário
        $payload = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'Password!',
            'cpf' => '000.000.000-00',
            'phone' => '(53) 99911-2233',
            'user_type' => '1',
        ];
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para password
        $response->assertStatus(422)->assertJsonValidationErrors(['password' => 'A senha deve ter pelo menos uma letra maiúscula, uma letra minúscula, um número e um caracter especial']);
    }

    public function test_password_must_have_at_laest_one_special_character(){
        // Dados simulados para criar o usuário
        $payload = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'Password1',
            'cpf' => '000.000.000-00',
            'phone' => '(53) 99911-2233',
            'user_type' => '1',
        ];
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para password
        $response->assertStatus(422)->assertJsonValidationErrors(['password' => 'A senha deve ter pelo menos uma letra maiúscula, uma letra minúscula, um número e um caracter especial']);
    }

    public function test_cpf_is_required(){
        // Dados simulados para criar o usuário
        $payload = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'Password1!',
            'cpf' => '',
            'phone' => '(53) 99911-2233',
            'user_type' => '1',
        ];
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para cpf
        $response->assertStatus(422)->assertJsonValidationErrors(['cpf' => 'O campo CPF é obrigatório']);
    }

    public function test_cpf_must_have_minimum_11_characters(){
        // Dados simulados para criar o usuário
        $payload = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'Password1!',
            'cpf' => str_repeat('1', 10),
            'phone' => '(53) 99911-2233',
            'user_type' => '1',
        ];
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para cpf
        $response->assertStatus(422)->assertJsonValidationErrors(['cpf' => 'O CPF deve ter no minímo 11 caracteres']);
    }

    public function test_cpf_must_have_maximum_14_characters(){
        // Dados simulados para criar o usuário
        $payload = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'Password1!',
            'cpf' => str_repeat('1', 15),
            'phone' => '(53) 99911-2233',
            'user_type' => '1',
        ];
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para cpf
        $response->assertStatus(422)->assertJsonValidationErrors(['cpf' => 'O CPF deve ter no máximo 14 caracteres']);
    }

    public function test_cpf_is_unique(){
        // Inserindo um usuário com CPF especifico
        User::factory()->create([
            'cpf' => '000.000.000-00'
        ]);
        // Dados simulados para criar o usuário
        $payload = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'Password1!',
            'cpf' => '000.000.000-00',
            'phone' => '(53) 99911-2233',
            'user_type' => '1',
        ];
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para cpf
        $response->assertStatus(422)->assertJsonValidationErrors(['cpf' => 'Por favor insira um CPF válido']);
    }

    public function test_phone_is_required(){
        // Dados simulados para criar o usuário
        $payload = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'Password1!',
            'cpf' => '000.000.000-00',
            'phone' => '',
            'user_type' => '1',
        ];
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para phone
        $response->assertStatus(422)->assertJsonValidationErrors(['phone' => 'O campo telefone é obrigatório']);
    }

    public function test_phone_must_have_minimum_11_characters(){
        // Dados simulados para criar o usuário
        $payload = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'Password1!',
            'cpf' => '000.000.000-00',
            'phone' => str_repeat('1', 10),
            'user_type' => '1',
        ];
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para phone
        $response->assertStatus(422)->assertJsonValidationErrors(['phone' => 'O telefone deve ter no minímo 11']);
    }
}
