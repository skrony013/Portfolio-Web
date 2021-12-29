<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Setting;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $setting_data = Setting::latest('created_at')->first();
        $testimonial_data = Testimonial::all();
        return view('admin/about/testimonial/testimonial', compact('testimonial_data','setting_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $setting_data = Setting::latest('created_at')->first();
          return view('admin/about/testimonial/add-testimonial', compact('setting_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial = new Testimonial;
        $testimonial->client_name = $request->input('client_name');
        $testimonial->client_designation = $request->input('client_designation');
        if($request->hasfile('profile_img')){
            $file = $request->file('profile_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/testimonial', $filename);
            $testimonial->profile_img = $filename;
        }
        $testimonial->client_quotes = $request->input('client_quotes');

        $testimonial->save();
        return redirect()->back()->with('status', 'Client Info Added Successfully!');
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
        $testimonial_data = Testimonial::find($id);
         return view('admin/about/testimonial/edit-testimonial', compact('testimonial_data', 'setting_data'));
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
        $testimonial = Testimonial::find($id);
        $testimonial->client_name = $request->input('client_name');
        $testimonial->client_designation = $request->input('client_designation');
        if($request->hasfile('profile_img')){
            $destination='upload/testimonial/'.$testimonial->profile_img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('profile_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/testimonial/', $filename);
            $testimonial->profile_img = $filename;
        }
        $testimonial->client_quotes = $request->input('client_quotes');
        $testimonial->update();
        return redirect()->back()->with('status', 'Client Info Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $destination='upload/testimonial/'.$testimonial->profile_img;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $testimonial->delete();
        return redirect()->back()->with('status', 'Client Info Deleted Successfully!');
    }
}
