<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
})->name('home');

// Routes statiques pour un site vitrine
Route::get('/about', function () {
    return redirect('/#about');
})->name('about');

Route::get('/services', function () {
    return redirect('/#services');
})->name('services');

Route::get('/contact', function () {
    return redirect('/#contact');
})->name('contact');

Route::get('/partenariats', function () {
    return redirect('/#fournisseur');
})->name('partenariats');

// Routes pour les services
Route::get('/conseils', function () {
    return view('services.conseils');
})->name('conseils');

Route::get('/solution-informatique', function () {
    return view('services.solution-informatique');
})->name('solution-informatique');

Route::get('/cybersecurite', function () {
    return view('services.cybersecurite');
})->name('cybersecurite');

Route::get('/iot-ot', function () {
    return view('services.iot-ot');
})->name('iot-ot');

Route::get('/developpement-applicatif', function () {
    return view('services.developpement-applicatif');
})->name('developpement-applicatif');

Route::get('/infrastructure-cloud', function () {
    return view('services.infrastructure-cloud');
})->name('infrastructure-cloud');

Route::get('/developpement-web', function () {
    return view('services.developpement-web');
})->name('developpement-web');

Route::get('/applications-mobiles', function () {
    return view('services.applications-mobiles');
})->name('applications-mobiles');

Route::get('/business-intelligence', function () {
    return view('services.business-intelligence');
})->name('business-intelligence');

Route::get('/support-maintenance', function () {
    return view('services.support-maintenance');
})->name('support-maintenance');

// Routes pour les pages légales
Route::get('/mentions-legales', function () {
    return view('legal.mentions-legales');
})->name('mentions-legales');

Route::get('/cgu', function () {
    return view('legal.cgu');
})->name('cgu');

Route::get('/politique-confidentialite', function () {
    return view('legal.politique-confidentialite');
})->name('politique-confidentialite');

Route::get('/politique-cookies', function () {
    return view('legal.politique-cookies');
})->name('politique-cookies');

// Routes pour le formulaire de contact
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');