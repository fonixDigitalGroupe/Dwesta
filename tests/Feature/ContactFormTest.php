<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use App\Mail\ContactMail;

class ContactFormTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * Test que le formulaire de contact peut être soumis avec succès
     */
    public function test_contact_form_can_be_submitted_successfully()
    {
        Mail::fake();

        $formData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Test de contact',
            'message' => 'Ceci est un message de test pour vérifier le fonctionnement du formulaire de contact.',
        ];

        $response = $this->post('/contact', $formData);

        $response->assertRedirect('/#contact');
        $response->assertSessionHas('success');

        Mail::assertSent(ContactMail::class, function ($mail) use ($formData) {
            return $mail->name === $formData['name'] &&
                   $mail->email === $formData['email'] &&
                   $mail->subject === $formData['subject'] &&
                   $mail->message === $formData['message'];
        });
    }

    /**
     * Test que la validation fonctionne pour les champs requis
     */
    public function test_contact_form_validation_works()
    {
        $response = $this->post('/contact', []);

        $response->assertSessionHasErrors(['name', 'email', 'subject', 'message']);
    }

    /**
     * Test que la validation de l'email fonctionne
     */
    public function test_contact_form_email_validation()
    {
        $formData = [
            'name' => 'John Doe',
            'email' => 'invalid-email',
            'subject' => 'Test',
            'message' => 'Test message',
        ];

        $response = $this->post('/contact', $formData);

        $response->assertSessionHasErrors(['email']);
    }

    /**
     * Test que les messages d'erreur personnalisés s'affichent
     */
    public function test_contact_form_custom_error_messages()
    {
        $response = $this->post('/contact', [
            'name' => 'A', // Trop court
            'email' => 'test@example.com',
            'subject' => 'Test', // Trop court
            'message' => 'Test', // Trop court
        ]);

        $response->assertSessionHasErrors();
    }
}