<?php 

	include 'db.php';

	if(isset($_POST['action']) && $_POST['action']=='insert-lecture-quiz'){
		$student_id = $_SESSION['login_student']['student_id'];
		$getLectureQuizAnswers = mysqli_query($con, "SELECT quiz_id, right_answer FROM lecture_quiz WHERE lecture_id = '".$_POST['lecture_id']."' "); 
		$totalMarks = mysqli_num_rows($getLectureQuizAnswers);
		$result = array();
		while ($row=mysqli_fetch_array($getLectureQuizAnswers)) {
			$result[] = $row['right_answer'];
		}
		$true = 0;
		$false = 0;
		foreach ($_POST['quiz'] as $key => $row) {
			if($row==$result[$key]){
				$true++;
			}else{
				$false++;
			}
		}
		$answer_sheet = implode(',', $_POST['quiz']);

		$createResult = mysqli_query($con, "INSERT INTO `lecture_quiz_results`(`lecture_id`, `student_id`, `total_marks`, `obtained_marks`, `correct_answers`, `wrong_answers`, `result_sheet`, `result_added`) VALUES ('".$_POST['lecture_id']."','$student_id','$totalMarks','$true','$true','$false', '$answer_sheet', '$todayDate')");
		if($createResult == true){
			echo json_encode(array('status'=>true, 'true'=>$true, 'false'=>$false, 'total_marks'=>$totalMarks, 'student_answers'=>$_POST['quiz'], 'actual_answers'=>$result));
		}







	}else if(isset($_POST['action']) && $_POST['action']=='insert-exam'){
		$student_id = $_SESSION['login_student']['student_id'];
		$getExamQuestionAnswers = mysqli_query($con, "SELECT question_id, right_answer FROM exam_questions WHERE exam_id = '".$_POST['exam_id']."' "); 
		$totalMarks = mysqli_num_rows($getExamQuestionAnswers);
		$result = array();
		while ($row=mysqli_fetch_array($getExamQuestionAnswers)) {
			$result[] = $row['right_answer'];
		}
		$true = 0;
		$false = 0;
		foreach ($_POST['quiz'] as $key => $row) {
			if($row==$result[$key]){
				$true++;
			}else{
				$false++;
			}
		}
		$answer_sheet = implode(',', $_POST['quiz']);

		$createResult = mysqli_query($con, "INSERT INTO `exam_results`(`exam_id`, `student_id`, `total_marks`, `obtained_marks`, `correct_answers`, `wrong_answers`, `result_sheet`, `result_added`) VALUES ('".$_POST['exam_id']."','$student_id','$totalMarks','$true','$true','$false', '$answer_sheet', '$todayDate')");
		if($createResult == true){
			echo json_encode(array('status'=>true, 'true'=>$true, 'false'=>$false, 'total_marks'=>$totalMarks, 'student_answers'=>$_POST['quiz'], 'actual_answers'=>$result));
		}
	}

?>