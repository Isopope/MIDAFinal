<?php

use App\Models\Restaurant;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\RepasController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $restaurants=Restaurant::all()->take(10);
    return view('index',compact('restaurants'));
});

Route::post('/restaurantUpload',[RestaurantController::class,'restaurantUpload']);
Route::get('/RedirigerVers',[HomeController::class,'RedirigerVers'])->name('RedirigerVers');
Route::get('/restaurant',[HomeController::class,'restaurantview'])->name('restaurant');
Route::get('/repas',[HomeController::class,'repasview'])->name('repasview');
Route::get('/local',[HomeController::class,'localview'])->name('localview');
Route::get('/reservation',[ReservationController::class,'reservationview'])->name('reservation');
Route::get('/reservation/{id}/updateState', [ReservationController::class,'updateState'])->name('reservation.updateState');
Route::get('/reservation/{id}/updateStateR', [ReservationController::class,'updateStateR'])->name('reservation.updateStateR');
Route::get('/reservations',[HomeController::class,'reservationsview'])->name('reservations');
Route::get('/reservations/{id}',[HomeController::class,'deleteReservation'])->name('reservations.deleteReservation');
Route::get('search',[HomeController::class,'searchrestaurant']);
Route::post('/foodUpload',[RepasController::class,'foodUpload']);
Route::post('/localUpload',[LocalController::class,'localUpload']);
//nouvelles routes ajouté en abscence de connexion et de pages d'affichage de restaurant details
Route::post('/makeReservation/{id}',[ReservationController::class,'makeReservation'])->name('makeReservation')->middleware('auth');
Route::get('/detailView/{id}',[HomeController::class,'detailView'])->name('reservation.detailView');

//routes pour modififer et supprimer une photo de local
Route::get('/localshow',[LocalController::class,'localshow'])->name('localshow');
Route::get('/localdelete/{id}',[LocalController::class,'localdelete'])->name('localdelete');

//routes pour modifier et supprimer un repas
Route::get('/fooddelete/{id}',[RepasController::class,'fooddelete'])->name('fooddelete');
//Route::get('/foodupdate/{id}',[RepasController::class,'foodupdate'])->name('foodupdate');
Route::put('/foodupdate/{id}',[RepasController::class,'foodupdate'])->name('foodupdate');
Route::get('/foodupdateview/{id}',[RepasController::class,'foodupdateview'])->name('foodupdateview');
Route::get('/foodshow',[RepasController::class,'foodshow'])->name('foodshow');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
