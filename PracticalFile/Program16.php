<?php
echo "<h1>Formal Parameter</h1>";
function getSum($num1,$num2){
    $sum=$num1+$num2;
    echo "Sum $num1 + $num2 = $sum ";
}
echo "<br> Formal parameter define during Function Declaration<br>";
echo "<h1>Actual Parameter</h1>";
getSum(20,30);
echo "<br> Actual Parameter Which passed during Function call";

?>