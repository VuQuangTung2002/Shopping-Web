<div class="col-lg-6 col-xs-offset-3">
	<div class="panel panel-success">
		<div class="panel-heading">
			Thêm Người Dùng
		</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_control;?>" enctype="multipart/form-data">
			
            
            <!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4">Tên Danh mục</div>
				<div class="col-lg-8">
					<input value="<?php echo isset($editcategory["c_name"])?$editcategory["c_name"]:""?>" type="text" name="c_name" maxlength="50" class="form-control" required="required"  >
				</div>
			</div>
			<!-- end row -->
            
                      
            <!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4">Danh mục cha</div>
				<div class="col-lg-8">
                <select name="pk_category_product">
                	<option value="0">Danh mục cha</option>	
                    <?php 
						$arr_danhmuccha=fetch("select * from tbl_category_product where c_parent_id=0");
						foreach($arr_danhmuccha as $danhmcucha){
					?>
                	<option <?php echo isset($editcategory["c_parent_id"])&&$editcategory["c_parent_id"]==$danhmcucha["pk_category_product_id"]?"selected":"" ;?> value="<?php echo $danhmcucha["pk_category_product_id"]?>" class="form-control"><?php echo $danhmcucha["c_name"]?></option>
                    <?php }?>
                   
                </select>
                
				</div>
			</div>
			<!-- end row -->
		
			<!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4"></div>
				<div class="col-lg-8">
					<input type="submit" name="btn" class="btn btn-primary" value="Thêm">
				</div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
</div>