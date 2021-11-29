		<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Add Slide</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="teachers.html">Slider</a></li>
									<li class="breadcrumb-item active">Add Slide</li>
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
												<h3 class="form-title"><span>Add Slide</span></h3>
											</div>
											<div class="col-12">
												<div style="border: 2px dotted #303030;">
													<label onMouseOver="this.style.cursor='pointer'" for="slider_img" class="addNewSlideImg" style="color: grey;display: flex;justify-content: center;align-items: center;width: 100%;height: 100%;">
														<br><br><br><br>
								                        <h1><i class="fa fa-plus"></i> Slide Image</h1>
								                    </label>
								                    <input type="file" class="form-control" id="slider_img" style="display: none;">
								                    <input type="hidden" class="form-control slide_image" value="" name="slide_image">
								                    <img src="" class="slideUploadedImage" style="width: 100%;height: 200px;display: none;">
							                    </div>
											</div>
											<br><br><br><br><br><br>
											<div class="col-12">
												<div class="form-group">
													<label>Heading</label>
													<textarea class="form-control slide_heading" name="slide_heading" rows="5"></textarea>
												</div>
											</div>
											<br><br><br><br><br><br>
											<div class="col-12">
												<div class="form-group">
													<label>Text</label>
													<textarea class="form-control slide_text" name="slide_text" rows="5"></textarea>
												</div>
											</div>
											<div class="col-12">
												<input type="hidden" name="action" value="addSlider">
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
					
					$("#slider_img").on('change', function(){
				        let data = new FormData();
				        data.append('main_image', $(this).prop('files')[0]);
				        data.append('slider_img', 'slider_img');
				        $.ajax({
				            type: 'POST',
				            processData: false,
				            contentType: false,
				            data: data,
				            url: '<?=AD_AJAX?>sliderAjax.php',
				            dataType : 'json',
				            success: function(resp){
				                // resp = $.parseJSON(resp);
				                console.log(resp.data);
				                if (resp.status == true)
				                {   
				                    $(".slide_image").val(resp.data);
				                    $(".slideUploadedImage").attr('src', '<?=AD_IMG?>slider/'+resp.data);
				                    $(".slideUploadedImage").css('display', 'block');
				                    $('.addNewSlideImg').css('display','none');
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
					$.post('<?=AD_AJAX?>sliderAjax.php', $(this).serialize(), function(resp) {
						resp = $.parseJSON(resp);
						console.log(resp);
					});
				});

			</script>

			