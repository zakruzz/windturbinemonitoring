@livewireScripts

<script src="{{asset('assets/app/js/codebase.app.min-5.0.js')}}"></script>
<script src="{{asset('assets/app/js/lib/jquery.min.js')}}"></script>
<script src="{{ asset('assets/app/js/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript" src="https://code.highcharts.com/stock/highstock.js"></script>
<script type="text/javascript" src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript" src="https://code.highcharts.com/modules/export-data.js"></script>
<script type="text/javascript" src="https://code.highcharts.com/modules/accessibility.js"></script>

<script type="text/javascript">
    window.addEventListener('showModalConfig',function(e){
        console.log("test")
        $('#modalConfig').modal('show')
    });

    window.addEventListener('hideModalConfig',function(e){
        $('#modalConfig').modal('hide')
    });
</script>

@yield('scripts')
@stack('scripts')

<script>Codebase.helpersOnLoad(['jq-magnific-popup', 'js-flatpickr', 'jq-datepicker', 'jq-colorpicker', 'jq-maxlength', 'jq-select2', 'jq-rangeslider', 'jq-masked-inputs', 'jq-pw-strength']);</script>
