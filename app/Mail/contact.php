<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class contact extends Mailable
{
    use Queueable, SerializesModels;

    public $email;

    public function __construct(Request $request)
    {
        $this->email = $request;
    }

    public function build()
    {
        // return $this->from($this->email->email)
        //     ->subject($this->email->subject)
        //     ->to('rendy@gmail.com')
        //     ->view('email')
        //     ->replyTo()
        //     ->with(
        //         [
        //             'name' => $this->email->name,
        //             'content' => $this->email->message,
        //             'date' => $this->email->date
        //         ]
        //     );
        $recipient_email = 'admin-dev@dev.1010-group.com';

        return $this->from($recipient_email)
            ->subject($this->email->subject)
            ->view('email')
            ->to('admin@1010-group.com')
            ->replyTo($this->email->email)
            ->with(
                [
                    'name' => $this->email->name,
                    'content' => $this->email->message,
                    'date' => $this->email->date
                ]
            );
    }
}
