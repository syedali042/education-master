<?php 
    
	include 'db.php';

    if(isset($_POST['action']) && $_POST['action']=='addClass'){

        $query = mysqli_query($con, "INSERT INTO `classes`(`class_title`, `class_title_img`, `class_description`, `starting_date`, `age_group`, `class_size`, `class_carry_time`, `class_duration`, `class_time`, `class_tution_fee`, `class_added`) VALUES ('".$_POST['class_title']."', '".$_POST['class_img']."', '".$_POST['class_description']."', '".$_POST['starting_date']."', '".$_POST['age_group']."', '".$_POST['class_size']."', '', '".$_POST['class_duration']."', '".$_POST['class_time']."', '".$_POST['class_tution_fee']."', '"._TODAY."')");

        if($query==true){
            echo json_encode(array('status'=>true, 'data'=>$_POST));
        }
        

    }else if(isset($_POST['action']) && $_POST['action']=='getClass'){

        $query = mysqli_query($con, "SELECT * FROM classes WHERE class_id = '".$_POST['class_id']."' ");
        $result = mysqli_fetch_assoc($query);
        if($query==true){
            echo json_encode(array('status'=>true, 'data'=>$result));
        }
        
    }else if (isset($_FILES) && $_POST['class_image']){

        $ext = pathinfo($_FILES["main_image"]["name"], PATHINFO_EXTENSION);
        
        $file_name = md5(date('YmdHms').$_FILES["main_image"]['name']).'.'.$ext;

        $path = '../img/classes/'.$file_name;
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
    }else if(isset($_POST['action']) && $_POST['action']=='updateClass'){

        $query = mysqli_query($con, "UPDATE `classes` SET `class_title`='".$_POST['class_title']."',`class_title_img`='".$_POST['class_img']."',`class_description`='".$_POST['class_description']."',`starting_date`='".$_POST['starting_date']."',`age_group`='".$_POST['age_group']."',`class_size`='".$_POST['class_size']."',`class_carry_time`='',`class_duration`='".$_POST['class_duration']."',`class_time`='".$_POST['class_time']."', `class_tution_fee`='".$_POST['class_tution_fee']."' WHERE class_id = '".$_POST['class_id']."'");
        if($query==true){
            echo json_encode(array('status'=>true, 'data'=>$_POST));
        }

    }else if(isset($_POST['action']) && $_POST['action']=='deleteClass'){

        $query = mysqli_query($con, "DELETE FROM classes WHERE class_id = '".$_POST['class_id']."' ");
        if($query==true){
            echo json_encode(array('status'=>true, 'data'=>$_POST));
        }

    }

?>