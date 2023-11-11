<?php
	$arr_tagsearch=fetch("select * from tbl_category_product where c_parent_id>0");
	include_once("view/view_tagsearch.php");
?>