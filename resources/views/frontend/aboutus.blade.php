<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> About Us</title>
    <meta name="description" content=" Visit Essay Sages! Meet our experts, hire, and provide them with the task. Also, join us and become our writer at Essay Sages.">
   

</head>


@extends('layouts.app')
<style>
  .w-51{
   margin-left:25%;
   width:50%;
   font: 16px Roboto,sans-serif; 
  }
</style>
@section('content')
<div class="row">
<div class="col-md-12 my-3">
<img class="bg-image">
      @include('layouts.navbar')
      <div class="col-md-12 mt-5 head-part text-white">
         <h1 class="h1_tag_style">{{ $title }}</h1>
         <h2> <p class="font fw-bold"style="color: #ffc107;">{{$bottomline}}</p></h2>
      </div>
      </div>


<div class="row">
   <div class="col-sm-12 p-5">
   <div class="content w-51">
      <p>
  Essay Sages is a United States education technology site company based in San Francisco,
California which operates as an online learning platform for students and tutors founded in 2009.
We are a team of experienced problem-solvers, professional writers, competent proofreaders,
supporters, and licensed researchers. We are here because you, other tutors, and thousands of
students all over the world require our academic assistance...</p>
   <div class="col-md-12  moretext section ">
      <div class="row">
<div id="show-more-content">Additional Information about us
We are able to offer the best services at reasonable costs because we allocate a professional
writer for any technical writing task ordered, our professional writers provide the best services
because every task gets a thorough check-up before being submitted…
</div>

</div>
    
        </div>
        


</div>
   
   </div>
   <div class="text-center" style="padding-bottom:20px;">
   <a class="btn-sm btn-warning text-center moreless-button expertise-covers-v2__btn">Read more</a>
</div>
</div>
</div>


@endsection
