<?php
	
   $key = isset($_GET["key"]) ? $_GET["key"] : "";
    if (empty($key)) {
        echo "Không tìm thấy kết quả";
    } else {
		$check=fetch_one("select count(*) as total from tbl_product where c_name like '%$key%' or c_price like '%$key%'");
		
		//echo $check["tong"];
				if($check >0){
					//echo "Có ".$check['total']." Kết quả tìm thấy <b>$search</b>";	
					// Phan dung vong lap while show du lieu
					$record_perpage = 10;
					//tong so ban ghi
					$total_record = fetch_one("select * from tbl_product where c_name like '%$key%' or c_masp like '%$key%'");
					//lay tong so trang
					$num_page = ceil($total_record["total"]/$record_perpage);
					$page = 1;
					//lay trang hien tai
					$page = isset($_GET["p"]) ? $_GET["p"]:0;
					$page = $page <= 0 ? 0: $page-1;
					//cac ban ghi hien thi tren trang do
					$from = $page * $record_perpage;
					//thuc hien truy van khi da co cac thong tin o tren
					$arr_product = fetch("select * from tbl_product where c_name like '%$key%' or c_price like '%$key%' limit $from,$record_perpage");
					
					include_once("view/view_search_product.php");
					
				}
				else
				{
						echo "Không tìm thấy kết quả a";
				}
		}
        

?>