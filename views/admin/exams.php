<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Exams</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Exams</li>
								</ul>
							</div>
							<div class="col-auto text-right float-right ml-auto">
								<!-- <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a> -->
								<a href="<?=BASEURL?>exams/addNewExam" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
													<th>Class</th>
													<th>Instructor</th>
													<th>Subject</th>
													<th>Exam Time</th>
													<th>Exam Start Time</th>
													<th>Questions</th>
													<th>Created On</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($exams as $key => $row): ?>
												<tr>
													<td><?=$row['exam_id']?></td>
													<td>
														<?php foreach ($classes as $key => $class): ?>
															<?php if ($class['class_id']==$row['class_id']): ?>
																	<?=$class['class_title']?></td>
																<?php endif ?>	
														<?php endforeach ?>
													<td>
														<?php foreach ($users as $key => $user): ?>
															<?php if ($user['user_id']==$row['ins_id']): ?>
																<?=$user['user_firstname']." ".$user['user_lastname']?></td>
															<?php endif ?>	
														<?php endforeach ?>
													</td>
													<td>
														<?php foreach ($subjects as $key => $subject): ?>
															<?php if ($subject['subject_id']==$row['subject_id']): ?>
																<?=$subject['subject_title']?></td>
															<?php endif ?>	
														<?php endforeach ?>
													</td>
													<td><?=$row['exam_time']?></td>
													<td><?=$row['exam_start_time']?></td>
													<td><a href="javascript://" class="btn btn-success btn-sm" onclick="getExamQustions(<?=$row['exam_id']?>)">Exam Questions</a></td>
													<td><?=dateConvert($row['exam_added'])?></td>
													<td class="text-right">
														<div class="actions">
															<a onclick="editExam(<?=$row['exam_id']?>)" class="btn btn-sm bg-success-light mr-2">
																<i class="fas fa-pen"></i>
															</a>
															<a onclick="deleteExam(<?=$row['exam_id']?>)" class="btn btn-sm bg-danger-light">
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
					<p>Copyright © 2020 Dreamguys.</p>					
				</footer>
				<!-- /Footer -->
				
			</div>
			<!-- /Page Wrapper -->

			<div class="modal fade none-border" id="my_event">
				<div class="modal-dialog modal-dialog-centered modal-lg">
					<div class="modal-content ">
						<div class="modal-header">
							<h4 class="modal-title">Edit Exam</h4>
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
												<input type="hidden" name="exam_id" class="exam_id" value="<?=$currentDate?>">
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
						<div class="modal-footer justify-content-center">
							<!-- <button type="submit" class="btn btn-success submit-btn">Update</button> -->
							<!-- <button type="button" class="btn btn-danger delete-event submit-btn" data-dismiss="modal">Delete</button> -->
						</div>
					</div>
				</div>
			</div>


			<div class="modal fade none-border" id="exam_questions_modal">
				<div class="modal-dialog modal-dialog-centered modal-xl">
					<div class="modal-content ">
						<div class="modal-header">
							<h4 class="modal-title">Exam Questions</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<form action="javascript://" class="form2">
						<div class="modal-body" id="">
	
							<div class="table-responsive">
								<table class="table table-hover table-center mb-0 datatable">
									<thead>
										<tr>
											<th style="width: 30%;">Question</th>
											<th>Option 1</th>
											<th>Option 2</th>
											<th>Option 3</th>
											<th>Option 4</th>
											<th style="width: 15%;">Right Answer</th>
											<th>Delete</th>
										</tr>
									</thead>
									<tbody id="quiz-body">
									</tbody>
								</table>
							</div>
							<div style="padding-top: 20px;">
								<center>
									<a href="javascript://" onclick="addNewQuestionRow()" class="btn btn-success btn-sm"> Add New Row</a>&nbsp;&nbsp;&nbsp;
									<button type="submit" class="btn btn-info btn-sm"> Submit Quiz</button>
								</center>
							</div>						

						</div>
						</form>
						<div class="modal-footer justify-content-center">
							<!-- <button type="submit" class="btn btn-success submit-btn">Update</button> -->
							<!-- <button type="button" class="btn btn-danger delete-event submit-btn" data-dismiss="modal">Delete</button> -->
						</div>
					</div>
				</div>
			</div>

			<script src="<?=AD_JS?>/jquery-3.5.1.min.js"></script>
			<script type="text/javascript">
					
				editExam = (exam_id) => {
					$.post('<?=BASEURL."exams/getExam"?>', {exam_id: exam_id, action:'getExam'}, function(resp){
						resp = $.parseJSON(resp);
						let clas = resp.data;
						for (const data in clas){
							const dataClasses = '.'+data;
							$(dataClasses).val(clas[data]);
						}
						$('#my_event').modal('show');
					});
				}

				getExamQustions = (exam_id) => {
					$.post('<?=BASEURL."exams/getExamQuestions"?>', {exam_id: exam_id, action:'getExamQuestions'}, function(resp){
						resp = $.parseJSON(resp);
						if(resp.data==''){
							$('#quiz-body').append('<input type="hidden" name="action" value="addExamQuestion"><input type="hidden" name="exam_id" value="'+exam_id+'" class="exam_id">');
						}else{
							$('#quiz-body').empty();
							let quiz = resp.data;
							quiz.forEach(function(e){
								$('#quiz-body').append('<tr><td><input type="hidden" name="action" value="addExamQuestion"><input type="hidden" name="exam_id" value="'+e.exam_id+'" class="exam_id"><input type="hidden" name="question_type" class="question_type" value="mcq"><textarea name="question_title[]" class="form-control question_title">'+e.question_title+'</textarea></td><td><input type="text" name="question_option_one[]" class="form-control question_option_one" value="'+e.question_option_one+'"></td><td><input type="text" name="question_option_two[]" class="form-control question_option_two" value="'+e.question_option_two+'"></td><td><input type="text" name="question_option_three[]" class="form-control question_option_three" value="'+e.question_option_three+'"></td><td><input type="text" name="question_option_four[]" class="form-control question_option_four" value="'+e.question_option_four+'"></td><td><select name="right_answer[]" class="form-control right_answer"><option selected="selected" value="'+e.right_answer+'">Option '+e.right_answer+'</option><option value="1">Option 1</option><option value="2">Option 2</option><option value="3">Option 3</option><option value="4">Option 4</option></select></td><td><form action="<?=BASEURL?>exams/deleteExamQuestion" method="POST"><input type="hidden" name="question_id" value="'+e.question_id+'"><button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></button></form></td></tr>');
								
							})

						}
						// $('.userUploadedImage').attr('src', '<?=AD_IMG?>users/'+student.user_img);
						$('#exam_questions_modal').modal('show');
					});
				}

				deleteExam = (exam_id) => {
					$.post('<?=BASEURL?>exams/deleteExam', {exam_id: exam_id, action:'deleteExam'}, function(resp){
						resp = $.parseJSON(resp);
						if(resp.status==true){


						}
					});
					window.location.reload();
				}

				addNewQuestionRow = () => {
					$('tbody').append('<tr><td><textarea name="question_title[]" class="form-control question_title"></textarea></td><td><input type="text" name="question_option_one[]" class="form-control question_option_one"></td><td><input type="text" name="question_option_two[]" class="form-control question_option_two"></td><td><input type="text" name="question_option_three[]" class="form-control question_option_three"></td><td><input type="text" name="question_option_four[]" class="form-control question_option_four"></td><td><select name="right_answer[]" class="form-control right_answer"><option>Choose Correct Option</option><option value="1">Option 1</option><option value="2">Option 2</option><option value="3">Option 3</option><option value="4">Option 4</option></select></td><td><button class="btn btn-danger btn-sm deleteEmptyRow"><i class="fas fa-trash"></button></td></tr>');
				}

				$(document).on('click', '.deleteEmptyRow', function(){
					$this = $(this);
					$this.parent('td').parent('tr').remove();
				});

				$(document).on('submit', '.form', function(event) {
					event.preventDefault();
					$.post('<?=BASEURL."exams/updateExam"?>', $(this).serialize(), function(resp) {
						resp = $.parseJSON(resp);
						console.log(resp);
						if(resp.status==true){

							$('#my_event').modal('hide');
							window.location.reload();

						}
					});
				});

				$("#class_image").on('change', function(){
			        let data = new FormData();
			        data.append('main_image', $(this).prop('files')[0]);
			        data.append('class_image', 'class_image');
			        $.ajax({
			            type: 'POST',
			            processData: false,
			            contentType: false,
			            data: data,
			            url: '<?=AD_AJAX?>classAjax.php',
			            dataType : 'json',
			            success: function(resp){
			                // resp = $.parseJSON(resp);
			                console.log(resp.data);
			                if (resp.status == true)
			                {   
			                    $(".class_title_img").val(resp.data);
			                    $(".classUploadedImage").attr('src', '<?=AD_IMG?>classes/'+resp.data);
			                    $(".classUploadedImage").css('display', 'block');
			                    // $('.addNewClassImg').css('display','none');
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

			    $(document).on('submit', '.form2', function(event) {
					event.preventDefault();
					$.post('<?=AD_AJAX.'db.php'?>', $(this).serialize(), function(resp) {
						resp = $.parseJSON(resp);
						if(resp.status==true){
							window.open('<?=BASEURL?>exams', '_self');
						}
						console.log(resp);
					});
				});
			</script>