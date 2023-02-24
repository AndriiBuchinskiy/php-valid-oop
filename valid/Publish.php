<?php

namespace valid;

class Publish extends Validator
{
    private  $publish;

    public function __construct($publish)
    {
        $this->publish = $publish;
    }

    public function validate():bool
  {

     if($this->publish === "yes" || $this->publish === "no")
     {
         return true;
     }
     return false;
  }
}