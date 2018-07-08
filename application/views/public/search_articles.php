<?php include('page_header.php') ?>

<div class="container wrap">	
	<!-- MAIN CONTENT SECTION -->
		<div class="row">
			<div class="col-md-8 col-sm-12 article-body">
				<!--  Begin Search Results -->
				<div class="input-group mb-3">
				  	<div class="input-group-prepend">
				    	<span class="input-group-text" id="inputGroup-sizing-default">Search</span>
				  	</div>
				  	<?php if($query!=''):?>
					  	<input type="text" name="search_text" id="search_text" value="<?=$query?>" class="form-control" placeholder="Search Articles" aria-label="Default" aria-describedby="inputGroup-sizing-default">
				  	<?php else:?>
				  	<input type="text" name="search_text" id="search_text" class="form-control" placeholder="Search Articles" aria-label="Default" aria-describedby="inputGroup-sizing-default">
				  	<?php endif; ?>	
				</div>	
				<div class="row" id="result">
				</div>
				<script src="<?=base_URL('assets/js/search.js')?>"></script>  

				<!-- End Search Results -->
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
									<span class="post-details small"><strong> <a href="#"><?=date('d M Y',strtotime($image->created_at))?></a> | <a href="#">Admin name</a> </strong></span>
								</div>
							<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
				<!-- END RELATED POSTS	 -->
				<br><br>
			</div>	

			<!-- BEGIN SIDEBAR SECTION -->
			<div class="col-md-4 col-sm-12 sidebar-section">
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
				<div class="row">
					<div class="card">
						<h4 class="card-header">Squiggles</h4>
						<div class="card-body col-md-12 col-md-12 squiggles-content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo adipisci molestiae suscipit assumenda. Nulla quam cupiditate, amet aspernatur perferendis exercitationem doloribus accusamus maiores praesentium illum!
						</div>
					</div>
				</div>
				<!-- END SQUIGGLES -->
				<br><br>
				<!-- BEGIN POPULAR CATEGORIES -->
				<div class="row">
					<div class="card w-100">
						<div class="card-header">
							<h4>POPULAR CATEGORIES</h4>
						</div>
						<div class="card-body">
							<ul class="post-feed">
								<li><a href="#">Careers</a></li>
								<li><a href="#">Department of Computer Science</a></li>
								<li><a href="#">Discussion Forum > Question</a></li>
								<li><a href="#">Director's Desk</a></li>
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