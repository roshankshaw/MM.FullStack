<?php include('admin_header.php') ?>


<!-- Page Content Holder -->
<div id="content" class="col-md-12 col-sm-12">
	
		<nav class="navbar navbar-default color">
				<div class="container-fluid color">
					<div class="row">
						<div class="navbar-header col-md-2">
								<button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
										<i class="glyphicon glyphicon-align-left"></i>
										<span>Toggle Sidebar</span>
								</button>
								
						</div>
						
						<div class="navbar-header col-md-6">
							<?= form_open('articles/browse',['class'=>'form-inline']) ?>
								<table>
									<thead>
										<th><input class="form-control" type="text" name= "query" placeholder="Search Articles"></th>
										<th><button class="btn btn-secondary" type="submit">Search</button></th>
										<th><div class="aler alert-danger"><?=form_error('query',"<small class= 'alert-heading' style='padding-top:7px;'>","</small>")?></div></th>
									</thead>
								</table>
							<?=form_close()?>
						 </div>

						<div class="collapse navbar-collapse col-md-2 pull-right" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navbar-right">
										<li><a href="<?= base_URL('index.php/login/logout')?>" id="nav-btn">LOG OUT</a></li>
										<!-- <li><a href="#">Page</a></li> -->
								</ul>
								<div class="nav navbar-right navbar-brand "><strong>Hello, <?php echo $dname;?></strong></div>
						</div>

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
			<thead>
				<tr class="secondary">
					<th scope="col">Sr_no.</th>
					<th scope="col">Author</th>
					<th scope="col">Comment</th>
					<th scope="col">Created at</th>
					<th scope="col">Status</th>
				</tr>
			</thead>
			<div class="panel-group" id="accordion">
				<tbody class="">
					
					<?php if(count($comments)): $count =$this->uri->segment(3); ?>
						<?php foreach($comments as $comment): ?>
							<tr class="table">

								<td><?= ++$count ?></td>
								<td>
									<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$comment->comment_id?>">
											<?=$comment->author_name?></a>
									</div>
								</td>
								<td>
									<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$comment->comment_id?>">
											<?=$comment->comment_body?></a>
									</div>
								</td>
								<td><?=$comment->created_at?></td>
								<td><?php
								if(!$comment->Status)
									echo "Not approved";
								else
									echo "Approved";
								?></td>
								<tr>
								<td colspan="5">
									<div id="collapse<?=$comment->comment_id?>" class="panel-collapse collapse">
								      <div class="panel-body">
											<div class="row">
												<div class="col-md-2 col-md-offset-2">
													<?= anchor("comments/approve_comment/{$comment->comment_id}",'Approve',['class'=>'btn btn-primary'])?>
												</div>
												<div class="col-md-1">
													<?=
														form_open('comments/delete_comment'),
														form_hidden('comment_id',$comment->comment_id),
														form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-outline-danger','onclick'=>"return(confirm('Are you sure you want to delete this comments?'))"]),
														form_close();
													?>
												</div>
											</div>
										</div>
									</div>
								</td>
							</tr>
							</tr>

								
						<?php endforeach; ?>
					<?php else: ?>
						<tr>
							<td colspan="5">No records found.</td>
						</tr>	
					<?php endif; ?>
				</tbody>
			</div>
		</table>
		<center><?php echo $this->pagination->create_links()?></center> 
	</div>
</div>


</div>
							
<?php include('admin_footer.php') ?>