<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop-Quan-Ao</title>
    <!-- Core CSS - Include with every page -->
   
    <link href="public/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="public/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="public/assets/css/style.css" rel="stylesheet" />
    <link href="public/assets/css/main-style.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="public/font-awesome-4.6.3/css/font-awesome.min.css">
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <script type="text/javascript" src="controller/function.js"></script>
    <script language="javascript" src="public/ckeditor/ckeditor.js"></script>
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="color:#FFF;font-size:25px;font-weight:bold">
                    <!--<img src="public/assets/img/logo.png" alt="" />-->
                    Shop-Quan-Ao
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                

                

                

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="index.php?controller=detail_
personal&id=<?php if(isset($_SESSION["pk_user_id"])&& $_SESSION['pk_user_id']){echo ''.$_SESSION["pk_user_id"];}?>"><i class="fa fa-user fa-fw"></i>Thông Tin Cá nhân</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li><a href="index.php?controller=logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <?php
                        	include_once("controller/controller_inforuser.php");
						?>
                        
                        <!--end user image section-->
                    </li>
                    
                    <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="user"?'selected':""?>">
                        <a href="index.php?controller=user"><i class="fa fa-dashboard fa-fw"></i>Quản Lý Nhân viên</a>
                    </li>
                    <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="category_product"?'selected':""?>">
                        <a href="index.php?controller=category_product"><i class="fa fa-dashboard fa-fw"></i>Quản lý Danh Mục Sản Phẩm</a>
                    </li>
                    <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="product"?'selected':""?>">
                        <a href="index.php?controller=product"><i class="fa fa-dashboard fa-fw"></i>Quản lý Sản Phẩm</a>
                    </li>
                    <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="album_product"?'selected':""?>">
                        <a href="index.php?controller=album_product"><i class="fa fa-dashboard fa-fw"></i>Ảnh Sản Phẩm</a>
                    </li>
                    <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="bill"?'selected':""?>">
                        <a href="index.php?controller=bill"><i class="fa fa-dashboard fa-fw"></i>Quản lý Đơn Hàng</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Quản Lý Chung<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="index.php?controller=feedback">Phản Hồi & Góp Ý Khách Hàng</a>
                            </li>
                            <li>
                                <a href="index.php?controller=contact">Liên Hệ</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
                <!--End Page Header -->
            </div>

            

            <div class="row">
                <?php
         	if(file_exists($load_controller))
			include_once("$load_controller");
         		?> 

            </div>



         


        </div>
        <!-- end page-wrapper -->

    </div>
    <!--test-->
    
    <!-- end test-->
    
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="public/assets/plugins/jquery-1.10.2.js"></script>
    <script src="public/assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="public/assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="public/assets/plugins/pace/pace.js"></script>
    <script src="public/assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="public/assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="public/assets/plugins/morris/morris.js"></script>
    <script src="public/assets/scripts/dashboard-demo.js"></script>

</body>

</html>
