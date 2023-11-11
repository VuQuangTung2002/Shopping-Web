<?php

	$arr_product_men=fetch("select * from tbl_product where c_sex='Nam' order by pk_product_id desc limit 0,8");
	$arr_product_women=fetch("select * from tbl_product where c_sex='Nữ' order by pk_product_id desc limit 0,8");
	include_once("view/view_category_product.php");
?>