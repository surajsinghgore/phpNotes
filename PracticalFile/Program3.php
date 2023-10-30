<?php
$var=5;
function test_var(){

    $loc=10;
    echo $loc." is local Scope Variable <br>";
    global $var;
    echo $var." is global Scope Variable <br>";

}
test_var()
?>