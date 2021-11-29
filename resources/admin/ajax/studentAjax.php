<?php 

	include 'db.php';	

	if(isset($_POST['submitGen'])){

		$updateStudent = mysqli_query($con, "UPDATE students SET `student_img` = '".$_POST['student_img']."', `student_name`='".$_POST['student_name']."', `student_father_name`='".$_POST['student_father_name']."', `student_email`='".$_POST['student_email']."' WHERE student_id = '".$_SESSION['login_student']['student_id']."' ");

		if($updateStudent){
			echo json_encode(array('status'=>true, 'data'=>true));
		}

		
	}else if(isset($_POST['changePass'])){
		if($_SESSION['login_student']['student_pass']==$_POST['student_password']){
			if(mysqli_query($con, "UPDATE students SET `student_pass` = '".$_POST['student_new_password']."' WHERE student_id = '".$_SESSION['login_student']['student_id']."' ")){

				echo json_encode(array('status'=>true, 'data'=>true));
			}else{
				echo json_encode(array('status'=>false, 'data'=>true));
			}
		}
	}
	
?>