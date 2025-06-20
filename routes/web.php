<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\Website\PageController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Website\EnquiryController;
use App\Http\Controllers\Admin\PageManageController;
use App\Http\Controllers\Admin\GoverningBodyController;
use App\Http\Controllers\Admin\VolunteerFormController;
use App\Http\Controllers\Admin\AdminDashboardController;

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
Route::get('/',[PageController::class,'home'])->name('home');
Route::get('tadvanam',[PageController::class,'tadvanam'])->name('tadvanam');
Route::get('about',[PageController::class,'about'])->name('tadvanam-about');
Route::get('our-founder',[PageController::class,'founder'])->name('tadvanam-founder');
Route::get('governing-body',[PageController::class,'governingBody'])->name('tadvanam-governing-body');
Route::get('vivekananda-darshanika-samajam',[PageController::class,'vivekananda'])->name('vivekananda');
Route::get('tadvanopasana',[PageController::class,'tadvanopasana'])->name('tadvanopasana');
Route::get('events',[PageController::class,'programs'])->name('programs');
Route::get('events/{slug}',[PageController::class,'programsDetail'])->name('programsDetail');
Route::get('gallery',[PageController::class,'gallery'])->name('gallery');
Route::get('contact',[PageController::class,'contact'])->name('contact');
Route::get('center',[PageController::class,'center'])->name('center');

Route::get('/programs/{id}', [PageController::class, 'programsByCategory'])->name('programs.byCategory');
Route::post('/contact/send', [EnquiryController::class, 'sendEnquiry'])->name('contact.send');
Route::post('/volunteer/send', [EnquiryController::class, 'volunteerStore'])->name('volunteer.send');



Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('login',[AdminAuthController::class, 'loginIndex'])->name('login');
    Route::post('login',[AdminAuthController::class,'login'])->name('login.submit');
    Route::post('logout',[AdminAuthController::class,'logout'])->name('logout');
});
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
});
Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin'], 'as' => 'admin.'], function () {
    Route::get('/register', [AdminAuthController::class, 'register'])->name('register.create');
    Route::post('/register', [AdminAuthController::class, 'store'])->name('register.store');
    Route::get('/list', [AdminAuthController::class, 'index'])->name('register.list');
    Route::get('/edit/{id}', [AdminAuthController::class, 'edit'])->name('register.edit');
    Route::put('/update/{id}', [AdminAuthController::class, 'update'])->name('register.update');
    Route::delete('/delete/{id}', [AdminAuthController::class, 'destroy'])->name('register.delete');

    Route::resource('programs', ProgramController::class);
    Route::resource('gallery', AlbumController::class);
    Route::prefix('gallery')->group(function(){
    Route::post('albums/album-image/update/{imageId}', [AlbumController::class, 'updateImage'])->name('albums.image.update');
    Route::delete('albums/album-image/delete/{id}', [AlbumController::class, 'deleteImage'])->name('albums.image.delete');
    });
    Route::resource('governing_body', GoverningBodyController::class);
    Route::resource('page-manage', PageManageController::class);
    Route::post('/page-manage/{id}/add-images', [PageManageController::class, 'addImages'])->name('page-manage.add.images');
    Route::delete('/page-manage/{id}/remove-image', [PageManageController::class, 'removeImage'])->name('page-manage.removeImage');

    Route::get('/volunteer-enquires',[VolunteerFormController::class, 'index'])->name('vlounteer.index');

});
