<?php






use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\FocusController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\settingController;
use App\Http\Controllers\teamController;
use App\Http\Controllers\branchController;
use App\Http\Controllers\testimController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\suppliertController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\FaqController;


use App\Http\Controllers\winnerController;
use App\Http\Controllers\Auth\VerificationController;

// use App\Http\Controllers\orderController;

use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\GroupProductController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\taskController;
use App\Http\Controllers\user_taskController;
use App\Http\Controllers\ref_levelController;
use App\Http\Controllers\ref_CategoryController;
use App\Http\Controllers\SocialShareButtonsController;
use App\Http\Controllers\Auth\Admin\sellerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// RewriteEngine On
// RewriteCond %{HTTPS} off
// RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]]



// ln -sfn /home/smartbs8/public_html/apps/storage/app/public /home/smartbs8/public_html/storage

Auth::routes(['verify'=>true]);


Route::get('/key', function () {
    $key = Artisan::call('key:generate');
    echo "key cleared<br>";
});
//sys
Route::get('/cleareverything', function () {
    $clearcache = Artisan::call('cache:clear');
    echo "Cache cleared<br>";

    $clearview = Artisan::call('view:clear');
    echo "View cleared<br>";
    // $clearconfig = Artisan::call('config:clrear');
    // echo "Config cleared<br>";

    $clearRoute = Artisan::call('route:clear');

    echo "route cleared<br>";
    $clearconfig = Artisan::call('config:cache');
    echo "Config cleared<br>";
    // $cleardebugbar = Artisan::call('debugbar:clear');
    // echo "Debug Bar cleared<br>";
    $clearconfig = Artisan::call('storage:link');
    echo "storage cleared<br>";
    $clearoptimize = Artisan::call('optimize:clear');
    echo "optimize cleared<br>";

    //optimize:clear

});
//Localization
// Route::group(['prefix' => LaravelLocalization::setLocale()], function()
// {
// 	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/


// });

//storage
Route::get('temp-create-link', function () {
    exec("ln -s ".escapeshellarg(storage_path('app/public')).' '.escapeshellarg(public_path('storage')));
});

//filemanager
  Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'auth:admin']], function () {
      \UniSharp\LaravelFilemanager\Lfm::routes();
  });

// ln -sfn /home/smartbs8/public_html/v03/apps/storage/app/public /home/smartbs8/public_html/v03/storage
//auth

Route::get('user/auth',[\App\Http\Controllers\frontend\IndexController::class,'userAuth'])->name('user.auth');
Route::match(['get','post'],'user/login',[\App\Http\Controllers\frontend\IndexController::class,'loginsubmit'])->name('loginsubmit');
//registerSubmit
Route::match(['get','post'],'user/register',[\App\Http\Controllers\frontend\IndexController::class,'registerSubmit'])->name('register.submit');
Route::get('user/logout',[\App\Http\Controllers\frontend\IndexController::class,'userlogout'])->name('user.logout');
 //Route::get('user/register',[\App\Http\Controllers\frontend\IndexController::class,'userRegister'])->name('userregister');


Route::get('/verification/{id}',[\App\Http\Controllers\frontend\IndexController::class,'verification'])->name('verification');

Route::match(['get','post'],'/verified',[\App\Http\Controllers\frontend\IndexController::class,'verifiedOtp'])->name('verifiedOtp');
Route::get('/resend-otp',[\App\Http\Controllers\frontend\IndexController::class,'resendOtp'])->name('resendOtp');
//referral-register
Route::get('/authref',[\App\Http\Controllers\frontend\IndexController::class,'referralRegister'])->name('referralRegister');

Route::get('/login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);
//Facebook
Route::get('/login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);
//Github
Route::get('/login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('/login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);


// frontend
Route::get('/',[\App\Http\Controllers\frontend\IndexController::class,'homex'])->name('home');
 Route::get('/about',[\App\Http\Controllers\frontend\IndexController::class,'about'])->name('about');
// Route::get('/Branchs',[\App\Http\Controllers\frontend\IndexController::class,'Branchs'])->name('Branchs');
// Route::get('/Projects',[\App\Http\Controllers\frontend\IndexController::class,'Projects'])->name('Projects');
// Route::get('/Category',[\App\Http\Controllers\frontend\IndexController::class,'Category'])->name('Category');
// Route::get('/Services',[\App\Http\Controllers\frontend\IndexController::class,'Services'])->name('Services');
Route::get('/Blogs',[\App\Http\Controllers\frontend\IndexController::class,'Blogs'])->name('blogs');
Route::get('/media',[\App\Http\Controllers\frontend\IndexController::class,'media'])->name('media');

Route::get('/affiliate',[\App\Http\Controllers\frontend\IndexController::class,'affiliate'])->name('affiliate');

Route::get('/Gallery',[\App\Http\Controllers\frontend\IndexController::class,'Gallery'])->name('Gallery');;
Route::get('/contactus',[\App\Http\Controllers\frontend\IndexController::class,'contactus'])->name('contactus');
Route::get('/howitwork',[\App\Http\Controllers\frontend\IndexController::class,'howwork'])->name('howitwork');
Route::get('/winners',[\App\Http\Controllers\frontend\IndexController::class,'winnersx'])->name('winners');
Route::get('/getin',[\App\Http\Controllers\frontend\IndexController::class,'getin'])->name('get-contact-us');
Route::get('/all-product',[\App\Http\Controllers\frontend\IndexController::class,'allproduct'])->name('allproduct');

Route::get('/TermsAndConditions',[\App\Http\Controllers\frontend\IndexController::class,'termsAndConditions'])->name('terms.And.Conditions');

Route::get('/privacy-policy',[\App\Http\Controllers\frontend\IndexController::class,'privacypolicy'])->name('privacy.policy');
Route::get('/faqs',[\App\Http\Controllers\frontend\IndexController::class,'faqs'])->name('user.faqs');


/** app route */
Route::prefix('inapp')->group(function () {
    Route::get('checkout/pending-payment', [\App\Http\Controllers\API\ProductController::class, 'pendingPayment']);
    Route::get('checkout/success', [\App\Http\Controllers\API\ProductController::class, 'success']);
    //Route::get('checkout/pay', [\App\Http\Controllers\API\ProductController::class, 'pay']);
});






// Route::get('/home', [HomeController::class, 'index']);
//admin

//email verfiy



Route::get('/email/verify',[VerificationController::class,'show'])->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [VerificationController::class,'verify'])->name('verification.verify')->middleware(['signed']);
// Route::get('/email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify')->middleware(['signed']);


Route::post('/email/resend', [VerificationController::class,'resend'])->name('verification.resend');




Route::get('product-category/{slug}/',[\App\Http\Controllers\frontend\IndexController::class,'productCategorys'])->name('product.Category');

Route::get('social-auth/{provider}/callback',[SocialLoginController::class,'providerCallback']);
Route::get('social-auth/{provider}',[SocialLoginController::class,'redirectToProvider'])->name('social.redirect');


Route::group(['prefix'=>'admin'],function(){
    Route::get('/login',[App\Http\Controllers\Auth\Admin\LoginController::class,'showLoginForm'])->name('admin.login.form');
    Route::post('/login',[App\Http\Controllers\Auth\Admin\LoginController::class,'loginForm'])->name('admin.login');

});

Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
     Route::get('/',[AdminController::class,'admin'])->name('admin');
     Route::resource('/banner',BannerController::class) ;
     Route::match(['get','post'],'/bannerStatus',[BannerController::class,'bannerStatus'])->name('banner.status');
     Route::resource('/category',CategoryController::class) ;
     Route::resource('/brand',BrandController::class) ;
     Route::resource('/art',ArtController::class) ;
     Route::match(['get','post'],'/art_status',[ArtController::class,'artStatus'])->name('art.status');
     Route::resource('/focus',FocusController::class) ;
     Route::resource('/client',ClientController::class) ;
     Route::resource('/user',UserController::class) ;
     Route::resource('/setting',settingController::class) ;
     Route::resource('/team',teamController::class) ;
     Route::resource('/branch',branchController::class) ;
     Route::resource('/testim',testimController::class) ;
     Route::resource('/project',ProjectController::class) ;
     Route::resource('/product',ProductController::class) ;
     Route::match(['get','post'],'/product_status',[ProductController::class,'productStatus'])->name('product.status');
     Route::match(['get','post'],'/category/{id}/child',[CategoryController::class,'getChildByCategoryId']);
     Route::resource('/groupro',GroupProductController::class);
     Route::resource('/supplier',suppliertController::class);
     Route::match(['get','post'],'/supplier_status',[suppliertController::class,'artStatus'])->name('supplier.status');

     Route::resource('/about',AboutController::class) ;
     Route::match(['get','post'],'/about_status',[AboutController::class,'abouttStatus'])->name('about.status');


     Route::resource('/media',MediaController::class) ;
     Route::match(['get','post'],'/media_status',[MediaController::class,'mediaStatus'])->name('media.status');


     Route::resource('/winner',WinnerController::class);
     Route::match(['get','post'],'/winner_status',[winnerController::class,'winnerStatus'])->name('winner.status');
    //  Route::resource('/order',orderController::class) ;
    //  Route::match(['get','post'],'/order_status',[orderController::class,'orderStatus'])->name('order.status');
     Route::resource('/Notification',NotificationController::class) ;
     Route::resource('/order',orderController::class) ;
     Route::resource('/order',orderController::class) ;
     Route::resource('/task',taskController::class) ;
     Route::resource('/user_task',user_taskController::class) ;
      Route::resource('/ref_level',ref_levelController::class) ;
     Route::resource('/ref_category',ref_categoryController::class) ;
     Route::resource('/emp',EmpController::class) ;
     Route::resource('/faq',FaqController::class) ;



});


//userDashboard
// Route::get('/otp',[\App\Http\Controllers\frontend\IndexController::class,'otp'])->name('otp');


Route::get('/social-media-share', [SocialShareButtonsController::class,'ShareWidget']);




Route::group(['prefix'=>'user'],function(){



    Route::get('/dashboard',[\App\Http\Controllers\frontend\IndexController::class,'dashBoard'])->name('dashboard');
    Route::get('/transaction',[\App\Http\Controllers\frontend\IndexController::class,'transaction'])->name('transaction');
    Route::get('/personalInformation',[\App\Http\Controllers\frontend\IndexController::class,'personalInformation'])->name('personalInformation');
    Route::get('/contact',[\App\Http\Controllers\frontend\IndexController::class,'contact'])->name('contact');

    Route::get('/cart',[\App\Http\Controllers\frontend\IndexController::class,'cartDetails'])->name('cart');
    Route::get('/userlottery',[\App\Http\Controllers\frontend\IndexController::class,'userlottery'])->name('userlottery');
    Route::get('/userreferral',[\App\Http\Controllers\frontend\IndexController::class,'userreferral'])->name('userreferral');


    //new-userreferral
    Route::get('/new-userreferral',[\App\Http\Controllers\frontend\IndexController::class,'new_userreferral'])->name('new.userreferral');

    Route::get('/refs/{user_id}/{ref_cat_id}',[\App\Http\Controllers\frontend\IndexController::class,'refs'])->name('refs.user');


    Route::get('/contact',[\App\Http\Controllers\frontend\IndexController::class,'contact'])->name('contact');

    Route::get('/graph',[\App\Http\Controllers\frontend\IndexController::class,'graph'])->name('graph');


    Route::match(['get','post'],'/editinfo/{id}/',[\App\Http\Controllers\frontend\IndexController::class,'editinfo'])->name('editinfo');
    Route::post('/editaccount/{id}/',[\App\Http\Controllers\frontend\IndexController::class,'editaccount'])->name('editaccount');



     Route::get('/otp',[\App\Http\Controllers\frontend\IndexController::class,'otp'])->name('otp');


        // Route::get('arts/{slug}/',[\App\Http\Controllers\frontend\IndexController::class,'artsDispaly'])->name('artsDispaly');
        Route::get('branch/{slug}/',[\App\Http\Controllers\frontend\IndexController::class,'sngilbranch'])->name('sngilbranch');
        Route::get('box/{slug}/',[\App\Http\Controllers\frontend\IndexController::class,'groupOfProduct'])->name('groupOfProduct');

            // Route::get('/cart',[\App\Http\Controllers\frontend\IndexController::class,'cartDetails'])->name('cart');

});
Route::get('arts/{slug}/',[\App\Http\Controllers\frontend\IndexController::class,'artsDispaly'])->name('artsDispaly');
Route::get('arts/',[\App\Http\Controllers\frontend\IndexController::class,'artsDispaly'])->name('allrticles');
Route::get('product/{slug}/',[\App\Http\Controllers\frontend\IndexController::class,'product'])->name('sProduct');


//allgroupOfProduct

Route::get('/pages/product_category',[\App\Http\Controllers\frontend\IndexController::class,'allgroupOfProduct'])->name('allgroupOfProduct');

//allbox

Route::get('/pages/allbox',[\App\Http\Controllers\frontend\IndexController::class,'allbox'])->name('allbox');


//   });
  Route::get('cart',[\App\Http\Controllers\frontend\CartController::class,'cart'])->name('cartuser');
  Route::get('cartpro',[\App\Http\Controllers\frontend\CartController::class,'cartpro'])->name('cartpro');

Route::match(['get','post'],'cart/store',[\App\Http\Controllers\frontend\CartController::class,'cartStore'])->name('cart.store');
Route::match(['get','post'],'cart/delete',[\App\Http\Controllers\frontend\CartController::class,'cartDelete'])->name('cart.delete');

Route::match(['get','post'],'cart/store2',[\App\Http\Controllers\frontend\CartController::class,'cartStore2'])->name('cart.store2');


Route::match(['get','post'],'cart/storex',[\App\Http\Controllers\frontend\CartController::class,'cartStorex'])->name('cart.storex');
Route::match(['get','post'],'cart/deletex',[\App\Http\Controllers\frontend\CartController::class,'cartDeletex'])->name('cart.deletex');


//productCart
Route::match(['get','post'],'cartpro/store',[\App\Http\Controllers\frontend\CartController::class,'cartproStore'])->name('cartpro.store');
Route::match(['get','post'],'cartpro/delete',[\App\Http\Controllers\frontend\CartController::class,'cartproDelete'])->name('cartpro.delete');

Route::get('wishlist',[\App\Http\Controllers\frontend\WishListController::class,'wishlist'])->name('wishlist');

Route::match(['get','post'],'wishlist/store',[\App\Http\Controllers\frontend\WishListController::class,'store'])->name('wishlist.store');

Route::match(['get','post'],'wishlist/move-to-cart',[\App\Http\Controllers\frontend\WishListController::class,'moveToCart'])->name('wishlist.move.cart');

//checkout
Route::get('checkout1new',[\App\Http\Controllers\frontend\CheckoutController::class,'checkoutnew'])->name('checkoutnew');

Route::get('checkout1',[\App\Http\Controllers\frontend\CheckoutController::class,'checkout1'])->name('checkout');
Route::post('checkout-first',[\App\Http\Controllers\frontend\CheckoutController::class,'checkout1Store'])->name('checkout1.store');

//checkoutStore
Route::match(['get','post'],'checkout-store',[\App\Http\Controllers\frontend\CheckoutController::class,'checkoutstore'])->name('checkout.store');
Route::get('checkout0',[\App\Http\Controllers\frontend\CheckoutController::class,'checkout0'])->name('checkout0');
Route::post('checkout-0',[\App\Http\Controllers\frontend\CheckoutController::class,'checkout0Store'])->name('checkout0.store');

//checkout0Store
//Route::match(['get','post'],'checkout0-store',[\App\Http\Controllers\frontend\CheckoutController::class,'checkout0store'])->name('checkout0.store')->middleware('user');


// Route::get('product/cat',[\App\Http\Controllers\frontend\CheckoutController::class,'checkout1'])->name('checkout1');

Route::get('change-language/{$locale}',[\App\Http\Controllers\ServiceController::class,'change_language'])->name('change_language');



Route::group(['prefix'=>'emp'],function(){
    Route::get('/emp-login',[App\Http\Controllers\Auth\Admin\EmpController::class,'showLoginForm'])->name('emp.login.form');
    Route::post('/emp-login-post',[App\Http\Controllers\Auth\Admin\EmpController::class,'loginFormpost'])->name('emp.login');
    Route::get('/emp-dashboard',[App\Http\Controllers\Auth\Admin\EmpController::class,'emp'])->name('emp.dashboard');
    Route::get('/empref',[App\Http\Controllers\Auth\Admin\EmpController::class,'empref'])->name('emp.empref');


});
Route::group(['prefix'=>'emp','middleware'=>'emp'],function(){
    Route::get('/',[App\Http\Controllers\Auth\Admin\EmpController::class,'emp'])->name('emp');
});



Route::group(['prefix'=>'supplier'],function(){
    Route::get('/supplier-login',[App\Http\Controllers\Auth\Admin\sellerController::class,'showLoginFormSup'])->name('supplier.login.form');
    Route::post('/supplier',[App\Http\Controllers\Auth\Admin\sellerController::class,'loginFormpost'])->name('supplier.post');
    Route::match(['get','post'],'/supplier-dashboard',[App\Http\Controllers\Auth\Admin\sellerController::class,'supplier'])->name('supplier.dashboard');
    Route::get('/supplier-taicket',[App\Http\Controllers\Auth\Admin\sellerController::class,'suppliertaicket'])->name('supplier.taicket');

});




Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe')->name('stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
    Route::get('stripevoucher', 'stripegetvouchar')->name('stripe.get.v');

    Route::post('stripevoucher', 'stripePostvouchar')->name('stripe.post.v');

});

// Auth::routes();

 Route::get('/product-library', [App\Http\Controllers\frontend\IndexController::class, 'productlib'])->name('product.library');
 Route::get('/cach', [App\Http\Controllers\frontend\IndexController::class, 'cachview'])->name('cach.emp');
 Route::match(['get','post'],'/cachpost', [App\Http\Controllers\frontend\IndexController::class, 'cachpost'])->name('cach.post');

 Route::get('/sitemap.xml', [App\Http\Controllers\frontend\IndexController::class, 'sitemap'])->name('site.map');



/** app route */
Route::prefix('inapp')->group(function () {
    Route::get('checkout/pending-payment', [\App\Http\Controllers\API\ProductController::class, 'pendingPayment']);
    Route::get('checkout/success', [\App\Http\Controllers\API\ProductController::class, 'success']);
    //Route::get('checkout/pay', [\App\Http\Controllers\API\ProductController::class, 'pay']);
});

/** share */
Route::get('product/share/{slug}', [\App\Http\Controllers\API\ProductController::class, 'shareProduct']);


//uk
Route::get('/newreg', function(){
    return view('frontend/register_temp');
});

Route::get('/order-email', function(){
    return view('frontend/mail/ordermail');
});

//test

Route::get('/index-test',[\App\Http\Controllers\frontend\IndexController::class,'home_test'])->name('index3');



