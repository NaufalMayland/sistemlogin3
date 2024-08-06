@extends('guru.layout.layout')
@section('content')
    {{-- <h1>ini {{$guru->nama}}</h1> --}}
    <div class="w-full my-4 space-y-4 bg-white border-gray-200 rounded-md shadow p-7">
        <div class="bg-[#213555] p-2 rounded-full w-full">
            <h2 class="text-lg font-bold text-white text-center">Mata Pelajaran yang diampu di Tahun Pelajaran 2023/2024 Ganjil</h2>
        </div>
        <table class="w-full">
            <thead>
                <tr class="bg-[#f1f5f9]">
                    <th class="border text-sm border-slate-300 text-slate-700">NO</th>
                    <th class="border text-sm border-slate-300 text-slate-700">NAMA PELAJARAN</th>
                    <th class="border text-sm border-slate-300 text-slate-700">ROMBEL</th>
                    <th class="border text-sm border-slate-300 text-slate-700">WALI KELAS</th>
                    <th class="border text-sm border-slate-300 text-slate-700">JML PESERTA DIDIK </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-2 text-sm border border-slate-300 text-slate-700">1</td>
                    <td class="p-2 text-sm text-left border border-slate-300 text-slate-700">Matematika</td>
                    <td class="p-2 text-sm text-left border border-slate-300 text-slate-700">XII RPL 1</td>
                    <td class="p-2 text-sm text-left border border-slate-300 text-slate-700">Heru S.pd</td>
                    <td class="p-2 text-sm border border-slate-300 text-slate-700">35</td>
                </tr>
                <tr>
                    <td class="p-2 text-sm border border-slate-300 text-slate-700">2</td>
                    <td class="p-2 text-sm text-left border border-slate-300 text-slate-700">Pemograman GUI</td>
                    <td class="p-2 text-sm text-left border border-slate-300 text-slate-700">XII RPL 1</td>
                    <td class="p-2 text-sm text-left border border-slate-300 text-slate-700">Reny S.pd</td>
                    <td class="p-2 text-sm border border-slate-300 text-slate-700">35</td>
                </tr>
                <tr>
                    <td class="p-2 text-sm border border-slate-300 text-slate-700">3</td>
                    <td class="p-2 text-sm text-left border border-slate-300 text-slate-700">Basis Data</td>
                    <td class="p-2 text-sm text-left border border-slate-300 text-slate-700">XII RPL 1</td>
                    <td class="p-2 text-sm text-left border border-slate-300 text-slate-700">Dinda S.pd</td>
                    <td class="p-2 text-sm border border-slate-300 text-slate-700">35</td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- @foreach($mapel as $mpl)
        <p>anda guru mata pelajaran <span>{{ $mpl->nama_mapel }}</span></p>
    @endforeach --}}
    @foreach($kelas as $kls)
        <div class="w-full my-5 space-y-4 bg-white border-gray-200 rounded-md shadow p-7">
            <div class="bg-[#213555] p-2 rounded-full w-full">
                <h2 class="text-lg font-bold text-white text-center">Anda adalah Wali Kelas Rombongan Belajar <span>{{ $kls->nama_kelas }}</span></h2>
            </div>
            <div class="mt-4">
                <h2 class="text-sm font-semibold text-slate-700">Daftar Mata Pelajaran di Rombongan Belajar <span>{{ $kls->nama_kelas }}</span></h2>
            </div>
            <table class="w-full">
                <thead">
                    <tr class="bg-[#f1f5f9]">
                        <th class="border text-sm border-slate-300 text-slate-700">NO</th>
                        <th class="border text-sm border-slate-300 text-slate-700">MATA PELAJARAN</th>
                        <th class="border text-sm border-slate-300 text-slate-700">GURU MATA PELAJARAN</th>
                        <th class="border text-sm border-slate-300 text-slate-700">JML PESERTA DIDIK</th>
                        <th class="border text-sm border-slate-300 text-slate-700">JML PESERTA DIDIK DINILAI </th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-2 text-sm border border-slate-300 text-slate-700">1</td>
                            <td class="p-2 text-sm text-left border border-slate-300 text-slate-700">Matematika</td>
                            <td class="p-2 text-sm text-left border border-slate-300 text-slate-700">Reny S.pd</td>
                            <td class="p-2 text-sm border border-slate-300 text-slate-700">35</td>
                            <td class="p-2 text-sm border border-slate-300 text-slate-700">35</td>
                        </tr>
                        <tr>
                            <td class="p-2 text-sm border border-slate-300 text-slate-700">2</td>
                            <td class="p-2 text-sm text-left border border-slate-300 text-slate-700">GUI</td>
                            <td class="p-2 text-sm text-left border border-slate-300 text-slate-700">Reny S.pd</td>
                            <td class="p-2 text-sm border border-slate-300 text-slate-700">35</td>
                            <td class="p-2 text-sm border border-slate-300 text-slate-700">35</td>
                        </tr>
                        <tr>
                            <td class="p-2 text-sm border border-slate-300 text-slate-700">3</td>
                            <td class="p-2 text-sm text-left border border-slate-300 text-slate-700">Mata pelajaran Pilihan </td>
                            <td class="p-2 text-sm text-left border border-slate-300 text-slate-700">Reny S.pd</td>
                            <td class="p-2 text-sm border border-slate-300 text-slate-700">35</td>
                            <td class="p-2 text-sm border border-slate-300 text-slate-700">35</td>
                        </tr>
                        <tr>
                            <td class="p-2 text-sm border border-slate-300 text-slate-700">4</td>
                            <td class="p-2 text-sm marker:text-left border border-slate-300 text-slate-700">Basis Data</td>
                            <td class="p-2 text-sm marker:text-left border border-slate-300 text-slate-700">Reny S.pd</td>
                            <td class="p-2 text-sm marker:border border-slate-300 text-slate-700">35</td>
                            <td class="p-2 text-sm marker:border border-slate-300 text-slate-700">35</td>
                        </tr>
                        <tr>
                            <td class="p-2 text-sm border border-slate-300 text-slate-700">5</td>
                            <td class="p-2 text-sm text-left border border-slate-300 text-slate-700">Pemograman Web</td>
                            <td class="p-2 text-sm text-left border border-slate-300 text-slate-700">Reny S.pd</td>
                            <td class="p-2 text-sm border border-slate-300 text-slate-700">35</td>
                            <td class="p-2 text-sm border border-slate-300 text-slate-700">35</td>
                        </tr>
    
                    </tbody>
            </table>
        </div>
    @endforeach
@endsection