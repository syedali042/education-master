<?php
if(isset($_SESSION['login_admin']) OR isset($_SESSION['login_teacher'])){	
	
}else{
	redirect('admin/adminLogin');
}
class CL_EXAMS
{
	public function __construct()
	{
		
		$this->admin_model = new MD_ADMINMODEL();
		$this->temp = new LB_TEMPLATE('admin/header', 'admin/footer');
		$this->temp_simple = new LB_TEMPLATE('', '');
	}

	public function index()
	{	

		$data['users'] = $this->admin_model->getUsers();
		$data['subjects'] = $this->admin_model->getSubjects();
		$data['classes'] = $this->admin_model->getClasses();
		$data['examsTotal'] = $this->admin_model->getExams();
		if(isset($_SESSION['login_teacher'])){
			$teacher_exams = array();
			foreach ($data['examsTotal'] as $key => $row) {
				if($row['ins_id']==$_SESSION['login_teacher']['user_id']){
					$teacher_exams[] = $row;
				}

			}
			$data['exams'] = $teacher_exams;
		}else if(isset($_SESSION['login_admin'])){
			$data['exams'] = $this->admin_model->getExams();
		}
		$this->temp->loadcontent('admin/exams');
		$this->temp->loadview($data);
	}

	public function addNewExam()
	{	 
		$data['usersTotal'] = $this->admin_model->getUsers();
		if(isset($_SESSION['login_teacher'])){
			$user = array();
			foreach ($data['usersTotal'] as $key => $row) {
				if($row['user_id']==$_SESSION['login_teacher']['user_id']){
					$user[] = $row;
				}
			}
			$data['users'] = $user;
		}else if(isset($_SESSION['login_admin'])){
			$data['users'] = $this->admin_model->getUsers();
		}
		$data['subjects'] = $this->admin_model->getSubjects();
		$data['classes'] = $this->admin_model->getClasses();
		$this->temp->loadcontent('admin/addExam');
		$this->temp->loadview($data);	
	}


	public function addExam(){

		if(isset($_POST)){
			if($this->admin_model->_insert('classes_exams', $_POST)){
				echo json_encode(array('status'=>true));
			}else{
				echo json_encode(array('status'=>true));
			}
		}

	}

	public function getExam(){
		if(isset($_POST['action']) && $_POST['action']=='getExam'){
			$data['exam'] = $this->admin_model->getExam($_POST['exam_id']);
			echo json_encode(array('status'=>true, 'data'=>$data['exam']));
		}
	}

	public function getExamQuestions(){
		if(isset($_POST['action']) && $_POST['action']=='getExamQuestions'){
			$data['examQuestions'] = $this->admin_model->getExamQuestions($_POST['exam_id']);

			echo json_encode(array('status'=>true, 'data'=>$data['examQuestions']));
		}
	}

	public function updateExam(){
		if(isset($_POST)){
			$id = $_POST['exam_id'];
			if ($this->admin_model->_update('classes_exams', $_POST, array('exam_id'=>$id))==true) {
				echo json_encode(array('status'=>true));
			}else{	
				echo json_encode(array('status'=>true));
			}
		}
	}

	public function deleteExam(){
		if(isset($_POST)){
			$id = $_POST['exam_id'];
			if ($this->admin_model->_delete('classes_exams', array('exam_id'=>$id))==true) {
				if($this->admin_model->_delete('exam_questions', array('exam_id'=>$id))==true){

					//echo "<script> window.open('exams', '_self'); </script>";

				}
			}else{	
			}
			// echo json_encode(array('status'=>true));
		}
	}
	public function deleteExamQuestion(){
		if(isset($_POST)){
			$id = $_POST['question_id'];
			if ($this->admin_model->_delete('exam_questions', array('question_id'=>$id))==true) {
				// echo json_encode(array('status'=>true));
				redirect('exams');
			}else{	
				// echo json_encode(array('status'=>true));
			}
		}
	}

	public function logout()
	{
		session_start();
		session_destroy();
		session_unset();
		header('Location: adminLogin');
	}

}