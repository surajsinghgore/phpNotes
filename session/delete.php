<?php
//!this also use to logout functionality

session_start();
session_unset();
session_destroy();
echo "<h1>session successfully deleted</h1>";
?>