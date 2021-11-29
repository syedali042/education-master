<?php

include 'db.php';
// Count total files
$countfiles = count($_FILES['files']['name']);

// Upload directory
$upload_location = "../img/gallery/";

// To store uploaded files path
$files_arr = array();

// Loop all files
for($index = 0;$index < $countfiles;$index++){

   // File name
   $filename = $_FILES['files']['name'][$index];

   // Get extension
   $ext = pathinfo($filename, PATHINFO_EXTENSION);
   

   // Valid image extension
   $valid_ext = array('jpg','JPG','jpeg','JPEG','png','PNG','mp4','mpeg','avi', 'JFIF', 'jfif');

   // Check extension
   if(in_array($ext, $valid_ext)){

     // File path
     $path = $upload_location.$filename;
     // Upload file
     if(move_uploaded_file($_FILES['files']['tmp_name'][$index],$path)){
        $files_arr[] = $filename;
        $uploadImages = mysqli_query($con, "insert into gallery(img_title, img_description, img_added) values('".$_POST['img_description']."', '$filename', '"._TODAY."')");
        
     }
   }
}

echo json_encode($files_arr);
die;


