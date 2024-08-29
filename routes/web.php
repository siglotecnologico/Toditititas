<?php

use App\Http\Controllers\DonationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Formularios\ContactoController;
use App\Http\Controllers\ProjectController;

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

Route::get('/', function () {
    return view('dashboard');
})->name('inicio');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contactos', function () {
    return view('contactos');
})->name('contactos');

Route::get('donaciones', function () {
    return view('donaciones');
})->name('donaciones');

Route::get('unirse', function () {
    return view('unirse');
})->name('unirse');

Route::get('proyectos', function () {
    return view('proyectos');
})->name('proyectos');
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('proyectos.show');

Route::get('capacitaciones', function () {
    return view('capacitaciones');
})->name('capacitaciones');

route::get('/donar', [DonationController::class, 'create'])->name('donations.create');

route::post('/donar/mom', [DonationController::class, 'monto'])->name('donations.monto');

Route::get('/thank-you', [DonationController::class, 'store'])->name('donations.thankyou');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::post('/formularioContacto', [ContactoController::class, 'store'])->name('contacto.store');
Route::post('/formularioContactoinfo', [ContactoController::class, 'contactoinfo'])->name('contactoinfo.store');
Route::post('/formulariosuscripcion', [ContactoController::class, 'suscripcion'])->name('suscripcion.store');
Route::post('/unirse', [ContactoController::class, 'unirse'])->name('unirse.store');
Route::post('/formulariocontactoinfo', [ContactoController::class, 'contactoinfo'])->name('contactoinfo.store');
