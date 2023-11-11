<?php
		$act=isset($_GET["act"])?$_GET["act"]:"";
		if($act=="delete"){
			$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			execute("delete from tbl_product where pk_product_id=$id");
			execute("delete from tbl_album_product where fk_product_id=$id");
			header("location:index.php?controller=product");	
		}

		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(!isset($_POST["product_id"])){
				echo"<div class='col-lg-4 col-lg-offset-5' style='color:RED;font-size:20px'>Chọn Sản Phẩm Muốn Xóa!</div>";	
			}
			else{
				$product_id=$_POST["product_id"];
				while(list($key,$val)=@each($product_id)){
					 //echo "$key - $val <br>";
					execute("delete from tbl_product where pk_product_id=$val");
					execute("delete from tbl_album_product where fk_product_id=$val");
					//execute("delete from tbl_product where c_parent_id=$val");
					header("location:index.php?controller=product");
				}
			
			}
		}
		
		$record_perpage = 10;
		//tong so ban ghi
		$total_record = fetch_one("select count(*) as total from tbl_product");
		//lay tong so trang
		$num_page = ceil($total_record["total"]/$record_perpage);
		$page = 1;
		//lay trang hien tai
		$page = isset($_GET["p"]) ? $_GET["p"]:0;
		$page = $page <= 0 ? 0: $page-1;
		//cac ban ghi hien thi tren trang do
		$from = $page * $record_perpage;
		//thuc hien truy van khi da co cac thong tin o tren
		$arr_product = fetch("select * from tbl_product order by pk_product_id desc limit $from,$record_perpage");
	//$arr_product=fetch("select * from tbl_product");
	include_once("view/view_product.php");
?>