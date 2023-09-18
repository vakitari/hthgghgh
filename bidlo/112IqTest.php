<?php
function ravno($a,$b) {
   if($a == $b){
     
      return true;
   } else{
      
      return false;}
   
}

var_dump(ravno(3,3));

echo "<br>";


function plus($a,$b) {
   if(($a + $b) > 10){
     
      return true;
   } else{
      
      return false;}
   
}

var_dump(plus(7,4));

echo "<br>";


function pohyi($a) {
   if($a < 0){
     
      return true;
   } else{
      
      return false;}
   
}

var_dump(pohyi(3));

echo "<br>";

?>