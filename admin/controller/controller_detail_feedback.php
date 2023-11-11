<?php
	$id=isset($_GET["id"])?$_GET["id"]:0;
	$chitietfeedback=fetch_one("select * from tbl_feedback where pk_feedback_id=$id");
	include_once("view/view_detail_feedback.php");
?>