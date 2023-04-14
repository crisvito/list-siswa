<?php


namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\siswa\StoreSiswaRequest;
use App\Http\Requests\siswa\UpdateSiswaRequest;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('pages.dashboard.siswa.index', [
            'siswa' => Siswa::latest()->filter(request('s'))->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSiswaRequest $request)
    {
        $validated = $request->validated();

        if ($request->file('avatar')) {
            $oriName = $request->file('avatar')->getClientOriginalName();
            $validated['avatar'] = md5(time()) . preg_replace('/\s+/', '', $oriName);
            $request->avatar->move(public_path('siswa-images'), $validated['avatar']);
        } else $validated['avatar'] = 'avatar.jpg';

        $name = strtolower($validated["first_name"] . "-" . $validated["last_name"]);
        $validated["slug"] = "$name-" . $validated['nis'];
        $validated['full_name'] = $validated["first_name"] . " " . $validated["last_name"];


        Siswa::create($validated);
        return redirect('/siswa')->with('success', 'Telah Menambah Data Siswa');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        return view('pages.dashboard.siswa.edit', [
            'siswa' => $siswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiswaRequest $request, Siswa $siswa)
    {

        $validated = $request->validated();

        if ($request->file('avatar')) {
            if ($siswa->getOriginal()['avatar'] !== 'avatar.jpg') {
                unlink("siswa-images/" . $siswa->getOriginal()['avatar']);
            }
            $oriName = $request->file('avatar')->getClientOriginalName();
            $validated['avatar'] = md5(time()) . preg_replace('/\s+/', '', $oriName);
            $request->avatar->move(public_path('siswa-images'), $validated['avatar']);
        }

        $name = strtolower($validated["first_name"] . "-" . $validated["last_name"]);
        $validated["slug"] = "$name-" . $validated['nis'];
        $validated['full_name'] = $validated["first_name"] . " " . $validated["last_name"];


        Siswa::where('id', $siswa->id)->update($validated);
        return redirect('/siswa')->with('success', 'Telah Mengubah Data Siswa');
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
        return redirect('/siswa')->with('success', 'Data Siswa Telah Dihapus');
    }
}
