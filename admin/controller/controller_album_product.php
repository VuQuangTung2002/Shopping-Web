<?php 
	$act=isset($_GET["act"])?$_GET["act"]:"";
	if($act=='delete'){
		$id=isset($_GET["id"])?$_GET["id"]:0;
		execute("delete from tbl_album_product where pk_album_product_id=$id");
		header("location:index.php?controller=album_product");	
	}
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(!isset($_POST["pk_album_product_id"])){
			echo"<div class='col-lg-3 col-lg-offset-5' style='color:RED;font-size:20px'>Chọn Ảnh Muốn Xóa!</div>";
		}
		else{
			$pk_album_product_id=$_POST["pk_album_product_id"];
			while(list($key,$val)=@each($pk_album_product_id)){
					 //echo "$key - $val <br>";
				execute("delete from tbl_album_product where pk_album_product_id=$val");
				header("location:index.php?controller=album_product");
			}
		}
		
	}
	//=========================
	//controller
	//so ban ghi tren 1 trang
	$record_perpage = 15;
	//tong so ban ghi
	$total_record = fetch_one("select count(*) as total from tbl_album_product");
	//lay tong so trang
	$num_page = ceil($total_record["total"]/$record_perpage);
	$page = 1;
	//lay trang hien tai
	$page = isset($_GET["p"]) ? $_GET["p"]:0;
	$page = $page <= 0 ? 0: $page-1;
	//cac ban ghi hien thi tren trang do
	$from = $page * $record_perpage;
	//thuc hien truy van khi da co cac thong tin o tren
	$album_img = fetch("select * from tbl_album_product order by pk_album_product_id desc limit $from,$record_perpage");
	//$album_img=fetch("select * from tbl_album_product order by pk_album_product_id desc");
	include_once("view/view_album_product.php");
?>