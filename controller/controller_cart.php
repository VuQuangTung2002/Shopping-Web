<?php 
	include_once("controller/cart.php");
	$act=isset($_GET["act"])?$_GET["act"]:"";
	switch($act){
		case'add':
			$id=isset($_GET["id"])?$_GET["id"]:0;
			$product=fetch_one("select * from tbl_product where pk_product_id=$id");
			cart_add($product,$id);
			header("location:index.php?controller=cart");
			break;
		case 'delete':
			$id=isset($_GET["id"])?$_GET["id"]:0;
			cart_delete($id);
			header("location:index.php?controller=cart");
			break;	
		case 'destroy':
			cart_destroy();
			header("location:index.php?controller=cart");
			break;
		case 'bill':
			if(isset($_SESSION["pk_customer_id"]))
			$c_date_create=date("y/m/d");
			$pk_customer_id=$_SESSION["pk_customer_id"];
			execute("insert into tbl_transaction (fk_customer_id,c_date_create) values($pk_customer_id,'$c_date_create')");
			//$insert_id=fetch_one("select pk_transaction_id tbl_transaction order by pk_transaction_id desc limit 0,1");
			//$fk_transaction_id=$insert_id["pk_transaction_id"];
			$insert_id=fetch_one("select pk_transaction_id from tbl_transaction order by pk_transaction_id desc limit 0,1");
			$fk_transaction_id=$insert_id["pk_transaction_id"];
			//echo $insert_id["pk_transaction_id"];
			foreach($_SESSION["cart"] as $product)
			{
				
				$c_number=$product["number"];
				$c_price=$product["c_price"];
				
				$fk_product_id=$product["pk_product_id"];
	
			
			execute("insert into tbl_order(fk_transaction_id,fk_product_id,c_number,c_price,c_date_create) values($fk_transaction_id,$fk_product_id,$c_number,$c_price,'$c_date_create')");
			//echo "insert into tbl_order(fk_transaction_id,fk_product_id,c_number,c_price,c_date_create) values($fk_transaction_id,$fk_product_id,$c_number,$c_price,'$c_date_create')";	
			}
			//huy gio hang
			cart_destroy();
			
			header("location:index.php?controller=cart");
			
			break;
	}
//cập nhật số lượng trong giỏ hàng
	if(isset($_GET["id"])&&isset($_GET["number"])){
		//echo $_GET["id"]."<>".$_GET["number"];
//		die("staop");
		$product=fetch_one("select * from tbl_product where pk_product_id=".$_GET["id"]);
			
		if($_GET["number"]>0){
				$_SESSION["cart"][$_GET["id"]]=array(
				 'pk_product_id' => $_GET["id"],
					'c_name' => $product['c_name'],
					'c_img' => $product['c_img'],
					'number' => $_GET["number"],
					'c_price' => $product['c_price']
				);
				
				
		}
		else{
			cart_delete($_GET["id"]);	
		}
		
	}
	
	
	include_once("view/view_cart.php");
?>
