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
            'email' => 'johndoe@example.com',
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
            ->assertJsonValidationErrors(['email' => 'O campo email é obritório']);
    }
}
