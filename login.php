<!DOCTYPE html>

<head>

<meta />
<link rel="stylesheet" type="text/css" href="login.css"> 
</link>

<title> Login
</title>
 
</head>

<body>



	<div id="bg" class="bg">



		<div class="left" id="logo">
					<h1 id="x_titan" class="left">X Titan</h1>
					<h2 id="header_title" class="left"> E-Comm Announcement Board</h2>
		</div>




		<div id="form">
			<form action="login.php" method="post">
				
				<div id="email" class="text">
					Email:
					<input type="text" name="email" class="area" id="email_area" />
				</div>

				<div id="password" class="text">
					Password:
					<input type="Password" name="password" class="area" id="pass_area" />
				</div>


				<input type="submit" name="login" value="Login" class="submit" />

				<?php

				include 'DBConnection.php';

			
				if(isset($_POST['login'])){


					$email = $_POST['email'];
					$password = $_POST['password'];

					if ($email == "" || $password == "") {
						echo "<h4 style=\"float: left;
						margin-left: 25%;
						font-family: arial;
						color: white;\">Please fill in all the fields</h4>";
					}
					else{
						if(check_user($email, $password)){
							header("Location: edit.php");
						}
						else{
							echo "<h4 style=\"float: left;
						margin-left: 18%;
						font-family: arial;
						color: white;\">Email or password is incorrect</h4>";
						}
					}
				}

				?>


			</form>
		</div>

	</div>


</body>