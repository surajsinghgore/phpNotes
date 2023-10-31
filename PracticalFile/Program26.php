<?php
echo "<h1>Single Quoted String</h1>";
$var=10;
echo 'value of variable is $var';

echo "<h1>Double Quoted String</h1>";
echo "value of variable is $var";

echo "<h1>Heredoc Syntax</h1>";
$str=<<<TEXT
This is Line No 1 \n
This is Line No 2 \n
Var $var
TEXT;
echo nl2br($str);


echo "<h1>Nowdoc Syntax</h1>";
$str=<<<'TEXT'
This is Line No 1 \n
This is Line No 2 \n
Var $var
TEXT;
echo nl2br($str);

?>