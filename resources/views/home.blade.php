@extends('layouts.app')
<style>
   .head-part {
      /* background-image: url(https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v4/intro-bg@2x.webp); */
      display: flex;
      flex-direction: column;
      align-items: center;
   }

   .home-search-icon {
      height: 3em;
      width: 3em;
   }
</style>
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

<div class="row bg-light p-3" style="display:block; overflow-x: auto; white-space:nowrap;">
   <div class="col-md-12">
      <h2 class="text-center mt-2">
         What our customers say
      </h2>
   </div>
   @for($i = 0; $i < 5; $i++) <div class="col-md-4" style="display:inline-block;">
      <div class="card m-1 shadow border-0" style="white-space: normal;">
         <div class="card-body">
            <div class="row">
               <div class="col-md-4">
                  <img class="img-fluid" src="{{ asset('icons/profile.png') }}" />
               </div>
               <div class="col-md-8">
                  <h5 class="card-title">
                     <strong>
                        <span class="text-primary">
                           <i class="fas fa-quote-left"></i>Review Heading
                        </span>
                     </strong>
                  </h5>
                  <p class="card-text">
                     <span class="text-dark">
                        lorem ipsum dolor sit amet consectetur adipisicing elit.
                     </span>
                  </p>
                  <!-- add stars review -->
                  <div class="d-flex w-2 justify-content-between">
                     <div class="d-flex align-items-center">
                        <img style="width:1.5em;" class="mr-1 img-fluid" src="{{ asset('icons/favourite.png') }}" />
                        <img style="width:1.5em;" class="mr-1 img-fluid" src="{{ asset('icons/favourite.png') }}" />
                        <img style="width:1.5em;" class="mr-1 img-fluid" src="{{ asset('icons/favourite.png') }}" />
                        <img style="width:1.5em;" class="mr-1 img-fluid" src="{{ asset('icons/favourite.png') }}" />
                        <img style="width:1.5em;" class="mr-1 img-fluid" src="{{ asset('icons/favourite-grey.png') }}" />
                     </div>
                     <div class="d-flex align-items-center">
                        <span class="text-dark font-weight-bold">
                           - John Doe
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>
@endfor
</div>
<div class="row p-3" style="background-color: #fff ;">
   <div class="col-md-12">
      <div class="w-50 mx-auto" style="border-bottom:4px solid #00cf8a">
         <h2 class="text-center mt-3 p-3">
            Features of Our Technical Writing Services
         </h2>
      </div>
   </div>
   <div class="col-md-12">
      <div class="row p-5">
         <div class="col-md-6">
            <div class="d-flex justify-content-end
                align-items-center h-100">
               <div class="border border-info p-3 rounded-circle" style="height: 3.5em ;">&nbsp;1&nbsp;</div>
               <div class="d-flex flex-column w-75 p-3">
                  <h5 class="text-primary w-75">
                     <strong>
                        <span class="text-dark">
                           Originality 
                        </span>
                     </strong>
                  </h5>
                  <p class="text-dark">
                     <span class="text-dark">
                        To assure the originality of your assignment order, a thorough check-up on originality can be appended to your assignment order.
                     </span>
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <img src="{{ asset('images/placeholder.jpg') }}" class="img-fluid w-50" />
         </div>
      </div>
      <div class="row p-5">
         <div class="col-md-6">
            <div class="d-flex justify-content-end align-items-center">
               <img src="{{ asset('images/placeholder.jpg') }}" class="img-fluid w-50" />
            </div>
         </div>
         <div class="col-md-6">
            <div class="d-flex justify-content-start align-items-center h-100">
               <div class="border border-info p-3 rounded-circle" style="height: 3.5em ;">&nbsp;2&nbsp;</div>
               <div class="d-flex flex-column w-75 p-3">
                  <h5 class="text-primary w-75">
                     <strong>
                        <span class="text-dark">
                           Support is available 24/7
                        </span>
                     </strong>
                  </h5>
                  <p class="text-dark">
                     <span class="text-dark">
                        You can call us at any time and ask us to do your task; We are always more than delighted to assist you
                     </span>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="row p-5">
         <div class="col-md-6">
            <div class="d-flex justify-content-end
                align-items-center h-100">
               <div class="border border-info p-3 rounded-circle" style="height: 3.5em ;">&nbsp;3&nbsp;</div>
               <div class="d-flex flex-column w-75 p-3">
                  <h5 class="text-primary w-75">
                     <strong>
                        <span class="text-dark">
                           Anonymity
                        </span>
                     </strong>
                  </h5>
                  <p class="text-dark">
                     <span class="text-dark">
                        We value our customers' privacy thus we will never share the personal information that you provide to any third parties, including paper authors.
                     </span>
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <img src="{{ asset('images/placeholder.jpg') }}" class="img-fluid w-50" />
         </div>
      </div>
      <div class="row p-5">
         <div class="col-md-6">
            <div class="d-flex justify-content-end align-items-center">
               <img src="{{ asset('images/placeholder.jpg') }}" class="img-fluid w-50" />
            </div>
         </div>
         <div class="col-md-6">
            <div class="d-flex justify-content-start align-items-center h-100">
               <div class="border border-info p-3 rounded-circle" style="height: 3.5em ;">&nbsp;4&nbsp;</div>
               <div class="d-flex flex-column w-75 p-3">
                  <h5 class="text-primary w-75">
                     <strong>
                        <span class="text-dark">
                           Unlimited Revisions and Editing 
                        </span>
                     </strong>
                  </h5>
                  <p class="text-dark">
                     <span class="text-dark">
                        After payment, and successful completion of work, you can request reasonable revisions or changes from our team if you require them without additional payment.
                     </span>
                  </p>
               </div>
            </div>
         </div>
      </div>

   </div>
</div>
@endsection