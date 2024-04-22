<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
   
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $subject;
    public $message;

    public function __construct($name, $email, $subject, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
    }

    public function build()
    {
        return $this->view('admin.contact.emailsContact')
        ->from($this->email, $this->name) // Set alamat dan nama pengirim
        ->subject($this->subject); // Set subjek email;
    }
     
    public function envelope(): Envelope
    {
        return new Envelope(

        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
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
