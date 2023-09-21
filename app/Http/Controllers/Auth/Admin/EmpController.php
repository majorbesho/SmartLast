<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\user as MiddlewareUser;
use App\Models\order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class EmpController extends Controller
{

    public function showLoginForm(){
        return view('backend.auth.emplogin');
    }

    public function loginFormpost(Request $request) {
            if (Auth::guard('emp')
            ->attempt(['email'=>$request->email,'password'=>$request->password])) {
              return redirect()->route('emp.dashboard')->with('Success','You Are Login');
            }
                return back()->withInput($request->only('email'));
    }





        public function emp(){
            // $orders = order::orderBy('id','desc')->get();
             return view('backend.empbackend.index');
         }


        public function empref(){




            $user =  Auth::guard('emp')->check();



            if ($user) {
                $userref = MiddlewareUser::withDepth()->descendantsOf($user->id)->toTree($user->id);
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
                return view('backend.empbackend.empref', compact(['user', 'userref','userreftest']));
            }
            else
            {
                return redirect()->route('home')->with('error','login first please');
            }

             return view('backend.empbackend.empref');
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
