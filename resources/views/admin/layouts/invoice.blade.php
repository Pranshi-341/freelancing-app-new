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
				<div class="box-header with-border">
				  <h3 class="box-title">Your Commission</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example5" class="table table-bordered table-striped" style="width:100%">
						<thead>
							<tr>
								<th>#Order ID</th>
								<th>Topic</th>
								<th>Date</th>
								<th>Commission per order</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>431</td>
								<td>System Architect</td>
								<td>22/07/2022</td>
								<td>$61</td>
							</tr>
                            <tr>
                                <td>432</td>
                                <td>System Architect</td>
                                <td>22/07/2022</td>
                                <td>$61</td>
                            </tr>
                            <tr>
                                <td>433</td>
                                <td>System Architect</td>
                                <td>22/07/2022</td>
                                <td>$61</td>
                            </tr>
                            <tr>
                                <td>434</td>
                                <td>System Architect</td>
                                <td>22/07/2022</td>
                                <td>$61</td>
                            </tr>
                            <tr>
                                <td>435</td>
                                <td>System Architect</td>
                                <td>22/07/2022</td>
                                <td>$61</td>
                            </tr>
                            <tr>
                                <td>436</td>
                                <td>System Architect</td>
                                <td>22/07/2022</td>
                                <td>$61</td>
                            </tr>
                            <tr>
                                <td>437</td>
                                <td>System Architect</td>
                                <td>22/07/2022</td>
                                <td>$61</td>
                            </tr>
                            <tr>
                                <td>438</td>
                                <td>System Architect</td>
                                <td>22/07/2022</td>
                                <td>$61</td>
                            </tr>
                            <tr>
                                <td>439</td>
                                <td>System Architect</td>
                                <td>22/07/2022</td>
                                <td>$61</td>
                            </tr>
                            <tr>
                                <td>440</td>
                                <td>System Architect</td>
                                <td>22/07/2022</td>
                                <td>$61</td>
                            </tr>
                            <tr>
                                <td>441</td>
                                <td>System Architect</td>
                                <td>22/07/2022</td>
                                <td>$61</td>
                            </tr>
                            <tr>
                                <td>442</td>
                                <td>System Architect</td>
                                <td>22/07/2022</td>
                                <td>$61</td>
                            </tr>
                            <tr>
                                <td>443</td>
                                <td>System Architect</td>
                                <td>22/07/2022</td>
                                <td>$61</td>
                            </tr>
						</tbody>
					</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->      
			</div>
		  </div>
		</section>
	  </div>
  </div>
   </div>
<!-- ./wrapper -->
@endsection