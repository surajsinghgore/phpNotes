<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Data</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php
    // connection established
    $connection = mysqli_connect("localhost", "root", "", "db");


    $sql_query = "select * from student";
    $res = mysqli_query($connection, $sql_query);

    // $data=mysqli_fetch_array($res); // return all cells in single single array
    $len = mysqli_num_rows($res); // return rows in tables

    // row wise printing
    while ($data = mysqli_fetch_array($res)) {
        echo $data['id'] . " ";
        echo $data['rollNo'] . " ";
        echo $data['name'] . " ";
        echo $data['Age'] . " ";
        echo $data['class'] . " ";
        echo $data['address'] . " ";
        echo $data['mobile'] . " ";
        echo $data['email'] . " ";
        echo "<br>";
    }
    mysqli_close($connection);
    ?>
</body>

</html>