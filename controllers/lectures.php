<?php
if(isset($_SESSION['login_admin']) OR isset($_SESSION['login_teacher'])){	
	
}else{
	redirect('admin/adminLogin');
}
class CL_LECTURES
{
	public function __construct()
	{
		
		$this->admin_model = new MD_ADMINMODEL();
		$this->temp = new LB_TEMPLATE('admin/header', 'admin/footer');
		$this->temp_simple = new LB_TEMPLATE('', '');
	}

	public function index()
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
		$data['lecturesTotal'] = $this->admin_model->getLectures();
		if(isset($_SESSION['login_teacher'])){
			$user = array();
			foreach ($data['lecturesTotal'] as $key => $row) {
				if($row['lecture_ins_id']==$_SESSION['login_teacher']['user_id']){
					$user[] = $row;
				}
			}
			$data['lectures'] = $user;
		}else if(isset($_SESSION['login_admin'])){
			$data['lectures'] = $this->admin_model->getLectures();
		}
		// $data['students'] = $this->admin_model->getStudents();
		$this->temp->loadcontent('admin/lectures');

		$this->temp->loadview($data);
	}

	public function addNewLecture()
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
			$data['lecturesTotal'] = $this->admin_model->getLectures();
			if(isset($_SESSION['login_teacher'])){
				$user = array();
				foreach ($data['lecturesTotal'] as $key => $row) {
					if($row['lecture_ins_id']==$_SESSION['login_teacher']['user_id']){
						$user[] = $row;
					}
				}
				$data['lectures'] = $user;
			}else if(isset($_SESSION['login_admin'])){
				$data['lectures'] = $this->admin_model->getLectures();
			}
			$data['students'] = $this->admin_model->getStudents();
			$data['classes'] = $this->admin_model->getClasses();

			$this->temp->loadcontent('admin/addLecture');
			$this->temp->loadview($data);	
	}


	public function addLecture(){

		if(isset($_POST)){
			if($this->admin_model->_insert('lectures', $_POST)){
				echo json_encode(array('status'=>true));
			}else{
				echo json_encode(array('status'=>true));
			}
		}

	}

	public function getLecture(){
		if(isset($_POST['action']) && $_POST['action']=='getLecture'){
			$data['lecture'] = $this->admin_model->getLecture($_POST['lecture_id']);
			echo json_encode(array('status'=>true, 'data'=>$data['lecture']));
		}
	}

	public function getLectureQuiz(){
		if(isset($_POST['action']) && $_POST['action']=='getLectureQuiz'){
			$data['lectureQuiz'] = $this->admin_model->getLectureQuiz($_POST['lecture_id']);

			echo json_encode(array('status'=>true, 'data'=>$data['lectureQuiz']));
		}
	}

	public function addLectureQuiz(){
	
		$this->temp->loadcontent('admin/addLectureQuiz');

		$this->temp->loadview($data);
	
	}

	public function addNewLectureQuiz(){
	
		if(isset($_POST)){

			$row = implode(',', $_POST);
			echo "<pre>";
			print_r($_POST);
			// var_dump($_POST);
			echo "</pre>";
			die();
			foreach ($_POST as $key => $row) {
				if($this->admin_model->_insert('lecture_quiz', $row)){
					// echo json_encode(array('status'=>true));
				}else{
					// echo json_encode(array('status'=>true));
				}
			}
		}
	
	}

	public function updateLecture(){
		if(isset($_POST)){
			$id = $_POST['lecture_id'];
			if ($this->admin_model->_update('lectures', $_POST, array('lecture_id'=>$id))==true) {
				echo json_encode(array('status'=>true));
			}else{	
				echo json_encode(array('status'=>true));
			}
		}
	}

	public function deleteLecture(){
		if(isset($_POST)){
			$id = $_POST['lecture_id'];
			if ($this->admin_model->_delete('lectures', array('lecture_id'=>$id))==true) {
				echo json_encode(array('status'=>true));
			}else{	
				echo json_encode(array('status'=>true));
			}
		}
	}
	public function deleteLectureQuiz(){
		if(isset($_POST)){
			$id = $_POST['quiz_id'];
			if ($this->admin_model->_delete('lecture_quiz', array('quiz_id'=>$id))==true) {
				// echo json_encode(array('status'=>true));
				redirect('lectures');
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