@extends('layouts.dashboard.app')
@section('title','Send Money')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Send Money</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active"> Send Money
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- account setting page -->
                <section id="page-account-settings">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Send Money</h4>
                                </div>
                                <div class="card-body">

                                    @if(Session::has('transaction_send'))
                                        @php
                                            $session = Session::get('transaction_send');
                                        @endphp
                                        <form method="post" action="{{route('send.confirm')}}" class="form form-horizontal">
                                            @csrf
                                            <div class="row">

                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            Transfer From
                                                        </div>
                                                        <div class="col-sm-9">
                                                            {{ucfirst($session['from'])}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9 offset-sm-3">
                                                    <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                                    <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                                </div>
                                            </div>
                                        </form>


                                    @else
                                        <form method="post" action="{{route('send.check')}}" class="form form-horizontal">
                                            @csrf
                                            <div class="row">

                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-3 col-form-label">
                                                            <label for="from">Transfer From</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="input-group input-group-merge">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i data-feather="mail"></i></span>
                                                                </div>
                                                                <select name="from" id="from" class="form-control">
                                                                    @foreach($accounts as $ac)
                                                                        <option value="{{$ac->account_type}}"> {{ucfirst($ac->account_type)}} -- ({{$ac->account_no}}) </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-3 col-form-label">
                                                            <label for="account_no">Recipient Account Number</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="input-group input-group-merge">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i data-feather="mail"></i></span>
                                                                </div>
                                                                <input
                                                                    type="text"
                                                                    id="account_no"
                                                                    class="form-control"
                                                                    name="account_no"
                                                                    placeholder="Account Number"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-3 col-form-label">
                                                            <label for="amount">Amount</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="input-group input-group-merge">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i data-feather="smartphone"></i></span>
                                                                </div>
                                                                <input
                                                                    type="number"
                                                                    id="amount"
                                                                    class="form-control"
                                                                    name="amount"
                                                                    placeholder="Amount"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9 offset-sm-3">
                                                    <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                                    <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                                </div>
                                            </div>
                                        </form>

                                    @endif



                                   </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- / account setting page -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection



