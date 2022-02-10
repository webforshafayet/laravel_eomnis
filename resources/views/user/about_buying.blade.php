<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/browse.css">
    <link rel="stylesheet" href="styles/product-selection.css">
    <link rel="stylesheet" href="styles/about-buying.css">
@include('user.css')  

</head>

<body>
    <!-- Header -->
    @include('user.header')
    <!-- Search -->
 
    <!-- Main -->
    <main>
        <!-- Products Slider -->


        <main class="black-bg">
        <div class="container py-4">
            <h6 class="text-white fs-4 mb-0">BUYING made simple </h6>
            <div class="border-top w-50 mt-3"></div>

            <div class="row pt-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 pb-5">
                    <p class="text-white">Here’s the 2 ways:</p>
                    <div class="card h-100 bg-light p-0 more-radious">
                        <img src="images/shoe-1.svg" class="card-img-top" alt="shoe-1">
                        <div class="card-body pb-0 px-0 d-flex justify-content-around">
                            <h5 class="card-title fs-5 two-title">Airforce Fit bit</h5>
                            <h2 class="fs-5 two-price">$250</h2>
                        </div>

                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn two-btn border-end-0 fs-6">BID</button>
                            <button type="button" class="btn two-btn border-start-0 fs-6">Buy</button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                    <iframe class="w-100 h-100 rounded" src="https://www.youtube.com/embed/QLWIL_3UPRc"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row bg-white py-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <img class="img-fluid" src="images/icon-1.svg" alt="icon">

                        <div>
                            <button class="btn btn-success bg-light-green border-0 px-4">BUY NOW</button>
                            <p class="pt-2">
                                <small>
                                    You have the choice to Buy Now, which is an instantaneous
                                    purchase to
                                    secure
                                    your item at
                                    the
                                    lowest price a reseller wants to sell that sneaker for. The Buy Now option is
                                    certainly
                                    an
                                    option users go for if they want a quick transaction, generally because they need
                                    the
                                    sneaker
                                    asap.
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row bg-white py-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                    <div class="text-center">
                        <img class="img-fluid" src="images/icon-2.svg" alt="icon">
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                    <button class="btn btn-success bg-light-green border-0 px-4">BUY NOW</button>
                    <p class="pt-2">
                        <small>
                            You have the choice to Buy Now, which is an instantaneous
                            purchase to
                            secure
                            your item at
                            the
                            lowest price a reseller wants to sell that sneaker for. The Buy Now option is
                            certainly
                            an
                            option users go for if they want a quick transaction, generally because they need
                            the
                            sneaker
                            asap.
                        </small>
                    </p>
                </div>
            </div>
        </div>

        <div class="container py-5 mt-5">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                        <img src="images/icon-3.svg" class="card-img-top" alt="icon">
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                        <img src="images/icon-4.svg" class="card-img-top" alt="icon">
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                        <img src="images/icon-6.svg" class="card-img-top" alt="icon">
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                        <img src="images/icon-7.svg" class="card-img-top" alt="icon">
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
</body>

</html>