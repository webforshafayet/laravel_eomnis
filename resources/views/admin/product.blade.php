


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

        <h1 style="Padding: top 25px;font-size:25px">Add Product</h1>


        @if(session()->has('message'))

        <div class="alert alert-success alert-dismissible fade show" role="alert"> 
            <button type="button" class="close" data-dismiss="alert">X</button>
        {{session()->get('message')}}</div>

        @endif

<form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data"> 
@csrf
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Product Tittle</label>
  <input type="text" name="tittle" class="form-control" id="exampleFormControlInput1" placeholder="Product Tittle">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Product Description</label>
  <input type="text" name="description" class="form-control" id="exampleFormControlInput1" placeholder="Product Description">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Product Color</label>
  <input type="text"  name="color" class="form-control" id="exampleFormControlInput1" placeholder="Product Color">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Product Size</label>
  <input type="text"  name="size" class="form-control" id="exampleFormControlInput1" placeholder="Product Size">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Product Price</label>
  <input type="text"  name="price" class="form-control" id="exampleFormControlInput1" placeholder="Product Price">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Product Condition</label>
  <input type="text"  name="condition" class="form-control" id="exampleFormControlInput1" placeholder="Product Condition">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Box Condition</label>
  <input type="text" name="boxcondition" class="form-control" id="exampleFormControlInput1" placeholder="Box Condition">
</div>

<div class="mb-3">
  
  <input type="file"  name="file" class="form-control" id="exampleFormControlInput1"  >
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