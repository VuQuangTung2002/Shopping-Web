<?php
	if(isset($_SESSION["dangnhap"])){
		if(cart_number()>0)
		echo '<a href="index.php?controller=cart&act=bill" class="hvr-skew-backward">Đặt Hàng</a>';
		//include_once("view/view_logout.php");	
	}
	else{
		echo '<a href="index.php?controller=login" class="hvr-skew-backward">Đăng nhập thanh toán</a>';		
	}
?>
