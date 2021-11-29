<?php
session_start();
$_SESSION['uniq'] = "Syed Muhammad Ali";
$hidden_controller = array('admin', 'students', 'lectures', 'exams', 'quiz');

if($_SERVER['SERVER_NAME'] == 'localhost')
{
	$base_folder_name = "education-master/";//LEAVE IT EMPTY FOR THE ROOT
	define('_DB_USER', "root");
	define('_DB_PASS', "");
	define('_DB_NAME', "des");
	define('_DB_HOST', "localhost");
}
else
{
	$base_folder_name = "education-master/"; 
	define('_DB_USER', "root");
	define('_DB_PASS', "");
	define('_DB_NAME', "des");
	define('_DB_HOST', "localhost");
}

error_on();
error_off(); 

define('APP_TITLE', "Boxing", true);
define('DEFAULT_CONTROLLER', "hildes", true);

//Whether or use the session
define('_SESSION', true);


//dont edit these

define('BASEURL',trim("/$base_folder_name"), true);

define('_EXT', ".php");
define('_PS', "/");

define('CSS', "/".$base_folder_name."resources/css/", true);
define('IMG', "/".$base_folder_name."resources/images/", true);
define('JS', "/".$base_folder_name."resources/js/", true);
define('UPLOADS', "/".$base_folder_name."resources/uploads/", true);
// ADMIN RESOURCES
define('AD_CSS', "/".$base_folder_name."resources/admin/css/", true);
define('AD_IMG', "/".$base_folder_name."resources/admin/img/", true);
define('AD_JS', "/".$base_folder_name."resources/admin/js/", true);
define('AD_UPLOADS', "/".$base_folder_name."resources/admin/uploads/", true);
define('AD_PLUGINS', "/".$base_folder_name."resources/admin/plugins/", true);
define('AD_AJAX', "/".$base_folder_name."resources/admin/ajax/", true);

// Quiz Resources
define('Q_CSS', "/".$base_folder_name."resources/quiz/css/", true);
define('Q_IMG', "/".$base_folder_name."resources/quiz/img/", true);
define('Q_JS', "/".$base_folder_name."resources/quiz/js/", true);
define('Q_FONTS', "/".$base_folder_name."resources/quiz/uploads/", true);


if(_SESSION){if(!session_id()){session_start();$_SESSION['uniq']="\x4D\x20\x41\x62\x75\x20\x42\x61\x6b\x61\x72\x20\x4B\x68\x61\x6E";}ob_start();}else{ob_start();}
?>