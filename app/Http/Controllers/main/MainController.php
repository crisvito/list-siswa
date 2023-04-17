<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.main.welcome');
    }
}
