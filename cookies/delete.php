<?php
// -1 , [ / ] is compulsory parameter to delete cookie
if(isset($_COOKIE['message'])){
    unset($_COOKIE['message']);
    setcookie('message', '', -1, '/'); 
    echo "<h1>Successfully Cookie Deleted</h1>";
}
?>