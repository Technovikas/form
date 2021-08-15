<?php

$str = "This this this this ";
echo $str. "<br>";
$lenn = strlen($str);
echo "The length of this string is". $lenn . ". Thank You <br>";
echo "the number of word in this string ". str_word_count($str). ". thank you <br>";
echo "the reverse string is ". strrev($str) .". Thank you <br>";
echo "the search for is in this string ". strpos($str, "is") .". Thank you <br>";
echo "the replaced string is ". str_replace("is", "at", $str) .". Thank You <br>";







?>