<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GroomingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenitipanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FormGroomingController;

use App\Http\Controllers\ClientController;

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

// Route::get('/sesi', [SessionController::class, 'index']);
// Route::post('/sesi/login', [SessionController::class, 'login']);

// Route::redirect('/', '/login');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/welcome', function () {
//     echo "Anda Berhasil Login";
// })->name('welcome');
// Route::get('/login', [AuthController::class])->name('login');
// Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
// Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('Grooming', GroomingController::class);
Route::resource('Penitipan', PenitipanController::class);
Route::resource('Produk', ProdukController::class);



Route::post('/update/gromming', [GroomingController::class, 'update'])->name('GroomingUpdate');

Route::post('/update/penitipan', [PenitipanController::class, 'update'])->name('PenitipanUpdate');

Route::post('/update/produk', [ProdukController::class, 'update'])->name('update.produk');

Route::post('/komentar/create', [HomeController::class, 'komentarcreate'])->name('komentar.create');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/formGrooming', function (){
    return view('FormGrooming');
});

Route::post('/formPenitipan/create',[ClientController::class, 'clientcreate'])->name('formPenitipan');

Route::get('/formPenitipan/edit/{id?}',[ClientController::class, 'editclientcreate'])->name('PenitipanClient.edit');

Route::get('/formPenitipan/detail/{id?}',[ClientController::class, 'detailclientcreate'])->name('PenitipanClient.detail');

Route::get('/formPenitipan/destroy/{id?}',[ClientController::class, 'deleteclientcreate'])->name('PenitipanClient.delete');

Route::post('/formGromming/create',[ClientController::class, 'clientcreategromming'])->name('formGromming');

Route::get('/formGromming/edit/{id?}',[ClientController::class, 'editclientgromming'])->name('formGromming.edit');

Route::get('/formGromming/delete/{id?}',[ClientController::class, 'deleteclientgromming'])->name('formGromming.delete');

Route::get('/formPenitipan', function (){
    return view('FormPenitipan');
});
Route::get('/pembayaran', function (){
    return view('pembayaran');
});
// Route::get('product', [])

Auth::routes();

Route::redirect('/', '/login');
Route::redirect('/', '/register');
