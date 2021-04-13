@extends('layouts.dashboard.app')

@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-primary" role="alert">
                            <div class="alert-body">
                                <strong>Info:</strong> This layout can be useful for getting started with empty content section. Please check
                                the&nbsp;<a class="text-primary" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation/documentation-layout-empty.html" target="_blank">Layout empty documentation</a>&nbsp; for more details.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @php
                        $color = ['loan' => 'danger', 'investment' => 'info', 'current'=>'primary', 'savings' => 'secondary'];
                    @endphp
                    @foreach($accounts as $account)
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">
                        <x-balance
                            icon="dollar-sign"
                            value="{{'$ '.$account->account_balance}}"
                            color="{{$color[$account->account_type]}}"
                            title="{{$account->account_type}}"
                        />
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
