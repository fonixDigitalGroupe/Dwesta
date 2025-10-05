<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Routes statiques pour un site vitrine
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/partenariats', function () {
    return view('partenariats');
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