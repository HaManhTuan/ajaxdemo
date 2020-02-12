<?php 
 include("config.php"); connectDB();
 $id=$_POST['id'];
 
 	$sql="DELETE FROM hocsinh WHERE id =$id";
    $kq = mysql_query($sql);
 
  ?>