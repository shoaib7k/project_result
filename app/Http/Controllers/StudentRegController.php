<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student_registration;

class StudentRegController extends Controller
{
    public function index()
    {
    	$stud_reg=Student_registration::all();
    	//return $stud_reg;
    	return view('student_registrations.index')->with('stud_reg',$stud_reg);
    }

    public function create()
    {
    	return view('student_registrations.create');
    }

    public function store(Request $request)
    {
    	//dd($request);
    	$stud_reg=new Student_registration;
    	$stud_reg->id=$request->id;
    	$stud_reg->name=$request->name;
    	$stud_reg->session=$request->session;
    	$stud_reg->current_semester=$request->current_semester;

    	$stud_reg->save();
    	return "Inserted";

    }
}

