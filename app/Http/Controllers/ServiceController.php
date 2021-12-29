<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Service;
use App\Models\ImageGallery;
use App\Models\Category;
use App\Models\Setting;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $setting_data = Setting::latest('created_at')->first();
        $service_list = Service::with('category')->get();
        return view('admin/service/services', compact('service_list','setting_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $setting_data = Setting::latest('created_at')->first();
        $categories = Category::all();
        return view('admin/service/add-service', compact('categories', 'setting_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $service = new Service;
    //     $service->service_title = $request->input('service_title');
    //     $service->service_short_desc = $request->input('service_short_desc');

    //     if($request->hasfile('service_img')){
    //         $file = $request->file('service_img');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = time().'.'.$extension;
    //         $file->move('upload/service', $filename);
    //         $service->service_img = $filename;
    //     } 

    //     $service->service_cat = $request->input('service_cat');
    //     $service->service_status = $request->input('service_status');

    //     $service->save();
    //     return redirect()->back()->with('status', 'Service Added Successfully!');
    // }

    public function store(Request $request)
    {
        if($request->hasFile("service_img")){
            $file=$request->file("service_img");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("upload/service"),$imageName);

            $service =new Service([
                "service_title" =>$request->service_title,
                "service_short_desc" =>$request->service_short_desc,
                "service_img" =>$imageName,
                "service_cat" =>$request->service_cat,
                "service_status" =>$request->service_status,
            ]);
            $service->save();
        }

        if($request->hasFile("images")){
            $files=$request->file("images");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request['service_id']=$service->id;
                $request['image']=$imageName;
                $file->move(\public_path("upload/gallery"),$imageName);
                ImageGallery::create($request->all());

            }
        }
        return redirect()->back()->with('status', 'Service Added Successfully!');
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
        $categories = Category::all();
        $service_data = Service::find($id);
        $img_data = ImageGallery::find($id);
        return view('admin/service/edit-service', compact('service_data','img_data','categories', 'setting_data'));
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
        $service=Service::findOrFail($id);
        if($request->hasFile("service_img")){
           if (File::exists("upload/service".$service->service_img)) {
               File::delete("upload/service".$service->service_img);
           }
           $file=$request->file("service_img");
           $service->service_img=time()."_".$file->getClientOriginalName();
           $file->move(\public_path("upload/service"),$service->service_img);
           $request['service_img']=$service->service_img;
       }

     $service->update([
        "service_title" =>$request->service_title,
        "service_short_desc" =>$request->service_short_desc,
        "service_img" =>$service->service_img,
        "service_cat" =>$request->service_cat,
        "service_status" =>$request->service_status,

    ]);

     if($request->hasFile("images")){
        $files=$request->file("images");
        foreach($files as $file){
            $imageName=time().'_'.$file->getClientOriginalName();
            $request["service_id"]=$id;
            $request["image"]=$imageName;
            $file->move(\public_path("upload/gallery"),$imageName);
            ImageGallery::create($request->all());

        }
    }
    return redirect()->back()->with('status', 'Service Updated Successfully!');
}
    // public function update(Request $request, $id)
    // {
    //     $service = Service::find($id);
    //     $service->service_title = $request->input('service_title');
    //     $service->service_short_desc = $request->input('service_short_desc');

    //     if($request->hasfile('service_img')){
    //         $destination='upload/service/'.$service->service_img;
    //         if (File::exists($destination)) {
    //             File::delete($destination);
    //         }
    //         $file = $request->file('service_img');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = time().'.'.$extension;
    //         $file->move('upload/service/', $filename);
    //         $service->service_img = $filename;
    //     }
    //     $service->service_cat = $request->input('service_cat');
    //     $service->service_status = $request->input('service_status');

    //     $service->update();
    //     return redirect()->back()->with('status', 'Service Updated Successfully!');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service=Service::findOrFail($id);
        if (File::exists("upload/service/".$service->service_img)) {
           File::delete("upload/service/".$service->service_img);
       }
       $images=ImageGallery::where("service_id",$service->id)->get();
         foreach($images as $img){
         if (File::exists("upload/gallery/".$img->image)) {
            File::delete("upload/gallery/".$img->image);
        }
         }
    $service->delete();
    return redirect()->back()->with('status', 'Service Deleted Successfully!');
}
     public function DeleteImage($id){
        $images=ImageGallery::findOrFail($id);
        if (File::exists("upload/gallery/".$images->image)) {
           File::delete("upload/gallery/".$images->image);
       }
       ImageGallery::find($id)->delete();
       return redirect()->back()->with('status', 'Image Deleted Successfully!');
   }

}
