<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LegalController;
use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    //$cesasforum_users = DB::table('users')->count();
    $cesasforum_users = DB::connection('mysql')->table('users')->count();
    $imid_users = DB::connection('mysql_imid')->table('users')->count();
    $lupus_users = DB::connection('mysql_lupus')->table('users')->count();
    $scleroderma_users = DB::connection('mysql_scleroderma')->table('users')->count();
    //dd($lupus_users);      
    var_dump('CESAS Forums '.$cesasforum_users.', IMID '.$imid_users.', Lupus '.$lupus_users.', Scleroderma '.$scleroderma_users);

    return view('welcome');
});
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', [RegisterController::class, 'index'])->name('register.index');
Route::post('/store', [RegisterController::class, 'store'])->name('register.store');

Route::get('legal', [LegalController::class, 'getLegal'])
    ->name('legal.legal');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
