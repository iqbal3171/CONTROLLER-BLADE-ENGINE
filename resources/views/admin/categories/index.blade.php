@extends('layouts.admin')

@section('content')
<div class="p-6">

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Manajemen Kategori</h1>
            <p class="text-gray-500 text-sm">Kelola kategori event Anda</p>
        </div>

        <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg shadow">
            + Tambah Kategori
        </button>
    </div>

    <!-- CARD -->
    <div class="bg-white rounded-xl shadow-sm border overflow-hidden">

        <!-- TABLE -->
        <table class="w-full text-left">
            <thead class="bg-gray-50 text-gray-500 text-sm uppercase">
                <tr>
                    <th class="px-6 py-4">No</th>
                    <th class="px-6 py-4">Nama Kategori</th>
                    <th class="px-6 py-4 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody class="text-gray-700">
                <tr class="border-t hover:bg-gray-50 transition">
                    <td class="px-6 py-4">1</td>
                    <td class="px-6 py-4 font-medium">Seminar</td>
                    <td class="px-6 py-4 text-center space-x-2">
                        <button class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-md hover:bg-blue-200">
                            Edit
                        </button>
                        <button class="px-3 py-1 text-sm bg-red-100 text-red-600 rounded-md hover:bg-red-200">
                            Hapus
                        </button>
                    </td>
                </tr>

                <tr class="border-t hover:bg-gray-50 transition">
                    <td class="px-6 py-4">2</td>
                    <td class="px-6 py-4 font-medium">Workshop</td>
                    <td class="px-6 py-4 text-center space-x-2">
                        <button class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-md hover:bg-blue-200">
                            Edit
                        </button>
                        <button class="px-3 py-1 text-sm bg-red-100 text-red-600 rounded-md hover:bg-red-200">
                            Hapus
                        </button>
                    </td>
                </tr>

                <tr class="border-t hover:bg-gray-50 transition">
                    <td class="px-6 py-4">3</td>
                    <td class="px-6 py-4 font-medium">Konser</td>
                    <td class="px-6 py-4 text-center space-x-2">
                        <button class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-md hover:bg-blue-200">
                            Edit
                        </button>
                        <button class="px-3 py-1 text-sm bg-red-100 text-red-600 rounded-md hover:bg-red-200">
                            Hapus
                        </button>
                    </td>
                </tr>

            </tbody>
        </table>

    </div>

</div>
@endsection