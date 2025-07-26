<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Homepage tramite controller
Route::get('/', [PageController::class, 'homepage'])->name('homepage');

// Pagina "Chi Sono"
Route::get('/chisono', function () {
    return view('chisono');
})->name('chisono');

// Pagina dettaglio progetto tramite controller e slug
Route::get('/progetti/{slug}', [PageController::class, 'projectDetail'])->name('project.detail');

// Pagina contatti
Route::get('/contattami', function () {
    return view('contact');
})->name('contact');

// Pagina servizi
Route::get('/servizi', function () {
    $services = ['marketing', 'comunicazione', 'website', 'consulenza'];
    return view('services', ['services' => $services]);
})->name('services');

// Singolo servizio tramite slug
Route::get('/servizi/{service}', function ($service) {
    return view('service', ['service' => $service]);
})->name('service.detail');

// Pagina tutti i progetti
Route::get('/progetti', [PageController::class, 'allProjects'])->name('project.all');
