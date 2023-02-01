<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap 5 all cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>


    

    <!-- Styles -->
    <style>
      .cs
      {
      padding-top:75px;
      }
      .cs1 
      {
     padding-left:70px;
      }

      .pd_ul{
        padding-bottom:20px;
      }

      .pd_feature {
        padding-top: 20px;
      }

      .v2 {
        width: 100%;
        padding: 0 20px;
        margin-left: auto;
        margin-right: auto;
      }

      .text_clr {
        color:black;
      }

      .h1_tag_style {
        padding-top: 30px;
        padding-bottom:35px; 
        font-size: 50px;
      }

      .free {
        float:right;
      }

      .expertise-covers-v2__btn {
        width: 105px;
        max-width: 100%;
        margin-inline: auto;
      }

      .sz_ul{
        font-size:17px;
      }

        #section {
    width: 500px;
    height: 400px;
    word-wrap: break-word;
  }
  
  .moretext {
    display: none;
  }

  .expertise-covers-v2__card-list-item {
    align-items: center;
   
    position: relative;
  }

  .expertise-covers-v2__feature-price{
    margin-left: auto;
    font-weight: 700;
    text-decoration: line-through;
  }

  .expertise-covers-v2__summary {
    font-size: 14px;
    line-height: 1.5;
  }

  .expertise-covers-v2__feature-label {
    margin-left : 10px;
    font-weight: 700;
    color: #0084d6;
    text-transform: uppercase;
  }

  .expertise-covers-v2__card-inner {
    padding-left: 35px;
    padding-right: 35px;
  }

  .ip_box {
    width:inherit;
  }

    </style>
</head>

<body class="body container-fluid">
    <!-- TODO remove from here latter -->
    <!-- <div style="background-image: url(https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v4/intro-bg@2x.webp);"> -->
        <!-- <div class="row"> -->
            @yield('content')
        <!-- </div> -->
    <!-- </div> -->
    @include('layouts.footer')

</body>

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>


<script>
$('.moreless-button').click(function() {
    event.preventDefault();
   $('.moretext').slideToggle();
   if ($('.moreless-button').text() == "Read more") {
     $(this).text("Read less")
   } else {
     $(this).text("Read more")
   }
 });
 </script>
</html>