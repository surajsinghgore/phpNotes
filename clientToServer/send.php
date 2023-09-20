<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $rn = $_REQUEST['rollno'];
    $email = $_REQUEST['email'];
    $mobile = $_REQUEST['mobile'];
    $sname = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $class = $_REQUEST['class'];
    $address = $_REQUEST['address'];

    $con = mysqli_connect("localhost", "root", "", "db");
    if ($con) {
        $sql_query = "insert into student(rollNo,name,Age,class,address,mobile,email) values($rn,'$sname',$age,'$class','$address',$mobile,'$email')";
        $res = mysqli_query($con, $sql_query);
        if ($res) {

            echo "<h1>Successfully Data Send</h1>";
        }
    }
} else {

    echo "<h2>Only Post Request Is Allowed</h2>";
}
