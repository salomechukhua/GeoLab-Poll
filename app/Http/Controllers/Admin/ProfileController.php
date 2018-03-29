<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $admin = User::all(); 
        return view('admin.pages.profile.profile', ['admin'=>$admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]);


        User::create($request->all());
        return redirect()->route('pages.profile.index')->with('success', 'კითხვა დამატებულია!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$admin = User::find($id);
        return view('admin.pages.profile.show', compact('admin'));*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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

        $originalFile = " ";
        if($request->hasFile('image')){
            $file = $request->file('image');
            $destinationPath = public_path('img');
            $originalFile = $file->getClientOriginalName();
            $file->move($destinationPath, $originalFile);
        }
        
        
        $data = [
            'name' => $request->name,
            'image' => $originalFile,
            'email' => $request->email,
        ];
        User::find($id)->update($data);

        return redirect()->route('pages.profile.index')->with('success', 'პროფილი რედაქტირებულია!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('pages.profile.index')->with('success', 'კითხვა წაშლილია!');
    }
}
