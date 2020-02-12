
<?php 
 include("config.php"); connectDB();
 ?>
 <script src="js/jquery.simple-checkbox-table.min.js"></script> 
<!--    <script type="text/javascript">
  $(document).ready(function(){
    $("table#example").simpleCheckboxTable();   
  });
 </script> -->
<div class="table table-responsive">

	<!--   <button type="button" class="btn btn-primary" id="btn_delete" style="float: right;margin-bottom: 5px;">Xóa nhiều</button> -->
	<table class="table table-bordered" id="example" style="margin-top: 30px;">
		<thead>
		    <tr>
		      <th scope="col"><input type="checkbox"  value="checkall" data-action="checkall" id="checkall" class="d-none"></th>
		      <th scope="col">MÃ SỐ</th>
		      <th scope="col">HỌ TÊN</th>
		      <th scope="col">ĐỊA CHỈ</th>
		      <th scope="col">KHOA</th>
		      <th scope="col">Hành động</th>
		    </tr>
	  </thead>
	  <tbody class="insert">
	  	<?php 
	  	 
	  	    $sql="SELECT * FROM hocsinh";
	  	    $kq=$mysqli->query($sql);
	  	    while ($mang=mysqli_fetch_assoc($kq)) {
	  	   
	  	    ?> 
	  	        <tr id="<?php echo $mang['id'];?>">
	  	          <td><input type="checkbox" name="id[]" value="<?php echo $mang['id'];?>" class="checkone"></td>
	  	          <td><?php echo $mang['id'];?></td>
			      <td><?php echo $mang['hoten']; ?></td>
			      <td><?php echo $mang['diachi']; ?></td>
			      <td><?php echo $mang['khoa']; ?></td>
			      <td>
			      	<button type="button" class="btn btn-success update" data-id="<?php echo $mang['id'];?>"><i class="fa fa-edit"></i></button>
			      	<button type="button" class="btn btn-danger del" data-id="<?php echo $mang['id'];?>"><i class="fa fa-trash"></i></button>
			      </td>
			    </tr> 
	    <?php }?>
	  
	  </tbody>
	</table>
</div>

<script type="text/javascript">
	$(document).on("click","#btn-del-all",function(e) {
     e.preventDefault();
        	var id = [];
        	$(':checkbox:checked').each(function(i)
        	{
              id[i]=$(this).val();
        	});
        	if (id.length == 0) {
        		bootbox.alert("Hãy tick ít nhất 1 lựa chọn");
        	}
        	else {
        		    bootbox.confirm("Bạn thực sự muốn xóa?",function(confirmed){
                      if (confirmed) {
							  $.ajax({
							  	type: "POST",
							  	url: "deletes.php",
							  	data:{id:id},
							  	success:function(d)
							  	{
							  		for (var i = 0; i < id.length; i++) {
							  		  /*del.closest('tr').hide();*/
							  		  $('tr#'+id[i]+'').css('background-color','#ccc');
							  		  $('tr#'+id[i]+'').fadeOut('slow');
							  		}
							  	}
							  });
        				}
        				 });
             };
   
	            
    })			
</script>


