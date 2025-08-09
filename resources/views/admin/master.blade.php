<!DOCTYPE html>
<html>

<head>
  @include('admin.css')
  <style>
    html,
    body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    .d-flex.align-items-stretch {
      min-height: 100vh;
    }
  </style>

</head>

<body>
  @include('admin.header')
  <div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->

    <div class="container-fluid">
      @yield('content')
    </div>

    <!-- JavaScript files-->
    <script src="{{ asset ('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset ('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{ asset ('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset ('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{ asset ('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset ('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{ asset ('admincss/js/charts-home.js')}}"></script>
    <script src="{{ asset ('admincss/js/front.js')}}"></script>
</body>

</html>