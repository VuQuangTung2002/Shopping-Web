<?php
	$act=isset($_GET["act"])?$_GET["act"]:"";
	switch($act){
		case'add':
			$form_control="index.php?controller=add_album_product&act=do_add";
			break;
		case'do_add':
			$pk_product_id=htmlspecialchars($_POST["pk_product_id"],ENT_QUOTES);
			$status=isset($_POST["status"])?1:0;
			$c_img="";
			if(isset($_FILES["c_img"]) && $_FILES["c_img"]["name"] != ""){
					//lay ten file
					$file  = $_FILES['c_img'];
					//$img_name = $_FILES["link_img"]["name"];
					//lay dung luong file
					$img_size = $_FILES["c_img"]["size"];
					$count= count($file["name"]);
					for($i=0; $i<=$count-1; $i++) {
						$img_tmp_name = $_FILES["c_img"]["tmp_name"][$i];
						$c_img="upload/anhsanpham/".time().$_FILES['c_img']['name'][$i];
						move_uploaded_file($img_tmp_name,"../".$c_img);
						
					execute("insert into tbl_album_product(fk_product_id,status,c_img) values($pk_product_id,$status,'$c_img')");
					header("location:index.php?controller=album_product");	
						
					}
					
					
					
				}
				
	}
	include_once("view/view_add_album_product.php");
?>