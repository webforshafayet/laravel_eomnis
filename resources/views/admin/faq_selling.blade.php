


<!DOCTYPE html>
<html lang="en">

<head>
     

@include('admin.css')  
</head>

<body>

    <!-- Begin page -->
         <h1>Add Product</h1>
 @include('admin.sidebar') 
      @include('admin.navbar')  

        <!-- ========== Left Sidebar Start ========== -->
     
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
    <div class="container-fluid"  >
        <div class="container"   >

        <h1 style="Padding: top 25px;font-size:25px">FAQ SELLING</h1>


        @if(session()->has('message'))

        <div class="alert alert-success alert-dismissible fade show" role="alert"> 
            <button type="button" class="close" data-dismiss="alert">X</button>
        {{session()->get('message')}}</div>

        @endif

<form action="{{url('upload_faq_selling')}}" method="post" enctype="multipart/form-data"> 
@csrf
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Question</label>
  <input type="text" name="question" class="form-control" id="exampleFormControlInput1" placeholder="Question">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Answer</label>
  <input type="text" name="answer" class="form-control" id="exampleFormControlInput1" placeholder="Answer">
</div>

 
         
<div class="col-auto">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </form>
        </div>
    </div>
    </div>
</div>


   
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    @include('admin.script') 
</body>

</html>