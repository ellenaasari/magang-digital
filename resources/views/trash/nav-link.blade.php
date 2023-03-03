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
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem">
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
