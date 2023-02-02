<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {
        // imagine we loaded data from the database
        $ourName = 'Ely';
        $animals = ['Meowsalot', 'Barksalot', 'Purrsloud'];

        return view('homepage', ['allAnimals' => $animals, 'name' => $ourName, 'catname' => 'Meowsalot']);
    }

    public function aboutpage() {
        return '<h1>About Page!!!</h1><a href="/">Back to Home</a>';
    }
}
