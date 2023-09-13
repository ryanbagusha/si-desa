<?php

use App\Http\Livewire\Home\Index;
use App\Http\Livewire\Home\Galery;
use App\Http\Livewire\Admin\PrintSkd;
use App\Http\Livewire\Admin\PrintSku;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\PrintSktm;
use App\Http\Livewire\Home\ShowGalery;
use App\Http\Livewire\Home\Struktur\PemerintahDesa;
use App\Http\Livewire\Home\Struktur\BadanPermusyawaratanDesa;

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

Route::get('/', Index::class)
    ->name('home');

Route::get('/galeri', Galery::class)
    ->name('galeri');

Route::get('/galeri/{id}', ShowGalery::class)
    ->name('show-galeri');

Route::get('/stuktur/pemerintah-desa', PemerintahDesa::class)
    ->name('struktur.pemerintah-desa');

Route::get('/stuktur/badan-permusyawaratan-desa', BadanPermusyawaratanDesa::class)
    ->name('struktur.badan-permusyawaratan-desa');


Route::get('/print/sku/{envelope}', PrintSku::class)
    ->name('filament.print.sku');
Route::get('/print/sktm/{envelope}', PrintSktm::class)
    ->name('filament.print.sktm');
Route::get('/print/skd/{envelope}', PrintSkd::class)
    ->name('filament.print.skd');
