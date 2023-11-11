<?php
	$id=isset($_GET["id"])?$_GET["id"]:0;
	$arr_lichsumuahang=fetch("SELECT * FROM tbl_customer,tbl_transaction,tbl_order,tbl_product WHERE tbl_customer.pk_customer_id=tbl_transaction.fk_customer_id AND tbl_transaction.pk_transaction_id=tbl_order.fk_transaction_id AND tbl_order.fk_product_id=tbl_product.pk_product_id AND pk_customer_id=$id");
	include_once("view/view_chitiet_muahang.php");
?>