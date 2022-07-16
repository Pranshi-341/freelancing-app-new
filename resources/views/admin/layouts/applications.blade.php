@extends('admin/layouts/app')
@section('content')


   @include('admin/layouts/asidebarMain')
   <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="box">
						<div class="box-body">
							<div class="table-responsive">
							  <table id="example" class="table mb-0 w-p100">
								<thead>
									<tr>
										<th>#ID</th>
										<th>Name</th>
										<th>Applied Date</th>
										<th>Company</th>
										<th>Type</th>
										<th>Postition</th>
										<th>Contact</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>001457</td>
										<td>Johen Doe</td>
										<td>14 Nov 2020</td>
										<td>
											<div class="d-flex align-items-center">											
												<div class="mr-25 h-60 w-60 rounded text-center b-1">
													  <img src="{{asset('/admin/images/logo/logo-1.jpg')}}" class="align-self-center" alt="">
												</div>
												<span class="text-fade font-weight-600 font-size-16">
													Google Inc.<br><small>Miami</small>
												</span>
											</div>
										</td>
										<td>Full Time</td>
										<td>Project Manager</td>
										<td>
											<div class="d-flex align-items-center gap-items-2">	
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-success btn-xs"><i class="mdi mdi-phone"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-warning btn-xs"><i class="mdi mdi-email"></i></button>
											</div>
										</td>
										<td><span class="badge badge-secondary-light">Pending</span></td>
									</tr>	
									<tr>
										<td>001487</td>
										<td>Mical Doe</td>
										<td>19 Nov 2020</td>
										<td>
											<div class="d-flex align-items-center">											
												<div class="mr-25 h-60 w-60 rounded text-center b-1">
													  <img src="{{asset('/admin/images/logo/logo-2.jpg')}}" class="align-self-center" alt="">
												</div>
												<span class="text-fade font-weight-600 font-size-16">
													Group Inc.<br><small>Tampa</small>
												</span>
											</div>
										</td>
										<td>Part Time</td>
										<td>Sales Manager</td>
										<td>
											<div class="d-flex align-items-center gap-items-2">	
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-success btn-xs"><i class="mdi mdi-phone"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-warning btn-xs"><i class="mdi mdi-email"></i></button>
											</div>
										</td>
										<td><span class="badge badge-warning-light">On Hold</span></td>
									</tr>
									<tr>
										<td>001874</td>
										<td>Johen Doe</td>
										<td>14 Nov 2020</td>
										<td>
											<div class="d-flex align-items-center">											
												<div class="mr-25 h-60 w-60 rounded text-center b-1">
													  <img src="{{asset('/admin/images/logo/logo-3.jpg')}}" class="align-self-center" alt="">
												</div>
												<span class="text-fade font-weight-600 font-size-16">
													Cemal group.<br><small>New York</small>
												</span>
											</div>
										</td>
										<td>Full Time</td>
										<td>Machine Instrument</td>
										<td>
											<div class="d-flex align-items-center gap-items-2">	
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-success btn-xs"><i class="mdi mdi-phone"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-warning btn-xs"><i class="mdi mdi-email"></i></button>
											</div>
										</td>
										<td><span class="badge badge-success-light">Schedule</span></td>
									</tr>
									<tr>
										<td>001985</td>
										<td>Natasha Doe</td>
										<td>22 Nov 2020</td>
										<td>
											<div class="d-flex align-items-center">											
												<div class="mr-25 h-60 w-60 rounded text-center b-1">
													  <img src="{{asset('/admin/images/logo/logo-4.jpg')}}" class="align-self-center" alt="">
												</div>
												<span class="text-fade font-weight-600 font-size-16">
													Jabra pvt ltd.<br><small>Florida</small>
												</span>
											</div>
										</td>
										<td>Full Time</td>
										<td>Operation Manager</td>
										<td>
											<div class="d-flex align-items-center gap-items-2">	
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-success btn-xs"><i class="mdi mdi-phone"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-warning btn-xs"><i class="mdi mdi-email"></i></button>
											</div>
										</td>
										<td><span class="badge badge-success-light">Schedule</span></td>
									</tr>
									<tr>
										<td>001748</td>
										<td>Jhone Sina</td>
										<td>14 Nov 2020</td>
										<td>
											<div class="d-flex align-items-center">											
												<div class="mr-25 h-60 w-60 rounded text-center b-1">
													  <img src="{{asset('/admin/images/logo/logo-5.jpg')}}" class="align-self-center" alt="">
												</div>
												<span class="text-fade font-weight-600 font-size-16">
													Indiva Services.<br><small>Miami</small>
												</span>
											</div>
										</td>
										<td>Full Time</td>
										<td>Advertising Intern</td>
										<td>
											<div class="d-flex align-items-center gap-items-2">	
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-success btn-xs"><i class="mdi mdi-phone"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-warning btn-xs"><i class="mdi mdi-email"></i></button>
											</div>
										</td>
										<td><span class="badge badge-secondary-light">Pending</span></td>
									</tr>
									<tr>
										<td>001457</td>
										<td>Johen Doe</td>
										<td>14 Nov 2020</td>
										<td>
											<div class="d-flex align-items-center">											
												<div class="mr-25 h-60 w-60 rounded text-center b-1">
													  <img src="{{asset('/admin/images/logo/logo-1.jpg')}}" class="align-self-center" alt="">
												</div>
												<span class="text-fade font-weight-600 font-size-16">
													Google Inc.<br><small>Miami</small>
												</span>
											</div>
										</td>
										<td>Full Time</td>
										<td>Project Coordinator</td>
										<td>
											<div class="d-flex align-items-center gap-items-2">	
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-success btn-xs"><i class="mdi mdi-phone"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-warning btn-xs"><i class="mdi mdi-email"></i></button>
											</div>
										</td>
										<td><span class="badge badge-secondary-light">Pending</span></td>
									</tr>	
									<tr>
										<td>001487</td>
										<td>Mical Doe</td>
										<td>19 Nov 2020</td>
										<td>
											<div class="d-flex align-items-center">											
												<div class="mr-25 h-60 w-60 rounded text-center b-1">
													  <img src="{{asset('/admin/images/logo/logo-2.jpg')}}" class="align-self-center" alt="">
												</div>
												<span class="text-fade font-weight-600 font-size-16">
													Group Inc.<br><small>Tampa</small>
												</span>
											</div>
										</td>
										<td>Part Time</td>
										<td>Layout Expert</td>
										<td>
											<div class="d-flex align-items-center gap-items-2">	
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-success btn-xs"><i class="mdi mdi-phone"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-warning btn-xs"><i class="mdi mdi-email"></i></button>
											</div>
										</td>
										<td><span class="badge badge-warning-light">On Hold</span></td>
									</tr>
									<tr>
										<td>001874</td>
										<td>Johen Doe</td>
										<td>14 Nov 2020</td>
										<td>
											<div class="d-flex align-items-center">											
												<div class="mr-25 h-60 w-60 rounded text-center b-1">
													  <img src="{{asset('/admin/images/logo/logo-3.jpg')}}" class="align-self-center" alt="">
												</div>
												<span class="text-fade font-weight-600 font-size-16">
													Cemal group.<br><small>New York</small>
												</span>
											</div>
										</td>
										<td>Full Time</td>
										<td>Interior Architect</td>
										<td>
											<div class="d-flex align-items-center gap-items-2">	
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-success btn-xs"><i class="mdi mdi-phone"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-warning btn-xs"><i class="mdi mdi-email"></i></button>
											</div>
										</td>
										<td><span class="badge badge-success-light">Schedule</span></td>
									</tr>
									<tr>
										<td>001985</td>
										<td>Natasha Doe</td>
										<td>22 Nov 2020</td>
										<td>
											<div class="d-flex align-items-center">											
												<div class="mr-25 h-60 w-60 rounded text-center b-1">
													  <img src="{{asset('/admin/images/logo/logo-4.jpg')}}" class="align-self-center" alt="">
												</div>
												<span class="text-fade font-weight-600 font-size-16">
													Jabra pvt ltd.<br><small>Florida</small>
												</span>
											</div>
										</td>
										<td>Full Time</td>
										<td>Fashion Consultant</td>
										<td>
											<div class="d-flex align-items-center gap-items-2">	
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-success btn-xs"><i class="mdi mdi-phone"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-warning btn-xs"><i class="mdi mdi-email"></i></button>
											</div>
										</td>
										<td><span class="badge badge-success-light">Schedule</span></td>
									</tr>
									<tr>
										<td>001748</td>
										<td>Jhone Sina</td>
										<td>14 Nov 2020</td>
										<td>
											<div class="d-flex align-items-center">											
												<div class="mr-25 h-60 w-60 rounded text-center b-1">
													  <img src="{{asset('/admin/images/logo/logo-5.jpg')}}" class="align-self-center" alt="">
												</div>
												<span class="text-fade font-weight-600 font-size-16">
													Indiva Services.<br><small>Miami</small>
												</span>
											</div>
										</td>
										<td>Full Time</td>
										<td>Painter</td>
										<td>
											<div class="d-flex align-items-center gap-items-2">	
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-success btn-xs"><i class="mdi mdi-phone"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-warning btn-xs"><i class="mdi mdi-email"></i></button>
											</div>
										</td>
										<td><span class="badge badge-secondary-light">Pending</span></td>
									</tr>
								</tbody>			  
								
							</table>
							</div>              
						</div>
						<!-- /.box-body -->
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