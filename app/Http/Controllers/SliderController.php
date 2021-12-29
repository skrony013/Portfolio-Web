<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Setting;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting_data = Setting::latest('created_at')->first();
        $slider = Slider::all();
        return view('admin/slider/sliders',compact('slider', 'setting_data'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $setting_data = Setting::latest('created_at')->first();
        return view('admin/slider/add-slider', compact('setting_data','categories'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Slider;
        $slider->cat_name = $request->input('cat_name');
        $slider->title_starting = $request->input('title_starting');
        $slider->title_ending = $request->input('title_ending');
        $slider->sub_title = $request->input('sub_title');
        if($request->hasfile('bg_img')){
            $file = $request->file('bg_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/slider', $filename);
            $slider->bg_img = $filename;
        }
        $slider->status = $request->input('status');

        $slider->save();
        return redirect()->back()->with('status', 'Slider Added Successfully!');
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
        $categories = Category::all();
        $setting_data = Setting::latest('created_at')->first();
        $slider = Slider::find($id);
        return view('admin/slider/edit-slider', compact('slider','setting_data','categories'));
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
        $slider = Slider::find($id);
        $slider->cat_name = $request->input('cat_name');
        $slider->title_starting = $request->input('title_starting');
        $slider->title_ending = $request->input('title_ending');
        $slider->sub_title = $request->input('sub_title');

        if($request->hasfile('bg_img')){
            $destination='upload/slider/'.$slider->bg_img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('bg_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/slider/', $filename);
            $slider->bg_img = $filename;
        }
        $slider->status = $request->input('status');

        $slider->update();
        return redirect()->back()->with('status', 'Slider Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $destination='upload/slider/'.$slider->bg_img;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $slider->delete();
        return redirect()->back()->with('status', 'Slider Deleted Successfully!');
    }
}
