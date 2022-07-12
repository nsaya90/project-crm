<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\EntreprisesController;
use App\Http\Controllers\FacturesController;

use Illuminate\Support\Facades\Route;

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

Route::resource('/contacts', ContactsController::class);
Route::resource('/entreprises', EntreprisesController::class);

Route::get('/list-facture/{id}', [FacturesController::class ,'form_facture'])->name('form_facture');
Route::post('/list-facture', [FacturesController::class ,'storeClient'])->name('post_factureClient');
