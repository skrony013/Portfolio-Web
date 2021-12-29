<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Setting;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $setting_data = Setting::latest('created_at')->first();
        $feature_data = Feature::all();
        return view('admin/about/feature/feature', compact('feature_data','setting_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting_data = Setting::latest('created_at')->first();
        return view('admin/about/feature/add-feature', compact('setting_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feature = new Feature;
        $feature->feature_heading = $request->input('feature_heading');
        $feature->feature_title = $request->input('feature_title');
        $feature->feature_desc = $request->input('feature_desc');
        $feature->save();
        return redirect()->back()->with('status', 'New Feature Added Successfully!');
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
        $feature_data = Feature::find($id);
        return view('admin/about/feature/edit-feature', compact('feature_data', 'setting_data'));
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
        $feature_data = Feature::find($id);
        $feature_data->feature_heading = $request->input('feature_heading');
        $feature_data->feature_title = $request->input('feature_title');
        $feature_data->feature_desc = $request->input('feature_desc');
        $feature_data->update();
        return redirect()->back()->with('status', 'Feature Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feature_item = Feature::find($id);
        $feature_item->delete();
        return redirect()->back()->with('status', 'Feature Deleted Successfully!');
    }
}
