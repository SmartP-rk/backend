<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginRequestTest extends TestCase
{
    protected $basePayload;

    protected function setUp(): void{
        parent::setUp();
        $this->basePayload = [
            'email' => 'johndoe@gmail.com',
            'password' => '!Password123',
        ];
    }

    public function test_email_is_required(){
        // Dados simulados para realizar login
        $payload = $this->basePayload;
        $payload['email'] = '';
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('user.login'), $payload);
        // Verifica a estrutura e conteúdo da resposta
        $response->assertStatus(422)
            ->assertJsonValidationErrors(['email' => 'O campo email é obrigatório']);
    }

    public function test_email_is_valid(){
        $invalidEmails = [
            'teste@emailcom', // Sem dominio
            'testeemail.com', // Sem @
        ];
        foreach($invalidEmails as $email){
            // Dados simulados para realizar login
            $payload = $this->basePayload;
            $payload['email'] = $email;
            // Chama a rota users do método login com os dados
            $response = $this->postJson(route('user.login'), $payload);
            // Verifica se o status da resposta é 422 (Unprocessable Entity) e se a resposta contém o erro de validação para email
            $response->assertStatus(422)
                ->assertJsonValidationErrors(['email' => 'Por favor insira um email válido']);
            //Garante que não existem outros erros no JSON
            $this->assertCount(
                1,
                $response->json('errors'),
                'Existem erros de validação não esperados'
            );
        }
    }

    public function test_password_is_required(){
        // Dados simulados para realizar login
        $payload = $this->basePayload;
        $payload['password'] = '';
        // Chama a rota users do método store com os dados
        $response = $this->postJson(route('user.login'), $payload);
        // Verifica a estrutura e conteúdo da resposta
        $response->assertStatus(422)
            ->assertJsonValidationErrors(['password' => 'O campo senha é obrigatório']);
        //Garante que não existem outros erros no JSON
        $this->assertCount(
            1,
            $response->json('errors'),
            'Existem erros de validação não esperados'
        );
    }

    public function test_password_is_string(){
        $invalidPasswords = [
            1,
            1.5,
            true,
        ];
        foreach($invalidPasswords as $password){
            // Dados simulados para realizar login
            $payload = $this->basePayload;
            $payload['password'] = $password;
            // Chama a rota users do método login com os dados
            $response = $this->postJson(route('user.login'), $payload);
            // Verifica a estrutura e conteúdo da resposta
            $response->assertStatus(422)
                ->assertJsonValidationErrors(['password' => 'A senha deve ser uma string']);
            //Garante que não existem outros erros no JSON
            $this->assertCount(
                1,
                $response->json('errors'),
                'Existem erros de validação não esperados'
            );
        }
    }
}
