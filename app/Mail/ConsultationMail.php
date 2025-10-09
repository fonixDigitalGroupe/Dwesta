<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConsultationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nom;
    public $email;
    public $service;
    public $dateHeure;
    public $societe;
    public $telephone;
    public $messageContent;

    /**
     * Create a new message instance.
     */
    public function __construct($nom, $email, $service, $dateHeure, $societe, $telephone, $messageContent)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->service = $service;
        $this->dateHeure = $dateHeure;
        $this->societe = $societe;
        $this->telephone = $telephone;
        $this->messageContent = $messageContent;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Nouvelle demande de consultation - ' . $this->service)
                    ->view('emails.consultation');
    }
}

