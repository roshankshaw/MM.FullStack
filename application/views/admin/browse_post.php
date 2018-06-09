<?php include('admin_header.php') ?>


<!-- Page Content Holder -->
<div id="content" class="col-md-12 col-sm-12">
	
		<nav class="navbar navbar-default">
				<div class="container-fluid">

						<div class="navbar-header">
								<button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
										<i class="glyphicon glyphicon-align-left"></i>
										<span>Toggle Sidebar</span>
								</button>
						</div>
						
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navbar-right">
										<li><a href="<?= base_URL('index.php/login/logout')?>">LOG OUT</a></li>
										<!-- <li><a href="#">Page</a></li> -->
								</ul>
								<div class="nav navbar-right navbar-brand "><strong>Hello, <?php echo $dname;?></strong></div>
						</div>
				</div>
		</nav>

		<!-- CONTENT FOR THIS LINK BEGINS -->

	<div class="container">
		<!-- FLASH ALERT -->
		 <?php if($feedback = $this->session->flashdata('feedback')):
					$feedback_class=$this->session->flashdata('feedback_class');
			 ?>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="alert alert-dismissible <?=$feedback_class?>">
						<center><strong><?= $feedback ?></strong></center>
					</div>
					</div>
				</div>
		<?php endif;?>
		<!-- TABLE BEGINS -->
		<table class="table table-striped table-hover ">
			<thead >
				<tr class="dark">
					<th scope="col">Sr_no.</th>
					<th scope="col">Title</th>
					<th scope="col">Authors</th>
					<th scope="col">Category</th>
					<th scope="col">Status</th>
				</tr>
			</thead>
		<div class="panel-group" id="accordion">
			<tbody class="">
				<?php foreach($articles as $article): ?>
						<tr class="table">
							<td><?=$article->post_id?></td>
							<td>
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$article->post_id?>">
										<?=$article->title?></a>
									</h4>
								</div>
							</td>
							<td><?=$dname?></td>
							<td><?=$article->category?></td>
							<td><?=$article->status ?></td>
						</tr>
						<tr class="post_row">
							<td colspan="5">
								<div id="collapse<?=$article->post_id?>" class="panel-collapse collapse">
							      <div class="panel-body">
										<div class="row">
											<div class="col-md-1 col-md-offset-2">
												<?= anchor("articles/edit_article/{$article->post_id}",'Edit',['class'=>'btn btn-outlininfo'])?>
											</div>
											<div class="col-md-1">
												<?=
													form_open('articles/delete_article'),
													form_hidden('article_id',$article->post_id),
													form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-outlindanger','onclick'=>"return(confirm('Are you sure you want to delete this record?'))"]),
													form_close();
												?>
											</div>
										</div>
									</div>
								</div>
							</td>
						</tr>
			<?php endforeach; ?>
			</tbody>
		</div>
		</table> 
	</div>
</div>


</div>


<?php include('admin_footer.php') ?>