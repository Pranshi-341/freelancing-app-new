<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title >Physics Homework Help | Physics Problem Solver</title>
    <meta name="description" content=" Need an expert for Physics Homework Help Online? Get Quality Physics Assignment help services from Physics as9signment Experts here.">
    

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
<div class="col-md-12" style="background-size:cover; background-image: url({{ asset('images/ddedd.png') }});">
      @include('layouts.navbar')
      <div class="col-md-12 mt-5 head-part text-white">
         <h1 class="h1_tag_style">{{$title}}</h1>
     <p class="w-50 text-center">{{$topline}}</p>
         <p style="color: #ffc107;">{{$bottomline}}</p>
         <div class="mt-5 mb-5 row d-flex w-50 justify-content-between">
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/convenient.png') }}" alt="Book Report Writing Service"/>Hassle-Free Order Process</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/24-hours.png') }}" alt="Book Report Writing Services"/>Qualified Writing Experts</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/saving.png') }}" alt="book review writing service"/>On-Time Delivery</div>
         </div>
         <div class="mt-5 mb-5 row d-flex w-50 justify-content-between">
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/certificate.png') }}" alt="Essay Writers"/>24*7 Service Available</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/shield.png') }}" alt="Book Report Writing Service"/>Full Privacy</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/original.png') }}" alt="Book Report Writing Service"/>Plagiarism-Free Content </div>
         </div>
      </div>
   </div>
</div>
<div class="row">
<div class="col-md-12 my-3">
      <div class="w-50 mx-auto" style="border-bottom:4px solid #00cf8a">
         <h2 class="text-center mt-3 p-3">
         Meet Our Team Of Custom Book Report Writing
         </h2>
      </div>
      <div class="row">
            
            
            @foreach($writers as $writers)
            
            <div class="col-md-4 cs" >
                  <div class="card shadow-md">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-4">
                              <img class="card-img-top" src="{{ asset('icons/profile.png') }}" alt="Card image cap" />
                           </div>
                           <div class="col-md-8">
                              <h5 class="card-title">{{ $writers->name }}</h5>
                              <p class="card-text">{{ $writers->skills }}</p>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
            
            
            @endforeach
            
            
         </div>
   </div>
   <div class="col-md-12 my-3">
      <div class="w-50 mx-auto" style="border-bottom:4px solid #00cf8a">
         <h2 class="text-center mt-3 p-3">
         What Do Our Customers Think About Help In Physics Homework?

         </h2>
      </div>
   </div>
   <div id="carouselExampleControls" class="carousel slide text-center carousel-dark shadow-md mb-4 cs" data-mdb-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="Custom Book Report" style="width: 150px;" />
            <div class="row d-flex justify-content-center">
               <div class="col-lg-8">
                  <h5 class="mb-3">Emma</h5>
                 

                  <p class="text-muted">
                     <i class="fas fa-quote-left pe-2"></i>
                     I am really very grateful that I found Essay Sages. The writers are amazing that I can’t even define. They made my work so easy and the perfection of my writing is undefinable. Outstanding work.
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
            <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="Book Report Writing Service" style="width: 150px;" />
            <div class="row d-flex justify-content-center">
               <div class="col-lg-8">
                  <h5 class="mb-3">Charlotte </h5>
                 
                  <p class="text-muted">
                     <i class="fas fa-quote-left pe-2"></i>
                     I had to deliver the task urgently and didn’t expect Essay Sages to do the work so quickly. They submit the job on time and the writing is really appreciable. Excellent Book Report Writing Services.

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
            <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="Assignment Writing Service" style="width: 150px;" />
            <div class="row d-flex justify-content-center">
               <div class="col-lg-8">
                  <h5 class="mb-3">Brian Bakes</h5>
                 
                  <p class="text-muted">
                     <i class="fas fa-quote-left pe-2"></i>
                     Read the paper carefully and then release the payment to the writer. You can also ask the writer to make edits if you want.


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
         Get Your Book Report Writing Done In 4 Easy Steps
         </h2>
      </div>
   </div>
   <div class="col-md-12 cs" >
      <div class="row">
         <div class="col-sm-6">
            <div class="d-flex justify-content-end
                align-items-center h-100">
               <div class="border border-info p-3 rounded-circle" style="height: 3.5em ;">&nbsp;1&nbsp;</div>
               <div class="d-flex flex-column w-75 p-3">
                  <h5 class="text-primary w-75">
                      
                        <span class="text-dark">
                        Information Form

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
         <div class="col-sm-6">
            <img src="{{ asset('images/information-form.png') }}" alt="Custom Book Report" class="img-fluid w-25" />
         </div>
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="d-flex justify-content-end align-items-center">
               <img src="{{ asset('images/writer.png') }}" alt="Review Writing Service" class="img-fluid w-25" />
            </div>
         </div>
         <div class="col-sm-6">
            <div class="d-flex justify-content-start align-items-center h-100">
               <div class="border border-info p-3 rounded-circle" style="height: 3.5em ;">&nbsp;2&nbsp;</div>
               <div class="d-flex flex-column w-75 p-3">
                  <h5 class="text-primary w-75">
                      
                        <span class="text-dark">
                        Select the Writer
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
      <div class="row">
         <div class="col-sm-6">
            <div class="d-flex justify-content-end
                align-items-center h-100">
               <div class="border border-info p-3 rounded-circle" style="height: 3.5em ;">&nbsp;3&nbsp;</div>
               <div class="d-flex flex-column w-75 p-3">
                  <h5 class="text-primary w-75">
                      
                        <span class="text-dark">
                        Complete the Payment

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
         <div class="col-sm-6">
            <img src="{{ asset('images/payment.png') }}" alt="Book Report Writing Service" class="img-fluid w-25" />
         </div>
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="d-flex justify-content-end align-items-center">
               <img src="{{ asset('images/revise-release.png') }}" alt="Assignment Writing Service" class="img-fluid w-25"/>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="d-flex justify-content-start align-items-center h-100">
               <div class="border border-info p-3 rounded-circle" style="height: 3.5em ;">&nbsp;4&nbsp;</div>
               <div class="d-flex flex-column w-75 p-3">
                  <h5 class="text-primary w-75">
                      
                        <span class="text-dark">
                        Revise and Release
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

<div class="row ">
   <div class="col-md-12 my-3">
      <div class="w-50 mx-auto" style="border-bottom:4px solid #00cf8a">
         <h2 class="text-center mt-3 p-3">
         Professional Writing Services Essay Sages Provides

         </h2>
      </div>
   </div>
   <div class="col-md-12">
      <div class="row cs  cs1">
        
         <div class="col-md-6">
            
               <div class="card-body">
                  <div class="row">
                     
                        <h5 class="card-title pd_ul" style="text-align:center; font-size:32px;">Types of Essay</h5>
                        <div class="col-md-6">
                           <ul class="sz_ul">
                                       <li class="pd_ul">Essay Writing</li>
                                       <li class="pd_ul">Homework Writing</li>
                                       <li class="pd_ul">Dissertation writing</li>
                                       <li class="pd_ul">Thesis writing</li>
                                       <li class="pd_ul">Accounting Economics and Business related assignments</li>
                           </ul>
                        </div>
                        <div class="col-md-6">
                           <ul class="sz_ul">
                                       <li class="pd_ul">Mathematics help</li>
                                       <li class="pd_ul">Computer science-related assignments</li>
                                       <li class="pd_ul">Physics helps</li>
                                       <li class="pd_ul">Literature Review Writing</li>
                                       
                                       <li class="pd_ul">Coursework Writing</li>
                           </ul>
                        </div>
                     
                  </div>
               </div>
            
         </div>
         <div class="col-md-4 pd_feature">
            <div class="card shadow-md">
               <div class="card-body">
                  <div class="row">
                     
                     <div class="expertise-covers-v2__card-inner">
                        <h4 class="card-title"> Free</b> Features</h4>
                        <ul class="expertise-covers-v2__card-list">
                                            <li class="expertise-covers-v2__card-list-item">
                            <span class="expertise-covers-v2__feature-name">A Title Page</span>
                            
                            <span class="expertise-covers-v2__feature-label free">Free</span>
                        </li>
                                            <li class="expertise-covers-v2__card-list-item">
                            <span class="expertise-covers-v2__feature-name">References</span>
                            
                            <span class="expertise-covers-v2__feature-label free">Free</span>
                        </li>
                                            <li class="expertise-covers-v2__card-list-item">
                            <span class="expertise-covers-v2__feature-name">Citations</span>
                            
                            <span class="expertise-covers-v2__feature-label free">Free</span>
                        </li>
                                            <li class="expertise-covers-v2__card-list-item">
                            <span class="expertise-covers-v2__feature-name">A Running Head</span>
                            
                            <span class="expertise-covers-v2__feature-label free">Free</span>
                        </li>
                                            <li class="expertise-covers-v2__card-list-item">
                            <span class="expertise-covers-v2__feature-name">Page Numbers</span>
                            
                            <span class="expertise-covers-v2__feature-label free">Free</span>
                        </li>
                                            <li class="expertise-covers-v2__card-list-item">
                            <span class="expertise-covers-v2__feature-name">Plagiarism Check</span>
                            
                            <span class="expertise-covers-v2__feature-label free">Free</span>
                        </li>
                        </ul>
                                    <p class="expertise-covers-v2__summary">Get All Those Features For   FREE</b></p>
                     <div class="expertise-covers-v2__btn">
                        <a href="order-now" class="btn-sm btn-primary" onclick="gta('send','event','CTA','click','get_essay_help');">Order Paper</a>
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
<div class="row v2">
   <div class="col-md-12 my-3">
      <div class="w-50 mx-auto" style="border-bottom:4px solid #00cf8a">
         <h2 class="text-center mt-3 p-3">
         Custom Book Report Writing Service From Essay Sages Expert

         </h2>
         <p>Have you recently been assigned to write a book report but due to some reasons you can’t make it happen? Actually, it's a matter of interest and time availability. There are students who love to write reports but don’t have time. On the other hand, some students don’t have any interest in writing at all. In both cases, Essay Sages is providing  Book Report Writing Service </strong>to overcome both situations.
         </p>
        
         
         </div>
</div>
</p>
   <div class="col-md-12  moretext section ">
      <div class="row">
<p>The process to hire   Custom Book Report experts is quite simple at Essay Sages. Visit the website, choose the course and submit your requirements. You can also select your desired writer to complete your book report writing. No matter which report writer you choose, all of them have a skilled academic background.
</p>
<h3 class="text-center pd_feature">
Why You Should Trust Us From Book Report Writing Service?
 </h3>
         <p class="pd_feature">Why should you try Essay Sages for Book Report Writing? The task of submitting a college or school assignment is something that one can’t compromise with. These assignments might affect your academic grades. At Essay Sages, we believe in quality work. You will get a well-researched, proper order and unique content work each time you ask us to help you. Our services are built on five major elements:

            <h4 class="pd_feature">Top-Notch Quality</h4>
        <p class="pd_feature">With the writer's selection method, you can personally choose the book report writer to write the report for you. We provide the Book Report Writing Service that will provide you with complete solutions. Our writers will shape the book writing task based on your requirements.
        </p>
        <h4 class="pd_feature">Full Confidentiality</h4>
        <p class="pd_feature">We understand that you might have a fear of privacy while using online writing services. At Essay Sages, we are completely responsible for the privacy of your personal information. We will not share your personal information with any third-party services in any manner. Each of your personal details will be safe with us.

</p> 
<h4 class="pd_feature"> On-Time Delivery</h4>
        <p class="pd_feature">Using Essay Sages Assignment Writing Service means your project will be delivered to you on or before the deadline. We understand the importance of submitting assignments on delivery dates. You will receive your report writing at the time you mentioned while hiring our book report writers.
        </p>
        <h4 class="pd_feature"> 100% Unique Content</h4>
        <p class="pd_feature">When we say, “the work has been completed successfully”, it means you can directly submit it to your school or college without cross-checking anything. At Essay Sages, we have provided software to our writers to check for plagiarism before the final submission. Along with quality content, you will get content that is completely unique.

</p> 
<h4 class="pd_feature">24*7 Support Services</h4>
        <p class="pd_feature">Essay Sages is available for their customers 24*7. If you ever feel like asking something, reach out to our customer executives. They will be happy to answer your queries. Connect with the executives today!
        </p>
        <h3 class="text-center pd_feature">
        Essay Sages Only Hires Well- Experienced Book Report Writers
 </h3>
         <p class="pd_feature">Hiring Custom Book Report writers at Essay Sages is one of the smartest decisions you have ever made. All of our writers are qualified and experienced in their designated fields. It simply means, they have a level of understanding of the task and deliver quality content. Hire one of our writers today for the best <a href="https://en.wikipedia.org/wiki/Book">Book</a> Review Writing Service.
If you have completed the book report writing but need someone to check and fix everything, feel free to connect with us. Our writers will check the whole report and make changes wherever required. You will receive error-free, quality report writing work. Don’t worry, we are affordable and available 24*7 to help you.

</p> 
<h3 class="text-center pd_feature">
How To Hire A Writer For Book Report Writing Service At Essay Sages?
 </h3>
         <p class="pd_feature">The hiring process for book report writers at Essay Sages is as simple as posting your favorite pic on social media. You simply need to visit our official website and complete the form with the title of the book report along with the subject. Enter the deadline and choose the writer you want to hire for Book Report Writing Service. You can then sit relaxed and start focusing on other necessary things. In the given time, your task will be completed and you will get good grades.
</p> 

        </div>
        </div>
        <a class="text-center moreless-button btn-sm btn-primary expertise-covers-v2__btn" href="">Read more</a>
 </div>

        

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
></script>
@endsection 
