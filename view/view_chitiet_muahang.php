
<!--banner-->
<div class="banner-top">
	<div class="container">
   
		<h1>Lịch Sử Mua Hàng</h1>
		<em></em>
		<h2><a href="index.html">Home</a><label>/</label>Lịch Sử Mua Hàng</a></h2>
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
                <th >Tổng giá</th>
                <th >Trạng Thái</th>
                
            </tr>
            <?php
            	$stt=0;
				foreach($arr_lichsumuahang as $lichsumuahang)
				{
					$stt++;
			?>
            <tr class="cart-header">
            
                <td class="ring-in"><a href="single.html" class="at-in"><img src="<?php echo $lichsumuahang["c_img"]?>" class="img-responsive" alt=""></a>
                <div class="sed">
                <h5><a href="single.html"><?php echo $lichsumuahang["c_name"]?></a></h5>
                <p> </p>
                
                </div>
                <div class="clearfix"> </div>
                </td>
                <td>
                	
                    <?php
                    	echo $lichsumuahang["c_number"];
					?>
                </td>
                
                <td class="item_price">
                	<?php
							echo number_format($lichsumuahang["c_price"]);
					?>
                </td>
                <td>
                	<?php
						$tonggia=$lichsumuahang["c_price"]*$lichsumuahang["c_number"];
                    	echo number_format($tonggia);
					?>
                </td>
                <td class="add-check">
                    <?php
                    	if($lichsumuahang["c_status"]==0){
							echo "Chưa Giao Dịch";	
						} 
						else if($lichsumuahang["c_status"]==1){
							echo "Đã Giao Dịch";	
						}
						else{
							echo "Hủy Giao Dịch";	
						}
					?>
                </td>
            </tr>
            <?php }?>
        </table>
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
	
   
	 </div>
     
    </div>
</div>

<!--//login-->