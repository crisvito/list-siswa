<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-300">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start gap-3">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 pb-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <h2 class="font-bold text-slate-800 text-xl tracking-wide">DASHBOARD</h2>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ml-3">
                    {{-- Masih Kosong --}}
                </div>
            </div>
        </div>
    </div>
</nav>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-60 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-300 sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
        <ul class="space-y-2 font-medium tracking-wide">
            <li>
                <a href="/" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-200">
                    <i class="fa-solid fa-house"></i>
                    <span class="ml-3">Siswa</span>
                </a>
            </li>
            <li>
                <a href={{ route('siswas.create') }}
                    class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-200">
                    <i class="fa-solid fa-square-plus text-lg"></i>
                    <span class="ml-3">Create</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
