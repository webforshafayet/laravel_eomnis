<!DOCTYPE html>
<html lang="en">

<head>
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
                FAQ (Frequently Asked Questions)
            </h6>
            <div class="border-top w-50 mt-3"></div>

            <div class="row pt-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 pb-5">
                    <p class="text-white mb-3">
                        We hope this FAQ will help you answer some of the more common ones.
                    </p>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-white border-0" id="basic-addon1">
                            <img src="images/search-icon.svg" alt="search icon">
                        </span>
                        <input type="text" class="form-control border-0" placeholder="Search your questions">

                        <button class="btn btn-success green-bg border-0 px-5 ms-2 rounded">Search</button>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 h-100">
                    <img class="img-fluid w-100" src="images/carousel-2.svg" alt="shoe">
                </div>
            </div>
        </div>

        <div class="bg-white">
            <div class="container py-4">
                <h4 class="text-center my-5">Choose the kind of help you need</h4>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">
                    <div class="col">
                        <a href="{{'faq_buying_user'}}" class="text-decoration-none">
                            <div class="card h-100 border-0">
                                <img src="images/faq-1.svg" class="card-img-top w-50 mx-auto" alt="info">
                            </div>
                        </a>
                    </div>

                    <div class="col">
                        <a href="{{'faq_selling_user'}}" class="text-decoration-none">
                            <div class="card h-100 border-0">
                                <img src="images/faq-2.svg" class="card-img-top w-50 mx-auto" alt="info">
                            </div>
                        </a>
                    </div>

                    <div class="col">
                        <a href="{{'faq_myaccount_user'}}" class="text-decoration-none">
                            <div class="card h-100 border-0">
                                <img src="images/faq-3.svg" class="card-img-top w-50 mx-auto" alt="info">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
                    <div class="col">
                        <a href="{{'faq_product_guidelines_user'}}" class="text-decoration-none">
                            <div class="card h-100 border-0">
                                <img src="images/faq-4.svg" class="card-img-top w-50 mx-auto" alt="info">
                            </div>
                        </a>
                    </div>

                    <div class="col">
                        <a href="{{'faq_shipping_user'}}" class="text-decoration-none">
                            <div class="card h-100 border-0">
                                <img src="images/faq-5.svg" class="card-img-top w-50 mx-auto" alt="info">
                            </div>
                        </a>
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