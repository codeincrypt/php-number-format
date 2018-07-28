<?php 
      $input = 1234;

      $k = pow(10,3);
      $mil = pow(10,6);
      $bil = pow(10,9);

      if($input >= $bil){
           $output = $input / $bil . 'B';
      }
      elseif($input >= $mil){
           $output = round($input / $mil, 1) . 'M';
      }
      elseif($input >= $k){
           $output = round($input / $k, 1) . 'K';
      }
      else{
           $output = $input;
      }
  ?>
