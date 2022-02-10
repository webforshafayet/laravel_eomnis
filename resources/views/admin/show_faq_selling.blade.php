


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

        <!-- <div class="main-content">
        <div class="page-content">
        <div class="container-fluid"  >
        <div class="container"   >

        <h1 style="Padding: top 25px;font-size:25px">Show All Product</h1>

         </div>
         </div>
         </div>
         </div> -->



         <div class="main-content">
        <div class="page-content">
        <div class="container-fluid"  >
        <div class="container"   >

        <h1 style="Padding: top 25px;font-size:25px">Show All FAQ</h1>


        @if(session()->has('message'))

        <div class="alert alert-success alert-dismissible fade show" role="alert"> 
            <button type="button" class="close" data-dismiss="alert">X</button>
        {{session()->get('message')}}</div>

        @endif

                <table class="table">
            <thead class="thead-dark">
            <tr>
    
                <th scope="col">Question</th>
                <th scope="col">Answer</th>

                <th scope="col">Update</th>
                <th scope="col">Delete</th>

            </tr>
            </thead>
            @foreach($data as $product)
            <tbody>
            <tr>
                 
                <td>{{$product->question}}</td>
                <td>{{$product->answer}}</td>
                 

               

                <td><a style="color: white" class="btn btn-warning" href="{{url('update_faq_selling_view',$product->id)}}">Update</a></td>
 
                <td><a style="color: white" class="btn btn-danger" href="{{url('delete_faq_selling',$product->id)}}">Delete</a></td>
            </tr>
            
            </tbody>
            @endforeach
            </table>

            
         </div>
         </div>
         </div>
         </div>
        
        <!-- end main content-->

    <!-- </div> -->
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    @include('admin.script') 
</body>

</html>