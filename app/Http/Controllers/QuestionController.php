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
		$i = (int)session('i');



		
		if($q < 9 && $request->value == 'კი'){
			if($q%2) {
				$presult++;
			} else {
				$dresult++;
			}
		}
		if($q > 10 && $q < 15 && $request->value == 'კი'){
			if($q%2) {
				$presult+=2;
			} else {
				$dresult+=2;
			}
		}
		if($q > 14 && $q < 17 && $request->value == 'კი'){
			if($q%2) {
				$presult+=5;
			} else {
				$dresult+=5;
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
				$p = 0;
				$d = 0;
				if($dresult<2){
					$programing = Question::where([
						['subject', 'პროგრამირება'],
						['type', 'საკონტროლო']
					])->get();
					$subject = $programing[$p];
					$q++;
				} elseif($presult<2) {
					$design = Question::where([
						['subject', 'დიზაინი'],
						['type', 'საკონტროლო']
					])->get();
					$subject = $design[$d];
					$q++;
				}elseif($presult>$dresult){
					$programing = Question::where([
						['subject', 'პროგრამირება'],
						['type', 'საკონტროლო']
					])->get();
					$subject = $programing[$p];
					$q++;
				} else {
					$design = Question::where([
						['subject', 'დიზაინი'],
						['type', 'საკონტროლო']
					])->get();
					$subject = $design[$d];
					$q++;
					
				}

			} else {
				if($q==9){
					if($request->value == 'კი'){
						if($presult < 2){
							$answer = 'თქვენ დიზაინისთვის ხართ დაბადებული!';
							return view('result', ['answer' => $answer]);
						} 
						if ($dresult < 2){
							$answer = 'თქვენ პროგრამირებისთვის ხართ დაბადებული!';
							return view('result', ['answer' => $answer]);
						}

						$design = Question::where([
							['type', 'ხანგრძლივობის დასადგენი']
						])->get();
						$subject = $design[$d];
						$dresult = 0;
						$presult = 0;
						$q++;

					} else {
						$answer = 'ჯერ არაა შენი ამბავი გადაწყვეტილი!';
						return view('result', ['answer' => $answer]);
					}
				} elseif($q == 10) {
					if ($request->value == 'კი') {
						$i = 1;
					} else {
						$i = 2;
					}
				} 
				if (($q < 17) && ($i == 1)){
					$q++;
					
					$programing = Question::where([
						['subject', 'ინტერფეისის დიზაინი']
					])->get();
					$design = Question::where([
						['subject', '3D დიზაინი']
					])->get();


					
					if($p==$d){
						$subject = $programing[$p];
						$p++;
					} else {
						$subject = $design[$d];
						$d++;
					}
					
				}
				if($q > 17){
					if($presult < 3){
						$answer = 'არც შენი ამბავი გადამიწყვიტავს ჯერ!';
						return view('result', ['answer' => $answer]);
					} 
					if ($dresult < 3){
						$answer = 'არც შენი ამბავი გადამიწყვიტავს ჯერ!';
						return view('result', ['answer' => $answer]);
					}

				}

				/*if (($q < 13) && ($i == 2)){
					$q++;
					$programing = Question::where([
						['subject', 'ინტერფეისის დიზაინი']
					])->get();

					$design = Question::where([
						['subject', '3D დიზაინი']
					])->get();

					
					if($p==$d){
						$subject = $design[$d];
						$p++;
					} else {
						$subject = $programing[$p];
						$d++;
					}
					
					$q++;
				}*/
				
			}
			
			
		}



		return view('home', [
			'question' => $subject, 
			'p' => $p, 
			'd' => $d,
			'q' => $q,
			'i' => $i,
			'dresult' => $dresult, 
			'presult' => $presult,
		]);
	}
}

