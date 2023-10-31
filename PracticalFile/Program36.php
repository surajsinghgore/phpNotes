<?php
$con=mysqli_connect('localhost','root','','my_db');
if(!$con){
    die("Could't connect to server");
}
echo "<h1>Data Fetch</h1>";
$query="select*from employee";
$query_result=mysqli_query($con,$query);
$count=mysqli_num_rows($query_result);
if($count>0){
    echo "<table> <tr><th>Emp_Id</th><th>Emp_Name</th><th>Emp_Dept</th><th>Emp_City</th></tr>";
    
    while($record=mysqli_fetch_array($query_result)){
echo "<tr><td>".$record['emp_id']."</td><td>".$record['emp_name']."</td><td>".$record['emp_dept']."</td><td>".$record['emp_city']."</td></tr>";
    }

    echo "</table>";
}
mysqli_close($con);
?>