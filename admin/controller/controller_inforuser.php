<?php
	if(isset($_SESSION['pk_user_id']) && $_SESSION['pk_user_id']){
		 
		$infor=fetch_one("select * from tbl_user where pk_user_id=".$_SESSION['pk_user_id']);
								 
	}
	include_once("view/view_inforuser.php");
?>