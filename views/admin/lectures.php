<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Lectures</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Lectures</li>
								</ul>
							</div>
							<div class="col-auto text-right float-right ml-auto">
								<!-- <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a> -->
								<a href="lectures/addNewLecture" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
													<th>Title</th>
													<th>Class</th>
													<th>Subject</th>
													<th>Instructor</th>
													<th>Medium</th>
													<th>Quiz</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($lectures as $key => $row): ?>
												<tr>
													<td><?=$row['lecture_id']?></td>
													<td><?=$row['lecture_title']?></td>
													<td>
														<!-- <h2 class="table-avatar">
															<a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?=AD_IMG?>students/<?=$row['student_img']?>" alt="User Image"></a>
															<a href="#"><?=$row['student_name']?></a>
														</h2> -->
														<?php foreach ($classes as $key => $row2): ?>
															<?php if ($row2['class_id']==$row['class_id']): ?>
																<?=$row2['class_title']?>	
															<?php endif ?>
														<?php endforeach ?>
													</td>
													<td>
														<?php foreach ($subjects as $key => $row3): ?>
															<?php if ($row3['subject_id']==$row['subject_id']): ?>
																<?=$row3['subject_title']?>	
															<?php endif ?>
														<?php endforeach ?>
													</td>
													<td>
														<?php foreach ($users as $key => $row4): ?>
															<?php if ($row4['user_id']==$row['lecture_ins_id']): ?>
																<?=$row4['user_firstname']." ".$row4['user_lastname']?>	
															<?php endif ?>
														<?php endforeach ?>
													</td>
													<td><?=$row['lecture_medium']?></td>
													<td>
														<a onclick="viewQuiz(<?=$row['lecture_id']?>, <?=$row['class_id']?>)" class="btn btn-sm bg-secondary mr-2">
															<i class="fas fa-eye" style="color: #fff;"></i>
														</a>
													</td>
													<td class="text-right">
														<div class="actions">
															<a onclick="editLecture(<?=$row['lecture_id']?>)" class="btn btn-sm bg-success-light mr-2">
																<i class="fas fa-pen"></i>
															</a>
															<a onclick="deleteLecture(<?=$row['lecture_id']?>)" class="btn btn-sm bg-danger-light">
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
												<iframe style="width: 100%;height: 300px;" 
												src="" class="lecture_video_player">
												</iframe>
												<div class="form-group" style="padding-top: 20px;">
													<label>Lecture Video Youtube Link</label>
													<input required="" type="text" class="form-control lecture_video" name="lecture_video">
												</div>
											</div>
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
												<input type="hidden" name="lecture_id" class="lecture_id" value="">
												<input type="submit" class="btn btn-primary" value="Update Lecture">
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
			<div class="modal fade none-border" id="lecture_quiz">
				<div class="modal-dialog modal-dialog-centered modal-xl">
					<div class="modal-content ">
						<div class="modal-header">
							<h4 class="modal-title">Lecture Quiz</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<form action="javascript://" class="form2">
						<div class="modal-body" id="lecture_quiz_body">
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
					
				editLecture = (lecture_id) => {
					$.post('<?=BASEURL.'lectures/getLecture'?>', {lecture_id: lecture_id, action:'getLecture'}, function(resp){
						resp = $.parseJSON(resp);
						console.log(resp);
						let student = resp.data;
						for (const data in student){
							const dataClasses = '.'+data;
							$(dataClasses).val(student[data]);
						}
						$('.lecture_video_player').attr('src', student.lecture_video);
						// $('.userUploadedImage').attr('src', '<?=AD_IMG?>users/'+student.user_img);
						$('#my_event').modal('show');
					});
				}

				deleteLecture = (lecture_id) => {
					$.post('<?=BASEURL.'lectures/deleteLecture'?>', {lecture_id: lecture_id, action:'deleteLecture'}, function(resp){
						resp = $.parseJSON(resp);
						if(resp.status==true){

							window.location.reload();

						}
					});
				}

				addNewQuestionRow = () => {
					$('tbody').append('<tr><td><textarea name="quiz_question[]" class="form-control quiz_question"></textarea></td><td><input type="text" name="quiz_option_one[]" class="form-control quiz_option_one"></td><td><input type="text" name="quiz_option_two[]" class="form-control quiz_option_two"></td><td><input type="text" name="quiz_option_three[]" class="form-control quiz_option_three"></td><td><input type="text" name="quiz_option_four[]" class="form-control quiz_option_four"></td><td><select name="right_answer[]" class="form-control right_answer"><option>Choose Correct Option</option><option value="1">Option 1</option><option value="2">Option 2</option><option value="3">Option 3</option><option value="4">Option 4</option></select></td><td><button class="btn btn-danger btn-sm deleteEmptyRow"><i class="fas fa-trash"></button></td></tr>');
				}

				$(document).on('click', '.deleteEmptyRow', function(){
					$this = $(this);
					$this.parent('td').parent('tr').remove();
				});

				viewQuiz = (lecture_id, class_id) => {
					$.post('<?=BASEURL.'lectures/getLectureQuiz'?>', {lecture_id: lecture_id, action:'getLectureQuiz'}, function(resp){
						resp = $.parseJSON(resp);
						console.log(resp.data);
						if(resp.data==''){
							$('#quiz-body').append('<input type="hidden" name="action" value="addQuiz"><input type="hidden" name="lecture_id" value="'+lecture_id+'" class="lecture_id">');
						}else{
							$('#quiz-body').empty();
							let quiz = resp.data;
							quiz.forEach(function(e){
								$('#quiz-body').append('<tr><td><input type="hidden" name="action" value="addQuiz"><input type="hidden" name="lecture_id" value="'+e.lecture_id+'" class="lecture_id"><textarea name="quiz_question[]" class="form-control quiz_question">'+e.quiz_question+'</textarea></td><td><input type="text" name="quiz_option_one[]" class="form-control quiz_option_one" value="'+e.quiz_option_one+'"></td><td><input type="text" name="quiz_option_two[]" class="form-control quiz_option_two" value="'+e.quiz_option_two+'"></td><td><input type="text" name="quiz_option_three[]" class="form-control quiz_option_three" value="'+e.quiz_option_three+'"></td><td><input type="text" name="quiz_option_four[]" class="form-control quiz_option_four" value="'+e.quiz_option_four+'"></td><td><select name="right_answer[]" class="form-control right_answer"><option selected="selected" value="'+e.right_answer+'">Option '+e.right_answer+'</option><option value="1">Option 1</option><option value="2">Option 2</option><option value="3">Option 3</option><option value="4">Option 4</option></select></td><td><form action="lectures/deleteLectureQuiz" method="POST"><input type="hidden" name="quiz_id" value="'+e.quiz_id+'"><button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></button></form></td></tr>');
								
							})

						}
						// $('.userUploadedImage').attr('src', '<?=AD_IMG?>users/'+student.user_img);
						$('#lecture_quiz').modal('show');
					});
				}

				$(document).on('submit', '.form2', function(event) {
					event.preventDefault();
					$.post('<?=AD_AJAX.'db.php'?>', $(this).serialize(), function(resp) {
						resp = $.parseJSON(resp);
						if(resp.status==true){
							window.open('<?=BASEURL?>lectures', '_self');
						}
						console.log(resp);
					});
				});

				$(document).on('submit', '.form', function(event) {
					event.preventDefault();
					$.post('<?=BASEURL.'lectures/updateLecture'?>', $(this).serialize(), function(resp) {
						resp = $.parseJSON(resp);
						console.log(resp);
						if(resp.status==true){

							$('#my_event').modal('hide');
							window.location.reload();

						}
					});
				});			
			</script>