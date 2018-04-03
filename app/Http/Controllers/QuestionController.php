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
		
		$k = $request->value;
		if($q < 8) {
			$programing = Question::where([
				['subject', 'პროგრამირება'],
				['type', 'შესავალი']
			])->get();

			$design = Question::where([
				['subject', 'დიზაინი'],
				['type', 'შესავალი']
			])->get();

			if($q==0){
				$subject = $programing[$p];
				$q++;
			} else {
				$q++;
				if($p==$d){
					$subject = $design[$d];
					$p++;
				} else {
					$subject = $programing[$p];
					$d++;
				}
			}
		} else {
			return view('result');
		}



		return view('home', [
			'question' => $subject, 
			'p' => $p, 
			'd' => $d, 
			'k' => $k, 
			'q' => $q]);
	}
}
