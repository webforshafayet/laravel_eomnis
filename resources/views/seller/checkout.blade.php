<!DOCTYPE html>
<html lang="en">

<head>




 <base href="/public">
    
 @include('seller.checkout_css')  
@include('seller.css')  

</head>

<body>
    <!-- Header -->
    @include('seller.header')
    <!-- Search -->
    
    <!-- Main -->
    <main>

    <div class="checkout-area mt-100">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="checkout-bill-title">
                     <h4>Billing address</h4>
                  </div>
               </div>
            </div>
            @if(session()->has('message'))

<div class="alert alert-success alert-dismissible fade show" role="alert"> 
    <button type="button" class="close" data-dismiss="alert">X</button>
{{session()->get('message')}}</div>

@endif
                
                 
<form action="{{url('placeorder')}}" method="post" class="contat-input checkout-form-input">
                     @csrf
 
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="checkout-form-wrap">
                      
                        <div class="row">
                           <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                              <label class="form-check-label form-check-label-first">First Name</label>
                              <input type="text" name="shipping_first_name" Required>
                           </div>
                           <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                              <label class="form-check-label">Last Name(optional)</label>
                              <input type="text" name="shipping_last_name" Required>
                           </div>
                           <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                              <label class="form-check-label">Phone</label>
                              <input type="text" name="shipping_phone" Required >
                           </div>
                           <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                              <label class="form-check-label">Email</label>
                              <input type="text" name="shipping_email" Required>
                           </div>
                           <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                              <label class="form-check-label">Address</label>
                              <input type="text" name="address" Required>
                           </div>
                           <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                              <label class="form-check-label">Postal Code</label>
                              <input type="text" name="postcode" Required >
                           </div>
                           <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                              <label class="form-check-label">Country/State</label>
                              <input type="text" name="state" Required>
                           </div>
                            
                           
                        </div>
                      
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                  <div class="cart-product-details-wrap checkout-product-details-wrap">
                     <table class="table">
                        <thead>
                           <tr>
                              <th>Product Name</th>
                              <th>Product Price</th>
                            
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td><input type="text" name="tittle" value="{{$data->tittle}}" readonly> </td>
                              <td><input type="text" name="producprice" value="{{$data->price}}" readonly></td>
                         
                           </tr>
                            
                            
                        </tbody>
                     </table>



                     <table class="table">
                        <thead>
                           <tr>
                              
                              <th>Product Quantity</th>
                              <th>
                            
                              <input type="number" name="product_qty" Required >
                           </th>
                           </tr>
                        </thead>
                        <tbody>




                           
    <!-- {{ csrf_field() }}
    <input type="submit" name="submit" value="Pay Now" class="btn btn-blue"> -->
                            
                            
                            
                        </tbody>
                     </table>
                     <div class="payment-option-wrap">
                        <!-- <div class="form-check">
                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                           <label class="form-check-label" for="flexRadioDefault1">
                           Bank
                           </label>
                           <p>Please send a check</p>
                        </div> -->
                        <!-- <div class="form-check">
                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                           <label class="form-check-label" for="flexRadioDefault2">
                           Cash on delivery
                           </label>
                           <p>Pay with cash upon delivery.</p>
                        </div> -->
                        <ul>
                           <li><a href="#">Privacy Policy</a></li>
                           <li>
                           {{ csrf_field() }}
                           <!-- <button type="submit" class="btn btn-primary">PLACE ORDER</button> -->

                           <input type="text" name="amount" Required/>
                          <button>
                          <input type="submit" name="submit" value="Pay Now" class="btn btn-blue">
                        </button>  


                              
                           </li>
                        </ul>


                        <div>
                            <!-- <div class="mt-5 d-flex">
                                 
                                <a href="{{url('payment')}}" class="btn btn-dark w-100 rounded-0">Payment with Paypal</a>
                            </div> -->
                        </div>


                       



                     </div>
                  </div>
               </div>
            </div>
            </form>



            

            
         </div>
      </div>


        
    <!-- <section class="checkout spad">
        <div class="container">
             
            <div class="checkout__form">
                <h4>Shipping Details</h4>


                @if(session()->has('message'))

<div class="alert alert-success alert-dismissible fade show" role="alert"> 
    <button type="button" class="close" data-dismiss="alert">X</button>
{{session()->get('message')}}</div>

@endif
                
                 


                    <form action="{{url('placeorder')}}" method="post" > 
@csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Fist Name<span>*</span></p>
                                        <input type="text" name="shipping_first_name" Required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text" name="shipping_last_name" Required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="shipping_phone" Required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="shipping_email" Required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" name="address" placeholder="Street Address" class="checkout__input__add" Required>
                                 
                            </div>
                            
                            <div class="checkout__input">
                                <p>Country/State<span>*</span></p>
                                <input type="text" name="state" Required>
                            </div>
                            <div class="checkout__input">
                                <p>Postcode / ZIP<span>*</span></p>
                                <input type="text" name="postcode" Required>
                            </div>
                             
                             
                            
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products"> <span> </span></div>
                                <ul>
                                <h4>Product Tittle</h4>

                                
                                <input type="text" name="tittle" value="{{$data->tittle}}" readonly>
                                    
                                    <h4>Product Price</h4>
                                    <input type="text" name="producprice" value="{{$data->price}}" readonly>
                                     
                                </ul>
Quantity:
                                <input type="number" name="product_qty" Required >

                               
                                
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Create an account?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        HandCash
                                        <input type="checkbox" id="payment" value="handcash" name="payment_type">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal" value="paypal" name="payment_type">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="col-auto">
    <button type="submit" class="btn btn-primary">PLACE ORDER</button>
  </div>
                                 
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section> -->



    <!-- <form action="{{ url('charge') }}" method="post">
    <input type="text" name="amount" Required/>
    {{ csrf_field() }}
    <input type="submit" name="submit" value="Pay Now" class="btn btn-blue">
</form> -->

     


     
    </main>

    <!-- Footer -->
    @include('seller.footer')

     <!-- script -->
    @include('seller.script')

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>