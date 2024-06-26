@livewireScripts

{{-- tamplate --}}
<script src="{{ asset('assets2/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets2/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets2/js/jquery.appear.js') }}"></script>
<script src="{{ asset('assets2/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets2/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets2/js/modernizr.custom.13711.js') }}"></script>
<script src="{{ asset('assets2/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets2/js/wow.min.js') }}"></script>
<script src="{{ asset('assets2/js/progress-bar.min.js') }}"></script>
<script src="{{ asset('assets2/js/circle-progress.js') }}"></script>
<script src="{{ asset('assets2/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets2/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets2/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets2/js/count-to.js') }}"></script>
<script src="{{ asset('assets2/js/jquery.scrolla.min.js') }}"></script>
<script src="{{ asset('assets2/js/YTPlayer.min.js') }}"></script>
<script src="{{ asset('assets2/js/TweenMax.min.js') }}"></script>
<script src="{{ asset('assets2/js/validnavs.js') }}"></script>
<script src="{{ asset('assets2/js/main.js') }}"></script>

<script type="text/javascript" src="https://code.highcharts.com/stock/highstock.js"></script>
<script type="text/javascript" src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript" src="https://code.highcharts.com/modules/export-data.js"></script>
<script type="text/javascript" src="https://code.highcharts.com/modules/accessibility.js"></script>

<script type="text/javascript">
    window.addEventListener('showModalConfig', function(e) {
        $('#modalConfig').modal('show')
    });
    window.addEventListener('hideModalConfig', function(e) {
        $('#modalConfig').modal('hide')
    });
</script>

@yield('script2')
@stack('script2')

