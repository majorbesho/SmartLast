<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories=Category::orderBy('id','DESC')->get();
        return view('backend.category.index',compact('categories'));
    }

    //getChildByCategoryId
    public function getChildByCategoryId(Request $request,$id)
    {
        //dd($id);
        $category = Category::find($request->id);
        if ($category) {
            $child_id =Category::getChildByCategoryId($request->id);
            if (count($child_id)>0) {
            return response()->json(['status'=>false,'data'=>null,'msg'=>'']);
            }
            return response()->json(['status'=>true,'data'=>$child_id,'msg'=>'']);
        }else{
            return response()->json(['status'=>false,'data'=>null,'msg'=>'Category not found']);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $parents_cate = Category::where('is_parent',1)->orderBy('title','ASC')->get();
        return view('backend.category.create',compact('parents_cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return  $request->all();
        $this->validate($request,[
            'title'=>'string|required',
            'discreption'=>'string|nullable',
            'photo'=>'string|required',
            'status'=>'nullable|in:active,inactive',
            'is_parent'=>'sometimes|in:1',
            'parent_id'=>'nullable',
            'Caturl'=>'string|nullable',]);

            $data=$request->all();
            $slug =Str::slug($request->input('title'));
            $slug_count=Category::where('slug',$slug)->count();
            if ($slug_count>0) {
             $slug =time().'-'.$slug;
            }
            $data['slug'] =$slug;
             //return $data;
             //return $request->all();
             $data['is_parent'] =$request->input('parent_id',0);
            $status=Category::create($data);
            if ($status) {
             return redirect()->route('category.index')->with('success','Created category ');
     
            }else{
             return back()->with('error','somsthig wrong category');
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
        $category = Category::find($id);
        $parents_cate = Category::where('is_parent',1)->orderBy('title','ASC')->get();

        if ($category) {
            # code...
            return view('backend.category.edit',compact(['category','parents_cate']));
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
        $category = Category::find($id);
        if ($category) {
            $this->validate($request,[
                'title'=>'string|required',
                'discreption'=>'string|nullable',
                'photo'=>'string|required',
                'status'=>'nullable|in:active,inactive',
                'is_parent'=>'sometimes|in:1',
                'parent_id'=>'nullable|exists:categories,id',
                'Caturl'=>'string|nullable',]);

                
            $data=$request->all();
        if ($request->is_parent==1) {
           $data['parent_id']= null;
        }
             $data['is_parent'] =$request->input('parent_id',0);
            $status=$category->fill($data)->save();
            if ($status) {
             return redirect()->route('category.index')->with('success','Created category ');
     
            }else{
             return back()->with('error','somsthig wrong category');
            }


    
        }else{
            return back()->with('error', 'error with id ');
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
        $categories = Category::find($id);
        $chiles_cat_id = Category::where('parent_id',$id)->pluck('id');
        if ($categories) {
          
            $status=$categories->delete();
            if ($status) {
                if (count($chiles_cat_id)>0) {
                    Category::shiftChild('chiles_cat_id');
                }
                return redirect()->route('category.index')->with('success',' Record Deleted');
            }
        }else{
            return back()->with('error', 'error with data ');
        }

    }
}
