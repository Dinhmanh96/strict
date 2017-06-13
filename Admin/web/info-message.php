<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$sql = "SELECT * FROM message WHERE id = '$id'";
		$query = mysql_query($sql);

	}
?>

<div class="container info-message">
	<div class="row">
	<?php
		while ($rows = mysql_fetch_array($query)) {
		?>
			<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
			<h3 class="text-center">Infomation message</h3>
			<hr>
				<form >
					<div class="form-group">
						<label for="id">ID Message</label>
						<input class="form-control" type="number" name="id" readonly value="<?php echo $rows['id'];?>">
					</div>
					<div class="form-group">
						<label for="name">Name</label>
						<input class="form-control" type="text" name="name" readonly value="<?php echo $rows['name'];?>">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input class="form-control" type="text" name="email" readonly value="<?php echo $rows['email'];?>">
					</div>
					<div class="form-group">
						<label for="message">Message</label>
						<textarea class="form-control" name="message" rows="8" readonly placeholder="<?php echo $rows['message'];?>"></textarea>
					</div>
					<div class="form-group">
						<label for="time_cmt">Date</label>
						<input class="form-control" type="text" name="time_cmt" readonly value="<?php echo $rows['time_cmt'];?>">
					</div>
						<a href="main.php?page_layout=message">
							<button type="button" class="btn btn-info btn-undo">
								<span class="glyphicon glyphicon-arrow-left"></span> Back
							</button>
						</a>
						<a onclick="return confirm('Bạn muốn xóa Message này ?')" href="main.php?page_layout=del-message&id=<?php echo $rows['id'];?>" >
							<button type="button" class="btn btn-danger btn-remove">
								<span class="glyphicon glyphicon-trash"></span>
							</button>
						</a>
				</form>
			</div>

		<?php
		}
	?>
		
	</div>
</div>