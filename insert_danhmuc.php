<?php 
 include("config.php"); connectDB();
 session_start();
 $name=$_POST['name_1'];
 $status=serialize($_POST['status']);
 if ($name != null) {
 	 $sql="INSERT INTO danhmuc(ten,status) VALUES ('$name','$status')";
	 $kq=mysql_query($sql);
	 $id=mysql_insert_id(); 
	 echo "Thêm mới thành công";
 }
 else {
 	
 }

?>
