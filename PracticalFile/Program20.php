<?php
$num=5;
echo "<h1>Recursion</h1>";
echo "Factorial of $num is ".fact($num);
function fact($num){
if($num<=0){return 1;}
else{
    return $num*fact($num-1);
}
}
?>