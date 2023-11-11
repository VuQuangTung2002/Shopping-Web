<div class="col-lg-6 col-xs-offset-3">
	<div class="panel panel-success">
		<div class="panel-heading">
			Trạng Thái Giao Dịch
		</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_control;?>" enctype="multipart/form-data">
		   	<!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4">Trạng Thái</div>
				<div class="col-lg-8">
                <select name="c_status">
                	<option <?php echo isset($editbill["c_status"])&&$editbill["c_status"]==0?"selected":"" ;?> value="0" class="form-control">Chưa Giao Dịch</option>
                    <option <?php echo isset($editbill["c_status"])&&$editbill["c_status"]==1?"selected":"" ;?> value="1" class="form-control">Đã Giao Dịch</option>
                    <option <?php echo isset($editbill["c_status"])&&$editbill["c_status"]==2?"selected":"" ;?> value="2" class="form-control">Hủy Giao Dịch</option>
                   
                   
                </select>
                
				</div>
			</div>
			<!-- end row -->
		
			<!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4"></div>
				<div class="col-lg-8">
					<input type="submit" name="btn" class="btn btn-primary" value="Thay Đổi">
				</div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
</div>