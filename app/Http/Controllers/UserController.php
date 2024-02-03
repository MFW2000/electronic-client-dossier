<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
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
