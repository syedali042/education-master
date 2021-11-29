<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Classes</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Classes</li>
								</ul>
							</div>
							<div class="col-auto text-right float-right ml-auto">
								<!-- <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a> -->
								<a href="ad_addClass" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
													<th>Image</th>
													<th>Title</th>
													<th>Starting Date</th>
													<th>Age Group</th>
													<th>Created On</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($classes as $key => $row): ?>
												<tr>
													<td><?=$row['class_id']?></td>
													<td>
														<img class="avatar-img" src="<?=AD_IMG?>classes/<?=$row['class_title_img']?>" alt="User Image" style="width: 200px;">
													</td>
													<td><?=$row['class_title']?></td>
													<td><?=dateConvert($row['starting_date'])?></td>
													<td><?=$row['age_group']?></td>
													<td><?=dateConvert($row['class_added'])?></td>
													<td class="text-right">
														<div class="actions">
															<a onclick="editClass(<?=$row['class_id']?>)" class="btn btn-sm bg-success-light mr-2">
																<i class="fas fa-pen"></i>
															</a>
															<a onclick="deleteClass(<?=$row['class_id']?>)" class="btn btn-sm bg-danger-light">
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
											<input type="hidden" name="class_id" class="class_id">
											<div class="col-12 col-sm-6">
												<div>
													<label onMouseOver="this.style.cursor='pointer'" for="class_image" class="addNewClassImg">
								                    	<img src="" class="classUploadedImage" style="width: 100%;">
								                    </label>
								                    <input type="file" id="class_image" style="display: none;">
								                    <input type="hidden" class="class_title_img" name="class_img" value="">
							                    </div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Class Title</label>
													<input type="text" class="form-control class_title" name="class_title">
												</div>
											</div>
											<br><br><br><br><br><br>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Starting Date</label>
													<input type="date" class="form-control starting_date" name="starting_date">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Age Group</label>
													<input type="text" class="form-control age_group" name="age_group">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Size / Seats</label>
													<input class="form-control class_size" name="class_size" type="text">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Timing</label>
													<input type="text" class="form-control class_time" name="class_time">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Duration</label>
													<input type="text" class="form-control class_duration" name="class_duration">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Tution Fee</label>
													<input type="text" class="form-control class_tution_fee" name="class_tution_fee">
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label>Description</label>
													<textarea class="form-control class_description" name="class_description"></textarea>
												</div>
											</div>
											<div class="col-12">
												<input type="hidden" name="action" value="updateClass">
												<center><input type="submit" class="btn btn-primary" value="Update"></center>
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
					
				editClass = (class_id) => {
					$.post('<?=AD_AJAX?>classAjax.php', {class_id: class_id, action:'getClass'}, function(resp){
						resp = $.parseJSON(resp);
						let clas = resp.data;
						for (const data in clas){
							const dataClasses = '.'+data;
							$(dataClasses).val(clas[data]);
						}
						$('.classUploadedImage').attr('src', '<?=AD_IMG?>classes/'+clas.class_title_img);
						$('#my_event').modal('show');
					});
				}

				deleteClass = (class_id) => {
					$.post('<?=AD_AJAX?>classAjax.php', {class_id: class_id, action:'deleteClass'}, function(resp){
						resp = $.parseJSON(resp);
						if(resp.status==true){

							window.location.reload();

						}
					});
				}


				$(document).on('submit', '.form', function(event) {
					event.preventDefault();
					$.post('<?=AD_AJAX?>classAjax.php', $(this).serialize(), function(resp) {
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
			</script>