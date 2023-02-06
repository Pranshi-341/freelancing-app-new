<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Us</title>
    <meta name="description" content="Are you facing any issues while using Essay Sages? Contact us directly through our Contact Us form.">
</head>
@extends('layouts.app')
<style>
   .head-part {
      /* background-image: url(https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v4/intro-bg@2x.webp); */
      display: flex;
      flex-direction: column;
      align-items: center;
   }
   .home-search-icon{
    height: 3em;
    width: 3em;
   }
</style>
@section('content')
<div class="row">
   <div class="col-md-12 my-3">
   <img class="bg-image">
      @include('layouts.navbar')
      <div class="col-md-12 mt-5 head-part text-white">
         <h2 class="h1_tag_style">{{$title}}</h2>
         <p class="w-50 font fw-bold text-center">{{$topline}}</p>
         <p class="font fw-bold" style="color: #ffc107;">{{$bottomline}}</p>
      </div>
   </div>
</div>
<!-- create contact us form -->
<div class="row v2"   style="width:70%;">
   <div class="col-sm-12 p-5">
      <div class="card">
         <div class="card-body font">
            <h4 class="card-title fw-bold text-center">Contact Us</h4>
            <form class="form-material m-t-40" action="" method="post">
               @csrf
               <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control form-control-line" name="name" required>
               </div>
               <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control form-control-line" name="email" required>
               </div>
               <div class="form-group">
                  <label>Phone</label>
                  <input type="text" class="form-control form-control-line" name="phone" required>
               </div>
               <div class="form-group">
                  <label>Message</label>
                  <textarea class="form-control" rows="5" name="message" required></textarea>
               </div>
               <div class="text-center" style="padding-bottom:20px;">
               <button type="submit" class="btn-sm btn-warning my-2">Submit</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>


@endsection
