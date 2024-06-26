<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts2.meta')

    @include('layouts2.style')

</head>

<body>

    @include('layouts2.header')
    @yield('content2')
    
    @include('layouts2.footer')
    @include('layouts2.script')

</body>

</html>
