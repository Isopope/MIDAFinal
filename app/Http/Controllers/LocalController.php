<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    //
    public function localUpload(Request $request){
        $data= new Local();
            /*$image=$request->resto_affiche;
            $imagename=time().'.'.$request->resto_affiche->getClientOriginalName();
            $request->image->move('resto_affiche',$imagename);
            $data->image=$imagename;*/
            
            $image=$request->file('local_photo')->getClientOriginalName();
            $request->file('local_photo')->move('local_photo',$image);
            $data->local_photo=$image;
            $data->restaurant_id=$request->input('restaurant_id');
            $data->save();
           return redirect()->back();

    }

    public function localshow(){
        $local= Local::all();
        return view('localdisplay',compact('local'));
    }

    public function localdelete($id){
        $local= Local::findOrFail($id);
        dd($local);
        $local->delete();
        return redirect()->back();
    }
}
