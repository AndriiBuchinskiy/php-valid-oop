<?php

namespace valid;

class Date extends Validator
{
    private  $date;

    public function __construct($date)
    {
        $this->date = $date;
    }

    public function validate():bool
  {
      if( $this->date > date('Y-m-d')){
          return false;
      }
     return true;
  }
}