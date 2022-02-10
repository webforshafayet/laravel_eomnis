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
                        <h2>Update Profile</h2>
                         
                    </div>
                    @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                

                 <form action="{{url('seller_profile_update')}}" method="post"> 
                 {{ csrf_field() }}
                    <!-- Info -->
                    <div class="row py-4">
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                            <div scope="row" class="info-icon d-flex justify-content-start align-items-center">
                                <img class="img-fluid me-3 mt-1" src="images/profile-table.svg" alt="profile">
                                <span>Name</span>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <h4 class="info"><input type="text" class="form-control"  
                            name="name" value="{{Auth::user()->name }}"></h4>
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
                                <h4 class="info me-4"><input type="text" class="form-control"   name="instagram" value="{{Auth::user()->instagram }}"></h4>
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
                            <h4 class="info"><input type="text" class="form-control"   name="shoe_size" value="{{Auth::user()->shoe_size }}"></h4>
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
                            <h4 class="info"><input type="text" class="form-control"  name="username" value="{{Auth::user()->username }}"></h4>
                        </div>
                    </div>



                    <!-- Button -->
                    <div class="row pb-5">
                        <div class="col-12 col-sm-12 col-md-6">
                            <button type="submit" class="btn btn-info  pull-right">Update</button>
                        </div>
                    </div>
                </form>
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