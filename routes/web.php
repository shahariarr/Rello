<?php

use App\Http\Controllers as Con;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\RentController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserRentController;
use App\Http\Controllers\ContactDataController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserPropertyController;



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

Route::get('/', [Con\FrontendController::class, 'index'])->name('index.main');

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

// Property Sales
 Route::resource('properties', PropertyController::class);

// Property Rent
 Route::resource('rents', RentController::class);




  // Contact Data Routes
    Route::get('/contactdata/edit', [ContactDataController::class, 'edit'])->name('contactdata.edit');
    Route::get('/contactdata/create', [ContactDataController::class, 'create'])->name('contactdata.create');
    Route::post('/contactdata/store', [ContactDataController::class, 'store'])->name('contactdata.store');
    Route::put('/contactdata/update', [ContactDataController::class, 'update'])->name('contactdata.update');




Route::get('about/create', [AboutController::class, 'create'])->name('about.create');
Route::post('about/store', [AboutController::class, 'store'])->name('about.store');
Route::get('about/edit', [AboutController::class, 'edit'])->name('about.edit');
Route::put('about/update', [AboutController::class, 'update'])->name('about.update');



Route::get('user_profiles/edit', [UserProfileController::class, 'edit'])->name('user_profiles.edit');
Route::get('user_profiles/create', [UserProfileController::class, 'create'])->name('user_profiles.create');
Route::post('user_profiles/store', [UserProfileController::class, 'store'])->name('user_profiles.store');
Route::post('user_profiles/update', [UserProfileController::class, 'update'])->name('user_profiles.update');







});









Route::get('/listing-rent', [Con\FrontendController::class, 'listing_rent'])->name('listing_rent');
Route::get('/listing-sale', [Con\FrontendController::class, 'listing_sale'])->name('listing_sale');

Route::get('/single-listing_sale/{id}', [Con\FrontendController::class, 'single_listing_sale'])->name('single_listing_sale');
Route::get('/single-listing_rent/{id}', [Con\FrontendController::class, 'single_listing_rent'])->name('single_listing_rent');

Route::get('/contact', [Con\FrontendController::class, 'contact'])->name('contact');

Route::get('/about', [Con\FrontendController::class, 'about'])->name('about');
Route::get('/user/login', [Con\FrontendController::class, 'login'])->name('user.login');
Route::post('/user/login-submit', [Con\FrontendController::class, 'login_req'])->name('user.login.submit');
Route::post('/user/registration-submit', [Con\FrontendController::class, 'registration_req'])->name('user.registration.submit');



Route::group(['as' => 'user.', 'prefix' => 'user','namespace' => 'App\Http\Controllers', 'middleware' => ['auth']], function () {
Route::get('/dashboard', [Con\FrontendController::class, 'user_dashboard'])->name('dashboard');
// Route::view('/profile', 'frontend.partials.user_profile')->name('profile');
// Route::view('/profile/edit', 'frontend.partials.user_profile_edit')->name('profile.edit');

// Route::view('/add-property', 'frontend.partials.user_add-listing_property')->name('add.property');
// Route::view('/add-rent', 'frontend.partials.user_add-listing_rent')->name('add.rent');
// Route::view('/my-properties', 'frontend.partials.user_my-listings_property')->name('my.properties');


Route::resource('/properties', UserPropertyController::class);

Route::resource('/rents', UserRentController::class);



});


