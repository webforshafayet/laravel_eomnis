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

            <!-- Content -->
             <!-- Content -->
            <div class="col-12 col-sm-12 col-md-9 light-bg">
                <div class="content-container p-4 my-4 mx-3">
                    <div
                        class="d-flex flex-column flex-sm-column flex-md-row justify-content-between align-items-center">
                        <!-- Tab bar -->
                        <div class="tab-bar-container">
                            <h4>Watchlist</h4>
                        </div>

                        <div class="px-3 d-flex justify-content-start align-items-center">
                            <img class="img-fluid me-2" src="images/watchlist.svg" alt="watchlist">
                            <p class="mt-3">Add Product</p>
                        </div>
                    </div>

                    <!-- Table -->
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col" class="hide text-start">Item</th>
                                <th scope="col">Market Price</th>
                                <th class="hide"></th>
                            </tr>
                        </thead>
             @foreach($watchlist as $data)
                        <tbody>
                            <tr>
                            <td class="hide">
                                    <div
                                        class="d-flex flex-row flex-sm-column flex-md-row  justify-content-start align-items-center">
                                        <img class="img-fluid" src="/productimage/{{$data->Product->image}}"  style="height:70px; width:70px;"  alt="shoe">

                                        

                                        <div class="ms-3">
                                            <p class="table-title-1 mb-2">{{$data->Product->tittle}}</p>
                                            <p class="table-title-2 mb-2">{{$data->Product->description}}</p>
                                            <p class="table-title-3">AUS M Mens Size: {{$data->Product->size}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$data->Product->tittle}}</td>
                                <td class="hide">
                                   <a href="{{ url('seller_watchlist_delete/'.$data->id)}}"><img class="img-fluid" src="images/delete.svg" alt="delete"></a>
                                     
                                </td>
                            </tr>
                            
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </main>
        

        
       
    </main>

    <!-- Footer -->
    @include('seller.footer')

     <!-- script -->
    @include('seller.script')
</body>

</html>