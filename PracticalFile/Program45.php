<?php
$fptr=fopen("demo.txt","a");

fwrite($fptr,"\nWriting In File");
echo "Write In File Successfully";

fclose($fptr);
?>