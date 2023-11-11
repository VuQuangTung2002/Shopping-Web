<?php
	$arr_sanphamnoibat=fetch("select * from tbl_product where c_sanphamnoibat=1 order by pk_product_id desc limit 0,4");
	include_once("view/view_sanphamnoibat.php");
	
?>