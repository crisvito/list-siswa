@extends('layouts.main')
@section('title', 'Welcome')

@section('container')
    <div>
        <div class="px-4 sm:px-0">
            <h3 class="text-base font-semibold leading-7 text-gray-900">
                Data Anda
            </h3>
            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">
                Detail Data siswa disekolah
            </p>
        </div>
        <div class="mt-6 border-t border-gray-300">
            <dl class="divide-y divide-gray-300">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">
                        Gambar Profil
                    </dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <img src={{ asset('siswa-images/' . $siswa[0]->avatar) }} alt={{ $siswa[0]->full_name }}
                            class="w-20 rounded">
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">
                        Nomor Induk Siswa
                    </dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        {{ $siswa[0]->nis }}
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">
                        Nama Lengkap
                    </dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        {{ $siswa[0]->full_name }}
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">
                        Alamat Email
                    </dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        {{ $siswa[0]->email }}
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">
                        Jurusan
                    </dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        {{ $siswa[0]->jurusan }}
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">
                        Tempat & Tanggal lahir
                    </dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        {{ $siswa[0]->tempat_lahir }}, {{ $siswa[0]->tanggal_lahir }}
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">
                        Nomor Telefon
                    </dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        {{ $siswa[0]->mobile }}
                    </dd>
                </div>
            </dl>
        </div>
    </div>
@endsection
