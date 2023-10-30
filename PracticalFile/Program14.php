<?php
$num=4;
function Cal_Square($n){
    $square=$n*$n;
    return $square;
}
echo "<h1>Functions In PHP</h1>";
$result=Cal_Square($num);
echo "The Square of $num is $result";
?>