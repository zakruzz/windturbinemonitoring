<nav id="sidebar">
    <div class="sidebar-content">
        <div class="content-header justify-content-lg-center bg-black-10">
            <div>
                <span class="smini-visible fw-bold tracking-wide fs-lg">
                  w<span class="text-primary">t</span>
                </span>
                <a class="link-fx fw-bold tracking-wide mx-auto" href="{{ route('real-time') }}">
                    <span class="smini-hidden">
                        <i class="fa fa-wind text-primary"></i>
                        <span class="fs-4 text-dual">wind</span><span class="fs-4 text-primary">turbine</span>
                    </span>
                </a>
            </div>
            <div>
                <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout"
                        data-action="sidebar_close">
                    <i class="fa fa-fw fa-times"></i>
                </button>
            </div>
        </div>
        <div class="js-sidebar-scroll">
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('real-time') }}">
                            <i class="nav-main-link-icon fa fa-chart-line"></i>
                            <span class="nav-main-link-name">Real-Time Monitoring</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ request()->is('history') ? 'active' : '' }}" href="{{ route('history') }}">
                            <i class="nav-main-link-icon fa fa-history"></i>
                            <span class="nav-main-link-name">History Record</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                            <i class="nav-main-link-icon fa fa-info-circle"></i>
                            <span class="nav-main-link-name">Contact</span>
                        </a>
                    </li>
{{--                    <li class="nav-main-item">--}}
{{--                        <a class="nav-main-link {{ request()->is('/user') ? 'active' : '' }}" href="{{ route('user') }}">--}}
{{--                            <i class="nav-main-link-icon fa fa-user"></i>--}}
{{--                            <span class="nav-main-link-name">User</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </div>
    </div>
</nav>
