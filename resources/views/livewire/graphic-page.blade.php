@section('tittle2', 'Graph-page')
<div>
    <div wire:poll="refreshPage" class="banner-style-one-area" ">
        <div class=" banner-style-one">
            <div class="content">
            <div class="default-padding box-layout overflow-hidden bottom-less services-style-one-area bg-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-1 col-lg-6 col-md-6 mb-30 mb">
                            <div class="services-style-one card-graph">
                               <h3>Power</h3>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-6 mb-30 mb">
                            <div class="services-style-one graph">
                                @include('sections.graphs.power-1-blade')
                            </div>
                        </div>
                        <div class="col-xl-1 col-lg-6 col-md-6 mb-30 mb">
                            <div class="services-style-one card-graph">
                               <h3>RPM</h3>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-6 mb-30 mb">
                            <div class="services-style-one graph">
                                @include('sections.graphs.rpm-3-blade')
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-1 col-lg-6 col-md-6 mb-30 mb">
                            <div class="services-style-one card-graph">
                               <h3>Power</h3>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-6 mb-30 mb">
                            <div class="services-style-one graph">
                                @include('sections.graphs.power-2-blade')
                            </div>
                        </div>
                        <div class="col-xl-1 col-lg-6 col-md-6 mb-30 mb">
                            <div class="services-style-one card-graph">
                               <h3>RPM</h3>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-6 mb-30 mb">
                            <div class="services-style-one graph">
                                @include('sections.graphs.rpm-5-blade')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
