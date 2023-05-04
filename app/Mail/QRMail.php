<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QRMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data=$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       $status=$this->data['status'];
    //    if($status==='Early Participant'){
    //     return $this->markdown('email.early-participant')->from('committee@grabbusinessforum.com')->subject('Early Participant')
    //     ->with($this->data);
    //    }else{
        if($status==='EF Approved'){
            return $this->markdown('email.executive')->from('committee@grabbusinessforum.com')->subject('Confirmation Email | Grab Business Forum 2023 | March 16, 2023')
            ->with($this->data);
        }else if($status==='BT Approved'){
            return $this->markdown('email.business-talk')->from('committee@grabbusinessforum.com')->subject('Confirmation Email | Grab Business Forum 2023 | March 16, 2023')
            ->with($this->data);
            // return $this->markdown('email.business-talk')->from('committee@grabbusinessforum.com')->subject('Email Konfirmasi | Grab Business Forum 2023 | 16 Maret 2023')
            // ->with($this->data);
        }else if($status==="EF Rejected"){
            return $this->markdown('email.executive-rejected')->from('committee@grabbusinessforum.com')->subject('Confirmation Email | Grab Business Forum 2023')
            ->with($this->data);
        }else if($status==="BT Rejected"){
            return $this->markdown('email.business-talk-rejected')->from('committee@grabbusinessforum.com')->subject(' Email Konfirmasi | Grab Business Forum 2023')
            ->with($this->data);
        }
    //    }
      
    }
}
