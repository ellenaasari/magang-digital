<!DOCTYPE html>
<html>

<head>
    <title>Laporan Ekstrakurikuler</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> --}}
</head>

<body>
    <style type="text/css">
        * {
            font-family: 'Times New Roman', Times, serif;

        }

        body {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table tr td,
        table tr th {
            font-size: 9pt;
            padding: 5px 7px;
        }
    </style>

    <h3 style="margin-bottom: 0px;"><b>Daftar Peserta Ekstrakurikuler</b></h3>
    <h3 style="margin-top: 0px;">SMK NEGERI 6 JEMBER</h3>
    <table border="1px solid black">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Nis</th>
                <th>Ekstrakurikuler yang diikuti</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp

            @foreach ($datapeserta as $peserta)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $peserta[0]->name }}</td>
                    <td>{{ $grade }} {{ $sp }}</td>
                    <td>{{ $peserta[0]->nis }}</td>
                    <td>
                        @foreach ($peserta[1] as $ekstra)
                        @if(count($peserta[1]) > 0)
                            {{ $loop->iteration }}. {{ $ekstra->name }}
                            <br>
                        @endif
                        {{--  @if ($loop->index == count($peserta[1]) - 1)
                                {{ $ekstra->name }}
                            @else
                                {{ $ekstra->name }},
                            @endif  --}}
                        @endforeach
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>

</body>

</html>
