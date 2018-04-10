<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
	public function showQuestion(Request $request){
		

		$first = (int)session('first');
		$second = (int)session('second');
		$third = (int)session('third');
		$quantityOfQuestions = (int)session('quantityOfQuestions');
		$firstCourseResult = (int)session('firstCourseResult');
		$secondCourseResult = (int)session('secondCourseResult');
		$thirdCourseResult = (int)session('thirdCourseResult');
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
				$secondCourseResult ++;
			} else {
				$firstCourseResult ++;
			}
		}

		if($duration == 'ხანგრძლივი' &&
			$quantityOfQuestions > 11 && 
			$quantityOfQuestions < 18 && 
			$request->value == 'კი') {
			if($quantityOfQuestions == 12 || $quantityOfQuestions == 14) {
				$secondCourseResult += 2;
			}
			if($quantityOfQuestions == 13 || $quantityOfQuestions == 15) {
				$firstCourseResult += 2;
			}
			if($quantityOfQuestions == 16){
				$secondCourseResult += 5;
			}
			if($quantityOfQuestions == 17){
				$firstCourseResult += 5;
			}
		}

		if($duration == 'ხანმოკლე'){

		}

		if ($quantityOfQuestions <= 8) {
			$firstCourse = Question::where([
				['subject', 'პროგრამირება'],
				['type', 'შესავალი']
			])->get();

			$secondCourse = Question::where([
				['subject', 'დიზაინი'],
				['type', 'შესავალი']
			])->get();

			if ($first == $second) {								// უზრუნველყოფს პროგრამირების
				$question = $firstCourse[$first];					// და დიზაინის 
				$first ++;											// მიმართულებებიდან
			} else {												// კითხვების
				$question = $secondCourse[$second];					// მონაცვლეობით
				$second ++;											// გამოტანას.
			}
		}

		if ($quantityOfQuestions == 9) {

			$first = 0;
			$second = 0;


			if($firstCourseResult > 2 && $secondCourseResult < 2){  	// პროგრამირებიდან 3, ან მეტი,
				$answer = 'თქვენ პროგრამირებისთვის ხართ დაბადებული!';		// ხოლო დიზაინიდან 1, ან ნაკლები
				return view('result', ['answer' => $answer]);			// დადებითი პასუხის შემთხვევაში 
			}															// გამოაქვს პასუხი: პროგრამირება.


			if($secondCourseResult > 2 && $firstCourseResult < 2){ 		// დიზაინიდან 3, ან მეტი,
				$answer = 'თქვენ დიზაინისთვის ხართ დაბადებული!';			// ხოლო პროგრამირებიდან 1, ან ნაკლები
				return view('result', ['answer' => $answer]);			// დადებითი პასუხის შემთხვევაში
			}															// გამოაქვს პასუხი: დიზაინი.


			if ($secondCourseResult < 2) {								// დიზაინიდან 1, ან ნაკლები დადებითი
				$firstCourse = Question::where([						// პასუხის შემთხვევაში, როცა არც 
					['subject', 'პროგრამირება'],							// პროგრამირებაშია 2-ზე მეტი ქულა, ისმევა
					['type', 'საკონტროლო']								// საკონტროლო კითხვა პროგრამირებიდან.
				])->get();
				$question = $firstCourse[$first];
			} elseif ($firstCourseResult < 2){       					// პროგრამირებიდან 1, ან ნაკლები დადებითი 
				$secondCourse = Question::where([						// პასუხის შემთხვევაში, როცა არც 
					['subject', 'დიზაინი'],								// დიზაინიდანაა 2-ზე მეტი ქულა, ისმევა 
					['type', 'საკონტროლო']								// საკონტროლო კითხვა დიზაინიდან.
				])->get();
				$question = $secondCourse[$second];
			} else {													
				if ($secondCourseResult > $firstCourseResult) {			// თუ დიზაინიდან უფრო მეტ კითხვას
					$secondCourse = Question::where([					// გასცა დადებითი პასუხი,
						['subject', 'დიზაინი'],							// დაისმება საკონტროლო კითხვა
						['type', 'საკონტროლო']							// დიზაინიდან.
					])->get();
					$question = $secondCourse[$second];
				} else {												// თუ პროგრამირებიდან უფრო მეტ კითხვას
					$firstCourse = Question::where([					// გასცა დადებითი პასუხი, ან თანაბარი დადებითი	
						['subject', 'პროგრამირება'],						// პასუხები ორივე მიმართულებიდან თანაბრადაა, 
						['type', 'საკონტროლო']							// დაისმება საკონტროლო კითხვა პროგრამირებიდან.	
					])->get();
					$question = $firstCourse[$first];
				}
			}
		}

		if ($quantityOfQuestions == 10) {	

			if($request->value == 'არა')	{
				if ($secondCourseResult < 2) {
					$answer = 'თქვენ პროგრამირებისთვის ხართ დაბადებული!';	
					return view('result', ['answer' => $answer]);
				}

				if ($firstCourseResult < 2) {
					$answer = 'თქვენ დიზაინისთვის ხართ დაბადებული!';	
					return view('result', ['answer' => $answer]);
				}
			}

			$firstCourse = Question::where([				
				['type', 'ხანგრძლივობის დასადგენი']						
			])->get();
			$question = $firstCourse[$first];
		}

		if ($quantityOfQuestions == 11){
			$secondCourseResult = 0;
			$firstCourseResult = 0;
			$thirdCourseResult = 0;
			$second = 0;
			$first = 0;
			$third = 0;

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

			$firstCourse = Question::where([
				['subject', 'ინტერფეისის დიზაინი'],
				['type', 'პროფესიული']
			])->get();


			$secondCourse = Question::where([
				['subject', '3D დიზაინი'],
				['type', 'პროფესიული']
			])->get();


			if ($first == $second) {								// უზრუნველყოფს ინტერფეისის დიზაინის
				$question = $firstCourse[$first];					// და 3D დიზაინის 
				$first ++;											// მიმართულებებიდან
			} else {												// კითხვების
				$question = $secondCourse[$second];					// მონაცვლეობით
				$second ++;											// გამოტანას.
			}
		}

		if($quantityOfQuestions == 18 && $duration == 'ხანგრძლივი'){
			if($firstCourseResult > 2 || $secondCourseResult > 2){
				if($firstCourseResult > $secondCourseResult){
					$answer = 'თქვენ ინტერფეისის დიზაინისთვის ხართ დაბადებული!';	
					return view('result', ['answer' => $answer]);
				} else {
					$answer = 'თქვენ 3D დიზაინისთვის ხართ დაბადებული!';	
					return view('result', ['answer' => $answer]);
				}
				if($firstCourseResult == $secondCourseResult){
					$answer = 'გამოვა ასარჩევი ვარიანტების მქონე კითხვა';	
					return view('result', ['answer' => $answer]);
				}
			}
		}
		if ($quantityOfQuestions > 17 && $duration == 'ხანგრძლივი') {
			$firstCourseResult = 0;
			$secondCourseResult = 0;
			$thirdCourseResult = 0;
			$first = 0;
			$second = 0;
			$duration = 'ხანმოკლე';
		}

		if($duration == 'ხანმოკლე' &&
			$quantityOfQuestions > 10){

				$firstCourse = Question::where([
					['subject', 'შრიფტის დიზაინი'],
					['type', 'პროფესიული']
				])->get();


				$secondCourse = Question::where([
					['subject', 'პოლიგრაფიული დიზაინი'],
					['type', 'პროფესიული']
				])->get();


				$thirdCourse = Question::where([
					['subject', 'ვიდეო გრაფიკა'],
					['type', 'პროფესიული']
				])->get();


				
				if($first == $second){
					if($second == $third){
						$question = $firstCourse[$first];
						$first ++;
					} else {
						$question = $thirdCourse[$third];
						$third ++;
					}
				} else {
					if($second == $third){
						$question = $secondCourse[$second];
						$second ++;
					}
				}

			}










	return view('home', [
		'question' => $question, 
		'first' => $first, 
		'second' => $second,
		'third' => $third,
		'quantityOfQuestions' => $quantityOfQuestions,
		'firstCourseResult' => $firstCourseResult,
		'secondCourseResult' => $secondCourseResult, 
		'thirdCourseResult' => $thirdCourseResult, 
		'duration' => $duration, 
	]);
}
}

