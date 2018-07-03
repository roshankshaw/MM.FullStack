<!DOCTYPE html>
<html lang="en">
<head>
	<title>Monday Morning v2018.0</title>
	<!--fontawesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="<?=base_URL('assets/css/bootstrap.min.css')?>">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- user source files -->
		<link rel="stylesheet" href="<?=base_URL('assets/css/style_homeframe.css')?>">
		<link rel="stylesheet" href="<?=base_URL('assets/css/style_article.css')?>">
		<link rel="stylesheet" href="<?=base_URL('assets/css/style_aaq.css')?>">
		<link rel="stylesheet" href="<?=base_URL('assets/css/style_forum.css')?>">
		<link rel="stylesheet" href="<?=base_URL('assets/css/style_homecontent.css')?>">
		<link rel="stylesheet" href="<?=base_URL('assets/css/style_poll.css')?>">
		
		
	<!-- meta tags -->
		<meta charset="UTF-8">
		<meta name="description" content="The student media body of Nit Rourkela">
		<meta name="keywords" content="mm,monday morning,mm nitr">
		<meta name="author" content="Jimmy">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<div class="container-fluid">
		
		<!-- Top menu nav        -->
		<nav class="navba-top">
			<ul class="navba-nav-top list-group">
				<li class="top-nav-item"><span id="demo"></span></li>
				<li class="top-nav-item"><a href="<?=base_URL('user')?>" >Home</a></li>
				<li class="top-nav-item"><a href="#" >Contact us</a></li>
				<li class="top-nav-item"><a href="#" >Issue</a></li>
				<?php if($id):?>
					<li class="top-nav-item"><a href="<?=base_URL('login/logout')?>" >Logout</a></li>
					<?php if($role=="admin"):?>
						<li class="top-nav-item"><a href="<?=base_URL('admin/dashboard')?>" >Admin</a></li>
					<?php endif;?>
				<?php else: ?>
					<li class="top-nav-item"><a href="<?=base_URL('login')?>" >Login</a></li>
					<li class="top-nav-item"><a href="<?=base_URL('Register')?>" >Register</a></li>
				<?php endif; ?>

			</ul>

			<ul class="social-links">
				<li class="top-nav-item"><a href="#" class="fa fa-facebook"></a></li>
				<li class="top-nav-item"><a href="#" class="fa fa-twitter"></a></li>
				<li class="top-nav-item"><a href="#" class="fa fa-google-plus"></a></li>
				<li class="top-nav-item"><a href="#" class="fa fa-youtube-play"></a></li>
			</ul><br>

		</nav>


		<!-- LOGO -->

		<div class="logo">
			<img class="img-fluid img-responsive" src="<?=base_URL('assets/images/logo4.png')?>" alt="MM logo"/>
		</div>


		<!-- Menu Bar -->

		<div class="navbar">
			<ul class="navbar-nav" >
				<li class="nav-item for-sm-xs">
					<div class="optionbtn" onclick="menuexpand(this)">
						<div class="bar1"></div>
						<div class="bar2"></div>
						<div class="bar3"></div>
					</div>
					<Span class="smenu">MENU</Span>

				</li>
				<li class="nav-item" id="active">
					<a class="nav-link" id="active" href="<?=base_URL('user')?>">Home</a>
					<div class="dropdownmenu"/>
				</li>

				<li class="nav-item dropdown"><a class="nav-link dropdown" href="#" id="navbar-drop">Departments</a>
					<div class="dropdownmenu">
						<ul>    
							<li><a class="dropdownitem" href="<?=base_URL('category/view_sub_page/bm')?>">Biotechnology and Biomedical Engineering </a></li>   
							<li><a class="dropdownitem" href="<?=base_URL('category/view_sub_page/cr')?>">Ceramic Engineering</a>    </li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_sub_page/ch')?>">Chemical Engineering</a>   </li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_sub_page/ce')?>">Civil Engineering</a>  </li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_sub_page/cs')?>">Computer Science and Engineering</a>  </li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_sub_page/cy')?>">Department of Chemistry</a>   </li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_sub_page/hs')?>">Department of Humanities</a>   </li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_sub_page/ls')?>">Department of Life Science</a> </li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_sub_page/ma')?>">Department of Mathematics</a>  </li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_sub_page/ph')?>">Department of Physics</a>  </li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_sub_page/ee')?>">Electrical Engineering </a></li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_sub_page/ece')?>">Electronics and Communication Engineering </a></li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_sub_page/fp')?>">Food Process Engineering </a></li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_sub_page/id')?>">Industrial Design </a></li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_sub_page/me')?>">Mechanical Engineering </a></li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_sub_page/mm')?>">Metallurgical and Materials Engineering </a></li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_sub_page/mn')?>">Mining Engineering </a></li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_sub_page/ar')?>">Planning and Architecture </a></li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_sub_page/mg')?>">School of Management </a></li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_sub_page/ea')?>">Department of Earth and Atmospheric Sciences </a></li>
						</ul>   
					</div>
				</li>

				<li class="nav-item dropdown"><a class="nav-link dropdown" id="navbar-drop" href="<?=base_URL('category/view_page/cam')?>">Campus</a>
					<div class="dropdownmenu">
						<ul >
							<li><a class="dropdownitem" href="<?=base_URL('category/view_page/cam')?>">SAC Speaks</a></li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_page/cam')?>">Campus Buzz</a></li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_page/cam')?>">Clubs</a></li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_page/cam')?>">Halls</a></li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_page/cam')?>">Sports</a></li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_page/cam')?>">Fests</a></li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_page/cam')?>">Wits-Dom</a></li>
						</ul>						
					</div>
				</li>
				<li class="nav-item dropdown"><a class="nav-link dropdown" id="navbar-drop" href="<?=base_URL('category/view_page/vws')?>">Views</a>
					<div class="dropdownmenu">
						<ul>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_page/vws')?>">Interview</a></li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_page/vws')?>">The CGPA</a></li>
							<li><a class="dropdownitem" href="<?=base_URL('polls')?>">Student Pulse</a></li>
							<li><a class="dropdownitem" href="<?=base_URL('polls')?>">Poll Analysis</a></li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_page/vws')?>">Featured</a></li>
							<li><a class="dropdownitem" href="<?=base_URL('category/view_page/vws')?>">Citizen Journalist</a>
							</li>
							<li><a class="dropdownitem" href="<?=base_URL('forum')?>">Forum</a></li>
							<li><a class="dropdownitem" href="<?=base_URL('aaq')?>">Ask a Question</a></li>
						</ul>
					</div>
				</li>
				<li class="nav-item dropdown"><a class="nav-link dropdown" id="navbar-drop" href="<?=base_URL('category/view_page/car')?>">Career</a>
					<div class="dropdownmenu">
						<ul >
							<li><a class="dropdownitem" href="#">Placements</a></li>
							<li><a class="dropdownitem" href="#">Recruitment Feedback</a></li>
							<li><a class="dropdownitem" href="#">Placement Database</a></li>
							<li><a class="dropdownitem" href="#">Internships</a></li>
							<li><a class="dropdownitem" href="#">Internship Database</a></li>
							<li><a class="dropdownitem" href="#">Share Your Intern</a></li>
						</ul>
						
					</div>
				</li>
				<li class="nav-item dropdown"><a class="nav-link dropdown" id="navbar-drop" href="<?=base_URL('category/view_page/alm')?>">Alumni</a>
					<div class="dropdownmenu">
						<ul >
							<li><a class="dropdownitem" href="#">Alumnus Speaks</a></li>
							<li><a class="dropdownitem" href="#">Happenings</a></li>
							<li><a class="dropdownitem" href="#" target="_blank">Find your Alumni</a></li>
							<li><a class="dropdownitem" href="#">NITRAA Executive Council</a></li>
						</ul>
					</div>
				</li>
				<li class="nav-item dropdown"><a class="nav-link dropdown" id="navbar-drop" href="<?=base_URL('category/view_page/ddc')?>">DD&CWC</a>
					<div class="dropdownmenu">
						<ul >
							<li><a class="dropdownitem" href="#">Director's Desk</a></li>
							<li><a class="dropdownitem" href="#">Chief Warden's Column</a></li>
						</ul>
					</div>
				</li>
				<li class="nav-item dropdown"><a class="nav-link dropdown" id="navbar-drop" href="#">Gallery</a>
					<div class="dropdownmenu">
						<ul >
							
							<li><a class="dropdownitem" href="#">Fests</a></li>
							<li><a class="dropdownitem" href="#">Institute Events</a></li>
							<li><a class="dropdownitem" href="#">Illustration</a></li>
							<li><a class="dropdownitem" href="#">Doodle</a></li>
							<li><a class="dropdownitem" href="#">Poster Series</a></li>
							<li><a class="dropdownitem" href="#">Others</a></li>
							<li><a class="dropdownitem" href="#" target="_blank">Videos</a></li>
							
						</ul>
					</div>
				</li>
				<li class="nav-item dropdown"><a class="nav-link dropdown" id="navbar-drop" href="#">Info</a>
					<div class="dropdownmenu">
						<ul >
							<li><a class="dropdownitem" href="#" target="_blank">Communication Directory</a></li>
							<li><a class="dropdownitem" href="#">Health and Emergency</a></li>
							<li><a class="dropdownitem" href="#">Student Activity Center</a></li>
							<li><a class="dropdownitem" href="#">Halls of Residence</a></li>
							<li><a class="dropdownitem" href="#">Blood Group Database</a></li>
							<li><a class="dropdownitem" href="#">Magazines</a></li>
							<li><a class="dropdownitem" href="#">Know the Team</a></li>
							<li><a class="dropdownitem" href="#">Project Adamantium</a></li>
							<li><a class="dropdownitem" href="#">Project Vibranium</a></li>
						</ul>
					</div>
				</li>
				<li class="nav-item dropdown"><a class="nav-link dropdown" id="navbar-drop" href="#">Live</a>
				</li>
				<li class="nav-item dropdown">
					<div class="searchbox">
						<a class="nav-link dropdown fa fa-search" id="navbar-drop" href="#"></a>
						<form class="menusearch">
							<table>
								<tr>
									<td>
										<input class="search" type="text" title="search" name="search" placeholder="Search articles">
									</td>
									<td>
										<button class="search" name="searcha" onclick=""><a class="fa fa-search link"></a></button>
									</td>
								</tr>
							</table>
						</form>
					</div>  
				</li>
			</ul>
		</div>
	</div>
	<br><br>