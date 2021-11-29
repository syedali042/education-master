<?php 
session_start();
error_reporting(0);
if($_SERVER['SERVER_NAME'] == 'localhost')
{
	
	define('_DB_USER', "root");
	define('_DB_PASS', "");
	define('_DB_NAME', "des");
	define('_DB_HOST', "localhost");
}
else
{
	
	define('_DB_USER', "root");
	define('_DB_PASS', "");
	define('_DB_NAME', "des");
	define('_DB_HOST', "localhost");
}

date_default_timezone_set('Asia/Karachi');
$todayDate = date('Y-m-d');
define('_TODAY', $todayDate);
$con = mysqli_connect(_DB_HOST,_DB_USER,_DB_PASS,_DB_NAME);


if(isset($_POST['action']) && $_POST['action']=='addQuiz'){

	mysqli_query($con, "DELETE FROM lecture_quiz WHERE lecture_id = '".$_POST['lecture_id']."'");
	for ($i=0; $i < count($_POST['quiz_question']); $i++) { 
		$sql = "INSERT INTO lecture_quiz(lecture_id, quiz_question, quiz_option_one, quiz_option_two, quiz_option_three, quiz_option_four, right_answer, quiz_added) VALUES ('";
		$sql .= $_POST['lecture_id']."', '";
		$sql .= $_POST['quiz_question'][$i]."', '";
		$sql .= $_POST['quiz_option_one'][$i]."', '";
		$sql .= $_POST['quiz_option_two'][$i]."', '";
		$sql .= $_POST['quiz_option_three'][$i]."', '";
		$sql .= $_POST['quiz_option_four'][$i]."', '";
		$sql .= $_POST['right_answer'][$i]."', '";
		$sql .= $todayDate."')";
		$exec = mysqli_query($con, $sql);
	}
	if($exec){
		echo json_encode(array('status'=>true, 'data'=>'Inserted'));
	}
}else if (isset($_FILES) && $_POST['student_image']){
    $ext = pathinfo($_FILES["main_image"]["name"], PATHINFO_EXTENSION);
    
    $file_name = md5(date('YmdHms').$_FILES["main_image"]['name']).'.'.$ext;

    $path = '../img/students/'.$file_name;
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
        echo json_encode(array("status" => false , "msg" => "File must be an image file."));
    }
}else if(isset($_POST['action']) && $_POST['action']=='addExamQuestion'){

	mysqli_query($con, "DELETE FROM exam_questions WHERE exam_id = '".$_POST['exam_id']."'");
	for ($i=0; $i < count($_POST['question_title']); $i++) { 
		$sql = "INSERT INTO exam_questions(exam_id, question_title, question_option_one, question_option_two, question_option_three, question_option_four, question_type, right_answer, question_added) VALUES ('";
		$sql .= $_POST['exam_id']."', '";
		$sql .= $_POST['question_title'][$i]."', '";
		$sql .= $_POST['question_option_one'][$i]."', '";
		$sql .= $_POST['question_option_two'][$i]."', '";
		$sql .= $_POST['question_option_three'][$i]."', '";
		$sql .= $_POST['question_option_four'][$i]."', '";
		$sql .= $_POST['question_type']."', '";
		$sql .= $_POST['right_answer'][$i]."', '";
		$sql .= $todayDate."')";
		$exec = mysqli_query($con, $sql);
		
	}
	if($exec){
		echo json_encode(array('status'=>true, 'data'=>'Inserted'));
	}
}
?>