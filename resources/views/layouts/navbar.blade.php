<style>
  .dropdown-big .dropdown-men{display: none;}
  .dropdown-big:hover .dropdown-men {
        display: block;
        box-sizing: border-box;
  }

  .dropdown-item:hover {
    /* margin-left: 3px; */
    border-left: 1px solid blue;
    /* font-size: medium; */
  }
  .dropdown-double{
    position: absolute;
    background: #fff;
    list-style: none;
    text-decoration: none;
    padding: 30px 0px 30px 0px;
    border-radius: 15px;
    display: flex;
  }
  .less-padding{
    padding: 0px 0px 0px 0px;
    
  }

  .less-padding ul{
    padding: 1rem!important;
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
</style>

<nav class="h5 shadow-lg navbar navbar-expand-lg navbar-dark font-weight-bold" style="background-color: rgba(0,136,210, 0.9);">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Technical Writters</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown-big">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <div class="dropdown-double">
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
        </li>
        <li class="nav-item dropdown-big">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Writing Help
          </a>
          <div class="dropdown-double">
            <ul class="dropdown-men w-75 text-wrap text-break" aria-labelledby="navbarDropdown" style="list-style:none;border-right: 1px solid">
              <li><a class="dropdown-item" href="/help/essay">Essay writing</a></li>
              <li><a class="dropdown-item" href="/help/research-paper">Research paper writing</a></li>
              <li><a class="dropdown-item" href="/help/thesis">Thesis writing</a></li>
              <li><a class="dropdown-item" href="/help/dissertation">Dissertation writing</a></li>
            </ul>
            <ul class="dropdown-men" style="list-style:none;border-right: 1px solid">
              <li><a class="dropdown-item" href="/help/assigment">Assignments Writing</a></li>
              <li><a class="dropdown-item" href="/help/book-report">Book Report writing</a></li>
              <li><a class="dropdown-item" href="/help/speach">Speach writing</a></li>
              <li><a class="dropdown-item" href="/help/personal-statement">Personal Statement</a></li>
            </ul>
            <ul class="dropdown-men" style="list-style:none;">
              <li><a class="dropdown-item" href="/help/lab-report">Lab Report writing</a></li>
              <li><a class="dropdown-item" href="/help/homework">Homework writing</a></li>
              <li><a class="dropdown-item" href="/help/case-study">Case study writing</a></li>
              <li><a class="dropdown-item" href="/help/literature-review">Literature review writing</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item dropdown-big">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Team Members
          </a>
          <div class="dropdown-double less-padding">
            <ul class="dropdown-men" aria-labelledby="navbarDropdown" style="list-style: none;" >
              <li><a class="dropdown-item" href="/support-team">Support Team</a></li>
              <li><a class="dropdown-item" href="/professional-writers">Professional writers</a></li>
              <li><a class="dropdown-item" href="/competent-tutors">Competent Tutors</a></li>
              <li><a class="dropdown-item" href="/licensed-researchers">Licensed researchers</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contactUs">Contact Us</a>
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