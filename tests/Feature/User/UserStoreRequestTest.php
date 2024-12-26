<?php

namespace Tests\Feature\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Concerns\AssertsStatusCodes;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Http\UploadedFile;

class UserStoreRequestTest extends TestCase
{
    use RefreshDatabase;

    protected $basePayload;

    protected function setUp(): void{
        parent::setUp();
        $this->basePayload = [
            'name' => 'John',
            'surname' => 'Doe',
            'email' => 'johndoe@example.com',
            'password' => '!Password123',
            'cpf' => '000.000.000-00',
            'phone' => '(53) 99911-2233',
            'user_type' => '1',
        ];
    }

    public function test_name_is_required(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['name'] = '';
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica a estrutura e conteúdo da resposta
        $response->assertStatus(422)->assertJsonValidationErrors(['name']);
    }

    public function test_name_must_not_excced_100_characters(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['name'] = str_repeat('a', 101); // Cria uma string com 101 caracteres
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para name
        $response->assertStatus(422)->assertJsonValidationErrors(['name']);
    }

    public function test_name_boundary_100_characters(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['name'] = str_repeat('a', 100); // Cria uma string com 100 caracteres
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 201 (Created) e se a resposta uma msg e o usuário criado
        $response->assertStatus(201)
            ->assertJsonStructure([
                'msg',
                'user' => ['id', 'name', 'email', 'cpf', 'phone', 'user_type']
            ])
            ->assertJson([
                'msg' => 'Usuário cadastrado com sucesso',
                'user' => [
                    'id' => 1,
                    'name' => str_repeat('a', 100),
                    'surname' => 'Doe',
                    'email' => 'johndoe@example.com',
                    'cpf' => '000.000.000-00',
                    'phone' => '(53) 99911-2233',
                    'user_type' => '1',
                ]
            ]);
    }

    public function test_it_fails_validation_for_invalid_names()
    {
        $invalidNames = [
            'John1 Doe',     // Contém número
            'John_Doe',      // Contém underscore
            'John-Doe',      // Contém hífen
            'John@Doe',      // Contém símbolo especial
            '123',           // Apenas números
        ];
        foreach ($invalidNames as $name) {
            $payload = $this->basePayload;
            $payload['name'] = $name;
            $response = $this->postJson(route('users.store'), $payload);
            $response->assertStatus(422)
                ->assertJsonValidationErrors(['name']);
        }
    }

    public function test_it_allow_name_with_letters_and_spaces_only()
    {
        $payload = $this->basePayload;
        $payload['name'] = 'José da Silva';
        $response = $this->postJson(route('users.store'), $payload);
        $response->assertStatus(201)
            ->assertJsonStructure(['msg', 'user']);
    }

    public function test_surname_is_required(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['surname'] = '';
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica a estrutura e conteúdo da resposta
        $response->assertStatus(422)->assertJsonValidationErrors(['surname']);
    }

    public function test_surname_must_not_excced_150_characters(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['surname'] = str_repeat('a', 151); // Cria uma string com 101 caracteres
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para name
        $response->assertStatus(422)->assertJsonValidationErrors(['surname']);
    }

    public function test_surname_boundary_150_characters(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['surname'] = str_repeat('a', 150); // Cria uma string com 150 caracteres
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 201 (Created) e se a resposta uma msg e o usuário criado
        $response->assertStatus(201)
            ->assertJsonStructure([
                'msg',
                'user' => ['id', 'name', 'email', 'cpf', 'phone', 'user_type']
            ])
            ->assertJson([
                'msg' => 'Usuário cadastrado com sucesso',
                'user' => [
                    'id' => 1,
                    'name' => 'John',
                    'surname' => str_repeat('a', 150),
                    'email' => 'johndoe@example.com',
                    'cpf' => '000.000.000-00',
                    'phone' => '(53) 99911-2233',
                    'user_type' => '1',
                ]
            ]);
    }

    public function test_email_is_required(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['email'] = '';
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para email
        $response->assertStatus(422)->assertJsonValidationErrors(['email']);
    }

    public function test_email_is_valid(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['email'] = 'teste-email';
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para email
        $response->assertStatus(422)->assertJsonValidationErrors(['email']);
    }

    public function test_email_is_unique(){
        // Inserindo um usuário com email especifico
        User::factory()->create([
            'email' => 'johndoe@example.com'
        ]);
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para email
        $response->assertStatus(422)->assertJsonValidationErrors(['email' => 'Já existe um usuário cadastrado com esse email']);
    }

    public function test_password_is_required(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['password'] = '';
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para password
        $response->assertStatus(422)->assertJsonValidationErrors(['password' => 'O campo senha é obrigatório']);
    }

    public function test_password_must_have_at_least_8_characters(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['password'] = str_repeat('a', 7);
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para password
        $response->assertStatus(422)->assertJsonValidationErrors(['password']);
    }

    public function test_password_must_have_at_least_one_uppercase_letter(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['password'] = 'password1!';
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para password
        $response->assertStatus(422)->assertJsonValidationErrors(['password' => 'A senha deve ter pelo menos uma letra maiúscula, uma letra minúscula, um número e um caracter especial']);
    }

    public function test_password_must_have_at_laest_one_lowercase_letter(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['password'] = 'PASSWORD1!';
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para password
        $response->assertStatus(422)->assertJsonValidationErrors(['password' => 'A senha deve ter pelo menos uma letra maiúscula, uma letra minúscula, um número e um caracter especial']);
    }

    public function test_password_must_have_at_least_one_number(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['password'] = 'Password!';
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para password
        $response->assertStatus(422)->assertJsonValidationErrors(['password' => 'A senha deve ter pelo menos uma letra maiúscula, uma letra minúscula, um número e um caracter especial']);
    }

    public function test_password_must_have_at_laest_one_special_character(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['password'] = 'Password1';
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para password
        $response->assertStatus(422)->assertJsonValidationErrors(['password' => 'A senha deve ter pelo menos uma letra maiúscula, uma letra minúscula, um número e um caracter especial']);
    }

    public function test_cpf_is_required(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['cpf'] = '';
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para cpf
        $response->assertStatus(422)->assertJsonValidationErrors(['cpf' => 'O campo CPF é obrigatório']);
    }

    public function test_cpf_must_have_minimum_11_characters(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['cpf'] = str_repeat('1', 10);
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para cpf
        $response->assertStatus(422)->assertJsonValidationErrors(['cpf' => 'O CPF deve ter no minímo 11 caracteres']);
    }

    public function test_cpf_must_have_maximum_14_characters(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['cpf'] = str_repeat('1', 15);
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
        $payload = $this->basePayload;
        $payload['cpf'] = '000.000.000-00';
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para cpf
        $response->assertStatus(422)->assertJsonValidationErrors(['cpf' => 'Por favor insira um CPF válido']);
    }

    public function test_cpf_is_valid(){
        $invalidCpfs = [
            '11111111111', // Contém somente números
            '111.111.11111', // Falta -
            '111.111111-11', // Falta . no fim
            '111111.111-11', // Falta . no inicio
            '111.11111111', // Falta . no fim e -
            '111111.11111', // Falta . no inicio e -
            '111111111-11', // Falta os 2 .
            '111.111.111_11', // _ no lugar do -
            '.111.111.111-11', // . no começo
            'aaa.aaa.aaa-aa', // Letras no formato
            'aaa.111.aaa-aa', // Letras com número no formato
        ];
        foreach ($invalidCpfs as $cpf) {
            $payload = $this->basePayload;
            $payload['cpf'] = $cpf;
            $response = $this->postJson(route('users.store'), $payload);
            $response->assertStatus(422)
                ->assertJsonValidationErrors(['cpf' => 'Insira um CPF válido. Ex: 000.000.000-00']);
            $this->assertCount(
                1,
                $response->json('errors'),
                'Existem erros de validação não esperados'
            );
        }
    }

    public function test_phone_is_required(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['phone'] = '';
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para phone
        $response->assertStatus(422)->assertJsonValidationErrors(['phone' => 'O campo telefone é obrigatório']);
    }

    public function test_phone_must_have_minimum_11_characters(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['phone'] = str_repeat('1', 10);
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para phone
        $response->assertStatus(422)->assertJsonValidationErrors(['phone' => 'O telefone deve ter no minímo 11']);
    }

    public function test_phone_must_have_maximum_15_characteres(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['phone'] = str_repeat('1', 16);
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para phone
        $response->assertStatus(422)->assertJsonValidationErrors(['phone' => 'O telefone deve ter no máximo 15']);
    }

    public function test_user_type_is_required(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['user_type'] = '';
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para image
        $response->assertStatus(422)->assertJsonValidationErrors(['user_type' => 'O campo tipo de usuário é obrigatório']);
    }

    public function test_user_type_is_numeric(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['user_type'] = 'a';
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para image
        $response->assertStatus(422)->assertJsonValidationErrors(['user_type' => 'O tipo de usuário deve ser um número']);
    }

    public function test_user_type_must_be_bigger_zero(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['user_type'] = -1;
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para image
        $response->assertStatus(422)->assertJsonValidationErrors(['user_type' => 'O tipo de usuário deve ser entre 0 e 3']);
    }

    public function test_user_type_must_be_minor_four(){
        // Dados simulados para criar o usuário
        $payload = $this->basePayload;
        $payload['user_type'] = 4;
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('users.store'), $payload);
        // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para image
        $response->assertStatus(422)->assertJsonValidationErrors(['user_type' => 'O tipo de usuário deve ser entre 0 e 3']);
    }
}
