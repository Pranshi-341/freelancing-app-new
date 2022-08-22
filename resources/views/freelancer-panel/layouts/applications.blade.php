@extends('freelancer-panel/layouts/app')
@section('content')


   @include('freelancer-panel/layouts/asidebarMain')
   <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="box">
						<div class="box-body">
							<div class="table-responsive">
							  <table id="example1" class="table mb-0 w-p100">
								<thead>
									<tr>
										<th>Srno</th>
										<th>Client Name</th>
										<th>Due Date</th>
										<th>Topic</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
                                    @php
                                        $srno = 1;
                                    @endphp
									@foreach($applications as $key => $application)
                                    {{-- {{ $application }} --}}
                                        <tr>
                                            <td>#{{ $srno++ }}</td>
                                            <td>{{ $application['owner']['name'] }}</td>
                                            <td>{{ $application['job']['deadline'] }}</td>
                                            <td>{{ $application['job']['topic'] }}</td>
                                            <td>
                                                @if($application['status'] == 0)
                                                    <span class="text-warning">pending</span>
                                                @elseif($application['status'] == 1)
                                                    <span class="text-primary">accepted</span>
                                                @elseif($application['status'] == 2)
                                                    <span class="text-danger">rejected</span>
                                                @elseif($application['status'] == 3)
                                                    <span class="text-success">completed</span>
                                                @elseif($application['status'] == 4)
                                                    <span class="text-danger">cancelled</span>
                                                @endif
                                            </td>
                                            {{-- <td><span class="badge badge-secondary-light">Completed</span></td> --}}
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