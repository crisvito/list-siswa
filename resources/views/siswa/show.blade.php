<!-- Main modal -->
<div id="defaultModal{{ $siswa->nis }}" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-5 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 pb-3 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Detail Data Siswa
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                    data-modal-hide="defaultModal{{ $siswa->nis }}">
                    <i class="fa-solid fa-x"></i>
                </button>
            </div>
            <div class="detail overflow-hidden border shadow-2xl rounded-b-lg">
                <div class="border-t border-gray-200">
                    <dl class="flex w-full">
                        <div class="bg-white px-10 py-5">
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                                <img src={{ asset('siswa-images/' . $siswa->avatar) }} alt={{ $siswa->full_name }}
                                    class="w-24 rounded-lg">
                            </dd>
                        </div>
                        <div class="list_data">
                            <div>
                                <dt>Nama Lengkap</dt>
                                <dd>{{ $siswa->full_name }}
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt>NIS</dt>
                                <dd>{{ $siswa->nis }}</dd>
                            </div>
                            <div>
                                <dt>Email address</dt>
                                <dd>{{ $siswa->email }}</dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt>Jurusan</dt>
                                <dd>{{ $siswa->jurusan }}</dd>
                            </div>
                            <div>
                                <dt>Mobile</dt>
                                <dd>{{ $siswa->mobile }}</dd>
                            </div>
                            <div>
                                <dt>Tempat Lahir</dt>
                                <dd>{{ $siswa->tempat_lahir }}
                                </dd>
                            </div>
                            <div>
                                <dt>Tanggal Lahir</dt>
                                <dd>
                                    {{ $siswa->tanggal_lahir }}
                                </dd>
                            </div>

                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
