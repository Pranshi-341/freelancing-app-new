<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jobs Available</title>
    <meta name="description" content=" Publish Jobs at Essay Sages and hire writers after checking the best and discounted deals.">
   

</head>

@extends('layouts.app')
@section('content')
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
	<style type="text/css">
	   
	</style>  

</head>
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/datatable/datatables.min.css')}}">
    <div class="row">
   <div class="col-md-12 my-3">
   <img class="bg-image">
        @include('layouts.navbar')
        <div class="col-md-12 mt-5 head-part text-white">
            <h2 class="h1_tag_style">Welcome to Essay Sages</h2>
            <p class="w-50 text-center">Where Our Acclaimed Client’s Assignments And Ttasks Are Meticulously Done We Have a Great Deal To Offer So Please Take Your Time To Browse Our Website To Discover More About Us And What We Offer</p>
            <div class="mt-5 mb-5 row d-flex w-50 justify-content-between">
                <div class="col-sm-4 d-flex flex-column align-items-center font"><img class="home-search-icon" src="{{ asset('icons/convenient.png') }}" /> Easy Process</div>
                <div class="col-sm-4 d-flex flex-column align-items-center font"><img class="home-search-icon" src="{{ asset('icons/24-hours.png') }}" />24/7 on Demand</div>
                <div class="col-sm-4 d-flex flex-column align-items-center font"><img class="home-search-icon" src="{{ asset('icons/saving.png') }}" />Timesaver</div>
            </div>
        </div>
    </div>
</div>
    <div class="container my-5">
    <section class="content">
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                      <table id="example1" class="table mb-0 w-p100">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Topic</th>
                                <th>Deadline</th>
                                <th>Instructions</th>
                                <th>Price To Paid</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($posts) > 0)
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post['subject']}}</td>
                                <td>{{$post['topic']}}</td>
                                <td>{{$post['deadline']}}</td>
                                <td>
                                    @if($post['instructions'] == null)
                                        <span class="text-danger">No Instructions</span>
                                    @else
                                        {{$post['instructions']}}
                                    @endif
                                </td>
                                <td>
                                    @if(!$post['bidPost'])
                                        <input type="text" value="{{$post['budget']}}" class="pay_price">
                                    @else
                                    
                                        <input type="text" value="{{ $post['bidPost'][0]['bid_amount'] + ($post['bidPost'][0]['bid_amount'] * 0.25) }}" class="pay_price">
                                    @endif
                                </td>
                                <td>
                                    {{-- add button accept order --}}
                                    @if(!$post['bidPost'])
                                        @if($post['status'] == 0)
                                            <button disabled class="btn-sm  btn-success btn-sm " style="width:115px;">Accept Order</button>
                                        @endif
                                    @else
                                    @if($post['bidPost'][0]['status'] == 0)
                                        <button type="button" data-toggle="modal" data-target="#payment_popup" id="popup" name="id" value="{{$post['id']}}" class="btn-success btn-sm price_get" style="width:115px;">Accept Order</button>
                                        
                                    @else
                                        <button disabled class="btn-sm  btn-success btn-sm " >Order Accepted</button>
                                        <a class="btn-sm btn-success my-2 " style="text-decoration:none;" type="submit" href="{{ url('userchat/'.$post['owner_id']) }}" >Chat</a>
                                    @endif
                                    @endif
                                    {{-- add button view order --}}
                                    <a  class="btn-sm btn-warningbtn-sm ">Delete</a>
                                </td>
                                <td>
                                    @if(!$post['bidPost'])
                                        @if($post['status'] == 0)
                                            <span class="badge bg-warning badge-warning">No Bid Yet</span>
                                        @endif
                                    @else
                                    @if($post['bidPost'][0]['status'] == 0)
                                        <span class="badge bg-warning badge-warning">Waiting For Accepted</span>
                                    @elseif($post['bidPost'][0]['status'] == 1)
                                        <span class="badge bg-success badge-success">Accepted</span>
                                    @elseif($post['bidPost'][0]['status'] == 2)
                                        <span class="badge badge-danger">Rejected</span>
                                    @elseif($post['bidPost'][0]['status'] == 3)
                                        <span class="badge badge-warning">In Progress</span>
                                    @elseif($post['bidPost'][0]['status'] == 4)
                                        <span class="badge badge-success">Completed</span>
                                    @elseif($post['bidPost'][0]['status'] == 5)
                                        <span class="badge badge-danger">Cancelled</span>
                                    @endif
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="6" class="text-center">No Posts</td>
                            </tr>
                            @endif
                        </tbody>			  
                    </table>
                    </div>              
                </div>
              </div>
        </div>
    </div>
</section>
    </div>

<div class="modal" id="payment_popup" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centred" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="col-md-10">
					<h5>Hire Writer</h5>
				</div>
				<div class="col-md-2">
    				<button type="button" class="close" id="close_button" data-dismiss="modal" aria-label="close">
    					<span aria-hidden="true">&times;</span>
    				</button>
				</div>
			</div>
			<form method="post" enctype="multipart/form-data" id="popup_block" action="">
    			@csrf
    			<div class="tabcontent payment">
                    <div id="paypal-button-container"></div>
                    <script src="https://www.paypal.com/sdk/js?client-id=AeQUvQ7iql5_qXgRHfhiIQ9GB27PDrvn3mJmDFS_zbsarHnTILbSnNbaB11cs60vIt-I_Xhw1PBViYdw&currency=USD&intent=capture&enable-funding=venmo" data-sdk-integration-source="integrationbuilder"></script>
                </div>
			</form>
			
		</div>
	</div>
</div>


  <!-- Vendor JS -->
	<script src="{{asset('/admin/js/vendors.min.js')}}"></script>
	<!-- Joblly App -->
	<script src="{{asset('/admin/js/template.js')}}"></script>
    <script src="{{asset('/admin/js/pages/data-table.js')}}"></script>
    <script src="{{asset('/admin/js/pages/date-paginator.js')}}"></script>
    <script src="{{asset('/admin/assets/vendor_components/datatable/datatables.min.js')}}"></script>

<script>
    
$("#close_button").on('click', function(){
    location.reload();
});

    $(document).ready(function(){

        $(".pay_price").attr('disabled', 'disabled');
        $(".price_get").on('click', function(){
            
    
            var price = $(this).closest('tr').find('.pay_price').val();
            var order_id = $(this).closest('tr').find('.price_get').val();
            
            paypal.Buttons({
                // optional styling for buttons
                // https://developer.paypal.com/docs/checkout/standard/customize/buttons-style-guide/
                
                // set up the transaction
                createOrder: function(data, actions){
                    // pass in any options from the v2 orders create call:
                    // https://developer.paypal.com/api/orders/v2/#orders-create-request-body
                    return actions.order.create({
                        purchase_units: [
                            {
                                amount: {
                                    value : price
                                }
                            }
                        ]
                    });

                },

                // finalize the transaction
                onApprove: (data, actions) => {
                    const captureOrderHandler = (details) => {
                        const payerName = details.payer.name.given_name;
                        console.log('Transaction completed');
                    };

                    return actions.order.capture().then(function(details){
                        details.order_id = order_id;
                        $.ajax({
                            data: details,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: 'payment_save',
                            type: "POST",
                            success: function(data){
                                toastr.success(data.message);
                                location.reload();
                            }

                        })
                    });
                },

                // handle unrecoverable errors
                onError: (err) => {
                    console.error('An error prevented the buyer from checking out with PayPal');
                }
            }).render("#paypal-button-container");

        });
    });
</script>
@endsection