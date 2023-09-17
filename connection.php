<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection - PHP</title>

    <style>
        h1 {
            text-align: center;
            color: red;
            font-size: 40px;
            text-transform: uppercase
        }

        h2 {
            text-align: center;
            color: red;
            font-size: 35px;
            text-transform: uppercase
        }

        h3 {
            text-align: center;

            color: blue;
            font-size: 30px
        }
    </style>
</head>

<body>
    <h1>How To Make Connection With PhpMyAdmin with Php</h1>
    <?php
    //!Parameter Values with MySql_connect
    //* mysqli_connect(host, username, password, *dbname, *port, *socket)

    //? 1.host	-> Optional. Specifies a host name or an IP address
    //?2. username	-> Optional. Specifies the MySQL username
    //?3. password	-> Optional. Specifies the MySQL password
    //?4. dbname -> Optional. Specifies the default database to be used
    //?5. port	-> Optional. Specifies the port number to attempt to connect to the MySQL server
    //?6. socket ->	Optional. Specifies the socket or named pipe to be used
    // $con = mysqli_connect("localhost","my_user","my_password","my_db");

    // ! connection with local_system
    $host = "localhost";
    $username = "root";
    $password = "";

    $connection = mysqli_connect($host, $username, $password);
    // Check connection
    if (mysqli_connect_errno()) {
        exit();
    }

    echo "<h3> Connection Successfully Established With Database</h3>";
    ?>
</body>

</html>