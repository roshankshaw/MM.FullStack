<?php include('page_header.php') ?>
		<link rel="stylesheet" href="../css/style_forum.css">


	<div class="container wrap">	
	<!-- MAIN CONTENT SECTION -->
		<div class="row">	
			<!-- BEGIN DISCUSSION FORUM SECTION -->
			<div class="forum-section-view col-md-8 col-sm-12">
				<div class="row">
					<div class="card">
						<div class="card-header w-100">
							<h3>Discussion Forum</h3>
						</div>
						<div class="card-body">
							<h6><a href=""><strong>Login</strong></a> to start a discussion</h6>
							<h6><a href=""><strong>Post</strong></a> a question anonymously</h6><br>
							<table class="table table-responsive-md table-hover table-striped table-hover">
								<thead class="thead-dark">	
									<tr>
										<th>Topic</th>
										<th>Replies</th>
										<th>Views</th>
										<th>Last Post</th>
									</tr>
								</thead>
								<tr>
									<td>Branch change and Difficulties</td>
									<td>1</td>
									<td>13</td>
									<td>By Ayush <br>18 May</td>
								</tr>
								<tr>
									<td>Lorem ipsum dolor sit.</td>
									<td>45</td>
									<td>300</td>
									<td>Lorem ipsum dolor sit. <br> 12 Apr</td>
								</tr>
								<tr>
									<td>Lorem ipsum dolor sit.</td>
									<td>45</td>
									<td>300</td>
									<td>Lorem ipsum dolor sit. <br> 12 Apr</td>
								</tr>
								<tr>
									<td>Lorem ipsum dolor sit.</td>
									<td>45</td>
									<td>300</td>
									<td>Lorem ipsum dolor sit. <br> 12 Apr</td>
								</tr>
								<tr>
									<td>Lorem ipsum dolor sit.</td>
									<td>45</td>
									<td>300</td>
									<td>Lorem ipsum dolor sit. <br> 12 Apr</td>
								</tr>
							</table>
						</div>
						<div class="card-footer ">
							<ul class="pagination">
							  	<li class="page-item active"><a class="page-link" href="#">1</a></li>
							  	<li class="page-item"><a class="page-link" href="#">2</a></li>
							  	<li class="page-item"><a class="page-link" href="#">3</a></li>
							  	<li class="page-item"><a class="page-link" href="#">Next</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- END DISCUSSION FORUM SECTION -->
		
		<!-- BEGIN SIDEBAR SECTION -->
			<div class="col-md-4 col-sm-12 sidebar-section">
				<!-- BEGIN SEARCH BOX -->
				<div class="row">
					<div class="a-search">
						<form class="article-search">
							<table>
								<tr>
									<td class="w-100">
										<input type="text" title="search" class="w-100" name="search" placeholder="Search articles"/>
									</td>
									<td>
										<button class="search" name="searcha" onclick=""><a>Search</a></button>
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
		
	<!-- END CONTENT SECTION -->

<?php include('page_footer.php') ?>
