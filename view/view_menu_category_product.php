<?php
	foreach($arr_category_product as $category_product)
	{
		$id=$category_product["pk_category_product_id"];
		$subs=fetch("select * from tbl_category_product where c_parent_id=$id");
		$rows["subs"]=$subs;
	
?>
<li class="dropdown mega-dropdown active">
      <a class="color1" href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $category_product["c_name"]?><span class="caret"></span></a>				
      <div class="dropdown-menu ">
          <div class="menu-top">
              
              <div class="col1">
                  <div class="h_nav">
				   <?php 
                          
					  if(!empty($rows["subs"]))
					  {
                                  
                    ?>
                      <ul>
						 <?php 
                            
                                foreach($rows["subs"] as $sub)
								{
                            ?>
                          <li><a href="index.php?controller=product&id=<?php echo $sub["pk_category_product_id"]?>"><?php echo $sub["c_name"]?></a></li>
                          <?php }?>
                      </ul>	
                      <?php }?>
                  </div>							
              </div>
              <!--<div class="col1 col5">
              <img src="public/images/me.png" class="img-responsive" alt="">
              </div>-->
              <div class="clearfix"></div>
          </div>                  
      </div>				
</li>
<?php
	}
?>