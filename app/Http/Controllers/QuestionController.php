<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
	public function showQuestion(Request $request){

		$p = (int)session('programing');
		$d = (int)session('design');
		$q = (int)session('question');
		

		$programing = Question::where([
			['subject', 'პროგრამირება'],
			['type', 'შესავალი']
		])->get();

		$design = Question::where([
			['subject', 'დიზაინი'],
			['type', 'შესავალი']
		])->get();

		if(count($q)==0){
			$q = 1;
			$p = 0;
			$subject = $programing[$p];
		} else {
			$q++;
			if($p!=$d){
				$d = $p;
				$subject = $design[$d];
			} else {
				$p++;
				$subject = $programing[$p];
			}
		}



		return view('home', [
			'question' => $subject, 
			'p' => $p, 
			'd' => $d, 
			'q' => $q]);
	}
}
