<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\User;
class ImageController extends Controller
{
    
    public function edit($id)
    {
        $admin = User::find($id);
        return view('admin.pages.profile.image.edit', compact('admin'));
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
            'image' => 'required',
        ]);
        $originalFile = " ";
        if($request->hasFile('image')){
            $file = $request->file('image');
            $destinationPath = public_path('img');
            $originalFile = $file->getClientOriginalName();
            $file->move($destinationPath, $originalFile);
        }
        
        
        $data = [
            
            'image' => $originalFile,
        ];
        User::find($id)->update($data);
        return redirect()->route('profile.index');
    }
    
}