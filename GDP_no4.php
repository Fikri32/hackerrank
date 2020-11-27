<?php
  function Missing($string)
  {
    $jumlah = strlen($string);
    $split = str_split($string);

    for($i = 0;$i < $jumlah ; $i++)
    {
      if($split[0] == "?")
      {
       $b = $split[2];
       $c = $split[4];
       $a = $c - $b;
       return $a;
        
      }else if($split[2] == "?")
      {
       $a = $split[0];
       $c = $split[4];
       $b = $c - $a;
       return $b;
      }else{
        $a = $split[0];
        $b = $split[2];
        $c = $a + $b;
        return $c;
      } 
    } 
  }
  
  echo Missing("6+6=?");
?>