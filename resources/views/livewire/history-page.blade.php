@section('title', 'History Record')
<div>
    <div class="row">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="row">
                        <div class="col-md-10 mb-2">
                            <input type="date" wire:model.defer="date" class="form-control" name="example-text-input" placeholder="Choose date">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary w-100" wire:click="submitFilter">Filter Data <i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(!$data)
            <div class="col-md-12 text-center">
                <span class="py-4">No data :(</span>
            </div>
        @endif

        @if($data && $data->isEmpty())
            <div class="col-md-12 text-center">
                <span class="py-4">Data not found on this date :(</span>
            </div>
        @endif
    </div>
    <div class="row {{ !$data || $data->isEmpty() ? 'd-none' : '' }}">
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-content">
                    @include('sections.graphs.voltage-3-blade')
                </div>
                 <div class="block-content block-content-full bg-body-light">
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="fs-sm fw-semibold text-uppercase text-muted">Max</div>
                            <div class="fs-3 fw-semibold">{{ $data ? limit_decimal($data->max('voltage_1')) : '' }} V</div>
                        </div>
                        <div class="col-4">
                            <div class="fs-sm fw-semibold text-uppercase text-muted">Avg</div>
                            <div class="fs-3 fw-semibold">{{ $data ? limit_decimal($data->avg('voltage_1')) : '' }} V</div>
                        </div>
                        <div class="col-4">
                            <div class="fs-sm fw-semibold text-uppercase text-muted">Min</div>
                            <div class="fs-3 fw-semibold">{{ $data ? limit_decimal($data->min('voltage_1')) : '' }} V</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-content">
                    @include('sections.graphs.current-3-blade')
                </div>
                 <div class="block-content block-content-full bg-body-light">
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="fs-sm fw-semibold text-uppercase text-muted">Max</div>
                            <div class="fs-3 fw-semibold"> {{ $data ? limit_decimal($data->max('current_1')) : '' }} mA</div>
                        </div>
                        <div class="col-4">
                            <div class="fs-sm fw-semibold text-uppercase text-muted">Avg</div>
                            <div class="fs-3 fw-semibold"> {{ $data ? limit_decimal($data->avg('current_1')) : '' }} mA</div>
                        </div>
                        <div class="col-4">
                            <div class="fs-sm fw-semibold text-uppercase text-muted">Min</div>
                            <div class="fs-3 fw-semibold"> {{ $data ? limit_decimal($data->min('current_1')) : '' }} mA</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-content">
                    @include('sections.graphs.rpm-3-blade')
                </div>
                 <div class="block-content block-content-full bg-body-light">
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="fs-sm fw-semibold text-uppercase text-muted">Max</div>
                            <div class="fs-3 fw-semibold">{{ $data ? limit_decimal($data->max('rpm_1')) : '' }}</div>
                        </div>
                        <div class="col-4">
                            <div class="fs-sm fw-semibold text-uppercase text-muted">Avg</div>
                            <div class="fs-3 fw-semibold">{{ $data ? limit_decimal($data->avg('rpm_1')) : '' }}</div>
                        </div>
                        <div class="col-4">
                            <div class="fs-sm fw-semibold text-uppercase text-muted">Min</div>
                            <div class="fs-3 fw-semibold">{{ $data ? limit_decimal($data->min('rpm_1')) : '' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-content">
                    @include('sections.graphs.voltage-5-blade')
                </div>
                 <div class="block-content block-content-full bg-body-light">
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="fs-sm fw-semibold text-uppercase text-muted">Max</div>
                            <div class="fs-3 fw-semibold">{{ $data ? limit_decimal($data->max('voltage_2')) : '' }} V</div>
                        </div>
                        <div class="col-4">
                            <div class="fs-sm fw-semibold text-uppercase text-muted">Avg</div>
                            <div class="fs-3 fw-semibold">{{ $data ? limit_decimal($data->avg('voltage_2')) : '' }} V</div>
                        </div>
                        <div class="col-4">
                            <div class="fs-sm fw-semibold text-uppercase text-muted">Min</div>
                            <div class="fs-3 fw-semibold">{{ $data ? limit_decimal($data->min('voltage_2')) : '' }} V</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-content">
                    @include('sections.graphs.current-5-blade')
                </div>
                 <div class="block-content block-content-full bg-body-light">
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="fs-sm fw-semibold text-uppercase text-muted">Max</div>
                            <div class="fs-3 fw-semibold">{{ $data ? limit_decimal($data->max('current_2')) : '' }} mA</div>
                        </div>
                        <div class="col-4">
                            <div class="fs-sm fw-semibold text-uppercase text-muted">Avg</div>
                            <div class="fs-3 fw-semibold">{{ $data ? limit_decimal($data->avg('current_2')) : '' }} mA</div>
                        </div>
                        <div class="col-4">
                            <div class="fs-sm fw-semibold text-uppercase text-muted">Min</div>
                            <div class="fs-3 fw-semibold">{{ $data ? limit_decimal($data->min('current_2')) : '' }} mA</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-content">
                    @include('sections.graphs.rpm-5-blade')
                </div>
                 <div class="block-content block-content-full bg-body-light">
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="fs-sm fw-semibold text-uppercase text-muted">Max</div>
                            <div class="fs-3 fw-semibold">{{ $data ? limit_decimal($data->max('rpm_2')) : '' }}</div>
                        </div>
                        <div class="col-4">
                            <div class="fs-sm fw-semibold text-uppercase text-muted">Avg</div>
                            <div class="fs-3 fw-semibold">{{ $data ? limit_decimal($data->avg('rpm_2')) : '' }}</div>
                        </div>
                        <div class="col-4">
                            <div class="fs-sm fw-semibold text-uppercase text-muted">Min</div>
                            <div class="fs-3 fw-semibold">{{ $data ? limit_decimal($data->min('rpm_2')) : '' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
