<?php

use App\Http\Controllers\AktifitasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebModelController;
use App\Models\Aktifitas;
use App\Models\Banner;
use App\Models\Client;
use App\Models\Galeri;
use App\Models\Layanan;
use App\Models\Testimoni;
use App\Models\User;
use App\Models\WebModel;
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
    $data = [
        'banners' => Banner::all(),
        'layanans' => Layanan::all(),
        'testis' => Testimoni::all(),
        'galeris' => Galeri::latest()->take(8)->get(),
        'clients' => Client::all(),
        'aktifitas' => Aktifitas::all(),
        'lawyers' => User::with('profile')->where('role', 'Lawyer')->get(),
        'web' => WebModel::first()
    ];
    return view('welcome', $data);
});

Route::get('/profile/detail-lawyer', [UserController::class, 'detailLawyer']);

Route::get('/galeri-kami', [GaleriController::class, 'getData']);

Route::get('/sadrach', function (){
    return view('ctr.sadrach');
});

Route::get('/ardik', function (){
    return view('ctr.ardik');
});

Route::get('/hosbal', function (){
    return view('ctr.hosbal');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/users', [UserController::class, 'index']);
    Route::post('/users/store', [UserController::class, 'store']);
    Route::get('/users/edit', [UserController::class, 'edit']);
    Route::post('/users/update', [UserController::class, 'update']);
    Route::post('/users/delete', [UserController::class, 'delete']);

    Route::get('/banner', [BannerController::class, 'index']);
    Route::post('/banner/store', [BannerController::class, 'store']);
    Route::get('/banner/edit', [BannerController::class, 'edit']);
    Route::post('/banner/update', [BannerController::class, 'update']);
    Route::post('/banner/delete', [BannerController::class, 'delete']);

    Route::get('/layanan', [LayananController::class, 'index']);
    Route::post('/layanan/store', [LayananController::class, 'store']);
    Route::get('/layanan/edit', [LayananController::class, 'edit']);
    Route::post('/layanan/update', [LayananController::class, 'update']);
    Route::post('/layanan/delete', [LayananController::class, 'delete']);

    Route::get('/testimoni', [TestimoniController::class, 'index']);
    Route::post('/testimoni/store', [TestimoniController::class, 'store']);
    Route::get('/testimoni/edit', [TestimoniController::class, 'edit']);
    Route::post('/testimoni/update', [TestimoniController::class, 'update']);
    Route::post('/testimoni/delete', [TestimoniController::class, 'delete']);

    Route::get('/lawyers', [LawyerController::class, 'index']);
    Route::post('/lawyers/store', [LawyerController::class, 'store']);
    Route::get('/lawyers/edit', [LawyerController::class, 'edit']);
    Route::post('/lawyers/update', [LawyerController::class, 'update']);
    Route::post('/lawyers/delete', [LawyerController::class, 'delete']);

    Route::get('/aktifitas', [AktifitasController::class, 'index']);
    Route::post('/aktifitas/store', [AktifitasController::class, 'store']);
    Route::get('/aktifitas/edit', [AktifitasController::class, 'edit']);
    Route::get('/aktifitas/detail', [AktifitasController::class, 'detail']);
    Route::post('/aktifitas/update', [AktifitasController::class, 'update']);
    Route::post('/aktifitas/delete', [AktifitasController::class, 'delete']);

    Route::get('/galeri', [GaleriController::class, 'index']);
    Route::post('/galeri/store', [GaleriController::class, 'store']);
    Route::post('/galeri/delete', [GaleriController::class, 'delete']);

    Route::get('/client', [ClientController::class, 'index']);
    Route::post('/client/store', [ClientController::class, 'store']);
    Route::post('/client/delete', [ClientController::class, 'delete']);

    Route::get('/web-profile', [WebModelController::class, 'index']);
    Route::get('/web-profile/get-data', [WebModelController::class, 'getData']);
    Route::post('/web-profile/update', [WebModelController::class, 'update']);

    Route::get('/profile', [UserController::class, 'profile']);
    Route::get('/profile/edit-lawyer', [UserController::class, 'editLawyer']);
    Route::post('/profile/update-lawyer', [UserController::class, 'updateLawyer']);

    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginCheck']);
});
