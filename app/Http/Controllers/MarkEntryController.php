<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PDF;
use App\Http\Requests;
use App\Mark_entry;

class MarkEntryController extends Controller
{
    //
    public function create()
    {
    	return view('mark_entrys.create');
    }

    public function pdfview(Request $request){
       /* $items = DB::table("items")->get();
        view()->share('items',$items);*/

        if($request->has('download')){
            $pdf = PDF::loadView('pdfview');
            return $pdf->download('pdfview.pdf');
        }

        return view('pdfview');
    }

   
   public function store(Request $request)
    {
       /* $this->validate($request,[
            'name' => 'required|min:4',
            'fname' => 'required',
            'rollno' => 'required|unique:students'
        ]);*/
        $input = $request->all();
        $condition = $input['rollno'];
        foreach ($condition as $key => $condition) {
            $student = new Mark_entry;
           // $student->name = $input['name'][$key];
            //$student->fname = $input['fname'][$key];

            $student->id = $input['rollno'][$key];
            $student->course_code=$input['coursecode'];
            $student->course_credit=$input['coursecredit'];
            $cc=$student->coursecredit;
            $student->tutorial=$input['tutorialmarks'][$key];
            $student->exam_marks1 = $input['obtainedmarks'][$key];
            $student->exam_marks2 = $input['totalmarks'][$key];
            $student->totalmarks = $input['percentage'][$key];

        $grad=$student->totalmarks;
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
    

        $student->grade=$grad;
        $student->grade_point=$gp;
        $student->point_secured=$gp*$input['coursecredit'];
            $student->save();
        }
        //return Redirect::to('/mark_entry');
    }

    public function show($id)
    {
        $stud_sho=Mark_entry::all();
        //return $stud_store;
        return view('mark_entrys.show')->with('stud_sho',$stud_sho);
    }

    public function destroy($serial)
    {
      //$stud_del=Student_result::find($serial)
       // ->delete();
        $stud_del=Mark_entry::where('serial','=',$serial)
              ->delete();


    }

     public function printPreview()
    {
      $products=Mark_entry::all();
      return view('printPreview')->with('products',$products);
    }


}
