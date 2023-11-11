<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$c_fullname=$_POST["c_fullname"];
		$c_phone=$_POST["c_phone"];
		$c_password=$_POST["c_password"];
		$c_email=$_POST["c_email"];
		$c_date_create=date("y/m/d");
		$ckeck_register=fetch_one("select c_email from tbl_customer where c_email='$c_email' ");
		if($ckeck_register>0){
			echo "<script>alert('email đã tồn tại')</script>";	
		}
		else{
			
			execute("insert into tbl_customer(c_fullname,c_phone,c_password,c_email,c_date_create) values('$c_fullname',$c_phone,'$c_password','$c_email','$c_date_create')");
			//echo "insert into tbl_customer(c_fullname,c_phone,c_password,c_email,c_date_create) values('$c_fullname',$c_phone,'$c_password','$c_email','$c_date_create";
			echo "<script>alert('Đăng ký thành công')</script>";
			//header("location:index.php?controller=login");
				
		}
		
	}
	include_once("view/view_register.php");
?>