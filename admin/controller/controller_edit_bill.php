<?php
		$act=isset($_GET["act"])?$_GET["act"]:"";
	switch($act){
		case'edit':
			$id=isset($_GET["id"])&&is_numeric($_GET["id"]) ?$_GET["id"]:0;
			$bill=fetch_one("select * from tbl_transaction where pk_transaction_id=$id");
			$form_control="index.php?controller=edit_bill&act=do_edit&id=$id";
			break;
		case'do_edit':
			$id=isset($_GET["id"])&&is_numeric($_GET["id"]) ?$_GET["id"]:0;
			$c_status = htmlspecialchars($_POST["c_status"],ENT_QUOTES);
			
			execute("update tbl_transaction set c_status=$c_status where pk_transaction_id=$id");
			//echo "update tbl_transaction set c_status=$c_status where pk_transaction_id=$id";
			header("location:index.php?controller=bill");
	}


	include_once("view/view_edit_bill.php");
?>