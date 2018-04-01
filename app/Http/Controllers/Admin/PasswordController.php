<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\User;
class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        return view('admin.pages.profile.password.profile');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function edit($id)
    {
        $admin = User::find($id);
        return view('admin.pages.profile.password.edit', compact('admin'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $password = User::all();
        request()->validate([
            'oldpassword' => 'required',
            'password' => 'required',
            'repassword' => 'required',
        ]);
        foreach ($password as $value) {
           
       
            if($value->password == $request->oldpassword){
                if($request->password == $request->repassword){
                    $data = [
                        'password' => bcrypt('$request->password'),
                        'repassword' => bcrypt('$request->repassword'),
                    ];
                    User::find($id)->update($data);
                    return redirect()->route('password.index')->with('success', 'პაროლი განახლებულია!');
                } else {
                    return redirect()->route('password.index');
                }
            } else {
                return redirect()->route('password.index');
            }
        }
    }
    
}