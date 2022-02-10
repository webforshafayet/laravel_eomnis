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
                    <!-- Title -->
                    <h2 class="title pb-4">Account settings</h2>

                    <!-- Buying Info -->
                    <div class="pb-3">
                        <div class="profile-title-container d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img class="img-fluid me-3" src="images/buying.svg" alt="buying">
                                <h2 class="title-1 mt-2">Buying Info</h2>
                            </div>

                            <a href="{{url('profile_setting_edit')}}">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="mb-3 me-2">
                                        <img class="img-fluid" src="images/edit-icon.svg" alt="edit">
                                    </div>
                                    <p class="pt-1 edit-text">Edit</p>
                                </div>
                            </a>
                        </div>

                        <div
                            class="d-flex flex-column flex-sm-column flex-md-row  justify-content-between align-items-center">
                            <div class="pt-4 center-text">
                                <h4 class="details-title">Payment</h4>
                                <h2 class="details-title-1 pt-1">PayPal</h2>
                                <p class="details-title-3">{{$user->buy_paypal}}</p>
                            </div>

                            <div class="pt-4 center-text">
                                <h4 class="details-title">Billing</h4>
                                
                                <p class="details-title-3">{{$user->buy_billing}}</p>
                            </div>

                            <div class="pt-4 center-text">
                                <h4 class="details-title">Selected Currency</h4>
                                <p class="details-title-3">{{$user->buy_currency}}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Seller Info -->
                    <!-- <div class="pb-3">
                        <div class="profile-title-container d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img class="img-fluid me-3" src="images/buying.svg" alt="buying">
                                <h2 class="title-1 mt-2">Seller Info</h2>
                            </div>

                            <a href="{{url('profile_setting_edit')}}">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="mb-3 me-2">
                                        <img class="img-fluid" src="images/edit-icon.svg" alt="edit">
                                    </div>
                                    <p class="pt-1 edit-text">Edit</p>
                                </div>
                            </a>
                        </div>

                        <div
                            class="d-flex flex-column flex-sm-column flex-md-row  justify-content-between align-items-center">
                            <div class="pt-4 center-text">
                                <h4 class="details-title">Payment</h4>
                                <div>
                                    <p class="details-title-1 pt-1 mb-0">
                                        <b>Visa</b> <span class="text-muted">ending in {{$user->seller_paypal}}</span>
                                    </p>

                                    <div>
                                        <img class="img-fluid visa-card" src="images/visa-card.svg" alt="">
                                    </div>

                                    <p>
                                        <span class="text-muted">exp 12/2022</span>
                                    </p>
                                </div>
                            </div>

                            <div class="pt-4 center-text">
                                <h4 class="details-title">Billing</h4>
                                <p class="details-title-3 pt-1">{{$user->seller_billing}}</p>
                              
                            </div>

                            <div class="pt-4 center-text">
                                <h4 class="details-title">Vacation Mode</h4>
                                <button class="btn btn-dark rounded-0">{{$user->seller_vacation}}</button>
                            </div>
                        </div>
                    </div> -->

                    <!-- Payout Info -->
                    <div>
                        <div class="profile-title-container d-flex d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img class="img-fluid me-3" src="images/payout-info.svg" alt="payout">
                                <h2 class="title-1 mt-2">Payout Info</h2>
                            </div>

                            
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="pt-4">
                                <p class="details-title-3">All you need is a mobile phone that can receive SMS messages
                                    to enable two-step verification. All you need is
                                    a mobile phone that can receive SMS messages to enable two-step verification</p>

                                <p class="details-title-3">
                                    Payout: <span class="text-success ms-2">Active</span>
                                </p>
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
</body>

</html>