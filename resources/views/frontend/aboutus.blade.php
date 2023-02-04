@extends('layouts.app')
<style>
   .head-part {
      /* background-image: url(https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v4/intro-bg@2x.webp); */
      display: flex;
      flex-direction: column;
      align-items: center;
   }
   .home-search-icon{
    height: 3em;
    width: 3em;
   }
   #show-more, #show-less { 
  color: grey;
}
#show-more a, #show-less a{
  cursor: pointer;
  text-decoration:underline;
  color: auto;
}
</style>
<script>
   $('#show-more-content').hide();

$('#show-more').click(function(){
   $('#show-more-content').show(300);
   $('#show-less').show();
   $('#show-more').hide();
});

$('#show-less').click(function(){
   $('#show-more-content').hide(150);
   $('#show-more').show();
   $(this).hide();
});
</script>
@section('content')
<div class="row">
<div class="col-md-12 bg-image"  >
      @include('layouts.navbar')
      <div class="col-md-12 mt-5 head-part text-white">
         <h1 class="h1_tag_style">{{ $title }}</h1>
         <h2><p style="color: #2e2221; font-size:20px;">{{$bottomline}}</p></h2>
      </div>
   </div>
</div>

<div class="row">
   <div class="col-sm-12 p-5">
   <div class="content">
      <p>
  Essay Sages is a United States education technology site company based in San Francisco,
California which operates as an online learning platform for students and tutors founded in 2009.
We are a team of experienced problem-solvers, professional writers, competent proofreaders,
supporters, and licensed researchers. We are here because you, other tutors, and thousands of
students all over the world require our academic assistance...</p>
   <div class="col-md-12  moretext section ">
      <div class="row">
<div id="show-more-content">Additional Information about us
We are able to offer the best services at reasonable costs because we allocate a professional
writer for any technical writing task ordered, our professional writers provide the best services
because every task gets a thorough check-up before being submitted…
</div>

</div>
    
        </div>
        


</div>
   
   </div>
   <a class="btn-sm btn-primary text-center moreless-button expertise-covers-v2__btn" href="">Read more</a>
</div>


@endsection
