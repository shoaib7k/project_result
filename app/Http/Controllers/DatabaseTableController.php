<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Schema;
use Illuminate\Database\Schema\Blueprint;
class DatabaseTableController extends Controller
{
    //
    public function addcolumn($student_registrations,$sColumn)
    {
    	Schema::table($student_registrations,function(Blueprint $table) use ($sColumn,&$fluent)
    	{
    		$fluent=$table->string($sColumn);
    	});

    	return response()->json($fluent);
    }
}
