<?php 
	error_reporting(0);
	include 'db.php';
    date_default_timezone_set('Asia/Karachi');
    $todayDate = date('Y-m-d');
	if(isset($_POST['action']) && $_POST['action']=='addUser'){
        $selectUser = mysqli_query($con, "SELECT * FROM users WHERE user_gmail = '".$_POST['user_gmail']."' ");
        $result = mysqli_fetch_assoc($selectUser);

        $totalUser = count($result);
        if($totalUser<1){

            $query = mysqli_query($con, "INSERT INTO `users`(`user_firstname`, `user_lastname`, `user_img`, `user_qualification`, `user_facebook`, `user_twitter`, `user_gmail`, `user_instagram`, `user_pinterest`, `user_address`, `user_contact`, `user_website`, `user_description`, `user_role`, `user_specialization`, `teaching_skills`, `speaking_skills`, `children_well_being`, `user_password`, `user_added`) VALUES ('".$_POST['user_firstname']."', '".$_POST['user_lastname']."', '".$_POST['user_img']."', '".$_POST['user_qualification']."','".$_POST['user_facebook']."', '".$_POST['user_twitter']."', '".$_POST['user_gmail']."', '".$_POST['user_instagram']."', '".$_POST['user_pinterest']."', '".$_POST['user_address']."', '".$_POST['user_contact']."', '".$_POST['user_website']."', '".$_POST['user_description']."', '".$_POST['user_role']."', '".$_POST['user_specialization']."', '".$_POST['teaching_skills']."', '".$_POST['speaking_skills']."', '".$_POST['children_well_being']."', '".$_POST['user_password']."', '$todayDate')");

            if($query==true){
                echo json_encode(array('status'=>true, 'data'=>$_POST));
            }
        }else{

            echo json_encode(array('status'=>false, 'data'=>'Email Already Exist'));

        }
        

   	}else if (isset($_FILES) && $_POST['user_image']){

        $ext = pathinfo($_FILES["main_image"]["name"], PATHINFO_EXTENSION);
        
        $file_name = md5(date('YmdHms').$_FILES["main_image"]['name']).'.'.$ext;

        $path = '../img/users/'.$file_name;
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


   	}else if(isset($_POST['action']) && $_POST['action']=='getUser'){

        $query = mysqli_query($con, "SELECT * FROM users WHERE user_id = '".$_POST['user_id']."' ");
        $result = mysqli_fetch_assoc($query);
        if($query==true){
            echo json_encode(array('status'=>true, 'data'=>$result));
        }
        
    }else if(isset($_POST['action']) && $_POST['action']=='updateUser'){

        $query = mysqli_query($con, "UPDATE `users` SET `user_firstname`='".$_POST['user_firstname']."',`user_lastname`='".$_POST['user_lastname']."',`user_img`='".$_POST['user_img']."',`user_qualification`='".$_POST['user_qualification']."',`user_facebook`='".$_POST['user_facebook']."',`user_twitter`='".$_POST['user_twitter']."',`user_gmail`='".$_POST['user_gmail']."',`user_instagram`='".$_POST['user_instagram']."',`user_pinterest`='".$_POST['user_pinterest']."',`user_address`='".$_POST['user_address']."',`user_contact`='".$_POST['user_contact']."',`user_website`='".$_POST['user_website']."',`user_description`='".$_POST['user_description']."',`user_role`='".$_POST['user_role']."',`user_specialization`='".$_POST['user_specialization']."',`teaching_skills`='".$_POST['teaching_skills']."',`speaking_skills`='".$_POST['speaking_skills']."',`children_well_being`='".$_POST['children_well_being']."',`user_password`='' WHERE user_id = '".$_POST['user_id']."' ");
        if($query==true){
            echo json_encode(array('status'=>true, 'data'=>$_POST));
        }

    }else if(isset($_POST['action']) && $_POST['action']=='deleteUser'){

        $query = mysqli_query($con, "DELETE FROM users WHERE user_id = '".$_POST['user_id']."' ");
        if($query==true){
            echo json_encode(array('status'=>true, 'data'=>$_POST));
        }

    }

?>