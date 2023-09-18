<?php
$arr = [1,2,3,4,5];
$flag = false;
foreach ($arr as $value) {
   if ($value == 5) {
      $flag = true;
   }

}
if ($flag) {
   echo "да";
   }else
   echo "нет";


   echo "<br>";


   $flag = false;
   $num1 = 31;
   for ($i=2; $i < $num1; $i++) { 
    $num = $num1%$i;
    if ($num == 0) {
      $flag = true;
 }
   }

   if ($flag) {
      echo "да";
 } else echo "нет";


   echo "<br>";
      
   
   $arr = [1,2,3,4,5,6,5];
   $flag = false;
 foreach ($arr as $key => $value) {
   $value;

   if ($key < count($arr)-1) {
   
   if ($arr[$key+1] == $value) {
      $flag = true;
   }
}
 }
 if($flag){
   echo "да";
 } else echo "net";

 echo "<br>";
?>

