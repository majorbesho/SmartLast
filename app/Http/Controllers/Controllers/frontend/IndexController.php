<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\art;
use App\Models\Banner;
use App\Models\Branch;
use App\Models\Brand;
use App\Models\Category;
use App\Models\client;
use App\Models\focus;
use App\Models\groupProduct;
use App\Models\media;
use App\Models\order;
use App\Models\product;
use App\Models\Projects;
use App\Models\setting;
use App\Models\team;
use App\Models\faq;

use App\Models\testim;
use App\Models\User;
use App\Models\winner;
use App\Models\networks;
use App\Notifications\NewUserNotification;
use App\Notifications\NewUserRegisterNotification;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use App\Models\EmailVerification;
use Mail;

use Illuminate\Support\Str;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Mail\OrderMail;
use App\Models\Emp as ModelsEmp;
use Kalnoy\Nestedset\NodeTrait;
use Kalnoy\Nestedset\NestedSet;


use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use App\Models\Emp;

// OR with multi
use Artesaos\SEOTools\Facades\JsonLdMulti;

// OR
use Artesaos\SEOTools\Facades\SEOTools;

use function PHPUnit\Framework\isNull;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;


class IndexController extends Controller
{
    //   use SEOToolsTrait;
    /**wewewewe
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homex()
    {
        SEOMeta::setTitle('SmartBoxUAE Home');
        SEOMeta::setDescription('your dream is one click away ');
        SEOMeta::setCanonical('http://smartboxuae.ae/');

        OpenGraph::setDescription('Win or Win ');
        OpenGraph::setTitle('SmartBoxUAE');
        OpenGraph::setUrl('http://smartboxuae.ae/');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('SmartBoxUAE');
        // TwitterCard::setSite('@LuizVinicius73');

        JsonLd::setTitle('SmartBoxUAE');
        JsonLd::setDescription('participate or get your money back ');
        JsonLd::addImage('http://smartboxuae.ae/frontend4/assets/images/logo.png');

        // OR

        // SEOTools::setTitle('Home');
        // SEOTools::setDescription('You Will never loose  ');
        // SEOTools::opengraph()->setUrl('hhttp://smartboxuae.ae/');
        // SEOTools::setCanonical('http://smartboxuae.ae/');
        // SEOTools::opengraph()->addProperty('type', 'articles');
        // SEOTools::twitter()->setSite('@LuizVinicius73');
        // SEOTools::jsonLd()->addImage('http://smartboxuae.ae/frontend4/assets/images/logo.png');

        $date = \Carbon\Carbon::now()->addDays(7);
        $upcoming = groupProduct::where(['status' => 'active',])
            ->where('edate', '>=', $date)
            ->orderBy('id', 'DESC')->with('products')->get();
        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('3')->get();
        $banner = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('1')->get();
        $brands = Brand::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('10')->get();
        $category = Category::where(['status' => 'active', 'is_parent' => 1])->orderBy('id', 'DESC')->limit('2')->get();
        $category_chiled = Category::where(['status' => 'active', 'is_parent' => 0])->orderBy('id', 'DESC')->limit('3')->get();
        $focus = focus::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('1')->get();
        $client = client::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('6')->get();
        $arts = art::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('8')->get();
        $setting = setting::orderBy('id', 'DESC')->limit('1')->get();
        $testim = testim::orderBy('id', 'DESC')->limit('8')->get();
        $branch = Branch::orderBy('id', 'DESC')->limit('8')->get();
        $categorys = Category::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('5')->get();
        $box = groupProduct::where(['showx' => 'notshow' ,'status' => 'active'])->orderBy('id', 'DESC')->get();
        $user = User::where(['status' => 'active'])->orderBy('id', 'DESC')->get();
        $winners = winner::where(['status' => 'active'])->orderBy('id', 'DESC')->get();
        $peoductWithBox = groupProduct::where(['status' => 'active',])->orderBy('id', 'DESC')->with('products')->get();
        $prod_index = product::where(['status' => 'active', 'chk' => true])->orderBy('id', 'DESC')->get();
        $prod_index_main = product::where(['status' => 'active', 'chk' => true])->orderBy('id', 'DESC')->limit('4')->get();

        $shareComponent = \Share::page(
            'https://smartboxuae.ae/'

        )
            ->facebook()->twitter()->linkedin()->telegram()->whatsapp()->reddit();
        if (auth()->user()) {
            if (is_null(auth()->user()->email_verified_at) or is_null(auth()->user()->phoneOtp_verified_at)) {
                return view('frontend.index', compact([
                    'banners', 'brands', 'category',
                    'category_chiled', 'focus', 'client', 'arts', 'setting', 'testim', 'branch',
                    'categorys', 'box', 'user', 'peoductWithBox', 'prod_index', 'winners', 'prod_index_main', 'shareComponent', 'upcoming', 'banner'
                ]))->with('error', ' Please active your account ');
            }
        } else {
            return view('frontend.index', compact([
                'banners', 'brands', 'category',
                'category_chiled', 'focus', 'client', 'arts', 'setting', 'testim', 'branch',
                'categorys', 'box', 'user', 'peoductWithBox', 'prod_index', 'winners', 'prod_index_main', 'shareComponent', 'upcoming', 'banner'
            ]));
        }
    }
    public function ref_user()
    {
    }
    public function productlib(){

        $box = groupProduct::where(['status' => 'active','showx' => 'showin'])

        ->orderBy('id', 'DESC')->get();
        return view('frontend.pages.productlib', compact('box'));
    }
    public function userAuth()
    {

        Session::put('url.intended', URL::previous());
        return view('frontend.user.auth');
    }




    public function loginsubmit(Request $request)
    {
        //return $request->all();
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'status' => 'active',
        ])) {
            //return $request->all();
            Session::put('user', $request->email);
            if (Session::get('url.intended')) {
                // return Redirect::to(Session::get('url.intended'));

                //$user =User::where(['email'=>$request->email,'password'=>$request->password])->get();
                //return auth()->user();
                if (auth()->user()->is_verified == 0) {
                    // $user = User::where('email', $request->email)->first();
                    // $otpData = EmailVerification::where('otp', $request->otp)->first();

                    // return redirect()->route('verification.notice')->with('good', 'Login Susseccfule');
                    return redirect()->route('home')->with('good', 'Login Susseccfule');
                } else {
                    return redirect()->route('home')->with('good', 'Login Susseccfule');
                }
            } else {
                return back()->with('error', 'error in login ');
            }
        } else {
            return back()->with('error', 'error in login ');
        }
    }
    //user.register
    public function userRegister()
    {

        return view('frontend.user.auth');
    }

    public function registerSubmit(Request $request)
    {

        //$userAll = User::select('*')->with('getrefby')->get();
        $this->validate($request, [
            'email' => 'unique:users|email|required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:4',
            'name' => 'nullable|string',
            'nationality' => 'nullable',
            'dateOfbarth' => 'nullable',
            'phone' => 'nullable',
            'referral_code' => 'nullable',
        ]);

        $referral_code = Str::random(10);

        if (!empty($request->referral_code)) {
            // add the levels of ref
            $userData = User::where('referral_code', $request->referral_code)->get();

//  return $request->all();
            //return $userData;
            $usernetwork =  networks::with('user')
                ->where('parent_user_id', [$userData[0]['id']])
                ->get();
            if (count($userData) > 0) {



                 $userId  = user::create([
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'name' => $request->name,
                    'nationality' => $request->nationality,
                    'dateOfbarth' => $request->dateOfbarth,
                    'phone' => $request->phone,
                    'referral_code' => $referral_code,
                    'ref_by'=>$userData[0]['id'],
                ]);



                $nodex = User::where('referral_code', $request->referral_code);

                $node = User::find($userId->ref_by);

                $node->appendNode($userId);



                $data = $request->all();
                $userid = User::orderBy('id', 'DESC')->first();
                Session::put('user', $data['email']);

                Auth::login($userid);


                // if ($userId) {
                //     return redirect()->route('verification', $userId);
                //     // return redirect()->route('home')->with('success','success  Welcome to smartBox ');
                // } else {
                //     return back()->with('error', 'check your data Please ');
                // }

                if ($userId) {
                    //return redirect()->route('verification', $userId);
                   return redirect()->route('home')->with('success','success  Welcome to smartBox ');
                } else {
                    return back()->with('error', 'check your data Please ');
                }
            } else {
                return back()->with('error', 'check your data Please ');
            }
            //return $request->all();
        } else {
            $userId  = user::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'name' => $request->name,
                'nationality' => $request->nationality,
                'dateOfbarth' => $request->dateOfbarth,
                'phone' => $request->phone,
                'referral_code' => $referral_code,
                'ref_by'=>0,

            ]);
            // if ( $userId  ) {
            //     $node = User::find($request->email,);
            //     $node->appendNode($userId);
            // }
            //return $node;
            $domain = URL::to('/');
            $url = $domain . '/referral-register?ref=' . $referral_code;
            $newData['url'] = $url;
            $newData['name'] = $request->phone;
            $newData['email'] = $request->email;
            $newData['title'] = 'Register';
            //  Mail::send('referralRegister', $newData, function ($message) use($newData) {

            //      $message->to ($newData['email'])->subject($newData['title']);

            //  });

            //$newData['pasword'] = $request->password;
            //return $referral_code;
            $data = $request->all();
            $userid = User::orderBy('id', 'DESC')->first();
            //return $userid;
            Session::put('user', $data['email']);

            Auth::login($userid);

            // if ($userId) {
            //     return redirect()->route('verification', $userId);
            //     // return redirect()->route('home')->with('success','success  Welcome to smartBox ');
            // } else {
            //     return back()->with('error', 'check your data Please ');
            // }

            if ($userId) {
                //return redirect()->route('verification', $userId);
                 return redirect()->route('home')->with('success','success  Welcome to smartBox ');
            } else {
                return back()->with('error', 'check your data Please ');
            }
        }


        $data = $request->all();

        // $notification->notify(new NewUserRegisterNotification($userId));
        // // return redirect()->back()->with('status','Your deposit was successful!');
    }

    //referralRegister



    public function referralRegister(Request $request)
    {
        if (isset($request->ref)) {
            $referral = $request->ref;
            $userData = User::where('referral_code', $referral)->get();
            if (count($userData)) {
                return view('frontend.user.authref', compact('referral'));
            } else {
                return view('404');
            }
        } else {
            return redirect('/');
        }
    }
    //new-userreferral


    public function new_userreferral(Request $request)
    {
        $user = Auth::user();
        // return  $user_id;
        // return  $ref_category_id;
        $domain = URL::to('/');

        $userref = networks::with('user')->where('referral_code', $user->referral_code)->get();
        // /refs/{user_id}/{ref_cat_id}
        $url = $domain . '/referral-register?ref=' . $user->referral_code;
        $newurl =  $domain . 'refs' . $user->id . '/referral-register?ref=' . $user->referral_code;
        return view('frontend.user.newuserreferral', compact(['user', 'userref']));
    }

    public function refs(Request $request,  $ref_category_id  )
    {
        $user = Auth::user();
        // return  $user_id;
        // return  $ref_category_id;
        $domain = URL::to('/');

        $userref = networks::with('user')->where('referral_code', $user->referral_code)->get();
        // /refs/{user_id}/{ref_cat_id}
        $url = $domain . '/referral-register?ref=' . $referral_code;
        $newurl =  $domain . 'refs' . $user->id . '/referral-register?ref=' . $referral_code;
        return view('frontend.user.newuserreferral', compact(['user', 'userref']));
    }
    private function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'name' => $data['name'],
            // 'photo'=>$data['photo'],
            'phone' => $data['phone'],
            'nationality' => $data['nationality'],
            'dateOfbarth' => $data['dateOfbarth'],
            'referral_code' => $data['referral_code'],

            // 'address'=>$data['address'],
        ]);
    }

    public function cachview()
    {
        $user = Auth::user();


        return view ('frontend.cach',compact('user'));
    }
//cachpost


public function cachpost(Request $request)
{

        $user = Auth::user();
       // $emp = Emp::where('repcode', $request->empid)->get();

        //return $request->empid;

        $emp = Emp::where('repcode',$request->empid)->get();
// return $emp;
        if( $emp->isEmpty()){
            //return $emp;
            return redirect()->route('home')->with('error','check emp rep ');

        }else{


    foreach (Cart::instance('shopping')->content() as $item) {
        $cart_array[] = $item->id;
    }
    //$result = Cart::instance('shopping')->add($product_id,$product[0]['title'],$product_qty,$price)->associate('App\Models\groupProduct');
    $totale = Cart::subtotal();
    $totale = (float) str_replace(',', '', Cart::subtotal()) ;

    $qty  = $request->qty;


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
    $order['payment_method']= 'chach';
    $order['empid']= $request->empid;
    //empid
   //  $order['condition']= 'complete';
    //quantity
    //$order['quantity']= $qty;

    //return $order;

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


    // otp
    public function sendOtp($user)
    {
        $otp = rand(100000, 999999);
        $time = time();

        EmailVerification::updateOrCreate(
            ['email' => $user->email],
            [
                'email' => $user->email,
                'otp' => $otp,
                'created_at' => $time
            ]
        );

        $data['email'] = $user->email;
        $data['title'] = 'Mail Verification';

        $data['body'] = 'Your OTP is:- ' . $otp;

        Mail::send('frontend.mailVerification', ['data' => $data], function ($message) use ($data) {
            $message->to($data['email'])->subject($data['title']);
        });
    }


    public function verification($id)
    {
        $user = User::where('id', $id)->first();
        if (!$user) {
            return redirect('/');
        }
        $email = $user->email;

        $this->sendOtp($user); //OTP SEND
        //return $user;

        return view('frontend.verification', compact('email'));
    }

    public function verifiedOtp(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $otpData = EmailVerification::where('otp', $request->otp)->first();

        if (!$otpData) {
            return response()->json(['success' => false, 'msg' => 'You entered wrong OTP']);
        } else {

            $currentTime = time();
            $time = $otpData->created_at;

            if ($currentTime >= $time && $time >= $currentTime - (90 + 5)) { //90 seconds
                User::where('id', $user->id)->update([
                    'is_verified' => 1
                ]);
                return response()->json(['success' => true, 'msg' => 'Mail has been verified']);
            } else {
                return response()->json(['success' => false, 'msg' => 'Your OTP has been Expired']);
            }
        }
    }

    public function resendOtp(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $otpData = EmailVerification::where('email', $request->email)->first();

        $currentTime = time();
        $time = $otpData->created_at;

        if ($currentTime >= $time && $time >= $currentTime - (90 + 5)) { //90 seconds
            return response()->json(['success' => false, 'msg' => 'Please try after some time']);
        } else {

            $this->sendOtp($user); //OTP SEND
            return response()->json(['success' => true, 'msg' => 'OTP has been sent']);
        }
    }




    //logout
    public function userlogout()
    {

        Cart::instance('shopping')->destroy();
        Session::forget('user');
        Session::forget('shopping');
        Session::forget('checkout1');

        Auth::logout();
        return redirect()->route('home')->with('success', 'success Logout See you soon ');
    }

    //UserdashBoard
    // public function getDashboard(Request $request)
    // {
    //     //return $request->all();
    //     $user = Auth::user();
    //     $userbil = DB::table('orders')
    //         ->join('users', 'orders.user_id', '=', 'users.id')
    //         ->join('gop_orders', 'orders.id', '=', 'gop_orders.order_id')


    //         // ->where('orders.user_id','=',auth()->user()->id)
    //         ->get();
    //     return $userbil;

    //     // $arts=art::where(['status'=>'active'])->orderBy('id','DESC')->limit('8')->get();
    //     //return $user;
    //     return view('frontend.user.transaction', compact('user', 'userbil'));
    // }



    public function editinfo(Request $request, $id)
    {
        //return $request->all();
        $user = user::where('id', $id)->update([
            'name' => $request->name,
            'dateOfbarth' => $request->dateOfbarth,
            'address' => $request->address,
            'nationality' => $request->nationality,
            'phone' => $request->phone,
        ]);
        if ($user) {
            return back()->with('sussecc', 'your personal data has ben updated ');
        } else {
            return back()->with('error', 'somthoing wrong ');
        }
    }



    public function editaccount(Request $request, $id)
    {
        //return $request->all();
        // $hashpassword = Auth::user()->passwor;
        // if ($request->oldpassword==null && $request->newpassword==null) {
        //     user::where('id',$id)->update([
        //         'name'=>$request->name,
        //          'dateOfbarth'=>$request->dateOfbarth,
        //          'address'=>$request->address,
        //          'nationality'=>$request->nationality,
        //          'phone'=>$request-> phone,
        //      ]);
        // }
        // else{
        //         if (\Hash::check($request->oldpassword, $hashedValue)) {
        //             # code...
        //         }
        //     $user = user::where('id',$id)->update([
        //         'name'=>$request->name,
        //          'dateOfbarth'=>$request->dateOfbarth,
        //          'address'=>$request->address,
        //          'nationality'=>$request->nationality,
        //          'phone'=>$request-> phone,
        //      ]);
        //      if ($user) {
        //          return back()->with('sussecc','your personal data has ben updated ');
        //      }else{
        //          return back()->with('error','somthoing wrong ');
        //      }
        // }
    }



    public function dashboard(Request $request)
    {
        //return $request->all();
        $user = Auth::user();

        if ($user) {
            $userbil = DB::table('orders')
                ->join('users', 'orders.user_id', '=', 'users.id')
                ->join('gop_orders', 'orders.id', '=', 'gop_orders.order_id')
                ->join('group_products', 'group_products.id', '=', 'gop_orders.gop_id')

                ->where('orders.user_id', '=', auth()->user()->id)->get();
            //return  $userbil;
            return view('frontend.user.dashboard', compact('user', 'userbil'));
        } else {
            return redirect()->route('home')->with('Login first Please and Acive your account   ');
        }
    }

    public function userDashboard()
    {

        $user = Auth::user();


        return view('frontend.user.dashboard', compact('user'));
    }

    //https://rifaa.vercel.app/how-work

    public function transaction()
    {
        $user = Auth::user();
        $userbil = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->join('gop_orders', 'orders.id', '=', 'gop_orders.order_id')
            ->where('orders.user_id', '=', auth()->user()->id)
            ->get();

            //return $userbil;


        return view('frontend.user.transaction', compact('user', 'userbil'));
    }
    //dashBoard
    public function personalInformation()
    {
        $user = Auth::user();

        if ($user) {
            $userbil = DB::table('orders')
                ->join('users', 'orders.user_id', '=', 'users.id')
                ->join('gop_orders', 'orders.id', '=', 'gop_orders.order_id')
                ->join('group_products', 'group_products.id', '=', 'gop_orders.gop_id')

                ->where('orders.user_id', '=', auth()->user()->id)->get();
               // return $userbil;
               $userbilx = DB::table('orders')
               ->join('users', 'orders.user_id', '=', 'users.id')
               ->join('gop_orders', 'orders.id', '=', 'gop_orders.order_id')
               ->join('group_products', 'group_products.id', '=', 'gop_orders.gop_id')

               ->where('orders.user_id', '=', auth()->user()->id)->get();
              // return $userbil;


               $result = json_decode($userbilx, true);
            //    $empidcheck= DB::table('emps')
            //    ->get();

                //return $empidcheck;
            return view('frontend.user.personalInformation', compact('user', 'userbil','result'));
        } else {
            return redirect()->route('home')->with('Login first Please and Acive your account   ');
        }
    }
    public function graph()
    {

        $user = Auth::user();
        return view('frontend.user.graph', compact('user'));
    }

    public function editpersonalInformation()
    {

        $user = Auth::user();
        return view('frontend.user.personaldata', compact('user'));
    }

    public function editpass()
    {

        $user = Auth::user();
        return view('frontend.user.editpass', compact('user'));
    }



    //dashBoard
    public function userlottery()
    {
        $user = Auth::user();
        return view('frontend.user.userlottery', compact('user'));
    }
    //dashBoard
    public function userreferral()
    {
        $user = Auth::user();



        $userref = user::withDepth()->descendantsOf($user->id)->toTree($user->id);


        //return $userref[0]['id'];


//         SELECT *
//   FROM orders
//   INNER JOIN users
//   ON orders.user_id = users.id
//   WHERE orders.payment_status ='paid' AND users.id=3

        $userreftest = DB::table('orders')
        ->join('users','orders.user_id','users.id')
        ->where('orders.user_id','=', $user->id)
        ->get();



        //return $userreftest;
        //  $tree = user::ancestorsAndSelf($user->id);
        //  $all = user::with('ancestors')->paginate(30);
// in view for breadcrumbs:
 //return $all;
        return view('frontend.user.userreferral', compact(['user', 'userref','userreftest']));
    }

    public function contact()
    {
        $user = Auth::user();
        return view('frontend.user.contact', compact('user'));
    }


    public function termsAndConditions()
    {

        return view('frontend.TermsAndConditions');
    }
    public function privacypolicy()
    {

        return view('frontend.privacypolicy');
    }



    //cartDetails
    public function cartDetails()
    {
        return view('frontend.user.cart');
    }


    public function getin()
    {
        return view('frontend.getin');
    }



    public function artsDispaly($slug)
    {
        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        $setting = setting::orderBy('id', 'DESC')->limit('1')->get();
        $artsUrls = art::where('slug', $slug)->first();
        if ($artsUrls) {
            return view('frontend.pages.artDeyails', compact(['artsUrls', 'banners', 'setting']));
        } else {
            return 'Art Not found ';
        }
    }
    //all arts
    public function arts()
    {
        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        $setting = setting::orderBy('id', 'DESC')->limit('1')->get();
        $arts = art::where(['status' => 'active'])->all();
        return view('frontend.pages.artDeyails', compact(['arts', 'banners', 'setting']));
    }
    //sngilbranch
    public function sngilbranch($slug)
    {
        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        $setting = setting::orderBy('id', 'DESC')->limit('1')->get();
        $onebranch = Branch::where('slug', $slug)->first();
        if ($onebranch) {
            return view('frontend.pages.onebranch', compact(['onebranch', 'banners', 'setting']));
        } else {
            return 'Art Not found ';
        }
    }
    public function productCategorys($slug)
    {
        // dd ($slug);

        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        //$category = Category::with('products')->where('slug',$slug)->get();
        //$gop = groupProduct::with('products')->where('slug',$slug)->first()->get();


        $prod_index = product::where(['slug' => $slug])->orderBy('id', 'DESC')->get();


        //return[ $gop];
        return view('frontend.pages.product_category', compact(['prod_index', 'banners']));
    }

    //get all prouduct
    public function allproduct()
    {
        // dd ($slug);

        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        //$category = Category::with('products')->where('slug',$slug)->get();
        //$gop = groupProduct::with('products')->where('slug',$slug)->first()->get();

        $box = groupProduct::where(['status' => 'active'])
            ->orderBy('id', 'DESC')->limit('1')->get();
        $prod_index = product::where(['status' => 'active'])->orderBy('id', 'DESC')->get();


        //return[ $prod_index];
        return view('frontend.pages.products', compact(['prod_index', 'banners', 'box']));
    }

    //product without box one product

    public function product($slug)
    {
        //return $slug;
        // $banners=Banner::where(['status'=>'active'])->orderBy('id','DESC')->limit('15')->get();
        //$category = Category::with('products')->where('slug',$slug)->get();
        // $gop = groupProduct::with('products')->where('slug',$slug)->first()->get();
        $pro_index = product::where(['slug' => $slug])->first();

        //return[ $gop];
        return view('frontend.pages.product', compact(['pro_index']));
    }

    public function productCategory($slug)
    {


        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        $category = Category::with('products')->where('slug', $slug)->first();
        $gop = groupProduct::with('products')->where('slug', $slug)->first()->get();
        $prod_index = product::where(['status' => 'active'])->orderBy('id', 'DESC')->get();


        return view('frontend.pages.product_category', compact(['category', 'banners']));
    }


    // GEt URl SLUG FILTER BY SLUG
    public function groupOfProduct($slug)
    {

        //dd($slug);


        $shareComponent = \Share::page(
            'https://smartboxuae.ae/',
            'Your share text comes here',
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();

        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        $gop = groupProduct::with('products')->where(['slug' => $slug])->first();
        //$product = prodcut::where('',$gop->id)->get();
        //return $gop;
        return view('frontend.pages.box', compact(['gop', 'banners', 'shareComponent']));
    }



    public function allgroupOfProduct()
    {

        //dd($slug);
        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        $gop = groupProduct::with('products')->get();
        $prod_index = product::where(['status' => 'active', 'chk' => true])->orderBy('id', 'DESC')->get();
        $box = groupProduct::where(['status' => 'active'])
            ->orderBy('id', 'DESC')->limit('1')->get();
        //$product = prodcut::where('',$gop->id)->get();
        //return $gop;



        return view('frontend.pages.product_category', compact(['gop', 'banners', 'prod_index', 'box']));
    }
    //allbox
    public function allbox()
    {

        //dd($slug);
        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        $gop = groupProduct::with('products')->get();
        $prod_index = product::where(['status' => 'active', 'chk' => true])->orderBy('id', 'DESC')->get();
        $box = groupProduct::where(['status' => 'active'])
            ->orderBy('id', 'DESC')->limit('1')->get();
        //$product = prodcut::where('',$gop->id)->get();
        //return $gop;
        return view('frontend.pages.allbox', compact(['gop', 'banners', 'prod_index', 'box']));
    }

    // GEt otp
    public function otp()
    {
        $user = Auth::user();

        return view('frontend.user.otp', compact('user'));
    }

    public function about()
    {
        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('5')->get();
        $client = client::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('10')->get();
        $testim = testim::where(['status' => 'active'])->orderBy('id', 'DESC')->get();
        $team = team::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('10')->get();
        $abouts = about::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('1')->get();


        $setting = setting::orderBy('id', 'DESC')->limit('1')->get();

        return view('frontend.about', compact(['banners', 'client', 'testim', 'team', 'setting', 'abouts']));
    }



    //affiliate
    public function affiliate()
    {


        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('5')->get();
        $client = client::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('10')->get();
        $testim = testim::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('10')->get();
        $team = team::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('10')->get();
        $setting = setting::orderBy('id', 'DESC')->limit('1')->get();

        return view('frontend.affiliate', compact(['banners', 'client', 'testim', 'team', 'setting']));
    }

    public function Branchs()
    {
        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        $client = client::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('10')->get();
        $branch = Branch::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('10')->get();

        return view('frontend.Branchs', compact(['banners', 'client', 'branch']));
    }

    public function winnersx()
    {
        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        $client = client::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('10')->get();
        $setting = setting::orderBy('id', 'DESC')->limit('1')->get();

        return view('frontend.winners', compact(['banners', 'client', 'setting']));
    }

    //howwork
    public function howwork()
    {
        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        $client = client::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('10')->get();
        $project = Projects::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('10')->get();

        return view('frontend.howitwork', compact(['banners', 'client', 'project']));
    }


    public function Projects()
    {
        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        $client = client::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('10')->get();
        $project = Projects::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('10')->get();

        return view('frontend.Projects', compact(['banners', 'client', 'project']));
    }
    public function Category()
    {
        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        $client = client::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('10')->get();
        $categorys = Category::where(['status' => 'active'])->orderBy('id', 'DESC')->get();

        return view('frontend.Category', compact(['banners', 'client', 'categorys']));
    }
    public function Services()
    {
        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        $client = client::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('10')->get();
        return view('frontend.Services', compact(['banners', 'client']));
    }
    public function Blogs()
    {
        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        $client = client::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('10')->get();
        $arts = art::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('8')->get();
        $lastarts = art::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('3')->get();
        //return $arts;
        return view('frontend.blogs', compact(['banners', 'client', 'arts', 'lastarts']));
    }

    public function media()
    {
        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        $client = client::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('10')->get();

        $media = media::where(['status' => 'active'])->orderBy('id', 'DESC')->get();
        $lastmedia = media::where(['status' => 'active'])->orderBy('id', 'DESC')->get();



        return view('frontend.media', compact(['banners', 'client', 'media', 'lastmedia']));
    }

    public function Gallery()
    {
        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        $client = client::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('10')->get();
        return view('frontend.Gallery', compact(['banners', 'client']));
    }



    public function faqs()
    {
 $faqs = faq::where(['status' => 'active'])->orderBy('id', 'DESC')->get();

        return view('frontend.faqs',compact('faqs'));
    }



    public function contactus()
    {
        $setting = setting::orderBy('id', 'DESC')->limit('1')->get();
        $client = client::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('10')->get();
        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        return view('frontend.contactus', compact(['banners', 'client', 'setting']));
    }


    public function sitemap()
    {



        $date = \Carbon\Carbon::now()->addDays(7);
        $upcoming = groupProduct::where(['status' => 'active',])
            ->where('edate', '>=', $date)
            ->orderBy('id', 'DESC')->with('products')->get();
        $banners = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('3')->get();
        $banner = Banner::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('1')->get();
        $brands = Brand::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('10')->get();
        $category = Category::where(['status' => 'active', 'is_parent' => 1])->orderBy('id', 'DESC')->limit('2')->get();
        $category_chiled = Category::where(['status' => 'active', 'is_parent' => 0])->orderBy('id', 'DESC')->limit('3')->get();
        $focus = focus::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('1')->get();
        $client = client::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('6')->get();
        $arts = art::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('8')->get();
        $setting = setting::orderBy('id', 'DESC')->limit('1')->get();
        $testim = testim::orderBy('id', 'DESC')->limit('8')->get();
        $branch = Branch::orderBy('id', 'DESC')->limit('8')->get();
        $categorys = Category::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('5')->get();
        $box = groupProduct::where(['showx' => 'notshow' ,'status' => 'active'])->orderBy('id', 'DESC')->get();
        $user = User::where(['status' => 'active'])->orderBy('id', 'DESC')->get();
        $winners = winner::where(['status' => 'active'])->orderBy('id', 'DESC')->get();
        $peoductWithBox = groupProduct::where(['status' => 'active',])->orderBy('id', 'DESC')->with('products')->get();
        $prod_index = product::where(['status' => 'active', 'chk' => true])->orderBy('id', 'DESC')->get();
        $prod_index_main = product::where(['status' => 'active', 'chk' => true])->orderBy('id', 'DESC')->limit('4')->get();




        return response()->view('frontend.sitemap',[
            'upComingEvent' => $upcoming,
            'banners' => $banners,
            'brands' => $brands,
            'categorys' => $categorys,
            'box' => $box,
            'winners' => $winners,
            'prod_index' => $prod_index,

            'peoductWithBox' => $peoductWithBox,

            'prod_index_main' => $prod_index_main,

            'testim' => $testim,


        ])->header('Content-Type', 'text/xml');
        //return view('frontend.contactus', compact(['banners', 'client', 'setting']));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
