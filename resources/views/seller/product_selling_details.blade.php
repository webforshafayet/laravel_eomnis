<!DOCTYPE html>
<html lang="en">

<head>
<base href="/public">
<link rel="icon" href="" type="image/gif" />

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<!-- Flickty CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/e422e8ad98.js" crossorigin="anonymous"></script>

<!-- External CSS -->
<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" href="styles/profile.css">
<link rel="stylesheet" href="styles/settings.css">
@include('seller.css')  

</head>

<body>
    <!-- Header -->
    @include('seller.header')
    <!-- Search -->
 
    <!-- Main -->
    <main>
        <!-- Products Slider -->
        <main>
        <div class="row m-0">
            <!-- Side Bar -->
            @include('seller.profile_sidebar')

            <div class="col-12 col-sm-12 col-md-9 light-bg">
                <div class="content-container p-4 my-4 mx-3">
                    <div
                        class="d-flex flex-column flex-sm-column flex-md-row justify-content-between align-items-center">
                        <!-- Tab bar -->
                        <div class="tab-bar-container">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Current</a>
                                </li>

                                
                            </ul>
                        </div>
                    </div>

                    <!-- Search Bar -->
                    <div class="search-bar input-group mb-3 pt-4 mx-0">
                        <span class="input-group-text bg-white border-start" id="basic-addon1">
                            <img src="images/search-icon.svg" alt="search icon">
                        </span>
                        <input type="text" class="form-control border-start-0" placeholder="Search name"
                            aria-describedby="basic-addon1">
                    </div>
                    @if(session()->has('message'))

<div class="alert alert-success alert-dismissible fade show" role="alert"> 
    <button type="button" class="close" data-dismiss="alert">X</button>
{{session()->get('message')}}</div>

@endif


                    <form action="{{url('sell_placeorder')}}" method="post" > 
@csrf

                    <!-- Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Item</th>
                                <th scope="col">Asking Price</th>
                                <th scope="col">Quantity</th>
                            </tr>
                        </thead>
                        
                        
                        <tbody>
                            <tr>
                                <td class="hide">
                                    <div
                                        class="d-flex flex-row flex-sm-column flex-md-row  justify-content-start align-items-center">
                                        <img class="img-fluid" src="/productimage/{{$data->image}}"  style="height:300px; width:300px;"  alt="shoe">

                                        

                                        <div class="ms-3">
                                            <p class="table-title-1 mb-2">
                                            <br><br>
                                            <h4>Product TIttle</h4>
                                    <input type="text" name="tittle" value="{{$data->tittle}}" readonly>
                                            
                                            
                                            <!-- {{$data->tittle}} -->
                                        </p>


                                        <p class="table-title-1 mb-2">
                                            
                                            <h4>Product Description</h4>
                                    <!-- <input type="textarea" name="description" value="{{$data->description}}" readonly> -->
                                          <textarea name="description" id="" cols="40" rows="7" readonly>{{$data->description}}</textarea>  
                                            
                                            <!-- {{$data->tittle}} -->
                                        </p>
                                            <p class="table-title-2 mb-2">

                                             
                                            <h4>Product ID</h4>
                                    <input type="text" name="product_id" value="{{$data->id}}" readonly>
                                                
                                            <!-- {{$data->description}} -->
                                        
                                        </p>





                                            <p class="table-title-3"> 
                                            <h4>AUS M Mens Size: </h4>  
                                            <input type="text" name="size" value="{{$data->size}}" readonly>
                                            <!-- {{$data->size}} -->
                                        
                                        
                                        
                                        </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                <input type="text" name="producprice" value="{{$data->price}}" readonly>  
                                
                                
                                
                                 </td>
                                <td class="hide">
                                    
                                  
                                <input type="number" name="product_qty" Required >


                                <br><br>
                                <div class="col-auto">
                             

                                 
                                </td>


                                
                            </tr>

                             
                            
                        </tbody>
                      

                         
                    </table>
                    <div class="col-auto">
    <button type="submit" class="btn btn-primary">PLACE ORDER</button>
  </div>
                    </form>
                </div>
            </div>

            <!-- Content -->
             
        </div>
    </main>
        

        
       
    </main>

    <!-- Footer -->
    @include('seller.footer')

     <!-- script -->
    @include('seller.script')
</body>

</html>