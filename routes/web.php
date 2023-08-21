<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RevolveController;
/*use
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [RevolveController::class,'index'])->name('home');
Route::get('/blog-category', [RevolveController::class,'category'])->name('blog-category');
Route::get('/blog-detail', [RevolveController::class,'detail'])->name('blog-detail');
Route::get('/contact-page', [RevolveController::class,'contact'])->name('contact-page');

