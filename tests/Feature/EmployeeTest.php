<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Factory as FactoryModel;
use App\Models\Employee;

class EmployeeTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_authenticated_user_can_see_employee_page(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/employees');
        $response->assertStatus(200);
    }

    public function test_authenticated_user_can_add_employee(): void
    {
        $user = User::factory()->create();
        FactoryModel::factory()->create();
        $response = $this->actingAs($user)->post('/employees', [
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'factory_id' => 1
        ]);
        $response->assertRedirect('/employees/create');
        $this->assertDatabaseCount('employees', 1);
    }

    public function test_authenticated_user_can_update_employee(): void
    {
        $user = User::factory()->create();
        FactoryModel::factory()->create();
        $employee = Employee::factory()->create();
        $fakeFirstName = fake()->firstName();
        $response = $this->actingAs($user)->put('/employees/' . $employee->id, [
            'first_name' => $fakeFirstName,
            'last_name' => $employee->last_name,
            'factory_id' => $employee->factory_id
        ]);
        $response->assertRedirect('/employees/' . $employee->id . '/edit');
        $this->assertDatabaseCount('employees', 1);
        $this->assertDatabaseHas('employees', [
            'first_name' =>  $fakeFirstName,
        ]);
    }
}
