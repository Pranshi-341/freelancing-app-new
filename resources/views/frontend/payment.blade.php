@extends('layouts.app')
@section('content')
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<style>
    .progress-bar {
        width: 33.3%;
    }

    /* .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    } */
    /* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}


</style>
<div class="row">
    <div class="col-md-12" style=" background-size:cover; background-image: url(https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v4/intro-bg@2x.webp);">
        @include('layouts.navbar')
        <div class="col-md-12 mt-5 head-part text-white">
            <h2>Welcome to Technical Writers</h2>
            <p class="w-50 text-center">where our acclaimed client’s assignments and tasks are meticulously done We have a great deal to offer so please take your time to browse our website to discover more about us and what we offer</p>
            <div class="mt-5 mb-5 row d-flex w-50 justify-content-between">
                <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/convenient.png') }}" /> Easy Process</div>
                <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/24-hours.png') }}" />24/7 on Demand</div>
                <div class="col-sm-4 d-flex flex-column align-items-center"><img class="home-search-icon" src="{{ asset('icons/saving.png') }}" />Timesaver</div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 my-3">
        <div class="w-50 mx-auto" >
            <h2 class="text-center mt-3 p-3">
                Testimonials
            </h2>
            <div class="progress" style="height: 25px;">
                <div class="progress-bar" style="background-color: green" role="progressbar" style="width:40%">
                    1)Your Order
                </div>
                <div class="progress-bar" style="background-color: orange" role="progressbar" style="width:10%">
                    2)Find Writer
                </div>
                <div class="progress-bar" style="background-color: danger" role="progressbar" style="width:20%">
                    3)Make Payment
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 my-3">
        <div class="row" style="margin-left: 20%;">
            <div class="tabcontent payment">
                <div id="paypal-button-container"></div>
                <script src="https://www.paypal.com/sdk/js?client-id=AeQUvQ7iql5_qXgRHfhiIQ9GB27PDrvn3mJmDFS_zbsarHnTILbSnNbaB11cs60vIt-I_Xhw1PBViYdw&currency=USD&intent=capture&enable-funding=venmo" data-sdk-integration-source="integrationbuilder"></script>
            </div>
        </div>
    </div>
</div>
<script>
            const paypalButtonsComponent = paypal.Buttons({
              // optional styling for buttons
              // https://developer.paypal.com/docs/checkout/standard/customize/buttons-style-guide/
              style: {
                color: "gold",
                shape: "rect",
                layout: "vertical"
              },

              // set up the transaction
              createOrder: (data, actions) => {
                  // pass in any options from the v2 orders create call:
                  // https://developer.paypal.com/api/orders/v2/#orders-create-request-body
                  const createOrderPayload = {
                      purchase_units: [
                          {
                              amount: {
                                  value: "{{ $price }}"
                              }
                          }
                      ]
                  };

                  return actions.order.create(createOrderPayload);
              },

              // finalize the transaction
              onApprove: (data, actions) => {
                  const captureOrderHandler = (details) => {
                      const payerName = details.payer.name.given_name;
                      console.log('Transaction completed');
                  };

                  return actions.order.capture().then(captureOrderHandler);
              },

              // handle unrecoverable errors
              onError: (err) => {
                  console.error('An error prevented the buyer from checking out with PayPal');
              }
          });

          paypalButtonsComponent
              .render("#paypal-button-container")
              .catch((err) => {
                  console.error('PayPal Buttons failed to render');
              });

</script>