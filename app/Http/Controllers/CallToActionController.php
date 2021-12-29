<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CallToAction;
use App\Models\Setting;

class CallToActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting_data = Setting::latest('created_at')->first();
        $calltoaction_list = CallToAction::all();
        return view('admin/calltoaction/calltoaction', compact('calltoaction_list', 'setting_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting_data = Setting::latest('created_at')->first();
        return view('admin/calltoaction/add-calltoaction',compact('setting_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $call_to_action = new CallToAction;
        $call_to_action->call_to_action_title = $request->input('call_to_action_title');
        $call_to_action->call_to_action_desc = $request->input('call_to_action_desc');
        $call_to_action->save();
        return redirect()->back()->with('status', 'CallToAction Added Successfully!');
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
        $call_to_action_data= CallToAction::find($id);
        return view('admin/calltoaction/edit-calltoaction',compact('call_to_action_data', 'setting_data'));
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
        $call_to_action_data = CallToAction::find($id);
        $call_to_action_data->call_to_action_title = $request->input('call_to_action_title');
        $call_to_action_data->call_to_action_desc = $request->input('call_to_action_desc');
        $call_to_action_data->update();
        return redirect()->back()->with('status', 'CallToAction Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $call_to_action_item = CallToAction::find($id);
        $call_to_action_item->delete();
        return redirect()->back()->with('status', 'CallToAction Deleted Successfully!');
    }
}
