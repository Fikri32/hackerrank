<?php
function introTutorial($V, $arr) {

  $jumlah = count($arr);
  $kalimat = implode(" ",$arr);

  for($i = 0;$i < $jumlah ; $i++)
  {
    if($arr[$i] == $V)
    {
      return $i;
    }
  }


}
echo introTutorial(4,array(1,4,5,7,9,12))
?>