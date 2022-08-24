<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
{{-- <link href="{{ URL::asset(' ') }}" rel="stylesheet" type="text/css" > --}}
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Nepali Garden</title>
    <link href="{{ URL::asset('admin/images/ico/apple-icon-120.png') }}" rel="apple-touch-icon" >
    <link rel="shortcut icon" type="image/x-icon" href="{{url('admin/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link href="{{ URL::asset('admin/vendors/css/vendors.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('admin/vendors/css/charts/apexcharts.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('admin/vendors/css/extensions/tether-theme-arrows.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('admin/vendors/css/extensions/tether.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('admin/vendors/css/extensions/shepherd-theme-default.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('admin/vendors/css/tables/datatable/datatables.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('admin/vendors/css/ui/prism.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('admin/vendors/css/calendars/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('admin/vendors/css/file-uploaders/dropzone.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('admin/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('admin/vendors/css/forms/select/select2.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('admin/vendors/css/pickers/pickadate/pickadate.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('admin/vendors/css/animate/animate.css') }}" rel="stylesheet" type="text/css" >
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
     <link href="{{ URL::asset('admin/css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
     <link href="{{ URL::asset('admin/css/bootstrap-extended.css') }}" rel="stylesheet" type="text/css" >
     <link href="{{ URL::asset('admin/css/colors.css') }}" rel="stylesheet" type="text/css" >
     <link href="{{ URL::asset('admin/css/components.css') }}" rel="stylesheet" type="text/css" >
     <link href="{{ URL::asset('admin/css/themes/dark-layout.css') }}" rel="stylesheet" type="text/css" >
     <link href="{{ URL::asset('admin/css/themes/semi-dark-layout.css') }}" rel="stylesheet" type="text/css" >

    <!-- BEGIN: Page CSS-->
     <link href="{{ URL::asset('admin/css/core/menu/menu-types/vertical-menu.css') }}" rel="stylesheet" type="text/css" >
     <link href="{{ URL::asset('admin/css/core/colors/palette-gradient.css') }}" rel="stylesheet" type="text/css" >
     <link href="{{ URL::asset('admin/css/pages/card-analytics.css') }}" rel="stylesheet" type="text/cFss" >
     <link href="{{ URL::asset('admin/css/pages/authentication.css') }}" rel="stylesheet" type="text/css" >
     <link href="{{ URL::asset('admin/css/pages/dashboard-analytics.css') }}" rel="stylesheet" type="text/css" >
     <link href="{{ URL::asset('admin/css/pages/dashboard-ecommerce.css') }}" rel="stylesheet" type="text/css" >
     <link href="{{ URL::asset('admin/css/pages/card-analytics.css') }}" rel="stylesheet" type="text/css" >
     <link href="{{ URL::asset('admin/css/plugins/tour/tour.css') }}" rel="stylesheet" type="text/css" >
     <link href="{{ URL::asset('admin/css/plugins/calendars/fullcalendar.css') }}" rel="stylesheet" type="text/css" >
     <link href="{{ URL::asset('admin/css/plugins/file-uploaders/dropzone.css') }}" rel="stylesheet" type="text/css" >
     <link href="{{ URL::asset('admin/css/pages/data-list-view.css') }}" rel="stylesheet" type="text/css" >
     <link href="{{ URL::asset('admin/css/pages/app-user.css') }}" rel="stylesheet" type="text/css" >
     <link href="{{ URL::asset('admin/css/pages/invoice.css') }}" rel="stylesheet" type="text/css" >
     <link rel="stylesheet" href="{{ asset('admin/toastr/toastr.min.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('admin/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <div>
        @include('dashboard::layouts.header')

    </div>

    <div style="min-height: 90vh">
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    @yield('content')

                </div>
            </div>
        </div>
    </div>

    <div>
        @include('dashboard::layouts.footer')
    </div>

</body>
{{-- <script type="text/javascript" src="{{ URL::asset('    ') }}"></script> --}}
<!-- END: Body-->

<!-- BEGIN: Vendor JS-->
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/vendors.min.js ') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/charts/apexcharts.min.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/extensions/tether.min.js ') }}"></script>
<!-- <script type="text/javascript" src="{{ URL::asset('admin/vendors/js/extensions/shepherd.min.js ') }}"></script> -->
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/extensions/moment.min.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/ui/prism.min.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/extensions/dropzone.min.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/tables/datatable/pdfmake.min.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/tables/datatable/vfs_fonts.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/tables/datatable/datatables.min.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/tables/datatable/datatables.buttons.min.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/tables/datatable/dataTables.select.min.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/tables/datatable/datatables.checkboxes.min.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/tables/datatable/buttons.html5.min.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/tables/datatable/buttons.print.min.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/tables/datatable/buttons.bootstrap.min.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/tables/datatable/datatables.bootstrap4.min.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/calendar/fullcalendar.min.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/calendar/extensions/daygrid.min.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/calendar/extensions/timegrid.min.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/calendar/extensions/interactions.min.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/pickers/pickadate/picker.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/pickers/pickadate/picker.date.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/pickers/pickadate/picker.time.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/pickers/pickadate/legacy.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/forms/select/select2.full.min.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/vendors/js/extensions/polyfill.min.js ') }}"></script>
<!-- END: Page Vendor JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>

<!-- BEGIN: Theme JS-->
<script type="text/javascript" src="{{ URL::asset('admin/js/core/app-menu.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/core/app.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/scripts/components.js ') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script type="text/javascript" src="{{ URL::asset('admin/js/scripts/cards/card-statistics.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/scripts/cards/card-analytics.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/scripts/pages/app-chat.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/scripts/ui/data-list-view.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/scripts/pages/invoice.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/scripts/extensions/dropzone.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/scripts/datatables/datatable.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/scripts/pages/dashboard-analytics.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/scripts/extensions/fullcalendar.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/scripts/forms/select/form-select2.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/scripts/forms/form-tooltip-valid.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/scripts/navs/navs.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/scripts/pickers/dateTime/pick-a-datetime.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/scripts/pages/app-user.js ') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/scripts/modal/components-modal.js ') }}"></script>
<script type="text/javascript" src="{{ asset('admin/toastr/toastr.min.js') }}"></script>
<!-- END: Page JS-->

<!-- Script for Toastr-->
@if (session('success'))
<script>
    $(function() {
            toastr.success("{{ session('success') }}");
        });

</script>
@endif
@if (session('error'))
<script>
    $(function() {
            toastr.error("{{ session('error') }}");
        });

</script>
@endif
@if ($errors->any())
@foreach ($errors->all() as $key => $error)
<script>
    $(function() {
            
            toastr.error("{{ $error }}");
            });

</script>
@endforeach
@endif

</html>