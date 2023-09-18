<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="" method = "POST">
      <input type="radio" name="vote" value=1 checked>отлично <br>
      <input type="radio" name="vote" value=2> хорошо<br>
      <input type="radio" name="vote" value=3>удовлетварительно <br>
      <input type="radio" name="vote" value=4> круто<br>
      <button >проголосовать</button>
   </form>   
</body>
</html>


<?php

if ($_POST['vote'])
{
   $file=$_POST['vote'].".txt";

   $f=fopen($file,"r");

   $vote=fread($f,100);

   $vote++;
   $f=fopen($file,"w");
   fwrite($f,$vote);
   fclose($f);
}
$file="1".".txt";
$file1="2".".txt";
$file2="3".".txt";
$file3="4".".txt";

$fd=fopen($file,"r");
$fd2=fopen($file1,"r");
$fd3=fopen($file2,"r");
$fd4=fopen($file3,"r");

   $str = htmlentities(fgets($fd));
   $str2 = htmlentities(fgets($fd2));
   $str3 = htmlentities(fgets($fd3));
   $str4 = htmlentities(fgets($fd4));
   echo "5 " . $str . "<br>";
   echo "4 " . $str2 . "<br>";
   echo "3 " . $str3 . "<br>";
   echo "2 " . $str4 . "<br>";

?>
