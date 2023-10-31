<?php

echo "<h1>Modifying Session</h1>";
session_start();

$_SESSION['Name']="Suraj Singh";
$_SESSION['Role']="Admin";

echo "Old Session Value <br>";
echo "Name = ".$_SESSION['Name']."<br>";
echo "Role = ".$_SESSION['Role']."<br>";


$_SESSION['Name']="Ravi";
$_SESSION['Role']="Client";

echo "Modify Value <br>";
echo "Name = ".$_SESSION['Name']."<br>";
echo "Role = ".$_SESSION['Role']."<br>";

echo "<h1>Delete Session Value </h1>";
if(isset($_SESSION['Name'])){
    unset($_SESSION['Name']);
    echo "Name session variable Delete <br>";
}
if(isset($_SESSION['Role'])){
    unset($_SESSION['Role']);
    echo "Role session variable Delete <br>";
}
?>