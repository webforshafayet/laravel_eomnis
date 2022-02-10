<!DOCTYPE html>
<html lang="en">

<head>
<base href="/public">
<link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/profile.css">
@include('seller.css')  

</head>

<body>
    <!-- Header -->
    @include('seller.header')
    <!-- Search -->
 
    <!-- Main -->
    <main>
        <!-- Products Slider -->
        <main>
        <div class="row m-0">
            <!-- Side Bar -->
            @include('seller.profile_sidebar')

            <!-- Content -->
            <div class="col-12 col-sm-12 col-md-9 light-bg">
                <div class="content-container p-4 my-4 mx-3">
                    <!-- Profile Title -->
                    <div class="profile-title-container d-flex d-flex justify-content-between align-items-center">
                        <h2>Profile</h2>
                        <a href="{{url('seller_profile_edit')}}">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="mb-3 me-2">
                                    <img src="images/edit-icon.svg" alt="edit">
                                </div>
                                <p class="pt-1">Edit</p>
                            </div>
                        </a>
                    </div>

                    <!-- Info -->
                    <div class="row py-4">
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                            <div scope="row" class="info-icon d-flex justify-content-start align-items-center">
                                <img class="img-fluid me-3 mt-1" src="images/profile-table.svg" alt="profile">
                                <span>Name</span>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <h4 class="info">{{$user->name}}</h4>
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="row pb-4">
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                            <div scope="row" class="info-icon d-flex justify-content-start align-items-center">
                                <img class="img-fluid me-3 mt-1" src="images/instagram-table.svg" alt="instagram">
                                <span>Instagram</span>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <div class="d-flex flex-column flex-md-row">
                                <h4 class="info me-4">{{$user->instagram}}</h4>
                                <button class="btn btn-secondary table-btn-2 px-4">Verify</button>
                            </div>
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="row pb-4">
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                            <div scope="row" class="info-icon d-flex justify-content-start align-items-center">
                                <img class="img-fluid me-3 mt-1" src="images/shoe-table.svg" alt="shoe">
                                <span>Shoe Size</span>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <h4 class="info">{{$user->shoe_size}}</h4>
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="row pb-4">
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                            <div scope="row" class="info-icon d-flex justify-content-start align-items-center">
                                <img class="img-fluid me-3 mt-1" src="images/email-table.svg" alt="email">
                                <span>Email</span>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <h4 class="info">{{$user->email}}</h4>
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="row pb-4">
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                            <div scope="row" class="info-icon d-flex justify-content-start align-items-center">
                                <img class="img-fluid me-3 mt-1" src="images/user-table.svg" alt="user">
                                <span>Username</span>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <h4 class="info">{{$user->username}}</h4>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="row pb-5">
                        <div class="col-12 col-sm-12 col-md-6">
                            <button class="btn btn-danger table-btn btn-lg px-5 py-2">Reset Password</button>
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