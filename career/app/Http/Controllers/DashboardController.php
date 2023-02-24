<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Agent;

class DashboardController extends Controller
{
     public function index(){
        return view('admin.dashboard.index');
    }
    public function index2(){
        return view('goodweb.index');
    }
    public function career(){
        return view('admin.dashboard.career');
    }
    public function career2(){
        return view('goodweb.career2');
    }
    public function about(){
        return view('goodweb.about-us');
    }
    public function layout(){
        return view('goodweb.layout');
    }
    public function contact(){
        return view('goodweb.contact');
    }
    public function fsd(){
        return view('goodweb.fsd');
    }
    public function msd(){
        return view('goodweb.msd');
    }
    public function sdp(){
        return view('goodweb.sdp');
    }
    public function sd(){
        return view('goodweb.sd');
    }
    public function store(Request $r)
    {
        $a = new Agent();
        $a->first_name = $r->first_name ;
        $a->last_name = $r->last_name;
        $a->email  = $r->email ;
        $a->phone  = $r->phone ;
        $a->comments  = $r->comments ;
        // $a->ag_branch_id = $r->branch;

        $pc  = time() . "-" . trim(str_replace(" ", "", $r->name)) . "." . $r->picture->extension();
        $r->picture->move(public_path('agent_pic/'), $pc);
        $a->ag_picture = 'agent_pic/' . $pc;

        $a->save();

        return back()->with('message', "Agent Created Successfully");
    }
}
