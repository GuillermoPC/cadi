<?php

namespace App\Http\Controllers;

require_once('../vendor/autoload.php');

use Session;
use Stripe;

use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function paymentPost(Request $request){

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 500 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from hackeradda.com." 
        ]);
  
        Session::flash('success', 'Payment successful!');
          
        return back();
    }
}
