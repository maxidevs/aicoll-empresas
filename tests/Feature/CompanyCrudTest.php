<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Company;

class CompanyCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_create_a_company()
    {
        $data = [
            'name' => 'Empresa Test',
            'address' => 'Calle 123',
            'phone' => '123456789',
            'nit' => '900123456',
        ];

        $response = $this->postJson(route('companies.store'), $data);
        $response->assertStatus(200)
            ->assertJson([
                'success' => true,
                'message' => 'Empresa creada correctamente',
            ]);
        $this->assertDatabaseHas('companies', [
            'name' => 'Empresa Test',
            'nit' => '900123456',
        ]);
    }

    public function test_user_cannot_create_company_with_duplicate_nit()
    {
        Company::factory()->create(['nit' => '900123456']);
        $data = [
            'name' => 'Empresa Duplicada',
            'address' => 'Calle 456',
            'phone' => '987654321',
            'nit' => '900123456',
        ];
        $response = $this->postJson(route('companies.store'), $data);
        $response->assertStatus(409)
            ->assertJson([
                'success' => false,
                'message' => 'Ya existe una empresa con el NIT ingresado',
            ]);
    }

    public function test_user_can_update_a_company()
    {
        $company = Company::factory()->create();
        $data = [
            'name' => 'Empresa Actualizada',
            'address' => 'Nueva Calle',
            'phone' => '555555555',
            'active' => true,
        ];
        $response = $this->putJson(route('companies.update', $company), $data);
        $response->assertStatus(200)
            ->assertJson([
                'success' => true,
                'message' => 'Empresa actualizada correctamente',
            ]);
        $this->assertDatabaseHas('companies', [
            'id' => $company->id,
            'name' => 'Empresa Actualizada',
        ]);
    }

    public function test_user_can_delete_a_company()
    {
        $company = Company::factory()->create(['active' => false]);
        $response = $this->deleteJson(route('companies.destroy', $company));
        $response->assertStatus(200)
            ->assertJson([
                'success' => true,
                'message' => 'Empresa eliminada correctamente',
            ]);
        $this->assertDatabaseMissing('companies', [
            'id' => $company->id,
        ]);
    }
    public function test_user_cannot_delete_a_company_which_is_active()
    {
        $company = Company::factory()->create();
        $response = $this->deleteJson(route('companies.destroy', $company));
        $response->assertStatus(409)
            ->assertJson([
                'success' => false,
                'message' => 'La empresa no puede ser eliminada porque está activa',
            ]);
        $this->assertDatabaseHas('companies', [
            'id' => $company->id,
        ]);
    }
}
