@extends('freelancer-panel/layouts/app')
@section('content')


   @include('freelancer-panel/layouts/asidebarMain')
   <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				@foreach ($posts as $item)
					<div class="col-lg-4 col-12">
						<div class="box">
							<div class="box-body">	
								<div class="d-flex flex-wrap align-items-center">
									<div class="d-flex flex-column flex-grow-1 my-lg-0 my-10 pr-15">
										<span class="text-fade font-weight-600 font-size-16">
											{{ $item->topic }}
										</span>
										<a href="#" class="text-dark font-weight-600 hover-danger font-size-18">
											{{ $item->subject }}
										</a>
									</div>
								</div>
								<div class="mt-20">
									<h4 class="text-primary mb-20">
										{{-- {{ $item->budget }} --}}
										@if ($item->budget == null)
											{{ 'Not Specified' }}
										@else
											{{ $item->budget - ($item->budget * 0.25) }}
										@endif
									</h4>
									<p>
										@if ($item->instructions == null)
											{{ 'Not instructions given' }}
										@else
											{{ $item->instructions }}
										@endif
									</p>
									<div class="mt-10 d-flex justify-content-between align-items-center">
										<a href="/freelancer/jobs-details/{{ $item->id }}" class="waves-effect waves-light btn btn-primary mb-5">View Job</a>
										<p class="mb-0 text-fade"><i class="fa fa-map-marker"></i>{{ $item->deadline }}</p>
									</div>
								</div>
							</div>					
						</div>
					</div>
				@endforeach
				{{-- <div class="col-lg-4 col-12">
					<div class="box">
						<div class="box-body">	
							<div class="d-flex flex-wrap align-items-center">							

								<div class="d-flex flex-column flex-grow-1 my-lg-0 my-10 pr-15">
									<span class="text-fade font-weight-600 font-size-16">
										Group Inc.
									</span>
									<a href="#" class="text-dark font-weight-600 hover-danger font-size-18">
										Sales Manager
									</a>
								</div>
							</div>
							<div class="mt-20">
								<h4 class="text-primary mb-20">$1,200 - $1,800</h4>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>

								
								<div class="mt-10 d-flex justify-content-between align-items-center">
									<a href="/freelancer/jobs-details" class="waves-effect waves-light btn btn-primary mb-5">View Applications</a>
									<p class="mb-0 text-fade"><i class="fa fa-map-marker"></i> Tampa</p>
								</div>
							</div>
						</div>					
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="box">
						<div class="box-body">	
							<div class="d-flex flex-wrap align-items-center">							

								<div class="d-flex flex-column flex-grow-1 my-lg-0 my-10 pr-15">
									<span class="text-fade font-weight-600 font-size-16">
										Cemal group.
									</span>
									<a href="#" class="text-dark font-weight-600 hover-danger font-size-18">
										Machine Instrument
									</a>
								</div>
							</div>
							<div class="mt-20">
								<h4 class="text-primary mb-20">$1,200 - $1,800</h4>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>

								
								<div class="mt-10 d-flex justify-content-between align-items-center">
									<a href="/freelancer/jobs-details" class="waves-effect waves-light btn btn-primary mb-5">View Applications</a>
									<p class="mb-0 text-fade"><i class="fa fa-map-marker"></i> New York</p>
								</div>
							</div>
						</div>					
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="box">
						<div class="box-body">	
							<div class="d-flex flex-wrap align-items-center">							

								<div class="d-flex flex-column flex-grow-1 my-lg-0 my-10 pr-15">
									<span class="text-fade font-weight-600 font-size-16">
										Jabra pvt ltd.
									</span>
									<a href="#" class="text-dark font-weight-600 hover-danger font-size-18">
										Operation Manager
									</a>
								</div>
							</div>
							<div class="mt-20">
								<h4 class="text-primary mb-20">$1,200 - $1,800</h4>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>

								
								<div class="mt-10 d-flex justify-content-between align-items-center">
									<a href="/freelancer/jobs-details" class="waves-effect waves-light btn btn-primary mb-5">View Applications</a>
									<p class="mb-0 text-fade"><i class="fa fa-map-marker"></i> Florida</p>
								</div>
							</div>
						</div>					
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="box">
						<div class="box-body">	
							<div class="d-flex flex-wrap align-items-center">							

								<div class="d-flex flex-column flex-grow-1 my-lg-0 my-10 pr-15">
									<span class="text-fade font-weight-600 font-size-16">
										Indiva Services.
									</span>
									<a href="#" class="text-dark font-weight-600 hover-danger font-size-18">
										Advertising Intern
									</a>
								</div>
							</div>
							<div class="mt-20">
								<h4 class="text-primary mb-20">$1,200 - $1,800</h4>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>

								
								<div class="mt-10 d-flex justify-content-between align-items-center">
									<a href="/freelancer/jobs-details" class="waves-effect waves-light btn btn-primary mb-5">View Applications</a>
									<p class="mb-0 text-fade"><i class="fa fa-map-marker"></i> Miami</p>
								</div>
							</div>
						</div>					
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="box">
						<div class="box-body">	
							<div class="d-flex flex-wrap align-items-center">							

								<div class="d-flex flex-column flex-grow-1 my-lg-0 my-10 pr-15">
									<span class="text-fade font-weight-600 font-size-16">
										Group Inc.
									</span>
									<a href="#" class="text-dark font-weight-600 hover-danger font-size-18">
										Project Coordinator
									</a>
								</div>
							</div>
							<div class="mt-20">
								<h4 class="text-primary mb-20">$1,200 - $1,800</h4>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>

								
								<div class="mt-10 d-flex justify-content-between align-items-center">
									<a href="/freelancer/jobs-details" class="waves-effect waves-light btn btn-primary mb-5">View Applications</a>
									<p class="mb-0 text-fade"><i class="fa fa-map-marker"></i> Tampa</p>
								</div>
							</div>
						</div>					
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="box">
						<div class="box-body">	
							<div class="d-flex flex-wrap align-items-center">							

								<div class="d-flex flex-column flex-grow-1 my-lg-0 my-10 pr-15">
									<span class="text-fade font-weight-600 font-size-16">
										Cemal group.
									</span>
									<a href="#" class="text-dark font-weight-600 hover-danger font-size-18">
										Layout Expert
									</a>
								</div>
							</div>
							<div class="mt-20">
								<h4 class="text-primary mb-20">$1,200 - $1,800</h4>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>

								
								<div class="mt-10 d-flex justify-content-between align-items-center">
									<a href="/freelancer/jobs-details" class="waves-effect waves-light btn btn-primary mb-5">View Applications</a>
									<p class="mb-0 text-fade"><i class="fa fa-map-marker"></i> New York</p>
								</div>
							</div>
						</div>					
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="box">
						<div class="box-body">	
							<div class="d-flex flex-wrap align-items-center">							

								<div class="d-flex flex-column flex-grow-1 my-lg-0 my-10 pr-15">
									<span class="text-fade font-weight-600 font-size-16">
										Jabra pvt ltd.
									</span>
									<a href="#" class="text-dark font-weight-600 hover-danger font-size-18">
										Interior Architect
									</a>
								</div>
							</div>
							<div class="mt-20">
								<h4 class="text-primary mb-20">$1,200 - $1,800</h4>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>

								
								<div class="mt-10 d-flex justify-content-between align-items-center">
									<a href="/freelancer/jobs-details" class="waves-effect waves-light btn btn-primary mb-5">View Applications</a>
									<p class="mb-0 text-fade"><i class="fa fa-map-marker"></i> Florida</p>
								</div>
							</div>
						</div>					
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="box">
						<div class="box-body">	
							<div class="d-flex flex-wrap align-items-center">							

								<div class="d-flex flex-column flex-grow-1 my-lg-0 my-10 pr-15">
									<span class="text-fade font-weight-600 font-size-16">
										Indiva Services.
									</span>
									<a href="#" class="text-dark font-weight-600 hover-danger font-size-18">
										Fashion Consultant
									</a>
								</div>
							</div>
							<div class="mt-20">
								<h4 class="text-primary mb-20">$1,200 - $1,800</h4>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>

								
								<div class="mt-10 d-flex justify-content-between align-items-center">
									<a href="/freelancer/jobs-details" class="waves-effect waves-light btn btn-primary mb-5">View Applications</a>
									<p class="mb-0 text-fade"><i class="fa fa-map-marker"></i> Miami</p>
								</div>
							</div>
						</div>					
					</div>
				</div> --}}
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
</div>
<!-- ./wrapper -->
@endsection