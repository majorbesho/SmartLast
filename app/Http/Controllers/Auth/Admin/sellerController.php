<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class sellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginFormSup()
    {
        return view('backend.auth.supplierlogin');
    }

    public function loginFormpost(Request $request)
    {
        if (Auth::guard('supplier')
            ->attempt(['email' => $request->email, 'password' => $request->password])
        ) {
            return redirect()->route('supplier.dashboard')->with('Success', 'You Are Login');
        }
        //return back()->withInput($request->only('email'));
        return redirect()->route('home')->with('Error', 'You Are Login');
    }



    public function supplier()
    {
        // $orders = order::orderBy('id','desc')->get();
        return view('backend.sellerbackend.index');
    }











    /**
     *
     * loginForm
     */
    // public function loginForm(Request $request) {
    //     if (Auth::guard('seller')
    //     ->attempt(['email'=>$request->email,'password'=>$request->password])) {
    //       return redirect()->route('seller')->with('Success','You Are Login');
    //     }
    //         return back()->withInput($request->only('email'));

    // }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
