<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController; // Make sure it extends BaseController

class Controller extends BaseController // This is the crucial line
{
    use AuthorizesRequests, ValidatesRequests;
}
