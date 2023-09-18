<?php
if($_SERVER['REQUEST_METHOD']=="POST"){

// ! file name gets
if(($_FILES['filesInput']['type']=="image/png")||($_FILES['filesInput']['type']=="image/jpg")||($_FILES['filesInput']['type']=="image/jpeg")||($_FILES['filesInput']['type']=="image/gif")){
    $name = $_FILES['filesInput']['name'];
    //! file name temporary 
$tmp_name =  $_FILES['filesInput']['tmp_name'];

// ! file destination
$location = "./files/";
// ! generate unique name for files
$new_name = $location.time()."-".rand(1000, 9999)."-".$name;


if(move_uploaded_file($tmp_name, $new_name)) {  
 
    echo "<h1>File Successfully Uploaded</h1>";
} else{  
    echo "Sorry, file not uploaded, please try again!";  
}  


}else{
    echo "<h3>Only PNG JPG JPEG AND  GIF Images are  Allowed to upload</h3>";


}
   

}
else{

    echo "<h1>Only Post Request Is Allowed</h1>";

}
