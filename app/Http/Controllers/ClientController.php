<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clients=client::orderBy('id','DESC')->get();
        return view('backend.client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.client.create');
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
        $this->validate($request,[
            'title'=>'string|required',
            //'slug'=>'string|required',
            'discreption'=>'string|nullable',
            'photo'=>'string|required',
            'status'=>'nullable|in:active,inactive',
            'summary'=>'string|required',
    
           ]);
           $data=$request->all();
           $slug =Str::slug($request->input('title'));
           $slug_count=client::where('slug',$slug)->count();
           if ($slug_count>0) {
            $slug =time().'-'.$slug;
           }
           $data['slug'] =$slug;
            //return $data;
            //return $request->all();
           $status=client::create($data);
           if ($status) {
            return redirect()->route('client.index')->with('success','Created client ');
    
           }else{
            return back()->with('error','somsthig wrong ');
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
        $client = client::find($id);
        if ($client) {
            # code...
            return view('backend.client.edit',compact('client'));
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
        $client = client::find($id);
        if ($client) {

        }else{
            return back()->with('error', 'error with id ');
        }
         //return $request->all();
       $this->validate($request,[
        'title'=>'string|required',
        //'slug'=>'string|required',
        'discreption'=>'string|nullable',
        'summary'=>'string|nullable',

        'photo'=>'string|required',
        'status'=>'nullable|in:active,inactive',

       ]);
       $data=$request->all();
       $status=$client->fill($data)->save();
       if ($status) {
        return redirect()->route('client.index')->with('success','Updated client ');
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
        $client = client::find($id);
        if ($client) {
            $status=$client->delete();
            if ($status) {
                return redirect()->route('client.index')->with('success',' Record Deleted');
            }
        }else{
            return back()->with('error', 'error with data ');
        }
    }

    }

