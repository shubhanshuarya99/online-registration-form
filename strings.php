<?php
$str="this is a string";
echo "<br>";
echo $str;
$len=strlen($str);
//concatanation
echo "the length of the string is".$len;
echo "the number of words in length of the string is".str_word_count($str)."thankyou<br>";
echo "the revrse string is ".strrev($str)."thankyou<br>";
echo " the position of a in a string is ".strpos($str,"a");
?>