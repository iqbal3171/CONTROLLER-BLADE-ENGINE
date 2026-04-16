@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="space-y-8">

    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
        
        <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition">
            <p class="text-sm text-slate-400 font-semibold">Total Pendapatan</p>
            <h2 class="text-2xl font-black mt-2 text-indigo-600">Rp 12.450.000</h2>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition">
            <p class="text-sm text-slate-400 font-semibold">Tiket Terjual</p>
            <h2 class="text-2xl font-black mt-2">1.284</h2>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition">
            <p class="text-sm text-slate-400 font-semibold">Event Aktif</p>
            <h2 class="text-2xl font-black mt-2">8 Event</h2>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition">
            <p class="text-sm text-slate-400 font-semibold">Pesanan Pending</p>
            <h2 class="text-2xl font-black mt-2 text-orange-500">12 Pesanan</h2>
        </div>

    </div>

    <!-- Table -->
    <div class="bg-white rounded-2xl shadow-sm">

        <div class="flex justify-between items-center px-6 py-5 border-b">
            <h3 class="text-lg font-bold">Transaksi Terakhir</h3>
            <a href="#" class="text-indigo-600 text-sm font-semibold hover:underline">
                Lihat Semua
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-slate-50 text-slate-400 text-xs uppercase">
                    <tr>
                        <th class="px-6 py-4">Pembeli</th>
                        <th class="px-6 py-4">Event</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-right">Total</th>
                    </tr>
                </thead>
                <tbody class="text-sm">

                    <tr class="border-t hover:bg-slate-50 transition">
                        <td class="px-6 py-4">
                            <p class="font-bold">Donni Prabowo</p>
                            <p class="text-xs text-slate-400">donni@example.com</p>
                        </td>
                        <td class="px-6 py-4">Jazz Night 2024</td>
                        <td class="px-6 py-4">
                            <span class="bg-green-100 text-green-600 text-xs px-3 py-1 rounded-full font-semibold">
                                Success
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right font-bold">Rp 155.000</td>
                    </tr>

                    <tr class="border-t hover:bg-slate-50 transition">
                        <td class="px-6 py-4">
                            <p class="font-bold">Maya Sari</p>
                            <p class="text-xs text-slate-400">maya@example.com</p>
                        </td>
                        <td class="px-6 py-4">AI & Future Workshop</td>
                        <td class="px-6 py-4">
                            <span class="bg-orange-100 text-orange-600 text-xs px-3 py-1 rounded-full font-semibold">
                                Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right font-bold">Rp 55.000</td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

</div>

@endsection