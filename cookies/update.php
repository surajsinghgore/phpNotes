<?php
// [ / ] is compulsory parameter to update cookie
if(isset($_COOKIE['message'])){
    setcookie('message', "test test",time()+86400,'/'); 
    echo "<h1>Successfully Cookie Update</h1>";
}
?>