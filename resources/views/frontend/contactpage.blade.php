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
</style>
@section('content')
   <div style="background-size:cover; background-image: {{$backgroundImage}}">
      @include('layouts.navbar')
      <div class="col-md-12 mt-5 head-part text-white">
         <h2>{{$title}}</h2>
         <p class="w-50 text-center">{{$topline}}</p>
         <p style="color: #ffc107;">{{$bottomline}}</p>
      </div>
   </div>
   <div class="bg-light">
      
   </div>
   
@endsection
