<?php
if(isset($_SESSION)) {
	session_destroy();
	session_abort();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Register</title>
    <link rel="stylesheet" href="../css/login.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> 
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="../php/signup.php" method="post" id="form">
			<h1>Create Account</h1>
	
			<div class="form_control" id="signup_username">
				<input type="text" placeholder="Username" id="username" size="20" name="username" />
				<i class="fa fa-check-circle"></i>
				<i class="fa fa-exclamation-circle"></i>
				<small>Error</small>
			</div>
			<div class="form_control" id="signup_email">
				<input type="text" placeholder="Email" size="20" id="email" name="email" />
				<i class="fa fa-check-circle"></i>
				<i class="fa fa-exclamation-circle"></i>
				<small >Error</small>
			</div>
			<div class="form_control" id="signup_password">
				<input type="password" placeholder="Password" id="password" size="20" name="password" />
				<i class="fa fa-check-circle"></i>
				<i class="fa fa-exclamation-circle"></i>
				<div><small>Error</small></div>
				
			</div>
			<button type="submit" id="submit" name="submit">Sign Up</button>
		</form>
	</div>

	
	<div class="form-container sign-in-container">
		<form action="../php/signin.php" method="post" id="si-form">
			<h1>Sign in</h1>
			<div class="form_control" id="sin_username">
				<input type="text" placeholder="Username" id="si-username" size="20" name="username" />
				<i class="fa fa-check-circle" id="signInusername"></i>
				<i class="fa fa-exclamation-circle"></i>
				<small>Error</small>
			</div>
			<div class="form_control" id="sin_password">
				<input type="password" placeholder="Password" id="si-password" size="20" name="password" />
				<i class="fa fa-check-circle" id="signInPassword"></i>
				<i class="fa fa-exclamation-circle"></i>
				<small>Error</small>
			</div>
			<a href="#">Forgot your password?</a>
			<button type="submit" id="si-submit" value="submit">Sign In</button>
		</form>
	</div>



	<div class="overlay-container">
		<div class="overlay">
			
			<div class="overlay-panel overlay-left">
				<img src="../images/map.svg" class="dot-img-left" data-value="3" alt="an image of a map">
				<button class="ghost" id="signIn">Sign In</button>
			</div>

			<img src="../images/map.svg" class="dot-img" data-value="3" alt="an image of a map">
			
			<div class="overlay-panel overlay-right">
				
				<button class="ghost" id="signUp">Sign Up</button>
				
			</div>
			
		</div>
	</div>
</div>


<script src="../javascript/signup.js"></script>
<script src="../javascript/signin.js"></script>
<script src="../javascript/effects.js"></script>	

</body>
</html>