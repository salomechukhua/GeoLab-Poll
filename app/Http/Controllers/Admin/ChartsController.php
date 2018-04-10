<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Charts;
use App\Question;

class ChartsController extends Controller
{
    public function index(){

    	$chart1 = Charts::database(Question::all(), 'bar', 'highcharts')
	    ->elementLabel("Total")
	    ->dimensions(1000, 500)
	    ->responsive(true)
	    ->groupBy('subject');

	    $chart2 = Charts::database(Question::all(), 'pie', 'highcharts')
	    ->elementLabel("Total")
	    ->dimensions(1000, 500)
	    ->responsive(true)
	    ->groupBy('subject');

    	return view('admin.pages.charts', ['chart1' => $chart1, 'chart2' => $chart2]);
    }
}
