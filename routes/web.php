<?php
  
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\HousesController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ApplicationController;
  
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
  
Auth::routes();
  

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('contract', 'App\Http\Controllers\ContractController');
    Route::resource('stripee', 'App\Http\Controllers\StripeController');
    Route::resource('houses', 'App\Http\Controllers\HousesController');
    Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
    Route::get('generate-payment', [PDFController::class, 'generatePayment']);
    Route::get('generate-users', [PDFController::class, 'generateUsers'])->name('generate-users');
    Route::get('generate-contract', [PDFController::class, 'generateContract']);
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
Route::get('stripe', [StripePaymentController::class, 'stripe']);
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
Route::get('/sharelink-form', [ApplicationController::class, 'applicationForm'])->name('sharelink-form');
Route::get('/sharelinklist', [ApplicationController::class, 'index'])->name('sharelinklist');
Route::post('/sharelink-form', [ApplicationController::class, 'storeApplicationForm'])->name('sharelink-form.store');