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
   section.pricing {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}

.pricing .card {
  border: none;
  border-radius: 1rem;
  transition: all 0.2s;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.pricing hr {
  margin: 1.5rem 0;
}

.pricing .card-title {
  margin: 0.5rem 0;
  font-size: 0.9rem;
  letter-spacing: .1rem;
  font-weight: bold;
}

.pricing .card-price {
  font-size: 3rem;
  margin: 0;
}

.pricing .card-price .period {
  font-size: 0.8rem;
}

.pricing ul li {
  margin-bottom: 1rem;
}

.pricing .text-muted {
  opacity: 0.7;
}

.pricing .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  opacity: 0.7;
  transition: all 0.2s;
}

/* Hover Effects on Card */

@media (min-width: 992px) {
  .pricing .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
  }

  .pricing .card:hover .btn {
    /* opacity: 1; */
  }
</style>


@section('content')
<div class="row">
   <div class="col-md-12" style='background-size:cover; background-image: url({{$backgroundImage}})'>
      @include('layouts.navbar')
      <div class="col-md-12 mt-5 head-part text-white">
         <h1>{{$title}}</h1>
         <p class="w-50 text-center">{{$topline}}</p>
         
         <p style="color: #ffc107;">{{$bottomline}}</p>
         <div class="mt-5 mb-5 row d-flex w-50 justify-content-between">
            <div class="col-sm-4 d-flex flex-column align-items-center font"><img class="home-search-icon" src="{{ asset('icons/convenient.png') }}" /> Easy Process</div>
            <div class="col-sm-4 d-flex flex-column align-items-center font"><img class="home-search-icon" src="{{ asset('icons/24-hours.png') }}" />24/7 on Demand</div>
            <div class="col-sm-4 d-flex flex-column align-items-center font"><img class="home-search-icon" src="{{ asset('icons/saving.png') }}" />Timesaver</div>
         </div>
         <div class="mt-5 mb-5 row d-flex w-50 justify-content-between">
            <div class="col-sm-4 d-flex flex-column align-items-center font"><img class="home-search-icon" src="{{ asset('icons/certificate.png') }}" />Certified Service</div>
            <div class="col-sm-4 d-flex flex-column align-items-center font"><img class="home-search-icon" src="{{ asset('icons/shield.png') }}" />Full Privacy</div>
            <div class="col-sm-4 d-flex flex-column align-items-center font"><img class="home-search-icon" src="{{ asset('icons/original.png') }}" />100% Original Assignment</div>
         </div>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-12 my-3">
      <div class="w-50 mx-auto"  style="border-bottom:4px solid; color:linear-gradient(to right, #2E2221, #6A4522,#9B743E, #AA8762,#6A4522);">
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
                  <h5 class="mb-3 font">Emma</h5>
                  <p>Photographer</p>
                  <p class="text-muted font">
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
                  <h5 class="mb-3 font">Charlotte</h5>
                  <p>Web Developer</p>
                  <p class="text-muted font">
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
                  <h5 class="mb-3 font">Brian Bakes</h5>
                  <p>UX Designer</p>
                  <p class="text-muted font">
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


<div class="col-md-12">
   <section class="pricing">
    <div class="row py-5 px-2">
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Free</h5>
            <h6 class="card-price text-center">$0<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>A title page</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>A reference page</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>In-text citations</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>A Running head</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Page numbers</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Originality check</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Analytical</li>
            </ul>
            <div class="d-grid">
              <a href="#" class="btn-sm btn-warningtext-uppercase">Button</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
            <h6 class="card-price text-center">$9<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
            <li><span class="fa-li"><i class="fas fa-check"></i></span>A title page</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>A reference page</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>In-text citations</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>A Running head</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Page numbers</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Originality check</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Analytical</li>
            </ul>
            <div class="d-grid">
              <a href="#" class="btn-sm btn-warningtext-uppercase">Button</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
            <h6 class="card-price text-center">$49<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
            <li><span class="fa-li"><i class="fas fa-check"></i></span>A title page</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>A reference page</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>In-text citations</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>A Running head</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Page numbers</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Originality check</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Analytical</li>
            </ul>
            <div class="d-grid">
              <a href="#" class="btn-sm btn-warningtext-uppercase">Button</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
   </div>

<!-- Why choose us -->

<div class="row p-5 ">
   <div class="col-md-12 my-3">
      <div class="w-50 mx-auto"  style="border-bottom:4px solid; color:linear-gradient(to right, #2E2221, #6A4522,#9B743E, #AA8762,#6A4522);">
         <h2 class="text-center mt-3 p-3">
            Professional Writing Services Essay Sages Provides
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
      <div class="w-50 mx-auto"  style="border-bottom:4px solid; color:linear-gradient(to right, #2E2221, #6A4522,#9B743E, #AA8762,#6A4522);">
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