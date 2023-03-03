<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profilku</title>
    <x-x-icon></x-x-icon>
    <style>
        .table tr th{
            padding: 15px 17px;
        }
    </style>
</head>

<body>
    <x-sidebar-layout>

    </x-sidebar-layout>

    <div id="main" class="pt-0 mt-0 ml-1 px-4">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 mb-0 order-last">
                <div class="m-0 pt-2 ">
                    <h3 class="m-0 p-0 text-white">Biodata</h3>
                    {{--  <p class="text-white-50">Table seluruh data pengajuan pendaftar yang tersedia</p>  --}}
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
        <div class="card p-4">
            <div class="card-content">
                <div style="box-shadow: 0 0 10px rgba(0, 0, 0, .1); border-radius: 4px; margin-bottom: 20px;" class="card">
                   <div class="card-body col-12">
                    <div class="container d-flex h-100">
                        <div class="user-img">
                            <div class="avatar">
                                <img style="width: 75px; height: 75px;"  src="assets/images/faces/1.jpg">
                            </div>
                        </div>
                        <div class="justify-content-center align-self-center ms-3">
                            <h5 class=""> {{ $user->name }}</h5>
                            <hr class="m-0">
                            <p class="text-muted mb-0">{{ $user->email }}</p>
                        </div>
                    </div>
                   </div>
                </div>
                <!-- table striped -->
                <div class="table-responsive ">
                    <table class="table table-striped mb-0">
                        <tbody>
                            {{--  <tr>
                                <th>Name</th>
                                <td>{{ $user->name }}</td>
                            </tr>  --}}
                            <tr>
                                <th>Email</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th>Nis</th>
                                <td>{{ $user->nis }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                @if($user->gender == "l")
                                <td>Laki - Laki</td>
                                @else
                                <td>Perempuan</td>
                                @endif
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>{{ \Carbon\Carbon::parse($user->date_birth)->translatedFormat('l, j F Y')  }}</td>
                            </tr>
                            <tr>
                                <th>Tempat Kelahiran</th>
                                <td>{{ $user->place_birth }}</td>
                            </tr>

                            <tr>
                                <th>Nomor Handphone</th>
                                <td>{{ $user->phone }}</td>
                            </tr>

                            <tr>
                                <th>Alamat</th>
                                <td>{{ $user->address }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <div class="float-end">
                <a href="{{ route('melengkapi-data') }}" class="btn btn-primary mt-3">
                    Ubah Biodata
                </a>
            </div>
            </div>
        </div>
    </div>

</body>

</html>
