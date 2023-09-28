<?php

session_start();
if (isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        echo "<h2>Name " . $name . "</h2>";
        echo "<h2>Email " . $email . "</h2>";
} else {
    echo "<h1>Session Not updated</h1>";
}

?>