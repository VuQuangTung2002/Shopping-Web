<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$c_fullname=$_POST["c_fullname"];
		$c_email=$_POST["c_email"];
		$c_phone=$_POST["c_phone"];
		$c_message=$_POST["c_message"];
		$c_date_create=date("Y/m/d");
		execute("insert into tbl_feedback(c_fullname,c_email,c_phone,c_message,c_date_create) values('$c_fullname','$c_email','$c_phone','$c_message','$c_date_create')");
		
		header("location:index.php?controller=contact");
		
		
	}
	$contact=fetch_one("select * from tbl_contact");
	
	include_once("view/view_contact.php");
?>