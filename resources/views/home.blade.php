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
    opacity: 1;
  }
}
</style>
@section('content')
<div class="row">
   <div class="col-md-12" style=" background-size:cover; background-image: url(https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v4/intro-bg@2x.webp);">
      @include('layouts.navbar')
      <div class="col-md-12 mt-5 head-part text-white">
         <h2>Welcome to Essay Sages</h2>
         <p class="w-50 text-center">where our acclaimed client’s assignments and tasks are meticulously done We have a great deal to offer so please take your time to browse our website to discover more about us and what we offer</p>
         <form class="mt-5 rounded d-flex shadow-md border w-75" action="" method="get">
            <input class="p-2 border-0 h-40 w-100" type="text" style="" placeholder="Search..." />
            <!-- <div class="search-form-v2__buttons-wrap"> -->
            <button class="w-25 btn btn-warning rounded-right">
               Hire Writer
            </button>
            <!-- </div> -->
         </form>
         <div class="mt-5 mb-5 row d-flex w-50 justify-content-between ">
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/convenient.png') }}" /> Professional Writing Expert</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/24-hours.png') }}" />Quick Service</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/saving.png') }}" />Free Edits</div>
         </div>
      </div>
   </div>
</div>

<div class="row bg-light p-3" style="display:block; overflow-x: auto; white-space:nowrap;">
   <div class="col-md-12">
      <h2 class="text-center mt-2">
      What Do Our Customers Think About Our Essay Writing Service?
      </h2>
     
   </div>
   <div class="col-md-4" style="display:inline-block;">
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
                           <i class="fas fa-quote-left"></i>
                        </span>
                     </strong>
                  </h5>
                  <p class="card-text">
                     <span class="text-dark">
                     I am really very grateful that I came to know about <strong>Essay Sages Essay Writing Service</strong>. The writers are amazing that I can’t even define. They made my work so easy and the perfection of my writing is undefinable. Really good work. 
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
<div class="col-md-4" style="display:inline-block;">
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
                           <i class="fas fa-quote-left"></i>
                        </span>
                     </strong>
                  </h5>
                  <p class="card-text">
                     <span class="text-dark">
                     I had to deliver the task on an urgent basis and I didn’t expect Essay Sages to do the work so quickly. They submit the task on time and the writing is really appreciable. Great <strong>Essay Writing Service</strong>.
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

<div class="col-md-4" style="display:inline-block;">
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
                           <i class="fas fa-quote-left"></i>
                        </span>
                     </strong>
                  </h5>
                  <p class="card-text">
                     <span class="text-dark">
                     The writing expert submitted the project very quickly. The quality he provided in my <strong>Literature Review </strong>Writing is just outstanding. I am really impressed. Thank you Essay Sages.
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

</div>
<div class="row p-3" style="background-color: #fff ;">
   <div class="col-md-12">
      <div class="w-50 mx-auto" style="border-bottom:4px solid #00cf8a">
         <h2 class="text-center mt-3 p-3">
         4 Steps Of Our Essay Writing Services

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
                        1. Information Form

                        </span>
                     </strong>
                  </h5>
                  <p class="text-dark">
                     <span class="text-dark">
                     Enter all the project-related details in the form for a better understanding of our Essay Writers.
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
                        2. Select the Writer
                        </span>
                     </strong>
                  </h5>
                  <p class="text-dark">
                     <span class="text-dark">
                     Go through the list of our professional writers and select the one that suits your expectations.                     </span>
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
                        3. Complete the Payment

                        </span>
                     </strong>
                  </h5>
                  <p class="text-dark">
                     <span class="text-dark">
                     Before depositing the amount, make sure you are satisfied with our Online Essay Writing Services and then proceed.
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
                        4. Revise and Release
                        </span>
                     </strong>
                  </h5>
                  <p class="text-dark">
                     <span class="text-dark">
                     Read the paper carefully and then release the payment to the writer. If you want, you can also ask the writer to make any edits.

                     </span>
                  </p>
               </div>
            </div>
         </div>
      </div>

   </div>
   <div class="expertise-covers-v2">
    <div class="expertise-covers-v2__inner">
        <div class="expertise-covers-v2__types">
            <h3 class="expertise-covers-v2__title">Types of essay</h3>
            <ul class="expertise-covers-v2__list">
                                    <li class="expertise-covers-v2__list-item">Narrative</li>
                                    <li class="expertise-covers-v2__list-item">Definition</li>
                                    <li class="expertise-covers-v2__list-item">Descriptive</li>
                                    <li class="expertise-covers-v2__list-item">Cause and Effect</li>
                                    <li class="expertise-covers-v2__list-item">Expository</li>
                                    <li class="expertise-covers-v2__list-item">Analytical</li>
                                    <li class="expertise-covers-v2__list-item">Persuasive</li>
                                    <li class="expertise-covers-v2__list-item">Admission</li>
                            </ul>
        </div>

        <section class="expertise-covers-v2__card">
            <div class="expertise-covers-v2__card-inner">
                <h3 class="expertise-covers-v2__card-title"><b>Free</b> features</h3>
                <ul class="expertise-covers-v2__card-list">
                                            <li class="expertise-covers-v2__card-list-item">
                            <span class="expertise-covers-v2__feature-name">A title page</span>
                            <span class="expertise-covers-v2__feature-price">3.99$</span>
                            <span class="expertise-covers-v2__feature-label">Free</span>
                        </li>
                                            <li class="expertise-covers-v2__card-list-item">
                            <span class="expertise-covers-v2__feature-name">A reference page</span>
                            <span class="expertise-covers-v2__feature-price">5.99$</span>
                            <span class="expertise-covers-v2__feature-label">Free</span>
                        </li>
                                            <li class="expertise-covers-v2__card-list-item">
                            <span class="expertise-covers-v2__feature-name">In-text citations</span>
                            <span class="expertise-covers-v2__feature-price">4.49$</span>
                            <span class="expertise-covers-v2__feature-label">Free</span>
                        </li>
                                            <li class="expertise-covers-v2__card-list-item">
                            <span class="expertise-covers-v2__feature-name">A Running head</span>
                            <span class="expertise-covers-v2__feature-price">3.99$</span>
                            <span class="expertise-covers-v2__feature-label">Free</span>
                        </li>
                                            <li class="expertise-covers-v2__card-list-item">
                            <span class="expertise-covers-v2__feature-name">Page numbers</span>
                            <span class="expertise-covers-v2__feature-price">2.49$</span>
                            <span class="expertise-covers-v2__feature-label">Free</span>
                        </li>
                                            <li class="expertise-covers-v2__card-list-item">
                            <span class="expertise-covers-v2__feature-name">Originality check</span>
                            <span class="expertise-covers-v2__feature-price">14.99$</span>
                            <span class="expertise-covers-v2__feature-label">Free</span>
                        </li>
                                    </ul>
                <p class="expertise-covers-v2__summary">Get all those features for <span class="expertise-covers-v2__summary-value">35.94$</span> <b>FREE</b></p>
                <div class="expertise-covers-v2__btn">
                    <a href="/order" class="btn btn_large btn_w_100 btn_primary-accent" onclick="gta('send','event','CTA','click','get_essay_help');">Order paper</a>
                </div>
            </div>
        </section>
    </div>
</div>
   
           </div>
        </div>
    
         </div>
</div>
@endsection