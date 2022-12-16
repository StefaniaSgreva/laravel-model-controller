<?php
//IMPORTARE LA CLASSE!!! e se voglio gli assegno un alias dopo 'as'
use App\Http\Controllers\Guest\PageController as PageController;

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', [PageController::class, 'index'])->name('home');