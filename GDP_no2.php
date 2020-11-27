<?php
  function kelipatan($a,$b,$n)
  {
    $total = 0;
    $totalA = 0;
    $totalB = 0;
    // while(($totalA <= $n) && ($totalB <= $n))
    // {
    //   $totalA += $a;
    //   $totalB += $b;
    //   $total = $totalA + $totalB;
    // }
    for($i = 0;$i <= $n;$i++)
    {
      if(($totalA <= $n) && ($totalB <= $n))
      {
        $totalA += $a;
        $totalB += $b;
      }
    }
    

    return $totalA;
  }
  echo kelipatan(3,5,10);
  echo '<br>';
  echo kelipatan(8,15,50);
?>