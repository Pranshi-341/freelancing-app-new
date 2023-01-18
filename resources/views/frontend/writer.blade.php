@extends('layouts.app')
@section('content')
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<style>
    .progress-bar {
        width: 33.3%;
    }

    /* .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    } */
    /* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}


</style>
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
<div class="row">
    <div class="col-md-12 my-3">
        <div class="w-50 mx-auto" >
            <h2 class="text-center mt-3 p-3">
                Testimonials
            </h2>
            <div class="progress" style="height: 25px;">
                <div class="progress-bar" style="background-color: green" role="progressbar" style="width:40%">
                    1)Your Order
                </div>
                <div class="progress-bar" style="background-color: orange" role="progressbar" style="width:10%">
                    2)Find Writer
                </div>
                <div class="progress-bar" style="background-color: danger" role="progressbar" style="width:20%">
                    3)Make Payment
                </div>
            </div>
        </div>
    </div>    
    <div class="col-md-12 my-3">
        <div class="row" style="margin-left: 25%;">
            
            <div class="col-md-8">
                <div class="tabcontent HireWriter">
                    <div class="col-12">
                        <br>
                        <table class="table table-hover data_table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email ID</th>
                                    <th>Skills</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($writers as $writers)
                                <tr>
                                    <td>{{ $writers->name }}</td>
                                    <td>{{ $writers->email }}</td>
                                    <td>{{ $writers->skills }}</td>
                                    <td>{{ $writers->price }}</td>
                                    <td>
                                    <a href="" class="btn btn-primary">Chat</a>
                                    <a href="{{ route('payment', $writers->price) }}" class="btn btn-danger">Hire</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            
        </div>
    </div>
</div>