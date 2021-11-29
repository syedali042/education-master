<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Add Exam</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="teachers.html">Exams</a></li>
									<li class="breadcrumb-item active">Add Exam</li>
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
													<select class="form-control ins_id" name="ins_id" required="">
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
													<select class="form-control exam_medium" name="exam_medium">
														<option value="">SELECT EDUCATION LANGUAGE</option>
														<option value="urdu">Urdu</option>
														<option value="english">English</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Exam Duration <small>(Hours e.g 1, 1.5, 2, 2.5 ,3)</small></label>
													<input required="" type="number" class="form-control exam_time" name="exam_time" min="0" max="3" step="0.1" value="0.0" >
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label style="display: block;">Exam Starting Date & Time</label>
													<input required="" type="date" class="form-control exam_start_date" name="exam_start_date" style="width: 45%;display: inline-block;">
													<input required="" type="time" class="form-control exam_start_time" name="exam_start_time" style="width: 45%;display: inline-block;float: right;">
												</div>
											</div>
											<div class="col-12">
												<?php 
													date_default_timezone_set("Asia/Karachi");
													$currentDate = date('Y-m-d');
												?>
												<input type="hidden" name="exam_added" value="<?=$currentDate?>">
												<input type="submit" class="btn btn-success" value="Create Exam And Add Questions">
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
					var exam_time = $('.exam_time');
					if(exam_time.val()<=3){						
						$.post('<?=BASEURL.'exams/addExam'?>', $(this).serialize(), function(resp) {
							resp = $.parseJSON(resp);
							if(resp.status==true){
								window.open('../exams', '_self');
							}
							console.log(resp);
						});
					}else{
						alert('Exam Time Should Be Less Than Or Equal To 3');
						console.log($('.exam_time').css('border','1px solid red !important'));
					}
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