<?php
if(isset($_COOKIE['message'])){
    echo "<h1>Cookie Set In Browser is message <span style='color:red'>".$_COOKIE['message']."</span></h1>";
}
?>