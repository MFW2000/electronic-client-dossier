<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * Controller that serves as the base controller for all controllers in the application.
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
