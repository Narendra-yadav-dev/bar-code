<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('public/vendors/mdi/css/materialdesignicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/vendors/ti-icons/css/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('public/vendors/css/vendor.bundle.base.css') }}">
<link rel="stylesheet" href="{{ asset('public/vendors/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
<link rel="shortcut icon" href="{{ asset('public/images/favicon.png') }}">
  </head>
  <body>
    <div class="container-scroller">
            @include('partials.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('partials.sidebar')
            <div class="main-panel">
                @yield('content')
                @include('partials.footer')
            </div>
        </div>
    </div>

{{-- JS --}}
<script src="{{ asset('public/vendors/js/vendor.bundle.base.js') }}"></script>

    <script src="{{ asset('public/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('public/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>

    <script src="{{ asset('public/js/off-canvas.js') }}"></script>
    <script src="{{ asset('public/js/misc.js') }}"></script>
    <script src="{{ asset('public/js/settings.js') }}"></script>
    <script src="{{ asset('public/js/todolist.js') }}"></script>
    <script src="{{ asset('public/js/jquery.cookie.js') }}"></script>

    <script src="{{ asset('public/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>