<?php

namespace App\Http\Controllers;

use App\Models\chach;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ChachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $chachs=chach::orderBy('id','DESC')->get();
        return view('backend.cach.index',compact('chachs'));
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
     * @param  \App\Models\chach  $chach
     * @return \Illuminate\Http\Response
     */
    public function show(chach $chach)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chach  $chach
     * @return \Illuminate\Http\Response
     */
    public function edit(chach $chach)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chach  $chach
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chach $chach)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chach  $chach
     * @return \Illuminate\Http\Response
     */
    public function destroy(chach $chach)
    {
        //
    }
}
