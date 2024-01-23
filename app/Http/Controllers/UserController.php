<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show paginated view with all users.
     */
    public function index(): View
    {
        return view('users.index', [
            'users' => User::paginate(15),
        ]);
    }
}
