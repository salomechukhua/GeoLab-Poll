<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
	public function showQuestion(Request $request){
		

		$programing = (int)session('programing');
		$design = (int)session('design');
		$quantityOfQuestions = (int)session('quantityOfQuestions');
		$programing_result = (int)session('programing_result');
		$design_result = (int)session('design_result');
		$duration = (int)session('duration');
		




		if ($quantityOfQuestions == 0) {
			$quantityOfQuestions = 1;
		} else {
			$quantityOfQuestions ++;
		}

		if($quantityOfQuestions > 1 && 
			$quantityOfQuestions < 9 && 
			$request->value == 'კი') {
			if($quantityOfQuestions%2) {
				$design_result ++;
			} else {
				$programing_result ++;
			}
		}

		if($duration == 'ხანგრძლივი' &&
			$quantityOfQuestions > 11 && 
			$quantityOfQuestions < 18 && 
			$request->value == 'კი') {
			if($quantityOfQuestions == 12 || $quantityOfQuestions == 14) {
				$design_result += 2;
			}
			if($quantityOfQuestions == 13 || $quantityOfQuestions == 15) {
				$programing_result += 2;
			}
			if($quantityOfQuestions == 16){
				$design_result += 5;
			}
			if($quantityOfQuestions == 17){
				$programing_result += 5;
			}
		}

		if ($quantityOfQuestions <= 8) {
			$questionsFromPrograming = Question::where([
				['subject', 'პროგრამირება'],
				['type', 'შესავალი']
			])->get();

			$questionsFromDesign = Question::where([
				['subject', 'დიზაინი'],
				['type', 'შესავალი']
			])->get();

			if ($programing == $design) {								// უზრუნველყოფს პროგრამირების
				$question = $questionsFromPrograming[$programing];		// და დიზაინის 
				$programing ++;											// მიმართულებებიდან
			} else {													// კითხვების
				$question = $questionsFromDesign[$design];				// მონაცვლეობით
				$design ++;												// გამოტანას.
			}
		}

		if ($quantityOfQuestions == 9) {

			$programing = 0;
			$design = 0;


			if($programing_result > 2 && $design_result < 2){  			// პროგრამირებიდან 3, ან მეტი,
				$answer = 'თქვენ პროგრამირებისთვის ხართ დაბადებული!';		// ხოლო დიზაინიდან 1, ან ნაკლები
				return view('result', ['answer' => $answer]);			// დადებითი პასუხის შემთხვევაში 
			}															// გამოაქვს პასუხი: პროგრამირება.


			if($design_result > 2 && $programing_result < 2){ 			// დიზაინიდან 3, ან მეტი,
				$answer = 'თქვენ დიზაინისთვის ხართ დაბადებული!';			// ხოლო პროგრამირებიდან 1, ან ნაკლები
				return view('result', ['answer' => $answer]);			// დადებითი პასუხის შემთხვევაში
			}															// გამოაქვს პასუხი: დიზაინი.


			if ($design_result < 2) {									// დიზაინიდან 1, ან ნაკლები დადებითი
				$questionsFromPrograming = Question::where([			// პასუხის შემთხვევაში, როცა არც 
					['subject', 'პროგრამირება'],							// პროგრამირებაშია 2-ზე მეტი ქულა, ისმევა
					['type', 'საკონტროლო']								// საკონტროლო კითხვა პროგრამირებიდან.
				])->get();
				$question = $questionsFromPrograming[$programing];
			} elseif ($programing_result < 2){       					// პროგრამირებიდან 1, ან ნაკლები დადებითი 
				$questionsFromDesign = Question::where([				// პასუხის შემთხვევაში, როცა არც 
					['subject', 'დიზაინი'],								// დიზაინიდანაა 2-ზე მეტი ქულა, ისმევა 
					['type', 'საკონტროლო']								// საკონტროლო კითხვა დიზაინიდან.
				])->get();
				$question = $questionsFromDesign[$design];
			} else {													
				if ($design_result > $programing_result) {				// თუ დიზაინიდან უფრო მეტ კითხვას
					$questionsFromDesign = Question::where([			// გასცა დადებითი პასუხი,
						['subject', 'დიზაინი'],							// დაისმება საკონტროლო კითხვა
						['type', 'საკონტროლო']							// დიზაინიდან.
					])->get();
					$question = $questionsFromDesign[$design];
				} else {												// თუ პროგრამირებიდან უფრო მეტ კითხვას
					$questionsFromPrograming = Question::where([		// გასცა დადებითი პასუხი, ან თანაბარი დადებითი	
						['subject', 'პროგრამირება'],						// პასუხები ორივე მიმართულებიდან თანაბრადაა, 
						['type', 'საკონტროლო']							// დაისმება საკონტროლო კითხვა პროგრამირებიდან.	
					])->get();
					$question = $questionsFromPrograming[$programing];
				}
			}
		}

		if ($quantityOfQuestions == 10) {	

			if($request->value == 'არა')	{
				if ($design_result < 2) {
					$answer = 'თქვენ პროგრამირებისთვის ხართ დაბადებული!';	
					return view('result', ['answer' => $answer]);
				}

				if ($programing_result < 2) {
					$answer = 'თქვენ დიზაინისთვის ხართ დაბადებული!';	
					return view('result', ['answer' => $answer]);
				}
			}

			$questionsFromPrograming = Question::where([				
				['type', 'ხანგრძლივობის დასადგენი']						
			])->get();
			$question = $questionsFromPrograming[$programing];
		}

		if ($quantityOfQuestions == 11){
			$design_result = 0;
			$programing_result = 0;
			if ($request->value == 'კი') {
				$duration = 'ხანგრძლივი';
			} else {
				$duration = 'ხანმოკლე';
			}
		}

		if($duration == 'ხანგრძლივი' && 
			$quantityOfQuestions > 10 && 
			$quantityOfQuestions < 17) 
		{

			$questionsFromPrograming = Question::where([
				['subject', 'ინტერფეისის დიზაინი'],
				['type', 'პროფესიული']
			])->get();


			$questionsFromDesign = Question::where([
				['subject', '3D დიზაინი'],
				['type', 'პროფესიული']
			])->get();


			if ($programing == $design) {								// უზრუნველყოფს ინტერფეისის დიზაინის
				$question = $questionsFromPrograming[$programing];		// და 3D დიზაინის 
				$programing ++;											// მიმართულებებიდან
			} else {													// კითხვების
				$question = $questionsFromDesign[$design];				// მონაცვლეობით
				$design ++;												// გამოტანას.
			}
		}

		if($quantityOfQuestions == 18 && $duration == 'ხანგრძლივი'){
			if($programing_result > 2 || $design_result > 2){
				if($programing_result > $design_result){
					$answer = 'თქვენ ინტერფეისის დიზაინისთვის ხართ დაბადებული!';	
					return view('result', ['answer' => $answer]);
				} else {
					$answer = 'თქვენ 3D დიზაინისთვის ხართ დაბადებული!';	
					return view('result', ['answer' => $answer]);
				}
				if($programing_result == $design_result){
					$answer = 'გამოვა ასარჩევი ვარიანტების მქონე კითხვა';	
					return view('result', ['answer' => $answer]);
				}
			}
		}

		if($duration == 'ხანმოკლე' && 
			$quantityOfQuestions > 10 && 
			$quantityOfQuestions < 20) 
		{

		}







		return view('home', [
			'question' => $question, 
			'programing' => $programing, 
			'design' => $design,
			'quantityOfQuestions' => $quantityOfQuestions,
			'programing_result' => $programing_result,
			'design_result' => $design_result, 
			'duration' => $duration, 
		]);
	}
}

