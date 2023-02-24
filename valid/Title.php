<?php

namespace valid;

class Title extends Validator
{
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }
   public function validate():bool
   {
       if(empty($this->title)  || strlen($this->title) < 3 || strlen($this->title) > 255){
           return false;
       }
       return true;
   }
}