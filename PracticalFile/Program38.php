<?php
echo "<h1>Update Record</h1>";
$con=mysqli_connect('localhost','root','','my_db');
if(!$con){
    die("Could't connect to server");
}
$query="update employee set emp_name='shubhi' where emp_id=101";

mysqli_query($con,$query);
echo "Record Update Successfully";
?>