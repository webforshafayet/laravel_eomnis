


<!DOCTYPE html>
<html lang="en">

<head>
     

@include('admin.css')  
</head>

<body>

    <!-- Begin page -->
    <!-- <div id="layout-wrapper"> -->
    @include('admin.sidebar') 
      @include('admin.navbar')  

        <!-- ========== Left Sidebar Start ========== -->
   
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        @include('admin.body') 
        <!-- end main content-->

    <!-- </div> -->
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    @include('admin.script') 
</body>

</html>