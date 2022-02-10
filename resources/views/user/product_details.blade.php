<!DOCTYPE html>
<html lang="en">

<head>



    <base href="/public">
@include('user.css')  

</head>

<body>
    <!-- Header -->
    @include('user.header')
    <!-- Search -->
    @include('user.menu_bottom')
    <!-- Main -->
    <main>
        <!-- Products Slider -->


        <main class="bg-white">
        <!-- Product Details -->
        <div class="product-details container py-5">
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 g-0">
                <div class="col">
                    
                        <!--Carousel Wrapper-->
                         
                                <img src="/productimage/{{$data->image}}" class="card-img-top w-75 mx-auto" alt="show">
                                <div class="card-body">
                                    <h5 class="card-title text-center">
                                    {{$data->tittle}}
                                    </h5>
                                    <p class="card-text text-center">
                                    {{$data->color}},{{$data->condition}},
                                    </p>
                                </div>
                             
                        <!--/Carousel Wrapper-->
                     
                </div>

                <div class="col">
                    <div class="card h-100 rounded-0">
                        <div class="card-body product_data"> 
                            
                        <!-- nubering-------------------------------------------------------------------------------------- -->
                            <h4 class="card-title text-center">
                            {{$data->tittle}}
                            </h4>

                            <div class="card-text text-muted text-decoration-underline text-center">
                                <small>{{$data->description}}</small>
                            </div>

                            <!-- Sizes -->
                            <div class="sizes-container card-text mt-5" id="sizes-container">
                                <div id="carouselExampleControls" class="carousel slide carousel-dark slide light-bg"
                                    data-bs-ride="carousel" data-bs-touch="false" data-bs-interval="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div
                                                class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-3 row-cols-xl-4 g-2">
                                                <!-- Size -->
                                                <div class="col">
                                                    <button class="size-btn btn p-0 w-100 size-active">
                                                        <div class="card h-100">
                                                            <div class="card-body pb-0 text-center">
                                                                <h5 class="card-title size-text">
                                                                    AUS M 4
                                                                </h5>
                                                                <p class="text-success fs-4 pb-0">
                                                                    {{$data->price}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                                <!-- Size -->
                                                <div class="col">
                                                    <button class="size-btn btn p-0 w-100">
                                                        <div class="card h-100">
                                                            <div class="card-body pb-0 text-center">
                                                                <h5 class="card-title size-text">AUS M 4.5</h5>
                                                                <p class="text-success fs-4 pb-0">
                                                                {{$data->price}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                                <!-- Size -->
                                                <div class="col">
                                                    <button class="size-btn btn p-0 w-100">
                                                        <div class="card h-100">
                                                            <div class="card-body pb-0 text-center">
                                                                <h5 class="card-title size-text">AUS M 5</h5>
                                                                <p class="text-success fs-4 pb-0">
                                                                {{$data->price}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                                <!-- Size -->
                                                <div class="col">
                                                    <button class="size-btn btn p-0 w-100">
                                                        <div class="card h-100">
                                                            <div class="card-body pb-0 text-center">
                                                                <h5 class="card-title size-text">AUS M 5.5</h5>
                                                                <p class="text-success fs-4 pb-0">
                                                                {{$data->price}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div
                                                class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-3 row-cols-xl-4 g-2">
                                                <!-- Size -->
                                                <div class="col">
                                                    <button class="size-btn btn p-0 w-100">
                                                        <div class="card h-100">
                                                            <div class="card-body pb-0 text-center">
                                                                <h5 class="card-title size-text">AUS M 6</h5>
                                                                <p class="text-success fs-4 pb-0">
                                                                {{$data->price}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                                <!-- Size -->
                                                <div class="col">
                                                    <button class="size-btn btn p-0 w-100">
                                                        <div class="card h-100">
                                                            <div class="card-body pb-0 text-center">
                                                                <h5 class="card-title size-text">AUS M 6.5</h5>
                                                                <p class="text-success fs-4 pb-0">
                                                                {{$data->price}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                                <!-- Size -->
                                                <div class="col">
                                                    <button class="size-btn btn p-0 w-100">
                                                        <div class="card h-100">
                                                            <div class="card-body pb-0 text-center">
                                                                <h5 class="card-title size-text">AUS M 7</h5>
                                                                <p class="text-success fs-4 pb-0">
                                                                {{$data->price}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                                <!-- Size -->
                                                <div class="col">
                                                    <button class="size-btn btn p-0 w-100">
                                                        <div class="card h-100">
                                                            <div class="card-body pb-0 text-center">
                                                                <h5 class="card-title size-text">AUS M 7.5</h5>
                                                                <p class="text-success fs-4 pb-0">
                                                                {{$data->price}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div
                                                class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-3 row-cols-xl-4 g-2">
                                                <!-- Size -->
                                                <div class="col">
                                                    <button class="size-btn btn p-0 w-100">
                                                        <div class="card h-100">
                                                            <div class="card-body pb-0 text-center">
                                                                <h5 class="card-title size-text">AUS M 8</h5>
                                                                <p class="text-success fs-4 pb-0">
                                                                {{$data->price}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                                <!-- Size -->
                                                <div class="col">
                                                    <button class="size-btn btn p-0 w-100">
                                                        <div class="card h-100">
                                                            <div class="card-body pb-0 text-center">
                                                                <h5 class="card-title size-text">AUS M 8.5</h5>
                                                                <p class="text-success fs-4 pb-0">
                                                                {{$data->price}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                                <!-- Size -->
                                                <div class="col">
                                                    <button class="size-btn btn p-0 w-100">
                                                        <div class="card h-100">
                                                            <div class="card-body pb-0 text-center">
                                                                <h5 class="card-title size-text">AUS M 9</h5>
                                                                <p class="text-success fs-4 pb-0">
                                                                {{$data->price}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                                <!-- Size -->
                                                <div class="col">
                                                    <button class="size-btn btn p-0 w-100">
                                                        <div class="card h-100">
                                                            <div class="card-body pb-0 text-center">
                                                                <h5 class="card-title size-text">AUS M 9.5</h5>
                                                                <p class="text-success fs-4 pb-0">
                                                                {{$data->price}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div
                                                class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-3 row-cols-xl-4 g-2">
                                                <!-- Size -->
                                                <div class="col">
                                                    <button class="size-btn btn p-0 w-100">
                                                        <div class="card h-100">
                                                            <div class="card-body pb-0 text-center">
                                                                <h5 class="card-title size-text">AUS M 10</h5>
                                                                <p class="text-success fs-4 pb-0">
                                                                {{$data->price}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                                <!-- Size -->
                                                <div class="col">
                                                    <button class="size-btn btn p-0 w-100">
                                                        <div class="card h-100">
                                                            <div class="card-body pb-0 text-center">
                                                                <h5 class="card-title size-text">AUS M 10.5</h5>
                                                                <p class="text-success fs-4 pb-0">
                                                                {{$data->price}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                                <!-- Size -->
                                                <div class="col">
                                                    <button class="size-btn btn p-0 w-100">
                                                        <div class="card h-100">
                                                            <div class="card-body pb-0 text-center">
                                                                <h5 class="card-title size-text">AUS M 11</h5>
                                                                <p class="text-success fs-4 pb-0">
                                                                {{$data->price}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                                <!-- Size -->
                                                <div class="col">
                                                    <button class="size-btn btn p-0 w-100">
                                                        <div class="card h-100">
                                                            <div class="card-body pb-0 text-center">
                                                                <h5 class="card-title size-text">AUS M 11.5</h5>
                                                                <p class="text-success fs-4 pb-0">
                                                                {{$data->price}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div
                                                class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-3 row-cols-xl-4 g-2">
                                                <!-- Size -->
                                                <div class="col">
                                                    <button class="size-btn btn p-0 w-100">
                                                        <div class="card h-100">
                                                            <div class="card-body pb-0 text-center">
                                                                <h5 class="card-title size-text">AUS M 12</h5>
                                                                <p class="text-success fs-4 pb-0">
                                                                {{$data->price}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                            <div class="card-text d-flex justify-content-between align-items-center mt-5">
                                <div>
                                    <h5 class="card-title">
                                        $555
                                    </h5>

                                    <p class="card-text">
                                        Best Price <span class="text-muted">/ New in Box</span>
                                        <br>
                                        <span class="text-muted">
                                            Ships to Omnis first for varification
                                        </span>
                                    </p>
                                </div>
                                <a href=" {{url('add_watchlist',$data->id)}}" class="btn btn-dark px-4">Add To Watchlist</a>
                                

                                <div>
                                    <a href=" {{url('product_checkout',$data->id)}}" class="btn btn-dark px-4">Select</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


        
    </main>

    <!-- Footer -->
    @include('user.footer')

     <!-- script -->
    @include('user.script')
    <script src="scripts/custom.js"></script>
</body>

</html>