<header id="page-header">
    <div class="content-header">
        <div class="space-x-1">
            <a class="link-fx fw-bold" href="{{ route('real-time') }}">
                <i class="fa fa-wind text-primary"></i>
                <span class="fs-4 text-dual">wind</span><span class="fs-4 text-primary">turbine</span>
            </a>
        </div>
        <div class="d-none d-lg-block">
            <ul class="nav-main nav-main-horizontal nav-main-hover">
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
{{--                <li class="nav-main-item">--}}
{{--                    <a class="nav-main-link {{ request()->is('/user') ? 'active' : '' }}" href="{{ route('user') }}">--}}
{{--                        <i class="nav-main-link-icon fa fa-user"></i>--}}
{{--                        <span class="nav-main-link-name">User</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </div>
        <div class="space-x-1">
            <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
{{--            <div class="dropdown d-inline-block">--}}
{{--                <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                    <i class="fa fa-user d-sm-none"></i>--}}
{{--                    <span class="d-none d-sm-inline-block fw-semibold">J. Smith</span>--}}
{{--                    <i class="fa fa-angle-down opacity-50 ms-1"></i>--}}
{{--                </button>--}}
{{--                <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">--}}
{{--                    <div class="px-2 py-3 bg-body-light rounded-top">--}}
{{--                        <h5 class="h6 text-center mb-0">--}}
{{--                            John Smith--}}
{{--                        </h5>--}}
{{--                    </div>--}}
{{--                    <div class="p-2">--}}
{{--                        <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1"--}}
{{--                           href="{{ route('logout') }}">--}}
{{--                            <span>Sign Out</span>--}}
{{--                            <i class="fa fa-fw fa-sign-out-alt opacity-25"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</header>
