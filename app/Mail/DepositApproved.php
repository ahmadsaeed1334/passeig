<?php

namespace App\Mail;

use App\Models\DepositRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DepositApproved extends Mailable
{
    use Queueable, SerializesModels;
    public $request;
    /**
     * Create a new message instance.
     */
    public function __construct(DepositRequest $request)
    {
        $this->request = $request;
    }

    public function build()
    {
        return $this->subject('Deposit Approved')
                    ->view('emails.deposit-approved');
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Deposit Approved',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.deposit-approved',
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
