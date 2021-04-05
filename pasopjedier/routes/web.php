<?php

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




Route::middleware(['auth', 'Admin'])->group(function(){
    Route::get('/pet/delete',[App\Http\Controllers\PetController::class, 'index_admin']);
    Route::get('/pet/delete/{id}',[App\Http\Controllers\PetController::class, 'destroy']);
    Route::get('/user',[App\Http\Controllers\UserController::class, 'index_users']);
    Route::get('/user/{id}/block',[App\Http\Controllers\UserController::class, 'update']);
    Route::get('/user/{id}/deblock',[App\Http\Controllers\UserController::class, 'update_deblock']);
    Route::get('/user/blocked', [App\Http\Controllers\UserController::class, 'index_users_blocked']); 
    Route::post('/user', [App\Http\Controllers\UserController::class, 'store']); 
    
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function(){
    Route::get('/pet/create', [App\Http\Controllers\PetController::class, 'create']);
   // Route::get('/profile/create', [App\Http\Controllers\UserInfoController::class, 'create_profile']);

    Route::get('/pet/{id}/response', [App\Http\Controllers\ResponseController::class, 'create_response']);
    Route::get('/response/{id}/accept', [App\Http\Controllers\AcceptController::class, 'create_accept']);

    Route::get('/user/{id}/review/create', [App\Http\Controllers\ReviewController::class, 'create_review']);
    Route::post('/user/review',[App\Http\Controllers\ReviewController::class, 'store_review']);
    Route::get('/user/reviews',[App\Http\Controllers\ReviewController::class, 'index_review']);


    Route::get('/pet/{id}', [App\Http\Controllers\PetController::class, 'show']);
    Route::post('/pet', [App\Http\Controllers\PetController::class, 'store']); 

   // Route::get('/profile/{id}', [App\Http\Controllers\UserInfoController::class, 'show_profile']);
   // Route::post('/profile', [App\Http\Controllers\UserInfoController::class, 'store_profile']); 

    Route::post('/response', [App\Http\Controllers\ResponseController::class, 'store_response']); 
    Route::post('/response/accept', [App\Http\Controllers\AcceptController::class, 'store_accept']);

    Route::get('/pet', [App\Http\Controllers\PetController::class, 'index']);
   //Route::get('/profile', [App\Http\Controllers\UserInfoController::class, 'index_profile']);
    Route::get('/response', [App\Http\Controllers\ResponseController::class, 'index_response']);
    Route::get('/accept', [App\Http\Controllers\AcceptController::class, 'index_accept']);

    Route::get('/', [App\Http\Controllers\PetController::class, 'redirect']);
    Route::get('/response/delete/{id}',[App\Http\Controllers\ResponseController::class, 'destroy_response']);
});
    










require __DIR__.'/auth.php';


