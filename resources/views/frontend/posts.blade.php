@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/datatable/datatables.min.css')}}">
<div class="row">
    <div class="col-md-12" style=" background-size:cover; background-image: url(https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v4/intro-bg@2x.webp);">
        @include('layouts.navbar')
        <div class="col-md-12 mt-5 head-part text-white">
            <h2>Welcome to Technical Writers</h2>
            <p class="w-50 text-center">where our acclaimed client’s assignments and tasks are meticulously done We have a great deal to offer so please take your time to browse our website to discover more about us and what we offer</p>
            <div class="mt-5 mb-5 row d-flex w-50 justify-content-between">
                <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/convenient.png') }}" /> Easy Process</div>
                <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/24-hours.png') }}" />24/7 on Demand</div>
                <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/saving.png') }}" />Timesaver</div>
            </div>
        </div>
    </div>
</div>
    <div class="container my-5">
    <section class="content">
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                      <table id="example1" class="table mb-0 w-p100">
                        <thead>
                            <tr>
                                <th>subject</th>
                                <th>topic</th>
                                <th>deadline</th>
                                <th>instructions</th>
                                <th>status</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($posts) > 0)
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->subject}}</td>
                                <td>{{$post->topic}}</td>
                                <td>{{$post->deadline}}</td>
                                <td>
                                    @if($post->instructions == null)
                                        <span class="text-danger">No Instructions</span>
                                    @else
                                        {{$post->instructions}}
                                    @endif
                                </td>
                                <td>
                                    @if($post->status == 0)
                                        <span class="badge bg-warning badge-warning">no bid yet</span>
                                    @elseif($post->status == 1)
                                        <span class="badge badge-success">accepted</span>
                                    @elseif($post->status == 2)
                                        <span class="badge badge-danger">rejected</span>
                                    @elseif($post->status == 3)
                                        <span class="badge badge-warning">in progress</span>
                                    @elseif($post->status == 4)
                                        <span class="badge badge-success">completed</span>
                                    @elseif($post->status == 5)
                                        <span class="badge badge-danger">cancelled</span>
                                    @endif
                                </td>
                                <td>
                                    {{-- Add delete action --}}
                                    <a  class="btn btn-primary">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="6" class="text-center">No Posts</td>
                            </tr>
                            @endif
                        </tbody>			  
                    </table>
                    </div>              
                </div>
              </div>
        </div>
    </div>
</section>
    </div>
  <!-- Vendor JS -->
	<script src="{{asset('/admin/js/vendors.min.js')}}"></script>
	<!-- Joblly App -->
	<script src="{{asset('/admin/js/template.js')}}"></script>
    <script src="{{asset('/admin/js/pages/data-table.js')}}"></script>
    <script src="{{asset('/admin/js/pages/date-paginator.js')}}"></script>
    <script src="{{asset('/admin/assets/vendor_components/datatable/datatables.min.js')}}"></script>
@endsection