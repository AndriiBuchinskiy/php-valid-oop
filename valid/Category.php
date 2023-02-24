<?php

namespace valid;

class Category extends Validator
{

    private  $category;

    //private array $categoryList = ['1' => "спорт"];
    public function __construct($category){

        $this->category = $category;

  }
  public function validate():bool
  {

      if(empty($this->category) || !is_numeric($this->category)|| $this->category == '-1'){
          return false;
      }
      return true;
  }

}