<!doctype html>
<html lang="en">
<head>

    @include('layouts.meta')

    @include('layouts.style')

</head>
<body>

@yield('modal')

<div id="page-container" class="sidebar-dark side-scroll page-header-fixed page-header-dark main-content-boxed">

    @include('layouts.sidebar')

    @include('layouts.navbar')

    <main id="main-container">
        <div class="content">

            @yield('content')

        </div>
    </main>
    @include('layouts.footer')
</div>

@include('layouts.script')

</body>
</html>
