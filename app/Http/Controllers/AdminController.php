<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;
use App\Models\faq_buying;
use App\Models\faq_selling;
use App\Models\faq_myaccount;
use App\Models\faq_product_guidelines;
use App\Models\faq_shipping;
use App\Models\selling_product;
use App\Models\shipping;
use App\Models\payment;
use App\Models\AdminShowOrderDetails;

class AdminController extends Controller
{
    public function product()
    {
        
        return view ('admin.product');
    }



    public function  uploadproduct(Request $request)
    {
        $data=new product;
        $image=$request->file;
        $imagename=time().'.'. $image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);
        $data->image=$imagename;


        $data->tittle=$request->tittle;
        $data->description=$request->description;
        $data->color=$request->color;
        $data->size=$request->size;
        $data->price=$request->price;
        $data->condition=$request->condition;
        $data->boxcondition=$request->boxcondition;


        $data->save();
        return redirect()->back()->with('message','Product Added Successfully');
    }


    public function showproduct()
    {
        $data=product::all();
        return view ('admin.showproduct',compact('data'));
    }


    public function deleteproduct($id)
    {
        $data=product::find($id);
        $data->delete();
        return redirect()->back()->with('message','Product Deleted');
    }



    public function updateview($id)
    {
        $data=product::find($id);
        return view ('admin.updateview',compact('data'));
    }


    public function updateproduct(Request $request,$id)
    {
        $data=product::find($id);
        $image=$request->file;
        if($image)
        {
        $imagename=time().'.'. $image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);
        $data->image=$imagename;
        }

        $data->tittle=$request->tittle;
        $data->description=$request->description;
        $data->color=$request->color;
        $data->size=$request->size;
        $data->price=$request->price;
        $data->condition=$request->condition;
        $data->boxcondition=$request->boxcondition;


        $data->save();
        return redirect()->back()->with('message','Product Updated Successfully');
         
    }




    /////___________________________________buyer order_____________



    public function show_buyer_order()
    {
        // $data=shipping::all();
        // return view ('admin.buyer_order',compact('data'));




        $data = AdminShowOrderDetails::join('shippings', 'shippings.id', '=', 'payments.id')
              		 
              		->get(['shippings.shipping_first_name', 'shippings.shipping_last_name',	'shippings.shipping_email',	'shippings.shipping_phone',	'shippings.address','shippings.state','shippings.producprice',	'shippings.postcode',	'shippings.product_qty','shippings.tittle',	'payments.payment_id',	'payments.payer_id','payments.payer_email',	'payments.amount',	'payments.currency','payments.payment_status']);

       	/*Above code will produce following query

        Select 
        	`country`.`country_name`, 
        	`state`.`state_name`, 
        	`city`.`city_name` 
        from `country` 
        inner join `state` 
        	on `state`.`country_id` = `country`.`country_id` 
        inner join `city` 
        	on `city`.`state_id` = `state`.`state_id`

        */

        return view('admin.buyer_order', compact('data'));
    }

    public function delete_buyer_order($id)
    {
        $data=shipping::find($id);
        
        $data->delete();
        return redirect()->back()->with('message','Buyer order Delivered');
    }



     /////___________________________________seller order_____________



     public function show_seller_order()
     {
         $data=selling_product::all();
         return view ('admin.seller_order',compact('data'));
     }
 
     public function delete_seller_order($id)
     {
         $data=selling_product::find($id);
         $data->delete();
         return redirect()->back()->with('message','Seller order Accepted');
     }




    //-----faq_buying

    public function faq_buying()
    {
        return view ('admin.faq_buying');
    }


    public function  upload_faq_buying(Request $request)
    {
        $data=new faq_buying;
        $data->question=$request->question;
        $data->answer=$request->answer;


        $data->save();
        return redirect()->back()->with('message','FAQ Added Successfully');
    }

    
    public function show_faq_buying()
    {
        $data=faq_buying::all();
        return view ('admin.show_faq_buying',compact('data'));
    }


    public function delete_faq_buying($id)
    {
        $data=faq_buying::find($id);
        $data->delete();
        return redirect()->back()->with('message','FAQ Buying Deleted');
    }



    public function update_faq_buying_view($id)
    {
        $data=faq_buying::find($id);
        return view ('admin.update_faq_buying_view',compact('data'));
    }


    public function update_faq_buying(Request $request,$id)
    {
        $data=faq_buying::find($id);
        
        $data->question=$request->question;
        $data->answer=$request->answer;


        $data->save();
        return redirect()->back()->with('message','FAQ Updated Successfully');
         
    }




    //-----faq_selling

    public function faq_selling()
    {
        return view ('admin.faq_selling');
    }


    public function  upload_faq_selling(Request $request)
    {
        $data=new faq_selling;
        $data->question=$request->question;
        $data->answer=$request->answer;


        $data->save();
        return redirect()->back()->with('message','FAQ Added Successfully');
    }

    
    public function show_faq_selling()
    {
        $data=faq_selling::all();
        return view ('admin.show_faq_selling',compact('data'));
    }


    public function delete_faq_selling($id)
    {
        $data=faq_selling::find($id);
        $data->delete();
        return redirect()->back()->with('message','FAQ Selling Deleted');
    }



    public function update_faq_selling_view($id)
    {
        $data=faq_selling::find($id);
        return view ('admin.update_faq_selling_view',compact('data'));
    }


    public function update_faq_selling(Request $request,$id)
    {
        $data=faq_selling::find($id);
        
        $data->question=$request->question;
        $data->answer=$request->answer;


        $data->save();
        return redirect()->back()->with('message','FAQ Updated Successfully');
         
    }



    
    //-----faq_myaccount

    public function faq_myaccount()
    {
        return view ('admin.faq_myaccount');
    }


    public function  upload_faq_myaccount(Request $request)
    {
        $data=new faq_myaccount;
        $data->question=$request->question;
        $data->answer=$request->answer;


        $data->save();
        return redirect()->back()->with('message','FAQ Added Successfully');
    }

    
    public function show_faq_myaccount()
    {
        $data=faq_myaccount::all();
        return view ('admin.show_faq_myaccount',compact('data'));
    }


    public function delete_faq_myaccount($id)
    {
        $data=faq_myaccount::find($id);
        $data->delete();
        return redirect()->back()->with('message','FAQ My Account Deleted');
    }



    public function update_faq_myaccount_view($id)
    {
        $data=faq_myaccount::find($id);
        return view ('admin.update_faq_myaccount_view',compact('data'));
    }


    public function update_faq_myaccount(Request $request,$id)
    {
        $data=faq_myaccount::find($id);
        
        $data->question=$request->question;
        $data->answer=$request->answer;


        $data->save();
        return redirect()->back()->with('message','FAQ Updated Successfully');
         
    }


     //-----faq_product_guidelines

     public function faq_product_guidelines()
     {
         return view ('admin.faq_product_guidelines'); 
     }
 
 
     public function  upload_faq_product_guidelines(Request $request)
     {
         $data=new faq_product_guidelines;
         $data->question=$request->question;
         $data->answer=$request->answer;
 
 
         $data->save();
         return redirect()->back()->with('message','FAQ Added Successfully');
     }
 
     
     public function show_faq_product_guidelines()
     {
         $data=faq_product_guidelines::all();
         return view ('admin.show_faq_product_guidelines',compact('data'));
     }
 
 
     public function delete_faq_product_guidelines($id)
     {
         $data=faq_product_guidelines::find($id);
         $data->delete();
         return redirect()->back()->with('message','FAQ My Account Deleted');
     }
 
 
 
     public function update_faq_product_guidelines_view($id)
     {
         $data=faq_product_guidelines::find($id);
         return view ('admin.update_faq_product_guidelines_view',compact('data'));
     }
 
 
     public function update_faq_product_guidelines(Request $request,$id)
     {
         $data=faq_product_guidelines::find($id);
         
         $data->question=$request->question;
         $data->answer=$request->answer;
 
 
         $data->save();
         return redirect()->back()->with('message','FAQ Updated Successfully');
          
     }



      //-----faq_shipping

    public function faq_shipping()
    {
        return view ('admin.faq_shipping');
    }


    public function  upload_faq_shipping(Request $request)
    {
        $data=new faq_shipping;
        $data->question=$request->question;
        $data->answer=$request->answer;


        $data->save();
        return redirect()->back()->with('message','FAQ Added Successfully');
    }

    
    public function show_faq_shipping()
    {
        $data=faq_shipping::all();
        return view ('admin.show_faq_shipping',compact('data'));
    }


    public function delete_faq_shipping($id)
    {
        $data=faq_shipping::find($id);
        $data->delete();
        return redirect()->back()->with('message','FAQ Shipping Deleted');
    }



    public function update_faq_shipping_view($id)
    {
        $data=faq_shipping::find($id);
        return view ('admin.update_faq_shipping_view',compact('data'));
    }


    public function update_faq_shipping(Request $request,$id)
    {
        $data=faq_shipping::find($id);
        
        $data->question=$request->question;
        $data->answer=$request->answer;


        $data->save();
        return redirect()->back()->with('message','FAQ Updated Successfully');
         
    }
 

}
