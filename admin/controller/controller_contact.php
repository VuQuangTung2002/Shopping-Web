<?php
/*	$act=isset($_GET["act"])?$_GET["act"]:"";
	$id=isset($_GET["id"])?$_GET["id"]:0;
	switch($act){
		case'delete':
			execute("delete from tbl_contact where pk_contact_id=$id");
			header("location:index.php?controller=contact");
			break;
	}*/
	$arr_contact=fetch("select * from tbl_contact");
	include_once("view/view_contact.php");
?>