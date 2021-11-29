		<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Add Testimonial</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="teachers.html">Testimonial</a></li>
									<li class="breadcrumb-item active">Add Testimonial</li>
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
												<h3 class="form-title"><span>Add Testimonial</span></h3>
											</div>
											<div class="col-12">
												<div style="border: 2px dotted #303030;">
													<label onMouseOver="this.style.cursor='pointer'" for="test_img" class="addNewTestImg" style="color: grey;display: flex;justify-content: center;align-items: center;width: 100%;height: 100%;">
														<br><br><br><br>
								                        <h1><i class="fa fa-plus"></i> Testimonial Author Image</h1>
								                    </label>
								                    <input type="file" class="form-control" id="test_img" style="display: none;">
								                    <input type="hidden" class="test_author_img" name="test_author_img" value="">
								                    <img src="" class="testUploadedImage" style="width: 100%;height: 200px;display: none;">
							                    </div>
											</div>
											<br><br><br><br><br><br>
											<div class="col-12">
												<div class="form-group">
													<label>Author</label>
													<input type="text" class="form-control test_author" name="test_author">
												</div>
											</div>
											<br><br><br><br><br><br>
											<div class="col-12">
												<div class="form-group">
													<label>Author Role / Profession</label>
													<input type="text" class="form-control test_author_title" name="test_author_title">
												</div>
											</div>
											<br><br><br><br><br><br>
											<div class="col-12">
												<div class="form-group">
													<label>Testimonial Text</label>
													<textarea class="form-control test_text" name="test_text"></textarea>
												</div>
											</div>
											<div class="col-12">
												<input type="hidden" name="action" value="addTest">
												<button type="submit" class="btn btn-primary">Submit</button>
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

				$(document).ready(function() {
					
					$("#test_img").on('change', function(){
				        let data = new FormData();
				        data.append('main_image', $(this).prop('files')[0]);
				        data.append('test_img', 'test_img');
				        $.ajax({
				            type: 'POST',
				            processData: false,
				            contentType: false,
				            data: data,
				            url: '<?=AD_AJAX?>testAjax.php',
				            dataType : 'json',
				            success: function(resp){
				                // resp = $.parseJSON(resp);
				                console.log(resp.data);
				                if (resp.status == true)
				                {   
				                    $(".test_author_img").val(resp.data);
				                    $(".testUploadedImage").attr('src', '<?=AD_IMG?>testimonial/'+resp.data);
				                    $(".testUploadedImage").css('display', 'block');
				                    $('.addNewTestImg').css('display','none');
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

				$(document).on('submit', '.form', function(event) {
					event.preventDefault();
					$.post('<?=AD_AJAX?>testAjax.php', $(this).serialize(), function(resp) {
						resp = $.parseJSON(resp);
						console.log(resp);
					});
				});

			</script>
