<?php
$content = ' <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Weekly Coding Challenge #1 -  Double slider Sign in/up Form - Desktop Only</title>
  <link rel=\'stylesheet\' href=\'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css\'><link rel="stylesheet" href="../lib/style.css">
   
</head>
<body>
<!-- partial:index.partial.html -->

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="../singup/post" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Username"  name="usr"/>
			<input type="password" placeholder="Password" name="pws"/>
			<div class="uk-margin">
      <div uk-form-custom="target: > * > span:last-child">
      <select name="mode">
          <option value="teacher">Teacher</option>
          <option value="student">Student</option>

      </select>
          <span class="uk-link ">
          <span uk-icon="icon: pencil; ratio:1.5"></span>
          <span></span>
          </span>
        </div>
      </div>
      <button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="../singin/post" method="post"> 
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="text" placeholder="Email" name="usr">
			<input type="password" placeholder="Password" name="pws">
			 
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>


<!-- partial -->
  <script  src="../lib/script.js"></script>

</body>
</html>';
$this->singup($content);
