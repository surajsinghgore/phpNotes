<?php

session_start();
if (isset($_SESSION['name'])) {
        $newname = $_SESSION['name'] = "test user";
        $newEmail = $_SESSION['email'] = "test@gmail.com";
    echo "<h1>Session update successfully</h1>";
        echo "<h2>New Name " . $newname . "</h2>";
        echo "<h2>New Email " . $newEmail . "</h2>";
} else {
    echo "<h1>Session Not created</h1>";
}
