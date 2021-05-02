<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HelloMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $urls)
    {
        //
        $this->request = $request;
        $this->urls = $urls;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        return $this->view('view.name');
        return $this
            ->subject($this->request->name.'さんからメールが届きました')
            ->view('hello.mail.send')
            ->with([
                'urls' => $this->urls,
                'text' => $this->request->text,
            ]);
    }
}
