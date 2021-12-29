<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Setting;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat_list = Category::all();
        $setting_data = Setting::latest('created_at')->first();
        return view('admin/category/categories', compact('cat_list','setting_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting_data = Setting::latest('created_at')->first();
        return view('admin/category/add-cat', compact('setting_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->cat_title = $request->input('cat_title');
        $category->cat_desc = $request->input('cat_desc');
        $category->save();
        return redirect()->back()->with('status', 'New Category Added Successfully!');
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
        $setting_data = Setting::latest('created_at')->first();
        $cat_data= Category::find($id);
        return view('admin/category/edit-cat',compact('cat_data', 'setting_data'));
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
        $cat_data = Category::find($id);
        $cat_data->cat_title = $request->input('cat_title');
        $cat_data->cat_desc = $request->input('cat_desc');
        $cat_data->update();
        return redirect()->back()->with('status', 'Category Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat_item = Category::find($id);
        $cat_item->delete();
        return redirect()->back()->with('status', 'Category Deleted Successfully!');
    }
}
