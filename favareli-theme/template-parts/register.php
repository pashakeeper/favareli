<?php 
/*
 Template name: Register
 Template post type: post, page
 */
 ?>
 <?php get_header(); 

 global $wpdb;

 if ($_POST) {

 	$username = $wpdb->escape($_POST['txtUsername']);
 	$password = $wpdb->escape($_POST['txtPassword']);

 	$error = array();
 	if (strpos($username, ' ') !== FALSE) {
 		$error['username_space'] = "Username has Space";
 	}

 	if (empty($username)) {
 		$error['username_empty'] = "Needed Username must";
 	}

 	if (username_exists($username)) {
 		$error['username_exists'] = '<div class="error">Username already exists</div>';
 	}

 	if (count($error) == 0) {

 		wp_create_user($username, $password);
 		get_header(); 
 		echo '<section class="register_section" id="register_section">
 		<div class="container">
 		<div class="row">
 		<div class="col-lg-12">
 		<div class="register_form_box">
 		<img class="register_logo" src="<?php echo get_template_directory_uri() ?>/img/register-logo.png" alt="">
 		<form action="" id="register_form" method="POST">
 		<h1>User Created Successfully</h1>
 		</form>
 		<a href="#" class="forgot">Forgot your password?</a>
 		<a href="#" class="cookies">Cookies notice</a>
 		</div>
 		</div>
 		</div>
 		</div>
 		</section>';
 		get_footer();
 		// header("refresh:5;url=/");
 		exit();
 	}else{


 	}
 }

 ?>

 <main>
 	<section class="register_section" id="register_section">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-12">
 					<div class="register_form_box" data-aos="flip-up" data-aos-easing="linear" data-aos-duration="500">
 						<img class="register_logo" src="<?php echo get_template_directory_uri() ?>/img/register-logo.png" alt="">
 						<form action="" id="register_form" method="POST" autocomplete="off">
 							<div class="form_control">
 								<div class="placeholder">Login</div>
 								<input type="text" name="txtUsername" autocomplete="off" id="username">
 							</div>
 							<div class="form_control">
 								<div class="placeholder">Password</div>
 								<input type="password" name="txtPassword" autocomplete="off" id="password">
 							</div>
 							<input type="submit" value="Sign in">
 						</form>
 						<a href="#" class="forgot">Forgot your password?</a>
 						<a href="#" class="cookies">Cookies notice</a>
 					</div>
 				</div>
 			</div>
 		</div>
 	</section>



 </main>
 <!-- Cookies -->
	<div class="cookies_modal">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 ml-auto mr-auto">
					<h2>Cookies must be enabled in your browser</h2>
					<p>Two cookies are used on this site:</p>
					<p>The essential one is the session cookie, usually called MoodleSession. You must allow this cookie in your browser to provide continuity and to remain logged in when browsing the site. When you log out or close the browser, this cookie is destroyed (in your browser and on the server).</p>
					<p>The other cookie is purely for convenience, usually called MOODLEID or similar. It just remembers your username in the browser. This means that when you return to this site, the username field on the login page is already filled in for you. It is safe to refuse this cookie - you will just have to retype your username each time you log in.</p>
					<a href="#" class="btn cookies_btn">OK</a>
				</div>
			</div>
		</div>
	</div>
	<div id="cookies_overlay"></div>
 <!-- Footer -->
 <?php get_footer(); ?>