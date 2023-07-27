<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TypeVehiculeController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\ReservationVehiculeController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResrvBookingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controllers\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/booking/{id}', [ResrvBookingController::class, 'new_booking']);
Route::post('/add/booking', [ResrvBookingController::class, 'add_booking']);
//modifier le statut
Route::post('/modifier/vehicule', [VehiculeController::class, 'modifier']);

Route::get('/', function () {
    return view('welcome');
});
//route pour importer le contenu de vehicule
Route::get('/voiture', function () {
    return view('acceuil.voiture');
});
Route::get('/about', function () {
    return view('acceuil.about');
});
Route::get('/service', function () {
    return view('acceuil.service');
});
Route::get('/contact', function () {
    return view('acceuil.contact');
});
Route::get('/detail', function () {
    return view('acceuil.detail');
});
//  Route::get('/booking', function () {
//      return view('acceuil.booking');
//  });


Route::get('/dashboard',[DashboardController::class, 'afficher_dashboard'])->middleware(['auth','verified'])->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//Route::get('/', 'index')->middleware('permission:agence-read'); pour bloquer l'acces a un utilisateur
Route::controller(AgenceController::class)->prefix('/agence')->group( function(){
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('', 'store');
    Route::get('/{id}/edit', 'edit');
    Route::patch('/{id}', 'update');
    Route::delete('/delete/{id}', 'destroy');
    Route::get('/{id}', 'show');
});
Route::controller(ReservationController::class)->prefix('/reservation')->group( function(){
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('', 'store');
    Route::get('/{id}/edit', 'edit');
    Route::patch('/{id}', 'update');
    Route::delete('/delete/{id}', 'destroy');
    Route::get('/{id}', 'show');
});
Route::controller(TypeVehiculeController::class)->prefix('/type_vehicule')->group( function(){
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('', 'store');
    Route::get('/{id}/edit', 'edit');
    Route::patch('/{id}', 'update');
    Route::delete('/delete/{id}', 'destroy');
    Route::get('/{id}', 'show');
});
Route::controller(RoleController::class)->prefix('/role')->group( function(){
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('', 'store');
    Route::get('/{id}/edit', 'edit');
    Route::patch('/{id}', 'update');
    Route::delete('/delete/{id}', 'destroy');
    Route::get('/{id}', 'show');
});
Route::controller(VehiculeController::class)->prefix('/vehicule')->group( function(){
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('', 'store');
    Route::get('/{id}/edit', 'edit');
    Route::patch('/{id}', 'update');
    Route::delete('/delete/{id}', 'destroy');
    Route::get('/{id}', 'show');
});
Route::controller(ReservationVehiculeController::class)->prefix('/reservation_vehicule')->group( function(){
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('', 'store');
    Route::get('/{id}/edit', 'edit');
    Route::patch('/{id}', 'update');
    Route::delete('/delete/{id}', 'destroy');
    Route::get('/{id}', 'show');
});
Route::controller(PaiementController::class)->prefix('/paiement')->group( function(){
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('', 'store');
    Route::get('/{id}/edit', 'edit');
    Route::patch('/{id}', 'update');
    Route::delete('/delete/{id}', 'destroy');
    Route::get('/{id}', 'show');
});
Route::controller(UserController::class)->prefix('/user')->group( function(){
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('', 'store');
    Route::get('/{id}/edit', 'edit');
    Route::patch('/{id}', 'update');
    Route::delete('/delete/{id}', 'destroy');
    Route::get('/{id}', 'show');
});
Route::controller(VoitureController::class)->prefix('/voiture')->group( function(){
    Route::get('/', 'voiture');
    Route::get('/create', 'create');
    Route::post('', 'store');
    Route::get('/{id}/edit', 'edit');
    Route::patch('/{id}', 'update');
    Route::delete('/delete/{id}', 'destroy');
    Route::get('/{id}', 'show');
});
// Route::controller(BookingController::class)->prefix('/booking')->group( function(){
//     Route::get('/Booking/{id}', 'Booking');
//     Route::get('/create', 'create');
//     Route::post('', 'store');
//     Route::get('/{id}/edit', 'edit');
//     Route::patch('/{id}', 'update');
//     Route::delete('/delete/{id}', 'destroy');
//     Route::get('/{id}', 'show');
// });
 
});
require __DIR__.'/auth.php';


