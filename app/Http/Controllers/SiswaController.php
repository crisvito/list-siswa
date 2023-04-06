<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home', [
            'siswa' => Siswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'nis' => 'required|unique:siswas|digits:8',
            'jurusan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required|unique:siswas|email',
            'first_name' => 'required',
            'last_name' => 'nullable',
            'mobile' => 'required|min:10|max:13',
            'avatar' => 'image|file|max:5000',
        ]);

        if ($request->file('avatar')) {
            $fileName = preg_replace('/\s+/', '', $request->file('avatar')->getClientOriginalName());
            $validation['avatar'] = md5(microtime()) . '_' . $fileName;
            $request->avatar->move(public_path('siswa-images'), $validation['avatar']);
        } else $validation['avatar'] = 'avatar.jpg';

        $name = $validation["first_name"] . $validation["last_name"];
        $validation["slug"] = "$name-" . $validation['nis'];


        Siswa::create($validation);
        return redirect('/')->with('success', 'Telah Menambah Data Siswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
