<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;  
use App\Models\Customer;
use Illuminate\Http\Request;

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

//it means we are giving a name to this route
//so that we can use this name in our blade file to create a link to this route
//like this: <a href="{{ route('customer.create') }}">Add Customer</a>
Route::get('/customer/create',[CustomerController::class,'create'])->name('customer.create');


Route::post('/customer', [CustomerController::class, 'store']);
Route::get('/customer',[CustomerController::class,'view']);
Route::get('/customer/trash',[CustomerController::class,'trash']);

Route::get('/', function () {    
    return view('/index');
});

Route::get('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');

Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');

Route::post('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');

Route::get('/get-all-session',function(){
    $value = session()->all();
    p($value);
});

Route::get('/set-session',function(Request $request){
    $request->session()->put('user_name','arpit');
    $request->session()->flash('status','Success');
    return redirect()->back()->with('success','Session has been set');
});

Route::get('destroy-session',function(){
    session()->forget('user_name');
    return redirect()->back()->with('success','Session has been destroyed');
});

Route::group(['prefix'=>'customer'],function(){
    Route::get('/dashboard',function(){
        return "This is admin dashboard";
    });

    Route::get('/settings',function(){
        return "This is admin settings";
    });
});