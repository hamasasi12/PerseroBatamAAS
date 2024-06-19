<!DOCTYPE html>
<html lang="en">

<head>
    
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>@yield('title')</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="{{ asset('./assets/img/logo1.png') }}" rel="icon" />
  <link href="{{ asset('./assets2/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect" />
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="{{ asset('./assets2/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('./assets2/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('./assets2/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('./assets2/vendor/quill/quill.snow.css') }}" rel="stylesheet" />
  <link href="{{ asset('./assets2/vendor/quill/quill.bubble.css') }}" rel="stylesheet" />
  <link href="{{ asset('./assets2/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
  <link href="{{ asset('./assets2/vendor/simple-datatables/style.css') }}" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="{{ asset('./assets2/css/style.css') }}" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!--  Header  -->
  @include('components.header')

  <!--  Sidebar  -->
  @include('components.sidebar')

  <!-- main -->
  @yield('main')

  <!-- ======= Footer ======= -->
  @include('components.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('./assets2/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('./assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('./assets2/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('./assets2/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('./assets2/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('./assets2/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('./assets2/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('./assets2/vendor/php-email-form/validate.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('./assets2/js/main.js') }}"></script>
</body>

</html>

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
