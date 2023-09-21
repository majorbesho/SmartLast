<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\groupProduct;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    //
    public function wishlist(){

        return view('frontend.user.wishlist');
     }


    public function store(Request $request){
       // return $request->all();
  //dd($request->all());
   //return $request->all();
// var product_id = $(this).data('product-id');
    $product_qty = $request->input('product_qty');
    $product_id = $request->input('product_id');
    //return $product_id;
    $product = groupProduct::getProductBycart($product_id);
    $price  =$product[0]['showPrice'];
    //return $product;
    //return $price;
    $wishlist_array = [];

    foreach (Cart::instance('wishlist')->content() as $item ) {
        $wishlist_array[]= $item->id;
    }
    if (in_array($product_id,$wishlist_array)) {
        $response['present'] =true;
        $response['message'] =" Item Added To Wishlist";


    } else {
        $result = Cart::instance('wishlist')->add($product_id,$product[0]['title'],$product_qty,$price)->associate('App\Models\groupProduct');
        if ($result) {
            $response['status'] =true;
            $response['message'] =" Item Added To wishlist";
            $response['wishlist_count'] =Cart::instance('wishlist')->count();
            // $response['product_id'] =$product_id;
            // $response['totle'] =Cart::subtotal();


        }
    }
    return json_encode($response) ;


// //return $cart_array;
// $result = Cart::instance('shopping')->add($product_id,$product[0]['title'],$product_qty,$price)->associate('App\Models\groupProduct');
// //return json_encode($result);
// if ($result) {
//     $response['status'] =true;
//     $response['product_id'] =$product_id;
//     $response['totle'] =Cart::subtotal();
//     $response['cart_count'] =Cart::instance('shopping')->count();
//     $response['message'] =" Item Added To cart";
// }
// if ($result->ajax()) {
//     $header = view('frontend.layouts.header')->render();
//     $response['header'] = $header;
// }0
// return json_encode($response) ;


//         return view('frontend.user.wishlist');
     }


     //moveToCart
     public function moveToCart(Request $request){
            //return $request->all();
            $item  =Cart::instance('wishlist')->get($request->input('rowId'));
            //return $item;
            Cart::instance('wishlist')->remove($request->input('rowId'));
            $result  = Cart::instance('shopping')->add($item->id,$item->name,1,$item->price)->associate('App\Models\groupProduct');
            if ($result) {
                $response['status'] =true;

                $response['totle'] =Cart::subtotal();
                $response['cart_count'] =Cart::instance('shopping')->count();
                $response['message'] =" Item moved to cart";
            }
            // if ($result->ajax()) {
            //     $header = view('frontend.layouts.header')->render();
            //     $response['header'] = $header;
            // }
        return json_encode($response) ;

     }


    }
