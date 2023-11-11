<?php 
	session_start();
	//loadr cart
	include_once("controller/cart.php");
	//load config
	include_once("config.php");
	//load model 
	include_once("admin/model/model.php");
	//include_once("function/remove_unicode.php");
	$controller=isset($_GET["controller"]) ?$_GET["controller"]:"";
		
	 if($controller=="logout"){
		unset($_SESSION["dangnhap"]);
		unset($_SESSION["pk_customer_id"]);
		header("location:index.php");	
	}
	$load_controller="controller/controller_main.php";
	
	if(file_exists("controller/controller_".$controller.".php"))
		$load_controller="controller/controller_".$controller.".php";

	include_once("view/view_layout.php");
?>