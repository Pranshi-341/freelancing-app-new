<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Essay Writers | Hire Essay Writers | Write My Essay Online</title>
    <meta name="description" content=" Hire professional Essay Writers at Essay Sages! 500+ MA and Ph.D. academic experienced writers for any subject ready to work!">
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
    opacity: 1;
  }
</style>
@section('content')
<div class="row">
<div class="col-md-12" style="background-size:cover; background-image: url({{ asset('images/ddedd.png') }});">
      @include('layouts.navbar')
      <div class="col-md-12 mt-5 head-part text-white">
         <h1 class="h1_tag_style">{{$title}}</h1>
         <p class="w-50 text-center">{{$topline}}</p>
        
         <p style="color: #2e2221;">{{$bottomline}}</p>
         <div class="col-md-8 mt-5 mb-5 row d-flex justify-content-between ">
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/24-hours.png') }}" />Quick Service</div>
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/convenient.png') }}" /> Professional Writing Expert</div>
            
            <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/saving.png') }}" />Free Edits</div>
         </div>
      </div>
   </div>
</div>
<!-- Our team members portfolio -->
<div class="row">
   <div class="col-md-12 my-3">
      <div class="w-50 mx-auto" style="border-bottom:4px solid #00cf8a">
         <h2 class="text-center pd_feature">
         Hire Professional Essay Writers Online At Essay Sages
         </h2> <p class="pd_feature">Get your academic papers done by expert Academic Essay Writers and save
                  Your time and efforts. No plagiarism, only high-quality content!
                </p>
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
</div>
<div class="row p-5">
   <div class="col-md-12 my-3">
      
         <h2 class="text-center pd_feature">
         Hire Essay Writers
         </h2> <p class="pd_feature">Nobody can understand the struggle of students when they have to complete multiple assignments at the same time. Also, you can’t compromise the quality too. If you do so, you have to face bad grades and that could lead to mental stress. This is where Essay Sages come into the picture.
                  If you have tired of writing papers and there is so much work to handle, Hire Essay Writers online. Such an Essay Paper Writing Service will save you time and effort. So, you can utilize that time for other required activities or assignments.
                </p><p>The hiring process is hassle-free and in a few minutes, you will have your Professional Essay Writer who will handle your assignments. You no longer need to think before studying your favorite subjects, going out with your friends, or spending time in activities you love the most.
                  Also, the writer at Essay Sages will provide you with quality work that will impress your professors and help you get good grades. Hence, when someone talks about the Best Writing Service, you know the name.
                </p>
      
   
      
         <h2 class="text-center pd_feature">
         Essay Writers For Hire
         </h2> <p class="pd_feature">If you are frustrated with so much assignment work and looking to Pay Someone To Do Your Essay, don’t look further other than Essay Sages. You no longer need to bribe your cousins or ask your professors to extend the submission date as our Essay Writing Service is available to be your helping hands.
                  All the professionals that will work for you have years of experience. No matter if it is a high school, college, or university paper, you will get quality work every time and that's what Essay Sages is all about.
                  Asking why there is a need to hire an expert writer. 
                </p><p>You might be thinking of getting this work done by anyone else, for example, your brother or sister. Isn’t it? Wait for a while and think, are they really that capable of understanding your assignment properly? Do they really complete the task with complete professionalism?
                  If you don’t want to get bad grades and want to relax for a while, Hire Essay Writers today! The experts will not help you to complete the papers, you will also get to learn a lot from them.
                  No matter what the reason is, sometimes it becomes necessary to get Online Help With Essay Writing. Now, you know whom you should ask.
                </p>
          <h3 class="pd_feature">How Essay Writers Will Help You?</h3>
         <p class="pd_feature">The writing experts working at Essay Sages can help you with various tasks related to your academics. No matter if you need help with Thesis Writing, Physics Help, Custom Essay Writing Service, Homework Writing, Dissertation Writing, Mathematics Help, or Literature Review Writing, our writers are there to help you.
              So, now you can sit calmly and confidently as you know that there are Essay Writers who will complete the task for you.
              Here are some main reasons why you can rely upon our Professional Essay Service:
          <ul>
          <li>We have writers who have expertise in the respective fields so there will be zero chance of disappointment. All you get is high-quality work, good grades, and appreciation.
          </li>
          <li>Every word will be written based on the requirements provided by you. If you want our writers to write the task in a particular format, they will take care of it.</li>
          <li>With the writing assignments, writers will also mention citations and references.
          </li>
          <li>All of our writers are eloquent in the English language.
          </li>

          <li>The Academic Essay Writers will be at your service until you will not be completely satisfied with their work.
          </li>

          </ul>
          Unlike any other online essay writing service, our writers will be there for you even after submitting the task. Hence, you can ask them to edit the work as many times as you wish within 7 days after submission.
          Essay Sages is known to deliver high-quality Custom Essays and we are proud of it!
          </p>
         <h3 class="pd_feature">Who Are Essay Writers?</h3>
         <p class="pd_feature">It may happen with a lot of people, they decide to hire Essay Writers who are either not professionals or freelancers. Those writers will not take the job task seriously and submit poor quality work or sometimes don’t meet the deadlines.
              This will not only impact your grades but it is a complete waste of money and your time. Hence, one should know who they are hiring.
          </p><p>We have a number of experienced writers available to work for you. No matter whichever Online Paper Writer you choose, all of them are professionals.
              Based on your work requirements, our system will show you a list of the writers. Based on your preferences, you can proceed to work with them.
              Before Hiring Essay Writers, you can check their past experience, reviews, and their qualifications as well. In this way, you will get to know who is going to write for you and this will give you satisfaction as well.
              All of our writers are qualified and have college degrees as well. Also, there are some writers who have doctorate degrees in their respective fields. 
          </p><p>So, when you need extremely detailed work, those writers are the best option to hire.
              In simple words, before you hire any Professional Essay Writers Online, you must check their qualifications, experience, and reviews. With Essay Sages, all of these details are transparent to our customers.
              So, when it comes to academic grades, one can never compromise with writing papers. Hence, you must check each detail of the writer before asking them to “Write My Essay”.
          </p>
        <h3 class="pd_feature">Hire Essay Writers For Any Topics or Subject You Need</h3>
         <p class="pd_feature">Our writers are 24*7 available at your service. Whatever your subject or assignment is about, our Essay Writers will get the job done in the given time.
              After you select the writer of your choice, you have to send your complete requirement for the project. Our writer will do their research work and start the work immediately. In between, if they need to ask anything or you want to make updates, you can connect with each other. In this way, you will get to know that your work is in the right hands.
              We have a huge team of writing experts with different academic backgrounds. 
          </p><p>Some of them are graduates while others have PHDs. Some have work experience in technology companies, while others are business professionals. The diversity of writers means that the project can work in any genre.
              So, don't worry, you will get the best service according to your desired topic and submit the task in the given time. The faster we receive your work requirements, the faster we can work on them.
              Once your project is ready, you will have access to it and can comment on it if you need any changes. Your Essay Writer will make the changes and submit the final project to you.
          </p><p>Another important part of hiring an Essay Writer is getting non-plagiarized work. It will be of no use if the writing can't pass a simple plagiarism test. At Essay Sages, we make sure that doesn't happen.
              Our writers used to check all work for plagiarism before sending it to the client. Your teachers won't know you got help with your work and you'll get better grades for that work.
              Whether you are a science student or studying history, we can help you when you need high-quality Essay Writing Services to submit your work on time. Whether you need a little time to work on other subjects, study for an exam, spend many hours at work, or just hang out with a friend, our Essay Writers will help every time.
          </p>
         
      
   </div>
</div>
  
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
></script>
@endsection