<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function __invoke()
    {
        return view('categories.index');
    }
}
