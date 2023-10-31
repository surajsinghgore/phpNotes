<?php

echo "<h1>Create PHP Session</h1>";
session_start();

$_SESSION['Name']="Suraj Singh";
$_SESSION['Role']="Admin";

echo "Session variable Set";
echo "<br>";
echo "<h1>Read Session Variable</h1>";
echo "$ _ SESSION used to Access value <br>";
echo "Name = ".$_SESSION['Name']."<br>";
echo "Role = ".$_SESSION['Role']."<br>";
?>