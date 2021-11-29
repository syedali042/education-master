<?php 

	include 'db.php';

	if(isset($_POST['action']) && $_POST['action']=='updateSettings'){

		$query = mysqli_query($con, "UPDATE `utility` SET `home_video`='".$_POST['home_video']."',`home_action_heading`='".$_POST['home_action_heading']."',`home_action_text`='".$_POST['home_action_text']."',`home_action_cellno`='".$_POST['home_action_cellno']."',`footer_text`='".$_POST['footer_text']."',`facebook_link`='".$_POST['facebook_link']."',`twitter_link`='".$_POST['twitter_link']."',`instagram_link`='".$_POST['instagram_link']."',`youtube_link`='".$_POST['youtube_link']."',`address`='".$_POST['address']."',`about_image`='".$_POST['about_image']."',`about_heading`='".$_POST['about_heading']."',`about_text`='".$_POST['about_text']."',`about_item_one_heading`='".$_POST['about_item_one_heading']."',`about_item_one_text`='".$_POST['about_item_one_text']."',`about_item_two_heading`='".$_POST['about_item_two_heading']."',`about_item_two_text`='".$_POST['about_item_two_text']."',`about_item_three_heading`='".$_POST['about_item_three_heading']."',`about_item_three_text`='".$_POST['about_item_three_text']."',`email`='".$_POST['email']."',`site_logo`='".$_POST['site_logo_name']."',`opening_hours`='".$_POST['opening_hours']."',`location`='".$_POST['location']."',`contact`='".$_POST['contact']."'");

		if($query==true){
			echo json_encode(array('status'=>true, 'data'=>$_POST));
		}
	}

?>