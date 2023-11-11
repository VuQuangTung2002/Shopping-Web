<?php 
	$id=isset($_GET["id"])?$_GET["id"]:0;
	$detail_product=fetch_one("select * from tbl_product where pk_product_id=$id");
	$sanphamcungloai=fetch("SELECT * FROM tbl_category_product,tbl_product WHERE tbl_category_product.pk_category_product_id=tbl_product.fk_category_product_id AND fk_category_product_id=(SELECT fk_category_product_id FROM tbl_product WHERE pk_product_id=$id) order by pk_category_product_id limit 0,4");
	$arr_category_product=fetch("select * from tbl_category_product where c_parent_id=0");
	include_once("view/view_detail_product.php");
?>