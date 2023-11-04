<?php
echo "<h1>Deleting File</h1>";

if(unlink("demo.txt")){
    echo "File Deleted";
}
else{
    echo "Couldn't Delete the file";
}
?>