<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {
        return '<h1>Homepage!!!</h1><a href="/about">View the About Page</a>';
    }

    public function aboutpage() {
        return '<h1>About Page!!!</h1><a href="/">Back to Home</a>';
    }
}
