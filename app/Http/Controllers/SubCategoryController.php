<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\SubcategoryStoreRequest;
use App\Http\Requests\SubcategoryUpdateRequest;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::with('category')->get(['id','category_id','name','created_at']);
        return view('subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get(['id','name']);

        return view('subcategory.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubcategoryStoreRequest $request)
    {
        // dd($request->all());
        SubCategory::create([
            'category_id' => $request->category_id,
            'name' => $request->sub_category_name,
            'slug' => Str::slug( $request->sub_category_name),
            'is_active' => $request->filled('is_active'),
        ]);
        Session::flash('status','Sub Category Created Successfully');
        return  redirect()->route('subcategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
        return('show');

        // $subcategory = SubCategory::find($id);
        // return view('subcategory.show',compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::get(['id','name']);
        $subcategories = SubCategory::find($id);
        // dd($subcategories);
        return view('subcategory.edit',compact('categories','subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubcategoryUpdateRequest $request, $id)
    {
        $subcategory = SubCategory::find($id);

        $subcategory->update([
            'category_id' => $request->category_id,
            'name' => $request->sub_category_name,
            'slug' => Str::slug( $request->sub_category_name),
            'is_active' => $request->filled('is_active'),
        ]);
        Session::flash('status','Sub Category Updated Successfully');
        return redirect()->route('subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        return('Destry');
        // SubCategory::find($id)->delete();
    }
}
