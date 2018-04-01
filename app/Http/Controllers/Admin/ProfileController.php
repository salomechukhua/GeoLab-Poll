<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\User;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::all(); 
        return view('admin.pages.profile.profile', ['admins'=>$admins]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function edit($id)
    {
        $admin = User::find($id);
        return view('admin.pages.profile.edit', compact('admin'));
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
            'name' => 'required',
            'email' => 'required',
        ]);
        
        
        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];
        User::find($id)->update($data);
        return redirect()->route('profile.index')->with('success', 'პირადი მონაცემები განახლებულია!');
    }
    
}