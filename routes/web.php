<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cart;


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

Route::get('/', function () {
    return view('welcome');
});



Route::get('cart', function () {
    return view('/mycart');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/invoice/{batch}', [App\Http\Controllers\FoodController::class, 'invoice'])->name('invoice');

Route::get('/dlinvoice', [App\Http\Controllers\FoodController::class, 'dlinvoice'])->name('dlinvoice');



//adding to cart
// Route::get('addToCart/{id}', [
//     "uses" => 'App\Http\Controllers\FoodController@addToCart',
//     "as" => 'addToCart'
// ]);
Route::get('addToCart', [App\Http\Controllers\FoodController::class, 'addToCart'])->name('addToCart');


Route::get('/drop/{rowId}', [App\Http\Controllers\FoodController::class, 'dropItem'])->name('drop');
Route::get('/drop1/{rowId}', [App\Http\Controllers\FoodController::class, 'reduce'])->name('reduce');
Route::get('/add1/{rowId}', [App\Http\Controllers\FoodController::class, 'additem'])->name('additem');

Route::get('checkout', [App\Http\Controllers\FoodController::class, 'checkout'])->name('checkout');
Route::post('savecartorders', [App\Http\Controllers\FoodController::class, 'savecartorders'])->name('savecartorders');


// Route::get('/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('edit');

Route::post('/updatemenu/{id}', [App\Http\Controllers\AdminController::class, 'updatemenu'])->name('updatemenu');

Route::post('/updatefood/{id}', [App\Http\Controllers\AdminController::class, 'updatefood'])->name('updatefood');

Route::get('/deletef/{id}', [App\Http\Controllers\AdminController::class, 'fooddestroy'])->name('fooddestroy');
Route::post('/deletem/{id}', [App\Http\Controllers\AdminController::class, 'menudestroy'])->name('menudestroy');




Route::get('edit/{id}', [

    // $food = Food::all();
    "uses" => 'App\Http\Controllers\AdminController@edit',
    "as" => 'edit'
   
]);


Route::get('shoppingcart', [
    "uses" => 'App\Http\Controllers\FoodController@shoppingcart',
    "as" => 'shoppingcart'
]);

//show each food category items

Route::get('show/{id}', [

    // $food = Food::all();
    "uses" => 'App\Http\Controllers\FoodController@index',
    "as" => 'show'
   
]);


Route::get('editfood/{id}', [

    // $food = Food::all();
    "uses" => 'App\Http\Controllers\AdminController@editfood',
    "as" => 'editfood'
   
]);

Route::post('mpesa1', [App\Http\Controllers\FoodController::class, 'mpesa1'])->name('mpesa1');


                              
//auto check database
Route::get('/autoact', function(){
    $con = mysqli_connect("localhost", "stockmar_hpylab", "SaO#0A6H2FTj", "stockmar_hpylab");

    if($con === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
            $id = Auth::id(); 
            $sql = "select Amount from mpesa_resp WHERE UserId = '$id' AND Scratched= 'No'";
             if($result = mysqli_query($con, $sql)){
        
                if(mysqli_num_rows($result) == 1){

                    while($row5 = mysqli_fetch_array($result))
                        {
                            
                            $amt="$row5[Amount]";    
                                                    
                            
                        
                        }
                        // return 'user id is'.$amt;
                         return redirect()->route('invoice')->with('success', 'Payment complete');
                        
                         
                }
                 else{
                     
                    // $notify[] = ['error', 'We have not received your payment'];
                    return redirect()->route('checkout')->with('Error', 'We have not received your payment');
                                 
                  }
            }


}
    )->name('autoact');







//admin


Route::get('/admin/pendingorders', [App\Http\Controllers\AdminController::class, 'pendingorders'])->name('pendingorders');
Route::get('/admin/approved', [App\Http\Controllers\AdminController::class, 'approved'])->name('approved');

 Route::get('/admin/allcat', [App\Http\Controllers\AdminController::class, 'allcats'])->name('allcat');
 Route::get('/admin/allfood', [App\Http\Controllers\AdminController::class, 'allfood'])->name('allfood');

 Route::get('/admin/createfood', [App\Http\Controllers\AdminController::class, 'createfood'])->name('createfood');

 Route::get('/admin/approve/{id}', [App\Http\Controllers\AdminController::class, 'approve'])->name('approve');

//  Route::get('/storefood', 'App\Http\Controllers\AdminController@storefood')->name('storefood');

 Route::post('storefood',[App\Http\Controllers\AdminController::class,'storefood']);

 Route::resource('/admin', 'App\Http\Controllers\AdminController');

 
Route::get('seeorder/{id}', [

    // $food = Food::all();
    "uses" => 'App\Http\Controllers\AdminController@seeorder',
    "as" => 'seeorder'
   
]);



 //admin

