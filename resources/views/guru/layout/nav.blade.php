<div class="relative">
    <div class="">
        <nav class="flex items-center justify-end bg-white py-3 px-4 text-blue drop-shadow-md">
            <div class="items-center  grid text-right">
                <span class="text-lg font-bold">{{$guru->nama}}</span>
                <span class="text-xs font-light">{{$guru->nip}}</span>
            </div>
        </nav>
    </div>
    <div class="w-64 bg-[#213555] text-white min-h-screen fixed left-0 top-0 z-50">
        <div class="p-5 text-center">
            <h1 class="text-xl font-bold">E<span class="font-normal">-Raportku.</span></h1>
        </div>
        <hr class="w-4/5 mx-auto border-gray-400">
        <nav class="mt-6 pr-10">
            <ul>
                @if ($guruwali or $gurumapel)
                    <li>
                        <a href="/siswa" class="flex items-center text-sm font-semibold mb-2 py-2.5 pl-6 rounded-r-[5rem] transition duration-300 ease-in-out hover:bg-slate-100 hover:text-[#213555]">
                            <i class="fa-solid fa-bars-progress text-xl mr-3"></i>Mata Pelajaran
                        </a>
                    </li>
                    <li>
                        <a href="/raport" class="flex items-center text-sm font-semibold mb-2 py-2.5 pl-6 rounded-r-[5rem] transition duration-300 ease-in-out hover:bg-slate-100 hover:text-[#213555]">
                            <i class="fa-solid fa-book-open text-xl mr-3"></i>Raport
                        </a>
                    </li>
                @endif
                @if ($guruwali)
                    <li>
                        <a href="/raport" class="flex items-center text-sm font-semibold mb-2 py-2.5 pl-6 rounded-r-[5rem] transition duration-300 ease-in-out hover:bg-slate-100 hover:text-[#213555]">
                            <i class="fa-solid fa-book-open text-xl mr-3"></i>wali
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
        <hr class="mt-6 w-4/5 mx-auto border-gray-400">
        <div class="mt-6 text-center">
            <a href="/" class="text-sm border font-semibold rounded-full py-2.5 px-8 transition duration-200 ease-in-out hover:border-0 hover:bg-slate-100 hover:text-[#213555]">Logout</a>
        </div>
    </div>
</div>