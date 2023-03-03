<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Ekstrakurikuler</title>
    <x-x-icon></x-x-icon>
</head>

<body>
    <x-sidebar-layout></x-sidebar-layout>
    <div id="main" class="pt-1 ml-1 px-4">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <div class="m-0 pt-2">
                    <h3 class="m-0 p-0 text-white">Tambah Ekstrakurikuler</h3>
                    <p class="text-muted text-white">Form penambahan ekstrakurikuler</p>
                </div>
            </div>

            <div class="col-12 mt-3 col-md-6 order-md-2 order-first  d-sm-none d-lg-inline">
                <nav class="breadcrumb-header float-lg-end" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="{{ route('daftar-ekstra') }}">Ekstrakurikuler</a></li>
                        <li class="breadcrumb-item active text-white-50">Tambah Ekstra</li>
                    </ol>
                </nav>
            </div>
        </div>

        <section class="section">
            <form action="{{ route('tambah-ekstra') }}" method="POST" enctype="multipart/form-data">
                <div style="border-bottom: 2px solid; border-radius: 4px;" class="card border-primary">
                    <div class="card-body">
                        <div class="row">
                            @csrf
                            <div class="form-group">
                                <label for="nameEkstra">Nama Ekstrakurikuler</label>
                                <input type="text" name="name" class="form-control" id="nameEkstra" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsiEkstrakurikuler">Deskripsi Ekstrakurikuler</label>
                                <input type="text" name="description" class="form-control" id="deskripsiEkstrakurikuler" required>
                            </div>
                            <div class="form-group">
                                <label for="fotoEkstrakurikuler">Foto Ekstrakurikuler</label>
                                <input type="file" name="image" class="form-control" id="fotoEkstrakurikuler" required>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="daySelect">Hari Ekstrakurikuler</label>

                                <select class="form-select" name="day_operation" id="daySelect" required>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                                <p>
                                    <small class="text-muted">Hari Ekstrakurikuler dilakukan.</small>
                                </p>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="helperText">Waktu Ekstrakurikuler</label>
                                <input type="time" id="helperText" name="time_operation" class="form-control" placeholder="Name" required>
                                <p>
                                    <small class="text-muted">Waktu Ekstrakurikuler dilakukan. (WIB)</small>
                                </p>
                            </div>
                            <div class="px-2 d-flex justify-content-end">
                                {{-- <div class="col-8"></div> --}}
                                <button class="btn btn-primary w-auto" type="submit">Tambah Ekstrakurikuler</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
</body>

</html>
