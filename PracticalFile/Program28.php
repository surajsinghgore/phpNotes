<?php

echo "<h1>String Built In Function</h1>";
$str="Welcome to PHP Programming";
echo "str = $str <br>";
// strlen
$len=strlen($str);
echo "strlen() = $len <br>";
// word count
echo "str_word_count() = ".str_word_count($str)."<br>";
echo "strrev() = ".strrev($str)."<br>";
echo "strtolower() = ".strtolower($str)."<br>";
echo "strtoupper() = ".strtoupper($str)."<br>";
echo "ucfirst() = ".ucfirst($str)."<br>";
echo "ucwords() = ".ucwords($str)."<br>";
echo "str_repeat() = ".str_repeat("Hello",3)."<br>";
echo "substr(str,0,7) = ".substr($str,0,7)."<br>";
$new_str=str_replace("welcome","hi",$str);
echo "str_replace() = ".$new_str."<br>";
echo "trim() = ".trim($str);
?>