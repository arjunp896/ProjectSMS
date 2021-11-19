<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1" meta
	charset="UTF-8">
<link rel="stylesheet" href="../css/style_admin_login.css">

</head>






<body>

	<div class="container">
	<?php include_once 'Header.php';?>
		<div class="wrapper">
			<div class="registration_form">
				<div class="title">Login</div>
<!-- form  -->
				<form id="form" action="../src/handleLogin.php" method="post">
					<div class="form_wrap">
						<div class="input_grp"></div>
						<div class="input_wrap">
							<label for="email">Email Address</label> <input type="email"
								id="email" name="email" required>
						</div>
						<div class="input_wrap">
							<label for="pwd">Password:</label> <input type="password"
								id="pwd" name="password" required>
						</div>
						<div class="input_wrap">
							<input type="submit" value="Login" class="submit_btn" onclick="storeValues()">

						</div>

					</div>


				</form>
				<div class="forgot">
					<a href="#forgot_password">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>