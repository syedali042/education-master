<!DOCTYPE html>
<html lang="en">
   <?php 
   	function dateConvert($date){
        $Month = date("F", strtotime($date));
        $Date = date("d", strtotime($date));
        $Year = date("y", strtotime($date));
        return $Month.' '.$Date.', 20'.$Year;
    }
    ?>
<!-- Mirrored from preschool.dreamguystech.com/html-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Dec 2020 12:03:47 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>DES - Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="<?=AD_IMG?>favicon.png">
	
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
		<script src="https://kit.fontawesome.com/f7e9049f48.js" crossorigin="anonymous"></script>
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?=AD_PLUGINS?>bootstrap/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="<?=AD_PLUGINS?>fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="<?=AD_PLUGINS?>fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="<?=AD_CSS?>style.css">
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="<?=BASEURL."admin/"?>index" class="logo">
						<center><img src="<?=AD_IMG?>/syedali.png" alt="Logo"></center>
					</a>
					<a href="<?=BASEURL."admin/"?>index" class="logo logo-small">
						<center><img src="<?=AD_IMG?>syedali.png" alt="Logo" width="30" height="30"></center>
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fas fa-align-left"></i>
				</a>
				
				<!-- Search Bar -->
				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><i class="fas fa-search"></i></button>
					</form>
				</div>
				<!-- /Search Bar -->
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fas fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">

					<!-- Notifications -->
					<li class="nav-item dropdown noti-dropdown">
						<!-- <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="far fa-bell"></i> <span class="badge badge-pill">3</span>
						</a> -->
						<div class="dropdown-menu notifications">
							<!-- <div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div> -->
							<!-- <div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="<?=AD_IMG?>profiles/avatar-02.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="<?=AD_IMG?>profiles/avatar-11.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="<?=AD_IMG?>profiles/avatar-17.jpg">
												</span>
												<div class="media-body">
												<p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="<?=AD_IMG?>profiles/avatar-13.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="#">View all Notifications</a>
							</div> -->
						</div>
					</li>
					<!-- fe2fbd668691539d4c11a0c65e3a92cd -->
					<!-- /Notifications -->
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<?php 
								if(isset($_SESSION['login_admin'])){
							?>
								<span class="user-img"><img class="rounded-circle" src="<?=AD_IMG?>users/<?=$_SESSION['login_admin']['user_img']?>" width="31" alt="Ryan Taylor"></span>
							<?php	}else if(isset($_SESSION['login_teacher'])){
								?>
								<span class="user-img"><img class="rounded-circle" src="<?=AD_IMG?>users/<?=$_SESSION['login_teacher']['user_img']?>" width="31" alt="Ryan Taylor"></span>
							<?php }
							?>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<?php 
									if(isset($_SESSION['login_admin'])){
									?>
										<img src="<?=AD_IMG?>users/<?=$_SESSION['login_admin']['user_img']?>" alt="User Image" class="avatar-img rounded-circle">
									<?php	}else if(isset($_SESSION['login_teacher'])){
										?>
										<img src="<?=AD_IMG?>users/<?=$_SESSION['login_teacher']['user_img']?>" alt="User Image" class="avatar-img rounded-circle">
									<?php }
									?>
								</div>
								<div class="user-text">
									<?php 
									if(isset($_SESSION['login_admin'])){
									?>
										<h6><?=$_SESSION['login_admin']['user_firstname']." ".$_SESSION['login_admin']['user_lastname']?></h6>
										<p class="text-muted mb-0"><small>Administrator</small></p>
									<?php	}else if(isset($_SESSION['login_teacher'])){
										?>
										<h6><?=$_SESSION['login_teacher']['user_firstname']." ".$_SESSION['login_teacher']['user_lastname']?>
										<p class="text-muted mb-0"><small>Instructor</small></p>
									<?php }
									?>
								</div>
							</div>
							<!-- <a class="dropdown-item" href="profile.html">My Profile</a> -->
							<!-- <a class="dropdown-item" href="inbox.html">Inbox</a> -->
							<a class="dropdown-item" href="<?=BASEURL?>admin/logout">Logout</a>
						</div>
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<?php 
							if(isset($_SESSION['login_admin'])){
							?>
							<li class="menu-title"> 
								<span>Main Menu</span>
							</li>
							<li class="active"> 
								<a href="<?=BASEURL."admin/"?>index"><i class="fas fa-th-large"></i> <span>Dashboard</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-users"></i> <span> Users</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="<?=BASEURL?>admin/ad_users">Users List</a></li>
									<li><a href="<?=BASEURL?>admin/ad_addUser">Add New User</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="<?=BASEURL?>students">Student List</a></li>
									<li><a href="<?=BASEURL?>students/addNewStudent">Add New Student</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-graduation-cap"></i> <span> Classes</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="<?=BASEURL."admin/"?>ad_classes">Classes List</a></li>
									<li><a href="<?=BASEURL."admin/"?>ad_addClass">Add New Class</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-video"></i> <span> Lectures</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="<?=BASEURL."lectures"?>">Lectures List</a></li>
									<li><a href="<?=BASEURL."lectures/addNewLecture"?>">Add New Lectures</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-clipboard-list"></i> <span> Exams</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="<?=BASEURL."exams"?>">Exams List</a></li>
									<li><a href="<?=BASEURL."exams/addNewExam"?>">Add New Exam</a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Site Settings</span>
							</li>
							<li class=""> 
								<a href="<?=BASEURL."admin/"?>ad_gallery"><i class="far fa-images"></i> <span>Gallery</span></a>
							</li>
							<li class=""> 
								<a href="<?=BASEURL."admin/"?>ad_slider"><i class="fas fa-sliders-h"></i> <span>Slider</span></a>
							</li>
							<li class=""> 
								<a href="<?=BASEURL."admin/"?>ad_testimonial"><i class="fas fa-comments"></i> <span>Testimonial</span></a>
							</li>
							<li class=""> 
								<a href="<?=BASEURL."admin/"?>ad_utilities"><i class="fas fa-underline"></i> <span>Utilities</span></a>
							</li>
							<?php
								}else if(isset($_SESSION['login_teacher'])){
							?>
							<li class="menu-title"> 
								<span>Main Menu</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-video"></i> <span> Lectures</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="<?=BASEURL."lectures"?>">Lectures List</a></li>
									<li><a href="<?=BASEURL."lectures/addNewLecture"?>">Add New Lectures</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-clipboard-list"></i> <span> Exams</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="<?=BASEURL."exams"?>">Exams List</a></li>
									<li><a href="<?=BASEURL."exams/addNewExam"?>">Add New Exam</a></li>
								</ul>
							</li>
							<?php } ?>
<!-- 							<li class="submenu">
								<a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="teachers.html">Teacher List</a></li>
									<li><a href="teacher-details.html">Teacher View</a></li>
									<li><a href="add-teacher.html">Teacher Add</a></li>
									<li><a href="edit-teacher.html">Teacher Edit</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-building"></i> <span> Departments</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="departments.html">Department List</a></li>
									<li><a href="add-department.html">Department Add</a></li>
									<li><a href="edit-department.html">Department Edit</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="subjects.html">Subject List</a></li>
									<li><a href="add-subject.html">Subject Add</a></li>
									<li><a href="edit-subject.html">Subject Edit</a></li>
								</ul>
							</li>

							<li class="menu-title"> 
								<span>Management</span>
							</li>

							<li class="submenu">
								<a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="fees-collections.html">Fees Collection</a></li>
									<li><a href="expenses.html">Expenses</a></li>
									<li><a href="salary.html">Salary</a></li>
									<li><a href="add-fees-collection.html">Add Fees</a></li>
									<li><a href="add-expenses.html">Add Expenses</a></li>
									<li><a href="add-salary.html">Add Salary</a></li>
								</ul>
							</li>
							<li> 
								<a href="holiday.html"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
							</li>
							<li> 
								<a href="fees.html"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
							</li>
							<li> 
								<a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
							</li>
							<li> 
								<a href="event.html"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
							</li>
							<li> 
								<a href="time-table.html"><i class="fas fa-table"></i> <span>Time Table</span></a>
							</li>
							<li> 
								<a href="library.html"><i class="fas fa-book"></i> <span>Library</span></a>
							</li>

							<li class="menu-title"> 
								<span>Pages</span>
							</li>

							<li class="submenu">
								<a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="login.html">Login</a></li>
									<li><a href="register.html">Register</a></li>
									<li><a href="forgot-password.html">Forgot Password</a></li>
									<li><a href="error-404.html">Error Page</a></li>
								</ul>
							</li>
							<li> 
								<a href="blank-page.html"><i class="fas fa-file"></i> <span>Blank Page</span></a>
							</li>

							<li class="menu-title"> 
								<span>Others</span>
							</li>

							<li> 
								<a href="sports.html"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
							</li>
							<li> 
								<a href="hostel.html"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
							</li>
							<li> 
								<a href="transport.html"><i class="fas fa-bus"></i> <span>Transport</span></a>
							</li>
							<li class="menu-title"> 
								<span>UI Interface</span>
							</li>
							<li> 
								<a href="components.html"><i class="fas fa-vector-square"></i> <span>Components</span></a>
							</li> -->
							<!-- <li class="submenu">
								<a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
									<li><a href="form-input-groups.html">Input Groups </a></li>
									<li><a href="form-horizontal.html">Horizontal Form </a></li>
									<li><a href="form-vertical.html"> Vertical Form </a></li>
									<li><a href="form-mask.html"> Form Mask </a></li>
									<li><a href="form-validation.html"> Form Validation </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="tables-basic.html">Basic Tables </a></li>
									<li><a href="data-tables.html">Data Table </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
								<ul>
									<li class="submenu">
										<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
										<ul>
											<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
											<li class="submenu">
												<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
												<ul>
													<li><a href="javascript:void(0);">Level 3</a></li>
													<li><a href="javascript:void(0);">Level 3</a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:void(0);"> <span>Level 1</span></a>
									</li>
								</ul>
							</li> -->
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			