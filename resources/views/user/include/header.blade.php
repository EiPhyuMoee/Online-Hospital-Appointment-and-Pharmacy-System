<header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="../assets/img/hp-logo.png" alt="" style="width: 12%; height: 10%; object-fit: cover;">
                <span class="text-primary">SafeNest</span>- Hospital
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->routeIs('home-page') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home-page') }}">Home</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('alldoctors') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('alldoctors') }}">Doctors</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('allblog') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('allblog') }}">Blogs</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="{{ route('all-report') }}">Lab Test</a></li>
                            <li><a class="dropdown-item" href="{{ route('all-medicine') }}">Pharmacy</a></li>
                        </ul>
                    </li> --}}
                     {{-- <li class="nav-item {{ request()->routeIs('all-medicine') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('all-medicine') }}">Pharmacy</a>
                    </li> --}}
                    <li class="nav-item {{ request()->routeIs('contact.create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contact.create') }}">Contact</a>
                    </li>

                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('myappointment') }}"
                                style="background-color: #00D9A5; color: white; border-radius: 10px;">
                                Appointments
                            </a>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('foodpage') }}"
                                style="background-color: #00D9A5; color: white; margin-left: 7px; margin-right: 10px; border-radius: 10px;">
                                Food
                            </a>
                        </li> --}}

                        <li class="nav-item dropdown" style="margin-left: 10px;">
                            <a id="userDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="background-color: #00D9A5; color: white; border-radius: 10px;">
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>

                                <div class="dropdown-divider"></div>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </div>
                        </li>

                    @endauth

                    @guest
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
