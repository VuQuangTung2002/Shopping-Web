<?php
	//$arr_order=fetch_one("SELECT * FROM `tbl_order` WHERE c_status=1 ORDER BY c_number DESC");
	$arr_sanphambanchay=fetch("select *, sum(c_number) AS c_soluotmua from tbl_order,tbl_product where tbl_order.fk_product_id=tbl_product.pk_product_id AND fk_product_id in (select distinct(fk_product_id) from tbl_order) GROUP BY(fk_product_id)");
	include_once("view/view_sanphambanchay.php");
	
	//select c_name, sum(c_number) from tbl_order where fk_product_id in (select distinct(fk_product_id) from tbl_order)
?>