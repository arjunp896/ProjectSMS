<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" meta
	charset="UTF-8">
<link rel="stylesheet" href="../css/style_admin_login.css">
</head>
<body>

	<div class="container">
 <?php include 'Header.php'; ?>
		
		<div class="wrapper">
			<div class="registration_form">
				<div class="title">Create an Account</div>
					
					
					<?php
    if (isset($_GET["error"])) 
    {
        
        echo $_GET["error"];
    }
    ?>
<!--form  -->
				<form id="form" action="../src/saveUser.php" method="Post">
					<div class="form_wrap">
						<!-- 						<div class="input_grp"></div> -->
						<div class="input_wrap">
							<label for="fname">First Name</label> <input type="text"
								name="fname" required>
						</div>
						<div class="input_wrap">
							<label for="lname">Last Name</label> <input type="text"
								name="lname" required>
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
							<label for="pwd">Re Enter Password:</label> <input
								type="password" id="pwd" name="cpassword" required>
						</div>
						<div class="input_wrap">
							<input type="submit" class="submit_btn" onclick="storeValues()">

						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>