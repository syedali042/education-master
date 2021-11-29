<?php 

	include 'db.php';

    if(isset($_POST['action']) && $_POST['action']=='addSlider'){

        $query = mysqli_query($con, "INSERT INTO `slider`(`slide_img`, `slide_heading`, `slide_text`, `slide_added`) VALUES ('".$_POST['slide_image']."', '".$_POST['slide_heading']."', '".$_POST['slide_text']."', '"._TODAY."')");
        if($query==true){
            echo json_encode(array('status'=>true, 'data'=>$_POST));
        }
        

    }else if (isset($_FILES) && $_POST['slider_img']){

        $ext = pathinfo($_FILES["main_image"]["name"], PATHINFO_EXTENSION);
        
        $file_name = md5(date('YmdHms').$_FILES["main_image"]['name']).'.'.$ext;

        $path = '../img/slider/'.$file_name;
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

   	}else if(isset($_POST['action']) && $_POST['action']=='deleteSlide'){

        $query = mysqli_query($con, "DELETE FROM slider WHERE slide_id = '".$_POST['slide_id']."' ");
        if($query==true){
            echo json_encode(array('status'=>true, 'data'=>$_POST));
        }

    }else if(isset($_POST['action']) && $_POST['action']=='deleteGallery'){

        $query = mysqli_query($con, "DELETE FROM gallery WHERE img_id = '".$_POST['img_id']."' ");
        
        if($query==true){
            echo json_encode(array('status'=>true, 'data'=>$_POST));
        }

    }

?>