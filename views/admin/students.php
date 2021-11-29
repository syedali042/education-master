<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Students</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Students</li>
								</ul>
							</div>
							<div class="col-auto text-right float-right ml-auto">
								<!-- <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a> -->
								<a href="students/addNewStudent" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
													<th>Class</th>
													<th>Contact</th>
													<th>Email</th>
													<th>Date Of Birth</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($students as $key => $row): ?>
												<tr>
													<td><?=$row['student_id']?></td>
													<td>
														<!-- <h2 class="table-avatar">
															<a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?=AD_IMG?>students/<?=$row['student_img']?>" alt="User Image"></a>
															<a href="#"><?=$row['student_name']?></a>
														</h2> -->
														<?=$row['student_name']?>
													</td>
													<td><?=$row['student_class']?></td>
													<td><?=$row['student_contact']?></td>
													<td><?=$row['student_email']?></td>
													<td><?=$row['student_dob']?></td>
													<td class="text-right">
														<div class="actions">
															<a onclick="editStudent(<?=$row['student_id']?>)" class="btn btn-sm bg-success-light mr-2">
																<i class="fas fa-pen"></i>
															</a>
															<a onclick="deleteStudent(<?=$row['student_id']?>)" class="btn btn-sm bg-danger-light">
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
											<div class="col-12 col-sm-12">
											<center>
												<div id="border" style="border: 2px dotted #303030;">
													<label onMouseOver="this.style.cursor='pointer'" for="student_image" class="addNewStudentImg" style="color: grey;display: flex;justify-content: center;align-items: center;width: 100%;height: 100%;">
														<br><br>
														<br><br>
								                        <h1><i class="fa fa-plus"></i> Student Image</h1>
								                    </label>
								                    <input type="file" id="student_image" style="display: none;">
								                    <input type="hidden" class="student_img" name="student_img" value="">
								                    <img src="" class="studentUploadedImage" style="width: 280px;height: 300px;display: none;">
							                    </div>
											</center>
											</div>
											<br><br><br>
											<br><br><br>
											<div class="col-12 col-sm-6" style="padding-top: 20px;">
												<div class="form-group">
													<label>Education Medium</label>
													<select class="form-control student_medium" name="student_medium" required="">
														<option value="">SELECT EDUCATION LANGUAGE</option>
														<option value="urdu">Urdu</option>
														<option value="english">English</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-sm-6" style="padding-top: 20px;">
												<div class="form-group">
													<label>Student Class</label>
													<select class="form-control student_class" name="student_class" required="">
														<option value="">Select Class</option>
														<?php foreach ($classes as $key => $class): ?>
															<option value="<?=$class['class_id']?>"><?=$class['class_title']?></option>
														<?php endforeach ?>
													</select>
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Student Name</label>
													<input required="" type="text" class="form-control student_name" name="student_name">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Father Name</label>
													<input required="" class="form-control student_father_name" name="student_father_name" type="text">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Student / Father CNIC</label>
													<input required="" type="text" class="form-control student_cnic" name="student_cnic">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Student Date-Of-Birth</label>
													<input required="" type="date" class="form-control student_dob" name="student_dob">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Student Email</label>
													<input required="" type="email" class="form-control student_email" name="student_email">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Student Contact</label>
													<input required="" type="text" class="form-control student_contact" name="student_contact">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Student Password</label>
													<input required="" type="text" class="form-control student_pass" name="student_pass">
												</div>
											</div>
											
											<div class="col-12">
												<?php 
													date_default_timezone_set("Asia/Karachi");
													$currentDate = date('Y-m-d');
												?>
												<input type="hidden" name="student_added" value="<?=$currentDate?>">
												<input type="hidden" name="student_id" class="student_id" value="">
												<input type="submit" class="btn btn-primary" value="Update Student">
												<!-- <button onclick="addNewClass()" class="">Submit</button> -->
											</div>
											<br><br>
											<div class="form-error" style="display: none;">
												
											</div>
										</div>
								</div>
							</div>
						</form>

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
					
				editStudent = (student_id) => {
					$.post('<?=BASEURL.'students/getStudent'?>', {student_id: student_id, action:'getUser'}, function(resp){
						resp = $.parseJSON(resp);
						console.log(resp);
						let student = resp.data;
						for (const data in student){
							const dataClasses = '.'+data;
							$(dataClasses).val(student[data]);
						}
						$(".studentUploadedImage").css('display', 'block');
						$('.studentUploadedImage').attr('src', '<?=AD_IMG?>students/'+student.student_img);
						$('#my_event').modal('show');
					});
				}

				deleteStudent = (student_id) => {
					$.post('<?=BASEURL.'students/deleteStudent'?>', {student_id: student_id, action:'deleteStudent'}, function(resp){
						resp = $.parseJSON(resp);
						if(resp.status==true){

							window.location.reload();

						}
					});
				}

				$(document).on('submit', '.form', function(event) {
					event.preventDefault();
					$.post('<?=BASEURL.'students/updateStudent'?>', $(this).serialize(), function(resp) {
						resp = $.parseJSON(resp);
						console.log(resp);
						if(resp.status==true){

							$('#my_event').modal('hide');
							window.location.reload();

						}
					});
				});

				$(document).ready(function() {
					
					$("#student_image").on('change', function(){
				        let data = new FormData();
				        data.append('main_image', $(this).prop('files')[0]);
				        data.append('student_image', 'student_image');
				        $.ajax({
				            type: 'POST',
				            processData: false,
				            contentType: false,
				            data: data,
				            url: '<?=AD_AJAX.'db.php'?>',
				            dataType : 'json',
				            success: function(resp){
				                // resp = $.parseJSON(resp);
				                console.log(resp.data);
				                if (resp.status == true)
				                {   
				                    $(".student_img").val(resp.data);
				                    $(".studentUploadedImage").attr('src', '<?=AD_IMG?>students/'+resp.data);
				                    $(".studentUploadedImage").css('display', 'block');
				                    $('.addNewStudentImg').css('display','none');
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