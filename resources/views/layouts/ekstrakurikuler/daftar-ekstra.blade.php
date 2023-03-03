<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Ekstrakurikuler</title>
    <x-x-icon></x-x-icon>

</head>

<body>
    <x-sidebar-layout>

    </x-sidebar-layout>
    @role('Admin')
        <div id="main" class="pt-0 mt-0 ml-1 px-4 ">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <div class="m-0 pt-2 ">
                        <h3 class="m-0 p-0 text-white">Daftar Ekstrakurikuler</h3>
                        <p class="text-white-50">Table seluruh data ekstrakurikuler yang tersedia</p>
                    </div>
                </div>

                <div class="col-12 mt-3 col-md-6 order-md-2 order-first d-sm-none d-lg-inline">
                    <nav class="breadcrumb-header float-lg-end" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-white" href="">Ekstrakurikuler</a></li>
                            <li class="text-white-50 breadcrumb-item active">Daftar Ekstra</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div style="border-radius: 4px; border-bottom: 2px solid" class="card p-0 m-0 border-primary">
                <div class="card-body pt-4 pl-0 m-0">
                    <div class="table-responsive">
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Ekstrakurikuler</th>
                                    <th>Hari Pelaksanaan</th>
                                    <th>Waktu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataEkstra as $ekstra)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $ekstra->name }}</td>
                                        <td>{{ $ekstra->day_operation }}</td>
                                        <td>{{ $ekstra->time_operation }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
        @elserole('Student')
        <div id="main" class="pt-0 mt-0 ml-1 px-4 ">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <div class="m-0 pt-2 ">
                        <h3 class="m-0 p-0 text-white">Jadwal Ekstrakurikuler</h3>
                        <p class="text-white-50">Table seluruh data ekstrakurikuler yang kamu ikuti</p>
                    </div>
                </div>

                <div class="col-12 mt-3 col-md-6 order-md-2 order-first d-sm-none d-lg-inline">
                    <nav class="breadcrumb-header float-lg-end" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-white" href="">Ekstrakurikuler</a></li>
                            <li class="text-white-50 breadcrumb-item active">Daftar Ekstra</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div style="border-radius: 4px; border-bottom: 2px solid" class="card p-0 m-0 border-primary">
                <div class="card-body pt-4 pl-0 m-0">
                    <div class="table-responsive">
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Ekstrakurikuler</th>
                                    <th>Hari Pelaksanaan</th>
                                    <th>Waktu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataEkstra as $ekstra)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $ekstra->name }}</td>
                                        <td>{{ $ekstra->day_operation }}</td>
                                        <td>{{ $ekstra->time_operation }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    @endrole

</body>

</html>
<script>
    let jquery_datatable = $("#table").DataTable();
</script>
