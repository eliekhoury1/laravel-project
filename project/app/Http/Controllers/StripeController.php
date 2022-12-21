<?php
namespace App\Http\Controllers;
use App\Models\order;
use Illuminate\Http\Request;
use Stripe;
use Session;
class StripeController extends Controller
{
    /**
     * payment view
     */
    public function handleGet()
    {
        return view('stripe');
    }
  
    /**
     * handling payment with POST
     */
    public function handlePost(Request $request,$tot)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $tot*100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Making test payment." 
        ]);
        $data=order::where('status','waiting')->update(['status'=>'pending'] );
        $result = (new CartController)->destroycartbyuserid();
        Session::flash('success', 'Payment has been successfully processed.');
          
        return redirect(route('signin.index'));
    }
}