<?php
	ob_start();
	session_start();
	include_once("connect/connect.php");
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM user WHERE email= '$email' AND password='$password'";
		$query = mysql_query($sql);
		$totalrows = mysql_num_rows($query);
		// echo "$totalrows";
		if ($totalrows <= 0) {
			$error = 'Tài khoản hoặc mật khẩu không hợp lệ';
		}
		else{
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			// echo $_SESSION['email'];
			header('location:main.php');
		}
	}

	if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
		?>
			<!DOCTYPE html>
			<html>
			<head>
				<title>Login Strict</title>
				<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
				<link rel="stylesheet" type="text/css" href="../css/index.css">
			 	<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
			    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
			</head>
			<body>
				<div class="container">
					<div class="row">
						<div class="col-sx-12 col-sm-12 col-md-12 col-lg-12 logo">
							<img src="../image/logo.png">
						</div>
					
						<div class="col-sx-12 col-sm-12 col-md-12 col-lg-offset-4 col-lg-4">
							<h2 style="color: #2d3950" class="text-center">Login for Strict</h2>
							<p class="error text-center"><?php if (isset($error)) {
								echo "$error";
							}
							?>
							</p>
							<form method="post" class="form">
								<div class="form-group">
									<label for="email"></label>
									<input class="form-control" type="email" name="email" placeholder="Email" required>
								</div>
								<div class="form-group">
									<label for="password"></label>
									<input class="form-control" type="password" name="password" placeholder="Password" required>
								</div>
								<div class="checkbox">
			                        <input type="checkbox" name="check" id="checkbox">
			                        <label for="checkbox">Remember me</label>
			                    </div>
								<button class="btn btn-info" type="submit" name="submit">Login</button>
							</form>
						</div>
					</div>
				</div>
			</body>
			</html>
		<?php
	}else{
		header("location:main.php");
	}
?>
