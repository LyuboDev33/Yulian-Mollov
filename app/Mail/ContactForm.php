<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $telephone;
    public $messageForm;
    
    public function __construct(string $name, string $email, string $telephone, string $messageForm)  {
        $this->name = $name;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->messageForm = $messageForm;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('noreply@yulianmollov.bg', 'Контакта Форма'),
            subject: 'Запитване',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.contact-form',
            with: [
                'name' => $this->name, // Variable should be 'name', not 'names'
                'email' => $this->email,
                'telephone' => $this->telephone,
                'messageForm' => $this->messageForm
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
