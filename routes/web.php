<?php

use App\Http\Livewire\ByEstable;
use App\Http\Livewire\ByMedico;
use App\Http\Livewire\Index;
use App\Http\Livewire\Show;
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
Route::get('/', Index::class);

Route::get('/recetas/by-establecimientos/{establecimiento}', ByEstable::class)->name('byestable');
Route::get('/recetas/by-medicos/{medico}', ByMedico::class)->name('bymedico');
Route::get('/recetas/{receta}', Show::class)->name('receta');
