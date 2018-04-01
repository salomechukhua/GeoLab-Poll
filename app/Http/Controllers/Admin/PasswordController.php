<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\User;
class PasswordController extends Controller
{
    
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
        
        request()->validate([
            'password' => 'required',
            'repassword' => 'required',
        ]);
        
        if($request->password == $request->repassword){
            $data = [
                'password' => bcrypt('$request->password'),
                'repassword' => bcrypt('$request->repassword'),
            ];
            User::find($id)->update($data);
            return redirect()->route('profile.index')->with('success', 'პაროლი განახლებულია!');
        } else {
            return redirect()->route('profile.index');
        }
    }
    
}