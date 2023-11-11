<div class="col-lg-8 col-xs-offset-2">
	<div class="panel panel-success">
		<div class="panel-heading">
			Sửa Sản Phẩm
		</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_control;?>" enctype="multipart/form-data">
			
            
            <!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4">Tên Sản Phẩm</div>
				<div class="col-lg-8">
					<input value="<?php echo isset($edit_prodcut["c_name"])?$edit_prodcut["c_name"]:"";?>" type="text" name="c_name" class="form-control" required="required"  >
				</div>
			</div>
			<!-- end row -->
             <!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4">Mã Sản Phẩm</div>
				<div class="col-lg-8">
					<input value="<?php echo isset($edit_prodcut["c_masp"])?$edit_prodcut["c_masp"]:"";?>" type="text" name="c_masp" maxlength="50" class="form-control" required="required" pattern="^\w{4,20}$" title="mã nhập từ 4-20 ký tự" disabled="disabled">
				</div>
			</div>
			<!-- end row -->
            
                      
            <!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4"> Thuộc Danh mục sản phẩm</div>
				<div class="col-lg-8">
                <select name="fk_category_product">	
                    <?php 
						$arr_danhmuccon=fetch("select * from tbl_category_product where c_parent_id >0");
						foreach($arr_danhmuccon as $danhmucon){
					?>
                	<option <?php echo isset($edit_prodcut["fk_category_product_id"])&&$edit_prodcut["fk_category_product_id"]==$danhmucon["pk_category_product_id"]?"selected":"";?> value="<?php echo $danhmucon["pk_category_product_id"]?>" class="form-control"><?php echo $danhmucon["c_name"]?></option>
                    <?php }?>
                   
                </select>
                
				</div>
			</div>
			<!-- end row -->
            <!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4">Giới tính</div>
				<div class="col-lg-8">
       				<label class="radio-inline">
                          <input <?php echo isset($edit_prodcut["c_sex"])&&$edit_prodcut["c_sex"]=="Nam"?"checked":"";?> type="radio" name="c_sex" id="optionsRadiosInline1" value="Nam" >Nam
                 	</label>
                    <label class="radio-inline">
                           <input <?php echo isset($edit_prodcut["c_sex"])&&$edit_prodcut["c_sex"]=="Nữ"?"checked":"";?> type="radio" name="c_sex" id="optionsRadiosInline1" value="Nữ" >Nữ
                    </label>
				</div>
			</div>
			<!-- end row -->
            <!-- begin row -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-lg-4">Màu sắc</div>
                    <div class="col-lg-8">
                        <input value="<?php echo isset($edit_prodcut["c_color"])?$edit_prodcut["c_color"]:"";?>" type="text" name="c_color" class="form-control" required="required"  >
                    </div>
                </div>
			<!-- end row -->
            <!-- begin row -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-lg-4">Ngồn gốc</div>
                    <div class="col-lg-8">
                        <input value="<?php echo isset($edit_prodcut["c_nguongoc"])?$edit_prodcut["c_nguongoc"]:"";?>" type="text" name="c_nguongoc" class="form-control" required="required"  >
                    </div>
                </div>
			<!-- end row -->
            <!-- begin row -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-lg-4">Chất liệu</div>
                    <div class="col-lg-8">
                        <input value="<?php echo isset($edit_prodcut["c_chatlieu"])?$edit_prodcut["c_chatlieu"]:"";?>" type="text" name="c_chatlieu" class="form-control" required="required"  >
                    </div>
                </div>
			<!-- end row -->
            <!-- begin row -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-lg-4">Giá</div>
                    <div class="col-lg-8">
                        <input value="<?php echo isset($edit_prodcut["c_price"])?$edit_prodcut["c_price"]:"";?>" type="text" name="c_price" class="form-control" required="required">
                    </div>
                </div>
			<!-- end row -->
			<!-- begin row -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-lg-4">Mô tả</div>
                    <div class="col-lg-8">
                        <textarea name="c_desription" cols="" rows="" class="form-control"><?php echo isset($edit_prodcut["c_description"])?$edit_prodcut["c_description"]:"";?></textarea>
                    </div>
                </div>
			<!-- end row -->
            <!-- begin row -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-lg-4">Nôi Dung</div>
                    <div class="col-lg-8">
                        <textarea name="c_noidung" cols="" rows="" class="form-control"><?php echo isset($edit_prodcut["c_noidung"])?$edit_prodcut["c_noidung"]:"";?>
                        </textarea>
                    </div>
                </div>
			<!-- end row -->
            <!-- begin row -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-lg-4">Ảnh</div>
                    <div class="col-lg-8">
                        <input value="" type="file" name="c_img">
                    </div>
                </div>
			<!-- end row -->
            <!-- begin row -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-lg-4">Sản Phẩm Nổi Bật</div>
                    <div class="col-lg-8">
                        <input type="checkbox" <?php echo isset($edit_prodcut["c_sanphamnoibat"]) && $edit_prodcut["c_sanphamnoibat"]==1 ? "checked":"";?> name="c_sanphamnoibat">
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