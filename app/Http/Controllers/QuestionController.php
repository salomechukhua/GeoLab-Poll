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
		$presult = (int)session('presult');
		$dresult = (int)session('dresult');


		
		if($request->value == 'კი'){
			if ($q%2) {
				$presult++;
			} else {
				$dresult++;
			}
		}

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
			
			if($q==8){
				if($dresult<2){
					$programing = Question::where([
						['subject', 'პროგრამირება'],
						['type', 'საკონტროლო']
					])->get();
					$subject = $programing[0];
					$q++;
				}

				if($presult<2){
					$design = Question::where([
						['subject', 'დიზაინი'],
						['type', 'საკონტროლო']
					])->get();
					$subject = $design[0];
					$d = 1;
					$q++;
				}

				if($presult>$dresult){
					$programing = Question::where([
						['subject', 'პროგრამირება'],
						['type', 'საკონტროლო']
					])->get();
					$subject = $programing[0];
					$q++;
				} else {
					$design = Question::where([
						['subject', 'დიზაინი'],
						['type', 'საკონტროლო']
					])->get();
					$subject = $design[0];
					$d = 1;
					$q++;
					
				}

			} else {
				if($q==9){
					if($request->value == 'კი'){
						if($presult<2 || $dresult<2){
							if ($d == 1) {
								$answer = 'თქვენ დიზაინისთვის ხართ დაბადებული!';
							} else {
								$answer = 'თქვენ პროგრამირებისთვის ხართ დაბადებული!';
							}
							return view('result', ['answer' => $answer]);
						} else {
							$design = Question::where([
								['type', 'ხანგრძლივობის დასადგენი']
							])->get();
							$subject = $design[0];
						}
						
					} 
				}
				
			}
			
			
		}



		return view('home', [
			'question' => $subject, 
			'p' => $p, 
			'd' => $d,
			'q' => $q,
			'dresult' => $dresult, 
			'presult' => $presult,
		]);
	}
}

