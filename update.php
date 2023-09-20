<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    
    <?php
//establishing connection
$con=mysqli_connect("localhost","root","","db");
if($con){
    $sql_query="update student set name=\"suraj singh\" where id=6";
    
$res=mysqli_query($con,$sql_query);
if($res){

    echo "<h3>Successfully Updated</h3>";
}

}

else{

    echo "<h2>Sorry Something went wrong </h2>";
}
?>
</body>
</html>