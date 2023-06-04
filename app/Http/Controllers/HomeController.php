<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Local;
use App\Models\Restaurant;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function RedirigerVers(){
        $restaurants=Restaurant::all()->take(10);
        $user_role=Auth::User()->user_role;

        if($user_role==='client'){
            return view('/index',compact('restaurants'));
        }else{
            return view('/adminview.adminview');
        }
    }

    public function restaurantview(){
        return view('/adminview.restaurant');
    }

    public function repasview(){
        $id_proprietaire=Auth::id();
        $restaurants= DB::select(DB::raw("SELECT restaurants.resto_name as resto_name , restaurants.id as resto_id FROM restaurants join users on restaurants.user_id=users.id where users.id=$id_proprietaire"));
        return view('/adminview.repas',compact('restaurants'));
    }

    public function localview(){
        $id_proprietaire=Auth::id();
        $restaurants= DB::select(DB::raw("SELECT restaurants.resto_name as resto_name , restaurants.id as resto_id FROM restaurants join users on restaurants.user_id=users.id where users.id=$id_proprietaire"));
        return view('/adminview.local',compact('restaurants'));
    }

    public function reservationsview(){
        $id_client=Auth::id();
        //$reservation=Reservation::join('restaurants','restaurants.id','=','reservations.restaurant_id')->join('users','users.id','=','reservations.user_id')->get('reservations.*','users.*','restaurants.*');
        $reservations=DB::select(DB::raw("SELECT  reservations.id as id_reservation,users.name as username,users.email as useremail,reservations.reservation_date as reservation_date, reservations.reservation_state as reservation_state,reservations.reservation_comment as reservation_comment,restaurants.resto_name as reservation_resto_name FROM reservations join restaurants on reservations.restaurant_id=restaurants.id join users on reservations.user_id=users.id where  reservations.user_id=$id_client"));
        
        return view('/reservationsclient',compact('reservations'));
    }

    public function deleteReservation($id){
        $deleteRes=Reservation::findOrFail($id);
        $deleteRes->delete();
        return redirect()->back();
        
    }

    public function searchrestaurant(Request $request){
        if($request->search){
            $searchrestaurant=Restaurant::where('resto_name','LIKE', '%'.$request->search.'%')->latest()->paginate(10); 
            //dd($searchrestaurant);
            return view('searchresult',compact('searchrestaurant'));
        }else{
            return redirect()->back()->with('message','restaurant non trouvé'); 
        }

    }

    public function detailView($id){
        $restaurant=Restaurant::findOrFail($id);
        $locals=Local::where('restaurant_id','=',$id)->get();
        $repas=Food::where('restaurant_id','=',$id)->get();
        //dd($local,$repas,$data);
        return view('restodetail',compact('restaurant','locals','repas'));
    }
}
