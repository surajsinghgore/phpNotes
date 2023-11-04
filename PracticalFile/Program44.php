<?php
$fptr=fopen("demo.txt",'r');
$fptr2=fopen("demo.txt",'r');
if($fptr){
    echo "File Open Successfully <br>";
}
else{
    die("File Not Exits");
}


echo "Reading File using fgets()<br>";
while($content=fgets($fptr,filesize("demo.txt"))){
    echo $content."<br>";
}

echo "Reading File using fgetc()<br>";
while($a=fgetc($fptr2)){
    echo $a;
}


fclose($fptr);
?>