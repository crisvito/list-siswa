<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\auth\RegisterRequest;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.auth.register');
    }
    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();

        $validated['password'] = bcrypt($validated['password']);


        $user = User::create($validated);

        Siswa::where('email', $request->email)->update(['user_id' => $user->id]);
        return redirect('/login')->with('success', 'Berhasil Registrasi');
    }
}
