<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Slider</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Slider</li>
								</ul>
							</div>
							<div class="col-auto text-right float-right ml-auto">
								
								<a href="ad_addSlider" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
													<th>Heading</th>
													<th>Text</th>
													<th>Created On</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($sliders as $key => $row): ?>
												<tr>
													<td><?=$row['slide_id']?></td>
													<td>
														<img class="avatar-img" src="<?=AD_IMG?>slider/<?=$row['slide_img']?>" alt="User Image" style="width: 200px;">
													</td>
													<td><?=$row['slide_heading']?></td>
													<td><?=$row['slide_text']?></td>
													<td><?=dateConvert($row['slide_added'])?></td>
													<td class="text-right">
														<div class="actions">
															<a onclick="deleteSlide(<?=$row['slide_id']?>)" class="btn btn-sm bg-danger-light">
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
					<p>Copyright © 2020 Relience.</p>					
				</footer>
				<!-- /Footer -->
				
			</div>
			<script src="<?=AD_JS?>/jquery-3.5.1.min.js"></script>
			<script type="text/javascript">

				deleteSlide = (slide_id) => {
					$.post('<?=AD_AJAX?>sliderAjax.php', {slide_id: slide_id, action:'deleteSlide'}, function(resp){
						resp = $.parseJSON(resp);
						if(resp.status==true){

							window.location.reload();

						}
					});
				}

			</script>
			<!-- /Page Wrapper -->