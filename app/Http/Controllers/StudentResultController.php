<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;



use App\Http\Requests;
use App\Student_result;
class StudentResultController extends Controller
{
    //
    public function index()
    {
    	$student_results=Student_result::all();
    	//return $student_results;
    	return view('student_results.index')->with('student_results',$student_results);

    }
    public function create()
    {
    	return view('student_results.create');
    }


    public function edit($serial)
    {
      //$stud_sho=Student_result::find($id);
      $stud_sho=Student_result::where('serial','=',$serial);
      return view('student_results.edit',compact('stud_sho',$stud_sho));

    }


    public function update(Request $request,$serial)
    {
      $stud_result=Student_result::where('serial','=',$serial);
      $stud_result->id=$request->fieldname1;
        $stud_result->course_code=$request->fieldname2;
        $stud_result->tutorial=$request->tutorial;
        $stud_result->exam_marks=$request->exam_marks;
        $stud_result->number=$request->tutorial+$request->exam_marks; 

        $grad=$stud_result->number;
        if ($grad < 40)
             {
                 $grad = 'F';
                 $gp=0.00;   
             }
            else if ($grad<= 44 && $grad >=40)
            {
                $grad = 'D';
                $gp=2.00;
            }
            else if ($grad <= 49 && $grad >=45)
          {
              $grad = 'C';
              $gp=2.25;
          }
            else if ($grad<= 54 && $grad >=50)
            {
                 $grad = 'C+';
                 $gp=2.50;
            }
             else if ($grad <= 59 && $grad >=55)
            {
                 $grad = 'B-'; 
                 $gp=2.75;
            }
             else if ($grad <= 64 && $grad >=60)
           {
               $grad = 'B';
               $gp=3.00;
           }
              else if ($grad <= 69 && $grad >=65)
           {
               $grad = 'B+';
               $gp=3.25;
           }
             else if ($grad <= 74 && $grad >=70)
           {
               $grad = 'A-';
               $gp=3.50;
           }
             else if ($grad <= 79 && $grad >=75)
           {
               $grad = 'A';
               $gp=3.75;
           }
            else if ($grad >= 80)
          {
             $grad = 'A+';
             $gp=4.00;
          }
    

        $stud_result->grade=$grad;
        $stud_result->grade_point=$gp;

        /*$stud_result->CSE-102=$request->fieldname3;
        $stud_result->CSE-103=$request->filedname4;

*/
        $stud_result->save();
        return "Inserted";


      

    }

    public function store(Request $request)
    {
        //dd($request);
        $stud_result=new Student_result;
        $stud_result->id=$request->fieldname1;
        $stud_result->course_code=$request->fieldname2;
        $stud_result->tutorial=$request->tutorial;
        $stud_result->exam_marks=$request->exam_marks;
        $stud_result->number=$request->tutorial+$request->exam_marks; 

        $grad=$stud_result->number;
        if ($grad < 40)
             {
                 $grad = 'F';
                 $gp=0.00;   
             }
            else if ($grad<= 44 && $grad >=40)
            {
                $grad = 'D';
                $gp=2.00;
            }
            else if ($grad <= 49 && $grad >=45)
          {
              $grad = 'C';
              $gp=2.25;
          }
            else if ($grad<= 54 && $grad >=50)
            {
                 $grad = 'C+';
                 $gp=2.50;
            }
             else if ($grad <= 59 && $grad >=55)
            {
                 $grad = 'B-'; 
                 $gp=2.75;
            }
             else if ($grad <= 64 && $grad >=60)
           {
               $grad = 'B';
               $gp=3.00;
           }
              else if ($grad <= 69 && $grad >=65)
           {
               $grad = 'B+';
               $gp=3.25;
           }
             else if ($grad <= 74 && $grad >=70)
           {
               $grad = 'A-';
               $gp=3.50;
           }
             else if ($grad <= 79 && $grad >=75)
           {
               $grad = 'A';
               $gp=3.75;
           }
            else if ($grad >= 80)
          {
             $grad = 'A+';
             $gp=4.00;
          }
    

        $stud_result->grade=$grad;
        $stud_result->grade_point=$gp;

        /*$stud_result->CSE-102=$request->fieldname3;
        $stud_result->CSE-103=$request->filedname4;

*/
        $stud_result->save();
        return "Inserted";

    }

   



    public function show($id)
    {
        $stud_sho=Student_result::all();
        //return $stud_store;
        return view('student_results.show')->with('stud_sho',$stud_sho);
    }

    public function destroy($serial)
    {
      //$stud_del=Student_result::find($serial)
       // ->delete();
        $stud_del=Student_result::where('serial','=',$serial)
              ->delete();


    }
}
