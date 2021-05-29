<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="px-6 py-4 border-0">
                    <h3 class="font-bold text-lg text-blueGray-700">Tabel Siswa Pencarian "GUS"</h3>
                </div>
                <div class="block w-full">
                    <table class="items-center w-full">
                        <thead class="border-b-2">
                            <tr>
                                <th class="px-6 py-3 text-xs uppercase font-bold text-left bord">Nomor</th>
                                <th class="px-6 py-3 text-xs uppercase font-bold text-left bord">NIS</th>
                                <th class="px-6 py-3 text-xs uppercase font-bold text-left bord">Nama</th>
                                <th class="px-6 py-3 text-xs uppercase font-bold text-left bord">Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $index => $value)
                            <tr>
                                <td class="border-t-0 px-6 border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    {{ $index + 1 }}
                                </td>
                                <td class="border-t-0 px-6 border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    {{ $value->nis }}
                                </td>
                                <td class="border-t-0 px-6 border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    {{ $value->nama }}
                                </td>
                                <td class="border-t-0 px-6 border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    {{ $value->kelas }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
