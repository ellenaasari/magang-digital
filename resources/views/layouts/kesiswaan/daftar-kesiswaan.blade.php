<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Peserta</title>
    <x-x-icon></x-x-icon>
    <style>
        .fixed-table-body {
            overflow-x: visible;
            overflow-y: visible;
            height: 100%;
        }
    </style>
</head>

<body>

    <x-sidebar-layout>

    </x-sidebar-layout>
    <div id="main" class="pt-0 mt-0 ml-1 px-4 ">
        <div class="row">
            {{-- <h1>{{ count($studyprogram) }}</h1> --}}
            <div class="col-12 col-md-6 order-md-1 mb-0 order-last">
                <div class="m-0 pt-2 ">
                    <h3 class="m-0 p-0 text-white">Daftar Kesiswaan</h3>
                    <p class="text-white-50">Table seluruh data kesiswaan yang tersedia</p>
                </div>
            </div>

            <div class="col-12 mt-3 col-md-6 order-md-2 order-first d-sm-none d-lg-inline">
                <nav class="breadcrumb-header float-lg-end" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="">Kesiswaan</a></li>
                        <li class="text-white-50 breadcrumb-item active">Daftar Kesiswaan</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div style="border-radius: 4px; border-bottom: 2px solid" class="card p-0 m-0 border-primary">
            <div class="card-body pt-4 m-0">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kesiswaan</th>
                                <th>Email Kesiswaan</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($daftarKesiswaan as $pendaftar)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pendaftar->name }}</td>
                                    <td>{{ $pendaftar->email }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
{{-- <script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script> --}}

<script>
    let jquery_datatable = $(".table").DataTable();
</script>
