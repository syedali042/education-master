
		<!-- <div class="quiz-top-area text-center">
			<h1>Personality Survey Quiz</h1>
			<div class="quiz-countdown text-center ul-li">
				<ul>
					<li class="days">
						<span class="count-down-number"></span>
						<span class="count-unit">Days</span>
					</li>

					<li class="hours">
						<span class="count-down-number"></span>
						<span class="count-unit">Hours</span>
					</li>

					<li class="minutes">
						<span class="count-down-number"></span>
						<span class="count-unit">Min</span>
					</li>

					<li class="seconds">
						<span class="count-down-number"></span>
						<span class="count-unit">Sec</span>
					</li>
				</ul>
			</div>
		</div> -->
		<div class="wrapper position-relative">
			<h1 style="padding: 20px;text-align: center;display: none;" id="luck-heading"></h1>
			<div class="wizard-content-1">
				<div class="steps d-inline-block position-absolute">
					<ul class="tablist multisteps-form__progress">
						<li class="multisteps-form__progress-btn js-active current"></li>
						<li class="multisteps-form__progress-btn "></li>
						<li class="multisteps-form__progress-btn"></li>
						<li class="multisteps-form__progress-btn"></li>
						<li class="multisteps-form__progress-btn"></li>
					</ul>
				</div>
				<div class="step-inner-content position-relative">
					<form onsubmit="submitQuizForm()" id="QuizForm" class="multisteps-form__form form" action="javascript://" id="wizard" method="POST">
						<div class="form-area position-relative">
							<div class="container">
								<div class="quiz-info">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 col-6">
											<p>
												Class : 
												<u>
													<?php foreach ($classes as $key => $class): ?>
														<?php if ($lecture['class_id']==$class['class_id']): ?>
															<?=$class['class_title']?>
														<?php endif ?>	
													<?php endforeach ?>										
												</u>
											</p>
										</div>
										<div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 col-6">
											<p>
												Subject : 
												<u>
													<?php foreach ($studentSubjects as $key => $subjects): ?>
														<?php if ($lecture['subject_id']==$subjects['subject_id']): ?>
															<?=$subjects['subject_title']?>
														<?php endif ?>	
													<?php endforeach ?>										
												</u>
											</p>
										</div>
										<div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 col-6">
											<p>
												Instructor : 
												<u>
													<?php foreach ($instructors as $key => $instructor): ?>
														<?php if ($lecture['lecture_ins_id']==$instructor['user_id']): ?>
															<?=$instructor['user_firstname']." ".$instructor['user_lastname']?>
														<?php endif ?>	
													<?php endforeach ?>										
												</u>
											</p>
										</div>
										<div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 col-6">
											<p>
												Topic : 
												<u>
													<?=$lecture['lecture_topic']?>
												</u>
											</p>
										</div>
									</div>
								</div>
								<p style="display: inline-block;color: red;padding-top: 10px;">Note : Quiz will automatically submit after &nbsp;&nbsp;<div id="countdown" style="display: inline-block;"></div>.</p>
							</div>
							<input type="hidden" id="totalQuestions" value="<?=count($lectureQuiz)?>">
							<?php foreach ($lectureQuiz as $key => $row): ?>
							<div class="multisteps-form__panel js-active" data-animation="fadeIn">
								<div class="wizard-forms position-relative">
									<div class="quiz-title text-center">
										<span>Question <?=$key+1?><br><?=$row['quiz_question']?></span>
									</div>
									<div class="quiz-option-selector">
										<ul>
											<li>
												<label class="start-quiz-item">
													<input type="radio" name="quiz[<?=$key?>]" value="1" class="exp-option-box">
													<span class="exp-number text-uppercase">A</span>
													<span class="exp-label"><?=$row['quiz_option_one']?></span>
													<span class="checkmark-border"></span>
												</label>
											</li>
											<li>
												<label>
													<input type="radio" name="quiz[<?=$key?>]" value="2" class="exp-option-box">
													<span class="exp-number text-uppercase">b</span>
													<span class="exp-label"><?=$row['quiz_option_two']?></span>
													<span class="checkmark-border"></span>
												</label>
											</li>
											<li>
												<label>
													<input type="radio" name="quiz[<?=$key?>]" value="3" class="exp-option-box">
													<span class="exp-number text-uppercase">c</span>
													<span class="exp-label"><?=$row['quiz_option_three']?></span>
													<span class="checkmark-border"></span>
												</label>
											</li>
											<li>
												<label>
													<input type="radio" name="quiz[<?=$key?>]" value="4" class="exp-option-box">
													<span class="exp-number text-uppercase">d</span>
													<span class="exp-label"><?=$row['quiz_option_four']?></span>
													<span class="checkmark-border"></span>
												</label>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<?php endforeach ?>
						</div>

						<br><br><br><br>
						<div class="actions" style="padding: 50px;">
							<center>
							<ul style="margin-top: -30px;">
								<li>
									<label id="clickToSubmit" for="submitQuiz"><span class="js-btn-next" title="NEXT">Submit Quiz</span></label>
									<input style="display: none;" type='submit' id="submitQuiz" name="submitQuiz" >
								</li>
							</ul>
							</center>
						</div>
						<input type="hidden" name="lecture_id" value="<?=$lecture['lecture_id']?>">
						<input type="hidden" name="action" value="insert-lecture-quiz">
					</form>
				</div>
			</div>
			<div class="result-sheet" style="display: none;">
				<div class="container">
					<div class="quiz-info">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 col-6">
								<p>
									Class : 
									<u>
										<?php foreach ($classes as $key => $class): ?>
											<?php if ($lecture['class_id']==$class['class_id']): ?>
												<?=$class['class_title']?>
											<?php endif ?>	
										<?php endforeach ?>										
									</u>
								</p>
							</div>
							<div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 col-6">
								<p>
									Subject : 
									<u>
										<?php foreach ($studentSubjects as $key => $subjects): ?>
											<?php if ($lecture['subject_id']==$subjects['subject_id']): ?>
												<?=$subjects['subject_title']?>
											<?php endif ?>	
										<?php endforeach ?>										
									</u>
								</p>
							</div>
							<div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 col-6">
								<p>
									Instructor : 
									<u>
										<?php foreach ($instructors as $key => $instructor): ?>
											<?php if ($lecture['lecture_ins_id']==$instructor['user_id']): ?>
												<?=$instructor['user_firstname']." ".$instructor['user_lastname']?>
											<?php endif ?>	
										<?php endforeach ?>										
									</u>
								</p>
							</div>
							<div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 col-6">
								<p>
									Topic : 
									<u>
										<?=$lecture['lecture_topic']?>
									</u>
								</p>
							</div>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-condensed table-bordered">
							<thead>
								<tr>
									<th>Question No.</th>
									<th>Your Answer</th>
									<th>Correct Answer</th>
								</tr>
							</thead>
							<tbody id="result-body">
								
							</tbody>
						</table>
					</div>
					<span class="js-btn-next" title="NEXT"><a href="<?=BASEURL?>index"><label>Back To Dashboard</label></a></span>
				</div>
			</div>
		</div>	

		<script src="<?=Q_JS?>jquery-3.3.1.min.js"></script>

		<script type="text/javascript">
			// $(document).on('submit', '.form', function(event) {
			// 	event.preventDefault();
			// 	$('.wizard-content-1').fadeOut('slow', function() {});
			// 	$.post('<?=AD_AJAX?>resultAjax.php', $(this).serialize(), function(resp) {
			// 		resp = $.parseJSON(resp);
			// 		if(resp.status==true){
			// 			$i = 1;
			// 			resp.actual_answers.forEach(function(element, index) {
			// 				$('#result-body').append('<tr><td>'+parseInt(index+1)+'</td><td>'+resp.student_answers[index]+'</td><td>'+element+'</td></tr>');
			// 			});
			// 			$('#result-body').append('<tr><td><b>Total Marks</b></td><td colspan="2"><center><b>'+resp.true+' Out Of '+resp.total_marks+'</b></center></td></tr>');
			// 			$('.result-sheet').fadeIn('slow', function() {});
			// 		}
			// 	});
				
			// });
			const submitQuizForm = () => {
					var ele = $("#QuizForm");
					$('.wizard-content-1').fadeOut('slow', function() {});
					$.post('<?=AD_AJAX?>resultAjax.php', ele.serialize(), function(resp) {
						resp = $.parseJSON(resp);
						if(resp.status==true){
							$i = 1;
							resp.actual_answers.forEach(function(element, index) {
								$('#result-body').append('<tr><td>'+parseInt(index+1)+'</td><td>'+resp.student_answers[index]+'</td><td>'+element+'</td></tr>');
							});
							$('#result-body').append('<tr><td><b>Total Marks</b></td><td colspan="2"><center><b>'+resp.true+' Out Of '+resp.total_marks+'</b></center></td></tr>');
							if(resp.total_marks>resp.true){
								$('#luck-heading').text('Best Of Luck For Next Time');
								$('#luck-heading').fadeIn('slow', function() {});
							}else{
								$('#luck-heading').text('Well Scored, Keep Practicing');
								$('#luck-heading').fadeIn('slow', function() {});
							}
							$('.result-sheet').fadeIn('slow', function() {});
						}else{
							$('#result-body').append('<tr><td colspan="3"> Better Luck Next Time.</td></tr>');
							$('.result-sheet').fadeIn('slow', function() {});	
						}
					});
				}
			// function ajax(){

			// }

			function countdown( elementName, minutes, seconds )
			{
			    var element, endTime, hours, mins, msLeft, time;

			    function twoDigits( n )
			    {
			        return (n <= 9 ? "0" + n : n);
			    }

			    function updateTimer()
			    {
			        msLeft = endTime - (+new Date);
			        if ( msLeft < 1000 ) {
			            element.innerHTML = "Time is up!";
			        } else {
			            time = new Date( msLeft );
			            hours = time.getUTCHours();
			            mins = time.getUTCMinutes();
			            element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
			            setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
			        }
			    }

			    element = document.getElementById( elementName );
			    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
			    updateTimer();
			}
			let totalQuestions = $('#totalQuestions').val();
			let totalTime = parseInt(totalQuestions*2);
			countdown( "countdown", totalTime, 0 );
			let milisecondsInTotalTime = totalTime*60000;

			setTimeout(function(){
				submitQuizForm();
			}, milisecondsInTotalTime);
			console.log(milisecondsInTotalTime);

		</script>