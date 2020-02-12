<?php 
 include("config.php"); connectDB();
 $id=$_POST['id'];
 foreach ($id as $value) {
 	$sql="DELETE FROM hocsinh WHERE id =$value";
    $kq = mysql_query($sql);
 }
  ?>