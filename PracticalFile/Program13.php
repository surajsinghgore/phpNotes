<?php
echo "<h1>Break Statement</h1>";
for ($i=0; $i <=10 ; $i++) { 
echo "$i ";
if($i==5){
    break;
}
}
echo "<br>";
echo "<h1>Continue Statement</h1>";
for ($i=0; $i <=10 ; $i++) { 
    if($i==5){
        continue;
    }
    echo "$i ";
}
?>