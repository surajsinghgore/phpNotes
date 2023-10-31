<?php
echo "<h1>Insert Record</h1>";
$con=mysqli_connect('localhost','root','','my_db');
if(!$con){
    die("Could't connect to server");
}
$query="insert into employee values(100,'suraj singh','cs','chd')";

mysqli_query($con,$query);
echo "Record Insert Successfully";
?>