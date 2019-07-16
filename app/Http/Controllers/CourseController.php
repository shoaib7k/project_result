<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Course;
class CourseController extends Controller
{
    //


     public function create()
    {
        
    	return view('courses.create');
    }

    public function store(Request $request)
    {
        //dd($request);
        $stud_result=new Course;
        $stud_result->course_code=$request->fieldname1;
        $stud_result->course_name=$request->fieldname2;
        $stud_result->course_semester=$request->course_semester;

        $stud_result->save();
        return "Inserted";

    }


    public function show($id)
    {
        $countries = \DB::table('courses')->lists('course_name', 'course_code');
        return view('courses.show')->with('countries', $countries);
    }


}
