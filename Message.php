<?php

namespcae Project\Mail;

class Message
{
    Protected $mailer; 
    
    public function_construct($mailer) 
    {
        $this->mailer = $mailer;
    }
    
    public function to($address)
    {
        $this->mailer->addAddress($address);
    }
    
    public function subject($subject)
    {
        $this->mailer->Subject =$subject;
    }
    
    public function body($body)
    {
        $this->mailer->body = $body;
    }
}
