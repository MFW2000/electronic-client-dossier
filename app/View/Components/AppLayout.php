<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

/**
 * Component for the app layout
 */
class AppLayout extends Component
{
    /**
     * Get the view/contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.app');
    }
}
