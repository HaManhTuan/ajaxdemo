<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<body>
	<style>
      .login
      {
          
		  width: 400px;
		  height: 400px;
		  position: absolute;
		  left: 50%;
		  top: 50%;
		  transform: translate(-50%, -50%);
      }
	</style>
	<div class="container">
		<div class="row">
			<div class="login">
			
					<form style='width:450px' id='input_form' method="POST" onsubmit="return false;">
					    <fieldset>
					        <p class="text-center" style="font-size: 36px;">Đăng nhập</p>
				        	<div class="error" style="color: red">
								<p></p>
							</div>
					        <label for="username">Tên đăng nhập :</label>
					        <input type="text" value="" name="email" id="email" size="25" class=" form-control required" /><br/>
					        <label for="password">Mật khẩu :</label>
					        <input type="password" value="" name="password" id="password" size="25" class="form-control required" minlength='6'  />
					         
					        <button type="submit" class="btn btn-success" id="dangnhap">Đăng nhập</button>
					    </fieldset>
					</form>
			</div>
		</div>
	</div>
<style>
label.error{
    color:red;
}
</style>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
             $("#dangnhap").click(function()
             	{
				 	$("#input_form").validate({
				        rules: { 
				            
				            password: { 
				                required: true, 
				                minlength: 6, 
				            },  
				            email: { 
				                required: true, 
				                email: true
				            }
				        }, 
				        messages: { 
				           
				            password: { 
				                required: "Hãy điền mật khẩu", 
				                minlength: "Mật khẩu ít nhất 6 ký tự"
				            }, 
				            email: { 
				                required: "Hãy nhập 1 địa chỉ email hợp lệ", 
				                email:"Địa chỉ email không hợp lệ"
				            }
				        }
				    });

				    var email=$("#email").val();
				    var password=$("#password").val();
				  	if (email=="123@gmail.com") { 
						if (password=="123456") {              
						 window.location.href="index.php";
						} else {
						 $("div.error").html("<span class='red'>Sai mật khẩu</span>");
						}
					} else {  $("div.error").html("<span class='red'>Sai tài khoản</span>");
					}

	            });
	    });
		</script>

	
</body>
</html>