<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// GET Routes
Route::get('/name', function () {
    return 'Davit';
});
Route::get('/surname', function () {
    return 'Kldiashvili';
});
Route::get('/age', function () {
    return '21';
});
Route::get('/hobbie', function () {
    return 'Codeing';
});
Route::get('/other', function () {
    return 'value1';
});

// POST Route
Route::post('/update', function () {
    $message = 'წარმატებით განახლდა';
    $response = ['message' => $message];
    return response()->json($response);
});

// PUT Route
Route::put('/add-info', function () {
    $message = 'წარმატებით დაემატა';
    $response = ['message' => $message];
    return response()->json($response);
});

// DELETE Route
Route::delete('/delete-info', function () {
    $message = 'წარმატებით წაიშალა';
    $response = ['message' => $message];
    return response()->json($response);
});
