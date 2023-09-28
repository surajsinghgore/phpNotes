<?php

session_start();
$_SESSION['name']="suraj singh";
$_SESSION['email']="suraj@gmail.com";

$enc_session=session_encode();
echo $enc_session."<br>";
echo "<h1>Session created with encode successfully</h1>";
?>