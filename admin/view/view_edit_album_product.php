<div class="col-lg-6 col-xs-offset-3">
	<div class="panel panel-success">
		<div class="panel-heading">
			Sửa Ảnh
		</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_control;?>" enctype="multipart/form-data">
			
            
            <!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4">Chọn Ảnh</div>
				<div class="col-lg-8">
					 <input type="file" name="c_img" multiple/>
				</div>
			</div>
			<!-- end row -->
            
                      
            <!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4">Tên Sản Phẩm</div>
				<div class="col-lg-8">
                <select name="pk_product_id">
                	
                    <?php 
						$arr_masp=fetch("select * from tbl_product");
						foreach($arr_masp as $masp){
					?>
                	<option <?php echo isset($arr_album_img["fk_product_id"])&&$arr_album_img["fk_product_id"]==$masp["pk_product_id"]?"selected":""?> value="<?php echo $masp["pk_product_id"]?>" class="form-control"><?php echo $masp["c_name"]?></option>
                     
                    <?php }?>
                   
                </select>
               
				</div>
			</div>
			<!-- end row -->
		<!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4">Trạng Thái</div>
				<div class="col-lg-8">
					<input <?php echo isset($arr_album_img["status"])&&$arr_album_img["status"]==1?"checked":""?> type="checkbox" name="status">
				</div>
			</div>
			<!-- end row -->
			<!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4"></div>
				<div class="col-lg-8">
					<input type="submit" name="btn" class="btn btn-primary" value="Sửa">
				</div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
</div>