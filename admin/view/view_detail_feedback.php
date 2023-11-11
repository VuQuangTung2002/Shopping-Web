<div class="col-lg-8 col-xs-offset-2">
	<div class="panel panel-success">
		<div class="panel-heading">
			Chi Tiết Góp Ý Phản Hồi
		</div>
		<div class="panel-body">
			<form class="form-horizontal" role="form">
								  <div class="form-group">
								    <label for="hoten" class="col-sm-2 control-label">Họ Tên</label>
								    <div class="col-sm-10">
								     <span class="form-control"><?php echo $chitietfeedback["c_fullname"]?></span>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="email" class="col-sm-2 control-label">Email</label>
								    <div class="col-sm-10">
								      <span class="form-control"><?php echo $chitietfeedback["c_email"]?></span>
								    </div>
								  </div>
                                  <div class="form-group">
								    <label class="col-sm-2 control-label">Điện Thoại</label>
								    <div class="col-sm-10">
								      <span class="form-control"><?php echo $chitietfeedback["c_phone"]?></span>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Tin Nhắn</label>
								    <div class="col-sm-10">
								      <textarea class="form-control" rows="7"><?php echo $chitietfeedback["c_message"]?></textarea>
								    </div>
								  </div>
								  
								 
								  
								</form>
		</div>
	</div>
</div>




