<?php

namespace valid;

class Annotation extends Validator
{
    private  $annotaion;

    public function __construct($annotaion)
    {
        $this->annotaion = $annotaion;
    }

    public function validate():bool
  {
      if(strlen($this->annotaion) > 500){
          return false;
      }
      return true;
  }
}