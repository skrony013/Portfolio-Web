<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Gallery;
use Image;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting_data = Setting::latest('created_at')->first();
        return view('admin/service/img-gallery', compact('setting_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $gallery_img = $request->file('gallery_img');

        //   foreach((array) $gallery_img as $gallery_item){
        //     $name_gen = hexdec(uniqid()).'.'.$gallery_item->getClientOriginalExtension();

        //     Image::make($gallery_item)->resize(300,300)->save('upload/gallery/'.$name_gen);
        //     $final_img = 'upload/gallery/'.$name_gen;

        //     Gallery::insert([
        //         'image' => $final_img,
                
        //     ]);
        // }

        $this->validate($request, [
                'filenames' => 'required',
                'filenames.*' => 'image'
        ]);
  
        $files = array();
        if($request->hasfile('filenames'))
         {
            foreach((array) $request->file('filenames') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move('upload/gallery', $name);  
                $files[] = $name;  
            }
         }
  
         $file= new Gallery();
         $file->filenames = $files;
         $file->save();
  
        return back()->with('success', 'Data Your files has been successfully added');


      
        // return redirect()->back()->with('status', 'Gallery Added Successfully!');
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
