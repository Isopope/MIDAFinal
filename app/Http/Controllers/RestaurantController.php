<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    //
    public function restaurantUpload(Request $request){
       
        $data= new Restaurant();
        /*$image=$request->resto_affiche;
        $imagename=time().'.'.$request->resto_affiche->getClientOriginalName();
        $request->image->move('resto_affiche',$imagename);
        $data->image=$imagename;*/
        $request->validate([
            'resto_affiche' => 'required|mimes:jpg,jpeg,png|max:2048'
            ]);
        $image=$request->file('resto_affiche')->getClientOriginalName();
        $request->file('resto_affiche')->move('resto_affiche',$image);
        $data->resto_affiche=$image;
        $data->resto_name=$request->resto_name;
        $data->resto_phone=$request->resto_phone;
        $data->resto_email=$request->resto_email;
        $data->resto_price=$request->resto_price;
        $data->resto_desc=$request->resto_desc;
        $data->adresse=$request->adresse;
        $data->user_id=Auth::id();
        $data->save();
       return redirect()->back();
    }
}
