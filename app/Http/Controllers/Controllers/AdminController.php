<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

     public function admin(){
        $orders = order::orderBy('id','desc')->get();
         return view('backend.index',compact('orders'));
     }
}
