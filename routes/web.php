<?php

use App\Http\Controllers\SingleActionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;  

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/demo/{name}', function ($name) {
//     //echo "Hello, this is a demo route!";
//     // return view('demo');
//     //echo "Hello, $name! This is a demo route.";
//     return "Hello, $name! This is a demo route.";
// });

//if we want to handle multiple HTTP methods for a single route, we can use Route::match or Route::any
// Route::any('/test', function () {
//     echo "This is a POST request to the demo route!";
// });

// Route::get('/{name?}', function ($name = null) {

//     $demo = "<h2>arpit</h2>";

//     $data = compact('name','demo');
//     return view('home')->with($data);
// });



// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/about', function () {    
//     return view('about');
// });




// Route::put('/update', function () {
//     echo "This is a PUT request to the update route!";
// });

// Route::delete('/delete', function () {
//     echo "This is a DELETE request to the delete route!";
// });


//Basic Controller
// Route::get('/', [DemoController::class, 'index']);

// Route::get('/about', [DemoController::class,'about']);

// //Single Action Controller
// Route::get('/courses', SingleActionController::class);

// Route::resource('photo', PhotoController::class);

//30-Aug-2024
Route::get('/register', [RegistrationController::class, 'index']);

Route::post('/register', [RegistrationController::class, 'register']);
