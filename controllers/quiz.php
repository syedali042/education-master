 <?php
if(isset($_SESSION['login_student'])){	
	
}else{
	redirect('index');
}
class CL_QUIZ
{
	public function __construct()
	{
		$this->model = new MD_MAINMODEL();
		$this->admin_model = new MD_ADMINMODEL();
		$this->quiz_temp = new LB_TEMPLATE('quiz/header', 'quiz/footer');
	}

	public function index()
	{

		if(isset($_POST['lecture_id'])){

			$data['lectureQuiz'] = $this->model->getQuiz($_POST['lecture_id']);
			$data['lecture'] = $this->admin_model->getLecture($_POST['lecture_id']);
			$data['studentSubjects'] = $this->model->studentSubjects($_SESSION['login_student']['student_class']);
			$data['instructors'] = $this->model->studentInstructors();
			$data['classes'] = $this->admin_model->getClasses();
			$this->quiz_temp->loadcontent('quiz/index');
			$data['title'] = "My First App";
			$this->quiz_temp->loadview($data);

		}else{
			redirect('index');
		}

	}

	public function exam(){
		if(isset($_POST['exam_id'])){
			$data['exam'] = $this->model->getExam($_POST['exam_id']);
			$data['examQuestions'] = $this->model->getExamQuestions($_POST['exam_id']);
			$data['studentSubjects'] = $this->model->studentSubjects($_SESSION['login_student']['student_class']);
			$data['instructors'] = $this->model->studentInstructors();
			$data['classes'] = $this->admin_model->getClasses();
			$this->quiz_temp->loadcontent('quiz/exam');
			$data['title'] = "My First App";
			$this->quiz_temp->loadview($data);

		}else{
			redirect('index');
		}
	}

}