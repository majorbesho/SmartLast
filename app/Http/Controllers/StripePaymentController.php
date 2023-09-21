<?php

namespace App\Http\Controllers;

//use Session;
use Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\OrderMail;
use App\Models\groupProduct;
use App\Models\order;
use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;



class StripePaymentController extends Controller
{
    //
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        $user = Auth::user();
        if ($user) {
            foreach (Cart::instance('shopping')->content() as $item) {
                $cart_array[] = $item->id;
            }
            $totale = Cart::subtotal();
            $totale = (float) str_replace(',', '', Cart::subtotal()) ;

            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
            $paymentIntent = Stripe\PaymentIntent::create([
                'amount' => $totale  * 100,
                'currency' => 'aed',
                'automatic_payment_methods' => [
                    'enabled' => true,
                ],
                'description' => 'Smartboxuae.ae',
                'metadata' => [
                    'name' => $user->name,
                    'email' =>  $user->email,
                ],
            ]);

            return view('frontend.stripe',['client_secret' => $paymentIntent->client_secret, "email" => $user->email,"name" => $user->name, 'key' => env('STRIPE_KEY')]);
        }else{
            return redirect()->route('user.auth')->with('info','please login ');
        }

    }
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
public function stripePost(Request $request)
    {
        foreach (Cart::instance('shopping')->content() as $item) {
            $cart_array[] = $item->id;
        }
        $totale = Cart::subtotal();
        $totale = (float) str_replace(',', '', Cart::subtotal()) ;
        $user = Auth::user();
        $qty  = $request->qty;

        //return $flag;

        //Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));



        //$stripe = new \Stripe\StripeClient(env('STRIPE_SECRET_KEY'));

        /* $stripe->customers->create([
          'email' => $user->email,
          'name' => $user->name,

          'address' => [
            'line1' => $user->address,

          ],
        ]);

        Stripe\Charge::create([

            "amount" => $totale *100 ,
            "currency" => "aed",
            "source" => $request->stripeToken,
             "description" => "Smartboxuae.ae",
             'metadata' => ['cutomer' => $user->email],

        ]

    ); */

        // Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        // Stripe\Customer::create([
        //     'name' => $user->email,
        //     'address' => $user->phone,
        //   ]);




        Session::flash('success', 'Payment successful!');
        $order = new order();


        $order['user_id']= auth()->user()->id;
        $order['order_number']= Str::upper('SB-'.Str::random(8));
        $order['total_amount']=$totale ;
        $order['user_name']= auth()->user()->name;
        $order['email']= auth()->user()->email;
        $order['address']= auth()->user()->address;
        $order['phone']=  auth()->user()->phone;
        $order['condition']= 'complete';
        $order['payment_status']= 'paid';
        $order['payment_method']= 'visa';
        $order['product_type']= '0';
        $order['empid']= $request->empid;


        $status =$order->save();
        foreach (Cart::instance('shopping')->content() as $item) {
        $gop_id[] = $item->id;
        $gproduct = groupProduct::find($item->id);
        $qty = $item->qty;
        //return $qty;
        $order->gproduct()->attach($gproduct,['qty'=>$qty]);

        //return $order;//
    }

    if ($status) {
    Mail::to($order['email'])
    ->bcc('marketing.smartboxdxb@gmail.com')
    ->cc('beshog32@gmail.com')
    ->send(new OrderMail($order));

    Cart::instance('shopping')->destroy();
    Session::forget('checkout1');
    //return redirect()->route('dashboard')->with('Success');
    }
        //return redirect()->route('dashboard')->with('Success');
        $url = "https://smartboxuae.ae/user/personalInformation";
        return response()->json(['message'=>"success",'redirect_url' => $url]);
}





public function stripegetvouchar (Request $request)
{
return view('frontend.stripevoucher');
}
public function stripePostvouchar (Request $request)
    {



        foreach (Cart::instance('shopping')->content() as $item) {
            $cart_array[] = $item->id;
        }
        //$result = Cart::instance('shopping')->add($product_id,$product[0]['title'],$product_qty,$price)->associate('App\Models\groupProduct');
        $totale = Cart::subtotal();
        $totale = (float) str_replace(',', '', Cart::subtotal()) ;
        $user = Auth::user();
        $qty  = $request->qty;
        $flag =$request->product_type;
        //return $flag;
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        Stripe\Charge::create([
            "amount" => $totale *100 ,
            "currency" => "aed",
            "source" => $request->stripeToken,
            // "description" => "Test payment from smart.com."
        ]);
        Session::flash('success', 'Payment successful!');
        $order = new order();
        $order['user_id']= auth()->user()->id;
        $order['order_number']= Str::upper('SB-'.Str::random(8));
        $order['total_amount']=$totale ;
        $order['user_name']= auth()->user()->name;
        $order['email']= auth()->user()->email;
        $order['address']= auth()->user()->address;
        $order['phone']=  auth()->user()->phone;
        $order['condition']= 'complete';
        $order['payment_status']= 'paid';
        $order['payment_method']= 'visa';
        $order['product_type']= '1';
        $order['empid']= $request->empid;

        $status =$order->save();
        foreach (Cart::instance('shopping')->content() as $item) {
        $gop_id[] = $item->id;
        $gproduct = groupProduct::find($item->id);
        $qty = $item->qty;
        //return $qty;
        $order->gproduct()->attach($gproduct,['qty'=>$qty]);

        //return $order;//
        }

        if ($status) {
        Mail::to($order['email'])
        ->bcc('marketing.smartboxdxb@gmail.com')
        ->cc('beshog32@gmail.com')
        ->send(new OrderMail($order));

        Cart::instance('shopping')->destroy();
        Session::forget('checkout1');
        return redirect()->route('dashboard')->with('Success');
        }




        return redirect()->route('dashboard')->with('Success');


}

}
