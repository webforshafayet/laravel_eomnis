<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/browse.css">
    <link rel="stylesheet" href="styles/product-selection.css">
    <link rel="stylesheet" href="styles/about-buying.css">
@include('seller.css')  

</head>

<body>
    <!-- Header -->
    @include('seller.header')
    <!-- Search -->
 
    <!-- Main -->
    <main>
        <!-- Products Slider -->
        <main class="black-bg">
        <div class="container py-4">
            <h6 class="text-white fs-4 mb-0">
                Sell in <span class="badge bg-light-green">3</span> easy steps
            </h6>
            <div class="border-top w-50 mt-3"></div>

            <div class="row pt-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 pb-5">
                    <p class="text-white">Here’s the 3 steps:</p>
                    <div class="bg-white rounded mb-3">
                        <img class="img-fluid" src="images/verified.svg" alt="icon">
                    </div>

                    <div class="bg-white rounded mb-3">
                        <img class="img-fluid" src="images/smarter.svg" alt="icon">
                    </div>

                    <div class="bg-white rounded mb-3">
                        <img class="img-fluid" src="images/verified.svg" alt="icon">
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

        <div class="container py-5 mt-5">
            <div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
                <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                        <img src="images/verified-1.svg" class="card-img-top" alt="icon">
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                        <img src="" class="card-img-top" alt="icon">
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
                <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                        <img src="" class="card-img-top" alt="icon">
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                        <img src="images/verified-2.svg" class="card-img-top" alt="icon">
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
                <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                        <img src="images/verified-3.svg" class="card-img-top" alt="icon">
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                        <img src="" class="card-img-top" alt="icon">
                    </div>
                </div>
            </div>
        </div>

        <div class="py-5 mt-5 bg-white">
            <div class="row px-5">
                <!-- Table Row -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 bg-light-green p-2 border-end border-dark">
                    <h6 class="text-center">Entities</h6>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-9 bg-light-green p-2">
                    <h6 class="text-center">UNIVERSAL SELLER – ONE LEVEL</h6>
                </div>

                <!-- Table Row -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 px-2 py-4 border-end border-dark">
                    <h6 class="text-center">
                        Sales Required
                        (# of sales)
                    </h6>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-9 px-2 py-4">
                    <h6 class="text-center">UNIVERSAL SELLER – ONE LEVEL</h6>
                </div>

                <!-- Table Row -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 px-2 py-4 bg-light border-end border-dark">
                    <h6 class="text-center">
                        Transaction Fee
                    </h6>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-9 bg-light px-2 py-4">
                    <h6 class="text-center">2%</h6>
                </div>

                <!-- Table Row -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 px-2 py-4 border-end border-dark">
                    <div class="d-flex align-items-center justify-content-center h-100">
                        <h6>Must Do’s</h6>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-9 px-2 py-4">
                    <div class="d-flex flex-column flex-md-row align-items-center mb-4">
                        <img class="img-fluid me-3 mb-2" src="images/about-1.svg" alt="icon">
                        <h6>
                            Must include #omnisnco on every IG post after account creation
                            (we check). <span class="text-danger">If you fail to do this, your transaction fee is
                                increased to 5%</span>
                        </h6>
                    </div>

                    <div class="d-flex flex-column flex-md-row align-items-center mb-4">
                        <img class="img-fluid me-3 mb-2" src="images/about-2.svg" alt="icon">
                        <h6>
                            Must be a known sneaker reseller to sell on our platform. We do not accept users with no
                            references or IG pages devoted to sneakers.
                        </h6>
                    </div>

                    <div class="d-flex flex-column flex-md-row align-items-center mb-4">
                        <img class="img-fluid me-3 mb-2" src="images/about-3.svg" alt="icon">
                        <h6>
                            Must live inside the 200 countries that we service to, please refer to <a href="#"
                                class="green-text text-decoration-none">
                                www.omnisnco.com/shipping
                            </a>
                        </h6>
                    </div>

                    <div class="d-flex flex-column flex-md-row align-items-center mb-4">
                        <img class="img-fluid me-3 mb-2" src="images/about-4.svg" alt="icon">
                        <h6>
                            You must not sell Fakes on our platform. If you do you will be held accountable and you will
                            be blasted on our socials
                        </h6>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-center">
                <img class="img-fluid me-3" src="images/danger.svg" alt="danger">
                <p class="text-danger text-center mt-3">
                    <small>Please note all sellers will be charged a 3% processing fee
                        in addition to our transaction fee.
                    </small>
                </p>
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