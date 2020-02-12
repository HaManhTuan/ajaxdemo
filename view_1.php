
<?php 
 include("config.php"); connectDB();
 ?>
 <script src="js/jquery.simple-checkbox-table.min.js"></script> 
<div class="table table-responsive">

	<table class="table table-bordered" id="example" style="margin-top: 30px;">
		<thead>
		    <tr>
		      <th scope="col"><input type="checkbox"  value="checkall_1" data-action="checkall_1" id="checkall_1" class="d-none"></th>
		      <th scope="col">MÃ SỐ</th>
		      <th scope="col"> TÊN DANH MỤC</th>
		      <th scope="col">TRẠNG THÁI</th>
		      <th scope="col">Hành động</th>
		    </tr>
	  </thead>
	  <tbody class="insert">
	  	<?php 
	  	 
	  	    $sql="SELECT * FROM danhmuc";
	  	    $kq=mysql_query($sql);
	  	    while ($mang=mysql_fetch_array($kq)) {
	  	        $status=implode("<br>",unserialize($mang['status']));
	  	    ?> 
	  	        <tr id="<?php echo $mang['id'];?>">
	  	          <td><input type="checkbox" name="id[]" value="<?php echo $mang['id'];?>" class="checkone_1"></td>
	  	          <td><?php echo $mang['id'];?></td>
			      <td><?php echo $mang['ten']; ?></td>
			      <td><?php echo $status; ?></td>
			      <td>
			      	<button type="button" class="btn btn-success update_1" data-id="<?php echo $mang['id'];?>"><i class="fa fa-edit"></i></button>
			      	<button type="button" class="btn btn-danger del" data-id="<?php echo $mang['id'];?>"><i class="fa fa-trash"></i></button>
			      </td>
			    </tr> 
	    <?php }?>
	  
	  </tbody>
	</table>
</div>




