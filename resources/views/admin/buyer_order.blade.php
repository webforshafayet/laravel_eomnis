


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

        <h1 style="Padding: top 25px;font-size:25px">Show All Buyer Order</h1>


        @if(session()->has('message'))

        <div class="alert alert-success alert-dismissible fade show" role="alert"> 
            <button type="button" class="close" data-dismiss="alert">X</button>
        {{session()->get('message')}}</div>

        @endif
        <div class="table-responsive">
                <table class="table table-bordered table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Product Quantity</th>
                 

                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Shipping Email</th>
                <th scope="col">Shipping Phone</th>


                <th scope="col">Shipping Address</th>
                <th scope="col">State</th>
                <th scope="col">Postcode</th>



                <th scope="col">Paypal ID</th>
                <th scope="col">Paypal ID</th>
                <th scope="col">Paypal email</th>

                <th scope="col">Amount</th>
                <th scope="col">Currency</th>                <th scope="col">Payment Status</th>
                 

                <!-- <th scope="col">Delete</th> -->

            </tr>
            </thead>
            @foreach($data as $product)
            <tbody>
            <tr>
                 
                <td>{{$product->tittle}}</td>
                <td>{{$product->producprice}}</td>
                <td>{{$product->product_qty}}</td>
               


                <td>{{$product->shipping_first_name	}}</td>
                <td>{{$product->shipping_last_name}}</td>
                <td>{{$product->shipping_email}}</td>
                <td>{{$product->shipping_phone}}</td>


                <td>{{$product->address}}</td>
                <td>{{$product->state}}</td>
                <td>{{$product->postcode}}</td>



                <td>{{$product->payment_id}}</td>
                <td>{{$product->payer_id}}</td>
                <td>{{$product->payer_email}}</td>

                <td>{{$product->amount}}</td>
                <td>{{$product->currency}}</td>
                <td>{{$product->payment_status}}</td>

               
                

               

                 
 
                <!-- <td><a style="color: white" class="btn btn-danger" href="{{url('delete_buyer_order',$product->id)}}">Delete</a></td> -->
            </tr>
            
            </tbody>
            @endforeach
            </table>

            </div>
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