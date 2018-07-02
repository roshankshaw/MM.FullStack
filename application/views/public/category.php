<?php include('page_header.php') ?>
		<link rel="stylesheet" href="../css/style_category.css">

	<div class="container wrap">
	<!-- BEGIN MAIN CONTENT SECTION -->	
		<div class="row">
			<div class="col-md-8 col-sm-12 category-section-view">
				<!-- BEGIN CATEGORY SECTION -->
				<div class="row">
					<div class="card w-100 col-md-12">
						<div class="card-header">
							<h3><?= $catname ?></h3>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="card col-md-12">
						<?php if(count($category)): ?>
							<?php foreach($category as $article):?>
								<div class="card-body">
									<img src="<?=$article->img_path?>" alt="" class="img-fluid">
									<br>
									<h3><?=$article->title?></h3>
									<span class="post-tags"><button class="btn btn-success">tag1</button>
									<button class="btn btn-primary">tag2</button></span>
									<br>
									<span class="post-details small"><strong> <a href="#"><?=date('d M Y',strtotime($article->created_at))?></a> | <a href="#">Admin name</a></strong></span>
									<br><br>
									<article>
										<?=$article->excerpts?>
									</article>
									<div class="text-right small"><a href="<?=base_URL("index.php/user/view_article/{$article->post_id}")?>">Read more..</a></div>
								</div>
							<?php endforeach;?>
						<?php else: ?>
							<div class="card-body">	
								<div class="card-title">	
										<h5>No Articles found</h5>
								</div>
							</div>
						<?php endif;?>

					</div>
					<br>
				</div>
				<!-- END CATEGORY SECTION -->
				
			</div>

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
								<?php foreach($recent_posts as $image): ?>
								<li><a href=""><?=$image->title?></a></li>
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
