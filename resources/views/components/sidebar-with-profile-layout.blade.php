<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">
    {{-- <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/extensions/toastify-js/src/toastify.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/all.min.css') }}">
    {{--  ONLINE LINK SOURCE  --}}
    {{--  <link rel="stylesheet" href="{{ asset('assets/css/pages/datatables.css') }}">  --}}
    {{-- <link rel="icon" href="https://media.geeksforgeeks.org/wp-content/cdn-uploads/gfg_200X200.png" type="image/x-icon"> --}}
    {{--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />  --}}
</head>

<body>

    @role('Admin')
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative mb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        {{-- <div class="card">
                            <div class="row">
                            <a href="#" class="nav__logo col-3">
                                <img src="http://127.0.0.1:8000/assets/home/img/ekscool.svg" alt="">
                            </a>
                            <p style="font-size: 15px; margin: 0px;" class="col-7 d-flex align-items-center justify-center">EKSCOOL</p>
                        </div> --}}
                        <div class="row">
                            <a href="#" class="nav__logo col-3">
                                <img src="http://127.0.0.1:8000/assets/home/img/ekscool.svg" alt="">
                            </a>
                            <p style="font-size: 15px; margin: 0px;" class="col-7 d-flex align-items-center justify-center">
                                EKSCOOL</p>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu mt-0">
                    <ul class="menu mt-0 pt-0">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item">
                            <a href="{{ route('dashboard') }}" class='sidebar-link'>
                                <i class="fa-solid fa-chart-simple"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="fa-solid fa-person-walking-arrow-right"></i>
                                <span>Pengajuan</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="{{ route('pengajuan-pendaftar') }}">Pengajuan Pendaftar</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('pengajuan-ekstrakurikuler') }}">Pengajuan Ekstrakurikuler</a>
                                </li>

                            </ul>
                        </li>
                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="fa-solid fa-user"></i>
                                <span>Peserta</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="{{ route('daftar-peserta') }}">Daftar Peserta</a>
                                </li>
                            </ul>

                        </li>
                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="fa-solid fa-user-graduate"></i>
                                <span>Kesiswaan</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="{{ route('daftar-kesiswaan') }}">Daftar Kesiswaan</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('tambah-kesiswaan') }}">Tambah Kesiswaan</a>
                                </li>
                            </ul>

                        </li>
                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="fa-solid fa-user-tie"></i>
                                <span>Pembina</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="{{ route('daftar-pembina') }}">Daftar Pembina</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('tambah-pembina') }}">Tambah Pembina</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="fa-solid fa-volleyball"></i>
                                <span>Ekstrakurikuler</span>
                            </a>
                            <ul class="submenu">

                                <li class="submenu-item">
                                    <a href="{{ route('daftar-ekstra') }}">Daftar Ekstra</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('tambah-ekstra') }}">Tambah Ekstra</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('kelola-ekstra') }}">Kelola Ekstra</a>
                                </li>

                            </ul>

                        </li>

                        <li class="sidebar-title">Tentang Akun</li>
                        <li class="sidebar-item ">
                            <a href="{{ route('profile') }}" class='sidebar-link'>
                                <i class="fa-solid fa-user"></i>
                                <span>Profile</span>
                            </a>

                        </li>

                        <li class="sidebar-item end">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                            this.closest('form').submit();"
                                    class='sidebar-link'>
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    <span>Logout</span>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- <div id="main" class=""> --}}
        {{-- <div style="width: 100%; height: 30vh;" class="bg-primary position-fixed"> --}}
        <div style="width: 100%; height: 30vh; z-index: -1; position: absolute;" class="bg-primary"></div>

        <nav style="height: 0px; " class="navbar pt-5 pb-0 navbar-expand navbar-light navbar-top">
            <header class="my-0 smx-2 position-absolute">
                <a href="#" class="burger-btn text-white d-block d-xl-none d-lg-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-lg-0">
                </ul>
                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-white">{{ Auth::user()->name }}</h6>
                                <p class="mb-0 text-sm text-white">{{ Auth::user()->getRoleNames()[0] }}</p>
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="assets/images/faces/1.jpg">
                                </div>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                        style="min-width: 11rem">
                        <li>
                            <h6 class="dropdown-header">Hello, {{ Auth::user()->name }}!</h6>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                                Profile</a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                        this.closest('form').submit();"
                                    class='sidebar-link'>
                                    <i class="icon-mid bi bi-box-arrow-left me-2"></i>
                                    Logout
                                </a>
                            </form>

                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        @elserole('Student')
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative mb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="row">
                            <a href="#" class="nav__logo col-3">
                                <img src="http://127.0.0.1:8000/assets/home/img/ekscool.svg" alt="">
                            </a>
                            <p style="font-size: 15px; margin: 0px;"
                                class="col-7 d-flex align-items-center justify-center">EKSCOOL</p>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu mt-0">
                    <ul class="menu mt-0 pt-0">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item">
                            <a href="{{ route('dashboard') }}" class='sidebar-link'>
                                <i class="fa-solid fa-chart-simple"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="fa-solid fa-volleyball"></i>
                                <span>Ekstrakurikuler</span>
                            </a>
                            <ul class="submenu">

                                <li class="submenu-item">
                                    <a href="{{ route('pendaftaran-ekstrakurikuler') }}">Pendaftaran Ekstrakurikuler</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('daftar-pengajuan-ekstra') }}">Daftar Pengajuan Ekstrakurikuler</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('daftar-ekstra') }}">Jadwal Ekstrakurikuler</a>
                                </li>
                            </ul>

                        </li>
                        <li class="sidebar-title">Tentang Akun</li>
                        <li class="sidebar-item ">
                            <a href="{{ route('profile') }}" class='sidebar-link'>
                                <i class="fa-solid fa-user"></i>
                                <span>Profile</span>
                            </a>
                        <li class="sidebar-item end">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                        this.closest('form').submit();"
                                    class='sidebar-link'>
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    <span>Logout</span>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div style="width: 100%; height: 30vh; z-index: -1; position: absolute;" class="bg-primary"></div>

        <nav style="height: 0px; " class="navbar pt-5 pb-0 navbar-expand navbar-light navbar-top">
            <header class="my-0 smx-2 position-absolute">
                <a href="#" class="burger-btn text-white d-block d-xl-none d-lg-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-lg-0">
                </ul>
                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-white">{{ Auth::user()->name }}</h6>
                                <p class="mb-0 text-sm text-white">{{ Auth::user()->getRoleNames()[0] }}</p>
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="assets/images/faces/1.jpg">
                                </div>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                        style="min-width: 11rem">
                        <li>
                            <h6 class="dropdown-header">Hello, {{ Auth::user()->name }}!</h6>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('profile') }}"><i
                                    class="icon-mid bi bi-person me-2"></i> My
                                Profile</a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                        this.closest('form').submit();"
                                    class='sidebar-link'>
                                    <i class="icon-mid bi bi-box-arrow-left me-2"></i>
                                    Logout
                                </a>
                            </form>

                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        @elserole('Extracurricular Leader')
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative mb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <div class="logo">
                                <a href="{{ route('dashboard') }}"><img
                                        src="{{ asset('assets/images/logo/ekscool.svg') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu mt-0">
                    <ul class="menu mt-0 pt-0">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item">
                            <a href="{{ route('dashboard') }}" class='sidebar-link'>
                                <i class="fa-solid fa-chart-simple"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="fa-solid fa-person-walking-arrow-right"></i>
                                <span>Pengajuan</span>
                            </a>
                            <ul class="submenu">

                                <li class="submenu-item">
                                    <a href="{{ route('pengajuan-ekstrakurikuler') }}">Pengajuan Ekstrakurikuler</a>
                                </li>

                            </ul>
                        </li>
                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="fa-solid fa-users"></i>
                                <span>Peserta</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="{{ route('daftar-peserta') }}">Daftar Peserta</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Tentang Akun</li>
                        <li class="sidebar-item ">
                            <a href="{{ route('profile') }}" class='sidebar-link'>
                                <i class="fa-solid fa-user"></i>
                                <span>Profile</span>
                            </a>
                            {{-- <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="component-alert.html">Alert</a>
                        </li>

                    </ul> --}}
                        </li>

                        <li class="sidebar-item end">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                        this.closest('form').submit();"
                                    class='sidebar-link'>
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    <span>Logout</span>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- <div id="main" class=""> --}}
        {{-- <div style="width: 100%; height: 30vh;" class="bg-primary position-fixed"> --}}
        <div style="width: 100%; height: 30vh; z-index: -1; position: absolute;" class="bg-primary"></div>

        <nav style="height: 0px; " class="navbar pt-5 pb-0 navbar-expand navbar-light navbar-top">
            <header class="my-0 smx-2 position-absolute">
                <a href="#" class="burger-btn text-white d-block d-xl-none d-lg-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-lg-0">
                </ul>
                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-white">{{ Auth::user()->name }}</h6>
                                <p class="mb-0 text-sm text-white">{{ Auth::user()->getRoleNames()[0] }}</p>
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="assets/images/faces/1.jpg">
                                </div>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                        style="min-width: 11rem">
                        <li>
                            <h6 class="dropdown-header">Hello, {{ Auth::user()->name }}!</h6>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                                Profile</a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                    this.closest('form').submit();"
                                    class='sidebar-link'>
                                    <i class="icon-mid bi bi-box-arrow-left me-2"></i>
                                    Logout
                                </a>
                            </form>

                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        @elserole('Student Manager')
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative mb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="row">
                            <a href="#" class="nav__logo col-3">
                                <img src="http://127.0.0.1:8000/assets/home/img/ekscool.svg" alt="">
                            </a>
                            <p style="font-size: 15px; margin: 0px;"
                                class="col-7 d-flex align-items-center justify-center">EKSCOOL</p>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu mt-0">
                    <ul class="menu mt-0 pt-0">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item">
                            <a href="{{ route('dashboard') }}" class='sidebar-link'>
                                <i class="fa-solid fa-chart-simple"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        {{-- <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="fa-solid fa-users"></i>
                                <span>Peserta</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="{{ route('daftar-peserta') }}">Daftar Peserta</a>
                                </li>
                            </ul>

                        </li> --}}
                        <div style="margin-top: .5rem;" class="ecek">
                            <li class="sidebar-item has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="fa-solid fa-users-rectangle"></i>
                                    <span>Kelas</span>
                                </a>
                                <ul class="sidebar-item submenu">
                                    {{-- @foreach ($studyprogram as $sp) --}}
                                    @foreach ($studyprogram as $sp)
                                        <li class="sidebar-item has-sub">
                                            <a href="#" class='sidebar-link'>
                                                {{-- <i class="fa-solid fa-users-rectangle"></i> --}}
                                                <span>{{ $sp->name }}</span>
                                            </a>
                                            <ul class="sidebar-item submenu mt-0">
                                                @foreach ($grades as $grade)
                                                    <li class="submenu-item">
                                                        <a
                                                            href="{{ route('daftar-peserta-by-sp', ['name' => $sp->name, 'gradeParam' => $grade->grade]) }}">{{ $grade->grade }}
                                                            {{ $sp->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            {{-- {{ route('daftar-peserta-by-sp', ['name' => $sp->name]) }} --}}
                                        </li>
                                    @endforeach


                                    {{-- @endforeach --}}
                                </ul>
                                {{-- {{ route('daftar-peserta-by-sp', ['name' => $sp->name]) }} --}}
                            </li>
                        </div>
                        <li class="sidebar-title">Tentang Akun</li>
                        <li class="sidebar-item ">
                            <a href="{{ route('profile') }}" class='sidebar-link'>
                                <i class="fa-solid fa-user"></i>
                                <span>Profile</span>
                            </a>
                            {{-- <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="component-alert.html">Alert</a>
                            </li>

                        </ul> --}}
                        </li>

                        <li class="sidebar-item end">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                            this.closest('form').submit();"
                                    class='sidebar-link'>
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    <span>Logout</span>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- <div id="main" class=""> --}}
        {{-- <div style="width: 100%; height: 30vh;" class="bg-primary position-fixed"> --}}
        <div style="width: 100%; height: 30vh; z-index: -1; position: absolute;" class="bg-primary"></div>

        <nav style="height: 0px; " class="navbar pt-5 pb-0 navbar-expand navbar-light navbar-top">
            <header class="my-0 smx-2 position-absolute">
                <a href="#" class="burger-btn text-white d-block d-xl-none d-lg-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-lg-0">
                </ul>
                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-white">{{ Auth::user()->name }}</h6>
                                <p class="mb-0 text-sm text-white">{{ Auth::user()->getRoleNames()[0] }}</p>
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="assets/images/faces/1.jpg">
                                </div>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                        style="min-width: 11rem">
                        <li>
                            <h6 class="dropdown-header">Hello, {{ Auth::user()->name }}!</h6>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                                Profile</a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                        this.closest('form').submit();"
                                    class='sidebar-link'>
                                    <i class="icon-mid bi bi-box-arrow-left me-2"></i>
                                    Logout
                                </a>
                            </form>

                        </li>
                    </ul>
                </div>
            </div>

        </nav>
    @endrole
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Need: Apexcharts -->
    <script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('assets/extensions/toastify-js/src/toastify.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/datatable/datatables.min.js') }}"></script>
    {{--  OFFLINE SOURCE  --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.4/apexcharts.min.js" integrity="sha512-oUoSexkALUPd0BQaO/0m029XijXQ7XlFbPIhDNvzD8r2XhUjidiRo/8YhJGpoevLZVRwRFBvygSc9jV2TagjfQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    {{-- <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script> --}}
</body>

</html>
