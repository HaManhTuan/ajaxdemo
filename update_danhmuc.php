<?php 
 include("config.php"); connectDB();
  $id=$_POST['id'];
  $name=$_POST['name'];
  $status=$_POST['status'];
  $sql="UPDATE danhmuc SET ten='$name',status='$status' WHERE id=$id";
  $kq=mysql_query($sql);
 ?>