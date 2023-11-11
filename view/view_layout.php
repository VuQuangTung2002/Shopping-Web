	<!DOCTYPE html>
<html>
<head>
<title>Shop-Quan-Ao</title>
<link href="public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
<link href="public/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--theme-style-->
<link href="public/css/style4.css" rel="stylesheet" type="text/css" media="all" />	
<link rel="stylesheet" href="public/css/style.css">
<!--//theme-style-->
<script src="public/js/jquery.min.js"></script>
<!--- start-rate---->
<script src="public/js/jstarbox.js"></script>
	<link rel="stylesheet" href="public/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->
<link href="public/css/form.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<?php ob_start();?>
<!--header-->
<div class="header">
<div class="container">
		<div class="head">
			<div class=" logo">
				<a href="index.php"><img src="public/images/logoDemo.png" alt=""></a>	
			</div>
		</div>
	</div>
	<div class="header-top">
		<div class="container">
		<div class="col-sm-5 col-md-offset-2  header-login">
					<ul >
                    	<li style="color:#FFF"><?php if(isset($_SESSION["dangnhap"]))
							 echo "".$_SESSION["dangnhap"]?></li>
						<?php include_once("controller/controller_menu_login.php")?>
					</ul>
				</div>
				
			<div class="col-sm-5 header-social">		
					<ul >
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
						<li><a href="#"><i class="ic4"></i></a></li>
					</ul>
					
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		
		<div class="container">
		
			<div class="head-top">
			
		 <div class="col-sm-8 col-md-offset-2 h_menu4">
				<nav class="navbar nav_bottom" role="navigation">
 
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a class="color" href="index.php">Trang Chủ</a></li>
            
    		<?php 
				include_once("controller/controller_menu_category_product.php");
			?>
			
			<li><a class="color4" href="index.php?controller=cart">Giỏ Hàng</a></li>
            <!--<li><a class="color5" href="typo.html">Short Codes</a></li>-->
            <li ><a class="color6" href="index.php?controller=contact">Liên Hệ</a></li>
           
        </ul>
     </div><!-- /.navbar-collapse -->

</nav>
			</div>
			<div class="col-sm-2 search-right">
				<ul class="heart">
				
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
					</ul>
					<div class="cart box_1">
						<a href="index.php?controller=cart">
						<h3> <div class="total"><?php echo number_format(cart_total());?>
							</div>
							<img src="public/images/cart.png" alt=""/></h3>
						</a>
						<p>
                        <!--kiem tra xem co ton tai nguoi dung dang nhap hay khong de xem lich su mua hang-->
                        	<?php if(isset($_SESSION["pk_customer_id"])){
								include_once("controller/controller_lichsumuahang.php");}
								//include_once("controller/controller_lichsumuahang.php");}
							//echo $_SESSION["pk_customer_id"];
							?>
                        </p>

					</div>
					<div class="clearfix"> </div>
					
						<!----->

						<!---pop-up-box---->					  
			<link href="public/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
			<script src="public/js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
            <script type="text/javascript">
				function search(){
					var key = document.getElementById('key').value;
					//di chuyen den trang tim kiem
					location.href = "index.php?controller=search_product&key="+key;
				}
			</script>
			<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
					<div class="login-search">
						
                        <input type="text" value="Tìm kiếm..." id="key" onfocus="this.value = '';" >
                              <input type="submit" onclick="search();" value="">
                              
   		
					</div>
					<p>Kiot</p>
				</div>				
			</div>
		 <script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
			});
																						
			});
		</script>		
						<!----->
			</div>
			<div class="clearfix"></div>
		</div>	
	</div>	
</div>
		<!--main-->
			<?php
            	if(file_exists($load_controller))
				include_once("$load_controller");
			?>
        <!--end main-->
			<!--brand-->
			<div class="brand">
				<div class="col-md-3 brand-grid">
					<img src="public/images/ic.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="public/images/ic1.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="public/images/ic2.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="public/images/ic3.png" class="img-responsive" alt="">
				</div>
				<div class="clearfix"></div>
			</div>
			<!--//brand-->
			</div>
			
		</div>
	<!--//content-->
	<!--//footer-->
	<div class="footer">
	<div class="footer-middle">
				<div class="container">
					<div class="col-md-3 footer-middle-in">
						<a href="index.html"><img src="public/images/logoDemo.png" alt=""></a>
						<p>Hiện nay, thương hiệu thời trang Kiot phát triển ngày càng lớn mạnh. Ngoài ra, nhằm tạo sự tiện lợi mua sắm tối đa cho khách hàng, Kiot phát triển hệ thống bán hàng online, giao hàng đến tận tay người tiêu dùng.</p>
					</div>
					
					<div class="col-md-3 footer-middle-in">
						<h6>Thông Tin</h6>
						<ul class=" in">
							<li><a href="404.html"></a></li>
							<li><a href="index.php?controller=contact">Liên Hệ</a></li>
							<li><a href="index.php?controller=contact">Phản Hồi & Góp Ý</a></li>
							<li><a href="index.php?controller=contact">Site Map</a></li>
						</ul>
						<ul class="in in1">
							
							<li><a href="index.php?controller=register">Đăng Ký</a></li>
							<li><a href="index.php?controller=login">Đăng Nhập</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Thẻ</h6>
						<?php
                        	include_once("controller/controller_tagsearch.php");
						?>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Newsletter</h6>
						<span>Sign up for News Letter</span>
							<form>
								<input type="text" value="Enter your E-mail" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Enter your E-mail';}">
								<input type="submit" value="Subscribe">	
							</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<ul class="footer-bottom-top">
						<li><a><img src="public/images/f1.png" class="img-responsive" alt=""></a></li>
						<li><a><img src="public/images/f2.png" class="img-responsive" alt=""></a></li>
						<li><a><img src="public/images/f3.png" class="img-responsive" alt=""></a></li>
					</ul>
					<p class="footer-class">&copy; 2022 Shopin | Design by  <a href="http://w3layouts.com/" target="_blank">Hồng Sơn - Quang Lê</a> </p>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!--//footer-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="public/js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="public/js/bootstrap.min.js"></script>
<!--light-box-files -->
		<script src="public/js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="public/css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('a.picture').Chocolat();
		});
		</script>
<script src="public/js/imagezoom.js"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script defer src="public/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="public/css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

	

<?php ob_end_flush(); ?>
</body>
</html>