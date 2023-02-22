<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Dissertation Writing Service | Dissertation Help Service</title>
    <meta name="description" content=" Essay Sages will provide Ph.D. dissertation writing service online. Get help with your dissertation from our professional writers!">
    

</head>

@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-12 my-3">
   <img class="bg-image">
      @include('layouts.navbar')
      <div class="col-md-12 mt-5 head-part text-white">
         <h1 class="h1_tag_style">{{$title}}</h1>
     <p class="w-50 font fw-bold text-center">{{$topline}}</p>         
    <p class="font fw-bold" style="color: #ffc107;">{{$bottomline}}</p>
         <div class="mt-5 mb-5 row d-flex w-50 justify-content-between">
            <div class="col-sm-4 d-flex flex-column align-items-center font"><img class="home-search-icon" src="{{ asset('icons/convenient.png') }}" alt="Essay Writing Service"/>Hassle-Free Order Process</div>
            <div class="col-sm-4 d-flex flex-column align-items-center font"><img class="home-search-icon" src="{{ asset('icons/24-hours.png') }}" alt="Literature Review Writing"/>Qualified Writing Experts</div>
            <div class="col-sm-4 d-flex flex-column align-items-center font"><img class="home-search-icon" src="{{ asset('icons/saving.png') }}" alt="Online Essay Writing Services"/>On-Time Delivery</div>
         </div>
         <div class="mt-5 mb-5 row d-flex w-50 justify-content-between">
            <div class="col-sm-4 d-flex flex-column align-items-center font"><img class="home-search-icon" src="{{ asset('icons/certificate.png') }}" alt="Dissertation Writing"/>24*7 Service Available</div>
            <div class="col-sm-4 d-flex flex-column align-items-center font"><img class="home-search-icon" src="{{ asset('icons/shield.png') }}" alt="Dissertation Writing Service"/>Full Privacy</div>
            <div class="col-sm-4 d-flex flex-column align-items-center font"><img class="home-search-icon" src="{{ asset('icons/original.png') }}" alt="Custom Dissertation Services"/>Plagiarism-Free Content </div>
         </div>
      </div>
   </div>
</div>
<div class="row">
<div class="col-md-12 my-3">
      <div class="w-50 mx-auto"  style="border-bottom:4px solid; border-bottom-color:#00cf8a;">
         <h2 class="text-center mt-3 p-3">
         Meet Our Team Of Dissertation Writing Experts

         </h2>
      </div>
   </div>
      <div class="row" style="background-color: #fff ;">
   
      <div id="professional_Writers" class="carousel slide text-center carousel-dark shadow-md mb-4" data-mdb-ride="carousel" style="padding-top:75px;">
      <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="row bx_carousel">
                  <div class="col-md-6 other_page_carousel" >
                     <div class="card shadow-md">
                        <div class="card-body">
                              <div class="row">
                              <div class="col-md-3">
                                    <img class="card-img-top" src="{{ asset('icons/profile.png') }}" alt="Card image cap" >
                              </div>
                              <div class="col-md-7">
                                    <h5 class="card-title font">{{ $name[0] }}</h5>
                                    <div style="font: 15px Roboto,sans-serif; display:flex; width: 100px;">
                                          @foreach($skills as $skill)
                                          <p class="card-text font" style="width: 100%;">{{ $skill }},</p>
                                          @endforeach
                                    </div>
                                 <div class="row">
                                    <p class="card-text font" style="display:flex; max-width:120px; margin-left:100px;width:100%; flex-direction: column; font-size:12px;"><span style="font-size:20px;">0</span>Completed Order</p>
                                    <p class="card-text font" style="display:flex; max-width:120px; width:100%; flex-direction: column; font-size:12px;"><span style="font-size:20px;">0</span>Reviews</p>
                                 </div>
                                    
                              </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            </div>
           @foreach($main_data as $key => $value)
             @if($key != $name[0])
               <div class="carousel-item">  
                  <div class="col-md-6 other_page_carousel" >
                     <div class="card shadow-md">
                        <div class="card-body">
                        <div class="row">
                           <div class="col-md-3">
                              <img class="card-img-top" src="{{ asset('icons/profile.png') }}" alt="Card image cap" >
                           </div>
                           <div class="col-md-7">
                              <h5 class="card-title font">{{ $key }}</h5>
                                 <div class="" style="font: 15px Roboto,sans-serif; display:flex; width: 100px;">
                                    @foreach($value as $values)
                                    <p class="card-text font" style="width: 100%;">{{ $values }},</p>
                                    @endforeach
                                 </div>
                              <div class="row">
                                 <p class="card-text font" style="display:flex; max-width:120px; margin-left:100px;width:100%; flex-direction: column; font-size:12px;"><span style="font-size:20px;">0</span>Completed Order</p>
                                 <p class="card-text font" style="display:flex; max-width:120px; width:100%; flex-direction: column; font-size:12px;"><span style="font-size:20px;">0</span>Reviews</p>
                              </div>
                              
                           </div>
                        </div>
                        </div>
                     </div>
                  </div>
               </div>
            @endif
          @endforeach           
        </div>
      <button class="carousel-control-prev" type="button" data-mdb-target="#professional_Writers" data-mdb-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-mdb-target="#professional_Writers" data-mdb-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
      </button>

  
</div>
   
   <div class="col-md-12 my-3">
      <div class="w-50 mx-auto"  style="border-bottom:4px solid; border-bottom-color:#00cf8a;">
         <h2 class="text-center mt-3 p-3">
         What Do Our Customers Think About Our Dissertation Writing Service?
         </h2>
      </div>
   </div>
   <div id="carouselExampleControls" class="carousel slide text-center carousel-dark shadow-md mb-4 cs" data-mdb-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="Online Dissertation Writing Services" style="width: 150px;" />
            <div class="row d-flex justify-content-center">
               <div class="col-lg-8">
                  <h5 class="mb-3 font">Emma</h5>
                 

                  <p class="text-muted font">
                     <i class="fas fa-quote-left pe-2"></i>
                     I am really very grateful that I came to know about Essay Sages Essay Writing Service. The writers are amazing that I can’t even define. They made my work so easy and the perfection of my writing is undefinable. Really good work. 
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
            <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="Professional Dissertation Writing Services" style="width: 150px;" />
            <div class="row d-flex justify-content-center">
               <div class="col-lg-8">
                  <h5 class="mb-3 font">Charlotte</h5>
                 
                  <p class="text-muted font">
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
            <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="Custom Dissertation Writing" style="width: 150px;" />
            <div class="row d-flex justify-content-center">
               <div class="col-lg-8">
                  <h5 class="mb-3 font">Brian Bakes</h5>
                 
                  <p class="text-muted font">
                     <i class="fas fa-quote-left pe-2"></i>
                     The writing expert submitted the project very quickly. The quality he provided in my Literature Review Writing is just outstanding. I am really impressed. Thank you Essay Sages.
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
      <div class="w-50 mx-auto steps_of_essay_services">
         <h2 class="text-center mt-3 p-3">
         Get Your Dissertation Writing Done In 4 Easy Steps

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
                  <p class="text-dark font">
                     <span class="text-dark">
                     Enter all the project-related details in the form for a better understanding of our Essay Writers.
                     </span>
                  </p>
               </div>
            </div>
         </div>
         <div class="col-sm-6">
            <img src="{{ asset('images/information-form.png') }}" alt="Essay Writing Company" class="img-fluid w-25" />
         </div>
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="d-flex justify-content-end align-items-center">
               <img src="{{ asset('images/writer.png') }}" alt="Dissertation Writing Service" class="img-fluid w-25" />
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
                  <p class="text-dark font">
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
                  <p class="text-dark font">
                     <span class="text-dark">
                     Before depositing the amount, make sure you are satisfied with our Online Essay Writing Services and then proceed.
                     </span>
                  </p>
               </div>
            </div>
         </div>
         <div class="col-sm-6">
            <img src="{{ asset('images/payment.png') }}" alt="Dissertation Help Service" class="img-fluid w-25" />
         </div>
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="d-flex justify-content-end align-items-center">
               <img src="{{ asset('images/revise-release.png') }}" alt="Dissertation Help Service" class="img-fluid w-25"/>
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
                  <p class="text-dark font">
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
      <div class="mx-auto">
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
                           <ul class="sz_ul font">
                                       <li class="pd_ul">Essay Writing</li>
                                       <li class="pd_ul">Homework Writing</li>
                                       <li class="pd_ul">Dissertation writing</li>
                                       <li class="pd_ul">Thesis writing</li>
                                       <li class="pd_ul">Accounting Economics and Business related assignments</li>
                           </ul>
                        </div>
                        <div class="col-md-6">
                           <ul class="sz_ul font">
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
         <div class="col-md-4">
            <div class="card shadow-md">
               <div class="card-body">
                  <div class="row">
                  <div class="expertise-covers-v2__card-inner font">
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
                           <a href="order-now" class="btn-sm btn-warning" onclick="gta('send','event','CTA','click','get_essay_help');">Order Paper</a>
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
<div class="row v2"  style="width:70%;">
   <div class="col-md-12 my-3">
      <div class="mx-auto">
         <h2 class="text-center mt-3 p-3">
         Best Dissertation Writing Service

         </h2>
         <p class="font  font-large font">The ones who are getting a Ph.D. degree know its importance in their life. All students understand that applying for a Ph.D. program is not an easy decision at all. They quickly realize how difficult dissertation writing is when they make their first attempt. It takes years to study the subject, collect good material and organize the research paper. 
         </p>



</div>
</div>
   <div class="col-md-12 font moretext section">
      <div class="row">

         <p class="pd_feature  font-large font">Unlike any other writing assignment, Dissertation Writing is one of the most difficult academic papers, and its grades can affect your future career! The submission date is near and you are still in the middle of your research paper. There are a lot of students who failed to submit the research work on time and look for Dissertation Writing Service.
At Essay Sages, we provide online dissertation writing help services that will help you get good grades and save you from failure.</p>
         <h3 class="text-center pd_feature">Make An Order At Essay Sages Dissertation Writing Help Service
</h3>
         <p class="pd_feature  font-large font">Are you a bit nervous about using Custom Dissertation Services? Don’t worry, at Essay Sages, we have made it completely easy for you. In just a few steps, you will have your own paper writer who will help you in your research writing.
Let’s understand the complete process step by step:

<ul style="margin-left:20px;">
<li>Visit the official website of Essay Sages first.

</li>
<li>Using your email id, create a new account(if you are a new user) and complete the login.
</li>
<li>We provide a range of online writing services. So, choose the one you want to proceed with.
</li>
<li>Now, complete the basic requirements like date, citation, number of pages, etc.
</li>
<li>We have a list of writers that you can choose from. Based on their qualification, past experience, and customer reviews, you can make your decision.
</li>
<li>In the given time, our writers will deliver the paper to you.
</li>
<li>
Complete the payment process and enjoy good grades.
</li>
</ul>
</p>
<h3 class="text-center pd_feature">Custom Dissertation Writing Help Service From Our Experts At Essay Sages

</h3>
         <p class="pd_feature  font-large font">So, you finally made up your mind to try our Online Dissertation Writing Services. We can assure you of quality work and complete satisfaction. For years, Essay Sages has been delivering promising work to our customers and fulfilling their needs. Our academic writers give attention to each little detail and follow each guideline provided by the clients.
Why should you rely upon Essay Sages when there are other Professional Dissertation Writing Services? At Essay Sages, we simply believe in client satisfaction and our academic writers do the work keeping that one thing in mind. We listen to our clients and never argue with them. When it comes to Custom Dissertation Writing, sometimes the client demands to do some changes and we are open to doing that too.
We are completely satisfied with our team. They will complete the task in the given time and you will return with a happy face. All the writers in our company are native English speakers with experience and degrees in their names.

<h3 class="text-center pd_feature"> Why Essay Sages For Online Dissertation Writing Services and Essay Writing Help Services?
</h3>
        <ul style="margin-left:20px;">
        <li>Essay Sages Essay Writing Company has a team of experienced and professional academic writers from all fields. This is why we can handle papers on any subjects like MBA, computer science, nursing, philosophy, psychology, law, literature, education, history, geology, and other natural sciences.
</li>
        <li>No matter if you need someone to write the paper from scratch or need help to edit, proofread, or writing assistance for any part of the paper, we are 24*7 available to help you.</li>
        <li>Essay Sages is one of the best Dissertation Writing Service that provides unique content with zero grammatical errors.
</li>
        <li>You only pay after you approve the quality of the paper
 </li>
        <li>We provide online support available 24/7
</li>
        <li>Money back guarantee

</li>
 <li>We provide a range of experienced Ph.D. thesis support writers
</li>
 <li>On-time delivery has priority even if the due date is less than one day away</li>
 <li>

We provide a range of experienced Ph.D. thesis support writers
On-time delivery has priority even if the due date is less than one day away
</li>
        </ul>
      <p class=" font-large font">
        This is only a glimpse of why you should choose Essay Sages. There are many other advantages that make Essay Sages the best Dissertation <a href="https://en.wikipedia.org/wiki/Paper">Paper</a> Writing Service today. If you are looking to get the best Dissertation Help Service, we are 24*7 available to help you!
      </p>
</p>
        <h3 class="text-center pd_feature">15 Years Of Experience In Online Dissertation Writing</h3>

<p class="pd_feature  font-large font">Unlike any other paper writing, dissertation writing is quite hard. The effort put into its preparation will reflect the level of your diploma. At Essay Sages, we understand the importance of dissertation papers. We have been providing Dissertation Help Service to students for over 15 years, with exceptional writing skills and constant attention to detail.
Many students find it difficult to write their essays and often look for online essay writing service companies. Our online services have helped students from many areas for many years. So, when it comes to great writing services, experienced writers, and 100% originality, Essay Sages comes at the top of the list.

 </p>
        <h3 class="text-center pd_feature"> Get Good Grades With Professional Dissertation Writing
</h3> 
        <p class="pd_feature  font-large font">
        Imagine handing in a flawless paper written by a Ph.D. writer. It will not only help you get the degree you want but also impress your teachers. It is only possible in Essay Sages! Don't delay in submitting your order to our Essay Writing Company as our writers are willing to work for you.
You should not miss your chance to get a flawless paper without any effort on your part. Choose Essay Sages and benefit from the best writing services! Hundreds of students have graduated with our help, and you won't miss your chance to succeed!
        </p>
       <h4 class="text-center pd_feature">Who Are Dissertation Writers?
</h4><p class="pd_feature  font-large font">When it comes to producing the best writing results, Essay Sages is several steps ahead of other writing companies. We have been providing professional Dissertation Writing Services to our students for years, and this is only possible because of the professional writers we have on board. Our professional writers are one of the best native- English language writers. They have doctorate degrees and many years of experience in writing essays on various topics for students all over the world.
</p>
       <h4 class="text-center pd_feature">Is Essay Sages Dissertation Writing Service Free?
</h4><p class="pd_feature  font-large font">Our dissertation writing services are not free, but they are affordable! Our service plan includes payment after getting approval from your side. In any case, if the writing standards of our writer do not match, the amount will be returned to you.
</p>
       <h4 class="text-center pd_feature"> Can the Essay Sages Writers Complete My Dissertation Writing On Time?
</h4><p class="pd_feature  font-large font">Meeting the deadline is one of our top-most priorities. We understand the value of submitting the dissertation papers on time. Unlike any other Dissertation Writing Service, we won’t extend the date of submission. We are also open to making the required changes in the papers.

</p>
    </div>
    </div>
    <div class="text-center" style="padding-bottom:20px;">
    <a class="text-center moreless-button btn-sm btn-warning expertise-covers-v2__btn" href="">Read more</a>     
   </div>
   </div>
   

<!-- MDB -->

@endsection