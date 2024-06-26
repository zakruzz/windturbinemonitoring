@section('tittle2', 'Record-Page')
<div>
    <div class="banner-style-one-area" ">
        <div class=" banner-style-one">
        <div class="content" style="margin-bottom: 88px">
            <div class="default-padding box-layout overflow-hidden bottom-less services-style-one-area bg-area " style="padding: 40px">
                <div class="container">
                    <div class="row mb-35" style="width: 82rem">
                        <div class="col-md-12">
                            <div class="block block-rounded">
                                <div class="block-content block-content-full">
                                    <div class="row bg-area justify-">
                                        <div class="col-md-10 mb-2 pt-15">
                                            <input type="date" wire:model.defer="date" class="form-control"
                                                name="example-text-input" placeholder="Choose" style="height:58px ">
                                        </div>
                                        <div class="col-md-2" style="padding: 15px">
                                            <button class=" btn-primary" wire:click="submitFilter">Filter Data <i
                                                    class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (!$data)
                        <div class="col-md-12 text-center">
                            <br>
                            <span class="py-4">No data :(</span>
                        </div>
                        @endif
                        @if ($data && $data->isEmpty())
                        <div class="col-md-12 text-center">
                            <br>
                            <span class="py-4">Data not found on this date :(</span>
                        </div>
                        @endif
                    </div>
                    <div class="container {{ !$data || $data->isEmpty() ? 'd-none' : '' }}" style="padding: 0px">
                    <div class="row ">
                        <div class="col-xl-6 col-lg-6 col-md-6" style="padding-left: 0%">
                            <div class="services-style-one record">
                                @include('sections.graphs.voltage-3-blade')
                            </div>
                            <div class="bg-area mt-15">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Max</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->max('voltage_1')) : '' }}
                                            V
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Avg</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->avg('voltage_1')) : '' }}V
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Min</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->min('voltage_1')) : '' }}V
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6" style="padding-left: 0%">
                            <div class="services-style-one record">
                                @include('sections.graphs.current-3-blade')
                            </div>
                            <div class="bg-area mt-15">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Max</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->max('current_1')) : '' }}
                                            mA
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Avg</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->avg('current_1')) : '' }}mA
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Min</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->min('current_1')) : '' }}mA
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-20">
                        <div class="col-xl-6 col-lg-6 col-md-6" style="padding-left: 0%">
                            <div class="services-style-one record">
                                @include('sections.graphs.power-1-blade')
                            </div>
                            <div class="bg-area mt-15">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Max</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->max('power_1')) : '' }}
                                            mW
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Avg</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->avg('power_1')) : '' }}mW
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Min</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->min('power_1')) : '' }}mW
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6" style="padding-left: 0%">
                            <div class="services-style-one record">
                                @include('sections.graphs.rpm-3-blade')
                            </div>
                            <div class="bg-area mt-15">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Max</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->max('rpm_1')) : '' }}
                                            rpm
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Avg</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->avg('rpm_1')) : '' }}rpm
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Min</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->min('rpm_1')) : '' }}rpm
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-20 ">
                        <div class="col-xl-6 col-lg-6 col-md-6" style="padding-left: 0%">
                            <div class="services-style-one record">
                                @include('sections.graphs.voltage-5-blade')
                            </div>
                            <div class="bg-area mt-15">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Max</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->max('voltage_1')) : '' }}
                                            V
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Avg</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->avg('voltage_1')) : '' }}V
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Min</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->min('voltage_1')) : '' }}V
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6" style="padding-left: 0%">
                            <div class="services-style-one record">
                                @include('sections.graphs.current-5-blade')
                            </div>
                            <div class="bg-area mt-15">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Max</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->max('current_1')) : '' }}
                                            mA
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Avg</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->avg('current_1')) : '' }}mA
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Min</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->min('current_1')) : '' }}mA
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-20">
                        <div class="col-xl-6 col-lg-6 col-md-6" style="padding-left: 0%">
                            <div class="services-style-one record">
                                @include('sections.graphs.power-2-blade')
                            </div>
                            <div class="bg-area mt-15">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Max</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->max('power_1')) : '' }}
                                            mW
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Avg</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->avg('power_1')) : '' }}mW
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Min</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->min('power_1')) : '' }}mW
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6" style="padding-left: 0%">
                            <div class="services-style-one record">
                                @include('sections.graphs.rpm-5-blade')
                            </div>
                            <div class="bg-area mt-15">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Max</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->max('rpm_1')) : '' }}
                                            rpm
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Avg</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->avg('rpm_1')) : '' }}rpm
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Min</div>
                                        <div class="fs-3 fw-semibold">
                                            {{ $data ? limit_decimal($data->min('rpm_1')) : '' }}rpm
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
