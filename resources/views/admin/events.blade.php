@extends('layouts.admin')

@section('title', 'Kelola Event')

@section('content')

<div class="flex justify-between items-center mb-10">
    <div>
        <p class="text-slate-500 font-medium">
            Buat dan atur acara seru Anda di sini.
        </p>
    </div>

    <button class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg hover:bg-indigo-700 transition">
        + Tambah Event Baru
    </button>
</div>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">

    <!-- FILTER -->
    <div class="px-8 py-6 bg-slate-50/50 border-b flex gap-4">
        <input type="text" placeholder="Cari nama event..."
            class="flex-1 px-5 py-3 rounded-xl border-slate-200 border bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition">

        <select class="px-5 py-3 rounded-xl border-slate-200 border bg-white">
            <option>Semua Kategori</option>
            <option>Musik</option>
            <option>Workshop</option>
        </select>
    </div>

    <!-- TABLE -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                <tr>
                    <th class="px-8 py-4 w-16">No</th>
                    <th class="px-8 py-4">Poster</th>
                    <th class="px-8 py-4">Event</th>
                    <th class="px-8 py-4">Harga / Stok</th>
                    <th class="px-8 py-4">Aksi</th>
                </tr>
            </thead>

            <tbody class="divide-y border-t">

                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-6 font-bold text-slate-400">1</td>
                    <td class="px-8 py-6">
                        <img src="{{ asset('assets/concert.png') }}" class="w-16 h-20 rounded-xl object-cover">
                    </td>
                    <td class="px-8 py-6">
                        <p class="font-black text-slate-800">Jazz Night 2024</p>
                        <p class="text-xs text-slate-400">Musik • 16 Nov 2024</p>
                    </td>
                    <td class="px-8 py-6">
                        <p class="font-bold text-indigo-600">Rp 150.000</p>
                        <p class="text-xs text-slate-400">Stok: 42/100</p>
                    </td>
                    <td class="px-8 py-6">
                        <div class="flex gap-2">
                            <button class="p-2 bg-indigo-50 text-indigo-600 rounded-xl">Edit</button>
                            <button class="p-2 bg-rose-50 text-rose-600 rounded-xl">Hapus</button>
                        </div>
                    </td>
                </tr>

                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-6 font-bold text-slate-400">2</td>
                    <td class="px-8 py-6">
                        <img src="{{ asset('assets/workshop.png') }}" class="w-16 h-20 rounded-xl object-cover">
                    </td>
                    <td class="px-8 py-6">
                        <p class="font-black text-slate-800">AI & Future Workshop</p>
                        <p class="text-xs text-slate-400">Tech • 26 Oct 2024</p>
                    </td>
                    <td class="px-8 py-6">
                        <p class="font-bold text-indigo-600">Rp 50.000</p>
                        <p class="text-xs text-slate-400">Stok: 12/50</p>
                    </td>
                    <td class="px-8 py-6">
                        <div class="flex gap-2">
                            <button class="p-2 bg-indigo-50 text-indigo-600 rounded-xl">Edit</button>
                            <button class="p-2 bg-rose-50 text-rose-600 rounded-xl">Hapus</button>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</div>

@endsection