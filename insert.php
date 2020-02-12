<?php 
 include("config.php"); connectDB();
 session_start();
 $name=$_POST['name'];
 $address=$_POST['address'];
 $khoa=$_POST['khoa']; 
 if ($name != null) {
 	 $sql="INSERT INTO hocsinh(hoten,diachi,khoa) VALUES ('$name','$address','$khoa')";
	 $kq=mysqli_query($sql);
	 $id=mysqli_insert_id(); 
	 echo "Thêm mới thành công";
 }
 else {
 	
 }

?>
