<!DOCTYPE html>
<html>
  <head> 
    @include('admin.head')
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        @include('admin.body')
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('/admin-assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('/admin-assets/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{ asset('/admin-assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/admin-assets/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{ asset('/admin-assets/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('/admin-assets/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('/admin-assets/js/charts-home.js')}}"></script>
    <script src="{{ asset('/admin-assets/js/front.js')}}"></script>
  </body>
</html>