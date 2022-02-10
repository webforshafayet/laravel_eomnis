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
                FAQ (Frequently Asked Questions)
            </h6>
            <div class="border-top w-50 mt-3"></div>

            <div class="row pt-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 pb-5">
                    <p class="text-white mb-3">
                        We hope this FAQ will help you answer some of the more common ones.
                    </p>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-white border-0" id="basic-addon1">
                            <img src="images/search-icon.svg" alt="search icon">
                        </span>
                        <input type="text" class="form-control border-0" placeholder="Search your questions">
                    </div>
                    <button class="btn btn-success green-bg border-0 px-5 rounded">Search</button>
                </div>
            </div>

            <div class="row pt-4">
                <h6 class="text-white fs-4 mb-0">
                    <img class="img-fluid me-2" src="images/faq-product.svg" alt="cart">
                    Product guidelines
                </h6>
                <div class="border-top w-50 mt-3"></div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-7 pb-5">
                    <p class="text-muted my-3">
                        Top articles in category "Buying on OMNIS"
                    </p>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                    <div class="bg-white rounded p-4">
                        <h6 class="text-dark fs-4 mb-4">
                            <img class="img-fluid me-2" src="images/faq-icon.svg" alt="faq">
                            Frequently Asked
                            Questions
                        </h6>

                        <div>
                            <div class="mb-3">
                                <img class="img-fluid me-2" src="images/faq-user.svg" alt="faq">
                                <span class="green-text">My Account</span>
                            </div>

                            <div class="mb-3">
                                <img class="img-fluid me-2" src="images/faq-cart-green.svg" alt="faq">
                                <span class="green-text">Recent Purchases FAQ</span>
                            </div>

                            <div class="mb-3">
                                <img class="img-fluid me-2" src="images/faq-sale.svg" alt="faq">
                                <span class="green-text">Recent Sales FAQ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white">
        <div class="container py-4">
                <!-- FAQ Container -->
                <div class="accordion accordion-flush" id="accordionFlushExample">
                @foreach($data as $product)
                    <!-- Single Question -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">

                                <div class="d-flex flex-column">
                                    <div class="green-text mb-2">
                                        {{$product->question}}
                                    </div>

                                    <div>
                                        <small class="small-text text-muted">Last Modified: {{$product->updated_at}}</small>
                                    </div>
                                </div>
                            </button>
                        </h2>
                         
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                            {{$product->answer}}
                            </div>
                        </div>
                         
                    </div>
                    @endforeach
                    
                </div>
            </div>

            <div class="container px-4 pb-5">
                <p>Can’t find the answer to your question? Continue to search our help center or contact us</p>

                <button class="btn btn-danger red-bg px-4">Contact Us</button>
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