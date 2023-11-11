<div class="col-lg-12">
<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

?>
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Quản Lý Sản Phẩm
                        </div>
                        
                        <div class="panel-body">
                        	<div class="row" style="margin-bottom:15px">
                            	<div class="col-lg-6">
                                <a href="index.php?controller=add_product&act=add" class="btn btn-info" role="button"><i class="fa fa-user-plus" aria-hidden="true"></i> Thêm Sản Phẩm</a>
                                </div>
                                <div class="col-lg-6 text-right">
                                	<div class="bs-example" data-example-id="simple-form-inline">
                                        <form class="form-inline" method="post" action="index.php?controller=search_product">
                                          
                                          <div class="form-group">
                                            
                                            <input type="text" name="search_product" class="form-control" id="search_product" placeholder="Nhập từ khóa">
                                          </div>
                                          
                                          <button type="submit" name="ok" class="btn btn-default">Tìm kiếm</button>
                                        </form>
                                      </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                            <form method="post" action="index.php?controller=product">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr style="color:#F00">
                                        	<th><input type="checkbox" onclick="checkall('item',this)" name="check" class="checkbox"/></th>
                                            <th>STT</th>
                                            <th>Ảnh</th>
                                            <th>Tên Sản Phẩm</th>
                                            <th>Mã Sản Phẩm</th>
                                            <th>Thuộc Danh Mục</th>
                                            <th>Giá</th>
                                           	<th>Chất liệu</th>
                                            
                                            <th style="width:20%">Hành Động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    	$stt=0;
										foreach($arr_product as $product)
										{
											$stt++;
									?>
                                        <tr class="odd gradeX">
                                        <th><input class="item" type="checkbox" value="<?php echo $product["pk_product_id"]?>" name="product_id[]" class="ckeckbox"/></th>
                                            <th><?php echo $stt;?></th>
                                            <th><img src="../<?php echo $product["c_img"]; ?>" width="50" height="50"/></th>
                                            <th><?php echo $product["c_name"]?></th>
                                            <th><?php echo $product["c_masp"]?></th>
                                            
                                            <th><?php
												$category = fetch_one("select c_name from tbl_category_product where pk_category_product_id=".$product["fk_category_product_id"]);
												echo $category["c_name"];
											?>
                            				</th>
                                            <th><?php echo $product["c_price"]?></th>
                                            <th><?php echo $product["c_chatlieu"]?></th>
                                            <th>
                                            <a href="index.php?controller=detail_product&id=<?php echo $product["pk_product_id"]?>" class="btn btn-primary" role="button">Chi tiết</a>
                                            	<a onclick="return window.confirm('Bạn muốn xóa?');" href="index.php?controller=product&act=delete&id=<?php echo $product["pk_product_id"]?>" class="btn btn-warning" role="button">Xóa</a>
                                            <a href="index.php?controller=edit_product&act=edit&id=<?php echo $product["pk_product_id"]?>" class="btn btn-primary" role="button">Sửa</a>
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
                            <div>
                            <ul class="pagination" style="padding:0px; margin:0px;">
                                <?php for($i = 1; $i <= $num_page; $i++){ ?>
                                <li><a href="index.php?controller=product&p=<?php echo $i;?>">
                                    <?php echo $i;?></a>
                            </li>
                                <?php } ?>
                            </ul>
				</div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>