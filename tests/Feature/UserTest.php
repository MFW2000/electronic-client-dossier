<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_page_is_displayed(): void
    {
        $user = User::factory()->admin()->create();

        $response = $this->actingAs($user)->get('/users');

        $response->assertOk();
    }
}
