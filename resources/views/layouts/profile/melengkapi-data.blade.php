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
                    <h3 class="m-0 p-0 text-white">Lengkapi Data Diri</h3>
                    <p class="text-white-50">Sebelum melakukan pendaftaran Ekstrakurikuler,<br>Dimohon untuk melengkapi
                        data diri terlebih dahulu</p>
                </div>
            </div>

            <div class="col-12 mt-3 col-md-6 order-md-2 order-first  d-sm-none d-lg-inline">
                <nav class="breadcrumb-header float-lg-end" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white"
                                href="{{ route('daftar-ekstra') }}">Profile</a></li>
                        <li class="breadcrumb-item active text-white-50">Melengkapi data diri</li>
                    </ol>
                </nav>
            </div>
        </div>

        <section class="section">
            <form action="{{ route('ubah-identitas', ['id' => $user->id]) }}" method="POST">
                <div style="border-bottom: 2px solid; border-radius: 4px;" class="card border-primary">
                    <div class="card-body">
                        <div class="row">
                            @csrf
                            {{-- <div class="form-group col-sm-12">
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        value="{{ $user->id }}" hidden required>
                                </div>
                            </div> --}}
                            <div class="form-group col-sm-12">
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        value="{{ $user->name }}" required>
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" id="email"
                                        value="{{ $user->email }}" required readonly>
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <div class="form-group">
                                    <label for="phone">No. Hp</label>
                                    <input type="number" name="phone" class="form-control" id="phone"
                                        value="{{ $user->phone }}" required>
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <div class="form-group">
                                    <label for="grade">Kelas</label>
                                    <select class="form-select" name="grade" id="grade">
                                        @foreach ($grade as $grade)
                                            @if ($grade->grade == $user->grade)
                                                <option value="{{ $grade->grade }}" selected>{{ $grade->grade }}
                                                </option>
                                            @else
                                                <option value="{{ $grade->grade }}">{{ $grade->grade }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <div class="form-group">
                                    <label for="study_program">Jurusan</label>
                                    <select class="form-select" name="study_program" id="study_program">
                                        @foreach ($sp as $item)
                                            @if ($item->name == $user->study_program)
                                                <option value="{{ $item->name }}" selected>{{ $item->name }}
                                                </option>
                                            @else
                                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                                            @endif
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <div class="form-group">
                                    <label for="nis">Nis / Nomor Induk Siswa</label>
                                    <input type="text" name="nis" class="form-control" id="nis"
                                        value="{{ $user->nis }}" required>
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <div class="form-group">
                                    <label for="place_birth">Tempat Lahir</label>
                                    <input type="text" name="place_birth" class="form-control" id="place_birth"
                                        value="{{ $user->place_birth }}" required>
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <div class="form-group">
                                    <label for="date_birth">Tanggal Lahir</label>
                                    <input type="date" name="date_birth" class="form-control" id="date_birth"
                                        value="{{ $user->date_birth }}" required>
                                </div>
                            </div>

                            <div class="form-group col-sm-12">
                                <div class="form-group">
                                    <label for="gender">Jenis Kelamin</label>
                                    <select class="form-select" name="gender" id="gender">
                                        <option value="l">Laki - Laki</option>
                                        <option value="p">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <div class="form-group">
                                    <label for="address">Alamat</label>
                                    <textarea name="address" class="form-control" id="address" required>{{ $user->address }}</textarea>
                                </div>
                            </div>

                            <div class="px-2 d-flex justify-content-end">
                                {{-- <div class="col-8"></div> --}}
                                <button class="btn btn-primary w-auto" type="submit">Update data diri</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
</body>

</html>
