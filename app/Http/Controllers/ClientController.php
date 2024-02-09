<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * Show create new client form view.
     */
    public function create(): View
    {
        return view('clients.create');
    }
}
