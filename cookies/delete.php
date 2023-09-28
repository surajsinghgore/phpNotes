<?php

if(isset($_COOKIE['message'])){
    unset($_COOKIE['message']);
    setcookie('message', '', -1, '/'); 
    echo "<h1>Successfully Cookie Deleted</h1>";
}
?>