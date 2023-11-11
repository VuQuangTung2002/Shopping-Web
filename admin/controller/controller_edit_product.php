<?php
	$act=isset($_GET["act"])?$_GET["act"]:"";
	switch($act){
		case'edit':
			$id=isset($_GET["id"])?$_GET["id"]:0;
			$edit_prodcut=fetch_one("select * from tbl_product where pk_product_id=$id");
			$form_control="index.php?controller=edit_product&act=do_edit&id=$id";
			break;
		case 'do_edit':
		
			$id=isset($_GET["id"])?$_GET["id"]:0;
			$c_name = htmlspecialchars($_POST["c_name"],ENT_QUOTES);
			//$c_masp = htmlspecialchars($_POST["c_masp"],ENT_QUOTES);
			$fk_category_product = htmlspecialchars($_POST["fk_category_product"],ENT_QUOTES);	
			$c_color = htmlspecialchars($_POST["c_color"],ENT_QUOTES);
			$c_nguongoc = htmlspecialchars($_POST["c_nguongoc"],ENT_QUOTES);
			$c_chatlieu = htmlspecialchars($_POST["c_chatlieu"],ENT_QUOTES);
			$c_price = htmlspecialchars($_POST["c_price"],ENT_QUOTES);
			$c_description = htmlspecialchars($_POST["c_desription"],ENT_QUOTES);
			$c_noidung = htmlspecialchars($_POST["c_noidung"],ENT_QUOTES);
			$c_sanphamnoibat = isset($_POST["c_sanphamnoibat"]) ? 1:0;
			$c_img = "";
			$c_sex=$_POST["c_sex"];
			$c_date_created=date("y/m/d");
			execute("update tbl_product set c_name='$c_name',fk_category_product_id=$fk_category_product,c_color='$c_color',c_nguongoc='$c_nguongoc',c_chatlieu='$c_chatlieu',c_price=$c_price,c_description='$c_description',c_noidung='$c_noidung',c_date_created='$c_date_created',c_sex='$c_sex',c_sanphamnoibat='$c_sanphamnoibat' where pk_product_id=$id");
			
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
				execute("update tbl_product set c_img='$c_img' where pk_product_id=$id");
			}
			
			header("location:index.php?controller=product");
							
		
	}
	include_once("view/view_edit_product.php");
?>