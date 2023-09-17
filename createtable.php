<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <?php

    // establishing database connection
    //! additionally database name have to pass in connection string 
    $connection = mysqli_connect("localhost", "root", "", "db");

    // create table query
    $sql_query = "create table student(id int not null AUTO_INCREMENT,
rollNo int not null,
name varchar(20) not null,
Age int,
class varchar(20) not null,
address varchar(40) not null,
mobile bigint(10) unique,
email varchar(20) unique,
Primary key(id))";

    // executing command to create table 
    $res = mysqli_query($connection, $sql_query);
    // res=1 success

    if ($res) {

        echo "<h3>successfully Table Created</h3>";
    }


    mysqli_close($connection);


    ?>
</body>

</html>