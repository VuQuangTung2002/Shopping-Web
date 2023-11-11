<?php
//so ban ghi tren 1 trang
	$record_perpage = 10;
	//tong so ban ghi
	$total_record = fetch_one("select count(*) as total from tbl_feedback");
	//lay tong so trang
	$num_page = ceil($total_record["total"]/$record_perpage);
	$page = 1;
	//lay trang hien tai
	$page = isset($_GET["p"]) ? $_GET["p"]:0;
	$page = $page <= 0 ? 0: $page-1;
	//cac ban ghi hien thi tren trang do
	$from = $page * $record_perpage;
	//thuc hien truy van khi da co cac thong tin o tren
	$arr_feedback = fetch("select * from tbl_feedback order by pk_feedback_id desc limit $from,$record_perpage");
	//$arr_feedback=fetch("select * from tbl_feedback order by pk_feedback_id desc");
	include_once("view/view_feedback.php");
?>