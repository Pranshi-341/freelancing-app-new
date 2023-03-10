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
							  <table id="example5" class="table mb-0 w-p100">
								<thead>
									<tr>
										<th>Id No</th>
										<th>Name</th>
										<th>Applied Date</th>
										<th>Type</th>
										<th>Score</th>
                                        <th>Actions</th>
                                    </tr>
									</tr>
								</thead>
								<tbody>
                                    @foreach($data as $data)
									<tr>
										<td>{{ $data->freelancer_id }}</td>
										<td>{{ $data->name }}</td>
										<td>{{ $data->created_at }}</td>
										<td>Full Time</td>
										<td>{{ $data->score }}</td>
										@if($data->approved == 0)
                                        	<td><a class="badge badge-warning" href="/admin-panel/approve/{{$data->freelancer_id}}" value="{{ $data->freelancer_id }}">Approve</a></td>
										@else
											<td><span class="badge badge-success">Approved</span></td>
										@endif
									</tr>
                                    @endforeach
                                    
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