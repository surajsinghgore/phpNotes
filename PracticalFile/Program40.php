<?php
echo "<h1>Setting Cookie In Browser</h1>";

setcookie('message','PHP Programming',time()+60*60*24*30);
echo "Cookie created In Browser";

echo "<h1>Read Cookie From Browser</h1>";
if(isset($_COOKIE['message'])){
    
    echo "cookie : ".$_COOKIE['message'];
}
?>