<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		// echo $id;
		$sql = "SELECT * FROM showcase WHERE id='$id'";
		$query = mysql_query($sql);
		$total = mysql_num_rows($query);
	}

	if (isset($_POST['submit'])) {
		$name_project = $_POST['name_project'];
		$description = $_POST['description'];
		$link_project = $_POST['link_project'];

		if($_FILES['anh']['name'] == ''){
			$anh = $_POST['anh'];
		}
		else{
			$anh = $_FILES['anh']['name'];
			$tmp_name = $_FILES['anh']['tmp_name'];
		}
		move_uploaded_file($tmp_name, '../image/'.$anh);

		$sql = "UPDATE showcase SET name_project = '$name_project', description = '$description', link_project = '$link_project',  anh = '$anh' WHERE id = '$id'";
		$query = mysql_query($sql);
		$total = mysql_num_rows($query);
		header("location: main.php?page_layout=showcase");
	}
?>
<div class="container edit-banner">
	<div class="row">

		<?php
			while ($rows = mysql_fetch_array($query)) {
				?>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-3 col-lg-6 text-center">
					<h3>Edit banner <?php echo $rows['id']?></h3>
					<hr>
						<img src="../image/<?php echo $rows['anh']?>" alt="" width=100% style="padding: 10px 0px;">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-3 col-lg-6">
						<form enctype="multipart/form-data"  method="post" >
							<div class="form-group">
								<label>ID</label>
								<input type="number" name="id" value="<?php echo $rows['id'] ?>" class="form-control" readonly>
							</div>

							<div class="form-group">
								<label>Title</label>
								<input type="text" name="name_project" value="<?php echo $rows['name_project'] ?>" class="form-control">
							</div>

							<div class="form-group">
								<label>Description</label>
								<input type="text" name="description" value="<?php echo $rows['description'] ?>" class="form-control">
							</div>

							<div class="form-group">
								<label>Project Link</label>
								<input type="text" name="link_project" value="<?php echo $rows['link_project'] ?>"  class="form-control">
							</div>

							<div class="form-group">
								<label>Source</label>
								<input type="file" name="anh" class="form-control">
								<input type="hidden" name="anh" value="<?php echo $rows['anh'];?>">
							</div>
							
							<button name="submit" type="submit" class="btn btn-info btn-update">Cập nhật</button>
							<a href="main.php?page_layout=showcase" title="">
								<button type="button" class="btn btn-danger btn-cancel">Hủy</button>
							</a>
							
						</form>
					</div>
					
				<?php
			}
		?>
		
	</div>
</div>