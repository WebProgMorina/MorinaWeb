<x-app-layout>
    <div class="table-container p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="container"> <!-- Adjusted container -->
            <div class="row justify-content-between align-items-center mb-4"> <!-- Added Bootstrap classes -->
                <h2 class="table-header text-2xl font-semibold col-md-6 mb-0">Student List</h2>
                <!-- Adjusted column size -->
                <div class="col-md-6 d-flex justify-content-end align-items-center">
                    <x-nav-link :href="route('paketb.create')" :active="request()->routeIs('paketb.create')">
                        {{ __('Input Paket B') }}
                    </x-nav-link>

                </div>
            </div>
            <h2 class="table-title text-lg font-medium mb-2">Paket B</h2>
            <div class="table-responsive"> <!-- Added Bootstrap class -->
                <table id="studentTable" class="table table-striped table-hover"> <!-- Added Bootstrap classes -->
                    <thead>
                        <tr>
                            <th>Induk</th>
                            <th>Nama Peserta</th>
                            <th>L/P</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Kelas</th>
                            <th>Nama Orang Tua / Wali</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->Induk }}</td>
                                <td>{{ $student->Nama }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->TempatLahir }}</td>
                                <td>{{ $student->TanggalLahir }}</td>
                                <td>{{ $student->kepercayaan }}</td>
                                <td>{{ $student->Kelas }}</td>
                                <td>{{ $student->ayah }} / {{ $student->Ibu }}</td>
                                <td>{{ $student->alamat }}</td>
                                <td>{{ $student->Kota }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Tambahkan Bootstrap CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

<!-- Tambahkan DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

<!-- Tambahkan jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Tambahkan DataTables JS -->
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        $('#studentTable').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "lengthChange": true,
            "pageLength": 10,
            "language": {
                "search": "Filter: ",
                "lengthMenu": "Display _MENU_ records per page",
                "zeroRecords": "No matching records found",
                "info": "Showing page _PAGE_ of _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtered from _MAX_ total records)"
            }
        });

        // Implementasi filter pada tabel
        $('#searchInput').on('keyup', function () {
            $('#studentTable').DataTable().search($(this).val()).draw();
        });
    });
</script>