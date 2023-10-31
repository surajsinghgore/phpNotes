<?php
echo "<h1>Modifying A Cookie Value</h1>";

if(isset($_COOKIE['message'])){ 
    echo "old cookie = ".$_COOKIE['message']."<br>";
    setcookie('message','New Value',time()+60*60*24*30);
    echo "New Value of Cookie = New Value <br>";

}
echo "<h1>Delete Cookie From Browser</h1>";

if(isset($_COOKIE['message'])){ 

    setcookie('message','',time()-3600);
    echo "Cookie Successfully Deleted ";

}
?>