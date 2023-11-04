<?php 
echo "PHP DIRECTORY FUNCTION <br>";

echo "getcwd() = ";
echo getcwd();
echo "<br>";

chdir("file/");
echo "chdir() = ";
echo getcwd();
echo "<br>";
$dir=".";
echo "scandir() = ";
echo "<pre>";
print_r(scandir($dir));
echo "<pre>";



if(is_dir($dir)){
    echo "opendir() = <br>";
    if($d=opendir($dir)){
        echo "readdir() = <br>";
        while($file=readdir($d)){
            echo "filename : ".$file."<br>";
        }
        closedir($d);
        echo "closedir()";
    }

}
?>