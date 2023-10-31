<?php
echo "<h1>Create Table</h1>";
$con=mysqli_connect('localhost','root','','my_db');
if(!$con){
    die("Could't connect to server");
}
$query="create table employee(emp_id int primary key,emp_name varchar(20) not null,emp_dept varchar(20),emp_city varchar(20));";

mysqli_query($con,$query);
echo "Table created Successfully";
?>