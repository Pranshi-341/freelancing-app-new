<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Write My Essay | Essay Writing Service | Hire Essay Writers</title>
    <meta name="description" content=" Ask our experts at Essay Sages to “Write My Essay”? We provide the best Essay Writing Services. On-time delivery & quality work.">
    

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
         <h3>{{$title}}</h3>
         <p class="w-50 text-center">{{$topline}}</p>
         
         <p style="color: #ffc107;">{{$bottomline}}</p>
         <div class="mt-5 mb-5 row d-flex w-50 justify-content-between">
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/convenient.png') }}" />Hassle-Free Order Process</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/24-hours.png') }}" />Qualified Writing Experts</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/saving.png') }}" />On-Time Delivery</div>
         </div>
         <div class="mt-5 mb-5 row d-flex w-50 justify-content-between">
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/certificate.png') }}" />Full Privacy Control</div>
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
         What Do Our Customers Think About Our Essay Writing Service?
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
         Essay Sages, Write My Essay For Me Online
         </h2>
         <p>It might have happened to you a lot of times when you find yourself stuck between your college work and some other personal plans. That struggle is real and very tough. But now, you are so lucky as you have someone to whom you can say, “Write My Essay” for me. At Essay Sages, we are providing Essay Writing Services so that you can peacefully enjoy your family functions, a trip with your friends, or other necessary tasks.
It's a reminder for everyone who is struggling with essay writing that Essay Sages is there to provide you with Writing Services. Unlike any other Essay Writing Services, we have a team of professionals with academic backgrounds.
So, if you are tired of searching for the “Write My Essay Online” service, we are there for you 24*7. In a short time, you can place your order and choose from our best writers.
</p>
         <h3>Ask Essay Sages Writers For “Write My Essay For Me”</h3>
         <p>Our parents spend a lot of money in schools or colleges just to make us successful in our lives. They can bear anything but not our failure, isn’t it? We understand that there comes a time when a student has to go through several tough phases and get bad grades. The reason could be personal or there might be a family issue going on because of which you are not able to perform well. We can understand it but not your college. Hence, there is no bad to hire someone whom you can say “Help Me Write My Essay”.
When you will search for the best Writing Service Online, you will get confused by a lot of options. Not all the service providers for writing essays are good for you. Hence, find reliable service providers like Essay Sages who have certified writers to provide you with high-quality content every time.
Here is why you should Hire Essay Writers at Essay Sages:
<ul>
<li><h5> 24*7 Customer Support</h5>
We do care for our customers and hence we are 24*7 available to help them. If you have any questions regarding your essay, ask our writers anytime.
</li>
<li><h5> Professional Academic Writer</h5>
We do understand the value of essay writing for you. Hence, we never compromise with quality. This is why we have only hired professional Academic Essay Writers for you.
</li>
<li><h5> Privacy Policy</h5>
The privacy of our customers matters a lot to us. All the information, in any form, shared with us will be safe.
</li>
<li><h5>  On-Time Delivery</h5>
If you will not submit your Essay Paper Writing on time, there is no use in submitting it and we understand it. At Essay Sages, you will get timely delivery so that you can submit the work on time and get good grades.
</li>
<li><h5>Plagiarism-Free Content</h5>
You may hire someone and ask them for “Write My Essay” but what if they will provide you with copied content? The time you will came to know about it, it would be too late. At Essay Sages, there are no chances that we will deliver plagiarized content to our customers.</li>
<li><h5>  Select the Essay Writer Of Your Choice</h5>We will provide you with a list of writers with their educational backgrounds, customer reviews, and experience in writing. Based on your requirement, you can choose the Paper Writer based on your requirement.
</li>
</ul>
</p>
<h3>Get Someone To Write Your Essay</h3>
         <p>We pride ourselves on hiring the best professionals at Essay Sages. Their high level of professionalism and many years of experience in writing academic papers make them sought after by many students around the world. The following advantages of our writers are our main competitive advantage:
        <ul>
        <li><h5>Top-Rated Writers</h5>
        We have hired top-rated writers only as we care for our clients and value our company's reputation.
 </li>
        <li><h5>Reliable</h5> </li>
        <li><h5>Once you order a paper from us, you can be sure that you will receive your document on time. We never compromise the valuable time of our clients.
</h5> </li>
        <li><h5> English Native Speakers
</h5> No one knows English better than native speakers, we aim to provide the best service to our customers.
</li>
        <li><h5>Masters and Ph.D. Academic Level</h5>All of our writers are skilled professionals who can handle any task. No one can handle tasks better than them.
 </li>
        <li><h5> Knowledge of What Teachers Want.</h5>As we have a lot of experience in writing, we know what your teacher wants. So when you pay for the test, you will get it.
 </li>
 <li><h5> Highest Experience.</h5>We have been working in this market for many years, and we know the importance of our customers and we never make them disappointed.
 </li>
        </ul>
        <p>We also offer Online Essay Writing Help if you have written your essay well but are not sure whether the style, format, or format meets the requirements. Just enter this request, write my essay online to find Essay Sages, and order. We can type an article for you within hours. 
However, it is better if you have enough time before the deadline because the final essay costs more. Also, by applying early, you will have plenty of time to proofread your essay before submitting it.
</p> </p>
        <h3>Ask Experts To Write My Essay At Essay Sages</h3>
        <p>
        Are you still looking to Hire A Writer For An Essay? With Essay Sages, you can stop worrying about anything. It's easy to order essays online from our essay writing service:  
        <ul>
        <li>Complete the form from the website; </li>
        <li>Discuss the details with the essay writer you have selected; </li>
        <li>Complete the payment deposits;   </li>
        <li>Receive the final document and pay after checking your document.</li></ul>
        If you order products on the Internet, it will not be difficult for you to order. Even if you have never done it before, you can easily understand the process because the "Write My Essay" service is user-friendly.
Stop asking "who can write my essay?" and join us for better academic results! Use the most trusted e-mail and spend more time with the people you love. Let us write an essay for you, we promise you won't regret it. We are happy to take care of your article and provide you with our online essay writing help 24/7! If you think Essay Sages will Help Write An Essay Online, you are right! Check out our testimonials and apply for our services now! 
 We have enough resources to write your essay and fulfill all your needs. Join our community of satisfied customers and solve your problems in minutes. Our Essay Writing Service is the best option in this market and you should try it. Don't miss the chance to enjoy incredible services and quality writing papers!

        </p>
       
        
      </div>
   </div>
   <div class="col-md-12">
      <div class="row">
      </div>
        </div>
        </div>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
></script>
@endsection