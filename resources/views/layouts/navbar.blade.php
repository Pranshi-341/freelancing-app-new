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
         background-image: linear-gradient(to right, #2E2221, #6A4522,#9B743E, #AA8762,#6A4522);
        transition: 0.5s;
    }
  
    .overlay-content {
        position: relative;
        z-index: 1;
        width: 100%;
        
       
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
              <li><a class="dropdown-item" href="/help/essaywrite">Essay Writing</a></li>
              <li><a class="dropdown-item" href="/help/homework">Homework Writing</a></li>
              <li><a class="dropdown-item" href="/help/dissertation">Dissertation Writing</a></li>
              <li><a class="dropdown-item" href="/help/thesis">Thesis Writing</a></li>
              <li><a class="dropdown-item" href="/help/literature">Literature Review Writing</a></li>
              <li><a class="dropdown-item" href="/help/maths">Mathematics Help</a></li>
              <li><a class="dropdown-item" href="/help/computer-science">Computer Science-Related Assignments</a></li>
              <li><a class="dropdown-item" href="/help/physics">Physics Helps</a></li>
              <li><a class="dropdown-item" href="/help/history">History Assignment Help</a></li>
              <li><a class="dropdown-item" href="/help/coursework">Coursework Writing</a></li>
              <li><a class="dropdown-item" href="/help/book-report">Book-Report Writing</a></li>
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
      <!-- <button class="btn-sm btn-dark my-2 my-sm-0" type="submit">Login</button> -->
      @guest
      
      <button  class="btn-sm btn-warning fw-bold my-2 mx-2 " data-toggle="modal" data-target="#contact_modal" id="popup" href="{{ route('login') }}" >Login</button>
      <button  class="btn-sm btn-warning fw-bold my-2 mx-2 " data-toggle="modal" data-target="#register_modal" id="popup" href="{{ route('register-user') }}" >Register</button>
      
      @else
      {{-- check auth --}}
      @if(Auth::user()->registerType == 1)
        <a class="btn-sm btn-dark my-2 " type="submit" href="/posts" >Your Publish Jobs</a>
        <a class="btn-sm btn-dark my-2 mx-2" type="submit" href="/order-now" >Order Now</a>
        <a class="btn-sm btn-dark my-2 my-sm-0" type="submit" href="{{ route('signout') }}" >Signout</a>
      @elseif(Auth::user()->registerType == 2)
        <a class="btn-sm btn-dark my-2 " type="submit" href="/freelancer-panel" >Go into Dashboard</a>
      @endif
      @endguest
    </div>
  </div>
</nav>
<div class="modal font" id="contact_modal" tabindex="-1" role="dialog" style="padding-top:70px;" aria-hidden="true">
	<div class="modal-dialog modal-sm " role="document">
		<div class="modal-content">
			<div class="modal-header" style=" background-color: rgb(0, 0, 0);
         background-image: linear-gradient(to right, #2E2221, #6A4522,#9B743E, #AA8762,#6A4522);">
				<div class="col-md-12 font">
					<h5 style="text-align:center; color:white;">Sign In</h5>
				</div>
				
			</div>
			<form method="post" class="font" enctype="multipart/form-data" id="popup_block" action="{{ route('login.custom') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div style="text-align: left;">
            <div class="col-md-12" style="padding-top:10px; ">
                <label for="email" style="display: flex; flex-direction: column;">Email</label>
                <input type="text" placeholder="Email" id="email" class="ip_box" name="email" required
                    autofocus>
                
                <span id="error_div" class="text-danger">{{ $errors->first('email') }}</span>
                
            </div>
            <div class="col-md-12" style="padding-top:10px;">
                <label for="password" style="display: flex; flex-direction: column;">Password</label>
                <input type="password" placeholder="Password" id="password" class="ip_box" name="password" required>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="col-md-12" style="padding-top:10px;">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            
                <button type="submit" class="btn-sm btn-warning" style="color:black;">Sign In</button>
            </div>
          </div>
			</form>
			
		</div>
	</div>
</div>
<!-- Registration page -->
<div class="modal" id="register_modal" tabindex="-1" role="dialog" style="padding-top:70px;" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header" style=" background-color: rgb(0, 0, 0);
         background-image: linear-gradient(to right, #2E2221, #6A4522,#9B743E, #AA8762,#6A4522);">
				<div class="col-md-12 font">
					<h5 style="text-align:center; color:white;">Sign Up</h5>
				</div>
				
			</div>
			<form method="post" enctype="multipart/form-data" id="popup_block" action="{{ route('register.custom') }}">
    			@csrf
          <div class="col-md-12" style="text-align:left;">
            <div class="col-md-12" style="padding-top:10px;">
                <label for="name" style="display: flex; flex-direction: column;">Name</label>
                <input type="text" placeholder="Name" id="name" class="ip_box" name="name" required autofocus>
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="col-md-12" style="padding-top:10px;">
                <label for="email" style="display: flex; flex-direction: column;">Email</label>
                <input type="text" placeholder="Email" id="email_address" class="ip_box" name="email" required autofocus>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="col-md-12" style="padding-top:10px;">
                <label for="password" style="display: flex; flex-direction: column;">Password</label>
                <input type="password" placeholder="Password" id="password" class="ip_box" name="password" required>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
</div>
            {{-- radio button for check register typr --}}
            <div class="col-md-12" style="padding-top:10px; margin-left:15px;">
                <div>
                    <input type="radio" name="registerType" id="exampleRadios1"
                        value="1" checked>
                    <label for="exampleRadios1">
                        User
                    </label>
                </div>
                <div>
                    <input type="radio" name="registerType" id="exampleRadios2"
                        value="2">
                    <label for="exampleRadios2">
                        Writer
                    </label>
                </div>
            </div>
            <div class="col-md-12" style="text-align:left;">
            <div class="col-md-12" id="skills" style="display:none;">
                <select class="multi_select" name="skills[]" multiple="multiple">
                  <option value="English">English</option>
                  <option value="Physics">Physics</option>
                  <option value="Mathematics">Mathematics</option>
                  <option value="Chemistry">Chemistry</option>
                  <option value="Computer-Science">Computer-Science</option>
                  <option value="History">History</option>
                  <option value="Economics">Economics</option>
                  <option value="Enviromental Issues">Enviromental Issues</option>
                  <option value="Law And Legal Issues">Law And Legal Issues</option>
                  <option value="Buissness and Entrepreneurship">Buissness and Entrepreneurship</option>
                  <option value="Psychology">Psychology</option>
                </select>
            </div>

            <div class="col-md-12" style="padding-top:10px;">
                <input type="text"  name="price" id="price" placeholder="Price" style="display:none;">                                
            </div>
            
            <div class="col-md-12" style="padding-top:10px;">
                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember Me</label>
                </div>
            </div>
            <div class="col-md-12" style="padding-top:10px;">
                <button type="submit" class="btn-sm btn-warning" style=" color:black;">Sign up</button>
            </div>
          </div>
			</form>
			
		</div>
	</div>
</div>
</header>
<script>
  $('.multi_select').select2({
        dropdownAutoWidth: 'true',
        maximumSelectionLength: 5,
        multiple: true
    });
  
	$(document).ready(function(){
    

	$("#exampleRadios2").on('click', function(){
		$('#skills').show();
        $('#price').show();
	});
	$("#exampleRadios1").on('click', function(){
		$('#skills').hide();
        $('#price').hide();
	});
});
$('#login_page').submit(function(e) {
  e.preventDefault();
  let formData = new FormData(this);

  $.ajax({
    type: 'POST',
    url: "{{ route('login.custom') }}",
    data: formData,
    processData: false,
    contentType: false,
    success: function (response) {
      
      if(response.success == 0) {
        var error = response.message;
        $("#error_div").html(error);  
      } else if (response.success == 2) {
        window.location.href = '/freelancer-panel';
      } else if (response.success == 3) {
        window.location.href = '/admin-panel';
      } else {
        window.location.href = '/';
      }
      //
    },
    error: function (error) {
      let errors = error.responseJSON.message;
      $("#error_div").html(errors);
      
    }
  });
});
</script>
