<?php
	$sql = "SELECT * FROM simple";
	$query = mysql_query($sql);
	$total = mysql_num_rows($query);
?>


<div class="container simple">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
			<hr>
			<div class="row">
				<div  class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<h3>All Simple & pure design (<?php echo $total ?>)</h3>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<a style="float: right;" href="main.php?page_layout=add-simple">
						<button type="button" class="btn btn-info add">
							<span class="glyphicon glyphicon-plus-sign"></span> Thêm
						</button>
					</a>
				</div>
			</div>
		<?php
			while ($rows = mysql_fetch_array($query)) {
			?>
				<hr>
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<img src="../image/<?php echo $rows['anh'] ?>" width=100% height=auto>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 flex-container">					
								<a href="main.php?page_layout=edit-simple&id=<?php echo $rows['id']?>" ><button type="button" class="btn btn-info btn- edit flex-item">Sửa</button></a>
								<a onclick="return confirm('Bạn muốn xóa Content này ?')" href="main.php?page_layout=del-simple&id=<?php echo $rows['id']?>" ><button type="button" class="btn btn-danger remove flex-item">Xóa</button></a>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
						<table class="table table-striped">
							<tbody>
								<tr>
									<td class="title">ID</td>
									<td><?php echo $rows['id']?></td>
								</tr>
								<tr>
									<td class="title">Title</td>
									<td><?php echo $rows['title']?></td>
								</tr>
								<tr>
									<td class="title">Desciption</td>
									<td><?php echo $rows['description']?></td>
								</tr>
								<tr>
									<td class="title">Date</td>
									<td><?php echo $rows['time_add']?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			<?php
			}
		?>
			
		</div>
	</div>
</div>