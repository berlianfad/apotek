<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\AcountController;

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
    return view('dashboard');
});

Route::prefix('/medicine')->name('medicine.')->group(function(){
    Route::get('/create',  [MedicineController::class, 'create'])->name('create');
    Route::post('/store',  [MedicineController::class, 'store'])->name('store');
    Route::get('/', [MedicineController::class, 'index'])->name('home');
    Route::get('/{id}', [MedicineController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [MedicineController::class, 'update'])->name('update');
    Route::delete('/{id}', [MedicineController::class, 'destroy'])->name('delete');
    Route::get('/data/stock', [MedicineController::class, 'stock'])->name('stock');
    Route::get('/data/stock/{id}', [MedicineController::class, 'stockEdit'])->name('stock.edit');
    Route::patch('/data/stock/{id}', [MedicineController::class, 'stockUpdate'])->name('stock.update');
    Route::get('/{id}', [MedicineController::class, 'show'])->name('show');
});
 
Route::prefix('/account')->name('account.')->group(function(){
    Route::get('/', [AcountController::class, 'index'])->name('home');
    Route::get('/create', [AcountController::class, 'create'])->name('create');
    Route::post('/store', [AcountController::class, 'store'])->name('store');
    Route::get('/{id}', [AcountController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [AcountController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [AcountController::class, 'hapus'])->name('hapus');
    Route::delete('/delete/{id}', [AcountController::class, 'destroy'])->name('delete');
});