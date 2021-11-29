<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Add Lecture</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="teachers.html">Lectures</a></li>
									<li class="breadcrumb-item active">Add Lectures</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-sm-12">
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
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Class</label>
													<select class="form-control class_id" name="class_id" required="">
														<option value="">Select Class</option>
														<?php foreach ($classes as $key => $class): ?>
															<option value="<?=$class['class_id']?>"><?=$class['class_title']?></option>
														<?php endforeach ?>
													</select>
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Subject</label>
													<select class="form-control subject_id" name="subject_id" required="">
														<option value="">Select Subject</option>
														<?php foreach ($subjects as $key => $subject): ?>
															<option value="<?=$subject['subject_id']?>"><?=$subject['subject_title']?></option>
														<?php endforeach ?>
													</select>
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Lecture Instructor</label>
													<select class="form-control lecture_ins_id" name="lecture_ins_id" required="">
														<option value="">Select Instructor</option>
														<?php foreach ($users as $key => $user): ?>
															<?php if ($user['user_role']=='teacher'): ?>
																
															<option value="<?=$user['user_id']?>"><?=$user['user_firstname']." ".$user['user_lastname']?></option>
															<?php endif ?>
														<?php endforeach ?>
													</select>
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Lecture Medium</label>
													<select class="form-control lecture_medium" name="lecture_medium">
														<option value="">SELECT EDUCATION LANGUAGE</option>
														<option value="urdu">Urdu</option>
														<option value="english">English</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Lecture Title</label>
													<input required="" type="text" class="form-control lecture_title" name="lecture_title">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Lecture Topic</label>
													<input required="" type="text" class="form-control lecture_topic" name="lecture_topic">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Lecture Duration</label>
													<input required="" type="text" class="form-control lecture_duration" name="lecture_duration">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Lecture Video Youtube Link</label>
													<input required="" type="text" class="form-control lecture_video" name="lecture_video">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Lecture Description</label>
													<input required="" type="text" class="form-control lecture_description" name="lecture_description">
												</div>
											</div>
											<div class="col-12">
												<?php 
													date_default_timezone_set("Asia/Karachi");
													$currentDate = date('Y-m-d');
												?>
												<input type="hidden" name="lecture_added" value="<?=$currentDate?>">
												<input type="submit" class="btn btn-primary" value="Add New Lecture">
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
					</div>					
				</div>
				
			</div>
			<!-- /Page Wrapper -->

			<script src="<?=AD_JS?>/jquery-3.5.1.min.js"></script>
			<script type="text/javascript">
				
				$(document).on('submit', '.form', function(event) {
					event.preventDefault();
					$.post('<?=BASEURL.'lectures/addLecture'?>', $(this).serialize(), function(resp) {
						resp = $.parseJSON(resp);
						if(resp.status==true){
							window.open('../lectures', '_self');
						}
						console.log(resp);
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
				            url: '<?=BASEURL.'students/student_image'?>',
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