@extends('layouts.main')
@section('title', 'Register')

@section('container')
    <div class="flex min-h-full w-full justify-center py-24 bg-gray-100">
        <div class="w-96 max-w-md space-y-8 shadow border pt-10 pb-7 px-5 rounded-lg shadow-2xl bg-white">
            <div>
                <img class="mx-auto h-16 w-auto" src={{ asset('./assets/baslogoo.png') }} alt="BAS">
                <h2 class="mt-6 text-center text-xl font-bold tracking-wide text-gray-900">Registrasi Akun Terlebih Dahulu
                </h2>
            </div>
            <form class="login mt-8 space-y-6 flex flex-col" action="/register" method="POST">
                @csrf
                <div class="space-y-6">
                    <div>
                        <input id="email" name="email" type="email" placeholder="Email" value={{ old('email') }}>
                        @error('email')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <input id="password" name="password" type="password" placeholder="Password">
                        @error('password')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <input id="passwordConfirm" name="password_confirm" type="password" placeholder="password Confirm">
                        @error('password_confirm')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center justify-end">
                    <span class="text-sm">
                        Sudah Daftar ?
                        <a href="/login" class="font-medium text-indigo-600 hover:text-indigo-500">
                            Login Sekarang
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
