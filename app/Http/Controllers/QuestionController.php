<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    public function showQuestion(Request $request){
    	$question = Question::all();
    	if(count($request->value)==0){
    		$k = 0;
    		return view('home', ['question' => $question, 'k' => $k]);
    	} else {
    		$k = (int)session('question') + 1;
    		return view('home', ['question' => $question, 'k' => $k]);
    	}
    }
}
