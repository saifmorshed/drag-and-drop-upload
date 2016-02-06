<?php
$ds = DIRECTORY_SEPARATOR;  //1 step
 
$storeFolder = 'uploads/';   //Put your target upload Folder(or create an uploads forder where your upload.php file present)
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3 step (form field name)            
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4 step 
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5 step
 
    move_uploaded_file($tempFile,$targetFile); //6 step
     
}

?> 
