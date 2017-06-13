<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM banner WHERE id ='$id'";
    $query = mysql_query($sql); 
    header("location:main.php?page_layout=banner");
?>