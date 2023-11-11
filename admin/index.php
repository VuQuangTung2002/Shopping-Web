<?php ob_start();?>
<?php
 
	//khoi dong sessoin
	session_start();
	//load config
	include_once("../config.php");
	//load model
	include_once("model/model.php");
	include_once("controller/timeago.php");
	//-----
	$controller=isset($_GET["controller"]) ? $_GET["controller"] : "";
	// thường thì phương thúc $_GET["controller"] sẽ gán vào 1 biến để nhập , bằng cách này t gán trực tiếp nó đến các trang có index.php?controller=user.. .. . .và $controller=user thay vào các $load_controller
	$load_controller="";
	
	if($controller == "login")
		include "controller/controller_login.php";
	else if($controller == "logout")
		//huy session username
		unset($_SESSION["username"]);
	else
		$load_controller = "controller/controller_$controller.php";
	if(isset($_SESSION["username"])==true ){
		
		include_once("view/view_layout.php");

	}
	else{
		//thus hien chuc nang dang nhap
		include_once("view/view_login.php");	
	}
	
	
	
?>
<?php ob_end_flush();?>