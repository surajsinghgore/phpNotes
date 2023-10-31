<?php
    echo $_REQUEST['name']."<br>";
    if(isset($_REQUEST['hb1'])){echo $_REQUEST['hb1']."<br>";}
    if(isset($_REQUEST['hb2'])){echo $_REQUEST['hb2']."<br>";}
    if(isset($_REQUEST['hb3'])){echo $_REQUEST['hb3']."<br>";}

    if(isset($_REQUEST['gender'])){echo $_REQUEST['gender']."<br>";}
    echo $_REQUEST['country']."<br>";
    echo $_REQUEST['country']."<br>";
    echo str_replace("\n","<br>",$_REQUEST['address'])."<br>";

    echo $_REQUEST['password'];
?>