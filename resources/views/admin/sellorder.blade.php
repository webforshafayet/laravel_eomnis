<div class="main-content">
        <div class="page-content">
        <div class="container-fluid"  >
        <div class="container"   >

        <h1 style="Padding: top 25px;font-size:25px">Show All Seller order</h1>


        @if(session()->has('message'))

        <div class="alert alert-success alert-dismissible fade show" role="alert"> 
            <button type="button" class="close" data-dismiss="alert">X</button>
        {{session()->get('message')}}</div>

        @endif

                <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Product ID</th>
                <th scope="col">Product Quantity</th>
                <th scope="col">Product Description</th>

                <th scope="col">Product Size</th>
                <th scope="col">Product Price</th>
                <th scope="col">Date</th>
<!-- 
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Shipping Email</th>
                <th scope="col">Shipping Phone</th>


                <th scope="col">Shipping Address</th>
                <th scope="col">State</th>
                <th scope="col">Postcode</th> -->
                 

                <th scope="col"> </th>

            </tr>
            </thead>
            @foreach($data as $product)
            <tbody>
            <tr>

             
                 
                <td>{{$product->tittle}}</td>
                <td>{{$product->product_id}}</td>
                <td>{{$product->product_qty}}</td>
                <td>{{$product->description}}</td>


                <td>{{$product->size}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->updated_at}}</td>
                   
 
                <td><a style="color: white" class="btn btn-danger" href="{{url('delete_seller_order',$product->id)}}">Delete</a></td>
            </tr>
            
            </tbody>
            @endforeach
            </table>

            
         </div>
         </div>
         </div>
         </div>