		<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Add Gallery</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="teachers.html">Gallery</a></li>
									<li class="breadcrumb-item active">Add Gallery</li>
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
												<h3 class="form-title"><span>Add Gallery</span></h3>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label>Text</label>
													<textarea class="form-control img_description" rows="5"></textarea>
												</div>
											</div>
											<div class="col-12">
												<div id="image-uploader" style="border: 1px dashed grey;width: 100%;height: 150px;border-radius: 5px;">
                                                    <form method='post' action='javascript://' enctype="multipart/form-data">
                                                    <label for="files" onMouseOver="this.style.color='blue', this.style.cursor='pointer'" onMouseOut="this.style.color='black', this.style.transition='0.5s'" style="display: flex;justify-content: center;align-items: center;width: 100%;height: 100%;">
                                                        <h3><i class="fa fa-plus"></i>Select Images</h3>
                                                    </label>
                                                       <input type="file" id='files' class="form-control" name="files[]" multiple style="display: none">
                                                       <center>
                                                       	<button style="margin:10px;margin-top: -10%;" type="button" class="btn btn-primary" id="submitGalleryImages"><i class="fa fa-upload"></i> Upload</button>
                                                       </center>

                                                    </form>
                                                </div>
                                                <div class="progress" style="width: 100%;display:none;">
                                                    <div class="progress-bar">
                                                    </div>
                                                </div>
											</div>
											<br><br><br><br><br><br><br>
											
											<div class="col-12">
												<button onclick="addGallery()" class="btn btn-primary">Submit</button>
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

				$(document).ready(function(){

			        $('#submitGalleryImages').click(function(){

			           var form_data = new FormData();
			           var img_description = $('.img_description').val();
			           // Read selected files
			           var totalfiles = document.getElementById('files').files.length;
			           for (var index = 0; index < totalfiles; index++) {
			              form_data.append("files[]", document.getElementById('files').files[index]);
			           }
			           form_data.append('img_description', img_description);
			           // AJAX request
			           $.ajax({
			             xhr: function() {
			                var xhr = new window.XMLHttpRequest();
			                xhr.upload.addEventListener("progress", function(evt) {
			                    if (evt.lengthComputable) {
			                        var percentComplete = ((evt.loaded / evt.total) * 100);
			                        $(".progress-bar").width(percentComplete + '%');
			                        $(".progress-bar").html('uploading...');
			                        console.log(percentComplete);
			                    }
			                }, false);
			                return xhr;
			             },
			             url: '<?=AD_AJAX?>multiImageAjax.php', 
			             type: 'post',
			             data: form_data,
			             dataType: 'json',
			             contentType: false,
			             processData: false,
			             beforeSend: function(){
			                $("#image-uploader").fadeOut('fast',function (){});
			                $(".progress").css('display', 'block');
			                $(".progress").css('padding', '20px');
			                $(".progress-bar").width('0%');
			                $('#uploadStatus').html('<img src="images/loading.gif"/>');
			             },
			             success: function (response) {

			               for(var index = 0; index < response.length; index++) {
			                 var src = response[index];
			                 console.log(src);
			                 // Add img element in <div id='preview'>
			                 // $('#hotelImagesGallery').append('<figure><img src="<?=IMG?>img/hotelImages/'+src+'" alt="" /></figure>');
			               }
			                $(".progress-bar").html('Uploaded');
			                $(".progress-bar").css('background-color','#3CB371');
			                $("#image-uploader").fadeIn('slow',function (){});
			                setTimeout(function(){
			                    window.open('ad_gallery', '_self');
			                }, 2000);
			             }
			           });

			        });

			    });
			</script>