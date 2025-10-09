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

// Route pour la page de consultation
Route::get('/consultation', function () {
    return view('consultation');
})->name('consultation');

// Route pour traiter le formulaire de consultation
Route::post('/consultation', function (Request $request) {
    // Validation des données
    $request->validate([
        'nom' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'service' => 'required|string|max:255',
        'date_heure' => 'required|date',
        'societe' => 'nullable|string|max:255',
        'telephone' => 'nullable|string|max:20',
        'message' => 'nullable|string|max:2000',
    ]);

    try {
        // Envoi de l'email
        Mail::to('fonixdigitalgroupe0@gmail.com')->send(new \App\Mail\ConsultationMail(
            $request->nom,
            $request->email,
            $request->service,
            $request->date_heure,
            $request->societe,
            $request->telephone,
            $request->message
        ));

        return redirect()->route('consultation')->with('success', 'Votre demande de consultation a été envoyée avec succès ! Notre équipe vous contactera bientôt.');
    } catch (\Exception $e) {
        return redirect()->route('consultation')->with('error', 'Une erreur est survenue lors de l\'envoi de la demande. Veuillez réessayer.');
    }
})->name('consultation.send');

// Route pour traiter le formulaire de contact
Route::post('/contact', function (Request $request) {
    // Validation des données
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string|max:2000',
    ]);

    try {
        // Envoi de l'email
        Mail::to('fonixdigitalgroupe0@gmail.com')->send(new ContactMail(
            $request->name,
            $request->email,
            $request->subject,
            $request->message
        ));

        return redirect('/#contact')->with('success', 'Votre message a été envoyé avec succès !');
    } catch (\Exception $e) {
        return redirect('/#contact')->with('error', 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer.');
    }
})->name('contact.send');