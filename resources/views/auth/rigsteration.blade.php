@extends('layouts.app')
@section('content')
<div class="row">
   <div class="col-md-12" style=" background-size:cover; background-image: url(https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v4/intro-bg@2x.webp);">
      @include('layouts.navbar')
      <div class="col-md-12 mt-5 head-part text-white">
         <h2>Welcome to Technical Writers</h2>
         <p class="w-50 text-center">where our acclaimed client’s assignments and tasks are meticulously done We have a great deal to offer so please take your time to browse our website to discover more about us and what we offer</p>
         <form class="mt-5 rounded d-flex shadow-md border w-75" action="" method="get">
            <input class="p-2 border-0 h-40 w-100" type="text" style="" placeholder="Search..." />
            <!-- <div class="search-form-v2__buttons-wrap"> -->
            <button class="w-25 btn btn-warning rounded-right">
               Hire Writer
            </button>
            <!-- </div> -->
         </form>
         <div class="mt-5 mb-5 row d-flex w-50 justify-content-between">
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/convenient.png') }}" /> Easy Process</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/24-hours.png') }}" />24/7 on Demand</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/saving.png') }}" />Timesaver</div>
         </div>
      </div>
   </div>
</div>
<main class="signup-form p-5">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Register User</h3>
                    <div class="card-body">
                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection