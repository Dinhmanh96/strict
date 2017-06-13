<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM showcase WHERE id ='$id'";
    $query = mysql_query($sql); 
    header("location:main.php?page_layout=showcase");
?>