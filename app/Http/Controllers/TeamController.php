<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Setting;

use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $setting_data = Setting::latest('created_at')->first();
        $team_member = Team::all();
        return view('admin/about/team/team', compact('team_member','setting_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting_data = Setting::latest('created_at')->first();
        return view('admin/about/team/add-team', compact('setting_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = new Team;
        $team->name = $request->input('name');
        $team->designation = $request->input('designation');
        if($request->hasfile('profile_img')){
            $file = $request->file('profile_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/team', $filename);
            $team->profile_img = $filename;
        }

        $team->save();
        return redirect()->back()->with('status', 'Team Member Added Successfully!');
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
        $team_data = Team::find($id);
        return view('admin/about/team/edit-team', compact('team_data', 'setting_data'));

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
        $team = Team::find($id);
        $team->name = $request->input('name');
        $team->designation = $request->input('designation');

        if($request->hasfile('profile_img')){
            $destination='upload/team/'.$team->profile_img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('profile_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/team/', $filename);
            $team->profile_img = $filename;
        }

        $team->update();
        return redirect()->back()->with('status', 'Team Info Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        $destination='upload/team/'.$team->profile_img;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $team->delete();
        return redirect()->back()->with('status', 'Team Deleted Successfully!');
    }
}
