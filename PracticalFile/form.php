<?php
$emp_id=$_REQUEST['emp_id'];
$emp_name=$_REQUEST['emp_name'];
$emp_dept=$_REQUEST['emp_dept'];
$emp_city=$_REQUEST['emp_city'];

$con=mysqli_connect('localhost','root','','my_db');
if(!$con){
    die("Could't connect to server");
}

$id=(int) $emp_id;

$query="insert into employee values ($id,'$emp_name','$emp_dept','$emp_city')";
mysqli_query($con,$query);
echo "<h2>Successfully Insert In Database</h2>";

mysqli_close($con);
?>