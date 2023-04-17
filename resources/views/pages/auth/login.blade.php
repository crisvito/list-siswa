@extends('layouts.main')
@section('title', 'Login')

@section('container')
    <div class="flex min-h-full w-full justify-center py-24 bg-gray-100">
        <div class="w-96 max-w-md space-y-8 shadow border pt-10 pb-7 px-5 rounded-lg shadow-2xl bg-white">
            @if (session('success'))
                <div class="fixed z-[100] top-20 left-5 p-4 mb-5 text-lg text-green-800 rounded-lg bg-green-200">
                    <span class="font-medium">Berhasil. </span>
                    {{ session('success') }}
                </div>
            @endif
            @if (session('loginFailed'))
                <div class="fixed z-[100] top-20 left-5 p-4 mb-5 text-lg text-red-800 rounded-lg bg-red-200">
                    <span class="font-medium">Berhasil. </span>
                    {{ session('loginFailed') }}
                </div>
            @endif
            <div>
                <img class="mx-auto h-16 w-auto" src={{ asset('./assets/baslogoo.png') }} alt="BAS">
                <h2 class="mt-6 text-center text-xl font-bold tracking-wide text-gray-900">Login Akun Terlebih Dahulu</h2>
            </div>
            <form class="login mt-8 space-y-6 flex flex-col" action="/login" method="POST">
                @csrf
                <div class="space-y-6">
                    <div>
                        <input id="email" name="email" type="email" placeholder="Email" value={{ old('email') }}>
                        @error('email')
                            <p class="error"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div>
                        <input id="password" name="password" type="password" placeholder="Password">
                        @error('password')
                            <p class="error"> {{ $message }} </p>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center justify-end">
                    <span class="text-sm">
                        Belum Daftar ?
                        <a href="/register" class="font-medium text-indigo-600 hover:text-indigo-500">
                            Daftar Sekarang
                        </a>
                    </span>
                </div>
                <div class="self-end">
                    <button type="submit"
                        class="group relative flex w-28 justify-center rounded bg-indigo-600 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
