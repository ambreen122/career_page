<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
class CareerController extends Controller
{
    public function index(){
        $applicants = Applicant::all();
        return view('admin.careers.index',compact('applicants'));

    }
}
