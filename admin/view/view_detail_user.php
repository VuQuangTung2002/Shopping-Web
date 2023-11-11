<div class="col-lg-12">

    <!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading">
             Thông Tin Cá Nhân
        </div>
        <div class="panel-body">
            <div class="row" style="margin-bottom:15px">
               <div class="col-lg-5">
               		<div class="col-lg-6 col-lg-offset-3" style="margin-top:50px">
                    	<img src="../<?php echo $detai_user["c_img"]?>" width="100%" height="150"/>
                    </div>
               </div>
               <div class="col-lg-7">
               		<div class="table-responsive">
                    	<table class="table table-striped table-bordered table-hover">
                        	<thead>
                            	<tr>
                                	<th>Họ Tên</th>
                                    <th><?php echo $detai_user["c_fullname"]?></th>
                                </tr>
                                <tr>
                                	<th>Tên Đăng Nhập</th>
                                    <th><?php echo $detai_user["c_username"]?></th>
                                </tr>
                                <tr>
                                	<th>Số Điện Thoại</th>
                                    <th><?php echo $detai_user["c_phone"]?></th>
                                </tr> 
                                <tr>
                                	<th>Địa Chỉ</th>
                                    <th><?php echo $detai_user["c_address"]?></th>
                                </tr> 
                                <tr>
                                	<th>Giới Tính</th>
                                    <th><?php echo $detai_user["c_sex"]?></th>
                                </tr>
                                 <tr>
                                	<th>Ngày Tạo</th>
                                    <th><?php echo $detai_user["c_date_created"]?></th>
                                </tr>
                                <tr>
                                	<th>Ngày Sinh</th>
                                    <th><?php echo $detai_user["c_birthday"]?></th>
                                </tr>     
                                   
                            </thead>
                        </table>
                    </div>
               </div>
                
                </div>
                
                <div class="col-lg-4"></div>
            </div>
            <div class="table-responsive">
            
            </div>
            
        </div>
    </div>
    <!--End Advanced Tables -->
</div>