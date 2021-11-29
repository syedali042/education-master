<?php
class MD_MAINMODEL extends LB_ezSQL_mysql
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
	public function get_reg_whole()
	{
		return $this->db->get_row("SELECT * FROM `reg_detail` LIMIT 1");
	}
	
	public function get_package_details($pckg = "1")
	{
		switch($pckg){
			case (string)"1":
				$data = $this->db->get_row("SELECT `one_title` as `title`,`one_price` as `amount` FROM `reg_detail` LIMIT 1");
				$data['total'] = $data['amount'];
			break;

			case (string)"2":
				$data = $this->db->get_row("SELECT `two_title` as `title`,`two_price` as `amount` FROM `reg_detail` LIMIT 1");
				$data['total'] = $data['amount'];
			break;

			case (string)"3":
				$data = $this->db->get_row("SELECT `three_title` as `title`,`three_price` as `amount` FROM `reg_detail` LIMIT 1");
				$data['total'] = $data['amount'];
			break;

			case (string)"4":
				$data = $this->db->get_row("SELECT `four_title` as `title`,`four_price` as `amount` FROM `reg_detail` LIMIT 1");
				$data['total'] = $data['amount'];
			break;
		}
		return $data;

	}

	public function check_username($user = '')
	{
		if(isset($user) && is_string($user) && strlen($user) > 2)
		{
			$user = $this->escape($user);
			return (bool)$this->get_row("SELECT * FROM `user` WHERE `username` = '$user' LIMIT 1");
		}
		else
		{
			return FALSE;
		}
	}

	public function check_email($email = '')
	{
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			if(is_string($email))
			{
				$email = $this->escape($email);
				return (bool)$this->get_row("SELECT * FROM `user` WHERE `email` = '$email' LIMIT 1");
			}
			else
			{
				return FALSE;
			}
		}
		else
		{
			return FALSE;
		}
	}
	public function check_contact_email($email = '')
	{
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			if(is_string($email))
			{
				$email = $this->escape($email);
				return (bool)$this->get_row("SELECT * FROM `cms_contact` WHERE `email` = '$email' LIMIT 1");
			}
			else
			{
				return FALSE;
			}
		}
		else
		{
			return FALSE;
		}
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



	public function extract_img($html)
	{
		error_off();
		preg_match_all('/<img[^>]+>/i',$html, $result);
		$img = array();
		foreach($result[0] as $img_tag)
		{
			preg_match_all('/(src)=("[^"]*")/i',$img_tag, $img4);
			$img[] = $img4;
		}

		return isset($img[0]['2'][0]) && $img[0]['2'][0] != "" ? preg_replace('["]',"",$img[0]['2'][0]) : IMG.'ad.jpg';
	}



	/*
	 * *****************************************************************************************
	 * Main Functions start here
	 */

/*****************************************************************
 * Get all companies, buyers, offers, tips and images from the DB
 ******************************************************************/
	public function get_all_category()
	{
		return $this->get_results("SELECT * FROM `category` ORDER BY `category_id` ASC;");
	}	
	public function get_category_by_id($id)
	{
		return $this->get_row("SELECT * FROM `category` WHERE `category_id` = '$id' ");
	}
	public function studentSubjects($class_id){
		$subjects = $this->get_results("SELECT subject_id FROM lectures WHERE class_id = '$class_id' GROUP BY subject_id ");
		$studentSubjects = array();
		foreach ($subjects as $key => $row) {
			$results = $this->get_row("SELECT * FROM subjects WHERE subject_id = '".$row['subject_id']."' ");
			$studentSubjects[] = $results;
		}
		return $studentSubjects;
	}
	public function studentLectures($class_id){
		return $this->get_results("SELECT * FROM lectures WHERE class_id = '$class_id' ORDER BY lecture_id DESC ");
	}
	public function studentLogin($email, $password){
		return $this->get_results("SELECT * FROM students WHERE student_email = '$email' AND student_pass = '$password' ");
	}
	public function studentInstructors(){
		return $this->get_results("SELECT * FROM users ORDER BY user_id DESC");
	}

	public function getQuiz($lecture_id){
		return $this->get_results("SELECT * FROM lecture_quiz WHERE lecture_id = '$lecture_id' ");
	}

	public function studentQuiz($class_id){
		$studentLectures = $this->get_results("SELECT lecture_id FROM lectures WHERE class_id = '$class_id' ");
		$studentQuizes = array();
		foreach ($studentLectures as $key => $row) {
			$results = $this->get_results("SELECT * FROM lecture_quiz WHERE lecture_id = '".$row['lecture_id']."' ");
			$studentQuizes[] = $results;
		}
		return $studentQuizes;
	}

	public function getExamQuestions($exam_id){
		return $this->get_results("SELECT * FROM exam_questions WHERE exam_id = '$exam_id' ");
		// echo "SELECT * FROM exam_questions WHERE exam_id = '$exam_id' ";
		// die();
	}

	public function getExam($exam_id){
		return $this->get_row("SELECT * FROM classes_exams WHERE exam_id = '$exam_id' ");
		// echo "SELECT * FROM exam_questions WHERE exam_id = '$exam_id' ";
		// die();
	}

	public function studentExams($class_id){
		return $this->get_results("SELECT * FROM classes_exams WHERE class_id = '$class_id' ");
	}

	public function studentClassmates($class_id){
		return $this->get_results("SELECT * FROM students WHERE student_class = '$class_id' ");
		// echo "SELECT * FROM students WHERE class_id = '$class_id'";
	}

	public function studentResults($id){
		$quizResults = $this->get_results("SELECT * FROM lecture_quiz_results WHERE student_id = '$id' ");
		$examResults = $this->get_results("SELECT * FROM exam_results WHERE student_id = '$id' ");

		$results = array('examResults'=>$examResults, 'quizResults'=>$quizResults);

		return $results;
		// echo "SELECT * FROM lecture_quiz_results WHERE student_id = '$id' ";
		// die();	
	}
}
