<?php 
	//duyet tat ca cac ban ghi, tra ve array
	function fetch($sql){
		global $db;
		$result=mysqli_query($db,$sql);
		$arr=array();
		//duyet cac ban ghi
		while($rows=mysqli_fetch_array($result))
		$arr[]=$rows;
		return $arr;
	}
	//lay thong tin cua 1 ban ghi
	function fetch_one($sql)
	{
		global $db;
		$query=mysqli_query($db,$sql);
		return mysqli_fetch_array($query);	
	}
	function execute($sql){
		global $db;
		mysqli_query($db,$sql);	
	}
	function get_insert_id(){
		global $db;
		return mysqli_insert_id($db);	
	}
?>