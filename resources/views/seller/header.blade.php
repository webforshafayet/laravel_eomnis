<header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark pt-3">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a class="mx-auto nav-logo"  href="{{'/'}}">
                        <img class="img-fluid" src="images/nav-omnis-logo.svg" alt="logo">
                    </a>

                    <div class="d-flex align-items-center">
                        <ul class="navbar-nav">
                            <!-- <li class="nav-item me-5 nav-myacc">
                                <a class="nav-link" href="profile.html">

                                    <div class="text-center">
                                        <img class="img-fluid" src="images/user.svg" alt="user">
                                    </div>
                                    <p class="nav-text">My Account</p>
                                </a>
                            </li> -->


                            





                            <div class="px-5 pb-3">
                <div class="d-flex justify-content-between">
                @if (Route::has('login'))

                    @auth



                    <li class="nav-item me-5 nav-myacc">
                                <a class="nav-link" href="{{url('seller_profile')}}">

                             

                                    <div class="text-center">
                                        <img class="img-fluid" src="images/user.svg" alt="user">
                                    </div>
                                    <p class="nav-text">My Account</p>
                                </a>
                            </li>




                       
                    @endauth
                 
            @endif
                </div>     
            </div>









                            <button class="btn nav-menu-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                aria-controls="offcanvasRight">

                                <img class="img-fluid" src="images/nav-icon.svg" alt="nav icon">
                                <p class="nav-text">Menu</p>
                            </button>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Navbar Offcanvas -->
        @include('user.menu')

        <!-- Location Modal -->
        <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0 mb-0 pb-0">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Confirm Your Location
                        </h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <p class="modal-text w-75">
                            Update your Location to improve your
                            experience on Omnisnco
                        </p>

                        <select class="form-select mt-4 mb-3" aria-label="Default select example">
                            <option selected>Region</option>
                            <option value="1">Australia</option>
                            <option value="2">Canada</option>
                            <option value="3">United States</option>
                        </select>

                        <select class="form-select" aria-label="Default select example">
                            <option selected>Language</option>
                            <option value="1">English</option>
                            <option value="2">French</option>
                            <option value="3">Chinese</option>
                        </select>
                    </div>

                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-danger w-100 modal-btn"
                            data-bs-dismiss="modal">Confirm</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sell Modal -->
        <div class="modal fade" id="sellModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content mx-0">
                    <div class="modal-header">
                        <div class="px-5"></div>

                        <h5 class="modal-title portfolio-title mx-auto" id="exampleModalLabel">
                            Choose a product
                        </h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="search-bar input-group mb-3 p-5 bg-silver">
                            <span class="input-group-text bg-white border-0" id="basic-addon1">
                                <img src="images/search-icon.svg" alt="search icon">
                            </span>
                            <input type="text" class="form-control border-0" placeholder="Search for brand, color etc"
                                aria-describedby="basic-addon1">
                        </div>

                        <div class="text-center black-modal pb-4">
                            <img class="img-fluid mt-2" src="images/modal-dashed.svg" alt="dashed">

                            <div class="mt-5 text-center px-4 pb-3">
                                <a href="browse.html" class="btn w-100 modal-search-btn">Search</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search -->
         
    </header>
