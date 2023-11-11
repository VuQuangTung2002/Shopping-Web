<?php
	$act=isset($_GET["act"])?$_GET["act"]:"";
	switch($act){
		case 'edit':
			$id=isset($_GET["id"])?$_GET["id"]:0;
			$avc=fetch_one("select * from tbl_user where pk_user_id=$id");
			$form_control="index.php?controller=edit_detail_personal&act=do_edit&id=$id";
			break;
		case 'do_edit':
			if($_SERVER["REQUEST_METHOD"] == "POST"){
					$id=isset($_GET["id"])?$_GET["id"]:0;
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
						execute("update tbl_user set c_fullname='$c_fullname',c_address='$c_address',c_phone='$c_phone',c_password='$c_password',c_email='$c_email',c_sex='$c_sex',c_birthday='$c_birthday',c_date_created='$c_date_created' where pk_user_id=$id");
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
								execute("update tbl_user set c_img='$c_img' where pk_user_id=$id");
							}
							header("location:index.php?controller=detail_personal&id=$id");	
						
						
					
				}	
	}
	include_once("view/view_edit_detail_personal.php");
?>