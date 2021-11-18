<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" meta
	charset="UTF-8">
<link rel="stylesheet" href="../css/style_admin_login.css">
</head>
<body>

	<div class="container">
<!-- 		<nav class="navbar">
			<ul>
				<img src="../img/logo2.jfif">
				<li><a href="../index.html#home">Home</a></li>
				<li><a href="../index.html#service">Service</a></li>
				<li><a href="../index.html#about">About</a></li>
				<li><a href="../index.html#contact">Contact</a></li>
			</ul>
		</nav>
 -->
 <?php include 'Header.php'; ?>
 		
		<div class="wrapper">
			<div class="registration_form">
				<div class="title">Create an Account</div>

				<form id="form" action="" method="Post">
					<div class="form_wrap">
<!-- 						<div class="input_grp"></div> -->
						<div class="input_wrap">
							<label for="fname">First Name</label> <input type="text" name="fname" required>
						</div>
						<div class="input_wrap">
							<label for="lname">Last Name</label> <input type="text" name="lname" required>
						</div>
						<div class="input_wrap">
							<label for="email">Email Address</label> <input type="email"
								id="email" name="email" required>
						</div>
						<div class="input_wrap">
							<label for="password">Password:</label> <input type="password"
								id="pwd" name="password" required>
						</div>
						<div class="input_wrap">
							<label for="confirmpassword">Re Enter Password:</label> <input
								type="password" id="pwd" name="confirmpassword" required>
						</div>
						<div class="input_wrap">
							<button type="submit" class="submit_btn" onclick="storeValues()">submit</button>

						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>