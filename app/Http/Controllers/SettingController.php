<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
  
    public function edit(Setting $id)
    {
       // $setting_data = Setting::first();
       $setting_data = Setting::latest('created_at')->first();
       return view('admin/setting/edit',compact('setting_data'));
    }

    public function create()
    {
       $setting_data = Setting::latest('created_at')->first();
       return view('admin/setting/add-setting', compact('setting_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $setting = new Setting;
        $setting->site_name = $request->input('site_name');
        $setting->site_tagline = $request->input('site_tagline');
        $setting->site_desc = $request->input('site_desc');

        if($request->hasfile('site_logo')){
            $file = $request->file('site_logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/setting', $filename);
            $setting->site_logo = $filename;
        }
        
        if($request->hasfile('admin_logo')){
            $file = $request->file('admin_logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/setting', $filename);
            $setting->admin_logo = $filename;
        }

        if($request->hasfile('site_favicon')){
            $file = $request->file('site_favicon');
            $extension_fav = $file->getClientOriginalExtension();
            $filename_fav = time().'.'.$extension_fav;
            $file->move('upload/setting', $filename_fav);
            $setting->site_favicon = $filename_fav;
        }

        $setting->facebook = $request->input('facebook');
        $setting->twitter = $request->input('twitter');
        $setting->instagram = $request->input('instagram');
        $setting->linkedin = $request->input('linkedin');
        $setting->address = $request->input('address');
        $setting->email = $request->input('email');
        $setting->phone = $request->input('phone');

       

        $setting->save();
        return redirect()->back()->with('status', 'Setting Added Successfully!');
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
    // public function edit($id)
    // {
    //     // $setting_data = Setting::first();
        
    //     // return view('admin.setting.edit', compact('setting_data'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $setting = Setting::first();
        $setting->site_name = $request->input('site_name');
        $setting->site_tagline = $request->input('site_tagline');
        $setting->site_desc = $request->input('site_desc');

        if($request->hasfile('site_logo')){
            $destination='upload/setting/'.$setting->site_logo;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('site_logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/setting/', $filename);
            $setting->site_logo = $filename;
        }

        if($request->hasfile('admin_logo')){
            $destination='upload/setting/'.$setting->admin_logo;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('admin_logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/setting/', $filename);
            $setting->admin_logo = $filename;
        }


        if($request->hasfile('site_favicon')){
            $destination='upload/setting/'.$setting->site_favicon;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('site_favicon');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/setting/', $filename);
            $setting->site_favicon = $filename;
        }

        $setting->facebook = $request->input('facebook');
        $setting->twitter = $request->input('twitter');
        $setting->instagram = $request->input('instagram');
        $setting->linkedin = $request->input('linkedin');
        $setting->address = $request->input('address');
        $setting->email = $request->input('email');
        $setting->phone = $request->input('phone');

        $setting->update();
        return redirect()->back()->with('status', 'Setting Updated Successfully!');
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
    }
}
