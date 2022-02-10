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
@include('user.css')  

</head>

<body>
    <!-- Header -->
    @include('user.header')
    <!-- Search -->
 
    <!-- Main -->
    <main>
        <!-- Products Slider -->
        <main>
        <div class="row m-0">
            <!-- Side Bar -->
            @include('user.profile_sidebar')

            <!-- Content -->
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

                        <!-- <div class="px-3 d-flex justify-content-start align-items-center">
                            <div class="d-flex justify-content-center align-items-center me-5">
                                <img class="img-fluid me-2" src="images/dollar.svg" alt="dollar">
                                <p class="right-text mt-3">Value <span class="inside-text ms-2">A$543</span></p>
                            </div>

                            <div class="d-flex justify-content-center align-items-center">
                                <img class="img-fluid me-2" src="images/box.svg" alt="box">
                                <p class="right-text mt-3">Quantity <span class="inside-text ms-2">3</span></p>
                            </div>
                        </div> -->
                    </div>

                    <!-- Search Bar -->
                    <div class="search-bar input-group mb-3 pt-4 mx-0">
                        <span class="input-group-text bg-white border-start" id="basic-addon1">
                            <img src="images/search-icon.svg" alt="search icon">
                        </span>
                        <input type="text" class="form-control border-start-0" placeholder="Search name"
                            aria-describedby="basic-addon1">
                    </div>

                    




                     <!-- Table -->
                     <table class="table text-center">
                        <thead>
                            <tr>
                            <th scope="col">Item</th>
                                <th scope="col">Price Purchased</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
            
                        @foreach($data as $data)
                        <tbody>
                            <tr>
                                <td class="hide">
                                     
                                         

                                        

                                        <div class="ms-3">
                                            <p class="table-title-1 mb-2">{{$data->tittle}}</p>
                                             
                                          
                                        </div>
                                     
                                </td>
                                <td>{{$data->producprice}}</td>



                                <td>
                                   
                                {{$data->created_at}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
        

        
       
    </main>

    <!-- Footer -->
    @include('user.footer')

     <!-- script -->
    @include('user.script')
</body>

</html>