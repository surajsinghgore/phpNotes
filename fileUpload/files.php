<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
   // destination of files 
    $target_path = "./files/";  

    // combine path and file name together to store
    $target_path = $target_path.basename( $_FILES['filesInput']['name']);  


    //   uploading files using move_uploaded_file(filename,location)
if(move_uploaded_file($_FILES['filesInput']['tmp_name'], $target_path)) {  
 
    echo "<h1>File Successfully Uploaded</h1>";
} else{  
    echo "Sorry, file not uploaded, please try again!";  
}  




}
else{

    echo "<h1>Only Post Request Is Allowed</h1>";

}
?>