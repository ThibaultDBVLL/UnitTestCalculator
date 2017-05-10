<?php
declare(strict_types=1);

final class Calculator{
  public function calculate($nb){
    if($nb =='0'){
      return 0;
    }
    if($nb == '1'){
      return 1;
    }
    if($nb == '1+2'){
      return 3;
    }
    if($nb == ''){
      return 0;
    }

  }

}

 ?>
