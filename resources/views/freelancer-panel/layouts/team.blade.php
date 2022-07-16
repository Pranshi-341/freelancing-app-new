@extends('admin/layouts/app')
@section('content')


   @include('admin/layouts/asidebarMain')

   <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Team</h3>
				</div>
				
			</div>
		</div>  

		<!-- Main content -->
		<section class="content">
			<div class="row">

			  <div class="col-12 col-lg-4">
				<div class="box ribbon-box">
				  <div class="ribbon-two ribbon-two-primary"><span>CEO</span></div>
				  <div class="box-header no-border p-0">				
					<a href="#">
					  <img class="img-fluid" src="{{asset('/admin/images/avatar/375x200/1.jpg')}}" alt="">
					</a>
				  </div>
				  <div class="box-body">
						<div class="user-contact list-inline text-center">
							<a href="#" class="btn btn-circle mb-5 btn-facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-instagram"><i class="fa fa-instagram"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-warning"><i class="fa fa-envelope"></i></a>				
						</div>
					  <div class="text-center">
						<h3 class="my-10"><a href="#">Tristan</a></h3>
						<h6 class="user-info mt-0 mb-10 text-fade">Project Manager</h6>
						<p class="text-fade w-p85 mx-auto">125 Ipsum Lorem Ave, Suite 458 New York, USA 154875 </p>
					  </div>
				  </div>
				</div>
			  </div>
			  <div class="col-12 col-lg-4">
				<div class="box ribbon-box">
				  <div class="ribbon-two ribbon-two-danger"><span>MD</span></div>
				  <div class="box-header no-border p-0">				
					<a href="#">
					  <img class="img-fluid" src="{{asset('/admin/images/avatar/375x200/2.jpg')}}" alt="">
					</a>
				  </div>
				  <div class="box-body">
					  <div class="text-center">
						<div class="user-contact list-inline text-center">
							<a href="#" class="btn btn-circle mb-5 btn-facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-instagram"><i class="fa fa-instagram"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-warning"><i class="fa fa-envelope"></i></a>				
						</div>
						<h3 class="my-10"><a href="#">Sophia</a></h3>
						<h6 class="user-info mt-0 mb-10 text-fade">Sales Manager</h6>
						<p class="text-fade w-p85 mx-auto">125 Ipsum Lorem Ave, Suite 458 New York, USA 154875 </p>
					  </div>
				  </div>
				</div>
			  </div>
			  <div class="col-12 col-lg-4">
				<div class="box ribbon-box">
				  <div class="ribbon-two ribbon-two-success"><span>Owner</span></div>
				  <div class="box-header no-border p-0">				
					<a href="#">
					  <img class="img-fluid" src="{{asset('/admin/images/avatar/375x200/3.jpg')}}" alt="">
					</a>
				  </div>
				  <div class="box-body">
					  <div class="text-center">
						<div class="user-contact list-inline text-center">
							<a href="#" class="btn btn-circle mb-5 btn-facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-instagram"><i class="fa fa-instagram"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-warning"><i class="fa fa-envelope"></i></a>				
						</div>
						<h3 class="my-10"><a href="#">Jacob</a></h3>
						<h6 class="user-info mt-0 mb-10 text-fade">Operation Manager</h6>
						<p class="text-fade w-p85 mx-auto">125 Ipsum Lorem Ave, Suite 458 New York, USA 154875 </p>
					  </div>
				  </div>
				</div>
			  </div>
			  <div class="col-12 col-lg-4">
				<div class="box">
				  <div class="box-header no-border p-0">				
					<a href="#">
					  <img class="img-fluid" src="{{asset('/admin/images/avatar/375x200/4.jpg')}}" alt="">
					</a>
				  </div>
				  <div class="box-body">
					  <div class="text-center">
						<div class="user-contact list-inline text-center">
							<a href="#" class="btn btn-circle mb-5 btn-facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-instagram"><i class="fa fa-instagram"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-warning"><i class="fa fa-envelope"></i></a>				
						</div>
						<h3 class="my-10"><a href="#">Isabella</a></h3>
						<h6 class="user-info mt-0 mb-10 text-fade">Machine Instrument</h6>
						<p class="text-fade w-p85 mx-auto">125 Ipsum Lorem Ave, Suite 458 New York, USA 154875 </p>
					  </div>
				  </div>
				</div>
			  </div>
			  <div class="col-12 col-lg-4">
				<div class="box ribbon-box">
				  <div class="ribbon-two ribbon-two-info"><span>Top Agent</span></div>
				  <div class="box-header no-border p-0">				
					<a href="#">
					  <img class="img-fluid" src="{{asset('/admin/images/avatar/375x200/5.jpg')}}" alt="">
					</a>
				  </div>
				  <div class="box-body">
					  <div class="text-center">
						<div class="user-contact list-inline text-center">
							<a href="#" class="btn btn-circle mb-5 btn-facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-instagram"><i class="fa fa-instagram"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-warning"><i class="fa fa-envelope"></i></a>				
						</div>
						<h3 class="my-10"><a href="#">Emma</a></h3>
						<h6 class="user-info mt-0 mb-10 text-fade">Advertising Intern</h6>
						<p class="text-fade w-p85 mx-auto">125 Ipsum Lorem Ave, Suite 458 New York, USA 154875 </p>
					  </div>
				  </div>
				</div>
			  </div>
			  <div class="col-12 col-lg-4">
				<div class="box">
				  <div class="box-header no-border p-0">				
					<a href="#">
					  <img class="img-fluid" src="{{asset('/admin/images/avatar/375x200/6.jpg')}}" alt="">
					</a>
				  </div>
				  <div class="box-body">
					  <div class="text-center">
						<div class="user-contact list-inline text-center">
							<a href="#" class="btn btn-circle mb-5 btn-facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-instagram"><i class="fa fa-instagram"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-warning"><i class="fa fa-envelope"></i></a>				
						</div>
						<h3 class="my-10"><a href="#">William</a></h3>
						<h6 class="user-info mt-0 mb-10 text-fade">Project Coordinator</h6>
						<p class="text-fade w-p85 mx-auto">125 Ipsum Lorem Ave, Suite 458 New York, USA 154875 </p>
					  </div>
				  </div>
				</div>
			  </div>
			  <div class="col-12 col-lg-4">
				<div class="box">
				  <div class="box-header no-border p-0">				
					<a href="#">
					  <img class="img-fluid" src="{{asset('/admin/images/avatar/375x200/7.jpg')}}" alt="">
					</a>
				  </div>
				  <div class="box-body">
					  <div class="text-center">
						<div class="user-contact list-inline text-center">
							<a href="#" class="btn btn-circle mb-5 btn-facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-instagram"><i class="fa fa-instagram"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-warning"><i class="fa fa-envelope"></i></a>				
						</div>
						<h3 class="my-10"><a href="#">Tristan</a></h3>
						<h6 class="user-info mt-0 mb-10 text-fade">Layout Expert</h6>
						<p class="text-fade w-p85 mx-auto">125 Ipsum Lorem Ave, Suite 458 New York, USA 154875 </p>
					  </div>
				  </div>
				</div>
			  </div>
			  <div class="col-12 col-lg-4">
				<div class="box">
				  <div class="box-header no-border p-0">				
					<a href="#">
					  <img class="img-fluid" src="{{asset('/admin/images/avatar/375x200/8.jpg')}}" alt="">
					</a>
				  </div>
				  <div class="box-body">
					  <div class="text-center">
						<div class="user-contact list-inline text-center">
							<a href="#" class="btn btn-circle mb-5 btn-facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-instagram"><i class="fa fa-instagram"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-warning"><i class="fa fa-envelope"></i></a>				
						</div>
						<h3 class="my-10"><a href="#">Michael</a></h3>
						<h6 class="user-info mt-0 mb-10 text-fade">Interior Architect</h6>
						<p class="text-fade w-p85 mx-auto">125 Ipsum Lorem Ave, Suite 458 New York, USA 154875 </p>
					  </div>
				  </div>
				</div>
			  </div>
			  <div class="col-12 col-lg-4">
				<div class="box">
				  <div class="box-header no-border p-0">				
					<a href="#">
					  <img class="img-fluid" src="{{asset('/admin/images/avatar/375x200/2.jpg')}}" alt="">
					</a>
				  </div>
				  <div class="box-body">
					  <div class="text-center">
						<div class="user-contact list-inline text-center">
							<a href="#" class="btn btn-circle mb-5 btn-facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-instagram"><i class="fa fa-instagram"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="btn btn-circle mb-5 btn-warning"><i class="fa fa-envelope"></i></a>				
						</div>
						<h3 class="my-10"><a href="#">Sophia</a></h3>
						<h6 class="user-info mt-0 mb-10 text-fade">Fashion Consultant</h6>
						<p class="text-fade w-p85 mx-auto">125 Ipsum Lorem Ave, Suite 458 New York, USA 154875 </p>
					  </div>
				  </div>
				</div>
			  </div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>

   </div>
<!-- ./wrapper -->
@endsection