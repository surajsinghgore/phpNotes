<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Records</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <?php

    //!established connection with database name 
    $connection = mysqli_connect("localhost", "root", "", "db");

    // creating query to insert records
    $sql_query = "insert into student(rollNo,name,Age,class,address,mobile,email) values(102,'suraj singh',19,'bca-c','#207 kaimbwala chandigarh',9779334959,'surajthakurrs45@gmail.com')";

    $res = mysqli_query($connection, $sql_query);

    //res=1 after success
    if($res){

        echo "<h3> Record successfully Insert</h3>";
    
    }
    

    mysqli_close($connection);
    ?>
</body>

</html>