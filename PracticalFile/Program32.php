<?php

echo "<H1>CONNECTING TO DATABASE</H1>";

$con=mysqli_connect('localhost','root','');
if(!$con){
    die("Could't connect to server");
}
echo "Connected Successfully";
?>