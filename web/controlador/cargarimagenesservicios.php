<?php
 //$ds          = DIRECTORY_SEPARATOR;  1
 
$storeFolder = 'servicios';   //2
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = "../../imagenes/".$storeFolder."/";  //4
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
 
    move_uploaded_file($tempFile,$targetFile); //6
     
}
?>    