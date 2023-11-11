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
                            <img src="../<?php echo $infor_personal["c_img"]?>" width="100%" height="150"/>
                        </div>
                   </div>
                   <div class="col-lg-7">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Họ Tên</th>
                                        <th><?php echo $infor_personal["c_fullname"]?></th>
                                    </tr>
                                    <tr>
                                        <th>Tên Đăng Nhập</th>
                                        <th><?php echo $infor_personal["c_username"]?></th>
                                    </tr>
                                    <tr>
                                        <th>Số Điện Thoại</th>
                                        <th><?php echo $infor_personal["c_phone"]?></th>
                                    </tr> 
                                    <tr>
                                        <th>Địa Chỉ</th>
                                        <th><?php echo $infor_personal["c_address"]?></th>
                                    </tr> 
                                    <tr>
                                        <th>Giới Tính</th>
                                        <th><?php echo $infor_personal["c_sex"]?></th>
                                    </tr>
                                     <tr>
                                        <th>Ngày Tạo</th>
                                        <th><?php echo $infor_personal["c_date_created"]?></th>
                                    </tr>
                                    <tr>
                                        <th>Ngày Sinh</th>
                                        <th><?php echo $infor_personal["c_birthday"]?></th>
                                    </tr>     
                                       
                                </thead>
                            </table>
                        </div>
                   </div>
                	<div class="col-lg-4"><a href="index.php?controller=edit_detail_personal&act=edit&id=<?php echo $infor_personal["pk_user_id"]?>" class="btn btn-primary">Thay đổi thông tin</a></div>
             </div>
                
                
            </div>
            
            
        </div>
    </div>
    <!--End Advanced Tables -->
</div>