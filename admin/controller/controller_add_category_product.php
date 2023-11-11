<?php
	$act=isset($_GET["act"])?$_GET["act"]:"";
	switch($act){
		case'add':
			$form_control="index.php?controller=add_category_product&act=do_add";
			break;
		case 'do_add':
			$c_name = htmlspecialchars($_POST["c_name"],ENT_QUOTES);
			$pk_category_product=isset($_POST["pk_category_product"])?$_POST["pk_category_product"]:0;
			$pk_category_product=htmlspecialchars($pk_category_product,ENT_QUOTES);
			execute("insert into tbl_category_product(c_name,c_parent_id) values('$c_name',$pk_category_product)");
			//echo "insert into tbl_category_product(c_name,c_parent_id) values('$c_name',$pk_category_product)";
			header("location:index.php?controller=category_product");
	}
	include_once("view/view_add_category_product.php");
?>