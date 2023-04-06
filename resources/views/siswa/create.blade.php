@extends('Layouts.main')
@section('title', 'Create')

@section('container')
    <h1 class="font-medium text-sm sm:text-xl pb-3">
        Tambah Data Siswa
    </h1>
    <form method="POST" action={{ route('siswas.store') }} enctype="multipart/form-data"
        class="form_input w-full md:w-3/4 border-2 border-slate-300 p-5 rounded-lg shadow-2xl tracking-wide">
        @csrf
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="input_data relative z-0 w-full mb-6 group">
                <input type="text" name="nis" id="nis" class="peer" placeholder=" "
                    value="{{ old('nis') }}" />
                <label for="nis"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">NIS</label>
                @error('nis')
                    <p class="text-[10px] text-red-900 font-bold pt-1 uppercase ">{{ $message }}</p>
                @enderror
            </div>

            <div class="input_data relative z-0 w-full mb-6 group">
                <input type="text" name="jurusan" id="jurusan" class="peer" placeholder=" "
                    value="{{ old('jurusan') }}" />
                <label for="jurusan"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jurusan</label>
                @error('jurusan')
                    <p class="text-[10px] text-red-900 font-bold pt-1 uppercase ">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="input_data relative z-0 w-full mb-6 group">
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="peer" placeholder=" "
                    value="{{ old('tempat_lahir') }}" />
                <label for="tempat_lahir"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tempat
                    Lahir</label>
                @error('tempat_lahir')
                    <p class="text-[10px] text-red-900 font-bold pt-1 uppercase ">{{ $message }}</p>
                @enderror
            </div>
            <div class="relative z-0 w-full group">
                <div class="relative max-w-sm">
                    <input type="date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Select date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                </div>
                @error('tanggal_lahir')
                    <p class="text-[10px] text-red-900 font-bold pt-1 uppercase ">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="input_data relative z-0 w-full mb-6 group">
                <input type="email" name="email" id="email" class="peer" placeholder=" "
                    value="{{ old('email') }}" />
                <label for="email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                @error('email')
                    <p class="text-[10px] text-red-900 font-bold pt-1 uppercase ">{{ $message }}</p>
                @enderror
            </div>
            <div class="input_data relative z-0 w-full mb-6 group">
                <input type="number" name="mobile" id="mobile" class="peer" placeholder=" " min="0"
                    value="{{ old('mobile') }}">
                <label for="mobile"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No
                    Telepon</label>
                @error('mobile')
                    <p class="text-[10px] text-red-900 font-bold pt-1 uppercase ">{{ $message }}</p>
                @enderror
            </div>

        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="input_data relative z-0 w-full mb-6 group">
                <input type="text" name="first_name" id="first_name" class="peer" placeholder=" "
                    value="{{ old('first_name') }}" />
                <label for="first_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                    Depan</label>
                @error('first_name')
                    <p class="text-[10px] text-red-900 font-bold pt-1 uppercase ">{{ $message }}</p>
                @enderror
            </div>
            <div class="input_data relative z-0 w-full mb-6 group">
                <input type="text" name="last_name" id="last_name" class="peer" placeholder=" "
                    value="{{ old('last_name') }}" />
                <label for="last_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                    Belakang <span class="text-xs">* opsional</span></label>
                @error('last_name')
                    <p class="text-[10px] text-red-900 font-bold pt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="input_file relative z-0 w-full mb-6 group">
            <label class="block text-sm text-gray-800 pb-1 pl-1" for="avatar">Foto Avatar<span class="text-xs">*
                    opsional</span></label>
            <input id="avatar" type="file" value="{{ old('avatar') }}" name="avatar" onchange="getImg(event)">
            @error('avatar')
                <p class="text-[10px] text-red-900 font-bold pt-1 uppercase ">{{ $message }}</p>
            @enderror
        </div>
        <div class="input_file relative z-0 w-full mb-6 group">
            <img src={{ asset('siswa-images/avatar.jpg') }} alt="avatar" class="img-pre w-24 h-24 rounded-2xl">
        </div>

        <button type="submit">Tambah Siswa</button>
    </form>
@endsection
