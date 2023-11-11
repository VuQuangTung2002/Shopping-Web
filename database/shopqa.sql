-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 15, 2022 lúc 03:46 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopqa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_album_product`
--

CREATE TABLE `tbl_album_product` (
  `pk_album_product_id` int(11) NOT NULL,
  `fk_product_id` varchar(500) NOT NULL,
  `c_img` varchar(500) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_album_product`
--

INSERT INTO `tbl_album_product` (`pk_album_product_id`, `fk_product_id`, `c_img`, `status`) VALUES
(218, '31', 'upload/anhsanpham/1653305877a1.png', 1),
(219, '31', 'upload/anhsanpham/1653305888a2.png', 1),
(220, '31', 'upload/anhsanpham/1653305897a3.png', 1),
(225, '33', 'upload/anhsanpham/1653307514abc1.png', 1),
(226, '33', 'upload/anhsanpham/1653307514abc2.png', 1),
(227, '33', 'upload/anhsanpham/1653307514abc3.png', 1),
(231, '34', 'upload/anhsanpham/1653309908abcdefg1.png', 1),
(232, '34', 'upload/anhsanpham/1653309908abcdefg2.png', 1),
(233, '34', 'upload/anhsanpham/1653309908abcdefg3.png', 1),
(237, '35', 'upload/anhsanpham/1653320962abcdefgh1.png', 1),
(238, '35', 'upload/anhsanpham/1653320962abcdefgh2.png', 1),
(239, '35', 'upload/anhsanpham/1653320962abcdefgh3.png', 1),
(243, '4', 'upload/anhsanpham/1653364418abcdef1.png', 1),
(244, '4', 'upload/anhsanpham/1653364418abcdef2.png', 1),
(245, '4', 'upload/anhsanpham/1653364418abcdef3.png', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `pk_category_product_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`pk_category_product_id`, `c_name`, `c_parent_id`) VALUES
(2, 'Thời Trang Bé Trai', 0),
(37, 'Thời Trang Bé Gái', 0),
(38, 'Váy bé gái', 37),
(39, 'Đồ bộ bé trai', 2),
(41, 'Quần bé trai', 2),
(42, 'Áo bé trai', 2),
(43, 'Giày dép bé trai ', 2),
(44, 'Đồ bộ bé gái', 37);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `pk_comment_id` int(11) NOT NULL,
  `fk_product_id` int(11) NOT NULL,
  `fk_customer_id` int(11) NOT NULL,
  `c_date_create` varchar(500) NOT NULL,
  `c_content` text NOT NULL,
  `c_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `pk_contact_id` int(11) NOT NULL,
  `c_address` varchar(500) NOT NULL,
  `c_phone` varchar(11) NOT NULL,
  `c_email` varchar(200) NOT NULL,
  `c_time_open` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_contact`
--

INSERT INTO `tbl_contact` (`pk_contact_id`, `c_address`, `c_phone`, `c_email`, `c_time_open`) VALUES
(2, 'Bắc Từ Liêm - Hà Nội', '012345678', 'abc@gmail.com', 'Thứ 2 đến Chủ nhật, 7h sáng - 10h tối');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `pk_customer_id` int(11) NOT NULL,
  `c_fullname` varchar(500) NOT NULL,
  `c_password` varchar(500) NOT NULL,
  `c_email` varchar(500) NOT NULL,
  `c_date_create` date NOT NULL,
  `c_phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`pk_customer_id`, `c_fullname`, `c_password`, `c_email`, `c_date_create`, `c_phone`) VALUES
(6, 'Hoa Minh Quang', '123456789', 'quang@gmail.com', '2022-05-09', '123456678'),
(7, 'Hoa Minh Quang', '12345678', '123123quang@gmail.com', '2022-05-24', '213120321'),
(8, 'Hoa Minh Quang', '12345678', '13123@gmail.com', '2022-05-24', '213120321');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `pk_feedback_id` int(11) NOT NULL,
  `c_fullname` varchar(500) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_phone` varchar(12) NOT NULL,
  `c_message` text NOT NULL,
  `c_date_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`pk_feedback_id`, `c_fullname`, `c_email`, `c_phone`, `c_message`, `c_date_create`) VALUES
(1, 'Lê Văn Quang', 'nhat123@gmail.com', '123456789', 'Rất hài lòng!', '2022-02-04'),
(4, 'Hoa Minh Quang', '123123quang@gmail.com', '0123456678', 'qsqwswswqs', '2022-05-24'),
(5, 'Hoa Minh Quang', '13123@gmail.com', '0213120321', 'abc', '2022-05-24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `pk_order_id` int(11) NOT NULL,
  `fk_transaction_id` int(11) NOT NULL,
  `c_price` float NOT NULL,
  `c_number` int(11) NOT NULL,
  `c_date_create` date NOT NULL,
  `c_status` int(11) NOT NULL,
  `fk_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`pk_order_id`, `fk_transaction_id`, `c_price`, `c_number`, `c_date_create`, `c_status`, `fk_product_id`) VALUES
(10, 6, 85000, 3, '2022-05-09', 0, 20),
(11, 7, 50000, 1, '2022-05-09', 0, 30),
(12, 8, 50000, 1, '2022-05-16', 0, 30),
(13, 9, 159000, 1, '2022-05-23', 0, 34),
(14, 10, 139000, 3, '2022-05-23', 0, 31),
(15, 11, 159000, 1, '2022-05-23', 0, 32),
(16, 12, 139000, 1, '2022-05-23', 0, 35),
(17, 13, 159000, 1, '2022-05-24', 0, 34),
(18, 14, 159000, 1, '2022-05-24', 0, 34),
(19, 14, 139000, 1, '2022-05-24', 0, 4),
(20, 15, 139000, 1, '2022-05-24', 0, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pk_product_id` int(11) NOT NULL,
  `fk_category_product_id` int(11) NOT NULL,
  `c_masp` varchar(500) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_description` varchar(2000) NOT NULL,
  `c_color` varchar(500) NOT NULL,
  `c_chatlieu` varchar(50) NOT NULL,
  `c_noidung` text NOT NULL,
  `c_nguongoc` varchar(500) NOT NULL,
  `c_img` varchar(500) NOT NULL,
  `c_price` float NOT NULL,
  `c_date_created` date NOT NULL,
  `c_sex` varchar(15) NOT NULL,
  `c_sanphamnoibat` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`pk_product_id`, `fk_category_product_id`, `c_masp`, `c_name`, `c_description`, `c_color`, `c_chatlieu`, `c_noidung`, `c_nguongoc`, `c_img`, `c_price`, `c_date_created`, `c_sex`, `c_sanphamnoibat`, `total`) VALUES
(4, 38, '15225', 'VCTSN01-VÁY COTTON 4 CHIỀU 2/10', 'Thương hiệu LITIBABY là thương hiệu thời trang trẻ em Việt được yêu thích nhất. Luôn hướng đến một sứ mệnh đó là tạo ra những sản phẩm thời trang tinh tế, hợp xu hướng và mang tính ứng dụng cao, luôn phù hợp với trẻ em Việt Nam. ', 'Tím, Trắng', 'len phối voan', 'VCTSN01-VÁY COTTON 4 CHIỀU 2/10. Kiểu dáng thanh lịch, sang trọng, họa tiết xinh xắn Kiểu dáng thời trang, thiết kế thời thượng mang đến sự xinh xắn, đáng yêu cho bé gái khi mặc Kiểu áo Hàn Quốc xinh xắn, xu hướng hot nhất 2022 đem đến cho bé gái một vẻ ngoài đầy dễ thương, cho bé gái tự tin bay bổng Thiết kế độc đáo, kiểu dáng ấn tượng để trông càng thêm thu hút và thời trang Kết hợp thêm áo khoác hay giày thể thao…', 'Việt Nam', 'upload/anhsanpham/abcdef1.png', 139000, '2022-02-09', 'Nữ', 1, 0),
(31, 39, '15100', 'BỘ PLACE BÉ TRAI NGẮN TAY 4/14', 'Thương hiệu LITIBABY là thương hiệu thời trang trẻ em Việt được yêu thích nhất. Luôn hướng đến một sứ mệnh đó là tạo ra những sản phẩm thời trang tinh tế, hợp xu hướng và mang tính ứng dụng cao, luôn phù hợp với trẻ em Việt Nam. ', 'Giống như hình', 'COOTON', 'BỘ PLACE BÉ TRAI NGẮN TAY 4/14. Kiểu dáng thanh lịch, sang trọng, họa tiết xinh xắn Kiểu dáng thời trang, thiết kế thời thượng mang đến sự xinh xắn, đáng yêu cho bé gái khi mặc Kiểu áo Hàn Quốc xinh xắn, xu hướng hot nhất 2022 đem đến cho bé gái một vẻ ngoài đầy dễ thương, cho bé gái tự tin bay bổng Thiết kế độc đáo, kiểu dáng ấn tượng để trông càng thêm thu hút và thời trang Kết hợp thêm áo khoác hay giày thể thao…                        ', 'Việt Nam', 'upload/anhsanpham/a1.png', 139000, '2022-05-23', 'Nam', 1, 0),
(33, 42, '15102', 'ÁO CHỐNG NẮNG HI DO M L XL', 'Thương hiệu LITIBABY là thương hiệu thời trang trẻ em Việt được yêu thích nhất. Luôn hướng đến một sứ mệnh đó là tạo ra những sản phẩm thời trang tinh tế, hợp xu hướng và mang tính ứng dụng cao, luôn phù hợp với trẻ em Việt Nam. ', 'Giống như hình', 'COOTON', 'ÁO CHỐNG NẮNG HI DO M L XL. Kiểu dáng thanh lịch, sang trọng, họa tiết xinh xắn Kiểu dáng thời trang, thiết kế thời thượng mang đến sự xinh xắn, đáng yêu cho bé gái khi mặc Kiểu áo Hàn Quốc xinh xắn, xu hướng hot nhất 2022 đem đến cho bé gái một vẻ ngoài đầy dễ thương, cho bé gái tự tin bay bổng Thiết kế độc đáo, kiểu dáng ấn tượng để trông càng thêm thu hút và thời trang Kết hợp thêm áo khoác hay giày thể thao…                                                                                                ', 'Việt Nam', 'upload/anhsanpham/abc1.png', 163000, '2022-05-23', 'Nam', 1, 0),
(34, 44, '15103', 'BỘ PALCE BÉ GÁI CÓ TAY 4/14', 'Thương hiệu LITIBABY là thương hiệu thời trang trẻ em Việt được yêu thích nhất. Luôn hướng đến một sứ mệnh đó là tạo ra những sản phẩm thời trang tinh tế, hợp xu hướng và mang tính ứng dụng cao, luôn phù hợp với trẻ em Việt Nam. ', 'Giống như hình', 'Vải', 'BỘ PALCE BÉ GÁI CÓ TAY 4/14. Kiểu dáng thanh lịch, sang trọng, họa tiết xinh xắn Kiểu dáng thời trang, thiết kế thời thượng mang đến sự xinh xắn, đáng yêu cho bé gái khi mặc Kiểu áo Hàn Quốc xinh xắn, xu hướng hot nhất 2022 đem đến cho bé gái một vẻ ngoài đầy dễ thương, cho bé gái tự tin bay bổng Thiết kế độc đáo, kiểu dáng ấn tượng để trông càng thêm thu hút và thời trang Kết hợp thêm áo khoác hay giày thể thao…                                                                                                                                                                        ', 'Việt Nam', 'upload/anhsanpham/abcdefg1.png', 159000, '2022-05-23', 'Nữ', 1, 0),
(35, 41, '15104', 'QUẦN COTTON BT HỌA TIẾT 1/7', 'Thương hiệu LITIBABY là thương hiệu thời trang trẻ em Việt được yêu thích nhất. Luôn hướng đến một sứ mệnh đó là tạo ra những sản phẩm thời trang tinh tế, hợp xu hướng và mang tính ứng dụng cao, luôn phù hợp với trẻ em Việt Nam. ', 'Giống như hình', 'COOTON', 'QUẦN COTTON BT HỌA TIẾT 1/7. Kiểu dáng thanh lịch, sang trọng, họa tiết xinh xắn Kiểu dáng thời trang, thiết kế thời thượng mang đến sự xinh xắn, đáng yêu cho bé gái khi mặc Kiểu áo Hàn Quốc xinh xắn, xu hướng hot nhất 2022 đem đến cho bé gái một vẻ ngoài đầy dễ thương, cho bé gái tự tin bay bổng Thiết kế độc đáo, kiểu dáng ấn tượng để trông càng thêm thu hút và thời trang Kết hợp thêm áo khoác hay giày thể thao…                                                                                                                                                                                                ', 'Việt Nam', 'upload/anhsanpham/abcdefgh1.png', 139000, '2022-05-23', 'Nam', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `pk_transaction_id` int(11) NOT NULL,
  `c_status` int(11) NOT NULL,
  `fk_customer_id` int(11) NOT NULL,
  `c_date_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`pk_transaction_id`, `c_status`, `fk_customer_id`, `c_date_create`) VALUES
(6, 0, 6, '2022-05-09'),
(7, 0, 6, '2022-05-09'),
(8, 0, 6, '2022-05-16'),
(9, 0, 6, '2022-05-23'),
(10, 0, 6, '2022-05-23'),
(11, 0, 6, '2022-05-23'),
(12, 0, 6, '2022-05-23'),
(13, 0, 7, '2022-05-24'),
(14, 0, 7, '2022-05-24'),
(15, 0, 7, '2022-05-24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `pk_user_id` int(11) NOT NULL,
  `c_username` varchar(250) NOT NULL,
  `c_fullname` varchar(250) NOT NULL,
  `c_img` varchar(500) NOT NULL,
  `c_password` varchar(500) NOT NULL,
  `c_phone` varchar(12) NOT NULL,
  `c_email` varchar(250) NOT NULL,
  `c_address` varchar(500) NOT NULL,
  `c_sex` varchar(10) NOT NULL,
  `c_date_created` date NOT NULL,
  `c_birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`pk_user_id`, `c_username`, `c_fullname`, `c_img`, `c_password`, `c_phone`, `c_email`, `c_address`, `c_sex`, `c_date_created`, `c_birthday`) VALUES
(12, 'quanghoa', 'Hoa Minh Quang', 'upload/anhdaidien/1488613138ch2.jpg', '123456', '232142131', 'quang@gmail.com', 'ha noi', 'nam', '2022-05-02', '2022-05-04');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_album_product`
--
ALTER TABLE `tbl_album_product`
  ADD PRIMARY KEY (`pk_album_product_id`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`pk_category_product_id`);

--
-- Chỉ mục cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`pk_comment_id`);

--
-- Chỉ mục cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`pk_contact_id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`pk_customer_id`);

--
-- Chỉ mục cho bảng `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`pk_feedback_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`pk_order_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pk_product_id`);

--
-- Chỉ mục cho bảng `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`pk_transaction_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`pk_user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_album_product`
--
ALTER TABLE `tbl_album_product`
  MODIFY `pk_album_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `pk_category_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `pk_comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `pk_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `pk_customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `pk_feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `pk_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pk_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `pk_transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `pk_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
