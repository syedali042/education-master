<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Users</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Users</li>
								</ul>
							</div>
							<div class="col-auto text-right float-right ml-auto">
								<!-- <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a> -->
								<a href="ad_addUser" class="btn btn-primary"><i class="fas fa-plus"></i></a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-sm-12">
						
							<div class="card card-table">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0 datatable">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Qualification</th>
													<th>Specialization</th>
													<th>Email</th>
													<th>Contact</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($users as $key => $row): ?>
												<tr>
													<td><?=$row['user_id']?></td>
													<td>
														<h2 class="table-avatar">
															<a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?=AD_IMG?>users/<?=$row['user_img']?>" alt="User Image"></a>
															<a href="#"><?=$row['user_firstname'].' '.$row['user_lastname']?></a>
														</h2>
													</td>
													<td><?=$row['user_qualification']?></td>
													<td><?=$row['user_specialization']?></td>
													<td><?=$row['user_gmail']?></td>
													<td><?=$row['user_contact']?></td>
													<td class="text-right">
														<div class="actions">
															<a onclick="editUser(<?=$row['user_id']?>)" class="btn btn-sm bg-success-light mr-2">
																<i class="fas fa-pen"></i>
															</a>
															<a onclick="deleteUser(<?=$row['user_id']?>)" class="btn btn-sm bg-danger-light">
																<i class="fas fa-trash"></i>
															</a>
														</div>
													</td>
												</tr>
												<?php endforeach ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>							
						</div>					
					</div>					
				</div>

				<!-- Footer -->
				<footer>
					<p>Copyright © 2021 Relience.</p>					
				</footer>
				<!-- /Footer -->
				
			</div>
			<!-- /Page Wrapper -->

			<div class="modal fade none-border" id="my_event">
				<div class="modal-dialog modal-dialog-centered modal-lg">
					<div class="modal-content ">
						<div class="modal-header">
							<h4 class="modal-title">Edit User</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
								
							<form action="javascript://" method="POST" class="form">
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
											<div class="col-12 col-sm-5">
												<input type="hidden" name="user_id" class="user_id">
												<div id="border">
													<label onMouseOver="this.style.cursor='pointer'" for="user_image" class="addNewUserImg">
								                    	<img src="" class="userUploadedImage img-responsive img-thumbnail" style="width: 100%;">
								                    </label>
								                    <input type="file" id="user_image" style="display: none;">
								                    <input type="hidden" class="user_img" name="user_img" value="">
							                    </div>
											</div>
											<div class="col-12 col-sm-7">
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
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Specialization</label>
													<input type="text" class="form-control user_specialization" name="user_specialization">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Qualification</label>
													<input class="form-control user_qualification" name="user_qualification" type="text">
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
													<input type="email" class="form-control user_instagram" name="user_instagram">
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
											<div class="col-12">
												<h3 class="form-title"><span>Skills</span></h3>
											</div>
											<br><br><br>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Teaching</label>
													<input type="number" class="form-control teaching_skills" name="teaching_skills" max="100">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Speaking</label>
													<input type="number" class="form-control speaking_skills" name="speaking_skills" max="100">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Children's Well Being</label>
													<input type="number" class="form-control children_well_being" name="children_well_being" max="100">
												</div>
											</div>
											<!-- <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Country</label>
													<input type="number" class="form-control" >
												</div>
											</div> -->
											<div class="col-12">
												<input type="hidden" name="action" value="updateUser">
												<center><input value="UPDATE" type="submit" class="btn btn-primary"></center>
											</div>
											<br><br>
											<div class="form-error" style="display: none;">
												
											</div>
										</div>
									</form>
								</div>
							</div>

						</div>
						<div class="modal-footer justify-content-center">
							<!-- <button type="submit" class="btn btn-success submit-btn">Update</button> -->
							<!-- <button type="button" class="btn btn-danger delete-event submit-btn" data-dismiss="modal">Delete</button> -->
						</div>
					</div>
				</div>
			</div>

			<script src="<?=AD_JS?>/jquery-3.5.1.min.js"></script>
			<script type="text/javascript">
					
				editUser = (user_id) => {
					$.post('<?=AD_AJAX?>userAjax.php', {user_id: user_id, action:'getUser'}, function(resp){
						resp = $.parseJSON(resp);
						let user = resp.data;
						for (const data in user){
							const dataClasses = '.'+data;
							$(dataClasses).val(user[data]);
						}
						$('.userUploadedImage').attr('src', '<?=AD_IMG?>users/'+user.user_img);
						$('#my_event').modal('show');
					});
				}

				deleteUser = (user_id) => {
					$.post('<?=AD_AJAX?>userAjax.php', {user_id: user_id, action:'deleteUser'}, function(resp){
						resp = $.parseJSON(resp);
						if(resp.status==true){

							window.location.reload();

						}
					});
				}

				$(document).on('submit', '.form', function(event) {
					event.preventDefault();
					$.post('<?=AD_AJAX?>userAjax.php', $(this).serialize(), function(resp) {
						resp = $.parseJSON(resp);
						console.log(resp);
						if(resp.status==true){

							$('#my_event').modal('hide');
							window.location.reload();

						}
					});
				});

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
			                    // $('#border').css('border','none');
			                  //  $('#roomImageDiv').css('border','none');
			                }
			                else
			                {
			                    $("#validateButton1").text('Upload An Image First');
			                }
			            }
			        });
			    });
			</script>