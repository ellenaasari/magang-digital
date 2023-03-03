<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <x-x-icon></x-x-icon>
    <style>
        .card{
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
        }
    </style>
</head>

<body>

    @role('Admin')
        <x-sidebar-with-profile-layout>
        </x-sidebar-with-profile-layout>
        <div id="main" class="pt-5 pt-lg-0 pt-md-5 pt-sm-5 px-3">
            <div class="text-white h4">Selamat datang di Ekscool App, {{ Auth::user()->name }}</div>
            <section class="row">
                <div class="col-12 col-lg-4">
                    <div class="py-2 my-0">
                        <div style="margin-top: -15px" class="col-12 col-lg-12 col-md-12">
                            <div style="border-radius: 4px;" class="card my-3 ">
                                <div class="card-body px-4 ">
                                    <div class="row">
                                        <div style="top: -10px; position: absolute; box-shadow: 0 4px 10px rgba(0, 0, 0, .1); padding: 10px 15px; border-radius: 10px;"
                                            class=" col-2 col-sm-6 col-md-8 col-lg-5 card"></div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Total Pendaftar</h6>
                                            <h6 class="font-extrabold mb-0">{{ count($users) }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 col-md-12">
                            <div style=" border-radius: 4px;" class="card my-3 ">
                                <div class="card-body px-4 ">
                                    <div class="row">
                                        <div style="top: -10px; position: absolute; box-shadow: 0 4px 10px rgba(0, 0, 0, .1); padding: 10px 15px; border-radius: 10px;"
                                            class=" col-2 col-sm-6 col-md-8 col-lg-5 card"></div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Total Ekstrakurikuler</h6>
                                            <h6 class="font-extrabold mb-0">{{ count($dataEkstra) }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="card-header">
                                <h4>Statistik Gender</h4>
                            </div>
                            <div class="card-body col-lg-12">
                                <div id="chart-visitors-profile" class="col-lg-8 mx-auto"></div>
                            </div>
                        </div>
                    </div>

                </div>

                <div style="border-radius: 5px; height: min-content" class="card col-lg-8 mt-4">
                    <div style="top: -25px; position: absolute; width: auto; box-shadow: 0 4px 10px rgba(0, 0, 0, .1); padding: 10px 15px; border-radius: 10px;"
                        class="card-header">
                        <h5 class="mb-0">Jadwal Ekstrakurikuler</h5>
                    </div>
                    <div class="card-body pt-4 mt-0">
                        <div class="table-responsive">
                            <table class="table">
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
            </section>

        </div>
        @elserole('Student')
        <x-sidebar-with-profile-layout>
        </x-sidebar-with-profile-layout>
        <div id="main" class="pt-5 pt-lg-0 pt-md-5 pt-sm-5 px-3">
            <div class="text-white h4">Selamat datang di Ekscool App
                {{-- , {{ Auth::user()->name }} --}}
            </div>
            <section class="row col-12">
                @if (count($myMagdi) > 0)
                    <div class="col-lg-6">
                        <div class="card my-3">
                            <div class="card-body px-4 ">
                                <div class="row">
                                    <div style="top: -10px; position: absolute; box-shadow: 0 4px 10px rgba(0, 0, 0, .1); padding: 10px 15px; border-radius: 10px;"
                                        class=" col-2 col-sm-6 col-md-8 col-lg-5 card"></div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Ekstrakurikuler yang diikuti</h6>
                                        <h6 class="font-extrabold mb-0">{{ count($myMagdi) }}</h6>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div style="border-radius: 5px; height: min-content" class="card  mt-4">
                            <div style="top: -25px; position: absolute; width: auto; box-shadow: 0 4px 10px rgba(0, 0, 0, .1); padding: 10px 15px; border-radius: 10px;"
                                class="card-header mx-3">
                                <h5 class="mb-0 ">Jadwal Ekstrakurikuler</h5>
                            </div>
                            <div class="card-body pt-4 mt-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Ekstrakurikuler</th>
                                                <th>Hari Pelaksanaan</th>
                                                <th>Waktu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($myMagdi as $ekstra)
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
                @else
                    <div class="col-lg-6">
                        <div class="card my-3 ">
                            <div class="card-body px-4 ">
                                <div class="row">
                                    <div style="top: -10px; position: absolute; box-shadow: 0 4px 10px rgba(0, 0, 0, .1); padding: 10px 15px; border-radius: 10px;"
                                        class=" col-2 col-sm-6 col-md-8 col-lg-5 card"></div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-12">
                                        <h6 class="text-muted font-semibold">Ekstrakurikuler yang diikuti</h6>
                                        <h6 class="font-extrabold mb-0">Kamu belum mengikuti Ekstrakurikuler apapun</h6>
                                        <p class="mb-0">Klik Daftar Ekstrakurikuler Untuk mendaftar ekstrakurikuler</p>
                                    </div>
                                </div>
                                <a href="{{ route('pendaftaran-ekstrakurikuler') }}" style="width: 100%;" class="btn btn-primary mt-2" style="">Daftar Ekstrakurikuler</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card my-3">
                            <div class="card-body px-4 ">
                                <div class="row">
                                    {{-- <div style="top: -10px; position: absolute; box-shadow: 0 4px 10px rgba(0, 0, 0, .1); padding: 10px 15px; border-radius: 10px;"
                                        class=" col-2 col-sm-6 col-md-8 col-lg-5 card"></div> --}}
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-12">
                                        <h6 class="">Setelah melakukan pendaftaran ekstrakurikuler</h6>
                                        <p>Mohon untuk menunggu pengonfirmasian pengajuan Ekstrakurikuler kamu</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endif

                {{-- <div class="col-lg-6">
                    <div style=" border-radius: 4px;" class="card my-3 ">
                        <div class="card-body px-4 ">
                            <div class="row">
                                <div style="top: -10px; position: absolute; box-shadow: 0 4px 10px rgba(0, 0, 0, .1); padding: 10px 15px; border-radius: 10px;"
                                    class=" col-2 col-sm-6 col-md-8 col-lg-5 card"></div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Total Ekstrakurikuler</h6>
                                    <h6 class="font-extrabold mb-0">{{ count($dataEkstra) }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </section>

        </div>
        @elserole('Extracurricular Leader')
        <x-sidebar-with-profile-layout>
        </x-sidebar-with-profile-layout>
        <div id="main" class="pt-5 pt-lg-0 pt-md-5 pt-sm-5 px-3">
            <div class="text-white h4">Selamat datang di Ekscool App, {{ Auth::user()->name }}</div>
            <section class="row">
                <div class="col-12 col-lg-4">
                    <div class="py-2 my-0">
                        <div style="margin-top: -15px" class="col-12 col-lg-12 col-md-12">
                            <div style="border-radius: 4px;" class="card my-3 ">
                                <div class="card-body px-4 ">
                                    <div class="row">
                                        <div style="top: -10px; position: absolute; box-shadow: 0 4px 10px rgba(0, 0, 0, .1); padding: 10px 15px; border-radius: 10px;"
                                            class=" col-2 col-sm-6 col-md-8 col-lg-5 card"></div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Total Pendaftar</h6>
                                            <h6 class="font-extrabold mb-0">{{ count($submissionExtra) }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div style="border-radius: 5px; height: min-content" class="card col-lg-8 mt-4">
                    <div style="top: -25px; position: absolute; width: auto; box-shadow: 0 4px 10px rgba(0, 0, 0, .1); padding: 10px 15px; border-radius: 10px;"
                        class="card-header">
                        <h5 class="mb-0">Nama Peserta</h5>
                    </div>
                    <div class="card-body pt-4 mt-0">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Peserta</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($submissionExtra as $extra)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $extra->user_name }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        @elserole('Student Manager')
        <x-sidebar-with-profile-layout :studyprogram="$studyprogram" :grades="$grades">
        </x-sidebar-with-profile-layout>
        <div id="main" class="pt-5 pt-lg-0 pt-md-5 pt-sm-5 px-3">
            <div class="text-white h4">Selamat datang di Excool App, {{ Auth::user()->name }}</div>
            <section class="row">
                <div class="col-12 col-lg-4">
                    <div class="py-2 my-0">
                        <div style="margin-top: -15px" class="col-12 col-lg-12 col-md-12">
                            <div style="border-radius: 4px;" class="card my-3 ">
                                <div class="card-body px-4 ">
                                    <div class="row">
                                        <div style="top: -10px; position: absolute; box-shadow: 0 4px 10px rgba(0, 0, 0, .1); padding: 10px 15px; border-radius: 10px;"
                                            class=" col-2 col-sm-6 col-md-8 col-lg-5 card"></div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Total Pendaftar</h6>
                                            <h6 class="font-extrabold mb-0">{{ count($users) }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 col-md-12">
                            <div style=" border-radius: 4px;" class="card my-3 ">
                                <div class="card-body px-4 ">
                                    <div class="row">
                                        <div style="top: -10px; position: absolute; box-shadow: 0 4px 10px rgba(0, 0, 0, .1); padding: 10px 15px; border-radius: 10px;"
                                            class=" col-2 col-sm-6 col-md-8 col-lg-5 card"></div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Total Ekstrakurikuler</h6>
                                            <h6 class="font-extrabold mb-0">{{ count($dataEkstra) }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="card-header">
                                <h4>Statistik Gender</h4>
                            </div>
                            <div class="card-body col-lg-12">
                                <div id="chart-visitors-profile" class="col-lg-8 mx-auto"></div>
                            </div>
                        </div>
                    </div>

                </div>

                <div style="border-radius: 5px; height: min-content" class="card col-lg-8 mt-4">
                    <div style="top: -25px; position: absolute; width: auto; box-shadow: 0 4px 10px rgba(0, 0, 0, .1); padding: 10px 15px; border-radius: 10px;"
                        class="card-header">
                        <h5 class="mb-0">Jadwal Ekstrakurikuler</h5>
                    </div>
                    <div class="card-body pt-4 mt-0">
                        <div class="table-responsive">
                            <table class="table">
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
            </section>

        </div>
    @endrole
</body>

{{-- <script src="{{ asset('assets/custom/dashboard.js') }}"></script> --}}
<script>
    let jquery_datatable = $(".table").DataTable();

    $.get('getGender', function(data) {
        var lengthLaki = data[0].length;
        var lengthPerempuan = data[1].length;
        let optionsVisitorsProfile = {
            series: [lengthLaki, lengthPerempuan],
            labels: ['Laki laki', 'Perempuan'],
            colors: ['#06AFDA', '#F24597'],
            chart: {
                type: 'donut',
                width: '100%',
                height: '300px'
            },
            legend: {
                position: 'bottom'
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: '30%'
                    }
                }
            }
        }
        var chartVisitorsProfile = new ApexCharts(document.getElementById('chart-visitors-profile'),
            optionsVisitorsProfile)
        chartVisitorsProfile.render();
    });
    @if (Session::has('successMessage'))
        {
            Toastify({
                text: "Kamu berhasil melakukan pengajuan pendaftaran ekstrakurikuler",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "#4fbe87",
            }).showToast();
        }
    @endif
</script>

</html>
