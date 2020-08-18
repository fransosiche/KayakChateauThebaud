<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservationToCust extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('Canoe-Kayak-Chateau-Thebaud@ALCKCT.com')
            ->subject('Votre réservation a bien été prise en compte')
            ->view('emails.contact.reservation-form-to-cust')
            ->with('data', $this->data);
    }
}
