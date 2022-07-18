@extends('freelancer-panel/layouts/app')
@section('content')


   @include('freelancer-panel/layouts/asidebarMain')
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-md-flex align-items-center justify-content-between">
                <a href="#" class="waves-effect waves-light btn btn-danger mt-10 mt-md-0">Place a bid</a>
            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="box">
                        <div class="box-body">
                            <a href="/freelancer-panel" class="mb-15 d-block"><i class="fa fa-angle-left"></i> Back to all jobs</a>
                            <div class="d-md-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="mb-0">Math Teacher</h4>
                                    <p class="text-fade">Teachnical writer</p>
                                </div>
                                <a class="waves-effect waves-light btn btn-outline btn-success mt-10 mt-md-0">Sponsor this job</a>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <h4>Candidates</h4>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="text-center b-1 p-30">
                                        <h6 class="mt-0">Placed Bids</h6>
                                        <h1 class="mb-0">41</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="text-center b-1 p-30">
                                        <h6 class="mt-0">Total Bids</h6>
                                        <h1 class="mb-0">51</h1>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <h4>Job Description</h4>
                                    <ul>
                                        <li>Solve 5 problems. </li>
                                        <li>Knowledge about trignomatric. </li>
                                    </ul>
                                    <p>Expected close Date: 23/07/2022 </p>
                                    <p>Job Types: Full-time</p>
                                    <p>Budget: $61 </p>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="box">
                        <div class="box-body">
                            <a href="#" class="waves-effect waves-light btn btn-block btn-primary mb-15">Jobholder Information</a>
                            <div class="media-list media-list-hover media-list-divided">
                                <a class="media media-single rounded-0" href="#">
                                    <span class="title mx-0">Name :- </span>
                                    <span class="mx-0">Test</span>
                                </a>
                                <a class="media media-single rounded-0" href="#">
                                    <span class="title mx-0">Total jobs :- </span>
                                    <span class="mx-0">13</span>
                                </a>
                            </div>
                            <a href="#" class="waves-effect waves-light btn btn-block btn-outline btn-success my-15">Place a Bid</a>
                            <div>
                                <p><strong>Placed bids on this job :</strong> 41</p>
                                <p><strong>Status:</strong> <span class="badge badge-primary-light">Open</span></p>
                                <p><strong>Closed:</strong> 23-07-2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
</div>
</div>
<!-- ./wrapper -->
@endsection