<?php

namespace App\Mail;

use App\Models\DonHang;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class orderConfirm extends Mailable
{
    use Queueable, SerializesModels;

    public $donhang;
    /**
     * Create a new message instance.
     */
    public function __construct(DonHang $donhang)
    {
        $this->donhang = $donhang;
    }

    /**
     * Get the message envelope.
     */
    public function build(){
        return $this->subject('xác nhận đơn hàng')->markdown('clients.donhang.mail')->with('donhang', $this->donhang);
    }
}
