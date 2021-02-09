@extends('layouts.dashboard.app')

@section('title','Account Verification')


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
                            <h2 class="content-header-title float-left mb-0">Account Verification</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active"> Account Verification
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
                    <div class="row">
                        <!-- left menu section -->
                        <div class="col-md-3 mb-2 mb-md-0">
                            <ul class="nav nav-pills flex-column nav-left">
                                <!-- general -->
                                <li class="nav-item">
                                    <a class="nav-link active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                        <i data-feather="user" class="font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">Required</span>
                                    </a>
                                </li>
                                <!-- information -->
                                <li class="nav-item">
                                    <a class="nav-link" id="account-pill-info" data-toggle="pill" href="#account-vertical-info" aria-expanded="false">
                                        <i data-feather="info" class="font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">History</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--/ left menu section -->

                        <!-- right content section -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <!-- general tab -->
                                        <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                            @if(auth()->user()->profile->primary_address)

                                                @if($completed > 0)

                                                    <div class="row justify-content-center align-items-center" style="min-height: 60vh">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <i data-feather="check-circle" class="font-large-5 text-success mr-2"></i>
                                                            <h1>You are Verified</h1>
                                                        </div>
                                                    </div>

                                                @elseif($pending > 0)

                                                    <div class="row justify-content-center align-items-center" style="min-height: 60vh">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <i data-feather="refresh-cw" class="font-large-5 text-info mr-2"></i>
                                                            <h1>Your Request is Pending</h1>
                                                        </div>
                                                    </div>

                                                @else


                                                <!-- form -->
                                                <form class="validate-form mt-2" action="{{route('verification.update')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                    <div class="row justify-content-center">


                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="nid_no">NID/Passport/Driving License Number</label>
                                                                        <input type="text" class="form-control" id="nid_no" name="nid_no" placeholder="ID NO" required/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="nid_1">NID/Passport/Driving License Front Side</label>
                                                                        <input class="dropify" type="file" id="nid_1" name="nid_1"/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="nid_2">NID/Passport/Driving License Back Side</label>
                                                                        <input class="dropify" type="file" id="nid_2" name="nid_2"/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="address">Bank Statement/Utility Bill</label>
                                                                        <input class="dropify" type="file" id="address" name="address"/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <button type="submit" class="btn btn-primary mt-2 mr-1">Submit</button>
                                                                    <button type="reset" class="btn btn-outline-secondary mt-2">Cancel</button>
                                                                </div>

                                                    </div>

                                                </form>
                                                <!--/ form -->

                                                @endif
                                            @else

                                                <div class="row justify-content-center align-items-center" style="min-height: 60vh">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <i data-feather="alert-circle" class="font-large-5 text-warning mr-2"></i>
                                                        <h1>Please Complete Your Profile First</h1>
                                                    </div>
                                                </div>
                                            @endif


                                        </div>
                                        <!--/ general tab -->


                                        <!-- information -->
                                        <div class="tab-pane fade" id="account-vertical-info" role="tabpanel" aria-labelledby="account-pill-info" aria-expanded="false">
                                            <!-- Table Hover Animation start -->
                                            <div class="row" id="table-hover-animation">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title">Verification History</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="card-text">
                                                                All Verification Document Submission History
                                                            </p>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table class="table table-hover-animation">
                                                                <thead>
                                                                <tr>
                                                                    <th>Verification Type</th>
                                                                    <th>Document No</th>
                                                                    <th>Status</th>
                                                                    <th>Submitted at</th>
                                                                    <th>Updated at</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($kycs as $kyc)
                                                                <tr>
                                                                    <td>
                                                                        <span class="font-weight-bold">Kyc Verification</span>
                                                                    </td>
                                                                    <td>{{$kyc->nid_no}}</td>
                                                                    @if($kyc->status === 'completed')
                                                                    <td><span class="badge badge-pill badge-light-primary mr-1">Completed</span></td>
                                                                    @elseif($kyc->status === 'cancelled')
                                                                        <td><span class="badge badge-pill badge-light-danger mr-1">Cancelled</span></td>
                                                                    @elseif($kyc->status === 'cancelled')
                                                                        <td><span class="badge badge-pill badge-light-warning mr-1">Pending</span></td>
                                                                    @endif
                                                                    <td>{{\Carbon\Carbon::parse($kyc->created_at)->diffForHumans()}}</td>
                                                                    <td>{{\Carbon\Carbon::parse($kyc->updated_at)->diffForHumans()}}</td>
                                                                </tr>

                                                                @endforeach

                                                                {{$kycs->links()}}
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Table head options end -->
                                        </div>
                                        <!--/ information -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ right content section -->
                    </div>
                </section>
                <!-- / account setting page -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection



