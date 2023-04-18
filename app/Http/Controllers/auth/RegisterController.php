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

        $getSiswa = Siswa::where('email', $request->email)->get();
        if ($getSiswa) $validated['siswa_id'] = $getSiswa[0]->getAttributes()['id'];

        User::create($validated);
        return redirect('/login')->with('success', 'Berhasil Registrasi');
    }
}
