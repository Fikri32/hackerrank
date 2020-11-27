<?php
  function temukan($n)
  {
    $hasilA = 0;
    $hasilB = 0;
    for($i = $n  ;$i > 0 ;$i--)
    {
     if($n % $i == 0)
     {
      echo "hasil KE " . $i ;
     }else{
      echo "hasil KE " . $i ;
     }
      
       
     
    }
    
  }
  echo temukan(4);
?>