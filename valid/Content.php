<?php

namespace valid;

class Content extends Validator
{
    private  $content;

    public function __construct($content)
    {
        $this->content = $content;
    }

  public function validate():bool
  {
      if(strlen($this->content) > 30000 ){
          return false;
      }
      return true;
  }

}