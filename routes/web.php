<?php

use App\Http\Livewire\HomePage;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\AboutPage;
use App\Http\Livewire\ContactPage;
use App\Http\Livewire\OurTeam;
use App\Http\Livewire\ProjectsPage;
use App\Http\Livewire\DemoPackage;


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

Route::get('/', HomePage::class);
Route::get('/about', AboutPage::class);
Route::get('/our-team', OurTeam::class);
Route::get('/contact', ContactPage::class);
Route::get('/projects', ProjectsPage::class);
Route::get('/demo-packages', DemoPackage::class);
