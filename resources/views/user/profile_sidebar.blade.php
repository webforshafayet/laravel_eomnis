 <!-- Fav Icon -->
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

<div class="side-bar col-12 col-sm-12 col-md-3 p-0">
                <div class="py-4">
                    <h4 class="px-4 side-bar-title">{{Auth::user()->name }}</h4>

                    <div class="py-2">
                        <!-- Side Item Profile -->
                        <div class="mb-2">
                            <a href="{{url('profile')}}">
                                <div class="px-4 d-flex align-items-center side-item side-item-active">
                                    <div class="me-4">
                                        <img src="images/profile-nav-white.svg" class="white-icon" alt="profile-nav">
                                        <img src="images/profile-nav-black.svg" class="black-icon" alt="profile-nav">
                                    </div>
                                    <div class="pt-3">
                                        <p class="side-item-title-1 mb-1">Profile</p>
                                        <p class="side-item-title-2">Learn what’s unique to you</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Side Item Buying -->
                        <div class="mb-2">
                            <a href="{{url('buying')}}">
                                <div class="px-4 d-flex align-items-center side-item">
                                    <div class="me-4">
                                        <img src="images/buy-white.svg" class="white-icon" alt="buy">
                                        <img src="images/buy-black.svg" class="black-icon" alt="buy">
                                    </div>
                                    <div class="pt-3">
                                        <p class="side-item-title-1 mb-1">Items Purchased</p>
                                        <p class="side-item-title-2 mb-0">Active Bids, In-Progress,</p>
                                        <p class="side-item-title-2">Completed Orders</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        

                        <!-- Side Item Watchlist -->
                         
                        <div class="mb-2">
                            <a href="{{url('watchlist')}}">
                                <div class="px-4 d-flex align-items-center side-item">
                                    <div class="me-4">
                                        <img src="images/shoe-nav-white.svg" class="white-icon" alt="shoe-nav">
                                        <img src="images/shoe-nav-black.svg" class="black-icon" alt="shoe-nav">
                                    </div>
                                    <div class="pt-3">
                                        <p class="side-item-title-1 mb-1">Watchlist</p>
                                        <p class="side-item-title-2">Prducts you’re Watching</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Side Item Settings -->
                        <div class="mb-2">
                            <a href="{{url('profile_setting')}}">
                                <div class="px-4 d-flex align-items-center side-item">
                                    <div class="me-4">
                                        <img src="images/settings-white.svg" class="white-icon" alt="settings">
                                        <img src="images/settings-black.svg" class="black-icon" alt="settings">
                                    </div>
                                    <div class="pt-3">
                                        <p class="side-item-title-1 mb-1">Settings</p>
                                        <p class="side-item-title-2">Payments, Payouts, Adddresses</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Side Item Logout -->
                        <div class="mb-2 ms-1">
                         
                        
                            
                                <div class="px-4 d-flex align-items-center side-item py-2 pb-3">
                                    <div class="me-4">
                                        <i class="fas fa-sign-out-alt text-white white-icon fs-2 mt-3"></i>
                                        <i class="fas fa-sign-out-alt text-dark black-icon fs-2 mt-3"></i>
                                    </div>
                                    <div class="pt-3 ms-1">
                                    <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>