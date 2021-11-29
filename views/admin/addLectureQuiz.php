<!-- Page Wrapper -->
            <div class="page-wrapper">
            	<form action="javascript://" method="POST" class="form">
		            <div class="content container-fluid">
					
						<!-- Page Header -->
						<div class="page-header">
							<div class="row align-items-center">
								<div class="col">
									<h3 class="page-title">Add Lecture Quiz</h3>
									<ul class="breadcrumb">
										<li class="breadcrumb-item"><a href="teachers.html">Lectures</a></li>
										<li class="breadcrumb-item active">Add Lectures Quiz</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /Page Header -->
						<div class="row">
							<div class="table-responsive">
								<table class="table table-hover table-center mb-0 datatable">
									<thead>
										<tr>
											<th style="width: 40%;">Question</th>
											<th style="width: 12%;">Option 1</th>
											<th style="width: 12%;">Option 2</th>
											<th style="width: 12%;">Option 3</th>
											<th style="width: 12%;">Option 4</th>
											<th style="width: 12%;">Right Answer</th>
											<th style="width: 12%;">Delete</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<input type="hidden" name="action" value="addQuiz">
												<input type="hidden" name="lecture_id" value="<?=$_POST['lecture_id']?>">
												<textarea name="quiz_question[]" class="form-control quiz_question"></textarea>
											</td>
											<td>
												<input type="text" name="quiz_option_one[]" class="form-control quiz_option_one">
											</td>
											<td>
												<input type="text" name="quiz_option_two[]" class="form-control quiz_option_two">
											</td>
											<td>
												<input type="text" name="quiz_option_three[]" class="form-control quiz_option_three">
											</td>
											<td>
												<input type="text" name="quiz_option_four[]" class="form-control quiz_option_four">
											</td>
											<td>
												<select name="right_answer[]" class="form-control right_answer">
													<option>Choose Correct Option</option>
													<option value="1">Option 1</option>
													<option value="2">Option 2</option>
													<option value="3">Option 3</option>
													<option value="4">Option 4</option>
												</select>
											</td>
										</tr>
									</tbody>
								</table>
							</div>					
						</div>					
						<div style="padding-top: 20px;">
							<center>
								<a href="javascript://" onclick="addNewQuestionRow()" class="btn btn-success btn-sm"> Add New Row</a>&nbsp;&nbsp;&nbsp;
								<button type="submit" class="btn btn-info btn-sm"> Submit Quiz</button>
							</center>
						</div>
					</div>
				</form>
				
			</div>
			<!-- /Page Wrapper -->

			<script src="<?=AD_JS?>/jquery-3.5.1.min.js"></script>
			<script type="text/javascript">
				
				addNewQuestionRow = () => {
					$('tbody').append('<tr><td><textarea name="quiz_question[]" class="form-control quiz_question"></textarea></td><td><input type="text" name="quiz_option_one[]" class="form-control quiz_option_one"></td><td><input type="text" name="quiz_option_two[]" class="form-control quiz_option_two"></td><td><input type="text" name="quiz_option_three[]" class="form-control quiz_option_three"></td><td><input type="text" name="quiz_option_four[]" class="form-control quiz_option_four"></td><td><select name="right_answer[]" class="form-control right_answer"><option>Choose Correct Option</option><option value="1">Option 1</option><option value="2">Option 2</option><option value="3">Option 3</option><option value="4">Option 4</option></select></td><td><button class="btn btn-danger btn-sm deleteEmptyRow"><i class="fas fa-trash"></button></td></tr>');
				}

				$(document).on('click', '.deleteEmptyRow', function(){
					$this = $(this);
					$this.parent('td').parent('tr').remove();
				});

				$(document).on('submit', '.form', function(event) {
					event.preventDefault();
					$.post('<?=AD_AJAX.'db.php'?>', $(this).serialize(), function(resp) {
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