<header>
    <!-- Start Navigation -->
    <nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed dark no-background">
        <div class="container-fill d-flex justify-content-between align-items-center">


            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ route('dashboard') }}">
                    <i class="fa fa-wind text-primary"></i>
                    <span class="fs-4 text-dual">wind</span><span class="fs-4 text-primary">turbine</span>
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <img src="assets/img/logo.png" alt="Logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>

                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                    <li>
                        <a href="{{ route('real-time') }}"
                            class="dropdown-toggle active {{ request()->is('real-time') ? 'active' : '' }} ">Real Time
                            monitoring</a>
                    </li>
                    <li>
                        <a href="{{ route('graph') }}"
                            class="dropdown-toggle active {{ request()->is('graph') ? 'active' : '' }}">Graphic</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"
                            class="dropdown-toggle active {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                    </li>

                    @auth
                        <li>
                            <a href="{{ route('record') }}"
                                class="dropdown-toggle active {{ request()->is('record') ? 'active' : '' }}">Record</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" class="dropdown-toggle active">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}" class="dropdown-toggle active">
                                <i class="fas fa-sign-in-alt"></i> Login
                            </a>
                        </li>
                    @endauth

                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
        <!-- Overlay screen for menu -->
        <div class="overlay-screen"></div>
        <!-- End Overlay screen for menu -->
    </nav>
    <!-- End Navigation -->
</header>
