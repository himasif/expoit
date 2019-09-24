<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TicketMail extends Mailable
{
    use Queueable, SerializesModels;
    private $name, $code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = $this->name;
        $code = $this->code;
        Storage::disk('public')->put('/qr-code/' . $code . '.png', QrCode::format('png')->size(400)->generate($code));
        $url = "qr-code/$code.png";
        return $this->view('emails.ticket')
            ->subject('Tiket Expo IT 2019')
            ->with(compact('name', 'code', 'url'));
    }
}
