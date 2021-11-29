<?php

class CL_ADMIN
{
	public function __construct()
	{
		
		$this->admin_model = new MD_ADMINMODEL();
		$this->temp = new LB_TEMPLATE('admin/header', 'admin/footer');
		$this->temp_simple = new LB_TEMPLATE('', '');
	}

	public function index()
	{	
		if(!isset($_SESSION['login_admin'])){
			redirect('lectures');
		}else{
			
			$this->temp->loadcontent('admin/index');

		} 	

		$this->temp->loadview($data);
	}

	public function ad_classes()
	{	 
			$data['classes'] = $this->admin_model->getClasses();
			$this->temp->loadcontent('admin/classes');

			$this->temp->loadview($data);
	}

	public function ad_addClass()
	{	 
			$this->temp->loadcontent('admin/addClass');

			$this->temp->loadview($data);
	}

	public function ad_gallery()
	{	 
			$data['gallery'] = $this->admin_model->getGallery();
			$this->temp->loadcontent('admin/gallery');

			$this->temp->loadview($data);
	}

	public function ad_addGallery()
	{	 
			$this->temp->loadcontent('admin/addGallery');

			$this->temp->loadview($data);
	}

	public function ad_users()
	{	 
			$data['users'] = $this->admin_model->getUsers();
			$this->temp->loadcontent('admin/users');

			$this->temp->loadview($data);
	}

	public function ad_addUser()
	{	 
			$this->temp->loadcontent('admin/addUser');

			$this->temp->loadview($data);
	}

	public function ad_testimonial()
	{	 
			$data['testimonial'] = $this->admin_model->getTestimonials();
			$this->temp->loadcontent('admin/testimonial');

			$this->temp->loadview($data);
	}

	public function ad_addTestimonial()
	{	 
			$this->temp->loadcontent('admin/addTestimonial');

			$this->temp->loadview($data);
	}

	public function ad_slider()
	{	 
			$data['sliders'] = $this->admin_model->getSlider();
			$this->temp->loadcontent('admin/slider');

			$this->temp->loadview($data);
	}

	public function ad_addSlider()
	{	 
			$this->temp->loadcontent('admin/addSlider');

			$this->temp->loadview($data);
	}

	public function ad_utilities()
	{	 
			$data['utility'] = $this->admin_model->getUtility();
			$this->temp->loadcontent('admin/utilities');

			$this->temp->loadview($data);
	}

	public function adminLogin()
	{
		$this->temp_simple->loadcontent('admin/adminLogin');
		$data['title'] = "My First App";
		$this->temp_simple->loadview($data);
	}


	public function signIn()
	{	
		if(isset($_POST)){
			$data['signIn'] = $this->admin_model->signIn($_POST['login_role'], $_POST['user_gmail'], $_POST['user_password']);
			if(count($data['signIn'])==1){
				session_start();
				if($_POST['login_role']=='teacher'){
					$_SESSION['login_teacher']=$data['signIn'][0];  
					if($_SESSION['login_teacher']){
						redirect('admin/index');
					}
				}else if($_POST['login_role']=='admin'){
					$_SESSION['login_admin']= $data['signIn'][0];  
					if($_SESSION['login_admin']){
						redirect('lectures');
					}
				}
			}else{
				redierect('adminLogin?msg=Cannot Login, Contact Admin Or Developer');
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