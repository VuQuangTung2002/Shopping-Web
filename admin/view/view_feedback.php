<div class="col-lg-12">
<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
	
?>

                   <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Quản lý Phản Hồi & Góp Ý Khách Hàng
                        </div>
                        
                        <div class="panel-body">
                        	<div class="row" style="margin-bottom:15px">
                            	<div class="col-lg-6">
                              
                                </div>
                                <div class="col-lg-6"></div>
                            </div>
                            <div class="table-responsive">
                            <form method="post" action="index.php?controller=user">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr style="color:#F00">
                                            <th>STT</th>
                                            <th>Họ Tên</th>
                                            <th>Email</th>
                                            <th>Số Điện Thoại</th>
                                           
                                            <th>Ngày Gửi</th>
                                            
                                            <th>Hành Động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
										$stt=0;
										foreach($arr_feedback as $feedback)
										{
											$stt++;
									?>
                                        <tr class="odd gradeX">
                                           	<th><?php echo $stt?></th>
                                            <th><?php echo $feedback["c_fullname"]?></th>
                                            <th><?php echo $feedback["c_email"]?></th>
                                            <th><?php echo $feedback["c_phone"]?></th>
                                            
                                            <th><?php echo $feedback["c_date_create"]?></th>
                                            
                                            <th>
                                            <a href="index.php?controller=detail_feedback&id=<?php echo $feedback["pk_feedback_id"]?>" class="btn btn-primary" role="button">Chi tiết</a>
                                            	<a onclick="return window.confirm('Bạn muốn xóa?');" href="index.php?controller=user&act=delete&id=" class="btn btn-warning" role="button">Xóa</a>
                                            
                                            </th>
                                        </tr>
                                        <?php }?>
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