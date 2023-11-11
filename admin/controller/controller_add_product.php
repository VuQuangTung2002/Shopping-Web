<?php
	$act=isset($_GET["act"])?$_GET["act"]:"";
	switch($act){
		case'add':
			$form_control="index.php?controller=add_product&act=do_add";
			break;
		case'do_add':
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$c_name = htmlspecialchars($_POST["c_name"],ENT_QUOTES);
				$c_masp = htmlspecialchars($_POST["c_masp"],ENT_QUOTES);
				$fk_category_product = htmlspecialchars($_POST["fk_category_product"],ENT_QUOTES);	
				$c_color = htmlspecialchars($_POST["c_color"],ENT_QUOTES);
				$c_nguongoc = htmlspecialchars($_POST["c_nguongoc"],ENT_QUOTES);
				$c_chatlieu = htmlspecialchars($_POST["c_chatlieu"],ENT_QUOTES);
				$c_price = htmlspecialchars($_POST["c_price"],ENT_QUOTES);
				$c_desription = htmlspecialchars($_POST["c_desription"],ENT_QUOTES);
				$c_noidung = htmlspecialchars($_POST["c_noidung"],ENT_QUOTES);
				$c_sanphamnoibat = isset($_POST["c_sanphamnoibat"]) ? 1:0;
				$c_img = "";
				$link_img="";
				$c_sex=$_POST["c_sex"];
				$c_date_created=date("y/m/d");

	 
	 			//if(isset($_FILES["link_img"]) && $_FILES["link_img"]["name"] != ""){
					//lay ten file
					//$file  = $_FILES['link_img'];
					//$img_name = $_FILES["link_img"]["name"];
					//lay dung luong file
					//$img_size = $_FILES["link_img"]["size"];
					//$count= count($file["name"]);
					
					//echo "insert into tbl_product(c_name,c_masp,fk_category_product_id,c_color,c_nguongoc,c_chatlieu,c_price,c_description,c_noidung,c_img,c_date_created,c_sex,link_img) values('$c_name','$c_masp',$fk_category_product,'$c_color','$c_nguongoc','$c_chatlieu',$c_price,'$c_desription','$c_noidung','$c_img','$c_date_created','$c_sex','$link_img')";
					
				//}

				if(isset($_FILES["c_img"]) && $_FILES["c_img"]["name"] != ""){
					//lay ten file
					$img_name = $_FILES["c_img"]["name"];
					//lay dung luong file
					$img_size = $_FILES["c_img"]["size"];
					//lay duong dan upload tam thoi
					$img_tmp_name = $_FILES["c_img"]["tmp_name"];
					$c_img = "upload/anhsanpham/".time().$img_name;
					//thuc hien di chuyen file tu thu muc tmp vao thu muc chi dinh tren website
					move_uploaded_file($img_tmp_name, "../".$c_img);
				}
				//kiem tra xem máp có tồn tại hay không trước khi submit
				$ckeck=fetch_one("select * from tbl_product where c_masp='$c_masp'");
				if($ckeck>0){
					echo "<div style='text-align:center;color:RED;font-size:25px'>Mã sản phẩm: ".$c_masp." đã tồn tại</div>";
					$form_control="index.php?controller=add_product&act=do_add";
				}
				else{
					execute("insert into tbl_product(c_name,c_masp,fk_category_product_id,c_color,c_nguongoc,c_chatlieu,c_price,c_description,c_noidung,c_img,c_date_created,c_sex,c_sanphamnoibat) values('$c_name','$c_masp',$fk_category_product,'$c_color','$c_nguongoc','$c_chatlieu',$c_price,'$c_desription','$c_noidung','$c_img','$c_date_created','$c_sex',$c_sanphamnoibat)");
					header("location:index.php?controller=product");
					
					
				}
			}	
		
	}
	//
	include_once("view/view_add_product.php");
?>