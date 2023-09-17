<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php
    // connection established
$connection=mysqli_connect("localhost","root","","db");


$sql_query="delete from student where id=3";
$res=mysqli_query($connection,$sql_query);
 echo $res;
if($res){

    echo "<h3>Record Successfully Deleted</h3>";
}
mysqli_close($connection);
    ?>
</body>
</html>