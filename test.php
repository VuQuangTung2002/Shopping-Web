<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Submit form sử dụng jQuery Ajax và php</title>

<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{	
	//khai báo nút submit form
	var submit   = $("input[type='submit']");
    
	//khi thực hiện kích vào nút Login
	submit.click(function()
	{
		//khai báo các biến
		var username = $("input[name='username']").val(); //lấy giá trị input tài khoản
		var password = $("input[name='password']").val(); //lấy giá trị input mật khẩu
		
		//kiem tra xem da nhap tai khoan chua
		if(username == ''){
			alert('Vui lòng nhập tài khoản');
			return false;
		}
		
		//kiem tra xem da nhap mat khau chua
		if(password == ''){
			alert('Vui lòng nhập mật khẩu');
			return false;
		}
		
		//lay tat ca du lieu trong form	login
		var data = $('form#form_login').serialize();
		//su dung ham $.ajax()
		$.ajax({
		type : 'POST', //kiểu post
		url  : 'submit.php', //gửi dữ liệu sang trang submit.php
		data : data,
		success :  function(data)
			   {						
					if(data == 'false')
					{
						alert('Sai tên hoặc mật khẩu');
					}else{
						$('#content').html(data);
					}
			   }
		});
		return false;
	});
});
</script>
</head>
<body>
<h1>Submit form sử dụng jQuery Ajax và php</h1>
<div id="content">
	<form method="post" id="form_login">
		<table>
			<tr>
				<td>
				    <input type="text" name="username" placeholder="Tài khoản" />
				</td>
			</tr>
			<tr>
				<td>
				     <input type="text" name="password" placeholder="Mật khẩu" />
				</td>
			</tr>
			<tr>
				<td align="center">
                <input type="submit" value="Login">
				     
				</td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>