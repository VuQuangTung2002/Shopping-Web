<?php
	$act=isset($_GET["act"])?$_GET["act"]:"";
	if($act=="delete"){
		$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
		execute("delete from tbl_user where pk_user_id=$id");
		header("location:index.php?controller=user");	
	}
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$user_id=$_POST["user_id"];
		while(list($key,$val)=@each($user_id)){
			 //echo "$key - $val <br>";
		execute("delete from tbl_user where pk_user_id=$val");
		header("location:index.php?controller=user");
		}
	}
	//=========================
	//controller
	//so ban ghi tren 1 trang
	$record_perpage = 5;
	//tong so ban ghi
	$total_record = fetch_one("select count(*) as total from tbl_user");
	//lay tong so trang
	$num_page = ceil($total_record["total"]/$record_perpage);
	$page = 1;
	//lay trang hien tai
	$page = isset($_GET["p"]) ? $_GET["p"]:0;
	$page = $page <= 0 ? 0: $page-1;
	//cac ban ghi hien thi tren trang do
	$from = $page * $record_perpage;
	//thuc hien truy van khi da co cac thong tin o tren
	$arr_listuser = fetch("select * from tbl_user order by pk_user_id desc limit $from,$record_perpage");
	//$arr_listuser=fetch("select * from tbl_user");
	include_once("view/view_user.php");
?>	