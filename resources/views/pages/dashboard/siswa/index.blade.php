@extends('layouts.admin')
@section('title', 'Welcome')

@section('container')

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex items-center justify-between bg-white">
            @if (session('success'))
                <div class="fixed z-10 bottom-5 right-5 p-4 mb-5 text-lg text-green-800 rounded-lg bg-green-200">
                    <span class="font-medium">Berhasil. </span>
                    {{ session('success') }}
                </div>
            @endif
            <form action="/" class="relative" method="GET">
                <input type="text" id="table-search-users"
                    class="block p-2 text-sm text-gray-900 border border-gray-300 rounded-lg w-96 bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Cari Data siswa ( nis, nama, email, jurusan, mobile )" name="s"
                    value={{ request('s') }}>
                <button class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <div class="mb-4">
            {{ $siswa->links() }}
        </div>
        <table class="w-full text-sm text-left">
            <thead class="text-xs text-white uppercase bg-gray-700">
                <tr>
                    <th scope="col" class="px-6 py-3">Nama</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Nis</th>
                    <th scope="col" class="px-6 py-3">Jurusan</th>
                    <th scope="col" class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $item)
                    <tr class="list_siswa bg-white border-b text-gray-500 border-gray-400 hover:bg-gray-200">
                        <th scope="row" class="flex items-center px-5 py-4 text-gray-900">
                            <img class="w-10 h-10 rounded-full" src={{ asset('siswa-images/' . $item->avatar) }}
                                alt={{ $item->full_name }}>
                            <span class="text-base pl-2 flex">
                                {!! join('<br/>', [$item->first_name, $item->last_name]) !!}

                            </span>
                        </th>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->nis }}</td>
                        <td>{{ $item->jurusan }}</td>
                        <td>
                            <a href={{ route('siswa.edit', $item->slug) }}
                                class="font-medium text-blue-600 hover:underline border-r border-blue-900 pr-2 pl-1">
                                Ubah
                            </a>
                            <button data-modal-target="defaultModal{{ $item->nis }}"
                                data-modal-toggle="defaultModal{{ $item->nis }}"
                                class="font-medium text-amber-600 hover:underline border-r border-amber-900 pr-2 pl-1">
                                Detail
                            </button>

                            <form action={{ route('siswa.destroy', $item->slug) }} method="POST" class="inline-flex">
                                @method('delete')
                                @csrf
                                <button class=".show_confirm font-medium text-red-600 hover:underline pl-1 inline"
                                    onclick="deleteConfirm(event)">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @include('pages.dashboard.siswa.show', ['siswa' => $item])
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-5">
        {{ $siswa->links() }}
    </div>



@endsection
