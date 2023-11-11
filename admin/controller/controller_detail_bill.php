<?php
	$id=isset($_GET["id"])?$_GET["id"]:0;
	$arr_detailbill=fetch("select * from tbl_order where fk_transaction_id=$id");
	include_once("view/view_detail_bill.php");
?>