<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SelectionController;
use Illuminate\Support\Facades\Route;

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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ----------RESTO MIDDLEWARE----------
    Route::get('createResto',[RestaurentController::class,'formResto']);
    Route::post('createResto',[RestaurentController::class,'createResto']);
    Route::get('modifResto/{id}',[RestaurentController::class,'formModif']);
    Route::post('modifResto/{id}',[RestaurentController::class,'modifResto']);
    Route::get('deleteResto/{id}',[RestaurentController::class,'suppResto']);
    Route::get('adminAllResto',[RestaurentController::class,'adminAllResto']);
    // ----------RESTO MIDDLEWARE----------

    // ----------ORDER MIDDLEWARE----------
    Route::get('createOrder',[OrderController::class,'formOrder']);
    Route::post('createOrder',[OrderController::class,'createOrder']);
    Route::get('allOrder',[OrderController::class,'allOrder']);
    Route::get('deleteOrder/{id}',[OrderController::class,'suppOrder']);
    // ----------ORDER MIDDLEWARE----------

    // ---------- SELECTION MIDDLEWARE----------
    Route::get('createSelection/{id}',[SelectionController::class,'formSelection']);
    Route::post('createSelection/{id}',[SelectionController::class,'createSelection']);
    Route::get('allSelection',[SelectionController::class,'allSelection']);
    Route::get('suppSelection/{id}',[SelectionController::class,'suppSelection']);
    // ---------- SELECTION MIDDLEWARE----------

    // ---------- ITEMS MIDDLEWARE----------
    Route::get('createItem',[ItemController::class,'formItems']);
    Route::post('createItem',[ItemController::class,'createItem']);
    Route::get('allItems',[ItemController::class,'allItems']);
    // Route::get('formItems',[ItemController::class,'formItems']);

    Route::post('createSelection/{id}',[SelectionController::class,'createSelection']);
    Route::get('allSelection',[SelectionController::class,'allSelection']);
    Route::get('suppSelection/{id}',[SelectionController::class,'suppSelection']);
    // ---------- ITEMS MIDDLEWARE----------
});

require __DIR__.'/auth.php';

// --------------------mes routes--------------------
Route::get('/', function () {return view('index');});

// ----------RESTO ----------
Route::get('afficheAllResto',[RestaurentController::class,'allResto']);
Route::get('afficheUnResto/{id}',[RestaurentController::class,'unResto']);
// ----------RESTO ----------





// --------------------mes routes--------------------




