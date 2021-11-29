<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Add Class</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="teachers.html">Classes</a></li>
									<li class="breadcrumb-item active">Add Class</li>
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
												<div id="border" style="border: 2px dotted #303030;">
													<label onMouseOver="this.style.cursor='pointer'" for="class_image" class="addNewClassImg" style="color: grey;display: flex;justify-content: center;align-items: center;width: 100%;height: 100%;">
														<br><br>
														<br><br>
								                        <h1><i class="fa fa-plus"></i> Class Title Image</h1>
								                    </label>
								                    <input type="file" id="class_image" style="display: none;">
								                    <input type="hidden" class="class_img" name="class_img" value="">
								                    <img src="" class="classUploadedImage" style="width: 280px;height: 300px;display: none;">
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
												<input type="hidden" name="action" value="addClass">
												<input type="submit" class="btn btn-primary" value="Add New Class">
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
					$.post('<?=AD_AJAX?>classAjax.php', $(this).serialize(), function(resp) {
						resp = $.parseJSON(resp);
						if(resp.status==true){
							window.open('ad_classes', '_self');
						}
						console.log(resp);
					});
				});

				$(document).ready(function() {
					
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
				                    $(".class_img").val(resp.data);
				                    $(".classUploadedImage").attr('src', '<?=AD_IMG?>classes/'+resp.data);
				                    $(".classUploadedImage").css('display', 'block');
				                    $('.addNewClassImg').css('display','none');
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