<?php
	if (isset($_GET['id'])) {
	    $id = $_GET['id'];
	    if ($id != 'all'){
	    	// echo "1";
	   		$sql = "DELETE FROM message WHERE id ='$id'";
		}else{
			// echo "0";
			$sql = "DELETE FROM message";
		}
	    $query = mysql_query($sql); 
	    // echo "$id";
	    header("location:main.php?page_layout=message");
    }
?>