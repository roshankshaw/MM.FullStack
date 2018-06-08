<?php include('page_header.php') ?>
<link rel="stylesheet" href="../css/style_aaq.css">


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
						<table>
							<tr>
								<td style="width:100%">
									<input type="text" class="form-control" placeholder="See related question">
								</td>
								<td>
									<button class= "btn btn-secondary">Search</button>
								</td>
							</tr>
						</table><br>
						<label for="usr"><strong>Ask a Question</strong></label>
						<input type="text" class="form-control form-control" placeholder="Type your Question"/><br>
						 <label for="usr"><strong>Authorities you want to ask to</strong></label>
						 <input type="text" class="form-control form-control" placeholder="e.g dean,etc"/><br>
						 <button class= "btn btn-secondary">Submit</button>
						 <button class= "btn btn-secondary">View Previous Answers</button>
					</div>
				</div>
			</div>
			<!-- END ASK A QUESTION SECTION -->
		
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
