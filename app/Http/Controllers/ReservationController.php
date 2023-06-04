<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    //
    public function reservationview(){
        $id_proprietaire=Auth::id();
        //$reservation=Reservation::join('restaurants','restaurants.id','=','reservations.restaurant_id')->join('users','users.id','=','reservations.user_id')->get('reservations.*','users.*','restaurants.*');
        $reservations=DB::select(DB::raw("SELECT reservations.id as id_reservation,users.name as username,users.email as useremail,reservations.reservation_date as reservation_date, reservations.reservation_state as reservation_state,reservations.reservation_comment as reservation_comment,restaurants.resto_name as reservation_resto_name FROM reservations join restaurants on reservations.restaurant_id=restaurants.id join users on reservations.user_id=users.id where  restaurants.user_id=$id_proprietaire"));
        //dd($re);
        //$specifique=$reservation->where();
        return view('/adminview.reservation',compact('reservations'));
    }

    public function updateState($id){
        $reservation_id=Reservation::findOrFail($id);
        $reservation_id->reservation_state=Reservation::STATE_ACCEPTER;
        $reservation_id->save();
        return redirect()->back();
    }

    //methode pour changer l'etat de reservation via le button refuser
    public function updateStateR($id){
        $reservation_id=Reservation::findOrFail($id);
        $reservation_id->reservation_state=Reservation::STATE_REFUSER;
        $reservation_id->save();
        return redirect()->back();
    }

    public function makeReservation(Request $request,$id){
        $data=new Reservation();
        $data->reservation_date=$request->reservation_date;
        $data->reservation_comment=$request->reservation_comment;
        $data->user_id=Auth::id();
        $data->restaurant_id=$id;// a revoir plus tard
        $data->save();
        return redirect()->back();
    }
}
