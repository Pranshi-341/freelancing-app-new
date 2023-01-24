<style>
  .dropdown-big .dropdown-men{display: none;}
  .dropdown-big:hover .dropdown-men {
        display: block;
        box-sizing: border-box;
        z-index:1000;  }

  .dropdown-item:hover {
    /* margin-left: 3px; */
    border-left: 1px solid blue;
    /* font-size: medium; */
  }
  .dropdown-double{
    font-family: Roboto,sans-serif;
    position: absolute;
    background: #fff;
    list-style: none;
    text-decoration: none;
    padding: 10px 0px 10px 0px;
    border-radius: 15px;
    display: flex;
  }
  .overlay {
      
        width: 0;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        background-color: rgb(0, 0, 0);
         background-color: #228384;
        transition: 0.5s;
    }
  
    .overlay-content {
        position: relative;
        z-index: 1;
        width: 100%;
        text-align: center;
       
    }
  .less-padding{
    padding: 0px 0px 0px 0px;
    
  }

  .less-padding ul{
    /* padding: 1rem!important; */
    border-radius: 15px;
  }
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
   #navbar {
  overflow: hidden;
  background-color: #333;
  
}

/* Navbar links */
#navbar {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}


/* The sticky class is added to the navbar with JS when it reaches its scroll position */
.sticky {
  top: 0;
  width: 100%;
  
  position: fixed;
  overflow:scroll:
}

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content{
  padding-top: 60px;
  
}
</style>
@push ('scripts')
<script>
   $(document).ready(function(){
    $(".dropdown-double").hover(function(){
        var dropdownMenu = $(this).children(".dropdown-men");
        if(dropdownMenu.is(":visible")){
            dropdownMenu.parent().toggleClass("open");
        }
    });
});    


window.onscroll = function() {myFunction()};
  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;

  function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

   </script>
   <header class="page-header page-header_writer js_header__wrapper  ">
<nav class="h5 shadow-lg sticky navbar navbar-expand-lg navbar-dark overlay  font-weight-bold">
  <div class="container-fluid overlay-content">
    <a class="navbar-brand" href="/" style="font-size: 25px;">Essay Sages</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <!-- <li class="nav-item dropdown-big">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a> -->
          <!-- <div class="dropdown-double">
            <ul class="dropdown-men w-75 text-wrap text-break" aria-labelledby="navbarDropdown" style="list-style:none;border-right: 1px solid">
              <li><a class="dropdown-item" href="/help/technical">Any Technical Writing</a></li>
              <li><a class="dropdown-item" href="/help/mathematics">Mathematics Help</a></li>
              <li><a class="dropdown-item" href="/help/physics">Physics Help</a></li>
              <li><a class="dropdown-item" href="/help/dissertation">Dissertation Help</a></li>
            </ul>
            <ul class="dropdown-men" style="list-style:none;">
              <li><a class="dropdown-item" href="/help/coursework">Coursework Writing</a></li>
              <li><a class="dropdown-item" href="/help/presentations">Presentations</a></li>
              <li><a class="dropdown-item" href="/help/computer-science">Computer Science Related Assignments</a></li>
              <li><a class="dropdown-item" href="/help/accounting-economics-business">Accounting, economics and Business-Related Assignments</a></li>
            </ul>
          </div> 
        </li> -->
        <div class="nav-item dropdown-big">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Writing Help
          </a>
          <div class="dropdown-double">
            <ul class="dropdown-men w-75 text-wrap text-break" aria-labelledby="navbarDropdown" style="list-style:none;">
              <li><a class="dropdown-item" href="/help/essaywrite">Essay writing</a></li>
              <li><a class="dropdown-item" href="/help/homework">Homework Writing</a></li>
              <li><a class="dropdown-item" href="/help/dissertation">Dissertation writing</a></li>
              <li><a class="dropdown-item" href="/help/thesis">Thesis writing</a></li>
              <li><a class="dropdown-item" href="/help/literature">Literature Review Writing</a></li>
              <li><a class="dropdown-item" href="/help/maths">Mathematics help</a></li>
              <li><a class="dropdown-item" href="/help/computer-science">Computer science-related assignments</a></li>
              <li><a class="dropdown-item" href="/help/physics">Physics helps</a></li>
              <li><a class="dropdown-item" href="/help/history">History Assignment Help</a></li>
              <li><a class="dropdown-item" href="/help/coursework">Coursework Writing</a></li>
              <li><a class="dropdown-item" href="/help/book-report">Book-report Writing</a></li>
            </ul>
          </div>
        </div>
        <li class="nav-item dropdown-big">
          <a class="nav-link" href="/team">
          Team
          </a>
          <!-- <div class="dropdown-double less-padding">
            <ul class="dropdown-men" aria-labelledby="navbarDropdown" style="list-style: none;" >
              <li><a class="dropdown-item" href="/support-team">Support Team</a></li>
              <li><a class="dropdown-item" href="/professional-writers">Professional writers</a></li>
              <li><a class="dropdown-item" href="/competent-tutors">Competent Tutors</a></li>
              <li><a class="dropdown-item" href="/licensed-researchers">Licensed researchers</a></li>
            </ul>
          </div> -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contactUs">Contact Us</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="/aboutUs">About Us</a>
        </li>
      </ul>
      <!-- login button -->
      <!-- <button class="btn btn-warning my-2 my-sm-0" type="submit">Login</button> -->
      @guest
      <a class="btn btn-warning my-2 mx-2" type="submit" href="{{ route('login') }}" >Login</a>
      <a class="btn btn-warning my-2 my-sm-0" type="submit" href="{{ route('register-user') }}" >Register</a>
      @else
      {{-- check auth --}}
      @if(Auth::user()->registerType == 1)
        <a class="btn btn-warning my-2 " type="submit" href="/posts" >Your publish jobs</a>
        <a class="btn btn-warning my-2 mx-2" type="submit" href="/order-now" >Order Now</a>
        <a class="btn btn-warning my-2 my-sm-0" type="submit" href="{{ route('signout') }}" >Signout</a>
      @elseif(Auth::user()->registerType == 2)
        <a class="btn btn-warning my-2 " type="submit" href="/freelancer-panel" >Go into Dashboard</a>
      @endif
      @endguest
    </div>
  </div>
</nav>
</header>