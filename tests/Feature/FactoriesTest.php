<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Factory as FactoryModel;

class FactoriesTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_user_can_see_factories_page(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/factories');

        $response->assertStatus(200);
    }

    public function test_authenticated_user_can_add_factory(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('/factories', [
            'factory_name' => 'required',
            'location' => 'required'
        ]);
        $response->assertStatus(200);
        $this->assertDatabaseCount('factories', 1);
    }

    public function test_authenticated_user_can_update_factory(): void
    {
        $user = User::factory()->create();
        $factory = FactoryModel::factory()->create();
        $response = $this->actingAs($user)->put('/factories/' . $factory->id, [
            'factory_name' => 'required',
            'location' => 'required'
        ]);

        $response->dump();
        $this->assertDatabaseCount('factories', 1);
        $this->assertDatabaseHas('factories', [
            'factory_name' => 'required',
        ]);
    }
}
