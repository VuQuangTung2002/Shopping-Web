<?php
	$act=isset($_GET["act"])?$_GET["act"]:"";
	switch($act){
			case'delete':
				$id=isset($_GET["id"])?$_GET["id"]:0;
				execute("delete from tbl_category_product where pk_category_product_id=$id");
				
				
				//trường hợp xóa danh mục cha sẽ xóa các parent_id 
				$del=fetch_one("select pk_category_product_id,c_parent_id from tbl_category_product where c_parent_id=$id");
				if($del["c_parent_id"]==$id){
					$delete=fetch_one("select pk_product_id from tbl_product where fk_category_product_id=".$del["pk_category_product_id"]);
				
				execute("delete from tbl_album_product where fk_product_id=".$delete["pk_product_id"]);
				execute("delete from tbl_product where fk_category_product_id=".$del["pk_category_product_id"]);
				execute("delete from tbl_category_product where c_parent_id=$id");
				}
				// trường hợp xóa danh mục con sẽ xóa sản phẩm liên quan
				$delete2=fetch_one("select pk_product_id,fk_category_product_id from tbl_product where fk_category_product_id=$id");
				if($delete2["fk_category_product_id"]==$id){
					execute("delete from tbl_album_product where fk_product_id=".$delete2["pk_product_id"]);
				execute("delete from tbl_product where fk_category_product_id=$id");
					
				}
				
				header("location:index.php?controller=category_product");
				
				break;
	}
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(!isset($_POST["category_product_id"])){
			echo"<div class='col-lg-4 col-lg-offset-5' style='color:RED;font-size:20px'>Chọn Danh Mục Phẩm Muốn Xóa!</div>";
		}
		else{
			$category_product_id=$_POST["category_product_id"];
			while(list($key,$val)=@each($category_product_id)){
				 //echo "$key - $val <br>";
				execute("delete from tbl_category_product where pk_category_product_id=$val");
				//trường hợp xóa danh mục cha sẽ xóa các parent_id 
				$delcheck=fetch_one("select pk_category_product_id,c_parent_id from tbl_category_product where c_parent_id=$val");
				if($delcheck["c_parent_id"]==$val){
					$deletecheck=fetch_one("select pk_product_id from tbl_product where fk_category_product_id=".$delcheck["pk_category_product_id"]);
				
				execute("delete from tbl_album_product where fk_product_id=".$deletecheck["pk_product_id"]);
				execute("delete from tbl_product where fk_category_product_id=".$delcheck["pk_category_product_id"]);
				execute("delete from tbl_category_product where c_parent_id=$val");
				}
				
				// trường hợp xóa danh mục con sẽ xóa sản phẩm liên quan
				$deletecheck2=fetch_one("select pk_product_id,fk_category_product_id from tbl_product where fk_category_product_id=$val");
				if($deletecheck2["fk_category_product_id"]==$val){
					execute("delete from tbl_album_product where fk_product_id=".$deletecheck2["pk_product_id"]);
				execute("delete from tbl_product where fk_category_product_id=$val");
					
				}
				//execute("delete from tbl_category_product where c_parent_id=$val");
				//execute("delete from tbl_product where fk_category_product_id=$val");
				//execute("delete from tbl_album_product where fk_product_id=$val");
				header("location:index.php?controller=category_product");	
			}
		
		}
	}
	//=========================
	//controller
	//so ban ghi tren 1 trang
	$record_perpage = 10;
	//tong so ban ghi
	$total_record = fetch_one("select count(*) as total from tbl_category_product");
	//lay tong so trang
	$num_page = ceil($total_record["total"]/$record_perpage);
	$page = 1;
	//lay trang hien tai
	$page = isset($_GET["p"]) ? $_GET["p"]:0;
	$page = $page <= 0 ? 0: $page-1;
	//cac ban ghi hien thi tren trang do
	$from = $page * $record_perpage;
	//thuc hien truy van khi da co cac thong tin o tren
	$arr_category_prodcut = fetch("select * from tbl_category_product order by pk_category_product_id desc limit $from,$record_perpage");
	//$arr_category=fetch("select * from tbl_category_product where parent_id =0");
	//$id= $arr_category["parent_id"];
	//$arr_category1=fetch("select * from tbl_category_product where parent_id=$id");
	//$arr_category_prodcut=fetch("select * from tbl_category_product");
	include_once("view/view_category_product.php");
?>