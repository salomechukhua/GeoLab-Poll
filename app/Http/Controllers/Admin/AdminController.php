<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Charts;
use App\Question;

class AdminController extends Controller
{
    public function _construct(){
    	$this->middleware('admin');
    }


    public function dashboard(){

    	$chart1 = Charts::database(Question::all(), 'bar', 'highcharts')
	    ->elementLabel("Total")
	    ->dimensions(1000, 500)
	    ->responsive(true)
	    ->groupBy('subject');

	    $question = Question::paginate(10);

    	return view('admin.pages.home', ['chart1' => $chart1, 'question' => $question]);
    }
}
