<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Professional Thesis Writers | Essay Writing Service</title>
    <meta name="description" content="Professional Thesis Writers at Essay Sages will provide top-rated thesis writing services for students. Save your time and effort!">
    

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
<div class="col-md-12 bg-image"  >
      @include('layouts.navbar')
      <div class="col-md-12 mt-5 head-part text-white">
         <h1 class="h1_tag_style">{{$title}}</h1>
     <p class="w-50 text-center">{{$topline}}</p>         
         <p style="color: #2e2221;">{{$bottomline}}</p>
         <div class="mt-5 mb-5 row d-flex w-50 justify-content-between">
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/convenient.png') }}" alt="Essay Writing Service"/>Hassle-Free Order Process</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/24-hours.png') }}" alt="Literature Review Writing"/>Qualified Writing Experts</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/saving.png') }}" alt="Online Essay Writing Services"/>On-Time Delivery</div>
         </div>
         <div class="mt-5 mb-5 row d-flex w-50 justify-content-between">
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/certificate.png') }}" alt="Professional Thesis Writers"/>24*7 Service Available</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/shield.png') }}" alt="Write My Thesis"/>Full Privacy</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/original.png') }}" alt="Thesis Writing Service"/>Plagiarism-Free Content </div>
         </div>
      </div>
   </div>
</div>
<div class="row">
<div class="col-md-12 my-3">
      <div class="w-50 mx-auto" style="border-bottom:4px solid #00cf8a">
         <h2 class="text-center pd_feature">
         Meet Our Team Of Professional Thesis Writers

         </h2>
      </div>
      <div class="row">
            
            
      @foreach($name as $name)
            <div class="col-md-4 cs" >
                  <div class="card shadow-md">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-4">
                              <img class="card-img-top" src="{{ asset('icons/profile.png') }}" alt="Card image cap" />
                           </div>
                           <div class="col-md-8">
                              
                                 <h5 class="card-title">{{ $name }}</h5>
                                 
                                 <div class="" style="font: 15px Roboto,sans-serif; display:flex;">
                                 @foreach($skills as $skill)
                                    <p class="card-text">{{ $skill }},</p>
                                    @endforeach
                              </div>
                              
                              
                           </div>
                              <p class="card-text" style="display:flex; max-width:120px; margin-left:100px;width:100%; flex-direction: column; font-size:12px;"><span style="font-size:20px;">0</span>Completed Order</p>
                              <p class="card-text" style="display:flex; max-width:120px; width:100%; flex-direction: column; font-size:12px;"><span style="font-size:20px;">0</span>Reviews</p>
                           
                        </div>
                     </div>
                  </div>
            </div>
            @endforeach
            
            
         </div>
   </div>
   <div class="col-md-12 my-3">
      <div class="w-50 mx-auto" style="border-bottom:4px solid #00cf8a">
         <h2 class="text-center pd_feature">
         What Do Our Customers Think About Our Thesis Writing Service?

         </h2>
      </div>
   </div>
   <div id="carouselExampleControls" class="carousel slide text-center carousel-dark shadow-md mb-4 cs" data-mdb-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="write my dissertation" style="width: 150px;" />
            <div class="row d-flex justify-content-center">
               <div class="col-lg-8">
                  <h5 class="mb-3">Emma</h5>
                 

                  <p class="text-muted">
                     <i class="fas fa-quote-left pe-2"></i>
                     I am really very grateful that I came to know about essay sages essay writing service. The writers are amazing that I can’t even define. They made my work so easy and the perfection of my writing is undefinable. Really good work. 
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
            <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="Professional Thesis Writers" style="width: 150px;" />
            <div class="row d-flex justify-content-center">
               <div class="col-lg-8">
                  <h5 class="mb-3">Charlotte </h5>
                 
                  <p class="text-muted">
                     <i class="fas fa-quote-left pe-2"></i>
                     I had to deliver the task on an urgent basis and I didn’t expect Essay Sages to do the work so quickly. They submit the task on time and the writing is really appreciable. Great essay writing service.
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
            <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="Thesis Writing Service" style="width: 150px;" />
            <div class="row d-flex justify-content-center">
               <div class="col-lg-8">
                  <h5 class="mb-3">Brian Bakes</h5>
                 
                  <p class="text-muted">
                     <i class="fas fa-quote-left pe-2"></i>
                     The writing expert submitted the project very quickly. The quality he provided in my  literature review writing is just outstanding. I am really impressed. Thank you essay sages.
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
         <h2 class="text-center pd_feature">
         Get Your Thesis Writing Done In 4 Easy Steps


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
            <img src="{{ asset('images/information-form.png') }}" class="img-fluid w-25" />
         </div>
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="d-flex justify-content-end align-items-center">
               <img src="{{ asset('images/writer.png') }}" class="img-fluid w-25" />
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
            <img src="{{ asset('images/payment.png') }}" class="img-fluid w-25" />
         </div>
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="d-flex justify-content-end align-items-center">
               <img src="{{ asset('images/revise-release.png') }}" class="img-fluid w-25"/>
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
                     Read the <a href="https://en.wikipedia.org/wiki/Paper">paper</a> carefully and then release the payment to the writer. If you want, you can also ask the writer to make any edits.

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
         <h2 class="text-center pd_feature">
         Thesis Writing Services Essay Sages Provides

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
         <h2 class="text-center pd_feature">
         Professional Thesis Writers For Hire Online


         </h2>
         <p class="pd_feature">Essay Sages is an Online Essay Writing Service that provides services for several academic tasks, including thesis writing. There are students who, for one reason or another, are unable to complete their research writing. Sometimes, it’s fair to take help from experts like Essay Sages as no one wants to repeat the same year again just for one writing task. 


</p>
</div>
</div>
   <div class="col-md-12  moretext section ">
      <div class="row">

         <p class="pd_feature">When you will have professional thesis writers </strong>as Essay Sages, they will also let you know about the subject well. You can then read the whole research work for a better understanding. Our professionals are available 24*7 at your service.</p>
         <h3 class="text-center pd_feature">Thesis Writing Service By Experts At Essay Sages

</h3>
         <p class="pd_feature">We understand that writing a thesis is not an easy task and it takes years of knowledge and experience in the same field. The writers must be qualified to complete the thesis writing and Essay Sages understand it. Hence, we will assign you a writer who has handled thesis writing before and has qualifications higher than you. So, ask our professional thesis writers to “Write My Thesis”. Our dedicated writers worked hard for years to get qualified for this position. We promise to provide you with quality work.
No matter what the questions or the topic of your research writing, our dedicated professionals will complete the task in the given time. Before the deadline, the completed task will be sent to your registered mail address after reviewing it properly. In the whole market, Essay Sages is popular for its writing services. You do need to look further when our writers are 24*7 available to provide you with the best thesis writing services.
</p>
<h3 class="text-center pd_feature"> Choose A Reliable Thesis Writing Service For Professional Work


</h3>
         <p class="pd_feature">The Internet is the ocean where you will find the solution to any problem but deep down, you may also find some danger and in this case, it could be some fake writing services. We completely understand your fear. It is really not easy to rely upon someone for the work you have completely dependent on. At Essay Sages, we have been serving our customers for 15 years and all the writers working with us are experienced. You will get the work done at an affordable price. Here are some of the benefits of hiring experts at Essay Sages for thesis writing.

<ul style="margin-left:20px;">
<li><b>We Can Handle Any Paper Writing:</b> All of our Professional Thesis Writers </strong>are qualified enough to handle any task no matter how difficult it is for you.


</li>
<li><b>24*7 Service:</b> It doesn't matter to us what time you are asking for our help. Our experts are 24*7 available to help you.

</li><li><b>Pocket-Friendly: </b>The satisfaction of our clients is our topmost priority at Essay Sages. We offer pocket-friendly and affordable prices to our customers.

</li>

</p>
<h3 class="text-center pd_feature"> How To Make Thesis Writing Service Order With Essay Sages?

</h3>
         <p class="pd_feature">Ordering our master's thesis writing service requires little effort for any custom request. You must first enter all the necessary information in the online form and confirm it. Next, you must specify all the requirements for your document, including length, type, quality level, and other special features. Next, pay for your personal account and choose an author to fulfill your request. You can contact the author and review their work during the process. The ordering process takes less than 3 minutes and saves you hours or days compared to writing the report yourself.
Don't worry about paperwork and you may get bored or frustrated by doing it without inspiration or with a busy schedule. People in this situation challenge us by asking us to "write my dissertation". </p><p>They are convinced that they don't want to waste their precious time and that their health is stressed by overtime and hard work. Just let our bachelor's Thesis Writing Service team help you. Place an order today and enjoy your free time, knowing that soon you will get something that will definitely gonna impress your professionals and academic staff. Most importantly, we are always available for customers and help those who need help and happiness.
At the end of the day, we make life easier for students and want everyone to have a successful education. Those with experience ordering Ph.D. any book or services know this well. Everyone needs professional help in any academic subject and there is nothing special if you are looking for qualified professional thesis writers to help you manage your process. Essay Sages is the right place to find the support you need! Leave all the hard work of learning on your shoulders and see how amazing and relaxing your learning life will be.

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