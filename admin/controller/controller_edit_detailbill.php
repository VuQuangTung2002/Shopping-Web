<?php
		$act=isset($_GET["act"])?$_GET["act"]:"";
	switch($act){
		case'edit':
			$id=isset($_GET["id"])&&is_numeric($_GET["id"]) ?$_GET["id"]:0;
			$editbill=fetch_one("select * from tbl_order where pk_order_id=$id");
			$form_control="index.php?controller=edit_detailbill&act=do_edit&id=$id";
			break;
		case'do_edit':
			$id=isset($_GET["id"])&&is_numeric($_GET["id"]) ?$_GET["id"]:0;
			$c_status = htmlspecialchars($_POST["c_status"],ENT_QUOTES);
			
			execute("update tbl_order set c_status=$c_status where pk_order_id=$id");
			//dung de lay fk_transaction_id de chuyen huong sang controller=detail_bill&id=pk_transaction_id
			$bill_id=fetch_one("select fk_transaction_id from tbl_order where pk_order_id=$id");
			$fk_transaction_id=$bill_id["fk_transaction_id"];
			header("location:index.php?controller=detail_bill&id=$fk_transaction_id");
	}
	include_once("view/view_edit_detailbill.php");
?>