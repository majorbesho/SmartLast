<?php

namespace App\Http\Controllers;
use App\Models\groupProduct;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
///
///https://www.youtube.com/watch?v=_8s1B7AIK-k&ab_channel=LaravelDaily
///DateTime VS TimeStamp
///

class GroupProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $GroupProducts=groupProduct::orderBy('id','DESC')->get();
        return view('backend.groupro.index',compact('GroupProducts'));
    }
    public function groupProductStatus(Request $request)
    {
        //dd($request->all());
        if ($request->mode==true) {
           DB::table('group_products')->where('id',$request->id)->update(['status'=>'active']);
        }else{
            DB::table('group_products')->where('id',$request->id)->update(['status'=>'inactive']);

        }
        return response()->json(['msg'=>'successfuly ','status'=>true]);
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
        return view('backend.groupro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request->sdate);
        //return $request->all();

        //yyyy-mm-dd h:i:s
        $date = Carbon::parse($request->sdate)->format('d-m-Y H:i:s');

          $this->validate($request,[
            'title'=>'string|required',
            'discreption'=>'string|nullable',
            'photo'=>'string|required',
            'status'=>'nullable|in:active,inactive',
            'Caturl'=>'nullable|url',
            'sdate'=>'required',
            'edate'=>'required|date|after:sdate',
            'price'=>'string|required',
            'showPrice'=>'string|required',
            'periodID'=>'string|required',
            'supplier'=>'string|required',
            'showx'=>'nullable|in:showin,notshow',




           ]);
           $data=$request->all();
           $slug =Str::slug($request->input('title'));
           $slug_count=groupProduct::where('slug',$slug)->count();
           if ($slug_count>0) {
            $slug =time().'-'.$slug;
           }
           $data['slug'] =$slug;
            //return $data;
            //return $request->all();
           $status=groupProduct::create($data);
           if ($status) {
            return redirect()->route('groupro.index')->with('success','Created groupprouduct ');

           }else{
            return back()->with('error','somsthig wrong n groupproducts');
           }
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
         $groupproduct = groupProduct::find($id);
        if ($groupproduct) {
            # code...
            return view('backend.groupro.edit',compact('groupproduct'));
        }else{
            return back()->with('error', 'error with id ');
        }

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
        $groupProduct = groupProduct::find($id);
        if ($groupProduct) {

        }else{
            return back()->with('error', 'error with id ');
        }
         //return $request->all();
       $this->validate($request,[
        'title'=>'string|required',
        'discreption'=>'string|nullable',
        'photo'=>'string|required',
        'status'=>'nullable|in:active,inactive',
        'Caturl'=>'nullable|url',
        'sdate'=>'required|date',
        'edate'=>'required|date|after:sdate',
        'price'=>'string|required',
        'showPrice'=>'string|required',
        'periodID'=>'string|required',
        'supplier'=>'string|required',
        'showx'=>'nullable|in:showin,notshow',


       ]);
       $data=$request->all();
       $status=$groupProduct->fill($data)->save();
       if ($status) {
        return redirect()->route('groupro.index')->with('success','Updated groupproducts ');
       }else{
        return back()->with('error','somsthig wrong ');
       }
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
        $groupProducts = groupProduct::find($id);
        if ($groupProducts) {
            $status=$groupProducts->delete();
            if ($status) {
                return redirect()->route('groupro.index')->with('success',' Record Deleted');
            }
        }else{
            return back()->with('error', 'error with data ');
        }


    }
}
