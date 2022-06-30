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
   <div class="col-md-12" style='background-size:cover; background-image: url({{$backgroundImage}})'>
      @include('layouts.navbar')
      <div class="col-md-12 mt-5 head-part text-white">
         <h3>{{$title}}</h3>
         <p class="w-50 text-center">{{$topline}}</p>
         <form class="mt-5 rounded d-flex shadow-md border w-75" action="" method="get">
            <input class="p-2 border-0 h-40 w-100" type="text" style="" placeholder="Search..." />
            <!-- <div class="search-form-v2__buttons-wrap"> -->
            <button class="w-25 btn btn-warning rounded-right">
               Hire Writer
            </button>
            <!-- </div> -->
         </form>
         <p style="color: #ffc107;">{{$bottomline}}</p>
         <div class="mt-5 mb-5 row d-flex w-50 justify-content-between">
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/convenient.png') }}" /> Easy Process</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/24-hours.png') }}" />24/7 on Demand</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/saving.png') }}" />Timesaver</div>
         </div>
         <div class="mt-5 mb-5 row d-flex w-50 justify-content-between">
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/certificate.png') }}" />Certified Service</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/shield.png') }}" />Full Privacy</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/original.png') }}" />100% Original Assignment</div>
         </div>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-12 my-3">
      <div class="w-50 mx-auto" style="border-bottom:4px solid #00cf8a">
         <h2 class="text-center mt-3 p-3">
            Testimonials
         </h2>
      </div>
   </div>
   <div id="carouselExampleControls" class="carousel slide text-center carousel-dark shadow-md mb-4" data-mdb-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar" style="width: 150px;" />
            <div class="row d-flex justify-content-center">
               <div class="col-lg-8">
                  <h5 class="mb-3">Emma</h5>
                  <p>Photographer</p>
                  <p class="text-muted">
                     <i class="fas fa-quote-left pe-2"></i>
                     The efficiency and professionalism with which the service was given pleasantly pleased me. The paper satisfied all of the criteria. It was really well-written, with no grammatical mistakes. More than a day was added to my deadline! Excellent service was offered to me.
                  </p>
               </div>
            </div>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
               <li><i class="fas fa-star fa-sm"></i></li>
               <li><i class="fas fa-star fa-sm"></i></li>
               <li><i class="fas fa-star fa-sm"></i></li>
               <li><i class="fas fa-star fa-sm"></i></li>
               <li><i class="far fa-star fa-sm"></i></li>
            </ul>
         </div>
         <div class="carousel-item">
            <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar" style="width: 150px;" />
            <div class="row d-flex justify-content-center">
               <div class="col-lg-8">
                  <h5 class="mb-3">Charlotte </h5>
                  <p>Web Developer</p>
                  <p class="text-muted">
                     <i class="fas fa-quote-left pe-2"></i>
                     My expectations for the final result were exceeded. The site chats were really responsive and courteous, they delivered the paper ahead of schedule and followed all of my specifications. Thank you very much!
                  </p>
               </div>
            </div>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
               <li><i class="fas fa-star fa-sm"></i></li>
               <li><i class="fas fa-star fa-sm"></i></li>
               <li><i class="fas fa-star fa-sm"></i></li>
               <li><i class="fas fa-star fa-sm"></i></li>
               <li><i class="far fa-star fa-sm"></i></li>
            </ul>
         </div>
         <div class="carousel-item">
            <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar" style="width: 150px;" />
            <div class="row d-flex justify-content-center">
               <div class="col-lg-8">
                  <h5 class="mb-3">Brian Bakes</h5>
                  <p>UX Designer</p>
                  <p class="text-muted">
                     <i class="fas fa-quote-left pe-2"></i>
                     - I needed to take a statistics class, so I made an order based on the site portfolio. It was excellent; I became fascinated and understood the statistics mentioned. The site is quite cool, and I will certainly suggest it to everyone who needs some technical academic work completed.
                  </p>
               </div>
            </div>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
               <li><i class="fas fa-star fa-sm"></i></li>
               <li><i class="fas fa-star fa-sm"></i></li>
               <li><i class="fas fa-star fa-sm"></i></li>
               <li><i class="fas fa-star fa-sm"></i></li>
               <li><i class="far fa-star fa-sm"></i></li>
            </ul>
         </div>
      </div>
      <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
      </button>
   </div>
</div>
<!-- Why choose us -->

<div class="row p-5 ">
   <div class="col-md-12 my-3">
      <div class="w-50 mx-auto" style="border-bottom:4px solid #00cf8a">
         <h2 class="text-center mt-3 p-3">
            Why choose us?
         </h2>
      </div>
   </div>
   <div class="col-md-12">
      <div class="row">
         <div class="col-md-4">
            <div class="card shadow-md">
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-4">
                        <img class="card-img-top" src="{{ asset('icons/original.png') }}" alt="Card image cap" />
                     </div>
                     <div class="col-md-8">
                        <h5 class="card-title">100% Original Assignment</h5>
                        <p class="card-text">We are the only site in the world that provides 100% original assignments.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card shadow-md">
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-4">
                        <img class="card-img-top" src="{{ asset('icons/time.png') }}" alt="Card image cap" />
                     </div>
                     <div class="col-md-8">
                        <h5 class="card-title">24/7 Support</h5>
                        <p class="card-text">We are here to help you 24/7. We are always here to help you.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card shadow-md">
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-4">
                        <img class="card-img-top" src="{{ asset('icons/quality.png') }}" alt="Card image cap" />
                     </div>
                     <div class="col-md-8">
                        <h5 class="card-title">Quality Assurance</h5>
                        <p class="card-text">We are here to help you 24/7. We are always here to help you.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Why choose us -->

<!-- Our team members portfolio -->
<div class="row p-5">
   <div class="col-md-12 my-3">
      <div class="w-50 mx-auto" style="border-bottom:4px solid #00cf8a">
         <h2 class="text-center mt-3 p-3">
            Our team members portfolio
         </h2>
      </div>
   </div>
   <div class="col-md-12">
      <div class="row">
         <div class="col-md-4">
            <div class="card shadow-md">
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-4">
                        <img class="card-img-top" src="{{ asset('icons/profile.png') }}" alt="Card image cap" />
                     </div>
                     <div class="col-md-8">
                        <h5 class="card-title">Charlotte</h5>
                        <p class="card-text">Web Developer</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card shadow-md">
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-4">
                        <img class="card-img-top" src="{{ asset('icons/profile.png') }}" alt="Card image cap" />
                     </div>
                     <div class="col-md-8">
                        <h5 class="card-title">Brian Bakes</h5>
                        <p class="card-text">UX Designer</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card shadow-md">
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-4">
                        <img class="card-img-top" src="{{ asset('icons/profile.png') }}" alt="Card image cap" />
                     </div>
                     <div class="col-md-8">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">Web Developer</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Our team members portfolio -->


<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
></script>
@endsection