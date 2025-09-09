<div id="layoutSidenav_nav" style="width: 250px;">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">

                <!-- Dashboard -->
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('home') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <!-- Users -->
                @auth
                    @if (Auth::user()->usertype == 1)
                        <div class="sb-sidenav-menu-heading">Users</div>
                        <a class="nav-link" href="{{ route('users.create') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                            Add User
                        </a>
                        <a class="nav-link" href="{{ route('users.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-users-cog"></i></div>
                            Manage Users
                        </a>

                        <div class="sb-sidenav-menu-heading">Doctors</div>
                        <a class="nav-link" href="{{ route('doctor.create') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-md"></i></div>
                            Add Doctor
                        </a>
                        <a class="nav-link" href="{{ route('doctor.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-stethoscope"></i></div>
                            Manage Doctors
                        </a>
                    @endif
                @endauth
                @auth
                    @if (Auth::user()->usertype == 1)
                        <div class="sb-sidenav-menu-heading">Blog</div>
                        <a class="nav-link" href="{{ route('category.create') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-folder-plus"></i></div>
                            Add Category
                        </a>
                        <a class="nav-link" href="{{ route('blog.create') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-pen-nib"></i></div>
                            Add Blog
                        </a>
                        <a class="nav-link" href="{{ route('blog.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-blog"></i></div>
                            Manage Blog
                        </a>
                    @endif
                @endauth

                <!-- Appointments & Queries -->
                @auth
                    @if (Auth::user()->usertype == 4 || Auth::user()->usertype == 1)
                        <div class="sb-sidenav-menu-heading">Appointments</div>
                        <a class="nav-link" href="{{ route('showappointment') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-calendar-check"></i></div>
                            Manage Appointments
                        </a>
                           <!-- Appointment History -->
                @auth
                    @if (Auth::user()->usertype == 2 || Auth::user()->usertype == 1)
                        <div class="sb-sidenav-menu-heading">History</div>
                        <a class="nav-link" href="{{ route('showhistory') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-history"></i></div>
                            Appointment History
                        </a>
                    @endif
                @endauth

                        <div class="sb-sidenav-menu-heading">Contact</div>
                        <a class="nav-link" href="{{ route('contact.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-question-circle"></i></div>
                            Manage Contact
                        </a>
                    @endif
                @endauth

                <!-- Food & Orders -->
                {{-- @auth
                    @if (Auth::user()->usertype == 3 || Auth::user()->usertype == 1)
                        <div class="sb-sidenav-menu-heading">Food</div>
                        <a class="nav-link" href="{{ route('food.create') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-plus-square"></i></div>
                            Add Food
                        </a>
                        <a class="nav-link" href="{{ route('food.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-hamburger"></i></div>
                            Manage Food
                        </a>

                        <div class="sb-sidenav-menu-heading">Orders</div>
                        <a class="nav-link" href="{{ route('manage.order') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-shopping-basket"></i></div>
                            Manage Orders
                        </a>
                    @endif
                @endauth --}}

                <!-- Blog -->


                <!-- Pharmacy & Lab -->
                @auth
                    @if (Auth::user()->usertype == 5 || Auth::user()->usertype == 1)
                        <div class="sb-sidenav-menu-heading">Pharmacy</div>
                        <a class="nav-link" href="{{ route('pharmachy.create') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-capsules"></i></div>
                            Add Medicines
                        </a>
                        <a class="nav-link" href="{{ route('pharmachy.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-pills"></i></div>
                            Manage Medicines
                        </a>
                        <a class="nav-link" href="{{ route('medi-order') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-notes-medical"></i></div>
                            Manage Orders
                        </a>

                        {{-- <div class="sb-sidenav-menu-heading">Laboratory</div>
                        <a class="nav-link" href="{{ route('lab.create') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-vial"></i></div>
                            Add Test
                        </a>
                        <a class="nav-link" href="{{ route('lab.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-microscope"></i></div>
                            Manage Tests
                        </a>
                        <a class="nav-link" href="{{ route('lab-order') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-clipboard-list"></i></div>
                            Manage Orders
                        </a> --}}
                    @endif
                @endauth

            </div>
        </div>
    </nav>
</div>
