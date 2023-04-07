<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function homepage() : View
    {
        return view('app', [
            'primary_component' => 'homepage',
            'input' => []
        ]);
    }

    public function login() : View
    {
        return view('app', [
            'primary_component' => 'login',
            'input' => []
        ]);
    }

    public function register() : View
    {
        return view('app', [
            'primary_component' => 'register',
            'input' => []
        ]);
    }
}
