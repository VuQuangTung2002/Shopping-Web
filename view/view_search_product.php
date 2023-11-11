<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Sản Phẩm</h1>
		<em></em>
		<h2><a href="index.html">Home</a><label>/</label>Sản Phẩm</a></h2>
	</div>
</div>
	<!--content-->
		<div class="product">
			<div class="container">
			<div class="col-md-9">
			<div class="mid-popular">
            		<?php
                    	foreach($arr_product as $product)
						{
	
					?>
					<div class="col-md-4 item-grid1 simpleCart_shelfItem">
					<div class=" mid-pop">
					<div class="pro-img">
						<img src="<?php echo $product["c_img"]?>" class="img-responsive" alt="">
						<div class="zoom-icon ">
						<a class="picture" href="images/pc.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
						<a href="single.html"><i class="glyphicon glyphicon-menu-right icon"></i></a>
						</div>
						</div>
						<div class="mid-1">
						<div class="women">
						<div class="women-top">
							<span><?php echo $product["c_sex"]?></span>
							<h6><a href="index.php?controller=detail_product&id=<?php echo $product["pk_product_id"]?>"><?php echo $product["c_name"]?></a></h6>
							</div>
							<div class="img item_add">
								<a href="#"><img src="public/images/ca.png" alt=""></a>
							</div>
							<div class="clearfix"></div>
							</div>
							<div class="mid-2">
								<p ><em class="item_price"><?php echo number_format($product["c_price"]);?> VND</em></p>
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
					 <!--phan trang-->
                    <div class="mid-2">
                        <ul class="pagination" style="margin-left:12px;margin-top:0;margin-bottom:0;padding:0">
                        	<li class=""><a>Trang</a></li>
                        
							<?php
                                for($i=1;$i<=$num_page;$i++)
                                {
                            ?>
                            <li class="<?php echo isset($_GET["p"])&&$_GET["p"]==$i?"active":"" ?>"><a href="index.php?controller=product&id=<?php echo $product["fk_category_product_id"]?>&p=<?php echo $i;?>"><?php echo $i;?></a></li>
                            <?php }?>
                        </ul>
                    </div>
                    <!--end phan trang-->
					
					
					
					
					
					<div class="clearfix"></div>
				</div>
			</div>
            
			<div class="col-md-3 product-bottom">
            
			<!--categories-->
            
				<div class=" rsidebar span_1_of_left">
						<h4 class="cate">Danh Mục Sản Phẩm</h4>
                        
							 <ul class="menu-drop">
							 <?php
								foreach($arr_category_product as $category_product)
								{
									$id=$category_product["pk_category_product_id"];
									$subs=fetch("select * from tbl_category_product where c_parent_id=$id");
									$rows["subs"]=$subs;
								
							?>
							<li class="item1"><a href="#"><?php echo $category_product["c_name"]?> </a>	
								<?php 
                              
                                  if(!empty($rows["subs"]))
                                  {
                                              
                                ?>
								<ul class="cute">
                                	<?php 
                            
										foreach($rows["subs"] as $sub)
										{
									?>
									<li class="subitem1"><a href="index.php?controller=product&id=<?php echo $sub["pk_category_product_id"]?>"><?php echo $sub["c_name"]?></a></li>
									<?php }?>
								</ul>
                                <?php }?>
							</li>
                            <?php }?>
							
						</ul>
					</div>
				<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
<!--//menu-->
	 <section  class="sky-form">
					<h4 class="cate"></h4>
					 <div class=" rsidebar span_1_of_left">
					  <div class="col-sm-6 col-md-12">
                           <ul class="tag-in">
						
						</ul> 
                      </div>
  				
  

					</div>
	</section>			 				 
				 
					
					
				   				
		</div>
			</div class="clearfix"></div>
				<!--products-->
			
			<!--//products-->