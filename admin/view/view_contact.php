<div class="col-lg-12">
<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
	
?>

                   <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Quản lý Liên Hệ
                        </div>
                        
                        <div class="panel-body">
                        	<div class="row" style="margin-bottom:15px">
                            	<div class="col-lg-6">
                                <!--<a href="index.php?controller=add_user&act=add" class="btn btn-info" role="button"><i class="fa fa-user-plus" aria-hidden="true"></i> Thêm Liên Hệ</a>-->
                                </div>
                                <div class="col-lg-6"></div>
                            </div>
                            <div class="table-responsive">
                            <form method="post" action="index.php?controller=user">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr style="color:#F00">
                                        	
                                            <th>STT</th>
                                            <th>Địa Chỉ</th>
                                            <th>Điện Thoại</th>
                                            <th>Thời Gian Mở</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   		<?php
											$stt=0;
                                        	foreach($arr_contact as $contact)
											{
												$stt++;
										?>
                                        <tr class="odd gradeX">
                                        
                                            <th><?php echo $stt; ?></th>
                                            <th><?php echo $contact["c_address"] ?></th>
                                            <th style="width:10%"><?php echo $contact["c_phone"] ?></th>
                                            <th><?php echo $contact["c_time_open"] ?></th>
                                            
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>