<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ForgotMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $var;
    public function __construct($data1)
    {
        $this->var=$data1;
    }


    public function build(){
        return $this->view('email.forgot-password', ['data2' => $this->var])
                ->attach(public_path('email/logo.png'), [
                    'as' => 'company_logo.png', // Name for the attached file
                    'mime' => 'image/png' // MIME type of the attached file
                ])
                ->attach(public_path('email/thankyou.png'), [
                    'as' => 'thank_you.png', // Name for the attached file
                    'mime' => 'image/png' // MIME type of the attached file
                ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Forgot Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            // view: 'view.name',
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
