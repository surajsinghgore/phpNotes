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
    $con = mysqli_connect("localhost", "root", "", "db");
    if ($con) {
        // update query
        $sql_query = "update student set name=\"suraj singh\" where id=6";
        // executing update query
        $res = mysqli_query($con, $sql_query);
        // return 1 if true
        if ($res) {

            echo "<h3>Successfully Updated</h3>";
        }
    }
    // connection not established successfully
    else {

        echo "<h2>Sorry Something went wrong </h2>";
    }
    // closing connection
    mysqli_close($con);
    ?>
</body>

</html>