<?php

namespace App\Http\Controllers\AdminAuth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class AuthController extends Controller
{
    use AuthenticatesUsers;

    protected $username = 'username';
    protected $redirectTo = '/admin/dashboard';
    protected $guard = 'admin';

    public function showLoginForm(){
        if(Auth::check()){
            return redirect('/admin/dashboard');
        }
        return view('login');
    }


    public function logout(){
        Auth::logout();
        return redirect('/admin');
    }
}
