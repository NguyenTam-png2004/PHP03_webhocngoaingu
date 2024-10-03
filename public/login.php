<!doctype html>
<html>
<head>
<title> sign up and sign in</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/style_login.css">

</head>
<body>

<div class="container" id="container">
	<div class="row">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></i></a>
				<a href="#" class="social"><i class="fa fa-google" aria-hidden="true"></i></i></a>
				<a href="#" class="social"><i class="fa fa-linkedin" aria-hidden="true"></i></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Username" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<label class="checkbox-wrap">
				<input type="checkbox" checked> 
				<a>I agree to the Term of User</a>
				<span class="checkmark"></span>
			</label>
			<button>Sign Up</button>
			<p id="desktop_para">To keep connected with us,please login</p>
			<button class="ghost_desktop" id="signIn_desktop">Sign In</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></i></a>
				<a href="#" class="social"><i class="fa fa-google" aria-hidden="true"></i></a>
				<a href="#" class="social"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email or username" />
			<input type="password" placeholder="Password" />
			<div class="checkbox-wrap-forgot">
				<label class="checkbox-wrap"> 
					<input type="checkbox" checked> <a>Remember me</a>
				</label>
				<a href="forgotpw.html">Forgot your password?</a>
			</div>
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
				<p>Don't have an account? Sign up here !!</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
</div>
</body>
<script>
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');
	const signUpButton_mobile = document.getElementById('signUp_desktop');
	const signInButton_mobile = document.getElementById('signIn_desktop');
	
	
	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
	
	signUpButton_mobile.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	
	signInButton_mobile.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
	
	
	</script>
</html>