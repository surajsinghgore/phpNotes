<?php
echo "<h1>Create Database</h1>";
$con=mysqli_connect('localhost','root','');
if(!$con){
    die("Could't connect to server");
}
$query="create database my_db";
mysqli_query($con,$query);
echo "Database created Successfully";
?>