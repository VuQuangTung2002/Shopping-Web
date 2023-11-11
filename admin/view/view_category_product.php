<div class="col-lg-8 col-md-offset-2">
<?php
	
?>
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Quản Lý Danh Mục Sản Phẩm
                        </div>
                        <div class="panel-body">
                        	<div class="row" style="margin-bottom:15px">
                            	<div class="col-lg-6">
                                <a href="index.php?controller=add_category_product&act=add" class="btn btn-info" role="button"><i class="fa fa-user-plus" aria-hidden="true"></i> Thêm Danh Mục Sản Phẩm</a>
                                </div>
                                <div class="col-lg-6"></div>
                            </div>
                            <div class="table-responsive">
                            <form method="post" action="index.php?controller=category_product">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr style="color:#F00">
                                        	<th><input type="checkbox" onclick="checkall('item',this)" name="check" class="checkbox"/></th>
                                            <th>STT</th>
                                            <th>Tên Danh Mục Sản Phẩm</th>
                                            <th>Hành Động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    	$stt=0;
										foreach($arr_category_prodcut as $category_prodcut)
										{
											$stt++;
											//$id=$category_prodcut["pk_category_product_id"];
											//$subs=fetch("select * from tbl_category_product where c_parent_id =$id");
							
											//$rows["subs"]=$subs;
									?>
                                        <tr class="odd gradeX">
                                        <th style="width:10%"><input class="item" type="checkbox" value="<?php echo $category_prodcut["pk_category_product_id"]?>" name="category_product_id[]" class="ckeckbox"/></th>
                                        <th><?php echo $stt;?></th>
                                            <th><?php echo $category_prodcut["c_name"]?>
                                            
                                            </th>
                                            
                                            
                                            
                                            <th style="width:20%">
                                            	<a onclick="return window.confirm('Bạn muốn xóa?');" href="index.php?controller=category_product&act=delete&id=<?php echo $category_prodcut["pk_category_product_id"]?>" class="btn btn-warning" role="button">Xóa</a>
                                            <a href="index.php?controller=edit_category_product&act=edit&id=<?php echo $category_prodcut["pk_category_product_id"]?>" class="btn btn-primary" role="button">Sửa</a>
                                            </th>
                                        </tr>
                                       
                                    <?php }?> 
                                     <tr class="odd gradeX">
                                        	<th><input type="submit" value="Xóa" class="btn btn-primary"/></th>
                                        </tr>
                                    </tbody>
                                </table>
                                </form>
                            </div>
                                <ul class="pagination" style="padding:0px; margin:0px;">
									<?php for($i = 1; $i <= $num_page; $i++){ ?>
                                    <li><a href="index.php?controller=user&p=<?php echo $i;?>">
                                    <?php echo $i;?></a>
                                    </li>
                                    <?php } ?>
                                </ul>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>