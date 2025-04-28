<?php

namespace Tests\Feature\Park;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class ParkControllerTest extends TestCase
{
    use RefreshDatabase;

    protected $basePayload;
    protected $user;

    protected function setUp(): void{
        parent::setUp();
        $this->user = User::factory()->create();
        $this->basePayload = [
            'proprietor' => $this->user->id,
            'cnpj' => '00.000.000/0000-00',
            'name' => 'Estacionamento de Teste',
            'phone' => '(53) 99937-5038',
            'zcode' => '00000-000',
            'state' => 'RS',
            'city' => 'Porto Alegre',
            'neighborhood' => 'Porto',
            'street' => 'Rua Marechal Deodoró',
            'number' => 220,
            'complement' => '',
            'vacancy_count' => 20,
            'image' => ''
        ];
        Sanctum::actingAs($this->user);
    }

    // public function test_create_park_returns_correct_json(): void{

    // }
}
