<?php 
	$act=isset($_GET["act"])?$_GET["act"]:"";
	switch($act){
		case'edit':
			$id=isset($_GET["id"])&&is_numeric($_GET["id"]) ?$_GET["id"]:0;
			$editcategory=fetch_one("select * from tbl_category_product where pk_category_product_id=$id");
			$form_control="index.php?controller=edit_category_product&act=do_edit&id=$id";
			break;
		case'do_edit':
			$id=isset($_GET["id"])&&is_numeric($_GET["id"]) ?$_GET["id"]:0;
			$c_name = htmlspecialchars($_POST["c_name"],ENT_QUOTES);
			$pk_category_product=isset($_POST["pk_category_product"])?$_POST["pk_category_product"]:0;
			$pk_category_product=htmlspecialchars($pk_category_product,ENT_QUOTES);
			execute("update tbl_category_product set c_name='$c_name',c_parent_id=$pk_category_product where pk_category_product_id=$id");
			header("location:index.php?controller=category_product");
	}
	include_once("view/view_edit_category_product.php");
?>