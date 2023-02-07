@extends('freelancer-panel/layouts/app')
@section('content')


   @include('freelancer-panel/layouts/asidebarMain')
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-md-flex align-items-center justify-content-between">
                <a href="#" data-toggle="modal" data-target="#exampleModalScrollable" class="waves-effect waves-light btn btn-danger mt-10 mt-md-0">Place a bid</a>
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
                                    <h4 class="mb-0">{{ $post->subject }}</h4>
                                    <p class="text-fade">{{ $post->topic }}</p>
                                </div>
                                <a class="waves-effect waves-light btn btn-outline btn-success mt-10 mt-md-0">Sponsor this job</a>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <h4>Bids information</h4>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="text-center b-1 p-30">
                                        <h6 class="mt-0">Placed Bids</h6>
                                        <h1 class="mb-0">-</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="text-center b-1 p-30">
                                        <h6 class="mt-0">Total Bids</h6>
                                        <h1 class="mb-0">-</h1>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <h4>Job Description</h4>
                                    {{ $post->instructions}}
                                    <p class="mt-10">Expected close Date: {{ $post->deadline }} </p>
                                    <p>Budget: 
                                        @if($post->budget == 0 || $post->budget == null)
                                            <span class="text-success">Negotiable</span>
                                        @else
                                        
                                        {{ $post->budget - ($post->budget * 0.25) }}
                                        @endif
                                    </p>
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
                                    <span class="mx-0">{{ $owner->name }}</span>
                                </a>
                                <a class="media media-single rounded-0" href="#">
                                    <span class="title mx-0">Total jobs :- </span>
                                    <span class="mx-0">13</span>
                                </a>
                            </div>
                            <a href="#" class="waves-effect waves-light btn btn-block btn-outline btn-success my-15">Place a Bid</a>
                            <div>
                                <p><strong>Placed bids on this job :</strong> -</p>
                                <p><strong>Status:</strong> 
                                    @if($post->status == 0)
                                        <span class="badge badge-primary-light">Open</span></p>
                                    @elseif($post->status == 1)
                                        <span class="badge badge-success-light">Closed</span></p>
                                    @elseif($post->status == 2)
                                        <span class="badge badge-danger-light">Expired</span></p>
                                    @endif
                                <p><strong>Closed:</strong> {{ $post->deadline }}</p>
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
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content" style="margin-top: 20%; overflow:scroll;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Your Proposal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/addbid" method="post">
        <div class="modal-body">
                @csrf
                <input type="hidden" value="{{$post->id}}" name="job_id" >
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Budget</label>
                <input type="text" class="form-control" name="bid_amount" placeholder="Enter your budget">
                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1">What you understand about job</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<!-- ./wrapper -->
@endsection