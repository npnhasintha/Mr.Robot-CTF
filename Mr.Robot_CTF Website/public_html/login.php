<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>

<HTML>
<HEAD>
<TITLE>Login</TITLE>
<link href="assets/css/loginstyle.css" type="text/css" rel="stylesheet">
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
<script data-ad-client="ca-pub-1551840022975400" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</HEAD>
<BODY>
	    <section class="banner">      
        
		<video src="assets/video/bg.mp4"muted loop autoplay></video>
	
		<div class="overlay"></div>
	
			<div class="text">
				<h2>Mr.Robot</h2>
				<h3>Hack me if you can</h3>
				<p>Mr. Robot is an American drama thriller television series 
				created by Sam Esmail for USA Network. It stars Rami Malek 
				as Elliot Alderson, a cybersecurity engineer and hacker 
				with social anxiety disorder and clinical depression.</p>
				<a href="user-registration.php">Register</a>
			</div>

	<div class="phppot-container">
		<div class="login-container">
			
			<div class="signup-align">

				<form name="login" action="" method="post" onsubmit="return loginValidation()">
					<div class="signup-heading">Login</div>

					<?php if(!empty($loginResult)){?>
					<div class="error-msg"><?php echo $loginResult;?></div>
					<?php }?>

					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
					
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="login-password" id="login-password">
						</div>
					</div>
					
					<div class="row">
						<input class="btn" type="submit" name="login-btn"
							id="login-btn" value="Login">
					</div>
				</form>
			</div>
		</div>
	</div>

        <div class="footer">
            <p>Mr.Robot™</p>
            <p>Nadeesh | Sandun</p>
        </div>

	 </section>

<script>
		function loginValidation() {
			var valid = true;
			$("#username").removeClass("error-field");
			$("#password").removeClass("error-field");

			var UserName = $("#username").val();
			var Password = $('#login-password').val();

			$("#username-info").html("").hide();

			if (UserName.trim() == "") {
				$("#username-info").html("required.").css("color", "#ee0000").show();
				$("#username").addClass("error-field");
				valid = false;
			}
			if (Password.trim() == "") {
				$("#login-password-info").html("required.").css("color", "#ee0000").show();
				$("#login-password").addClass("error-field");
				valid = false;
			}
			if (valid == false) {
				$('.error-field').first().focus();
				valid = false;
			}
			return valid;
		}
</script>
</BODY>
</HTML>
