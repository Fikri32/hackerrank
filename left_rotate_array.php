<?php
      function leftRotatebyOne(&$arr, $n) 
      { 
          $temp = $arr[0]; 
          for ($i = 0; $i < $n - 1; $i++) 
              $arr[$i] = $arr[$i + 1]; 
        
          $arr[$i] = $temp; 
      } 
        
      /*Function to left rotate arr[]  
        of size n by d*/
      function leftRotate(&$arr, $d, $n) 
      { 
          for ($i = 0; $i < $d; $i++) 
              leftRotatebyOne($arr, $n); 
      } 
        
      /* utility function to print  
        an array */
      function printArray(&$arr, $n) 
      { 
          for ($i = 0; $i < $n; $i++) 
              echo $arr[$i] . " "; 
      } 
        
      // Driver Code 
      $arr = array( 1, 2, 3, 4, 5, 6, 7 ); 
      $n = sizeof($arr); 
        
      // Function calling 
      leftRotatebyOne($arr,$n);
      // leftRotate($arr, 4, $n); 
      printArray($arr, $n); 
  // function rotLeft($a, $d) {
  //   $hitung = count($a);

  //   for ($i = 0; $i < $d; $i++) 
  //   {
  //     $temp = $a[$i]; 
  //     for ($i = 0; $i < $hitung - 6; $i++) 
      
  //         $a[$i] = $a[$i + 1]; 
    
  //     $a[$i] = $temp; 
  //   }
  //   for ($i = 0; $i < $hitung; $i++) 
    
  //   echo $a[$i] . " "; 
    
  // }
  // function rotLeft($a, $d) {
    
  //   for($i = 0;$i < $d;$i++)
  //   {
  //     array_push($a, array_shift($a));
  //   }
    
  //   print_r($a);
  // }

  // echo rotLeft(array(98,67,35,1,74,79,7,26,54,63,24,17,32,81), 7)
?>