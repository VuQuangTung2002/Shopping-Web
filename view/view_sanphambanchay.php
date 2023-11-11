            <!--Sản Phẩm Bán Chạy-->
            <div class="content-mid">
				<h3>Sản Phẩm Bán Chạy</h3>
				<label class="line"></label>
               
				<div class="mid-popular">
                	<?php 
						foreach($arr_sanphambanchay as $sanphambanchay)
						{
					?>
                    
					<div class="col-md-3 item-grid simpleCart_shelfItem">
                     
					<div class=" mid-pop">
					<div class="pro-img">
						<img src="<?php echo $sanphambanchay["c_img"]?>" class="img-responsive" alt="">
						<div class="zoom-icon ">
						<a class="picture" href="<?php echo $sanphambanchay["c_img"] ?>" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
						<a href="single.html"><i class="glyphicon glyphicon-menu-right icon"></i></a>
						</div>
						</div>
						<div class="mid-1">
						<div class="women">
						<div class="women-top">
							<span><?php echo $sanphambanchay["c_sex"]?></span>
							<h6><a href="index.php?controller=detail_product&id=<?php echo $sanphambanchay["pk_product_id"] ?>"><?php echo $sanphambanchay["c_name"]?></a></h6>
							</div>
							<div class="img item_add">
								<a href="index.php?controller=cart&act=add&id=<?php echo $sanphambanchay["pk_product_id"] ?>"><img src="public/images/ca.png" alt=""></a>
							</div>
							<div class="clearfix"></div>
							</div>
							<div class="mid-2">
								<p ><label></label><em class="item_price"><?php echo number_format($sanphambanchay["c_price"])?> VND</em></p>
								  <div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								
								<div class="clearfix"></div>
							</div>
							
						</div>
					</div>
                    
					</div>
                   <?php }?>
                    
                   
					
					<div class="clearfix"></div>
				</div>

			</div>
            <!-- end Sản Phẩm Bán Chạy-->