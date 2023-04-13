<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;
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
            'siswa' => Siswa::latest()->filter(request('s'))->paginate(5)
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
    public function store(StoreSiswaRequest $request)
    {
        $validation = $request->validated();

        if ($request->file('avatar')) {
            $oriName = $request->file('avatar')->getClientOriginalName();
            $validation['avatar'] = md5(microtime()) . preg_replace('/\s+/', '', $oriName);
            $request->avatar->move(public_path('siswa-images'), $validation['avatar']);
        } else $validation['avatar'] = 'avatar.jpg';

        $name = strtolower($validation["first_name"] . "-" . $validation["last_name"]);
        $validation["slug"] = "$name-" . $validation['nis'];
        $validation['full_name'] = $validation["first_name"] . " " . $validation["last_name"];


        Siswa::create($validation);
        return redirect('/')->with('success', 'Telah Menambah Data Siswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        return view('siswa.show', [
            'siswa' => $siswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', [
            'siswa' => $siswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiswaRequest $request, Siswa $siswa)
    {

        $validation = $request->validated();

        if ($request->file('avatar')) {
            if ($siswa->getOriginal()['avatar'] !== 'avatar.jpg') {
                unlink("siswa-images/" . $siswa->getOriginal()['avatar']);
            }
            $oriName = $request->file('avatar')->getClientOriginalName();
            $validation['avatar'] = md5(microtime()) . preg_replace('/\s+/', '', $oriName);
            $request->avatar->move(public_path('siswa-images'), $validation['avatar']);
        }

        $name = strtolower($validation["first_name"] . "-" . $validation["last_name"]);
        $validation["slug"] = "$name-" . $validation['nis'];
        $validation['full_name'] = $validation["first_name"] . " " . $validation["last_name"];


        Siswa::where('id', $siswa->id)->update($validation);
        return redirect('/')->with('success', 'Telah Mengubah Data Siswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        if ($siswa->getOriginal()['avatar'] !== 'avatar.jpg') {
            unlink("siswa-images/" . $siswa->getOriginal()['avatar']);
        }

        Siswa::destroy($siswa->id);
        return redirect('/')->with('success', 'Data Siswa Telah Dihapus');
    }
}
