	<?php
		$sql = "SELECT * FROM message";
		$query = mysql_query($sql);
		$totalrows = mysql_num_rows($query);
		// echo "$totalrows";
	?>

	<div class="container message">
		<div class="row">
				<hr>
			
				<div  class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<h3>All Message (<?php echo $totalrows ?>)</h3>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<a onclick="return confirm('Bạn muốn xóa tất cả Message ?')" style="float: right;" href="main.php?page_layout=del-message&id=all">
						<button type="button" class="btn btn-danger add">
							<span class="glyphicon glyphicon-trash"></span> All
						</button>
					</a>
				</div>
			
				<hr>
				<table class="table table-striped">
				
				<thead>

					<tr >
						<!-- <th width="5%">ID</th> -->
						<th width="15%">Name</th>
						<!-- <th width="20%">Email</th> -->
						<th class="text-center" width="30%">Message</th>
						<!-- <th width="15%">Date</th> -->
						<th width="5%" class="text-center">Chi tiết</th>
						<th width="5%" class="text-center">Xóa</th>
					</tr>
				</thead>
				<tbody>
					<?php
						while ($rows = mysql_fetch_array($query)) {
						?>
							<tr>
								
								<td><?php echo $rows['name'];?></td>
								
								<td><?php echo $rows['message'];?></td>
								<td class="text-center">
									<a href="main.php?page_layout=info-message&id=<?php echo $rows['id'];?>">
										<button type="button" class="btn btn-info">
											<span class="glyphicon glyphicon-list-alt"></span>
										</button>
									</a>
								</td>
								<td class="text-center">
									<a onclick="return confirm('Bạn muốn xóa Message này ?')" href="main.php?page_layout=del-message&id=<?php echo $rows['id'];?>" ><button type="button" class="btn btn-danger">
										<span class="glyphicon glyphicon-trash">
									</button></a>
								</td>
							</tr>
						<?php
						}
					?>
				</tbody>
			</table>
		
		</div>
		
	</div>