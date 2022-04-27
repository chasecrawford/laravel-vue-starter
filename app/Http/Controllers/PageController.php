<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function homepage() : View
    {
        return view('app', [
            'primary_component' => 'homepage',
            'data' => []
        ]);
    }

    public function login() : View
    {
        return view('app', [
            'primary_component' => 'login',
            'data' => []
        ]);
    }

    public function register() : View
    {
        return view('app', [
            'primary_component' => 'register',
            'data' => []
        ]);
    }
}
