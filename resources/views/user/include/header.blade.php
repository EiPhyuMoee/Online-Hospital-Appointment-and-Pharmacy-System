<header>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">

                        @if(Route::has('login'))
                            @auth
                                <div class="btn-group" role="group" style="color: white;">
                                    <a class="btn btn-primary" style="color: white;margin-left: 10px;margin-right: 10px" href="{{ route('myquery') }}">My Query</a>

                                    <div class="btn-group">
                                        <button type="button" style="background-color: #00D9A5;" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            History
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('myaprescription')}}">Prescroption</a>
                                            <a class="dropdown-item" href="{{route('show-cart-Lab')}}">Lab</a>
                                            <a class="dropdown-item" href="{{route('show-cartMed')}}">Medicines</a>
                                        </div>
                                    </div>

                                    <div class="btn-group ml-2">
                                        <button type="button" style="background-color: #00D9A5;" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Cart
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('show-cart-Lab')}}">Lab</a>
                                            <a class="dropdown-item" href="{{route('show-cartMed')}}">Medicines</a>
                                        </div>
                                    </div>

                                    <div class="btn-group ml-2">
                                        <button type="button" style="background-color: #00D9A5;" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Order
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('myorder') }}">My Order</a>
                                            <a class="dropdown-item" href="{{route('show-lab-order')}}">Lab</a>
                                            <a class="dropdown-item" href="{{route('show-Medi-order')}}">Medicines</a>
                                        </div>
                                    </div>


                                </div>

                            @endauth
                         @endif

                    </div>
                </div>

            </div> <!-- .row -->
        </div> <!-- .container -->


    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}"><span class="text-primary">SafeNest</span>- Hospital</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="{{route('all-report')}}">Lab Test</a></li>
                            <li><a class="dropdown-item" href="{{route('all-medicine')}}">Pharmacy</a></li>
                        </ul>
                    </li>
                     <li class="nav-item {{ request()->routeIs('contact.create') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contact.create') }}">Contact</a>
                    </li>

                    @if(Route::has('login'))
                     @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('myappointment')}}" style="background-color: #00D9A5;color: white; border-radius: 10px;">Appointments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('foodpage')}}" style="background-color: #00D9A5;color: white; margin-left: 7px; border-radius: 10px;">Food</a>
                            </li>
                            <x-app-layout>

                            </x-app-layout>
                     @else
                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
                    </li>
                        @endauth
                    @endif


                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>
