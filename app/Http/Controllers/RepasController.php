<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class RepasController extends Controller
{
    //
    public function foodUpload(Request $request){

       
        $data= new Food();
        /*$image=$request->resto_affiche;
        $imagename=time().'.'.$request->resto_affiche->getClientOriginalName();
        $request->image->move('resto_affiche',$imagename);
        $data->image=$imagename;*/
        
        $image=$request->file('food_picture')->getClientOriginalName();
        $request->file('food_picture')->move('food_picture',$image);
        $data->food_picture=$image;
        $data->food_name=$request->food_name;
        $data->food_price=$request->food_price;
        $data->food_desc=$request->food_desc;
        $data->restaurant_id=$request->input('restaurant_id');
        /*$data->resto_price=$request->resto_price;
        $data->resto_desc=$request->resto_desc;
        $data->adresse=$request->adresse;
        $data->user_id=Auth::id();*/
        $data->save();
       return redirect()->back();
    }

    public function fooddelete($id){
        $food=Food::findOrFail($id);
        $food->delete();
        return redirect()->back();
    }

    public function foodshow(){
        $food=Food::all();
        return view ('fooddisplay',compact('food'));
    }
}
