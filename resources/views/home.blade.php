@extends('Layouts.main')
@section('title', 'Welcome')

@section('container')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex items-center justify-between pb-4 bg-white dark:bg-gray-900">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <input type="text" id="table-search-users"
                    class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search for siswa">
            </div>
        </div>
        <table class="w-full text-sm text-left">
            <thead class="text-xs text-white uppercase bg-gray-700">
                <tr>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Nis</th>
                    <th scope="col" class="px-6 py-3">Jurusan</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $item)
                    <tr class="list_siswa bg-white border-b text-gray-500 border-gray-400 hover:bg-gray-200">
                        <th scope="row"
                            class="flex items-center px-5 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-10 h-10 rounded-full" src={{ 'siswa-images/' . $item->avatar }} alt="">
                            <span class="text-base pl-2 flex">
                                {!! join('<br/>', [$item->first_name, $item->last_name]) !!}

                            </span>
                        </th>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->mobile }}</td>
                        <td>{{ $item->jurusan }}</td>
                        <td>
                            <a href="#"
                                class="font-medium text-blue-600 hover:underline border-r border-blue-900 pr-2 pl-1">Edit</a>
                            <a href="#"
                                class="font-medium text-amber-600 hover:underline border-r border-amber-900 pr-2 pl-1">Detail</a>
                            <a href="#" class="font-medium text-red-600 hover:underline pl-1">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
