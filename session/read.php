<?php

session_start();
if (isset($_SESSION['name'])) {
        $name = $_SESSION['name'] = "suraj singh";
        $email = $_SESSION['email'] = "suraj@gmail.com";
        echo "<h2>Name " . $name . "</h2>";
        echo "<h2>Name " . $email . "</h2>";
} else {
    echo "<h1>Session Not created</h1>";
}
