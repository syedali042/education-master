<style type="text/css">
	.skills{
		display: none;
	}
</style>
<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Add User</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="teachers.html">Users</a></li>
									<li class="breadcrumb-item active">Add User</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-sm-12">
						<form class="form" method="post">
							<div class="card">
								<div class="card-body">
										<div class="row">
											<div class="col-12">
												<h3 class="form-title"><span>Basic Details</span></h3>
											</div>
											<!-- <div class="col-12 col-sm-6">  
												<div class="form-group">
													<label>Teacher ID</label>
													<input type="text" class="form-control">
												</div>
											</div> -->
											<div class="col-12 col-sm-6">
												<div id="border" style="border: 2px dotted #303030;">
													<label onMouseOver="this.style.cursor='pointer'" for="user_image" class="addNewUserImg" style="color: grey;display: flex;justify-content: center;align-items: center;width: 100%;height: 100%;">
														<br><br>
														<br><br>
								                        <h1><i class="fa fa-plus"></i> User Image</h1>
								                    </label>
								                    <input type="file" id="user_image" style="display: none;">
								                    <input type="hidden" class="user_img" name="user_img" value="">
								                    <img src="" class="userUploadedImage" style="width: 280px;height: 300px;display: none;">
							                    </div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Role</label>
													<select class="form-control user_role" name="user_role">
														<option value="">SELECT USER ROLE</option>
														<option value="admin">Admin</option>
														<option value="executive">Executive Body</option>
														<option value="teacher">Teacher</option>
													</select>
												</div>
											</div>
											<br><br><br><br><br><br>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" class="form-control user_firstname" name="user_firstname">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" class="form-control user_lastname" name="user_lastname">
												</div>
											</div>
											<br><br><br><br><br>
											<div class="col-12">
												<h3 class="form-title"><span>Contact Details</span></h3>
											</div>
											<br><br><br>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Contact</label>
													<input type="text" class="form-control user_contact" name="user_contact">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Address</label>
													<input type="text" class="form-control user_address" name="user_address">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Email</label>
													<input type="text" class="form-control user_gmail" name="user_gmail">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Instagram</label>
													<input type="text" class="form-control user_instagram" name="user_instagram">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Twitter</label>
													<input type="text" class="form-control user_twitter" name="user_twitter">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Facebook</label>
													<input type="text" class="form-control user_facebook" name="user_facebook">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Website</label>
													<input class="form-control user_website" name="user_website" type="text">
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
												<label>Description</label>
													<textarea class="form-control user_description" name="user_description"></textarea>
												</div>
											</div>
											<br><br><br><br><br>
											<div class="col-12 skills">
												<h3 class="form-title"><span>Skills</span></h3>
											</div>
											<br><br><br>
											<div class="col-12 col-sm-6 skills">
												<div class="form-group">
													<label>Specialization</label>
													<input type="text" class="form-control user_specialization" name="user_specialization">
												</div>
											</div>
											<div class="col-12 col-sm-6 skills">
												<div class="form-group">
													<label>Qualification</label>
													<input class="form-control user_qualification" name="user_qualification" type="text">
												</div>
											</div>
											<div class="col-12 col-sm-6 skills">
												<div class="form-group">
													<label>Teaching</label>
													<input type="number" class="form-control teaching_skills" name="teaching_skills" max="100">
												</div>
											</div>
											<div class="col-12 col-sm-6 skills">
												<div class="form-group">
													<label>Speaking</label>
													<input type="number" class="form-control speaking_skills" name="speaking_skills" max="100">
												</div>
											</div>
											<div class="col-12 col-sm-6 skills">
												<div class="form-group">
													<label>Children's Well Being</label>
													<input type="number" class="form-control children_well_being" name="children_well_being" max="100">
												</div>
											</div>
											<div class="col-12 col-sm-6 skills">
												<div class="form-group">
													<label>Account Password</label>
													<input type="text" class="form-control user_password" name="user_password" max="100">
												</div>
											</div>
											<!-- <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Country</label>
													<input type="number" class="form-control" >
												</div>
											</div> -->
											<div class="col-12">
												<input type="hidden" name="action" value="addUser">
												<button type="submit" class="btn btn-primary">Submit</button>
											</div>
											<br><br>
											<div class="form-error" style="display: none;">
												
											</div>
									</form>	</div>
								</div>
							</div>
							
						</div>					
					</div>					
				</div>
				
			</div>
			<!-- /Page Wrapper -->
			<script src="<?=AD_JS?>/jquery-3.5.1.min.js"></script>
			<script type="text/javascript">
				

				/*addUser = () => {

					let data = {
						action: 'addUser',
						user_role : $('.user_role').val(),
						user_image : $('.user_image').val(),
						user_firstname : $('.user_firstname').val(),
						user_lastname : $('.user_lastname').val(),
						user_specialization : $('.user_specialization').val(),
						user_qualification : $('.user_qualification').val(),
						user_contact : $('.user_contact').val(),
						user_address : $('.user_address').val(),
						user_email : $('.user_gmail').val(),
						user_instagram : $('.user_instagram').val(),
						user_twitter : $('.user_twitter').val(),
						user_facebook : $('.user_facebook').val(),
						user_website : $('.user_website').val(),
						user_description : $('.user_description').val(),
						teaching_skills : $('.teaching_skills').val(),
						speaking_skills : $('.speaking_skills').val(),
						children_well_being : $('.children_well_being').val()

					}
					let error = 0;
					for(const property in data){
						if(`${data[property]}`==''){
							$('.form-error').append('<div class="alert alert-danger alert-dismissible">  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>'+`${property}`+'</strong> cannot Be Empty !</div>');
							$('.form-error').css('display', 'block');
							error +=1;
						}
					}
					if(error==0){
						$.post('<?=AD_AJAX?>userAjax.php', {data: data}, function(resp) {
							console.log(data);
						});
					}

				}
*/
	
				$('.user_role').on('change', function(){
					$this = $(this);
					let user_role = $this.val();
					console.log(user_role);
					if(user_role=='teacher'){
						$('.skills').css('display', 'block');
					}
				});
				


				$(document).on('submit', '.form', function(event) {
					event.preventDefault();
					$.post('<?=AD_AJAX?>userAjax.php', $(this).serialize(), function(resp) {
						resp = $.parseJSON(resp);
						console.log(resp);
						if(resp.status==true){
							window.location.reload();
						}else{
							alert('Email Already Exist');
							window.location.reload();
						}	
					});
				});



				$(document).ready(function() {
					
					$("#user_image").on('change', function(){
				        let data = new FormData();
				        data.append('main_image', $(this).prop('files')[0]);
				        data.append('user_image', 'user_image');
				        $.ajax({
				            type: 'POST',
				            processData: false,
				            contentType: false,
				            data: data,
				            url: '<?=AD_AJAX?>userAjax.php',
				            dataType : 'json',
				            success: function(resp){
				                // resp = $.parseJSON(resp);
				                // console.log(resp.data);
				                if (resp.status == true)
				                {   
				                    $(".user_img").val(resp.data);
				                    $(".userUploadedImage").attr('src', '<?=AD_IMG?>users/'+resp.data);
				                    $(".userUploadedImage").css('display', 'block');
				                    $('.addNewUserImg').css('display','none');
				                    $('#border').css('border','none');
				                  //  $('#roomImageDiv').css('border','none');
				                }
				                else
				                {
				                    $("#validateButton1").text('Upload An Image First');
				                }
				            }
				        });
				    });

				});
			</script>
