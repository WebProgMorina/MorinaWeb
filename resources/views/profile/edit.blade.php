<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h2 class="text-2xl font-semibold mb-4">Student List</h2>
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Nomor</th>
                                <th class="px-4 py-2">Nama Peserta</th>
                                <th class="px-4 py-2">L/P</th>
                                <th class="px-4 py-2">Tempat lahir</th>
                                <th class="px-4 py-2">Tanggal Lahir</th>
                                <th class="px-4 py-2">AGAMA</th>
                                <th class="px-4 py-2">KLS</th>
                                <th class="px-4 py-2">Nama Orang Tua / Wali</th>
                                <th class="px-4 py-2">JALAN</th>
                                <th class="px-4 py-2">KOTA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td class="border px-4 py-2">{{ $student->Induk }}</td>
                                    <td class="border px-4 py-2">{{ $student->Nama }}</td>
                                    <td class="border px-4 py-2">{{ $student->gender }}</td>
                                    <td class="border px-4 py-2">{{ $student->TempatLahir }}</td>
                                    <td class="border px-4 py-2">{{ $student->TanggalLahir }}</td>
                                    <td class="border px-4 py-2">{{ $student->kepercayaan }}</td>
                                    <td class="border px-4 py-2">{{ $student->Kelas }}</td>
                                    <td class="border px-4 py-2">{{ $student->ayah }} / {{ $student->Ibu }}</td>
                                    <td class="border px-4 py-2">{{ $student->alamat }}</td>
                                    <td class="border px-4 py-2">{{ $student->Kota }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
