<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Feature;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\CallToAction;
use App\Models\Contact;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Category;


class FrontEndController extends Controller
{
    public function Home(){
        $setting_data = Setting::latest('created_at')->first();
        $slider_data = Slider::all();
        return view('frontend.index', compact('setting_data', 'slider_data'));
    }
    public function About(){
        $setting_data = Setting::latest('created_at')->first();
        $about_data = Feature::all();
        $team_data = Team::all();
        $testimonial_data = Testimonial::all();
        $call_to_ation_data = CallToAction::latest('created_at')->first();
        return view('frontend.about', compact('setting_data', 'about_data', 'team_data','testimonial_data', 'call_to_ation_data'));
    }
    public function Works(){
        $service_data = Service::all();
        $setting_data = Setting::latest('created_at')->first();
        $call_to_ation_data = CallToAction::latest('created_at')->first();
        $cat_data = Category::all();
        return view('frontend.portfolio', compact('service_data', 'setting_data','call_to_ation_data','cat_data'));
    }
    public function SingleProject($id){
        $project_details_data = Service::find($id);
        $setting_data = Setting::latest('created_at')->first();
        $call_to_ation_data = CallToAction::latest('created_at')->first();
        return view('frontend.project-details', compact('project_details_data', 'setting_data','call_to_ation_data'));
    }
    public function CaseDetails($id){
        $case_details_data = Slider::find($id);
        $setting_data = Setting::latest('created_at')->first();
        $call_to_ation_data = CallToAction::latest('created_at')->first();
        return view('frontend.case-details', compact('case_details_data','setting_data','call_to_ation_data'));
    }
    public function Contact(){
        $setting_data = Setting::latest('created_at')->first();
        $call_to_ation_data = CallToAction::latest('created_at')->first();
        return view('frontend.contact', compact('setting_data','call_to_ation_data'));
    }

    public function Send_Message(Request $request){
        $contat = new Contact;
        $contat->first_name = $request->input('first_name');
        $contat->last_name = $request->input('last_name');
        $contat->email = $request->input('email');
        $contat->phone = $request->input('phone');
        $contat->message = $request->input('message');
        $contat->save();
        return redirect()->back()->with('status', 'Your Message Successfully!');
    }
    public function Blog(){
        $blog_data = Blog::all();
        $setting_data = Setting::latest('created_at')->first();
        $call_to_ation_data = CallToAction::latest('created_at')->first();
        return view('frontend.blog', compact('blog_data', 'setting_data','call_to_ation_data'));
    }
    public function BlogDetails($id){
        $blog_details_data = Blog::find($id);
        $setting_data = Setting::latest('created_at')->first();
        $call_to_ation_data = CallToAction::latest('created_at')->first();
        return view('frontend.blog-details', compact('blog_details_data', 'setting_data','call_to_ation_data'));
    }
}
