<link href="{{ asset('assets2/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets2/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets2/css/themify-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets2/css/elegant-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets2/css/flaticon-set.css') }}" rel="stylesheet">
<link href="{{ asset('assets2/css/magnific-popup.css') }}" rel="stylesheet">
<link href="{{ asset('assets2/css/swiper-bundle.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets2/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('assets2/css/validnavs.css') }}" rel="stylesheet">
<link href="{{ asset('assets2/css/helper.css') }}" rel="stylesheet">
<link href="{{ asset('assets2/css/unit-test.css') }}" rel="stylesheet">
<link href="{{ asset('assets2/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('style.css') }}" rel="stylesheet">

@livewireStyles

@yield('style2')
@stack('style2')

<style>
    .btn-float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        right:40px;
        background-color: #ff9218;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        box-shadow: 2px 2px 3px #999;
    }

    .btn-float-inner{
        margin-top:22px;
    }

    .select2-container--default .select2-selection--single {
        background-color: #fff;
        border: 1px solid #d5d5d5;
        border-radius: 4px;
        height: 37px;
    }
</style>
