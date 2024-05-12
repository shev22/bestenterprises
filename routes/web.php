<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZoomController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/', [HomeController::class, 'index']);

Route::get('about', function () { return view('frontend.about');});
Route::get('services/{path?}', function (?string $path = null) { return view('frontend.services', ['path'=>$path]);});
Route::get('pricing', function () { return view('frontend.pricing');});
Route::get('contact', function () { return view('frontend.contact');});
Route::get('checkout', function () { return view('frontend.checkout');});

// Route::get('quote', function () { return view('frontend.getQuote');});

Route::get('quote/{path?}', function (?string $path = null) { return view('frontend.services', ['path'=>$path]);});



// Route::get('start', [ZoomController::class, 'index']);
// Route::get('zoom-meeting-create', [ZoomController::class, 'index']);

Route::post('quote', [PagesController::class, 'store'])->name('form');





