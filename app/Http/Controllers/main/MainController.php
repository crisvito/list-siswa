<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.main.welcome', [
            'siswa' => Siswa::where('id', auth()->user()->siswa_id)->get()
        ]);
    }
}
