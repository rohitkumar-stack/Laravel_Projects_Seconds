<!DOCTYPE html>
<html lang="en">

<head>
  @include('includes.admin_asset')
</head>
<body>
  <div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
    @include('includes.admin_sidebar')
    
    <!-- partial -->
    @include('includes.admin_header')
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  @yield('content');


  @include('includes.admin_script')
</body>

</html>