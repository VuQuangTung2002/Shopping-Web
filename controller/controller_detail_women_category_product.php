<?php
	//so ban ghi tren 1 trang
	$record_perpage =6;
	//tong so ban ghi
	$total_record = fetch_one("select count(*) as total from tbl_product where c_sex='Nữ'");
	//lay tong so trang
	$num_page = ceil($total_record["total"]/$record_perpage);
	$page = 1;
	//lay trang hien tai
	$page = isset($_GET["p"]) ? $_GET["p"]:0;
	$page = $page <= 0 ? 0: $page-1;
	//cac ban ghi hien thi tren trang do
	$from = $page * $record_perpage;
	//thuc hien truy van khi da co cac thong tin o tren
	//$arr_listuser = fetch("select * from tbl_user order by pk_user_id desc limit $from,$record_perpage");
	//$arr_listuser=fetch("select * from tbl_user");
	$arr_detail_women_category_product=fetch("select * from tbl_product where c_sex='Nữ' order by pk_product_id desc limit $from,$record_perpage");
	$arr_category_product=fetch("select * from tbl_category_product where c_parent_id=0");
	$arr_sanphamnoibat=fetch("select *  from tbl_product where c_sanphamnoibat=1 order by pk_product_id desc limit 0,4");
	include_once("view/view_detail_women_category_product.php");
?>