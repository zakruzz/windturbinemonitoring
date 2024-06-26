@section('title', 'Real-Time Monitoring')
@section('styles')
    <style>
        .btn-float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color: #0284c7!important;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            box-shadow: 2px 2px 3px #999;
        }

        .btn-float:hover{
            color:#FFF;
        }

        .btn-float-inner{
            margin-top:22px;
        }
    </style>
@endsection
<div>
    @include('sections.modals.config')

    <div wire:poll="refreshPage" class="row">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-content text-center p-0">
                    <img width="300" src="{{ asset('assets/media/background/logo.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-content">
                    @include('sections.graphs.voltage-3-blade')
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-content">
                    @include('sections.graphs.current-3-blade')
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-content">
                    @include('sections.graphs.rpm-3-blade')
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-content">
                    @include('sections.graphs.voltage-5-blade')
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-content">
                    @include('sections.graphs.current-5-blade')
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-content">
                    @include('sections.graphs.rpm-5-blade')
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <p class="text-center">Last Data : {{ $lastData ? $lastData->created_at : 'N/A' }}</p>
        </div>
    </div>

    <a wire:click="showConfig" href="javascript:void(0)" class="btn-float">
        <i class="fa fa-tachometer-alt btn-float-inner"></i>
    </a>
</div>
