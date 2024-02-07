<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show sortable paginated view with all users.
     */
    public function index(): View
    {
        return view('users.index', [
            'users' => User::sortable()->paginate(10),
        ]);
    }

    /**
     * Show create new user form view.
     */
    public function create(): View
    {
        return view('users.create');
    }

    /**
     * Store a new user.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'string',
                'email:rfc,dns',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => [
                'required',
                'confirmed',
                Password::defaults(),
            ],
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        event(new Registered($user));

        return redirect()->route('users.index')->with('success', __('users.status.user_created'));
    }

    /**
     * Show update user form view.
     */
    public function edit(int $id): View
    {
        return view('users.edit', [
            'user' => User::findOrFail($id),
        ]);
    }

    /**
     * Update the selected user's account.
     */
    public function update(int $id, Request $request): RedirectResponse
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'string',
                'email:rfc,dns',
                'max:255',
                Rule::unique(User::class)->ignore($user->id),
            ],
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return redirect()->route('users.index')->with('success', __('users.status.user_updated'));
    }

    /**
     * Delete the selected user's account.
     */
    public function destroy(int $id): RedirectResponse
    {
        if ($id === Auth::user()->id) {
            return redirect()->route('users.index')->with('error', __('users.status.cannot_self_delete'));
        }

        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('users.index')->with('success', __('users.status.user_deleted'));
    }
}
