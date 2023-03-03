<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Ekstrakurikuler</title>
    <x-x-icon></x-x-icon>
</head>

<body>
    <x-sidebar-layout>
    </x-sidebar-layout>
    <div id="main" class="pt-1 ml-1 px-4">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <div class="m-0 pt-2">
                    <h3 class="m-0 p-0 text-white">Ubah Ekstrakurikuler</h3>
                    <p class="text-muted text-white">Form pengubahan data ekstrakurikuler</p>
                </div>
            </div>

            <div class="col-12 mt-3 col-md-6 order-md-2 order-first">
                <nav class="breadcrumb-header float-lg-end" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white"
                                href="{{ route('daftar-ekstra') }}">Ekstrakurikuler</a></li>
                        <li class="breadcrumb-item active text-white-50">Ubah Ekstra</li>
                    </ol>
                </nav>
            </div>
        </div>

        <section class="section">
            <form action="{{ route('ubah-ekstra', ['id' => $extraId->id]) }}" method="POST">
                <div style="border-bottom: 2px solid; border-radius: 4px;" class="card border-primary">
                    <div class="card-body">
                        <div class="row">
                            @csrf
                            <input type="text" name="id" class="form-control" id="nameEkstra"
                                value="{{ $extraId->id }}" hidden>
                            <div class="form-group">
                                <label for="nameEkstra">Nama Ekstrakurikuler</label>
                                <input type="text" name="name" class="form-control" id="nameEkstra"
                                    value="{{ $extraId->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsiEkstra">Deskripsi Ekstrakurikuler</label>
                                <input type="text" name="description" class="form-control" id="deskripsiEkstra"
                                    value="{{ $extraId->description }}" required>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="daySelect">Hari Ekstrakurikuler</label>

                                <select class="form-select" name="day_operation" id="daySelect" required>
                                    <option value="Senin" @if ('Senin' == $extraId->day_operation) selected @endif>Senin
                                    </option>
                                    <option value="Selasa" @if ('Selasa' == $extraId->day_operation) selected @endif>Selasa
                                    </option>
                                    <option value="Rabu" @if ('Rabu' == $extraId->day_operation) seleDcted @endif>Rabu
                                    </option>
                                    <option value="Kamis" @if ('Kamis' == $extraId->day_operation) selected @endif>Kamis
                                    </option>
                                    <option value="Jumat" @if ('Jumat' == $extraId->day_operation) selected @endif>Jumat
                                    </option>
                                    <option value="Sabtu" @if ('Sabtu' == $extraId->day_operation) selected @endif>Sabtu
                                    </option>s
                                    <option value="Minggu" @if ('Minggu' == $extraId->day_operation) selected @endif>Minggu
                                    </option>
                                </select>
                                <p>
                                    <small class="text-muted">Hari Ekstrakurikuler dilakukan.</small>
                                </p>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="helperText">Waktu Ekstrakurikuler</label>
                                <input type="time" id="helperText" name="time_operation"
                                    value="{{ $extraId->time_operation }}" class="form-control" placeholder="Name"
                                    required>
                                <p>
                                    <small class="text-muted">Waktu Ekstrakurikuler dilakukan. (WIB)</small>
                                </p>
                            </div>
                            <div class="px-2 d-flex justify-content-end">
                                {{-- <div class="col-8"></div> --}}
                                <button class="btn btn-primary w-auto" type="submit">Ubah Ekstrakurikuler</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
</body>

</html>
