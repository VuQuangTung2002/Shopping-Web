<!--banner-->
<div class="banner-top">
	<div class="container">
    
		<h1>
		<?php 
		$category=fetch_one("select * from tbl_category_product where pk_category_product_id=".$detail_product["fk_category_product_id"]);
		echo $category["c_name"];

		?>
    	</h1>
		<em></em>
		<h2><a href="index.php">Home</a><label>/</label><a><?php $avc=fetch_one("select * from tbl_category_product where pk_category_product_id=".$category["c_parent_id"]); echo $avc["c_name"]?></a><label>/</label><?php echo $category["c_name"]; ?></a></h2>
	</div>
</div>
<div class="single">

<div class="container">
<div class="col-md-9">
	<div class="col-md-5 grid">		
		<div class="flexslider">
			  <ul class="slides">
              <?php
              		$arr_album_img=fetch("select * from tbl_album_product where status=1 and fk_product_id=".$detail_product["pk_product_id"]);
					foreach($arr_album_img as $album_img)
					{
			  ?>
			    <li data-thumb="<?php echo $album_img["c_img"]?>">
			        <div class="thumb-image"> <img src="<?php echo $album_img["c_img"]?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
                <?php }?>
			    <!--<li data-thumb="public/images/si1.jpg">
			         <div class="thumb-image"> <img src="public/images/si1.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="public/images/si2.jpg">
			       <div class="thumb-image"> <img src="public/images/si2.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li>--> 
                 
			  </ul>
		</div>
	</div>	
<div class="col-md-7 single-top-in">
						<div class="span_2_of_a1 simpleCart_shelfItem">
				<h3><?php echo $detail_product["c_name"]?></h3>
				<p class="in-para">Đăng Ngày: <?php $thoigian=$detail_product["c_date_created"];
					$datemoi=date("d-m-Y",strtotime($thoigian));
					echo $datemoi;
  				?> - Mã SP:<?php echo $detail_product["c_masp"]?></p>
			    <div class="price_single">
				  <span class="reducedfrom item_price"><?php echo number_format($detail_product["c_price"])?> VND</span>
				 <a href="index.php?controller=index">Quay về trang chủ</a>
				 <div class="clearfix"></div>
				</div>
				<h4 class="quick">Mô Tả:</h4>
				<p class="quick_desc"> <?php echo $detail_product["c_description"]?></p>
			    
				 <div class="quantity"> 
								
							</div>
							<!--quantity-->
	<script>
    $('.value-plus').on('click', function(){
    	var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
    	divUpd.text(newVal);
    });

    $('.value-minus').on('click', function(){
    	var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
    	if(newVal>=1) divUpd.text(newVal);
    });
	</script>
	<!--quantity-->
				 
			    <a href="index.php?controller=cart&act=add&id=<?php echo $detail_product["pk_product_id"]?>" class="add-to item_add hvr-skew-backward">Mua hàng</a>
			<div class="clearfix"> </div>
			</div>
		
					</div>
			<div class="clearfix"> </div>
			<!---->
			<div class="tab-head">
			 <nav class="nav-sidebar">
		<ul class="nav tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">Mô Tả Chi Tiết</a></li>
           
          <li class=""><a href="#tab3" data-toggle="tab">Xem Thêm Ảnh Sản Phẩm</a></li>  
		</ul>
	</nav>
	<div class="tab-content one">
<div class="tab-pane active text-style" id="tab1">
 <div class="facts">
									  <p ><?php echo htmlspecialchars_decode($detail_product["c_noidung"]);?> </p>
										<ul>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Chất liệu: <?php echo $detail_product["c_chatlieu"]?></li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Màu sắc: <?php echo $detail_product["c_color"]?></li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Xuất sứ: <?php echo $detail_product["c_nguongoc"]?></li>
											
										</ul>         
							        </div>

</div>

<div class="tab-pane text-style" id="tab3">

									 <div class="facts">
                                     	<div class="row">
                                        <?php
                                        	$arr_view_img=fetch("select * from tbl_album_product where status=0 and fk_product_id=".$detail_product["pk_product_id"]);
											foreach($arr_view_img as $vew_img)
											{
										?>
                                        	<div class="col-md-6"><div class="thumb-image"> <img src="<?php echo $vew_img["c_img"]?>" class="img-responsive"> </div></div>
                                            <?php }?>
                                            
                                        </div>
									  <p ></p>
                                      

										<!--<ul>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Research</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Design and Development</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Porting and Optimization</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>System integration</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Verification, Validation and Testing</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Maintenance and Support</li>
										</ul> -->    
							     </div>	

 </div>
  
  </div>
  <div class="clearfix"></div>
  </div>
			<!---->	
</div>
<!----->

<div class="col-md-3 product-bottom product-at">
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
					<h4 class="cate">Sản Phẩm Cùng Loại</h4>
					 <div class=" rsidebar span_1_of_left">
						<!--<ul class="menu-drop">
							<li class="item1"><a href="#">Men </a>
								
							</li>
							
						</ul>-->
                        <?php
                        	foreach($sanphamcungloai as $cungloai)
							{
						?>
                        <div class="col-sm-6 col-md-12">
                            <div class="thumbnail">
                              <img src="<?php echo $cungloai["c_img"]?>" alt="...">
                              <div class="caption">
                              <p><a style="text-decoration:none;" href="index.php?controller=detail_product&id=<?php echo $cungloai["pk_product_id"]?>"><?php echo $cungloai["c_name"]?></a></p>
                                <h4>Giá:<?php echo number_format($cungloai["c_price"]);?> VND</h4>
                                
                                
                              </div>
                            </div>
                      </div>
  				<?php }?>
  

					</div>
				 </section> 				 				 
				 
				   				
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
			
			</div>
			
		</div>
	<!--//content-->