<?php

use GuzzleHttp\Middleware;
use App\Models\KoordinatorPKL;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\KategoriAgenda;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\koorAbsensiSiswa;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\adminAbsensiSiswa;
use App\Http\Controllers\contactController;
use App\Http\Controllers\messageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminPKLController;
use App\Http\Controllers\RegisterKoordinator;
use App\Http\Controllers\DataAgendaController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\KoordinatorDashboard;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\AgendaSiswaController;
use App\Http\Controllers\UserDetailsController;
use App\Http\Controllers\nilaiPraktikController;
use App\Http\Controllers\nilaiPrakerinController;
use App\Http\Controllers\PenerimaanPKLController;
use App\Http\Controllers\KoordinatorPKLController;
use App\Http\Controllers\StatusPrakerinController;
use App\Http\Controllers\KetersediaanPKLController;
use App\Http\Controllers\LaporanSiswaPKLController;
use App\Http\Controllers\LoginKoordinatorController;

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
    return view('home.main');
})->middleware(['guest'])->name('home');

Route::resource('/cek-ketersediaan', KetersediaanPKLController::class);

Route::get('/about', [AboutController::class, 'index'])->middleware(['guest']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/statusPkl', [StatusPrakerinController::class, 'index'])->middleware(['auth'])->name('main');

Route::get('/agendaSiswa', [AgendaSiswaController::class, 'index']);

Route::resource('/pendaftaran', UserDetailsController::class);

Route::resource('/nilaiPrakerin', nilaiPrakerinController::class);

Route::resource('/absensi', AbsensiController::class);

Route::resource('/contact', contactController::class);
// Route::post('/send-email', [contactController::class, 'sendContactEmail'])->name('send.email');

// message
Route::resource('/message', messageController::class);
Route::get('/message/{id}/{message_id}', [messageController::class, 'index'])->name('show.message');
Route::post('/send-message/{recipientId}', [PenerimaanPKLController::class, 'sendMessage'])->name('send.message');
Route::get('messages/{message}/view-file', [PenerimaanPKLController::class, 'viewFile'])->name('messages.viewFile');
Route::get('/download/{filename}', [messageController::class, 'downloadSerti'])->name('file.download');
Route::get('/view-file/{id}', [messageController::class, 'viewFile'])->name('file.view');


// KoorPKL
Route::prefix('koordinator')->group(function (){
    
    Route::get('/koor', [KoordinatorDashboard::class, 'koordinatorDashboard'])->middleware(['koor:koordinator'])->name('koor.dashboard');
    
    Route::get('/loginKoor', [LoginKoordinatorController::class, 'loginKoor'])
    ->name('loginKoor');
    
    Route::post('/loginKoor/koor', [LoginKoordinatorController::class, 'authenticate'])->name('koor.loginKoor');
    
    Route::post('/logoutKoor', [LoginKoordinatorController::class, 'logoutKoor'])
    ->name('koor.logoutKoor');

    Route::get('/registerKoor', [RegisterKoordinator::class, 'KoorRegister'])
    ->name('koor.register');

    Route::post('/registerKoor/create', [RegisterKoordinator::class, 'KoorRegisterCreate'])
    ->name('koor.register.create');
});
Route::resource('/penerimaan-pkl', PenerimaanPKLController::class);

Route::resource('/dataKoor', KoordinatorPKLController::class);

Route::resource('/koorAbsensi', koorAbsensiSiswa::class);

Route::resource('/kategoriAgenda', KategoriAgenda::class);

Route::resource('/dataAgenda', DataAgendaController::class);

Route::resource('/nilai-praktik', nilaiPraktikController::class);
// Route::post('/nilai/store/{userId}', [nilaiPraktikController::class, 'store'])->name('nilai.store');
// Route::get('/nilai/edit/{userId}', [nilaiPraktikController::class, 'edit'])->name('nilai.edit');
// Route::put('/nilai/update/{userId}', [nilaiPraktikController::class, 'update'])->name('nilai.update');

// Route to update the form
// Route::put('/nilai/update/{userId}', [nilaiPraktikController::class, 'update'])->name('nilai.update');


// Admin
Route::prefix('admin')->group(function(){

Route::get('/admin', [AdminDashboard::class, 'adminDashboard'])->middleware(['admin:admin'])->name('admin.dashboard');

Route::get('/loginAdmin', [LoginAdminController::class, 'loginAdmin'])
->name('loginAdmin');

Route::post('/loginAdmin/admin', [LoginAdminController::class, 'authenticate'])->name('admin.loginAdmin');

Route::post('/logoutAdmin', [LoginAdminController::class, 'logoutAdmin'])
->name('admin.logoutAdmin');
});
Route::resource('/department', DepartmentController::class);

Route::resource('/laporan-siswa', LaporanSiswaPKLController::class);

Route::resource('/adminAbsensi', adminAbsensiSiswa::class);

Route::resource('/dataAdmin', AdminPKLController::class);

require __DIR__.'/auth.php';
