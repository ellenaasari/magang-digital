<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Pengajuan Ekstrakurikuler</title>
    <x-x-icon></x-x-icon>
</head>

<body>
    <x-sidebar-layout>

    </x-sidebar-layout>
    <div id="main" class="pt-0 mt-0 ml-1 px-4 ">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 mb-0 order-last">
                <div class="m-0 pt-2 ">
                    <h3 class="m-0 p-0 text-white">Daftar Pengajuan Ekstrakurikuler</h3>
                    <p class="text-white-50">Table seluruh data pengajuan ekstrakurikuler yang tersedia</p>
                </div>
            </div>

            <div class="col-12 mt-3 col-md-6 order-md-2 order-first d-sm-none d-lg-inline">
                <nav class="breadcrumb-header float-lg-end" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="">Pengajuan</a></li>
                        <li class="text-white-50 breadcrumb-item active">Pengajuan Ekstrakurikuler</li>
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
                                <th>Nama Pendaftar</th>
                                <th>Nama Ekstrakurikuler</th>
                                <th>Tanggal Pendaftaran</th>

                                <th>Status</th>
                                <th align="center" style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($submissionExtra as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    {{-- <td>{{ $extra->id }}</td> --}}
                                    <td>{{ $data->user_name }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($data->created_at)->translatedFormat('l, j F Y') }}
                                    </td>

                                    <td>
                                        @if ($data->is_accepted == '0')
                                            <div style="border-radius: 20px; padding: 3px 5px ; color: white;"
                                                class="bg-warning text-center">
                                                Process
                                            </div>
                                        @elseif ($data->is_accepted == '2')
                                            <div style="border-radius: 20px; padding: 3px 5px ; color: white;"
                                                class="bg-danger text-center">
                                                Reject
                                            </div>
                                        @else
                                            <div style="border-radius: 20px; padding: 3px 5px ; color: white;"
                                                class="bg-primary text-center">
                                                Accepted
                                            </div>
                                        @endif
                                    </td>
                                    <td align="center">
                                        @if ($data->is_accepted == '0')
                                            <button type="button" class="btn btn-success rounded-pill"
                                                data-bs-toggle="modal" data-bs-target="#konfirmasi"
                                                data-nis="{{ $data->nis }}"
                                                data-data_extra_id="{{ $data->data_extra_id }}">Konfirmasi</button>
                                            <button type="button" class="btn btn-danger rounded-pill"
                                                data-bs-toggle="modal" data-bs-target="#tolak"
                                                data-nis="{{ $data->nis }}"
                                                data-data_extra_id="{{ $data->data_extra_id }}">Tolak</button>

                                            <div class="modal fade text-left" id="konfirmasi" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel120" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-success">
                                                            <h5 class="modal-title white" id="myModalLabel120">
                                                                Konfirmasi Pengajuan Ekstrakurikuler
                                                            </h5>
                                                            <button type="button" class="close"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p style="text-align: left;" class="text-left">
                                                                <b>Apakah kamu yakin ?</b>
                                                                <br>
                                                                Setelah melakukan konfirmasi pengajuan, pendaftar akan menjadi peserta dari ekstrakurikuler tersebut.
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Batal</span>
                                                            </button>
                                                            <form
                                                                action="{{ route('konfirmasi-pengajuan-ekstrakurikuler') }}"
                                                                method="post">
                                                                @csrf
                                                                <input type="text" name="nis" id="nis_peserta"
                                                                    hidden>
                                                                <input type="text" name="id"
                                                                    id="data_extra_id_peserta" hidden>
                                                                <button type="submit" class="btn btn-success ml-1"
                                                                    data-bs-dismiss="modal" id="confirm-on-modal">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Konfirmasi</span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade text-left" id="tolak" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel120" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-danger">
                                                            <h5 class="modal-title white" id="myModalLabel120">
                                                                Tolak Pendaftar
                                                            </h5>
                                                            <button type="button" class="close"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p style="text-align: left;" class="text-left">
                                                                <b>Apakah kamu yakin ?</b>
                                                                <br>
                                                                Setelah melakukan penolakan, pendaftar akan tertolak untuk menjadi peserta ekstrakurikuler tersebut.
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Batal</span>
                                                            </button>
                                                            <form
                                                                action="{{ route('tolak-pengajuan-ekstrakurikuler') }}"
                                                                method="post">
                                                                @csrf
                                                                <input type="text" name="nis"
                                                                    id="nis_peserta_for_reject" hidden>
                                                                <input type="text" name="id"
                                                                    id="data_extra_id_peserta_for_reject" hidden>
                                                                <button type="submit" class="btn btn-danger ml-1"
                                                                    data-bs-dismiss="modal" id="confirm-on-modal">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Tolak</span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif ($data->is_accepted == '2')
                                            <div class="icon icon-left rounded-pill"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-alert-circle">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="12" y1="8" x2="12"
                                                        y2="12"></line>
                                                    <line x1="12" y1="16" x2="12.01"
                                                        y2="16"></line>
                                                </svg> Ditolak</div>
                                        @else
                                            <div class="icon icon-left rounded-pill"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-check-circle">
                                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                </svg> Terkonfirmasi</div>
                                        @endif

                                    </td>
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

<script>
    let jquery_datatable = $("#table").DataTable();

    $('#konfirmasi').on('show.bs.modal', function(event) {
        var link = $(event.relatedTarget);
        var nis = link.data('nis');
        var data_extra_id = link.data('data_extra_id');
        $('#nis_peserta').val(nis);
        $('#data_extra_id_peserta').val(data_extra_id);
    });
    $('#tolak').on('show.bs.modal', function(event) {
        var link = $(event.relatedTarget);
        var nis = link.data('nis');
        var data_extra_id = link.data('data_extra_id');
        $('#nis_peserta_for_reject').val(nis);
        $('#data_extra_id_peserta_for_reject').val(data_extra_id);
    });


    @if (Session::has('successMessage'))
        {
            Toastify({
                text: "Pendaftar berhasil dikonfirmasi",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "#4fbe87",
            }).showToast();
        }
    @endif
    @if (Session::has('rejectMessage'))
        {
            Toastify({
                text: "Pendaftar berhasil ditolak",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "#ff0000",
            }).showToast();
        }
    @endif
</script>
