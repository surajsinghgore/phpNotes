<?php
$a=10;$b=20;
function swap(&$a,&$b){
    $temp=$a;
    $a=$b;
    $b=$temp;
    echo "In swap(), the value of variable a = $a <br>";
    echo "In swap(), the value of variable b = $b <br>";
}
swap($a,$b);
echo "Outside swap() function , the value of a= $a <br>";
echo "Outside swap() function , the value of b= $b <br>";
?>