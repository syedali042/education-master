<?php

class MD_ADMINMODEL extends LB_ezSQL_mysql
{
	private $db;
	public $lastid = NULL;
	public $pages ='';
	public $admin = FALSE;

	public function __construct($admin = FALSE)
	{
		$this->admin = $admin == "admin" ? TRUE : FALSE;

		$this->db = new LB_ezSQL_mysql(_DB_USER,_DB_PASS,_DB_NAME,_DB_HOST);
		parent::__construct(_DB_USER,_DB_PASS,_DB_NAME,_DB_HOST);
		$this->mid = isset($_SESSION['mid']) ? $_SESSION['mid'] : 0;
	}

	public function index(){
		err("Looks Like, you're here by mistake");
		die();
	}

	public function login($username, $password, $check = FALSE)
	{
		$username = $this->db->escape(strtolower($username));
		if(!$check){$password = md5($this->db->escape($password));}
		return $this->db->get_row("SELECT * FROM `user` WHERE `username` = \"$username\" AND `password` = \"$password\";");
	}


	public function _update($table, $vals, $cond, $exec = TRUE)
	{

		if(is_array($vals) && is_array($cond))
		{
			try{
			$vv = '';
			$i = 0;
			$table = "`".trim(strtolower($table))."`";
			foreach($vals as $k=>$v):
				$v = $this->escape($v);
				if($i != 0) $vv .= " ,";
				$vv .= "`$k` = '$v' ";
				$i++;
			endforeach;
			$cc = '';
			$i = 0;
			foreach($cond as $k=>$v):
				$v = $this->escape($v);
				if($i != 0){$cc .= " AND ";}
				else{$cc .= "WHERE ";}
				$cc .= "`$k` = '$v'";
				$i++;
			endforeach;

			$sql = "UPDATE $table SET $vv $cc";
			if($exec)
				return $this->db->query($sql);
			else
				return $sql;
			}
			catch(Exception $e)
			{
				return FALSE;
			}

		}
		return FALSE;
	}

	public function _delete($table, $cond, $exec = TRUE)
	{
		if(is_array($cond))
		{
			try{

				$table = "`".trim(strtolower($table))."`";
				$cc = '';
				$i = 0;
				foreach($cond as $k=>$v):
					if($i != 0){$cc .= " AND ";}
					else{$cc .= "WHERE ";}
					$cc .= "`$k` = '$v'";
					$i++;
				endforeach;

				$sql = "DELETE FROM $table $cc";
				echo $sql;
				if($exec)
					return $this->db->query($sql);
				else
					return $sql;
			}
			catch(Exception $e)
			{
				return FALSE;
			}

		}
		return FALSE;
	}


	public function _insert($table, $vals, $exec = TRUE)
	{
		if(is_array($vals))
		{
			$vv = '';
			$i = 0;
			$table = "`".trim(strtolower($table))."`";
			foreach($vals as $k=>$v):
				$v = $this->escape($v);
				if($i != 0) $vv .= " ,";
				$vv .= "`$k` = '$v' ";
				$i++;
			endforeach;
			$sql = "INSERT INTO $table SET $vv";
			// echo $sql;
			// die();
			if($exec)
			{
				$data = $this->db->query($sql);
				if($data)
				{
					$this->lastid = $this->db->insert_id;

				}
				return $data;
			}
			else
				return $sql;

		}
		else
		return FALSE;
	}




	/*
	 * *****************************************************************************************
	 * Main Functions start here
	 */

/*****************************************************************
 * Get all companies, buyers, offers, tips and images from the DB
 ******************************************************************/

	

	
	public function getUsers(){
		return $this->get_results("SELECT * FROM users ORDER BY user_id DESC");
	}
	public function getTestimonials(){
		return $this->get_results("SELECT * FROM testimonial ORDER BY test_id DESC");
	}
	public function getSlider(){
		return $this->get_results("SELECT * FROM slider ORDER BY slide_id DESC");
	}
	public function getClasses(){
		return $this->get_results("SELECT * FROM classes ORDER BY class_id DESC");
	}
	public function getGallery(){
		return $this->get_results("SELECT * FROM gallery ORDER BY img_id DESC");
	}
	public function getStudents(){
		return $this->get_results("SELECT * FROM students ORDER BY student_id DESC");
	}
	public function getLectures(){
		return $this->get_results("SELECT * FROM lectures ORDER BY lecture_id DESC");
	}
	public function getSubjects(){
		return $this->get_results("SELECT * FROM subjects ORDER BY subject_id DESC");
	}
	public function getExams(){
		return $this->get_results("SELECT * FROM classes_exams ORDER BY exam_id DESC");
	}
	public function getStudent($student_id){
		return $this->get_row("SELECT * FROM students WHERE student_id = '$student_id' ");
	}
	public function getExam($exam_id){
		return $this->get_row("SELECT * FROM classes_exams WHERE exam_id = '$exam_id' ");
	}
	public function getLecture($lecture_id){
		return $this->get_row("SELECT * FROM lectures WHERE lecture_id = '$lecture_id' ");
	}
	public function getLectureQuiz($lecture_id){
		return $this->get_results("SELECT * FROM lecture_quiz WHERE lecture_id = '$lecture_id' ");
	}
	public function getExamQuestions($exam_id){
		return $this->get_results("SELECT * FROM exam_questions WHERE exam_id = '$exam_id' ");
	}
	public function signIn($role, $user_gmail, $user_password){
		return $this->get_results("SELECT * FROM users WHERE user_role = '$role' AND user_gmail = '$user_gmail' AND user_password = '$user_password' ");
	}
	public function studentLogin($email, $password){
		return $this->get_results("SELECT * FROM students WHERE student_email = '$email' AND student_pass = '$password' ");
	}
	public function getUtility(){
		return $this->get_results("SELECT * FROM utility");
	}
	
	
}
