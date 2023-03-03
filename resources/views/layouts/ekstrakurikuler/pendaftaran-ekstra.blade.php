<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Ekstrakurikuler</title>
    <x-x-icon></x-x-icon>
</head>

<body>
    <x-sidebar-layout></x-sidebar-layout>
    <div id="main" class="pt-1 ml-1 px-4">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <div class="m-0 pt-2">
                    <h3 class="m-0 p-0 text-white">Pendaftaran Ekstrakurikuler</h3>
                    <p class="text-white">Form pendaftaran ekstrakurikuler</p>
                </div>
            </div>

            <div class="col-12 mt-3 col-md-6 order-md-2 order-first  d-sm-none d-lg-inline">
                <nav class="breadcrumb-header float-lg-end" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white"
                                href="{{ route('daftar-ekstra') }}">Ekstrakurikuler</a></li>
                        <li class="breadcrumb-item active text-white-50">Tambah Ekstra</li>
                    </ol>
                </nav>
            </div>
        </div>

        <section class="section">
            <form action="{{ route('daftar-ekstrakurikuler', ['id' => $user->id]) }}" method="POST">
                <div style="border-bottom: 2px solid; border-radius: 4px;" class="card border-primary">
                    <div class="card-body">
                        <h5 style="margin-bottom: 0px;">Peringatan !</h5>
                        <p style="margin-bottom: 0px; ">Mohon untuk tidak mengikuti ekstrakurikuler dalam waktu yang bersamaan.</p>
                        <p style="margin-top: -5px;">Dan silahkan cek <a href="{{ route('daftar-ekstra') }}">jadwal ekstrakurikuler</a> untuk memastikannya.</p>
                        <div class="row">
                            @csrf

                            <div class="form-group col-sm-12">
                                <label for="ekstraSelect">Nama Ekstrakurikuler</label>

                                <select class="form-select" name="extracurricular_id" id="ekstraSelect" required>
                                    @foreach ($daftarEkstra as $ekstra)
                                        <option value="{{ $ekstra->id }}">{{ $ekstra->name }}</option>
                                    @endforeach
                                </select>
                                <p>
                                    <small class="text-muted">Nama ekstrakurikuler pilihan kamu.</small>
                                </p>
                            </div>

                            <div class="form-group col-sm-6">

                            </div>
                            <div class="px-2 d-flex justify-content-end">
                                {{-- <div class="col-8"></div> --}}
                                <button class="btn btn-primary w-auto" type="submit">Daftar Ekstrakurikuler</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
</body>

</html>
