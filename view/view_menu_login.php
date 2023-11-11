	<?php
    	if(isset($_SESSION["dangnhap"])){
			echo '
			<li><a href="index.php?controller=logout">Đăng xuất</a></li>';
		}
		else{
			echo '<li><a href="index.php?controller=login">Đăng nhập</a></li>
						<li><a href="index.php?controller=register">Đăng ký</a></li>';
		}
	?>