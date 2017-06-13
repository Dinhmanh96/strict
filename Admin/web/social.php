<?php
	$sql1 = "SELECT * FROM social";
	$query1 = mysql_query($sql1);
	$total = mysql_num_rows($query1);

	if (isset($_POST['submit'])) {
		$linkfb = $_POST['linkFacebook'];
		$linkgg = $_POST['linkGoogle+'];
		$linktw = $_POST['linkTwitter'];
		$linkin = $_POST['linkLinkedin'];

		$sql = "UPDATE social SET link = '$linkfb' WHERE name='Facebook'";
		$query = mysql_query($sql);
		$sql = "UPDATE social SET link = '$linkgg' WHERE name='Google+'";
		$query = mysql_query($sql);
		$sql = "UPDATE social SET link = '$linktw' WHERE name='Twitter'";
		$query = mysql_query($sql);
		$sql = "UPDATE social SET link = '$linkin' WHERE name='Linkedin'";
		$query = mysql_query($sql);
		header("location:main.php?page_layout=social");
	}
	
?>

<div class="container social">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-3 col-lg-6">
	<h3 class="text-center">Social Link</h3>
		<hr>
		<form class="form" method="post">
		<?php
			if ($total != 0) {
				while ($rows = mysql_fetch_array($query1)) {
				?>
						<div class="form-group">
							<label><?php echo $rows['name']?></label>
							<br>
							<div class="flex-container">
								<!-- <input type="hidden" name="id" value="<?php echo $rows['id'];?>"> -->
								<input type="text" name="link<?php echo $rows['name'];?>" class="form-control flex-item" value="<?php echo $rows['link'];?>">
								<button type="submit" name="submit" class="btn btn-info flex-item">Update</button>
							</div>
						</div>
					
					<hr>
				<?php
				}
			}else{
				header("location: main.php");
			}
		?>
		</form>
		<a href="main.php?">
			<button type="button" class="btn btn-info btn-undo">
				<span class="glyphicon glyphicon-arrow-left"></span> Back
			</button>
		</a>
	</div>
</div>