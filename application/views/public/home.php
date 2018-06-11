<?php include('page_header.php') ?>
<link rel="stylesheet" href="<?=base_URL('assets/css/style_homecontent.css')?>">

<!-- Main Content Section -->
	<div class="container wrap" >
		<div class="row">   
			<div class=" slideshow col-md-6 col-sm-12"> 
				<div id="demoq" class="carousel slide" data-ride="carousel">

					<!-- Indicators -->
					<ul class="carousel-indicators">
					  <li data-target="#demoq" data-slide-to="0" class="active"></li>
					  <li data-target="#demoq" data-slide-to="1"></li>
					  <li data-target="#demoq" data-slide-to="2"></li>
					</ul>

					<!-- The slideshow -->
					<div class="carousel-inner">
					  <div class="carousel-item active">
						<img class="img-fluid" src="<?=$top_articles[0]->img_path?>" alt="Los Angeles">
					  </div>
					  <div class="carousel-item">
						<img class="img-fluid" src="<?=$top_articles[1]->img_path?>" alt="Chicago">
					  </div>
					  <div class="carousel-item">
						<img class="img-fluid" src="<?=$top_articles[2]->img_path?>" alt="New York">
					  </div>
					</div>

					<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#demoq" data-slide="prev">
					  <span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#demoq" data-slide="next">
					  <span class="carousel-control-next-icon"></span>
					</a>

				</div>
			</div>
			<div class=" featured-stories col-md-6 col-sm-12"> 
				<div class="row">
				<?php foreach($top_articles as $image): ?>
					<div class="col-md-6 col-sm-12" >
							<div class="post-new">
								<img src="<?= $image->img_path ?>" alt="newpost" class="img-fluid newtop img-rounded">        
								<article>  <?= $image->title ?></article>  
							</div>
					</div>
				<?php endforeach;?>
				
				</div>
			</div>
		</div>
		<hr>
		<!--  Begin NEW POSTS -->	
		<div class="row">
			<?php foreach($new_posts as $image): ?>
			<div class="col-md-3 col-sm-12" >
					<div class="post-new card">
						<img src="<?= $image->img_path ?>" alt="newpost" class="img-fluid newtop">        
						<article>  <?= $image->title ?></article>  
					</div>
			</div>
			<?php endforeach;?>
		</div>
		<!-- End New Posts -->
		<br>
		<hr>
		<div class="row">
			<div class=" main-content col-md-8 col-sm-12">  
			<!-- DEPARTMENTS AND CAREERS BEGIN -->
				<div class="row">   
					<div class="section-post col-md-6 col-sm-12">   
						<h4>Departments</h4>
						<hr>
						<ul class="list-group">
						<?php foreach($dept_posts as $image): ?>
							<li class="list-group-item"><a href="#">
								<div class="row">
									<div class="articles col-md-6 col-sm-12">
										<img src="<?= $image->img_path ?>" alt="" class="img-fluid feed-img">
									</div>
									<div class="article-content col-md-6 col-sm-12 w-100 small">
										<article>	<?= $image->excerpts ?></article>
									</div>
								</div>
							</a></li>
						<?php endforeach;?>
					</div>
					<div class="section-post col-md-6 col-sm-12">
						<h4>Careers</h4>
						<hr>
						<ul class="list-group">
							<?php foreach($career_posts as $image): ?>
							<li class="list-group-item"><a href="#">
								<div class="row">
									<div class="articles col-md-6 col-sm-12">
										<img src="<?= $image->img_path ?>" alt="" class="img-fluid feed-img">
									</div>
									<div class="article-content col-md-6 col-sm-12 w-100 small">
										<article>	<?= $image->excerpts ?></article>
									</div>
								</div>
							</a></li>
							<?php endforeach;?>
						</ul>
					</div>
				</div>
				<hr>
			<!-- End DEPARTMENT AND CAREER Section -->
			 <!-- Begin Campus and views -->
			 <div class="row">   
					<div class="section-post col-md-6 col-sm-12">   
						<h4>Campus</h4>
						<hr>
						<ul class="list-group">
							<?php foreach($campus_posts as $image): ?>
							<li class="list-group-item"><a href="#">
								<div class="row">
									<div class="articles col-md-6 col-sm-12">
										<img src="<?= $image->img_path ?>" alt="" class="img-fluid feed-img ">
									</div>
									<div class="article-content col-md-6 col-sm-12 w-100 small">
										<article>	<?= $image->excerpts ?></article>
									</div>
								</div>
							</a></li>
							<?php endforeach;?>
						</ul>
					</div>
					<div class="section-post col-md-6 col-sm-12">
						<h4>Views</h4>
						<hr>
						<ul class="list-group">
							<?php foreach($views_posts as $image): ?>
							<li class="list-group-item"><a href="#">
								<div class="row">
									<div class="articles col-md-6 col-sm-12">
										<img src="<?= $image->img_path ?>" alt="" class="img-fluid feed-img">
									</div>
									<div class="article-content col-md-6 col-sm-12 w-100 small">
										<article>	<?= $image->excerpts ?></article>
									</div>
								</div>
							</a></li>
							<?php endforeach;?>
						</ul>
					</div>
				</div>
				<!-- End campus and views -->
				<hr>
			</div>  

			<!-- Begin Sidebar -->
			<div class="sidebar-section col-md-4 col-sm-12">    
				<!-- Begin squiggles -->
				<div class="row">
					<div class="col-md-12 col-sm-12">	
						<div class="card Sidebar">
							<h4 class="card-header">Squiggles</h4>
							<div class="card-body col-md-12 squiggles-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo adipisci molestiae suscipit assumenda. Nulla quam cupiditate, amet aspernatur perferendis exercitationem doloribus accusamus maiores praesentium illum!
							</div>
						</div>
					</div>
				</div>
				<!-- End Squiggles -->
				<br><br>
				<!-- BEGIN PIC OF THE WEEK -->
				<div class="row">
					<div class="col-md-12 col-sm-12">	
						<div class="card Sidebar w-100">
							<div class="card-header"><h4>Pic of the Week</h4></div>
					  		<img class="card-img-top" src="images/article2.jpg" alt="pic of the week"/>
					  		<div class="card-body">
					    		<h4 class="card-title">John Doe</h4>
					    		<p class="card-text">Some example text.</p>
					    		<a href="#" class="btn btn-primary">See Profile</a>
					  		</div>
						</div>
					</div>
				</div>
				<!-- END PIC OF THE WEEK -->
				<br><br>
				<!-- BEGIN FOLLOW US -->
				<div class="row">
					<div class="col-md-12 col-sm-12">					
						<div class="card Sidebar w-100">
							<div class="card-header"><h4>Follow us on facebook</h4></div>
							<div class="card-body">
					  				<img class="card-img-top" src="images/" alt="pic of the week">
							</div>
						</div>
					</div>
				</div>
				<!-- END FOLLOW US -->
				<br><br>
				<!-- BEGINSTUDENTPULSE -->
				<div class="row">
					<div class="col-md-12 col-sm-12">	
						<div class="card Sidebar w-100">
							<h4 class="card-header">STUDENT PULSE</h4>
							<div class="card-body">
								<h6 >How was the performance of CSK this year?</h6>
								<div class="progress">
								  <div class="progress-bar" style="width:40%"></div>
								</div>
								<br>
								<div class="progress">
								  <div class="progress-bar bg-success" style="width:52%"></div>
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
				</div>
				<!-- END STUDENT PULSE -->
				<br><br>
				<!-- BEGIN LATEST POSTS SIDE BAR -->
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="card Sidebar w-100">
							<div class="card-header">
								<div class="btn-grou btn-group-lg">
								  	<button type="button" class="btn btn-primary" onclick="clickLpost()" id="lposts">Latest posts</button>
								  	<button type="button" class="btn btn-outline-primary" onclick="clickComment()" id="comment">Comments</button>
								</div>
							</div>
							<div class="card-body">
								<div id="latestposts">
									<ul class="list-group">
										<?php foreach($latest_posts as $image): ?>
											<li class="list-group-item"><a href="#">
												<div class="row">
													<div class="articles col-md-6 col-sm-12">
														<img src="<?= $image->img_path ?>" alt="" class="img-fluid latestbar-img">
													</div>
													<div class="article-content col-md-6 col-sm-12 w-100 small">
														<article>	<?= $image->excerpts ?></article>
													</div>
												</div>
											</a></li>
										<?php endforeach;?>
									</ul>
								</div>
								<div id="comments">
									<ul class="list-group">
										<?php foreach($comment_posts as $image): ?>
											<li class="list-group-item"><a href="#">
												<div class="row">
													<div class="articles col-md-6 col-sm-6">
														<img src="<?= $image->img_path ?>" alt="" class="img-fluid latestbar-img">
													</div>
													<div class="article-content col-md-6 col-sm-6 w-100 small">
														<article>	<?= $image->excerpts ?></article>
													</div>
												</div>
											</a></li>
										<?php endforeach;?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END LATEST POST SIDE BAR -->
			</div>
			<!-- ENd side bar section -->
		</div>
		<!-- BEGIN EDITOR'S PICK -->
		<div class="row screen-md">
			<div class="col-md-12 col-sm-12">	
				<h4>EDITOR'S PICK</h4>
					<!-- SLIDESHOW FOR LARGE SCREENS -->
				<div id="demop" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ul class="carousel-indicators">
					  <li data-target="#demop" data-slide-to="0" class="active"></li>
					  <li data-target="#demop" data-slide-to="1"></li>
					</ul>

					<!-- The slideshow -->
					<div class="carousel-inner">
					  	<div class="carousel-item active">
							<div class="row">
								<?php foreach($editor_pick1 as $image): ?>
		           					<div class="col-md-3 col-sm-6"><img class="img-fluid editor-img" src="<?= $image->img_path ?>" alt="1 slide"></div>
								<?php endforeach;?>
	       					</div>
					  	</div>
					  	<div class="carousel-item">
							<div class="row">
	   							<?php foreach($editor_pick2 as $image): ?>
		           					<div class="col-md-3 col-sm-6"><img class="img-fluid editor-img" src="<?= $image->img_path ?>" alt="1 slide"></div>
								<?php endforeach;?>
	       					</div>
					  	</div>
					</div>


					<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#demop" data-slide="prev">
					  <span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#demop" data-slide="next">
					  <span class="carousel-control-next-icon"></span>
					</a>				
				</div>
			</div>
		</div>

				<!--***************** SLIDESHOW FOR small SCREENS******************* -->
		<div class="row screen-sm">
			<div class="col-sm-12">	
				<h4>EDITOR'S PICK</h4>
				<div id="demoR" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ul class="carousel-indicators">
					  <li data-target="#demoR" data-slide-to="0" class="active"></li>
					  <li data-target="#demoR" data-slide-to="1"></li>
					  <li data-target="#demoR" data-slide-to="2"></li>
					  <li data-target="#demoR" data-slide-to="3"></li>
					</ul>

					<!-- The slideshow -->
					<div class="carousel-inner">
					  	<div class="carousel-item active">
	       					<div class="col-md-12 col-sm-12 col-sm-12"><img class="img-fluid" src="<?= $editor_pick1[0]->img_path ?>" alt="1 slide"></div>
					  	</div>
					  	<div class="carousel-item">
	       					<div class="col-md-12 col-sm-12 col-sm-12"><img class="img-fluid" src="<?= $editor_pick1[1]->img_path ?>" alt="2 slide"></div>
	       					<div class="col-md-12 col-sm-12 col-sm-12"><img class="img-fluid" src="<?= $editor_pick1[2]->img_path ?>" alt="3 slide"></div>
	       					<div class="col-md-12 col-sm-12 col-sm-12"><img class="img-fluid" src="<?= $editor_pick1[3]->img_path ?>" alt="4 slide"></div>
					  	</div>
					</div>


					<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#demoR" data-slide="prev">
					  <span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#demoR" data-slide="next">
					  <span class="carousel-control-next-icon"></span>
					</a>				
				</div>
			</div>			
		</div>	
		<hr>	
		<!-- END EDITOR'S PICK -->
	<script src="<?=base_URL('assets/js/homecontent.js')?>"></script>  
		


<?php include('page_footer.php') ?>
