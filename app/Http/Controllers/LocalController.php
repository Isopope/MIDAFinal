<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $id_proprietaire=Auth::id();
        $local= DB::table('locals')
        ->join('restaurants', 'restaurants.id', '=', 'locals.restaurant_id')
        ->join('users', 'users.id', '=', 'restaurants.user_id')
        ->select('restaurants.*', 'users.*', 'locals.*')
        ->where('users.id', '=', $id_proprietaire)
        ->orderBy('restaurants.resto_name', 'asc')
        ->get();
        return view('adminview.localshow',compact('local'));
    }

    public function localdelete($id){
        $local= Local::findOrFail($id);
        //dd($local);
        $local->delete();
        return redirect()->back();
    }

    
}
