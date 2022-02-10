<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/browse.css">
    <link rel="stylesheet" href="styles/product-selection.css">
    <link rel="stylesheet" href="styles/about-buying.css">
<base href="/public">
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
                The Sneaker Marketplace.
            </h6>
            <div class="border-top w-50 mt-3"></div>

            <div class="row pt-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 pb-5">
                    <p class="text-white mb-3">
                        The way we see it, we can’t and will not justify charging absurd amounts in transaction fees to
                        our user base simply because we provide a marketplace which brings <span
                            class="text-danger">Sellers</span> and <span class="text-success">Buyers</span> to the
                        same platform. What makes sense to myself and the team is we charge low transaction fees to
                        ensure sneakers reflect their true price in the market, not a saturated and inflated price due
                        to sellers getting obliterated with selling fees on other platforms.
                    </p>

                    <div class="text-white pb-3">
                        We understand both perspectives:
                        <ul>
                            <li class="text-danger"> Sellers looking to increase profit margins because they can’t stand
                                working their 9-5
                            </li>

                            <li class="text-success">
                                Buyers looking to cop the latest sneaker as a confidence booster. We see it, we get it
                                because we lived it
                            </li>
                        </ul>
                    </div>

                    <p class="text-white">
                        Our mission is to build the most fair and abundant sneaker marketplace to exist on a global
                        scale, ensuring all parties are looked after and to see the growth and expansion of the sneaker
                        culture.
                    </p>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                    <iframe class="w-100 h-100 rounded" src="https://www.youtube.com/embed/QLWIL_3UPRc"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>

            <div class="py-3 text-center">
                <button class="btn btn-success border-0 bg-light-green text-white px-5 py-2 mb-3">
                    <img class="img-fluid me-2 btn-icon" src="images/cart-icon.svg" alt="icon">
                    <span>Buying</span>
                </button>

                <button class="btn btn-success border-0 bg-light-green text-white px-5 py-2 mb-3">
                    <img class="img-fluid me-2 btn-icon" src="images/money-icon.svg" alt="icon">
                    <span>Selling</span>
                </button>

                <button class="btn btn-success border-0 bg-light-green text-white px-5 py-2 mb-3">
                    <img class="img-fluid me-2 btn-icon" src="images/contact-icon.svg" alt="icon">
                    <span>Authenticating</span>
                </button>
            </div>
        </div>

        <div class="bg-white">
            <div class="container py-4">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-5">
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="images/1.svg" class="card-img-top w-75 mx-auto" alt="info">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="images/2.svg" class="card-img-top w-75 mx-auto" alt="info">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="images/3.svg" class="card-img-top w-75 mx-auto" alt="info">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="images/4.svg" class="card-img-top w-75 mx-auto" alt="info">
                        </div>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="images/5.svg" class="card-img-top w-50 mx-auto" alt="info">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="images/6.svg" class="card-img-top w-50 mx-auto" alt="info">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="images/7.svg" class="card-img-top w-50 mx-auto" alt="info">
                        </div>
                    </div>
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