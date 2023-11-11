<div class="col-lg-12">

                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Quản Lý Chi Tiết Ảnh Sản Phẩm
                        </div>
                        
                        <div class="panel-body">
                        	<div class="row" style="margin-bottom:15px">
                            	<div class="col-lg-6">
                                <a href="index.php?controller=add_album_product&act=add" class="btn btn-info" role="button"><i class="fa fa-user-plus" aria-hidden="true"></i> Thêm Ảnh</a>
                                </div>
                                <div class="col-lg-6"></div>
                            </div>
                            <div class="table-responsive">
                            <form method="post" action="index.php?controller=album_product">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr style="color:#F00">
                                        	<th style="width:5%"><input type="checkbox" onclick="checkall('item',this)" name="check" class="checkbox"/></th>
                                            <th>STT</th>
                                            <th style="width:10%">Ảnh</th>
                                            <th>Sản Phẩm</th>
                                            <th>Mã Sản Phẩm</th>
                                            <th style="width:10%">Trạng Thái</th>
                                            <th style="width:15%">Hành Động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php 
									$stt=0;
									foreach($album_img as $img)
									{
										$stt++;
								?>
                                        <tr class="odd gradeX">
                                        <th><input class="item" type="checkbox" value="<?php echo $img["pk_album_product_id"]?>" name="pk_album_product_id[]" class="ckeckbox"/></th>
                                            <th><?php echo $stt?></th>
                                            <th><img src="../<?php echo $img["c_img"]?>" width="100" height="100"/></th>
                                            <th>
                                            	<?php 
												$pk_product_id=fetch_one("select c_name from tbl_product where pk_product_id=".$img["fk_product_id"]);
												echo $pk_product_id["c_name"];
											?>
                                            </th>
                                            <th>
												<?php 
                                                    $pk_product_id=fetch_one("select c_masp from tbl_product where pk_product_id=".$img["fk_product_id"]);
                                                    echo $pk_product_id["c_masp"];
                                                ?>
                                            </th>
                                            
                                            <th>
                                            	<?php 
													 if($img["status"]==1){
														echo "Hiện";	 
														}
														else
														echo "Ản";
												?>
                                            </th>
                                            <th>
                                            
                                            	<a onclick="return window.confirm('Bạn muốn xóa?');" href="index.php?controller=album_product&act=delete&id=<?php echo $img["pk_album_product_id"]?>" class="btn btn-warning" role="button">Xóa</a>
                                            <a href="index.php?controller=edit_album_product&act=edit&id=<?php echo $img["pk_album_product_id"]?>" class="btn btn-primary" role="button">Sửa</a>
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
                                <li class="<?php echo isset($_GET["p"])&&$_GET["p"]==$i?"active":""?>"><a href="index.php?controller=album_product&p=<?php echo $i;?>">
                                    <?php echo $i;?></a>
                            </li>
                                <?php } ?>
                            </ul>
				</div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>