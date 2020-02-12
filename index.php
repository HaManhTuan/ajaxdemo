<?php 
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ajax Insert</title>
	 <!--  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script> -->
	     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>  


</head>
<body>
	<div class="container-fluid">
		<div class="tieude" style="margin-top: 20px;">
			<p class="text-center" style="font-size: 32px; font-weight: bold;">Practice</p>
		</div>
		<div class="row">
			<div class="col-md-3">
				<form id="frm">
						<label for="formGroupExampleInput">Họ tên</label>
						<input type="text" class="form-control" id="name" name="name" required="" placeholder="Nhập họ tên" >
						<label for="formGroupExampleInput2">Địa chỉ</label>
						<input type="text" class="form-control" id="address" name="address" required="" placeholder="Nhập địa chỉ">
						<label for="formGroupExampleInput2">Khoa</label>
						<select name="khoa" class="form-control" id="khoa" required="" >
							<option value="">--Chọn--</option>
							<option value="CNTT">CNTT</option>
							<option value="Cơ khí">Cơ khí</option>
							<option value="Điện tử">Điện tử</option>
						</select>
				    <input type="hidden" class="form-control" name="id" id="id" value="0" style="margin-top: 10px;"> 
					<input type="button" class="btn btn-primary form-control" name="insert" id="insert" value="Add" style="margin-top: 10px;">
				</form>
			</div>
			<form action="" class="form-inline" accept-charset="utf-8">
			    <div class="form-group mx-sm-3 mb-2">
				    <label >Tìm kiếm</label>
				    <input type="text" class="form-control" id="search" style="width: 500px;margin-left: 10px;" >
				  </div>
			</form>
			<div class="col-md-9" id="view"></div>
		</div>
		<div class="row">
			<p class="text-center" style="font-size: 26px;font-weight: bold;">Practice 1</p>
			<div class="col-md-3">
				<form id="frm_1">
					<label for="formGroupExampleInput">Tên danh mục</label>
					<input type="text" class="form-control" id="name_1" name="name_1" required="" placeholder="Nhập tên danh mục" >
					<label for="formGroupExampleInput">Chọn trạng thái</label>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" name="status[]" id="inlineCheckbox1" value="1">
					  <label class="form-check-label" for="inlineCheckbox1">Hiển thị trên menu chính</label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" name="status[]" id="inlineCheckbox1" value="2">
					  <label class="form-check-label" for="inlineCheckbox1">Hiển thị ngoài trang chủ</label>
					</div>
					  <div class="form-check">
					   <input class="form-check-input" type="checkbox" name="status[]" id="inlineCheckbox1" value="3">
					  <label class="form-check-label" for="inlineCheckbox1">Hiển thị trên slidebar</label>
					</div>
					<input type="hidden" class="form-control" name="id_1" id="id_1" value="0" style="margin-top: 10px;"> 
					<input type="button" class="btn btn-primary form-control" name="insert_1" id="insert_1" value="Add" style="margin-top: 10px;">
				</form>
			</div>
			<div class="col-md-9" id="view_1"></div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function()
			{
				$("#view").load("view.php");
				$("#view_1").load("view_1.php");	
				$("#insert").click(function(){
					var id=$("#id").val();
					if (id==0) {
	  					$.ajax({
						  	type: "POST",
						  	url: "insert.php",
						  	data:$("#frm").serialize(),
						  	success:function(d)
						  	{
	                           $("#frm")[0].reset(); 
	                           $("#view").load("view.php");
						  	}
						  });
						}
						//Update ajax	
					else 
					  {
							$.ajax({
						  	type: "POST",
						  	url: "update.php",
						  	data:$("#frm").serialize(),
						  	success:function(d)
						  	{  
						  	   $("#view").load("view.php");
	                           $("#frm")[0].reset();
	                           $("#id").val("0");
	                     
						  	}
						  });
					}
			    });
			    //Thêm danh mục
			    $("#insert_1").click(function() {
			    	var id=$("#id_1").val();
			    	if (id == 0) {
			    		$.ajax({
			    			url: 'insert_danhmuc.php',
			    			type: 'POST',
			    			data:$("#frm_1").serialize(),
			    			success:function(data)
			    			{
                              $("#frm_1")[0].reset();
                              $("#view_1").load("view_1.php");
			    			}
			    		});    		
			    	}
			    	else {
			     		
			    	}
			    });
			    	$(document).on("click",".update_1",function() {
					var row = $(this);
					var id =  $(this).attr("data-id");
					$("#id").val(id);
					var name = row.closest('tr').find('td:eq(2)').text();
					$("#name_1").val(name);
					var status = row.closest('tr').find('td:eq(3)').text();

							
				});
				$(document).on("click",".update",function() {
					var row = $(this);
					var id =  $(this).attr("data-id");
					$("#id").val(id);
					var name = row.closest('tr').find('td:eq(2)').text();
					$("#name").val(name);
					var address = row.closest('tr').find('td:eq(3)').text();
					$("#address").val(address);
					var khoa = row.closest('tr').find('td:eq(4)').text();
					$("#khoa").val(khoa);				
				});
					});

		//Xóa ajax
			$(document).on("click",".del",function(e) {
				    e.preventDefault();
				  	var del=$(this);
					var id=$(this).attr("data-id");
				    bootbox.confirm("Bạn thực sự muốn xóa?",function(confirmed){
		                if (confirmed) {
							  $.ajax({
							  	type: "POST",
							  	url: "delete.php",
							  	data:{id:id},
							  	success:function(d)
							  	{
		                           del.closest('tr').hide();
							  	}
							  });
		                };
		            });
					            
				    });
		$(document).on("keyup","#search",function(e) {
       		var text=$(this).val();
       		if (text !='') {
       			$.ajax({
	       			url: "search.php",
	       			type: "POST",
	       			data: {search: text},
	       			success:function(data)
	       			{
	                   $("#view").html(data);
	       			}
       			}); 
       		}
       	else {
          $('#view').load('view.php');   		
       	}
       });
		    $(document).on('click', 'input[type="checkbox"]', function() {
            let action = $(this).data('action');
            if (action == 'checkall') {
                if ($(this).is(":checked") == true) {
                    $("input.checkone").prop('checked', true);
                } else {
                    $("input.checkone").prop('checked', false);
                }
            }
            var chkLength = $("input.checkone").length;
            var chkCheckLength = $("input.checkone:checked").length;
            if (chkLength == chkCheckLength) {
                $("#checkall").prop('checked', true);
            } else {
                $("#checkall").prop('checked', false);
            }
            $("#btn-del-all > span").html(chkCheckLength);
            if (chkCheckLength > 0) {
                $("#btn-del-all").fadeIn(300);
            } else {
                $("#btn-del-all").hide();
            }
        });
	</script>
</body>
</html>