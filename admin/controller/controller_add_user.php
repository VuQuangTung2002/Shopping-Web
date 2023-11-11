<?php
	$act=isset($_GET["act"])?$_GET["act"]:"";
	switch($act){
		case'add':
			$form_control="index.php?controller=add_user&act=do_add";
			break;
		case'do_add':
			if($_SERVER["REQUEST_METHOD"] == "POST"){
			$c_username = htmlspecialchars($_POST["c_username"],ENT_QUOTES);
			$c_fullname= htmlspecialchars($_POST["c_fullname"],ENT_QUOTES);
			$c_password = htmlspecialchars($_POST["c_password"],ENT_QUOTES);
			$c_birthday= htmlspecialchars($_POST["c_birthday"],ENT_QUOTES);
			$c_address= htmlspecialchars($_POST["c_address"],ENT_QUOTES);
			$c_phone= htmlspecialchars($_POST["c_phone"],ENT_QUOTES);
			$c_date_created=date("y/m/d");
			$c_password = md5($c_password);
			$c_email= htmlspecialchars($_POST["c_email"],ENT_QUOTES);
				$c_sex = $_POST["c_sex"];
				$c_img = "";
				if(isset($_FILES["c_img"]) && $_FILES["c_img"]["name"] != ""){
					//lay ten file
					$img_name = $_FILES["c_img"]["name"];
					//lay dung luong file
					$img_size = $_FILES["c_img"]["size"];
					//lay duong dan upload tam thoi
					$img_tmp_name = $_FILES["c_img"]["tmp_name"];
					$c_img = "upload/anhdaidien/".time().$img_name;
					//thuc hien di chuyen file tu thu muc tmp vao thu muc chi dinh tren website
					move_uploaded_file($img_tmp_name, "../".$c_img);
				}
				$ckeck=fetch_one("select * from tbl_user where c_username='$c_username'");
				if($ckeck>0){
					echo "Tên tài khoản của bạn đã tồn tại";
					$form_control="index.php?controller=add_user&act=do_add";	
					}
				else{
						
					execute("insert into tbl_user(c_username,c_fullname,c_password,c_email,c_phone,c_address,c_img,c_sex,c_birthday,c_date_created) values('$c_username','$c_fullname','$c_password','$c_email','$c_phone','$c_address','$c_img','$c_sex','$c_birthday','$c_date_created')");	
					header("location:index.php?controller=user");
							
					
						}
				
				
				
				
			}
		
	}
	include_once("view/view_add_user.php");
?>