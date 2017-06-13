<?php
	ob_start();
	session_start();
	include_once("connect/connect.php");
	if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Admin Strict</title>
			<meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
		    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		    
		    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.css">
		    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">
		    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
		    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
		    <link rel="stylesheet" type="text/css" href="../css/strict-admin.css">
		</head>
		<body>
			<nav class="navbar">
				<div class="container header">
					<div class="navbar-header">
				    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>                        
				      	</button>
				      	<a class="navbar-brand" href="#"><img src="../image/logo.png" alt=""></a>
				    </div>
				    <div class="collapse navbar-collapse" id="myNavbar">
				      <ul class="nav navbar-nav">
				        <li><a href="main.php?page_layout=banner">Banner</a></li>
				        <li><a href="main.php?page_layout=simple">Simple & pure</a></li>
				        <li><a href="main.php?page_layout=showcase">Showcase</a></li>
				        <li><a href="main.php?page_layout=message">Message</a></li>
				        <li><a href="main.php?page_layout=social">Social</a></li>
				      </ul>
				      <ul class="nav navbar-nav navbar-right">
				        <li><a href="main.php?page_layout=logout"><span class="glyphicon glyphicon-log-in"></span></a></li>
				      </ul>
				    </div>
				</div>
			</nav>
			<?php
				if (isset($_GET['page_layout'])) {
					switch ($_GET['page_layout']) {
						case 'banner':
							include_once('web/banner.php');
							break;
						case 'add-banner':
							include_once('web/add-banner.php');
							break;
						case 'edit-banner':
							include_once('web/edit-banner.php');
							break;
						case 'del-banner':
							include_once('web/del-banner.php');
							break;
						case 'simple':
							include_once('web/simple.php');
							break;
						case 'add-simple':
							include_once('web/add-simple.php');
							break;
						case 'edit-simple':
							include_once('web/edit-simple.php');
							break;
						case 'del-simple':
							include_once('web/del-simple.php');
							break;
						case 'showcase':
							include_once('web/showcase.php');
							break;
						case 'add-showcase':
							include_once('web/add-showcase.php');
							break;
						case 'edit-showcase':
							include_once('web/edit-showcase.php');
							break;
						case 'del-showcase':
							include_once('web/del-showcase.php');
							break;
						case 'message':
							include_once('web/message.php');
							break;
						case 'info-message':
							include_once('web/info-message.php');
							break;
						case 'del-message':
							include_once('web/del-message.php');
							break;
						case 'social':
							include_once('web/social.php');
							break;	
						case 'logout':
							include_once('logout.php');
							break;
						default:
							include_once('web/banner.php');
							break;
					}
				}else{
					include_once('web/banner.php');
				}
			?>
		</body>
		</html>
	<?php	
	}else{
		header('location:index.php');
	}

?>
