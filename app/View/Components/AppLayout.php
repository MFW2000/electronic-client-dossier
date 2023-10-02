<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

// TODO: Check if these are needed because there is no guest view except for the auth pages
class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.app');
    }
}
