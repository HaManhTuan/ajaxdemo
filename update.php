<?php 
 include("config.php"); connectDB();
  $id=$_POST['id'];
  $name=$_POST['name'];
  $address=$_POST['address'];
  $khoa=$_POST['khoa'];
  $sql="UPDATE hocsinh SET hoten='$name',diachi='$address',khoa='$khoa' WHERE id=$id";
  $kq=mysql_query($sql);
 ?>