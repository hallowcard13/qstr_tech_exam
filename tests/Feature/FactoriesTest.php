<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class FactoriesTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_authenticated_user_can_see_factories_page(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/factories');

        $response->assertStatus(200);
    }
}
