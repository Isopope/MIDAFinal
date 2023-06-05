<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

    public function foodupdate(Request $request,$id){
        $data=Food::findOrFail($id);
        $image=$request->file('food_picture')->getClientOriginalName();
        $request->file('food_picture')->move('food_picture',$image);
        $data->food_picture=$image;
        $data->food_name=$request->food_name;
        $data->food_price=$request->food_price;
        $data->food_desc=$request->food_desc;
        $data->restaurant_id=$data->restaurant_id;
        /*$data->resto_price=$request->resto_price;
        $data->resto_desc=$request->resto_desc;
        $data->adresse=$request->adresse;
        $data->user_id=Auth::id();*/
        $data->save();
       return redirect()->route('foodshow')->with('success', 'Nourriture mise à jour avec succès.');

    }

    public function foodshow(){
        $id_proprietaire=Auth::id();
        $food=DB::table('food')
        ->join('restaurants', 'restaurants.id', '=', 'food.restaurant_id')
        ->join('users', 'users.id', '=', 'restaurants.user_id')
        ->select('restaurants.*', 'users.*', 'food.*')
        ->where('users.id', '=', $id_proprietaire)
        ->orderBy('restaurants.resto_name', 'asc')
        ->get();
        return view ('adminview.repasshow',compact('food'));
    }

    public function foodupdateview($id){
        $data=Food::find($id);
        return view('adminview.foodupdateview',compact('data'));
    }
}
