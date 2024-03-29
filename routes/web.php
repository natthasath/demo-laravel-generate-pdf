<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PDFController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/test/pdf', function () {
    $a = "hello";
    $b = "world";
    $c = "วันจันทร์";
    $pdf = Pdf::loadView('testpdf', compact('a', 'b', 'c'));
    return $pdf->stream();
});

Route::get('/pdf', [PDFController::class, 'download'])->name('pdf.download');

require __DIR__.'/auth.php';
