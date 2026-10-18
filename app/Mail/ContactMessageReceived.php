<?php

namespace App\Mail;

use App\Models\ContactMessage;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class ContactMessageReceived extends Mailable
{
    public function __construct(public ContactMessage $contact)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New portfolio message from ' . $this->contact->name,
            // Membalas email ini langsung ke pengirim.
            replyTo: [new Address($this->contact->email, $this->contact->name)],
        );
    }

    public function content(): Content
    {
        return new Content(text: 'mail.contact-received');
    }
}
