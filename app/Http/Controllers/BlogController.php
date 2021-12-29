<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Setting;

use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $setting_data = Setting::latest('created_at')->first();
        $blogs = Blog::all();
        return view('admin/blog/blogs', compact('blogs','setting_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting_data = Setting::latest('created_at')->first();
        return view('admin/blog/add-blog', compact('setting_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->desc = $request->input('desc');
        if($request->hasfile('img')){
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/blog', $filename);
            $blog->img = $filename;
        }
        $blog->quotes = $request->input('quotes');
        $blog->author_name = $request->input('author_name');

        $blog->save();
        return redirect()->back()->with('status', 'Blog Info Added Successfully!');
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
        $blog_data = Blog::find($id);
        return view('admin/blog/edit-blog', compact('blog_data', 'setting_data'));
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
        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->desc = $request->input('desc');
        if($request->hasfile('img')){
            $destination='upload/blog/'.$blog->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/blog/', $filename);
            $blog->img = $filename;
        }
        $blog->quotes = $request->input('quotes');
        $blog->author_name = $request->input('author_name');

        $blog->update();
        return redirect()->back()->with('status', 'Blog Info Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $destination='upload/blog/'.$blog->img;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $blog->delete();
        return redirect()->back()->with('status', 'Blog Deleted Successfully!');
    }
}
