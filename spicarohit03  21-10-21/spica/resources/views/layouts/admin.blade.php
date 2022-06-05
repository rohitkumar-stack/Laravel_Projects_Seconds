<!DOCTYPE html>
<html lang="en">

<head>
 @include('includes.admin_asset')
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
</head>

<body>
   <div>
  @include('includes.admin_sidebar') 
   </div>

   <div>
  <!--  @include('includes.admin_header')  -->
   </div>

  <!--  content -->

    @yield('content');

   
<!-- Financial management review -->
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->

    @include('includes.admin_script')
  
</body>

</html>


