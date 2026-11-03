<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CampaignApproved extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $pass;

    /**
     * Create a new message instance.
     */
    public function __construct(string $userEmail, string $userPassword)
    {
        $this->email = $userEmail;
        $this->pass = $userPassword;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('noreply@yulianmollov.bg', 'Офис д-р Моллов'), // Authenticated email
            replyTo: [
                new Address('ofis@yulianmollov.bg', 'Офис д-р Моллов'), // Optional for reply-to
            ],
            subject: 'Д-р Моллов - Кампания',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.campaign-approved', // Blade view for the email
            with: [
                'userEmail' => $this->email,
                'userPassword' => $this->pass,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}
