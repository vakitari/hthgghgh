<?php
function cube($num)
{
return pow($num,2);
}
echo cube(2);

echo "<br>";

function plus($num, $num2)
{
return $num+$num2;
}
echo plus(2,2);

echo "<br>";

function minus($num, $num2,$num3)
{
return ($num-$num2)*$num3;
}
echo minus(4,3,2);

echo "<br>";

function data($num)
{
   $value;
   switch ($num) {
      case 1: $value = "понедельник";
        
         break;
         case 2: $value = "Вторник";
        
         break;
         case 3: $value = "Среда";
        
         break;
         case 4: $value = "Четверг";
        
         break;
         case 5: $value = "Пятница";
        
         break;
         case 6: $value = "Субота";
        
         break;
         case 7: $value = "Воскресенье";
       
        
         break;
      
      default:$value = "цифра не от 1 до 7";
        
         break;
   }
return $value;
}
echo data(4);




?>