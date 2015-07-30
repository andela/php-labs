<?php

class EvenNumbers
{
    public function isEven($number)
    {
      if($number % 2 === 0){
        return true;
      }else{
        return false;
      }
    }
}
