<?php include('page_header.php') ?>

<div class="container wrap">	
	<!-- MAIN CONTENT SECTION -->
		<div class="row">
			<div class="col-md-8 col-sm-12 article-body">
				<!-- BEGIN ARTICLE SECTION -->
				<div class="row">
					<div class="card">
						<img src="<?= $article->img_path?>" alt="" class="img-fluid">
						<br>
						<div class="article-body-p">
							<h3><?=$article->title?></h3><hr>
							<span class="post-tags"><button class="btn btn-success">tag1</button>
							<button class="btn btn-primary">tag2</button></span>
							<br>
							<span class="post-details small"><strong> <a href="#"><?=date('d M Y',strtotime($article->created_at))?></a> | <a href="#">Admin name</a> | <a href="#">Leave a Comment</a></strong></span>
							<br><br>
							<article>
								<?=$article->content?>
							</article>
						</div>
					</div>
				</div>
				<!-- END ARTICLE SECTION -->
				<br>
				<br>
				<br>
				<!-- BEGIN RELATED POSTS -->
				<div class ="row">
					<div class="card">
						<div class="card-header post-related">
							<h5>RELATED POSTS</h5>
						</div>
						<div class="card-body">
							<div class="row">	
							<?php foreach($related_posts as $image): ?>
								<div class="col-md-4 col-sm-12">
									<a href="<?=base_URL("user/view_article/{$image->post_id}")?>"><img class="img-fluid rel_image" src="<?=$image->img_path?>" alt="recent posts"/></a>
									<span class="post-title small"><?=$image->excerpts?></span>
									<span class="post-details small"><strong> <a href="#"><?=date('d M Y',strtotime($article->created_at))?></a> | <a href="#">Admin name</a> </strong></span>
								</div>
							<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
				<!-- END RELATED POSTS	 -->
				<br><br>
				<!-- BEGIN COMMENTS -->
				<div class="row">
					<div class="card w-100 ">
						<div class="card-header">
							<h5>Comments</h5>
						</div>
						<div class="card-body">
							<!-- BEGIN COMMENT SECTION VIEW-->
							<?php if(count($comments)): ?>
								<?php foreach($comments as $comment): ?>
								<div class="panel panel-default">
									<div class="panel-heading comment">
										<div class="card comment">
											<div class="card-body comment">
												<div class="card-title">
													<h5><?= $comment->author_name ?></h5>
													<small class="text-muted"><?=date('d M Y',strtotime($comment->created_at)) ?></small>
												</div>
												<p class="card-text"><?= $comment->comment_body ?></p>
												<a class="card-link" style data-toggle="collapse" class="text-default small" data-parent="#accordion" href="#collapse<?=$comment->comment_id?>">Reply</a>
												<?php if(($id)==($comment->author_id)):?>
													<a href='<?=base_URL("user/comment/{$comment->comment_id}/{$comment->post_id}")?>' class="card-link">Edit</a>
													<a href='<?=base_URL("user/delete_comment/{$comment->comment_id}/{$comment->post_id}")?>' class="card-link" onclick= "return( confirm('Are you sure you want to delete this record?');")>Delete</a>
												<?php endif;?>
											</div>
										</div>
									</div>
									<!-- BEGIN REPLY SECTION PANEL -->
									<div id="collapse<?=$comment->comment_id?>" class="panel-collapse collapse reply">
										<div class="card reply small">
										<?php if(count($replies)): ?>
											<?php foreach($replies as $reply): ?>
												<?php if(($reply->comment_id)==($comment->comment_id)):?>
													<div class="card-body">
														<div class="card-title">
															<h5><?= $reply->author_name ?></h5>
															<small class="text-muted"><?=date('d M Y',strtotime($reply->created_at)) ?></small>
														</div>
														<p class="card-text"><?= $reply->reply_body ?></p>
														<?php if(($reply->author_id)==($id)):?>
															<a href='<?=base_URL("user/edit_reply/{$reply->reply_id}/{$reply->post_id}")?>' class="card-link">Edit</a>
															<a href='<?=base_URL("user/delete_reply/{$reply->reply_id}/{$reply->post_id}")?>' class="card-link" onclick= return confirm("Are you sure you want to delete this record?")))>Delete</a>
														<?php endif;?>
													</div>
												<?php endif;?>
											<?php endforeach; ?>
											<?php else:?>
												<div class="card-body small">
														<strong> No replies yet..</strong>
												</div>
										<?php endif; ?>
										<!-- END REPLYSECTION PANEL -->
										<!-- BEGIN REPLY FORM -->
											<?php if(!$id): ?>
												<div class="card-body">
													<span>
														You must be <a href="<?=base_url('Login')?>">logged in</a> to reply to this a comment	
													</span>
												</div>
											<?php else:?>
												<div class="card-body">
													<div class="panel panel-default">
														<?php echo form_open("user/get_reply/{$comment->comment_id}");?>
														<?php echo form_hidden('author_id',$id);?>
														<?php echo form_hidden('author_name',$this->session->userdata('dname'));?>
														<?php echo form_hidden('post_id',$post_id);?>
														<?php echo form_hidden('created_at',date('Y-m-d H:i:s'));?>
														<div class="panel-heading">
															<div class="form-group">
																<table>
																	<thead>
																		<th>
																			<?php echo form_textarea(['name'=>'reply_body','class'=>'form-control', 'placeholder'=>'post a reply','rows'=>'2','required'=>'','value'=>set_value('')])?>
																		</th>
																		<th>
																			<?php echo form_submit(['name'=>'submit','value'=>'Reply','class'=>'btn btn-primary float-right'])?>
																		</th>
																	</thead>
																</table>
															</div>
														</div>
														<?php echo form_close() ?>
													</div>
												</div>
											<?php endif; ?>
											<!-- END REPLY FORM -->
										</div>
									</div>
								</div>
								<?php endforeach; ?>
							<?php else: ?>	
								<strong> No comments on this post</strong>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<!-- END COMMENTS -->
				<br><br>
				<!-- BEGIN LEAVE A COMMENT-->
				<div class="row">
					<div class="card w-100">
						<div class="card-header">
							<h5>Leave a Comment</h5>
						</div>
						<?php if(!$id): ?>
							<div class="card-body">
								<span>
									You must be <a href="<?=base_url('Login')?>">logged in</a> to post a comment	
								</span>
							</div>
						<?php else:?>
							<div class="card-body">
								<div class="panel panel-default">
									<?php echo form_open('user/get_comment');?>
									<?php echo form_hidden('author_id',$id);?>
									<?php echo form_hidden('author_name',$this->session->userdata('dname'));?>
									<?php echo form_hidden('post_id',$post_id);?>
									<?php echo form_hidden('created_at',date('Y-m-d H:i:s'));?>
									<div class="panel-heading">
										<div class="form-group">
													<table>
														<thead>
															<th>
																<?php echo form_textarea(['name'=>'comment_body','class'=>'form-control', 'placeholder'=>'post a comment','rows'=>'2','required'=>'','value'=>set_value('')])?>
															</th>
															<th>
														<?php echo form_submit(['name'=>'submit','value'=>'Comment','class'=>'btn btn-primary float-right'])?>
															</th>
														</thead>
													</table>
											<?php echo form_close() ?>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<!-- END LEAVE A REPLY -->
			</div>


			<!-- BEGIN SIDEBAR SECTION -->
			<div class="col-md-4 col-sm-12 sidebar-section">
				<!-- BEGIN SEARCH BOX -->
				<div class="row">
					<div class="a-search">
						<form class="article-search" method="post" action="<?=base_URL('search/searchpost')?>">
							<table>
								<tr>
									<td class="w-100">
										<input type="text" title="search" class="w-100" name="search" placeholder="Search articles"/>
									</td>
									<td>
										<button class="search" name="searcha" onclick="">Search</button>
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
				<!-- END SEARCH BOX -->
				<br>
				<!-- BEGIN RECENT POSTS -->
				<div class="row">
					<div class="card w-100">
						<div class="card-header">
							<h4>RECENT POSTS</h4>
						</div>
						<div class="card-body">
							<ul class="post-feed">
								<?php foreach($recent_posts as $image): ?>
								<li><a href="<?=base_URL("user/view_article/{$image->post_id}")?>"><?=$image->title?></a></li>
							<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
				<!-- END RECENT POSTS -->
				<br><br>
				<!-- BEGIN SQUIGGLES -->
				<!-- <div class="row">
					<div class="card">
						<h4 class="card-header">Squiggles</h4>
						<div class="card-body col-md-12 col-md-12 squiggles-content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo adipisci molestiae suscipit assumenda. Nulla quam cupiditate, amet aspernatur perferendis exercitationem doloribus accusamus maiores praesentium illum!
						</div>
					</div>
				</div> -->
				<!-- END SQUIGGLES -->
				<!-- <br><br> -->
				<!-- BEGIN POPULAR CATEGORIES -->
				<div class="row">
					<div class="card w-100">
						<div class="card-header">
							<h4>POPULAR CATEGORIES</h4>
						</div>
						<div class="card-body">
							<ul class="post-feed">
								<li><a href="<?=base_URL("category/view_page/car")?>">Careers</a></li>
								<li><a href="category/view_sub_page/cs">Department of Computer Science</a></li>
								<li><a href="aaq">Discussion Forum > Question</a></li>
								<li><a href="category/view_page/ddc">Director's Desk</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- END POPULAR CATEGORIES -->
				<br><br>
				<!-- BEGIN STUDENT'S PULSE -->
				<div class="row">
					<div class="card w-100">
						<h4 class="card-header">STUDENT PULSE</h4>
						<div class="card-body">
							<h6 >How was the performance of CSK this year?</h6>
							<div class="progress">
								<div class="progress-bar" style="width:10%"></div>
							</div>
							<br>
							<div class="progress">
								<div class="progress-bar bg-success" style="width:20%"></div>
							</div>
							<br>				
							<div class="progress">
								<div class="progress-bar bg-info" style="width:30%"></div>
							</div>
						</div>
						<div class="card-footer">
							<button type="button" class="btn btn-secondary">Scale</button>
							<button type="button" class="btn btn-secondary">View Answers</button>
							<br>
							<h5><div class="badge badge-light">The poll is closed</div></h5>
						</div>

					</div>
				</div>
				<!-- END STUDENT'S PULSE -->

			</div>
		</div>
	
	<!-- END MAIN CONTENT SECTION -->
	<br><br>
<?php include('page_footer.php') ?>