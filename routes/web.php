<?php
use Illuminate\Http\Request;
use App\Payments;

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

Route::get('/', 'FiscoDepotController@index');
Route::get('/about', 'FiscoDepotController@about');
Route::get('/store', 'FiscoDepotController@store')->name('store');
Route::get('/product/{product}/payment', 'PayPalPaymentController@payment')->name('products.payment');
Route::get('/status', function(Request $request){
    $payment = Payments::wherePaypalPaymentId($request->paymentId)->first();
    $payment->update([
        'paypal_token' => $request->token,
        'paypal_payer_id' => $request->PayerID,
        'status' => 'Pagado'
    ]);
    return $payment;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
    'products' => 'ProductController'
]);
