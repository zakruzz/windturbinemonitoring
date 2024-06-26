@section('tittle2', 'Real-Time')
@section('style2')
    <style>
        .btn-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #0284c7 !important;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
        }

        .btn-float:hover {
            color: #FFF;
        }

        .btn-float-inner {
            margin-top: 22px;
        }
    </style>
@endsection
<div>
    @include('sections.modals.config')
    <div wire:poll="refreshPage" class="banner-style-one-area" >
        <div class=" banner-style-one">
         <div class="content">
            <div class="default-padding box-layout overflow-hidden bottom-less services-style-one-area bg-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-6 col-md-6 mb-30 mb">
                            <div class="services-style-one small-card ">
                                <h3>Turbin 7</h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-30 mb">
                            <div class="services-style-one small-card" style="width: 400px">
                                <h3>power coefficient : 150</h3>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 mb-30 mb">
                            <div class="services-style-one small-card ">
                                <h3>Turbin 9</h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-30 mb">
                            <div class="services-style-one small-card" style="width: 400px">
                                <h3>power coefficient : 250</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 mb-30 mb">
                            <div class="services-style-one card">
                                <h5>Power(mW)</h5>
                                <h3>{{ $lastData->power_1 }} mW</h3>
                                <hr>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 mb-30 mb">
                            <div class="services-style-one card">
                                <h5>RPM</h5>
                                <h3>{{ $lastData->rpm_1 }} rpm</h3>
                                <hr>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 mb-30 mb">
                            <div class="services-style-one card ">
                                <h5>Power (mW)</h5>
                                <h3>{{ $lastData->power_2 }} mW</h3>
                                <hr>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 mb-30 mb">
                            <div class="services-style-one card ">
                                <h5>RPM</h5>
                                <h3>{{ $lastData->rpm_2 }} rpm</h3>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 mb-30 mb">
                            <div class="services-style-one card">
                                <h5>Voltage (V)</h5>
                                <h3>{{ $lastData->voltage_1}}V</h3>
                                <hr>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 mb-30 mb">
                            <div class="services-style-one card">
                                <h5>Curent (mA)</h5>
                                <h3>{{ $lastData->current_1}} mA</h3>
                                <hr>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 mb-30 mb">
                            <div class="services-style-one card ">
                                <h5>Voltage (V)</h5>
                                <h3>{{ $lastData->voltage_2}} V</h3>
                                <hr>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 mb-30 mb">
                            <div class="services-style-one card ">
                                <h5>Current (mA)</h5>
                                <h3>{{ $lastData->current_2}} mA</h3>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<a wire:click="showConfig" href="javascript:void(0)" class="btn-float">
    <i class="fa fa-tachometer-alt btn-float-inner"></i>
</a>

</div>
