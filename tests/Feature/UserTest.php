<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_page_is_displayed(): void
    {
        $admin = User::factory()->admin()->create();

        $response = $this->actingAs($admin)->get('/users');

        $response->assertOk();
    }

    public function test_user_can_be_deleted(): void
    {
        $admin = User::factory()->admin()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($admin)->delete('/users/'.$user->id);

        $response->assertSessionHasNoErrors()->assertRedirect('/users');
        $response->assertSessionHas('success');

        $this->assertNull(User::find($user->id));
    }

    public function test_deleting_nonexistent_user_throws_404(): void
    {
        $admin = User::factory()->admin()->create();

        $response = $this->actingAs($admin)->delete('/users/420');

        $response->assertNotFound();
    }

    public function test_user_cannot_self_delete(): void
    {
        $admin = User::factory()->admin()->create();

        $response = $this->actingAs($admin)->delete('/users/'.$admin->id);

        $response->assertSessionHasNoErrors()->assertRedirect('users');
        $response->assertSessionHas('error');

        $this->assertNotNull(User::find($admin->id));
    }

    public function test_create_user_page_is_displayed(): void
    {
        $admin = User::factory()->admin()->create();

        $response = $this->actingAs($admin)->get('/users/create');

        $response->assertOk();
    }

    public function test_user_can_be_created(): void
    {
        $admin = User::factory()->admin()->create();

        $response = $this->actingAs($admin)->post('/users', [
            'name' => 'Test User',
            'email' => 'test@gmail.com',
            'password' => '3BwYtJ6?W5xMs90Z',
            'password_confirmation' => '3BwYtJ6?W5xMs90Z',
        ]);

        $response->assertSessionHasNoErrors()->assertRedirect('/users');
        $response->assertSessionHas('success');

        $user = User::firstWhere('email', 'test@gmail.com');

        Log::info($user->password);

        $this->assertNotNull($user);
        $this->assertNull($user->email_verified_at);
        $this->assertNull($user->remember_token);
        $this->assertFalse($user->is_admin);
    }
}
