<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Database</title>
</head>

<body>
    <?php
    // mysql_connect(host,username,password);
    // $connection = mysqli_connect('localhost', 'root', '');
    require("./connection.php");
    // $connection is coming from connection.php file
    // ! creating database in mysql database 
    $sql_query = "create database db";
    // ! Executing query to create database
    $res = mysqli_query($connection, $sql_query);
    // $res= 1 after successfully database created
    //  database successfully created
    if ($res) {

        echo "<h3>Database Created Successfully</h3>";
    }

    // closing connections 
    mysqli_close($connection);

    ?>
</body>

</html>