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
					<div class="box-header">						
						<h4 class="box-title">Total Orders</h4>
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
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post['subject']}}</td>
                                            <td>{{$post['topic']}}</td>
                                            <td>{{$post['pages']}}</td>
                                            <td>
                                                @if($post['deadline'] == null)
                                                    <span class="text-danger">N/A</span>
                                                @else
                                                    {{$post['deadline']}}
                                                @endif
                                            </td>
                                            <td>
                                                @if($post['instructions'] == null)
                                                    <span class="text-danger">N/A</span>
                                                @else
                                                    {{$post['instructions']}}
                                                @endif
                                            </td>
                                            <td>
                                                @if(!$post['bidPost'])
                                                    @if($post['status'] == 0)
                                                        <span class="bg-primary">no bid yet</span>
                                                    @endif
                                                @else
                                                @if($post['bidPost'][0]['status'] == 0)
                                                    <span class="bg-primary">Waiting for Accepted</span>
                                                @elseif($post['bidPost'][0]['status'] == 1)
                                                    <span class="bg-success">accepted</span>
                                                @elseif($post['bidPost'][0]['status'] == 2)
                                                    <span class="bg-danger">rejected</span>
                                                @elseif($post['bidPost'][0]['status'] == 3)
                                                    <span class="bg-warning">in progress</span>
                                                @elseif($post['bidPost'][0]['status'] == 4)
                                                    <span class="bg-success">completed</span>
                                                @elseif($post['bidPost'][0]['status'] == 5)
                                                    <span class="bg-danger">cancelled</span>
                                                @endif
                                                @endif
                                            </td>
                                        </tr>
                                  @endforeach
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