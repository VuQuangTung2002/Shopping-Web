<div class="col-lg-12">
<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

?>

                   <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Quản lý Người Dùng
                        </div>
                        
                        <div class="panel-body">
                        	<div class="row" style="margin-bottom:15px">
                            	<div class="col-lg-6">
                                <a href="index.php?controller=add_user&act=add" class="btn btn-info" role="button"><i class="fa fa-user-plus" aria-hidden="true"></i> Thêm Người Dùng</a>
                                </div>
                                <div class="col-lg-6"></div>
                            </div>
                            <div class="table-responsive">
                            <form method="post" action="index.php?controller=user">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr style="color:#F00">
                                        	<!-- <th><input type="checkbox" onclick="checkall('item',this)" name="check" class="checkbox"/></th> -->
                                            <th>STT</th>
                                            <th>Ảnh</th>
                                            <th>Tên Đăng nhập</th>
                                            <th>Họ Tên</th>
                                           
                                            <th>Email</th>
                                            
                                            <th>Hành Động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    	$stt=0;
										foreach($arr_listuser as $user)
										{
											$stt++;
									?>
                                        <tr class="odd gradeX">
                                        <!-- <th><input class="item" type="checkbox" value="<?php echo $user["pk_user_id"]?>" name="user_id[]" class="ckeckbox"/></th> -->
                                            <th><?php echo $stt;?></th>
                                            <th><img src="../<?php echo $user["c_img"]?>" height="50" width="50"/></th>
                                            <th><?php echo $user["c_username"]?></th>
                                            <th><?php echo $user["c_fullname"]?></th>
                                            
                                            <th><?php echo $user["c_email"]?></th>
                                            
                                            <th>
                                            <a href="index.php?controller=detail_user&id=<?php echo $user["pk_user_id"]?>" class="btn btn-primary" role="button">Chi tiết</a>
                                            	<!-- <a onclick="return window.confirm('Bạn muốn xóa?');" href="index.php?controller=user&act=delete&id=<?php echo $user["pk_user_id"]?>" class="btn btn-warning" role="button">Xóa</a> -->
                                            <!-- <a href="index.php?controller=edit_user&act=edit&id=<?php echo $user["pk_user_id"]?>" class="btn btn-primary" role="button">Sửa</a> -->
                                            </th>
                                        </tr>
                                       
                                    <?php }?> 
                                     <!-- <tr class="odd gradeX">
                                        	<th><input type="submit" value="Xóa" class="btn btn-primary"/></th>
                                        </tr> -->
                                    </tbody>
                                </table>
                                </form>
                            </div>
                            <div>
                            <ul class="pagination" style="padding:0px; margin:0px;">
                                <?php for($i = 1; $i <= $num_page; $i++){ ?>
                                <li><a href="index.php?controller=user&p=<?php echo $i;?>">
                                    <?php echo $i;?></a>
                            </li>
                                <?php } ?>
                            </ul>
				</div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>