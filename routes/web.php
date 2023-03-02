<?php

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

Route::get('/', function () {
    return view('welcome'); // view route
});

Route::get('/about', function () {
    //return 'what ever';
    
    // basic Route
    return 9*9;
});

// Route::get('/contact', function() {
//     return view('contact');
// });

// code sederhana
Route::view('/contact', 'contact');


Route::view('/contact', 'contact', ['name' => 'I am Robby', 'address' => 'I live in Bogor', 'phone' => '081311111111', ]);

Route::redirect('/contact', '/contact-us'); // mengganti sementara dari halaman contact ke contact-us

Route::get('/product', function() {
    return 'product';
});

// route dengan parameter
// Route::get('/product/{id}', function(string $id) { 
//     return 'Ini adalah product dengan id '.$id;
// });

// route dengan parameter & view routes
Route::get('/product/{id}', function(string $id) { 
    return view('product.detail', ['id' => $id]);
});