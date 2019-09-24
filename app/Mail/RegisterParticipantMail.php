<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterParticipantMail extends Mailable
{
    use Queueable, SerializesModels;
    private $code, $name;

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
        $jumlah = 25000;
        $bank = "BNI";
        $no_rek = "0714518818";
        $atas_nama = "Rara Putri Ayu Nada Damayanti";
        $code = $this->code;
        return $this->view('emails.register-mail')
            ->with(compact('name', 'code', 'jumlah', 'bank', 'no_rek', 'atas_nama'));
    }
}
