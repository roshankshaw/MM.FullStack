<?php include('page_header.php') ?>
		<link rel="stylesheet" href="../css/style_poll.css">


	<div class="container wrap">	
	<!-- MAIN CONTENT SECTION -->
		<div class="row">	
			<!-- BEGIN POLL VIEW SECTION -->
			<div class="poll-section-view col-md-8 col-sm-12">
				<div class="card">	
					<div class="card-columns">
					  	<div class="card bg-light">
							<div class="card-header">
								<h5>How did the adminstration managed the curriculum changes this year? </h5>
							</div>
							<div class="card-body">
								<canvas id="pieChart"></canvas>
							</div>
					  	</div>
					  	<div class="card bg-light">
							<div class="card-header">
								<h5>How did the adminstration managed the curriculum changes this year? </h5>
							</div>
							<div class="card-body">
								<canvas id="pieChart"></canvas>  		
							</div>
					  	</div>
					  	<div class="card bg-light">
							<div class="card-header">
								<h5>How did the adminstration managed the curriculum changes this year? </h5>
							</div>
							<div class="card-body">
								<canvas id="pieChart"></canvas>
						  	</div>
					  	</div>
					  	<div class="card bg-light">
							<div class="card-header">
								<h5>How did the adminstration managed the curriculum changes this year? </h5>
							</div>
							<div class="card-body" 
							><canvas id="pieChart"></canvas>
						  		
							</div>
					  	</div> 
					  	<div class="card bg-light">
							<div class="card-header">
								<h5>How did the adminstration managed the curriculum changes this year? </h5>
							</div>
							<div class="card-body">
								<canvas id="pieChart"></canvas>
						  	</div>
					  	</div>
					  	<div class="card bg-light">
							<div class="card-header">
								<h5>How did the adminstration managed the curriculum changes this year? </h5>
							</div>
							<div class="card-body">
								<canvas id="pieChart"></canvas>
							</div>
					  	</div>
					</div>
				</div>
			</div>
			<!-- END POLL VIEW SECTION -->
		
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
								<li><a href="">Art Exhibition Going To Start This Week</a></li>
								<li><a href="">Grand Live Concert In Germany 2017</a></li>
								<li><a href="">Fighter plane crash during world war</a></li>
								<li><a href="">Tips to make cripsy food a helathy diet</a></li>
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
		
	<!-- END CONTENT SECTION -->
<br>

<?php include('page_footer.php') ?>
