<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Homework Help | Professional Paper Writers | Essay Writers</title>
    <meta name="description" content=" Get Homework Help from our professional writers. We provide quality work, a money-back guarantee, and 7 days of revision policy.">
    

</head>

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
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/convenient.png') }}" />Hassle-Free Order Process</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/24-hours.png') }}" />Qualified Writing Experts</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/saving.png') }}" />On-Time Delivery</div>
         </div>
         <div class="mt-5 mb-5 row d-flex w-50 justify-content-between">
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/certificate.png') }}" />24*7 Service Available</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/shield.png') }}" />Full Privacy</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/original.png') }}" />Plagiarism-Free Content </div>
            
         </div>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-12 my-3">
      <div class="w-50 mx-auto" style="border-bottom:4px solid #00cf8a">
         <h2 class="text-center mt-3 p-3">
         What Do Our Customers Think About Our Homework Writing Service?

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
                 

                  <p class="text-muted">
                     <i class="fas fa-quote-left pe-2"></i>
                     I am really very grateful that I came to know about <strong>Essay Sages Essay Writing Service</strong>. The writers are amazing that I can’t even define. They made my work so easy and the perfection of my writing is undefinable. Really good work. 
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
                 
                  <p class="text-muted">
                     <i class="fas fa-quote-left pe-2"></i>
                     I had to deliver the task on an urgent basis and I didn’t expect Essay Sages to do the work so quickly. They submit the task on time and the writing is really appreciable. Great <strong>Essay Writing Service</strong>.
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
                 
                  <p class="text-muted">
                     <i class="fas fa-quote-left pe-2"></i>
                     The writing expert submitted the project very quickly. The quality he provided in my<b> Literature Review </b>Writing is just outstanding. I am really impressed. Thank you Essay Sages.
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


</div>
<div class="row p-3" style="background-color: #fff ;">
   <div class="col-md-12">
      <div class="w-50 mx-auto" style="border-bottom:4px solid #00cf8a">
         <h2 class="text-center mt-3 p-3">
         Get Your Homework Done In 4 Easy Steps

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

<!-- Why choose us -->

<div class="row p-5 ">
   <div class="col-md-12 my-3">
      <div class="w-50 mx-auto" style="border-bottom:4px solid #00cf8a">
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
                        <img class="card-img-top" src="{{ asset('icons/time.png') }}" alt="Card image cap" />
                     </div>
                     <div class="col-md-8">
                        <h5 class="card-title">Types of essay</h5>
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
                        <h5 class="card-title"><b>Free</b> features</h5>
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
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Our team members portfolio -->
<div class="row p-5 ">
   <div class="col-md-12 my-3">
      <div class="w-50 mx-auto" style="border-bottom:4px solid #00cf8a">
         <h2 class="text-center mt-3 p-3">
         Professional Homework Help Writing Service
         </h2>
         <p>Thinking of canceling your plans because of tons of assignment work? It is not easy to study when you have a lot of work to do. You can’t enjoy hanging out with friends, can’t go out to watch movies, or taking part in your extracurricular activities. Want to get rid of it? At Essay Sages, get <strong>Homework Help</strong> from top writers. They are experienced individuals who will complete the assignment work on your behalf and help you to get good grades.
Isn’t it a good way? You can now enjoy everything else you wanted without compromising on your homework. Ask our professionals for Homework Help Online and let them be your helping hands for all of your assignment work.
They can handle any complex task. All of our Professional Paper Writers are experienced enough to provide you with quality work. Although we can also complete the task within 24 hours it would be better if you can allow us some free time to research the project.
Essay Sages is helping students do assignments for many years. In these recent years, we are also working on our weaknesses and on a mission to make us better each day. We are not the one who compromises the quality in any manner. Visit our website and choose the best suitable writer for your homework task. We are 24*7 available to answer your queries. It is very easy to place an order. Don’t worry, your payment will be safe with us and it will only be credited to the writer once you will approve the submitted work.
</div>
</div>

</p>
         <h2> Homework Help Online From Professional Paper Writers</h2>
         <p>You will find a number of <strong>Homework Help</strong> services online but it is not an easy task to find the most reliable and trusted one like Essay Sages. Make sure you are hiring an online writing service who have professional writers and years of expertise. Plagiarized or poor-quality homework writing will be of no use. At Essay Sages, we guarantee to provide unique quality content. Check out the below-given benefits of hiring Paper Writers for your homework:
<ul>
<li><h5>  24*7 Support</h5>
The primary goal of Essay Sages is to provide the proper convenience and support to our customers. This is why we are 24*7 available to serve you.
</li>
<li><h5>  Professional Writers</h5>
The team of professional writers working with us has Masters and Ph.D. degrees. We don’t want you to provide anything that does not depict quality.
</li>
<li><h5> Privacy Policy</h5>The confidentiality of our customers is our topmost priority. All of your information will be private with us only.
</li>
<li><h5>  On-Time Delivery</h5>
When it comes to professionalism, one can’t compromise with on-time delivery. At Essay Sages, our paper writers will submit the task on or before time.
</li>
<li><h5>Variety of Professional Writers</h5>
On our Website For <strong>Homework Help</strong>, you will find various writers with their experience, professionalism, and customer reviews. You will have the choice to choose the best one out of them.
</li>
<li><h5>  Unique Content</h5>Unlike any other online writing service, we aim to provide the best and most unique work to our customers. We want to build our relationship for the long term and for the same, we both have to provide the best.
Our support team is available 24*7 to help you. If you have any queries, ask the experts today!
</li>
</ul>
</p>
<h2>Ask Writing Experts For Your Homework Help
</h2>
         <p>A group of professional writers is the main competitive advantage of many <strong>Homework Help</strong> websites, but few do the job of complexity. Some Online Homework Help services may only do homework in certain disciplines. Our online writing services can help you complete assignments of any complexity which also includes high school and college assignments.
 Our professional writers will complete your work quickly without grammatical errors. They have expertise in the following:

        <ul>
        <li>Math</li>
        <li>English Literature</li>
        <li>Physics</li>
        <li>Business</li>
        <li>Economics</li>
        <li>Marketing</li>
 <li>Finance</li>
 <li>Sociology</li>
 <li>Law</li>
 <li>Medical Science</li>
        </ul>
        <p>If you have any other writing task apart from the above-mentioned, don’t hesitate to ask our experts. We are 24*7 available to answer your queries and provide you with the best resolution. Our writers are never afraid of complex tasks.
Here is the list of papers our writers can help you with:
<ul>
        <li>Essays</li>
        <li>Reports</li>
        <li>Case studies</li>
        <li>Research proposals</li>
        <li>Dissertations</li>
 
        </ul>
</p>We are committed to continued excellence and open to taking on challenges. Don’t think that we are limited to a few tasks only. Our experienced writers can help you with almost all kinds of paper writing services along with <strong>Homework Help</strong>.
A Master’s degree is the least qualification we ask writers for before hiring at Essay Sages.
 </p>
        <h2>Boost Your Grades By Hiring Homework Help Writers At Essay Sages
</h2>
        <p>
        If you have made up your mind and are ready to take help with your homework, you just need to do the following:
        <ul>
        <li>On our website, choose the paper writing service you are looking for, let’s say <strong>Homework Help</strong>.
 </li>
        <li>Now, click on “Order Now” and follow the on-screen instructions.
</li>
        <li>Place the order and complete the deposit.</li>
</ul>You will be asked to choose from our best writers. Based on your requirements, you can select the writers after checking their qualifications, experience, and other customer reviews. The payment you have deposited will be safe with us. Until you will not be satisfied with our work, we will not release the payment to the writer. After the work submission, if you think it needs some editing then our writers will also do that for you for free within 7 days of submission. In the worst case, if you don’t like the submitted work at all, which is impossible, we will also refund you within 7 days.
If you want you can also take <strong>Homework Help</strong> from the internet but the quality and guarantee we will provide you will not be given by anyone else. Try Essay Sages today!


        </p>
       
        </div>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
></script>
@endsection