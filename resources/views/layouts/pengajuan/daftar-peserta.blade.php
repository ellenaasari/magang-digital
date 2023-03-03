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
    @role('Student Manager')
        <x-sidebar-layout :studyprograms="$studyprogram" :grades="$grades">

        </x-sidebar-layout>
    @else
        <x-sidebar-layout>

        </x-sidebar-layout>
    @endrole

    {{-- <x-sidebar-layout :studyprogram="$studyprogram">

    </x-sidebar-layout> --}}
    <div id="main" class="pt-0 mt-0 ml-1 px-4 ">
        <div class="row">
            {{-- <h1>{{ count($studyprogram) }}</h1> --}}
            <div class="col-12 col-md-6 order-md-1 mb-0 order-last">
                <div class="m-0 pt-2 ">
                    <h3 class="m-0 p-0 text-white">Daftar Pendaftar</h3>
                    <p class="text-white-50">Table seluruh data peserta yang tersedia</p>
                </div>
            </div>

            <div class="col-12 mt-3 col-md-6 order-md-2 order-first d-sm-none d-lg-inline">
                <nav class="breadcrumb-header float-lg-end" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="">Pendaftar</a></li>
                        <li class="text-white-50 breadcrumb-item active">Pengajuan Pendaftar</li>
                    </ol>
                </nav>
            </div>
        </div>

        {{-- <div class="table-responsive"> --}}
        @role('Extracurricular Leader')
            <div style="border-radius: 4px; border-bottom: 2px solid" class="card p-0 m-0 border-primary">
                <div class="card-body pt-4 m-0">
                    <div class="table-responsive">
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pendaftar</th>
                                    <th>Nis</th>
                                    <th>Email</th>
                                    {{-- <th class="text-center">Status</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($daftarPeserta as $pendaftar)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pendaftar->user_name }}</td>
                                        <td>{{ $pendaftar->nis }}</td>
                                        <td>{{ $pendaftar->email }}</td>
                                        {{-- <td>

                                            @if ($pendaftar->role_name == 'Process')
                                                <div style="border-radius: 20px; padding: 3px 5px ; color: white;"
                                                    class="bg-warning text-center">
                                                    {{ $pendaftar->role_name }}
                                                </div>
                                                @elseif($pendaftar->role_name == 'Reject')
                                                <div style="border-radius: 20px; padding: 3px 5px ; color: white;"
                                                    class="bg-danger text-center">
                                                    {{ $pendaftar->role_name }}
                                                </div>
                                            @else
                                                <div style="border-radius: 20px; padding: 3px 5px ; color: white;"
                                                    class="bg-primary text-center">
                                                    {{ $pendaftar->role_name }}
                                                </div>
                                            @endif
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @elserole('Admin')
            <div style="border-radius: 4px; border-bottom: 2px solid" class="card p-0 m-0 border-primary">
                <div class="card-body pt-4 m-0">
                    <div class="table-responsive">
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pendaftar</th>
                                    <th>Nis</th>
                                    <th>Email</th>
                                    {{-- <th class="text-center">Status</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($daftarPeserta as $pendaftar)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pendaftar->user_name }}</td>
                                        <td>{{ $pendaftar->nis }}</td>
                                        <td>{{ $pendaftar->email }}</td>
                                        {{-- <td>

                                            @if ($pendaftar->role_name == 'Process')
                                                <div style="border-radius: 20px; padding: 3px 5px ; color: white;"
                                                    class="bg-warning text-center">
                                                    {{ $pendaftar->role_name }}
                                                </div>
                                                @elseif($pendaftar->role_name == 'Reject')
                                                <div style="border-radius: 20px; padding: 3px 5px ; color: white;"
                                                    class="bg-danger text-center">
                                                    {{ $pendaftar->role_name }}
                                                </div>
                                            @else
                                                <div style="border-radius: 20px; padding: 3px 5px ; color: white;"
                                                    class="bg-primary text-center">
                                                    {{ $pendaftar->role_name }}
                                                </div>
                                            @endif
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @elserole('Student Manager')
            <?php $i = 0; ?>
            @foreach ($daftarPeserta as $item)
                <div style="border-radius: 4px; border-bottom: 2px solid; box-shadow: 0 0 10px rgba(0, 0, 0, .15);"
                    class="card p-0 mt-3 border-primary">
                    <div
                        class="card-header m-0 p-0 ms-auto pt-3 px-4 d-flex flex-row align-items-center justify-content-center">
                        @if ($item->isEmpty())
                        @else
                            <a href="{{ route('cetak-pdf', ['grade' => $gradeParam, 'sp' => $name]) }}" type="button"
                                class="btn btn-success rounded-pill btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-printer" viewBox="0 0 16 16">
                                    <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"></path>
                                    <path
                                        d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z">
                                    </path>
                                </svg>
                                <span> | Cetak PDF</span>
                            </a>
                        @endif
                    </div>
                    <div style="position: absolute; top: -25px; left: 10px;border-radius: 5px;padding: 10px 10px; border-bottom: 2px solid;text-align: center; box-shadow: 0 0 10px rgba(0, 0, 0, .15);"
                        class="card border-primary">
                        <h6 style="margin: 0px;">{{ $gradeParam }} {{ $name }}</h6>
                    </div>
                    <div class="card-body pt-3 m-0">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nis</th>
                                        <th>Ekstrakurikuler yang diikuti</th>

                                        {{-- <th class="text-center">Status</th> --}}

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($item as $peserta)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $peserta[0]->name }}</td>
                                            <td>{{ $peserta[0]->nis }}</td>
                                            <td style="font-style: italic; overflow: visible;">
                                                @foreach ($peserta[1] as $ekstra)
                                                    @if ($loop->index == count($peserta[1]) - 1)
                                                        {{ $ekstra->name }}
                                                    @else
                                                        {{ $ekstra->name }},
                                                    @endif
                                                @endforeach
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endforeach
        @endrole
        {{-- </div> --}}

    </div>
</body>

</html>
{{-- <script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script> --}}

<script>
    let jquery_datatable = $(".table").DataTable();
</script>
