<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;

class SearchController extends Controller
{ 
    public function index(Request $request)
    {
        $search = 
        Question::where('question', 'like', '%'.$request->search.'%')
        ->orWhere('subject', 'like', '%'.$request->search.'%')
        ->orWhere('type', 'like', '%'.$request->search.'%')
        ->orWhere('value', 'like', '%'.$request->search.'%')
        ->get(); 

        if(count($search) > 0){
        	return view('admin.questions.search', ['search'=>$search]);
        } else {
        	return view('admin.questions.error');
        }
    }
}
