<?php

namespace valid;

class Email extends Validator
{
   private $email;

   public function __construct($email)
   {
       $this->email = $email;
   }

    public function validate():bool
   {
       $regExpEmail = '/^[a-zA-Z0-9-_\.]+@[a-zA-Z0-9]+\.[a-zA-Z]+$/';
       if ( !preg_match($regExpEmail, $this->email) )
       {
           return false;
       }
       return true;
   }
}