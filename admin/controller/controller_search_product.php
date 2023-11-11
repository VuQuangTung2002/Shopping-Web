<?php
if (isset($_REQUEST['ok'])) {
    $search_product = addslashes($_POST['search_product']);
    if (empty($search_product)) {
        echo "Không có kết quả";
    } else {
		$check=fetch_one("select count(*) as tong from tbl_product where c_name like '%$search_product%' or c_masp like '%$search_product%'");
		//echo $check["tong"];
				if($check>0 && $search_product !=""){
					echo "Có ".$check['tong']." Kết quả tìm thấy <b>$search_product</b>";	
					// Phan dung vong lap while show du lieu
					$record_perpage = 10;
					//tong so ban ghi
					$total_record = fetch_one("select * from tbl_product where c_name like '%$search_product%' or c_masp like '%$search_product%'");
					//lay tong so trang
					$num_page = ceil($total_record["total"]/$record_perpage);
					$page = 1;
					//lay trang hien tai
					$page = isset($_GET["p"]) ? $_GET["p"]:0;
					$page = $page <= 0 ? 0: $page-1;
					//cac ban ghi hien thi tren trang do
					$from = $page * $record_perpage;
					//thuc hien truy van khi da co cac thong tin o tren
					$arr_product = fetch("select * from tbl_product where c_name like '%$search_product%' or c_masp like '%$search_product%' limit $from,$record_perpage");
					
					include_once("view/view_search_product.php");
				}
				else
				{
					echo "Không tìm thấy kết quả";	
				}
		}
        
}
	//$search_product=$_GET["search_product"];
	
	
?>