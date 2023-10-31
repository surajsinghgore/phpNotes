<?php
echo "<h1>Delete Record</h1>";
$con=mysqli_connect('localhost','root','','my_db');
if(!$con){
    die("Could't connect to server");
}
$query="delete from employee where emp_id=100";

mysqli_query($con,$query);
echo "Record Delete Successfully";
?>