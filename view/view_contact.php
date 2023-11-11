<!--banner-->
	<div class="banner-top">
	<div class="container">
		<h1>Liên Hệ</h1>
		<em></em>
		<h2><a href="index.html">Home</a><label>/</label>Liên Hệ</a></h2>
	</div>
</div>	
		
			<div class="contact">
					
				<div class="contact-form">
					<div class="container">
					<div class="col-md-6 contact-left">
						<h3>ĐẢM BẢO HÀI LÒNG</h3>
						<p>Kiot cam kết chất lượng cho tất cả sản phẩm bán chạy tại cửa hàng Kiot bằng chính sách bảo hành 365 ngày và chăm sóc trọn đời sau khi hết bảo hành.</p>
                        <p>Kiot phục vụ chất lượng tốt nhất, chuyên nghiệp nhất cho mọi khách hàng bằng chính sách hoàn tiền và tặng quà nếu nhân viên phục vụ quý khách không chu đáo</p>
                        <p>Nếu các bạn gặp rắc rối về sản phẩm hay chất lượng dịch vụ của Kiot, hay gọi ngay đến số 0963990343</p>
					
			
					<div class="address">
					<div class=" address-grid">
							<i class="glyphicon glyphicon-map-marker"></i>
							<div class="address1">
								<h3>Địa Chỉ:</h3>
								<p><?php echo $contact["c_address"]?></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class=" address-grid ">
							<i class="glyphicon glyphicon-phone"></i>
							<div class="address1">
							<h3>Số Điện Thoại:<h3>
								<p><?php echo $contact["c_phone"]?></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class=" address-grid ">
							<i class="glyphicon glyphicon-envelope"></i>
							<div class="address1">
							<h3>Email:</h3>
								<p><?php echo $contact["c_email"]?></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class=" address-grid ">
							<i class="glyphicon glyphicon-bell"></i>
							<div class="address1">
								<h3>Thời Gian Mở:</h3>
								<p><?php echo $contact["c_time_open"]?></p>
							</div>
							<div class="clearfix"> </div>
						</div>
</div>
				</div>
				<div class="col-md-6 contact-top">
					<h3>Chúng tôi luôn lắng nghe những phản hồi từ các bạn</h3>
					<form method="post" action="index.php?controller=contact">
						<div>
							<span>Họ Tên </span>		
							<input type="text" name="c_fullname" value="" placeholder="Nhập đầy đủ tên của bạn" required="required">						
						</div>
						<div>
							<span>Email </span>		
							<input type="text" name="c_email" value="" placeholder="Nhập địa chỉ email của bạn" required="required" >						
						</div>
						<div>
							<span>Điện Thoại</span>		
							<input type="text" name="c_phone" value="" placeholder="Nhập số điện thoại của bạn">	
						</div>
						<div>
							<span>Tin Nhắn</span>		
							<textarea name="c_message" required="required"></textarea>	
						</div>
						<label class="hvr-skew-backward">
								<input type="submit" value="Gửi" >
						</label>
</form>						
				</div>
		<div class="clearfix"></div>
		</div>
		</div>
 
		<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>
					</div>
	</div>

<!--//contact-->