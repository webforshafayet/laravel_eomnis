<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use App\Models\Product;
use App\Models\faq_shipping;
use App\Models\faq_product_guidelines;
use App\Models\faq_myaccount;
use App\Models\faq_selling;
use App\Models\faq_buying;
use App\Models\watchlist;
use App\Models\order;

use App\Models\selling_product;


use App\Models\Cart;
 
use App\Models\orderitem;
use App\Models\shipping;
use Carbon\Carbon;


use Omnipay\Omnipay;
use App\Models\Payment;

class sellercontroller extends Controller
{


    public function index()   ///out_____
    {

        if(Auth::id()){
            return redirect('redirect');
        }

        else{

            $data= product::paginate(1);
            return view('seller.home',compact('data'));
        }
      
    }



    public function faq_user()
    {
        return view ('seller.faq');
    }
    public function faq_buying_user()
    {
        $data= faq_buying::all();
        return view ('seller.faq_buying',compact('data'));
    }
    public function faq_selling_user()
    {
        $data= faq_selling::all();
        return view ('seller.faq_selling',compact('data'));
    }
    public function faq_myaccount_user()
    {
        $data= faq_myaccount::all();
        return view ('seller.faq_myaccount',compact('data'));
    }
    public function faq_product_guidelines_user()
    {
        $data= faq_product_guidelines::all();
        return view ('seller.faq_product_guidelines',compact('data'));
    }
    public function faq_shipping_user()
    {
        $data= faq_shipping::all();
        return view ('seller.faq_shipping',compact('data'));
    }










    public function product_details($id)
    {

        $data=product::find($id);
        return view ('seller.product_details',compact('data'));
        
    }

    public function product_checkout($id)
    {
        $data=product::find($id);
        return view ('seller.product_checkout',compact('data'));
    }















    //______________________________checkout______________________________________________________________________________________________


   
    public function checkout($id)
    {
        $data=product::find($id);
        return view ('seller.checkout',compact('data'));
 
    
    }


    private $gateway;
   
    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true); //set it to 'false' when go live
    }


    public function  placeorder(Request $request)
    {


        if($request->input('submit'))
        {
            try {
                $response = $this->gateway->purchase(array(
                    'amount' => $request->input('amount'),
                    'currency' => env('PAYPAL_CURRENCY'),
                    'returnUrl' => url('success'),
                    'cancelUrl' => url('error'),
                ))->send();
            
                if ($response->isRedirect()) {
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    // not successful
                    return $response->getMessage();
                }
            } catch(Exception $e) {
                return $e->getMessage();
            }
        }



        $data=new shipping;
   
        $data->shipping_first_name=$request->shipping_first_name;
        $data->shipping_last_name=$request->shipping_last_name;
        $data->shipping_email=$request->shipping_email;
        $data->shipping_phone=$request->shipping_phone;
        $data->address=$request->address;
        $data->state=$request->state;
        $data->postcode=$request->postcode;
         
        $data->producprice=$request->producprice;
        $data->product_qty=$request->product_qty;
        $data->tittle=$request->tittle;



        

       


        $data->save();
     return redirect()->back()->with('message','Product order Successfully');


        
    }



     /**
     * Charge a payment and store the transaction.
     *
     * @param  \Illuminate\Http\Request  $request
     */





    public function success(Request $request)
    {
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID'))
        {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();
           
            if ($response->isSuccessful())
            {
                // The customer has successfully paid.
                $arr_body = $response->getData();
           
                // Insert transaction data into the database
                $payment = new Payment;
                $payment->payment_id = $arr_body['id'];
                $payment->payer_id = $arr_body['payer']['payer_info']['payer_id'];
                $payment->payer_email = $arr_body['payer']['payer_info']['email'];
                $payment->amount = $arr_body['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY');
                $payment->payment_status = $arr_body['state'];
                $payment->save();

                

                return redirect()->back()->with('message','Payment is successful. Your transaction id is:'. $arr_body['id']);
           
                // return "Payment is successful. Your transaction id is: ". $arr_body['id'];
            } else {
                return $response->getMessage();
            }
        } else {
            return 'Transaction is declined';
        }
    }
   
    /**
     * Error Handling.
     */
    public function error()
    {
        return 'User cancelled the payment.';
    }

























 
    
    public function  sell_placeorder(Request $request)
    {
         
        $data=new selling_product;
        $data->user_id=Auth::id();
        $data->product_id=$request->product_id;
        $data->tittle=$request->tittle;
        $data->size=$request->size;
        $data->description=$request->description;
        
        $data->price=$request->producprice;
         
        $data->product_qty=$request->product_qty;
         

       


        $data->save();
        return redirect()->back()->with('message','Product Quantity added Successfully');
    }

    public function seller_details_selling($id)
    {
        $data=product::find($id);
        return view ('seller.product_selling_details',compact('data'));
    }
    












     

    public function profile()
    {
        $user=User::find(Auth::user()->id);
        // $data=User::find($id);
        return view ('seller.profile',['user'=>$user]);
    }


    public function profile_edit()
    {
        return view ('seller.profile_edit');
    }

    public function profile_update(Request $request)
    {
        $user_id=Auth::user()->id;
        $user=User::findOrFail($user_id);
        $user->name=$request->input('name');
        $user->instagram=$request->input('instagram');
        $user->shoe_size=$request->input('shoe_size');
        $user->username=$request->input('username');

        $user->update();
        return redirect()->back()->with('status','profile updated');
    }

  





    //______________________________profile Setting__________________________

 
public function profile_setting()
{
    $user=User::find(Auth::user()->id);
    // $data=User::find($id);
    return view ('seller.profile_setting',['user'=>$user]);
}


public function profile_setting_edit()
{
    return view ('seller.profile_setting_edit');
}

public function profile_setting_update(Request $request)
{
    $user_id=Auth::user()->id;
    $user=User::findOrFail($user_id);
    $user->buy_paypal=$request->input('buy_paypal');
    $user->buy_billing=$request->input('buy_billing');
    $user->buy_currency=$request->input('buy_currency');
    $user->seller_paypal=$request->input('seller_paypal');
    $user->seller_billing=$request->input('seller_billing');
    $user->seller_vacation=$request->input('seller_vacation');

    $user->update();
    return redirect()->back()->with('status','profile setting updated');
}
//______________________________purchaseddd__________________________

 //______________________________purchaseddd__________________________

public function buying()
{
 

    $user=User::find(Auth::user()->id);
    $data= DB::table('shippings')
    ->where('shipping_email',$user->email) 
   ->get();

   return view ('seller.profile_buying',['data'=>$data]);
}



public function selling()
{


    // $data=product::all();
    //     return view ('admin.showproduct',compact('data'));
 

    $watchlist=product::all();
    return view ('seller.profile_selling',compact('watchlist'));

//    return view ('seller.profile_selling');
}



public function add_selling($id){


    if(Auth::check()){

        watchlist::insert([
            'user_id' => Auth::id(),
            'product_id' => $id,

        ]);
         return redirect()->back()->with('status','profile updated');

    }

    else{
        return redirect()->route('login')->with('login',' First login you account');
    }

     
}

public function selling_delete($id){
watchlist::where('id',$id)->where('user_id',Auth::id())->delete();
return redirect()->back()->with('status','watchlist Product removed');
}




//______________________________profile watchlist__________________________



public function watchlist()
{

    $watchlist=watchlist::where('user_id',Auth::id())->latest()->get();
    return view ('seller.profile_watchlist',compact('watchlist'));
}

public function add_watchlist($id){


    if(Auth::check()){

        watchlist::insert([
            'user_id' => Auth::id(),
            'product_id' => $id,

        ]);
         return redirect()->back()->with('status','profile updated');

    }

    else{
        return redirect()->route('login')->with('login',' First login you account');
    }

     
}

public function watchlist_delete($id){
watchlist::where('id',$id)->where('user_id',Auth::id())->delete();
return redirect()->back()->with('status','watchlist Product removed');
}


//______________________________about
public function about()
{
    return view ('seller.about');
}
public function about_buying()
{
    return view ('seller.about_buying');
}
public function about_selling()
{
    return view ('seller.about_selling');
}


}
