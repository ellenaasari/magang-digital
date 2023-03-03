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
                    <h3 class="m-0 p-0 text-white">Tambah Pembina</h3>
                    <p class="text-white">Form penambahan pembina</p>
                </div>
            </div>
            <div class="col-12 mt-3 col-md-6 order-md-2 order-first  d-sm-none d-lg-inline">
                <nav class="breadcrumb-header float-lg-end" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white"
                                href="{{ route('daftar-ekstra') }}">Pembina</a></li>
                        <li class="breadcrumb-item active text-white-50">Tambah Pembina</li>
                    </ol>
                </nav>
            </div>
        </div>
        <section class="section">
            <form action="{{ route('tambah-pembina') }}" method="POST">
                <div style="border-bottom: 2px solid; border-radius: 4px;" class="card border-primary">
                    <div class="card-body">
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <div class="row">
                            @csrf
                            <div class="form-group">
                                <label for="nameLead">Nama Pembina</label>
                                <input type="text" name="name" class="form-control" id="nameLead" required>
                            </div>
                            <div class="form-group">
                                <label for="emailLead">Email</label>
                                <input type="text" name="email" class="form-control" id="emailLead" required>
                            </div>
                            <div class="form-group">
                                <label for="passwordLead">Password</label>
                                <input type="password" name="password" class="form-control" id="passwordLead" required>
                            </div>
                            <div class="form-group">
                                <label for="passwordLeadConfirm">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="passwordLeadConfirm"
                                    name="password_confirmation">
                            </div>


                            <div class="form-group col-sm-12">
                                <label for="ekstraSelect">Pembina Ekstrakurikuler</label>

                                <select class="form-select" name="extracurricular_id" id="ekstraSelect" required>
                                    @foreach ($extra as $eks)
                                        <option value="{{ $eks->id }}">{{ $eks->name }}</option>
                                    @endforeach
                                </select>
                                <p>
                                    <small class="text-muted">Nama ekstrakurikuler pilihan kamu.</small>
                                </p>
                            </div>
                            <div class="px-2 d-flex justify-content-end">
                                {{-- <div class="col-8"></div> --}}
                                <button class="btn btn-primary w-auto" type="submit">Tambah Pembina</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
</body>

</html>
