<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\LogicController;
use App\Http\Controllers\PatternController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\PreparationInterview;
use App\Http\Controllers\TestController;

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
    return view('welcome');
});

Route::get('/get',[CrudController::class,'get']);
Route::post('/add',[CrudController::class,'add']);
Route::get('edit/{id}',[CrudController::class,'edit']);
Route::post('/update/{id}',[CrudController::class,'update']);
Route::get('/delete/{id}',[CrudController::class,'delete']);



//----------------------------- php image save--------------------------------------

Route::get('/phpimage',[CrudController::class,'phpimage']);// php image save
Route::post('/phpimage',[CrudController::class,'phpimages'])->name('phpimage');





// ----------------------------- joins ---------------------------------------------

Route::get('joins',[CrudController::class,'joins']);


// ----------------------------- Eloquent Relations -----------------------------------

Route::get('relations',[CrudController::class,'relations']);




//------------------------------ PHP Logics ------------------------------------------


Route::get('reverse_string',[LogicController::class,'reverse_string']);
Route::get('midvalue',[LogicController::class,'midvalue']);
Route::get('duplicate_value',[LogicController::class,'duplicate_value']);
Route::get('remove_duplicate',[LogicController::class,'remove_duplicate']);
Route::get('max_smax',[LogicController::class,'max_smax']); // max or 2nd max val in array
Route::get('table',[LogicController::class,'table']);


Route::get('even_odd',[LogicController::class,'even_odd']);
Route::get('prime',[LogicController::class,'prime']);
Route::get('factorial',[LogicController::class,'factorial']);
Route::get('swap',[LogicController::class,'swap']);  // with & without using 3 variable
Route::get('armstrong',[LogicController::class,'armstrong']);
Route::get('palindrome',[LogicController::class,'palindrome']);
Route::get('fibonacci',[LogicController::class,'fibonacci']);
Route::get('reverse_no',[LogicController::class,'reverse_no']);
Route::get('duplicate_string',[LogicController::class,'duplicate_string']);




//------------------------------ Pattern Matchin ------------------------------------------
                                       // Youtube Videos
Route::get('start_tri',[PatternController::class,'start_tri']);
Route::get('number',[PatternController::class,'number']);
Route::get('opposite_tri_number',[PatternController::class,'opposite_tri_number']);
Route::get('pyramid',[PatternController::class,'pyramid']);  // with diamond
Route::get('string',[PatternController::class,'string']);
Route::get('x',[PatternController::class,'x']);




Route::get('practice',[PracticeController::class,'practice']);



// ------------------------------- PreparationInterview Controller ------------------------

Route::get('prac',[PreparationInterview::class,'prac']);
Route::get('test',[TestController::class,'test']);




//------------------------------------ CRUD ---------------------------------------------

Route::get('get_two',[CrudController::class,'get_two']);
Route::post('add_two',[CrudController::class,'add_two']);
Route::get('edit_two/{id}',[CrudController::class,'edit_two']);
Route::post('update_two/{id}',[CrudController::class,'update_two']);
Route::get('delete_two/{id}',[CrudController::class,'delete_two']);



//------------------------------------ AJAX CRUD ---------------------------------------------

Route::get('get_three',[CrudController::class,'get_three']);
Route::post('add_three',[CrudController::class,'add_three']);
Route::get('fetch_three',[CrudController::class,'fetch_three']);
Route::get('edit_three/{id}',[CrudController::class,'edit_three']);
Route::post('update_three/{id}',[CrudController::class,'update_three']);
Route::delete('delete_three/{id}',[CrudController::class,'delete_three']);
