<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;



class suppliertController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function showLoginForm()
    {
        return view('supplier.auth');
    }

    public function loginForm(Request $request)
    {
        if (Auth::guard('supplier')
            ->attempt(['email' => $request->email, 'password' => $request->password])
        ) {
            return redirect()->route('supplier')->with('Success', 'You Are Login');
        }
        return back()->withInput($request->only('email'));
    }
    public function index()
    {
        //
        $suppliers = supplier::orderBy('id', 'DESC')->get();
        return view('backend.supplier.index', compact('suppliers'));
    }
    public function supplierStatus(Request $request)
    {
        //dd($request->all());
        if ($request->mode == true) {
            DB::table('suppliers')->where('id', $request->id)->update(['status' => 'active']);
        } else {
            DB::table('suppliers')->where('id', $request->id)->update(['status' => 'inactive']);
        }
        return response()->json(['msg' => 'successfuly ', 'status' => true]);
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
        return view('backend.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $this->validate($request, [
            'title' => 'string|required',
            'discreption' => 'string|nullable',
            'photo' => 'string|required',
            'status' => 'nullable|in:active,inactive',
            'company' => 'string|nullable',
            'contactNo' => 'string|nullable',
            'resName' => 'string|nullable',
            'email' => 'string|nullable',
            'tele' => 'string|nullable',
            'web' => 'string|nullable',
            'nots' => 'string|nullable',
        ]);
        $data = $request->all();
        $slug = Str::slug($request->input('title'));
        $slug_count = supplier::where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug = time() . '-' . $slug;
        }
        $data['slug'] = $slug;
        //return $data;
        //return $request->all();
        $status = supplier::create($data);
        if ($status) {
            return redirect()->route('supplier.index')->with('success', 'Created supplier ');
        } else {
            return back()->with('error', 'somsthig wrong ');
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

        $supplier = supplier::find($id);
        if ($supplier) {
            # code...
            return view('backend.supplier.edit', compact('supplier'));
        } else {
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
        $supplier = supplier::find($id);
        if ($supplier) {
        } else {
            return back()->with('error', 'error with id ');
        }
        //return $request->all();
        $this->validate($request, [
            'title' => 'string|required',
            'discreption' => 'string|nullable',
            'photo' => 'string|required',
            'status' => 'nullable|in:active,inactive',
            'company' => 'string|nullable',
            'contactNo' => 'string|nullable',
            'resName' => 'string|nullable',
            'email' => 'string|nullable',
            'tele' => 'string|nullable',
            'web' => 'string|nullable',
            'nots' => 'string|nullable',

        ]);
        $data = $request->all();
        $status = $supplier->fill($data)->save();
        if ($status) {
            return redirect()->route('supplier.index')->with('success', 'Updated supplier ');
        } else {
            return back()->with('error', 'somsthig wrong ');
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
        $supplier = supplier::find($id);
        if ($supplier) {
            $status = $supplier->delete();
            if ($status) {
                return redirect()->route('supplier.index')->with('success', ' Record Deleted');
            }
        } else {
            return back()->with('error', 'error with data ');
        }
    }
}
