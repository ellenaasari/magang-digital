<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Kaushan Script' rel='stylesheet'>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            font-family: 'Quicksand';
            /* background-color: #67A8C3; */
        }

        h1 {
            text-align: center;
            vertical-align: middle;

        }

        .container {
            height: 100vh;
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: center;
            flex-direction: column;

        }

        .card {
            width: fit-content;
            border-radius: 15px;
            padding: 10px 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
        }

        p {
            font-family: 'Quicksand';
            font-size: 10px;
        }

        .container .title {
            font-family: 'Kaushan Script';
            font-size: 40px;
            font-weight: bolder;
            {{--  color: #67A8C3;  --}}
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h2 class="title">Terima Kasih !</h2>
            <h3>Telah Mendaftar di Aplikasi Ekscool</h3>
            <br>
            <p>Akun kamu masih dalam proses peninjauan.
            Kami akan berusaha mengirimkan pesan kepadamu,
            Jika ada informasi terbaru terhadap akunmu.
            </p>
        </div>

    </div>
</body>

</html>
