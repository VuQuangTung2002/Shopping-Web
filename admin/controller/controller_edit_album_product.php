<?php
	$act=isset($_GET["act"])?$_GET["act"]:"";
	switch($act){
		case'edit':
			$id=isset($_GET["id"])?$_GET["id"]:0;
			$arr_album_img=fetch_one("select * from tbl_album_product where pk_album_product_id=$id");
			$form_control="index.php?controller=edit_album_product&act=do_edit&id=$id";
			break;	
		case'do_edit':
			$id=isset($_GET["id"])?$_GET["id"]:0;
			$c_img="";
			$pk_product_id=htmlspecialchars($_POST["pk_product_id"],ENT_QUOTES);
			$status=isset($_POST["status"])?1:0;
			execute("update tbl_album_product set fk_product_id=$pk_product_id,status=$status where pk_album_product_id=$id");
			if(isset($_FILES["c_img"]) && $_FILES["c_img"]["name"] != ""){
					//lay ten file
					$img_name = $_FILES["c_img"]["name"];
					//lay dung luong file
					$img_size = $_FILES["c_img"]["size"];
					//lay duong dan upload tam thoi
					$img_tmp_name = $_FILES["c_img"]["tmp_name"];
					$c_img = "upload/anhsanpham/".time().$img_name;
					//thuc hien di chuyen file tu thu muc tmp vao thu muc chi dinh tren website
					move_uploaded_file($img_tmp_name, "../".$c_img);
					execute("update tbl_album_product set c_img='$c_img' where pk_album_product_id=$id");
				}
				//---------------
				header("location:index.php?controller=album_product");
			
	}
	include_once("view/view_edit_album_product.php");
?>