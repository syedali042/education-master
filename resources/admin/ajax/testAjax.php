<?php 

	include 'db.php';

    if(isset($_POST['action']) && $_POST['action']=='addTest'){

        $query = mysqli_query($con, "INSERT INTO `testimonial`(`test_author`, `test_author_img`, `test_text`, `test_author_title`, `test_added`) VALUES ('".$_POST['test_author']."', '".$_POST['test_author_img']."', '".$_POST['test_text']."', '".$_POST['test_author_title']."', '"._TODAY."')");

        if($query==true){
            echo json_encode(array('status'=>true, 'data'=>$_POST));
        }
        

    }else if (isset($_FILES) && $_POST['test_img']){

        $ext = pathinfo($_FILES["main_image"]["name"], PATHINFO_EXTENSION);
        
        $file_name = md5(date('YmdHms').$_FILES["main_image"]['name']).'.'.$ext;

        $path = '../img/testimonial/'.$file_name;
        $fileName = strtolower($_FILES['main_image']['name']);
        $allowedExts = array('jpg','JPG','jpeg','JPEG','png','PNG','mp4','mpeg','avi', 'JFIF', 'jfif');
        $extension = explode(".", $fileName);   
        $extension = end($extension);
        if(in_array($extension, $allowedExts))
        {
            if (move_uploaded_file($_FILES['main_image']['tmp_name'], $path))
            {   
               
                $img = $file_name;
                   
                echo json_encode(array("status" => true , "data" => $img));
                }
                else
                {
                echo json_encode(array("status" => false , "msg" => "File not Uploaded :( please try again or check your internet connection!"));
                }
            }
        else
        {
        	echo json_encode(array("status" => false , "msg" => "File must be an video file."));
        }

   	}else if(isset($_POST['action']) && $_POST['action']=='deleteTest'){

        $query = mysqli_query($con, "DELETE FROM testimonial WHERE test_id = '".$_POST['test_id']."' ");
        if($query==true){
            echo json_encode(array('status'=>true, 'data'=>$_POST));
        }

    }

?>