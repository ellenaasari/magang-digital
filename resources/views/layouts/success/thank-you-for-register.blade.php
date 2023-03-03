<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/error.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png">
</head>

<body class="text-center">
    <div style="height:100vh;" id="error">
        <div style="margin-top: 25vh" class="error-page container">
            <div class="col-12">
                <h1>Congratulation</h1>
                <p>Terima Kasih ! Telah mendaftar di aplikasi Ekscool <br>
                    Akun kamu masih dalam tahap peninjauan nih <br>
                    Jangan lupa cek kotak masuk di mail kamu.
                </p>

                <div class="btn btn-outline-primary"><a href="{{ route('login') }}">Kembali</a></div>
            </div>
        </div>
    </div>
</body>

</html>
