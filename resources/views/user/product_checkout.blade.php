<!DOCTYPE html>
<html lang="en">

<head>
<base href="/public">
@include('user.css')  

</head>

<body>
    <!-- Header -->
    @include('user.header')
    <!-- Search -->
    @include('user.menu_bottom')
    <!-- Main -->
    <main>
        <!-- Products Slider -->
        <main class="bg-white">
        <!-- Product Checkout -->
        <div class="product-details container py-5">
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 g-0">
                <div class="col">
                    <div class="card h-100 pb-5 pt-0 rounded-0">
                        <img src="/productimage/{{$data->image}}" style="padding: 65px 50px 10px 50px;"
                            class="card-img-top img-fluid check" alt="shoe">
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 rounded-0">
                        <div class="card-body">
                            <h4 class="card-title text-center">
                            {{$data->tittle}}
                            </h4>

                            <div class="card-text text-muted text-decoration-underline text-center">
                                <small>{{$data->description}}</small>
                            </div>

                            <!-- Product Checkout Table -->
                            <table class="table mt-5">
                                <tbody>
                                    <tr class="border-top">
                                        <td class="text-muted">Price</td>
                                        <td class="text-end">{{$data->price}}</td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted">Size</td>
                                        <td class="text-end">{{$data->size}}</td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted">Color</td>
                                        <td class="text-end">{{$data->color}}</td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted">Condition</td>
                                        <td class="text-end">{{$data->condition}}</td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted">Box</td>
                                        <td class="text-end">{{$data->boxcondition}}</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="text-muted text-center">
                                <small>
                                    By proceeding, I confirm I have read and agree to the
                                    <a href="#" class="text-muted">
                                        <small>Privacy Policy</small>
                                    </a>
                                </small>
                            </div>
                        </div>

                        <div>
                            <div class="mt-5 d-flex">
                                <a href="{{url('product_details',$data->id)}}" class="btn border w-100 rounded-0">Cancel</a>
                                <a href="{{url('checkout',$data->id)}}" class="btn btn-dark w-100 rounded-0">Checkout</a>
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