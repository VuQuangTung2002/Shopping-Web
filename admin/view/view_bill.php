<div class="col-lg-10 col-xs-offset-1">

                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Quản Lý Đơn Hàng
                        </div>
                        
                        <div class="panel-body">
                        	
                            <div class="table-responsive">
                            <form method="post" action="index.php?controller=user">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr style="color:#F00">
                                            <th>STT</th>
                                            <th>Họ Tên</th>
                                            <th>Email</th>
                                            <th>Trạng Thái</th>
                                            
                                            <th>Hành Động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    	$stt=0;
										foreach($arr_bill as $bill)
										{
											$stt++;
											$arr_customer=fetch_one("select * from tbl_customer where pk_customer_id=".$bill["fk_customer_id"])
									?>
                                        <tr class="odd gradeX">
                                            <th><?php echo $stt;?></th>
                                            <th><?php echo $arr_customer["c_fullname"]?></th>
                                            <th><?php echo $arr_customer["c_email"]?></th>
                                            <th><?php 
												if($bill["c_status"]==0){
													echo "<div style='color:RED'>Đang Xử Lý</div>";	
												}
												else{
													echo "<div style='color:#0F0'>Đã Xử Lý</div>";	
												}
											
												?>
                                            </th>
                                            
                                            <th style="width:25%">
                                            <a href="index.php?controller=detail_bill&id=<?php echo $bill["pk_transaction_id"]?>" class="btn btn-primary" role="button">Chi tiết</a>
                                            <a href="index.php?controller=edit_bill&act=edit&id=<?php echo $bill["pk_transaction_id"]?>" class="btn btn-primary" role="button">Thay đổi</a>
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
                                <li><a href="index.php?controller=bill&p=<?php echo $i;?>">
                                    <?php echo $i;?></a>
                            </li>
                                <?php } ?>
                            </ul>
				</div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>