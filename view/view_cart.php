
<!--banner-->
<div class="banner-top">
	<div class="container">
   
		<h1>Giỏ Hàng</h1>
		<em></em>
		<h2><a href="index.html">Home</a><label>/</label>Giỏ Hàng</a></h2>
	</div>
</div>
<!--login-->
	<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header1').fadeOut('slow', function(c){
							$('.cart-header1').remove();
						});
						});	  
					});
			   </script>
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cart-header2').fadeOut('slow', function(c){
							$('.cart-header2').remove();
						});
						});	  
					});
			   </script>

<div class="container">
	<div class="check-out">
	<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive">
    
        <table class="table-heading simpleCart_shelfItem">
            <tr>
                <th class="table-grid">Đơn hàng</th>
                    
                <th>Số lượng</th>
                <th>Giá</th>
                <th >Tổng giá </th>
                <th></th>
               
                
            </tr>
            <?php
            	$stt=0;
				foreach($_SESSION['cart'] as $product)
				{
					$stt++;
			?>
            <tr class="cart-header">
            
                <td class="ring-in"><a class="at-in"><img src="<?php echo $product["c_img"]?>" class="img-responsive" alt=""></a>
                <div class="sed">
                <h5><a><?php echo $product["c_name"]?></a></h5>
                <p> </p>
                
                </div>
                <div class="clearfix"> </div>
                </td>
                <td>
                	<input style="max-width:80px" type="number" name="number<?php echo $product["pk_product_id"]?>" id="number<?php echo $product["pk_product_id"]?>" value="<?php echo $product["number"]?>" class="form-control"/>
                    
                </td>
                
                <td class="item_price"><?php echo number_format($product["c_price"]);?> VND</td>
                <td><?php $sum_price=$product["c_price"]*$product["number"];echo number_format($sum_price);?> VND</td>
                
                <td class="add-check">
                    <a class="item_add hvr-skew-backward" href="javascript:void(0)" onclick="updateItem(<?php echo $product["pk_product_id"]?>)">Cập nhật</a>
                    <a class="item_add hvr-skew-backward" href="index.php?controller=cart&act=delete&id=<?php echo $product["pk_product_id"]?>">Xóa</a>
                </td>
                
            </tr>
            
            <?php }?>
        </table>
        <div class="bs-example4" data-example-id="simple-responsive-table">
            <div class="table-responsive">
                <table class="table-heading simpleCart_shelfItem">
                    <tr>
                    	<?php 
							if(cart_number()==0)
								echo '<td class="table-grid" style="font-size:20px;color:#000">Không có sản phẩm nào trong giỏ hàng</td>';
							else{
						?>
                        	<td class="table-grid" style="font-size:20px;color:#000">
                            Tổng Số Tiền: <?php echo number_format(cart_total()) ?> VND</td>
                        <?php }?>
                        
                    </tr>
                </table>
            </div>
        </div>
        <script>
        	function updateItem(id){
				//alert(id);
				number=$("#number"+id).val();
				//alert(number);
				$.get("index.php?controller=cart&id="+id+"&number="+number, function(data){
						location.reload();
					});
			}
        </script>
        
	</div>
	</div>
	<div class="produced">
	<?php include_once("controller/controller_login_pay.php");?>
    <?php if(cart_number()>0){?>
    <a href="index.php?controller=cart&act=destroy" class="hvr-skew-backward">Hủy Giỏ Hàng</a>
    <?php }?>
    <a href="index.php" class="hvr-skew-backward">Tiếp Tục Mua Hàng</a>
   
	 </div>
     <div class="produced" style="margin-top:10px">
     <?php if(cart_number()>0){?>
		<a target="_blank" href="https://www.nganluong.vn/button_payment.php?receiver=nguyenvandung23041995@gmail.com&product_name=1234&price=<?php echo cart_total() ?>&return_url=(URL thanh toán thành công)&comments=(Ghi chú về đơn hàng)"><img src="https://www.nganluong.vn/css/newhome/img/button/pay-lg.png"border="0" /></a>
   <?php }?>
	 </div>
     
    </div>
</div>

<!--//login-->