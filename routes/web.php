<?php

use App\Http\Controllers as Con;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RentController;



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
    return view('auth.login');
});


Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('optimize:clear');

    return redirect()->back()->withSuccess('Cache cleared successfully.');
})->name('clear');


Route::get('/route', function () {
    Artisan::call('permission:create-permission-routes');
    return redirect()->back()->withSuccess('Cache cleared successfully.');
})->name('route');





Auth::routes();
Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => ['auth', 'permission']], function () {
    Route::get('/dashboard', [Con\HomeController::class, 'index'])->name('dashboard');
    Route::get('/profile', [Con\HomeController::class, 'profile'])->name('users.profile');


    Route::resources([
        'roles' => Con\RoleController::class,
        'users' => Con\UserController::class,
        'permissions' => Con\PermissionController::class
    ]);



 // Banner Routes
 Route::get('/banner/create', [BannerController::class, 'create'])->name('banner.create');
 Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
 Route::get('/banner/edit', [BannerController::class, 'edit'])->name('banner.edit');
 Route::put('/banner/update', [BannerController::class, 'update'])->name('banner.update');

 // Service Routes
 Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
 Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');
 Route::get('/service/edit', [ServiceController::class, 'edit'])->name('service.edit');
 Route::put('/service/update', [ServiceController::class, 'update'])->name('service.update');

 Route::resource('properties', PropertyController::class);


 Route::resource('rents', RentController::class);






});



Route::view('/index', 'frontend.partials.main')->name('index');
