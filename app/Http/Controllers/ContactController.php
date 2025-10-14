<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    /**
     * Afficher le formulaire de contact
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Traiter la soumission du formulaire de contact
     */
    public function send(Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:2',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255|min:5',
            'message' => 'required|string|max:2000|min:10',
        ], [
            'name.required' => 'Le nom est obligatoire.',
            'name.min' => 'Le nom doit contenir au moins 2 caractères.',
            'name.max' => 'Le nom ne peut pas dépasser 255 caractères.',
            'email.required' => 'L\'adresse email est obligatoire.',
            'email.email' => 'Veuillez entrer une adresse email valide.',
            'email.max' => 'L\'adresse email ne peut pas dépasser 255 caractères.',
            'subject.required' => 'L\'objet est obligatoire.',
            'subject.min' => 'L\'objet doit contenir au moins 5 caractères.',
            'subject.max' => 'L\'objet ne peut pas dépasser 255 caractères.',
            'message.required' => 'Le message est obligatoire.',
            'message.min' => 'Le message doit contenir au moins 10 caractères.',
            'message.max' => 'Le message ne peut pas dépasser 2000 caractères.',
        ]);

        // Si la validation échoue, retourner avec les erreurs
        if ($validator->fails()) {
            return redirect('/#contact')
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Nettoyer les données
            $name = strip_tags(trim($request->name));
            $email = filter_var(trim($request->email), FILTER_SANITIZE_EMAIL);
            $subject = strip_tags(trim($request->subject));
            $message = strip_tags(trim($request->message));

            // Vérifier que l'email est valide après nettoyage
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return redirect('/#contact')
                    ->with('error', 'Adresse email invalide.')
                    ->withInput();
            }

            // Envoyer l'email
            Mail::to('contact@dwesta.com')->send(new ContactMail(
                $name,
                $email,
                $subject,
                $message
            ));

            // Log de l'envoi (optionnel)
            \Log::info('Nouveau message de contact reçu', [
                'name' => $name,
                'email' => $email,
                'subject' => $subject,
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'timestamp' => now()
               
                
            ]);

            return redirect('/#contact')
                ->with('success', 'Votre message a été envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.');

        } catch (\Exception $e) {
            // Log de l'erreur
            \Log::error('Erreur lors de l\'envoi du formulaire de contact', [
                'error' => $e->getMessage(),
                'request_data' => $request->except(['_token']),
                'ip' => $request->ip(),
                'timestamp' => now()
            ]);

            return redirect('/#contact')
                ->with('error', 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer ou nous contacter directement à contact@dwesta.com.')
                ->withInput();
        }
    }

    /**
     * Afficher les messages de contact (pour l'administration)
     * Note: Cette méthode nécessiterait une authentification admin
     */
    public function messages()
    {
        // Cette méthode pourrait être implémentée pour afficher
        // les messages reçus dans un tableau de bord admin
        return view('admin.contact-messages');
    }
}