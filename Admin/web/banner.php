<?php
	$sql = "SELECT * FROM banner";
	$query = mysql_query($sql);
	$totalrows = mysql_num_rows($query);
	// echo "$totalrows";
?>

<div class="container banner">
	<hr>
	<div class="row">
		<div  class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<h3>All Banner (<?php echo $totalrows ?>)</h3>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<a style="float: right;" href="main.php?page_layout=add-banner">
				<button type="button" class="btn btn-info add">
					<span class="glyphicon glyphicon-plus-sign"></span> Thêm
				</button>
			</a>
		</div>
	</div>
	<hr>
	<?php
		while ($rows = mysql_fetch_array($query)) {
		?>
	<div class="row">
		
			<div class="col-xs-12 col-sm-5 col-md-3 col-lg-3">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<img src="../image/<?php echo $rows['anh'] ?>" width=100% height=auto>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 flex-container">					
						<a href="main.php?page_layout=edit-banner&id=<?php echo $rows['id']?>" ><button type="button" class="btn btn-info edit flex-item">Sửa</button></a>
						<a onclick="return confirm('Bạn muốn xóa Banner này ?')" href="main.php?page_layout=del-banner&id=<?php echo $rows['id']?>" ><button type="button" class="btn btn-danger remove flex-item">Xóa</button></a>
					</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-7 col-md-9 col-lg-9">
				<table class="table table-striped table-hover">
					<tbody>
							<tr>
								<td class="title text-center" colspan="2">
									Thông tin Banner <?php echo $rows['id']?>
								</td>
							</tr>
							<tr>
								<td class="title">ID</td>
								<td><?php echo $rows['id'] ?></td>
							</tr>

							<tr>
								<td class="title">Title</td>
								<td><?php echo $rows['title'] ?></td>
							</tr>

							<tr>
								<td class="title">Description</td>
								<td><?php echo $rows['description'] ?></td>
							</tr>

							<tr>
								<td class="title">Status</td>
								<td><?php echo $rows['status'] ?></td>
							</tr>

		
					</tbody>
				</table>
			</div>
	</div>
	<hr>
	<?php
		}
	?>
	
	
</div>