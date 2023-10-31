<?php
echo "<h1>Super Global Variable</h1>";
echo "<h3>$ Global Variable</h3>";
$num=10;

function test(){$n=$GLOBALS['num'] ; echo $n."<br>";}
test();

echo "<h3>$ SERVER</h3>";
echo "File Name ".$_SERVER['PHP_SELF']."<br>";
echo "Server Name ".$_SERVER['SERVER_NAME']."<br>";
echo "Port on the server".$_SERVER['SERVER_PORT']."<br>";

echo "<h3>$ GET</h3>";
echo "Name = ".$_GET['name']."<BR>";
echo "Email = ".$_GET['email']."<BR>";

echo "<h3>$ POST</h3>";
echo "<h3>$ FILE</h3>";
echo "<h3>$ REQUEST</h3>";
echo "<h3>$ COOKIE</h3>";
echo "<h3>$ SESSION</h3>";
?>