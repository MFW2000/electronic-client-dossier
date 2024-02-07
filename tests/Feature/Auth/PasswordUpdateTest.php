<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use JsonException;
use Tests\TestCase;

class PasswordUpdateTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @throws JsonException
     */
    public function test_password_can_be_updated(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->from('/profile')->put('/password', [
            'current_password' => 'password',
            'password' => '3BwYtJ6?W5xMs90Z',
            'password_confirmation' => '3BwYtJ6?W5xMs90Z',
        ]);

        $response->assertSessionHasNoErrors()->assertRedirect('/profile');
        $this->assertTrue(Hash::check('3BwYtJ6?W5xMs90Z', $user->refresh()->password));
    }

    public function test_correct_password_must_be_provided_to_update_password(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->from('/profile')->put('/password', [
            'current_password' => 'wrong-password',
            'password' => 'new-password',
            'password_confirmation' => 'new-password',
        ]);

        $response->assertSessionHasErrorsIn('updatePassword', 'current_password')->assertRedirect('/profile');
    }
}
