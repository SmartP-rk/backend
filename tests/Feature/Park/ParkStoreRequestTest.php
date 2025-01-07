<?php

namespace Tests\Feature\Park;

use App\Models\Park;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class ParkStoreRequestTest extends TestCase
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

    private function assertInvalidCNPJ($cnpj): void
    {
        $payload = $this->basePayload;
        $payload['cnpj'] = $cnpj;
        $response = $this->postJson(route('parks.store'), $payload);
        $response->assertStatus(422)
            ->assertJsonValidationErrors(['cnpj' => 'Insira um CNPJ válido. Ex: 00.000.000/0000-00'])
            ->assertJsonCount(1, 'errors');
    }

    public function test_proprietor_is_required(): void{
        $payload = $this->basePayload;
        $payload['proprietor'] = '';
        $response = $this->postJson(route('parks.store'), $payload);
        $response->assertStatus(422)
            ->assertJsonValidationErrors(['proprietor' => 'O campo proprietário é obrigatório'])
            ->assertJsonCount(1, 'errors');
    }

    public function test_proprietor_not_exists(): void{
        $payload = $this->basePayload;
        $payload['proprietor'] = 2;
        $response = $this->postJson(route('parks.store'), $payload);
        $response->assertStatus(422)
            ->assertJsonValidationErrors(['proprietor' => 'O proprietário informado não existe'])
            ->assertJsonCount(1, 'errors');
    }

    public function test_cnpj_is_required(): void{
        $payload = $this->basePayload;
        $payload['cnpj'] = '';
        $response = $this->postJson(route('parks.store'), $payload);
        $response->assertStatus(422)
            ->assertJsonValidationErrors(['cnpj' => 'O campo CNPJ é obrigatório'])
            ->assertJsonCount(1, 'errors');
    }

    public function test_cnpj_is_unique(): void{
        Park::factory()->create([
            'cnpj' => '00.000.000/0000-00'
        ]);
        $payload = $this->basePayload;
        $payload['cnpj'] = '00.000.000/0000-00';
        $response = $this->postJson(route('parks.store'), $payload);
        $response->assertStatus(422)
            ->assertJsonValidationErrors(['cnpj' => 'Insira um CNPJ válido. Ex: 00.000.000/0000-00'])
            ->assertJsonCount(1, 'errors');
    }

    public function test_cnpj_with_incorrect_format_fails(): void
    {
        $invalidFormats = [
            '00000.000/0000-00',
            '00.000000/0000-00',
            '00.000.0000000-00',
            '00.000.000/000000',
            '00000000/0000-00',
            '000000000000-00',
            '00000.0000000-00',
            '00000.000/000000',
            '00.0000000000-00',
            '00.000000/000000',
            '00.000.000000000',
            '00.0000000000-00',
            '00.000.000-0000/00',
            '00.00.000/0000-00',
            '00.000.000/0000',
            '00.000.000/0000-000',
            '000.000.000/0000-00',
            '00000000000000',
            '000000000000000',
        ];
        foreach ($invalidFormats as $cnpj) {
            $this->assertInvalidCNPJ($cnpj,);
        }
    }

    public function test_cnpj_with_non_numeric_characters_fails(): void
    {
        $nonNumeric = [
            'AB.CDE.FGH/IJKL-MN',
            '00.000.000/0000-AA',
            '00.000.000/0000-!@',
        ];
        foreach ($nonNumeric as $cnpj) {
            $this->assertInvalidCNPJ($cnpj);
        }
    }
}
