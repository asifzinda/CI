<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>stylish Sign in and Sign up Form A Flat Responsive widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sign in and Sign up " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--online_fonts-->
	<link href="//fonts.googleapis.com/css?family=Sansita:400,400i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<!--//online_fonts-->
	<link href="<?php echo base_url() ;?>/assets/css/stylelogin.css" rel='stylesheet' type='text/css' media="all" /><!--stylesheet-->
</head>
<body>
<h1>Sign in and Sign up</h1>
<div class="form-w3ls">
	<div class="form-head-w3l">
		<h2>s</h2>
	</div>
    <ul class="tab-group cl-effect-4">
        <li class="tab active"><a href="#signin-agile">Sign In</a></li>
		<li class="tab"><a href="#signup-agile">Sign Up</a></li>        
    </ul>
    <div class="tab-content">
        <div id="signin-agile">   
			<form action="#" method="post">
				
				<p class="header">User Name</p>
				<input type="text" name="user" placeholder="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" required="required">
				
				<p class="header">Password</p>
				<input type="password" name="password" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="required">
				
				<input type="checkbox" id="brand" value="">
				<label for="brand"><span></span> Remember me?</label>
				
				<input type="submit" class="sign-in" value="Sign In">
			</form>
		</div>
		<div id="signup-agile">   
			<form action="#" method="post">
				
				<p class="header">User Name</p>
				<input type="text" name="user" placeholder="Your Full Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Full Name';}" required="required">
				
				<p class="header">Email Address</p>
				<input type="email" name="email" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="required">
				
				<p class="header">Password</p>
				<input type="password" name="password" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="required">
				
				<p class="header">Confirm Password</p>
				<input type="password" name="password" placeholder="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="required">
				
				<input type="submit" class="register" value="Sign up">
			</form>
		</div> 
    </div><!-- tab-content -->
</div> <!-- /form -->	  
<p class="copyright">&copy; 2018 stylish sign in and sign up Form. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
<!-- js files -->
<script src='<?php echo base_url() ;?>/assets/js/jquery.min.js'></script>
<script src="<?php echo base_url() ;?>/assets/js/index.js"></script>
<!-- /js files -->
</body>
</html>
