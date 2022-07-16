@extends('admin/layouts/app')
@section('content')


   @include('admin/layouts/asidebarMain')
   <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Data Tables</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Tables</li>
								<li class="breadcrumb-item active" aria-current="page">Data Tables</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
			<div class="col-12">
				<div class="box">
					<div class="box-header">						
						<h4 class="box-title">Complex headers (rowspan and colspan)</h4>
					</div>
					<div class="box-body">
						<div class="table-responsive">
							<table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
								<thead>
									<tr>
										<th rowspan="2">Subject</th>
										<th colspan="4">Order Information</th>
										<th rowspan="2">Status</th>
									</tr>
									<tr>
										<th>Topic</th>
										<th>Pages</th>
										<th>Deadline</th>
										<th>Instructions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Test</td>
										<td>testing</td>
										<td>10</td>
										<td>25/7/2022</td>
										<td>not use examples</td>
										<td class="bg-primary">Placed</td>
									</tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>testing</td>
                                        <td>10</td>
                                        <td>25/7/2022</td>
                                        <td>not use examples</td>
                                        <td class="bg-warning">Waiting for bid</td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>testing</td>
                                        <td>10</td>
                                        <td>25/7/2022</td>
                                        <td>not use examples</td>
                                        <td class="bg-info">Bid placed</td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>testing</td>
                                        <td>10</td>
                                        <td>25/7/2022</td>
                                        <td>not use examples</td>
                                        <td class="bg-secondary">Work in progress</td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>testing</td>
                                        <td>10</td>
                                        <td>25/7/2022</td>
                                        <td>not use examples</td>
                                        <td class="bg-success">Completed</td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>testing</td>
                                        <td>10</td>
                                        <td>25/7/2022</td>
                                        <td>not use examples</td>
                                        <td class="bg-danger">Rejected</td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>testing</td>
                                        <td>10</td>
                                        <td>25/7/2022</td>
                                        <td>not use examples</td>
                                        <td class="bg-success">Completed</td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>testing</td>
                                        <td>10</td>
                                        <td>25/7/2022</td>
                                        <td>not use examples</td>
                                        <td class="bg-danger">Rejected</td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>testing</td>
                                        <td>10</td>
                                        <td>25/7/2022</td>
                                        <td>not use examples</td>
                                        <td class="bg-success">Completed</td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>testing</td>
                                        <td>10</td>
                                        <td>25/7/2022</td>
                                        <td>not use examples</td>
                                        <td class="bg-success">Completed</td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>testing</td>
                                        <td>10</td>
                                        <td>25/7/2022</td>
                                        <td>not use examples</td>
                                        <td class="bg-primary">Placed</td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>testing</td>
                                        <td>10</td>
                                        <td>25/7/2022</td>
                                        <td>not use examples</td>
                                        <td class="bg-success">Completed</td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>testing</td>
                                        <td>10</td>
                                        <td>25/7/2022</td>
                                        <td>not use examples</td>
                                        <td class="bg-primary">Placed</td>
                                    </tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		  </div>
		</section>
	  </div>
  </div>
   </div>
<!-- ./wrapper -->
@endsection