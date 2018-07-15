<?php include('page_header.php') ?>


	<div class="container wrap">	
	<!-- MAIN CONTENT SECTION -->
		<div class="row">	
			<!-- BEGIN ASK A QUESTION SECTION -->
			<div class="aaq-section-view col-md-8 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>ASK A QUESTION	</h3>
					</div>
					<div class="card-body">
						<label for="usr"><strong>Search Question</strong></label>
						<div class="input-group mb-3">
						  	<div class="input-group-prepend">
						    	<span class="input-group-text" id="inputGroup-sizing-default">Search</span>
						  	</div>
						  	<input type="text" name="search_text" id="search_text" class="form-control" placeholder="Search Related Question" aria-label="Default" aria-describedby="inputGroup-sizing-default">
						</div>	
						<ul class="list-group" id="result">
						</ul>
						<script src="<?=base_URL('assets/js/aaq.js')?>"></script>
						<br>
						<br>
						<?php if($id):?>
								<span>
									Click <a href="<?=base_url('aaq/add')?>">here</a> to add a question	
								</span>
						<?php else:?>
								<span>
									You must be <a href="<?=base_url('Login')?>">logged in</a> to ask a question	
								</span>
						<?php endif;?>
					</div>
				</div>
			</div>
			<!-- END ASK A QUESTION SECTION -->
		
		<!-- BEGIN SIDEBAR SECTION -->
			<div class="col-md-4 col-sm-12 sidebar-section">
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
				<br><br>
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
		
	<!-- END CONTENT SECTION -->

<?php include('page_footer.php') ?>
