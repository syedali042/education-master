<?php
if(isset($_SESSION['login_admin'])){	
	
}else{
	redirect('admin/adminLogin');
}
class CL_STUDENTS
{
	public function __construct()
	{
		
		$this->admin_model = new MD_ADMINMODEL();
		$this->temp = new LB_TEMPLATE('admin/header', 'admin/footer');
		$this->temp_simple = new LB_TEMPLATE('', '');
	}

	public function index()
	{	 
			$data['classes'] = $this->admin_model->getClasses();
				$data['students'] = $this->admin_model->getStudents();
			$this->temp->loadcontent('admin/students');

			$this->temp->loadview($data);
	}

	public function addNewStudent()
	{	 
			$this->temp->loadcontent('admin/addStudent');
			$data['classes'] = $this->admin_model->getClasses();

			$this->temp->loadview($data);	
	}

	public function student_image(){

		if (isset($_FILES) && $_POST['student_image']){
	        $ext = pathinfo($_FILES["main_image"]["name"], PATHINFO_EXTENSION);
	        
	        $file_name = md5(date('YmdHms').$_FILES["main_image"]['name']).'.'.$ext;

	        $path = '../resources/admin/img/students/'.$file_name;
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
	    }
	}


	public function addStudent(){

		if(isset($_POST)){
			if($this->admin_model->_insert('students', $_POST)){
				echo json_encode(array('status'=>true));
			}else{
				echo json_encode(array('status'=>true));
			}
		}

	}

	public function getStudent(){
		$this->temp->loadcontent('admin/addStudent');
		if(isset($_POST['action']) && $_POST['action']=='getUser'){
			$data['student'] = $this->admin_model->getStudent($_POST['student_id']);
			echo json_encode(array('status'=>true, 'data'=>$data['student']));
		}
	}

	public function updateStudent(){
		if(isset($_POST)){
			$id = $_POST['student_id'];
			if ($this->admin_model->_update('students', $_POST, array('student_id'=>$id))==true) {
				echo json_encode(array('status'=>true));
			}else{	
				echo json_encode(array('status'=>true));
			}
		}
	}

	public function deleteStudent(){
		if(isset($_POST)){
			$id = $_POST['student_id'];
			if ($this->admin_model->_delete('students', array('student_id'=>$id))==true) {
				echo json_encode(array('status'=>true));
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