<?php

use App\Livewire\Backend\PortfolioManager;
use Illuminate\Support\Facades\Route;
use App\Livewire\Frontend\HomeComponent;
use App\Livewire\Frontend\AboutComponent;
use App\Livewire\Backend\ServicesComponent;
use App\Livewire\Frontend\PortfolioComponent;

Route::get("/", HomeComponent::class)->name("home");
Route::get("/about", AboutComponent::class)->name("about");
Route::get("/portfolio", PortfolioComponent::class)->name("portfolio");


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'user'])
    ->name('dashboard');


    /// rutas admin 

Route::view('admin/dashboard', 'admin.dashboard')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin.dashboard');   
Route::get('admin/services', ServicesComponent::class)
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin.services');
Route::get('admin/portfolio', PortfolioManager::class)
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin.portfolio'); 
    
  

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
