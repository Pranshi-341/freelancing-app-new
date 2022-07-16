<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://joblly-admin-template-dashboard.multipurposethemes.com/bs4/images/favicon.ico">

    <title>Joblly - Dashboard</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('/admin/css/vendors_css.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/select2/dist/css/select2-bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput-typeahead.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendor_components/morris.js/morris.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/chartist-js/dist/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/c3-master/c3.min.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/jquery-mapael/jquery.mapael.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/OwlCarousel2/dist/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/OwlCarousel2/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/horizontal-timeline/css/horizontal-timeline.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/flexslider/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/prism/prism.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendor_components/datatable/datatables.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('/admin/')}}">
    <link rel="stylesheet" href="{{asset('/admin/')}}">
    <link rel="stylesheet" href="{{asset('/admin/')}}">
    <link rel="stylesheet" href="{{asset('/admin/')}}">
    <link rel="stylesheet" href="{{asset('/admin/')}}">
    <link rel="stylesheet" href="{{asset('/admin/')}}">
    <link rel="stylesheet" href="{{asset('/admin/')}}">
    <link rel="stylesheet" href="{{asset('/admin/')}}">
    <link rel="stylesheet" href="{{asset('/admin/')}}">
    <link rel="stylesheet" href="{{asset('/admin/')}}">
    <link rel="stylesheet" href="{{asset('/admin/')}}">
    <link rel="stylesheet" href="{{asset('/admin/')}}">
    <link rel="stylesheet" href="{{asset('/admin/')}}">
    <link rel="stylesheet" href="{{asset('/admin/')}}">
    <link rel="stylesheet" href="{{asset('/admin/')}}">
    <link rel="stylesheet" href="{{asset('/admin/')}}">
    <link rel="stylesheet" href="{{asset('/admin/')}}">
    <link rel="stylesheet" href="{{asset('/admin/')}}">
    <link rel="stylesheet" href="{{asset('/admin/')}}">
    <link rel="stylesheet" href="{{asset('/admin/')}}">
    <link rel="stylesheet" href="{{asset('/admin/')}}"> -->
    
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('/admin/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('/admin/css/skin_color.css')}}">
     
  </head>

  <body class="hold-transition dark-skin sidebar-mini theme-primary">
    @include('admin.layouts.navbar')
            @yield('content')
    @include('admin.layouts.footer')

	<!-- Vendor JS -->
	<script src="{{asset('/admin/js/vendors.min.js')}}"></script>
	<script src="{{asset('/admin/js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('/admin/assets/icons/feather-icons/feather.min.js')}}"></script>	

	<script src="{{asset('/admin/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>
	<script src="{{asset('/admin/assets/vendor_components/moment/min/moment.min.js')}}"></script>
	<script src="{{asset('/admin/assets/vendor_components/fullcalendar/fullcalendar.js')}}"></script>
	
	<!-- Joblly App -->
	<script src="{{asset('/admin/js/template.js')}}"></script>
	<script src="{{asset('/admin/js/pages/dashboard.js')}}"></script>
	<script src="{{asset('/admin/js/pages/calendar-dash.js')}}"></script>
	
</body>

</html>