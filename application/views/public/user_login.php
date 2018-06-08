<!DOCTYPE html>
<html>
<head>
	<title>login form </title>
	<link rel="stylesheet" href="<?=base_URL('assets/css/style_login.css')?>">
</head>
<body>
	<div class="panel">
		<ul class="panel__menu" id="menu">
			<hr>
			<li id="signIn"> 
					<a href="#">Login</a> 
			</li>
			<li id="signUp"> 
					<a href="#">Register</a> 
			</li> 
		</ul> 
	</div>
	<div class="panel__wrap">
		<div class="panel__box active" id="signInBox">  
			<label>Username</label>
			<input type="username"/>
			<label>Password</label>
			<input type="password"/>
			<input type="submit"/>
		</div>
		<div class="panel__box" id="signUpBox">  
			<label>Email</label>
			<input type="email"/>
			<label>Username</label>
			<input type="username"/>
			<label>Password</label>
			<input type="password"/>
			<label>Confirm Password</label>
			<input type="password"/>
			<input type="submit"/>
		</div>
	</div>
	<script src="<?=base_URL('assets/js/mylogin.js')?>">  </script>
</body>
</html>    
