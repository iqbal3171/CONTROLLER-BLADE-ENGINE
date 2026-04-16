@extends('layouts.admin')

@section('title', 'Laporan Transaksi')

@section('content')

<div class="flex justify-between items-center mb-10">
    <div>
        <p class="text-slate-500 font-medium">
            Pantau arus kas dan penjualan tiket Anda.
        </p>
    </div>

    <div class="flex gap-4">
        <button class="px-6 py-3 border-2 border-slate-200 rounded-2xl font-bold hover:bg-white hover:border-indigo-600 hover:text-indigo-600 transition">
            Ekspor Excel
        </button>

        <button class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg hover:bg-indigo-700 transition">
            Unduh PDF
        </button>
    </div>
</div>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">

    <!-- FILTER -->
    <div class="px-8 py-6 bg-slate-50/50 border-b flex flex-wrap gap-4 items-center">
        <div class="flex-1 min-w-[300px] flex gap-2">
            <input type="text" placeholder="Cari Order ID, Nama, atau Email..."
                class="flex-1 px-5 py-3 rounded-xl border-slate-200 border bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition uppercase text-sm font-medium tracking-wide">
        </div>

        <div class="flex gap-2">
            <select class="px-5 py-3 rounded-xl border-slate-200 border bg-white text-sm font-bold">
                <option>Semua Status</option>
                <option>Success</option>
                <option>Pending</option>
                <option>Expired</option>
            </select>

            <select class="px-5 py-3 rounded-xl border-slate-200 border bg-white text-sm font-bold">
                <option>Bulan Ini</option>
                <option>Bulan Lalu</option>
                <option>Tahun 2024</option>
            </select>
        </div>
    </div>

    <!-- TABLE -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                <tr>
                    <th class="px-8 py-4">Order ID</th>
                    <th class="px-8 py-4">Detail Pembeli</th>
                    <th class="px-8 py-4">Event</th>
                    <th class="px-8 py-4">Tgl Transaksi</th>
                    <th class="px-8 py-4">Status</th>
                    <th class="px-8 py-4 text-right">Total Tagihan</th>
                </tr>
            </thead>

            <tbody class="divide-y border-t">

                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-6">
                        <span class="font-mono font-bold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-lg text-sm">
                            #TRX-99210
                        </span>
                    </td>
                    <td class="px-8 py-6">
                        <p class="font-bold text-slate-800">Donni Prabowo</p>
                        <p class="text-xs text-slate-500">donni@example.com</p>
                    </td>
                    <td class="px-8 py-6">Jazz Night 2024</td>
                    <td class="px-8 py-6 text-sm text-slate-500">
                        26 Mar 2024, 17:45
                    </td>
                    <td class="px-8 py-6">
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-lg text-xs font-bold uppercase">
                            Success
                        </span>
                    </td>
                    <td class="px-8 py-6 text-right font-black">
                        Rp 155.000
                    </td>
                </tr>

                <!-- Tambahin row lain kalau mau -->

            </tbody>
        </table>
    </div>

</div>

@endsection