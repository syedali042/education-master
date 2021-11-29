<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Testimonial</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Testimonial</li>
								</ul>
							</div>
							<div class="col-auto text-right float-right ml-auto">
								
								<a href="ad_addTestimonial" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
													<th>Author</th>
													<th>Author Title</th>
													<th>Text</th>
													<th>Created On</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($testimonial as $key => $row): ?>
												<tr>
													<td><?=$row['test_id']?></td>
													<td>
														<h2 class="table-avatar">
															<a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?=AD_IMG?>testimonial/<?=$row['test_author_img']?>" alt="User Image"></a>
															<a href="#"><?=$row['test_author']?></a>
														</h2>
													</td>
													<td><?=$row['test_author_title']?></td>
													<td><?=$row['test_text']?></td>
													<td><?=dateConvert($row['test_added'])?></td>
													<td class="text-right">
														<div class="actions">
															<a onclick="deleteTest(<?=$row['test_id']?>)" class="btn btn-sm bg-danger-light">
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

				deleteTest = (test_id) => {
					$.post('<?=AD_AJAX?>testAjax.php', {test_id: test_id, action:'deleteTest'}, function(resp){
						resp = $.parseJSON(resp);
						if(resp.status==true){

							window.location.reload();

						}
					});
				}

			</script>
			<!-- /Page Wrapper -->