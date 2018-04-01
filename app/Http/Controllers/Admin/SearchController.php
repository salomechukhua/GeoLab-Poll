<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $question = 
        Question::where('question', 'like', '%'.$request->results.'%')
        ->orWhere('subject', 'like', '%'.$request->results.'%')
        ->orWhere('type', 'like', '%'.$request->results.'%')
        ->orWhere('value', 'like', '%'.$request->results.'%')
        ->get(); 

        if(count($question) > 0){
        	return view('admin.questions.index', ['question'=>$question]);
        } else {
        	return view('admin.questions.error');
        }
    }
}
