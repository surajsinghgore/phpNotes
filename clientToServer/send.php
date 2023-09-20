<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $rn=$_REQUEST['rollno'];
    $email=$_REQUEST['email'];
    $mobile=$_REQUEST['mobile'];
    $sname=$_REQUEST['name'];
    $age=$_REQUEST['age'];
    $class=$_REQUEST['class'];
    $address=$_REQUEST['address'];


    
}

else{

    echo "<h2>Only Post Request Is Allowed</h2>";
}





?>