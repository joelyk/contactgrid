<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

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

Route::get('/', [ContactsController::class, 'index']);
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');
Route::get('/contacts/create', [ContactsController::class, 'create'])->name('contacts.create');
Route::post('/contacts/create', [ContactsController::class, 'store'])->name('contacts.store');
Route::get('/contacts/{id}/edit', [ContactsController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/{id}/update', [ContactsController::class, 'update'])->name('contacts.update');
Route::delete('/contacts/{id}/destroy', [ContactsController::class, 'destroy'])->name('contacts.destroy');
Route::get('/search', [ContactsController::class, 'search']);