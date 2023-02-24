<?php

namespace valid;

class Views extends Validator
{
    private  $views;

    public function __construct($views)
    {
        $this->views = $views;
    }

    public function validate():bool
   {
       if (!is_numeric($this->views) || $this->views < 0 || !filter_var($this->views, FILTER_VALIDATE_INT))
           {
              return false;
          }
       return true;
   }
}