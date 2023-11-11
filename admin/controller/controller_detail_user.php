<?php 
	$id=isset($_GET["id"])?$_GET["id"]:0;
	$detai_user=fetch_one("select * from tbl_user where pk_user_id=$id");
	include_once("view/view_detail_user.php");
?>