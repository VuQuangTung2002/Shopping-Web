<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<div class="col-lg-12">

                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        
                        
                        
                        <div class="panel-body">
                        
                        	
                            <div class="table-responsive">
                            
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr style="color:#F00">
                                            <th>Ảnh</th>
                                            <th>Tên Sản Phẩm</th>
                                            <th>Mã Sản Phẩm</th>
                                            <th>Giá</th>
                                            <th>Số Lượng</th>
                                            <th>Hành Động</th>
                                            <th>Trạng Thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    	$stt=0;
										foreach($arr_detailbill as $detailbill)
										{
											$stt++;
											$arr_product=fetch_one("select * from tbl_product where pk_product_id=".$detailbill["fk_product_id"])
									?>
                                        <tr class="odd gradeX">
                                            <th><img src="../<?php echo $arr_product["c_img"]?>" width="50" height="50"/></th>
                                            <th><?php echo $arr_product["c_name"]?></th>
                                            <th><?php echo $arr_product["c_masp"]?></th>
                                            <th><?php echo number_format($detailbill["c_price"])?> VND</th>
                                            <th><?php echo $detailbill["c_number"]?></th>
                                            <th><?php 
												if($detailbill["c_status"]==0){
													echo "Chưa Giao Dịch";
												} 
												else if($detailbill["c_status"]==1){
													echo "Đã Giao Dịch";	
												}
												else{
													echo "Hủy Giao Dịch";	
												}
												 ?></th>
                                            <th><a href="index.php?controller=edit_detailbill&act=edit&id=<?php echo $detailbill["pk_order_id"]?>" class="btn btn-primary" role="button">Thay Đổi</a></th>
                                        </tr>
                                       
                                    <?php }?> 
                                     
                                    </tbody>
                                </table>
                              <a href="#login-box" class="login-window button">In Đơn Hàng</a>
                            </div>
                           
                           
                        </div>
                    </div>
                    
                    <!--End Advanced Tables -->
                </div>
                <script language="javascript">function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}</script>
<style>
	/*phần tử phủ toàn màn hình*/
#over {
    display: none;
    background: #000;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    opacity: 0.8;
    z-index: 999;
}
a, a:visited, a:active{
    text-decoration:none;
}
.login
{
    height:auto;
   
    font-family:Verdana, Arial, Helvetica, sans-serif;
    font-size:14px;
    padding-bottom:5px;
    display:none;
    overflow:hidden;
    position:absolute;
    z-index:99999;
    top:25%;
    left:50%;
    margin-left:-300px;
}
		
.login .login_title
{
    color:white;
    font-size:16px;
    padding:8px 0 5px 8px;
    text-align:left;
}



	
.button{
    display: inline-block;
    min-width: 46px;
    text-align: center;
    color: #444;
    font-size: 14px;
    font-weight: 700;
    height: 36px;
    padding: 0px 8px;
    line-height: 36px;
    border-radius: 4px;
    transition: all 0.218s ease 0s;
    border: 1px solid #DCDCDC;
    background-color: #F5F5F5;
    background-image: -moz-linear-gradient(center top , #F5F5F5, #F1F1F1);
    cursor: pointer;
}
.button:hover{
     border: 1px solid #DCDCDC;
    text-decoration: none;
    -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    box-shadow: 0 2px 2px rgba(0,0,0,0.1);
}
		
</style>

 
<div id="login-box" class="login">
	<div class="col-lg-12">

                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                    <div id="printableArea">
                        <div class="pannel-header">
                        
                        	<div class="text-center"><h3>Đơn Đặt Hàng</h3></div>
                            <div class="table-responsive">
                            	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                	<thead>
                                    <?php
									$id=isset($_GET["id"])?$_GET["id"]:0;
                                    	$print=fetch_one("select * from tbl_order,tbl_transaction,tbl_customer where tbl_order.fk_transaction_id=tbl_transaction.pk_transaction_id and tbl_transaction.fk_customer_id=tbl_customer.pk_customer_id and tbl_order.fk_transaction_id=$id");
									?>
                                    	<tr >
                                        	<th style="width:15%">Mã hóa đơn:</th>
                                            <th><?php echo $print["pk_order_id"]?></th>
                                            
                                            
                                            
                                        </tr>
                                        <tr>
                                        	<th>Họ Tên:</th>
                                            <th><?php echo $print["c_fullname"]?></th>
                                        </tr>
                                        <tr>
                                        	<th>Email:</th>
                                            <th><?php echo $print["c_email"]?></th>
                                        </tr>
                                        <tr>
                                        	<th>Số DT:</th>
                                            <th><?php echo $print["c_phone"]?></th>
                                        </tr>
                                        
                                    </thead>
                                    <tbody>
                                    	
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        
                        <div class="panel-body">
                        
                        	
                            <div class="table-responsive">
                            
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr style="color:#F00">
                                            <th>Ảnh</th>
                                            <th>Tên Sản Phẩm</th>
                                            <th>Mã Sản Phẩm</th>
                                            <th>Giá</th>
                                            <th>Số Lượng</th>
                                            <th>Hành Động</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    	$stt=0;
										foreach($arr_detailbill as $detailbill)
										{
											$stt++;
											$arr_product=fetch_one("select * from tbl_product where pk_product_id=".$detailbill["fk_product_id"])
									?>
                                        <tr class="odd gradeX">
                                            <th><img src="../<?php echo $arr_product["c_img"]?>" width="50" height="50"/></th>
                                            <th><?php echo $arr_product["c_name"]?></th>
                                            <th><?php echo $arr_product["c_masp"]?></th>
                                            <th><?php echo number_format($detailbill["c_price"])?> VND</th>
                                            <th><?php echo $detailbill["c_number"]?></th>
                                            <th><?php 
												if($detailbill["c_status"]==0){
													echo "Chưa Giao Dịch";
												} 
												else if($detailbill["c_status"]==1){
													echo "Đã Giao Dịch";	
												}
												else{
													echo "Hủy Giao Dịch";	
												}
												 ?></th>
                                           
                                        </tr>
                                        
                                       
                                    <?php }?> 
                                     <tr>
                                        	<th colspan="6">Tổng tiền: <?php $arr_tongtien=fetch_one("select SUM(c_price*c_number) as tong from tbl_order where fk_transaction_id=$id");echo $arr_tongtien["tong"]; ?> VND</th>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                              
                            </div>
                           </div>
                           
                        </div>
                    </div>
                    <input type="button" class="btn btn-primary" onclick="printDiv('printableArea')" value="In" />
                    <!--End Advanced Tables -->
                </div>
</div>
<script language="javascript">
	$(document).ready(function() {
    $('a.login-window').click(function() {

        //lấy giá trị thuộc tính href - chính là phần tử "#login-box"
        var loginBox = $(this).attr('href');

        //cho hiện hộp đăng nhập trong 300ms
        $(loginBox).fadeIn("slow");

        // thêm phần tử id="over" vào sau body
        $('body').append('<div id="over"></div>');
        $('#over').fadeIn(300);
        
        return false;
    });

    // khi click đóng hộp thoại
    $(document).on('click', "a.close, #over", function() { 
        $('#over, .login').fadeOut(300 , function() {
            $('#over').remove();  
        }); 
        return false;
    });
	
});
</script>