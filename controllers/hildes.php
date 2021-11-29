 <?php

class CL_HILDES
{
	public function __construct()
	{
		$this->model = new MD_MAINMODEL();
		$this->temp = new LB_TEMPLATE('header', 'footer');
	}

	public function index()
	{
		$this->temp->loadcontent('index');
		$data['title'] = "My First App";
		if(!isset($_SESSION['login_student'])){
			redirect('login');
		}else{
			$data['studentSubjects'] = $this->model->studentSubjects($_SESSION['login_student']['student_class']);
			$data['studentLectures'] = $this->model->studentLectures($_SESSION['login_student']['student_class']);
			$data['studentQuiz'] = $this->model->studentQuiz($_SESSION['login_student']['student_class']);
			$data['studentExams'] = $this->model->studentExams($_SESSION['login_student']['student_class']);
			$data['studentClassmates'] = $this->model->studentClassmates($_SESSION['login_student']['student_class']);
			$data['instructors'] = $this->model->studentInstructors();
		}
		$this->temp->loadview($data);
	}

	public function about()
	{
		$this->temp->loadcontent('about');
		
		$data['title'] = "My First App";
		$data['name'] = "Nadeem Akram";
		$data['category'] = $this->model->get_all_category();

		$this->temp->loadview($data);
	}

	public function dashboard()
	{
		$this->temp->loadcontent('dashboard');	
		$data['title'] = "My First App";
		if(!isset($_SESSION['login_student'])){
			redirect('login');
		}else{

			$data['studentSubjects'] = $this->model->studentSubjects($_SESSION['login_student']['student_class']);
			$data['studentLectures'] = $this->model->studentLectures($_SESSION['login_student']['student_class']);
			$data['studentQuiz'] = $this->model->studentQuiz($_SESSION['login_student']['student_class']);
			$data['studentExams'] = $this->model->studentExams($_SESSION['login_student']['student_class']);
			$data['studentResults'] = $this->model->studentResults($_SESSION['login_student']['student_id']);
			$data['instructors'] = $this->model->studentInstructors();
		}
		$this->temp->loadview($data);
	}

	public function login(){

		$this->temp->loadcontent('login');	
		$data['title'] = "Education Master";
		$this->temp->loadview($data);
			
	}

	public function studentLogin()
	{	
		if(isset($_POST)){
			$data['studentLogin'] = $this->model->studentLogin($_POST['student_email'], $_POST['student_pass']);
			if(count($data['studentLogin'])==1){
				session_start();
				$_SESSION['login_student']=$data['studentLogin'][0];
				redirect('index?msg="Logged-In"');
			}else{
				redirect('index?msg="Login Error"');
			}
		}
	}

	public function settings(){

		$data['title'] = "My First App";
		if(!isset($_SESSION['login_student'])){
			redirect('login');
		}else{

			$this->temp->loadcontent('accountSettings');	
		}
		$this->temp->loadview($data);
	}

	public function logout()
	{
		session_start();
		session_destroy();
		session_unset();
		header('Location: login');
	}


	
}