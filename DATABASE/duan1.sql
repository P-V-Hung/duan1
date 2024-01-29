-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 29, 2024 lúc 03:49 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `bill_userid` int(11) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(10) NOT NULL,
  `bill_username` varchar(50) NOT NULL,
  `bill_fullname` varchar(155) NOT NULL,
  `bill_price` float NOT NULL,
  `bill_count` int(11) NOT NULL,
  `bill_pttt` varchar(155) NOT NULL,
  `bill_status` int(11) NOT NULL,
  `bill_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `bill_userid`, `bill_address`, `bill_tel`, `bill_username`, `bill_fullname`, `bill_price`, `bill_count`, `bill_pttt`, `bill_status`, `bill_create`) VALUES
(47, 20, 'nhà 17, Xã Hoằng Phong, Huyện Hoằng Hóa, Tỉnh Thanh Hóa', '035252253', 'duong', 'duong', 100, 0, 'Thanh toán khi nhận hàng', 1, '2023-12-06'),
(50, 20, 'nhà 17, Xã Hoằng Phong, Huyện Hoằng Hóa, Tỉnh Thanh Hóa', '035252253', 'duong', 'duong', 100000, 0, 'Thanh toán khi nhận hàng', 3, '2023-12-06'),
(51, 1, 'Nam Định', '0345987599', 'dqhien04', 'HIến', 14, 4, 'Thanh toán khi nhận hàng', 5, '2023-12-06'),
(52, 20, 'nhà 17, Xã Hoằng Phong, Huyện Hoằng Hóa, Tỉnh Thanh Hóa', '035252253', 'duong', 'duong', 36100000, 1, 'Thanh toán khi nhận hàng', 5, '2023-12-06'),
(53, 20, 'nhà 17, Xã Hoằng Phong, Huyện Hoằng Hóa, Tỉnh Thanh Hóa', '035252253', 'duong', 'duong', 32100000, 1, 'Thanh toán khi nhận hàng', 5, '2023-12-06'),
(54, 23, 'Số 2a ngõ 1432, Xã An Thịnh, Huyện Lương Tài, Tỉnh Bắc Ninh', '0333026322', 'azhung2004', 'Phạm Văn Hùng', 3600000, 1, 'Thanh toán khi nhận hàng', 5, '2023-12-06'),
(55, 20, 'nhà 17, Xã Hoằng Phong, Huyện Hoằng Hóa, Tỉnh Thanh Hóa', '035252253', 'duong', 'duong', 26100000, 2, 'Thanh toán khi nhận hàng', 5, '2023-12-06'),
(57, 22, 'Bắc Ninh', '0283973748', 'ductung1410', 'Quyết', 168100000, 8, 'Chuyển khoản ngân hàng', 5, '2023-12-06'),
(60, 23, 'Số 2a ngõ 1432, Xã An Thịnh, Huyện Lương Tài, Tỉnh Bắc Ninh', '0333026322', 'azhung2004', 'Phạm Văn Hùng', 6600000, 1, 'Thanh toán khi nhận hàng', 5, '2023-12-07'),
(61, 29, '123 Phươnh Canh ', '0567456345', 'hien12345', 'Quang Hiến', 19, 1, 'Thanh toán khi nhận hàng', 1, '2023-12-07'),
(62, 29, 'hải hậu - nam định', '0567456345', 'hien12345', 'Quang Hiến', 20, 2, 'Thanh toán khi nhận hàng', 1, '2023-12-07'),
(63, 29, 'cn, Phường Cổ Nhuế 2, Quận Bắc Từ Liêm, Thành phố Hà Nội', '0766467743', 'hien12345', 'Quang HIến', 27, 3, 'Thanh toán khi nhận hàng', 1, '2023-12-07'),
(64, 29, 'cn, Phường Cổ Nhuế 2, Quận Bắc Từ Liêm, Thành phố Hà Nội', '0766467743', 'hien12345', 'Quang HIến', 14, 1, 'Thanh toán khi nhận hàng', 1, '2023-12-07'),
(65, 23, 'Số 2a ngõ 1432, Xã An Thịnh, Huyện Lương Tài, Tỉnh Bắc Ninh', '0333026322', 'azhung2004', 'Phạm Văn Hùng', 15100000, 1, 'Thanh toán khi nhận hàng', 1, '2023-12-07'),
(66, 23, 'Số 2a ngõ 1432, Xã An Thịnh, Huyện Lương Tài, Tỉnh Bắc Ninh', '0333026322', 'azhung2004', 'Phạm Văn Hùng', 20100000, 1, 'Thanh toán khi nhận hàng', 5, '2023-12-07'),
(67, 29, 'cn, Phường Cổ Nhuế 2, Quận Bắc Từ Liêm, Thành phố Hà Nội', '0766467743', 'hien12345', 'Quang HIến', 28100000, 1, 'Thanh toán khi nhận hàng', 1, '2023-12-07'),
(68, 23, 'Số 2a ngõ 1432, Xã An Thịnh, Huyện Lương Tài, Tỉnh Bắc Ninh', '0333026322', 'azhung2004', 'Phạm Văn Hùng', 30100000, 1, 'Thanh toán khi nhận hàng', 5, '2023-12-08'),
(69, 23, 'Số 2a ngõ 1432, Xã An Thịnh, Huyện Lương Tài, Tỉnh Bắc Ninh', '0333026322', 'azhung2004', 'Phạm Văn Hùng', 100600000, 5, 'Thanh toán khi nhận hàng', 5, '2023-12-08'),
(70, 23, 'Số 2a ngõ 1432, Xã An Thịnh, Huyện Lương Tài, Tỉnh Bắc Ninh', '0333026322', 'azhung2004', 'Phạm Văn Hùng', 13100000, 1, 'Thanh toán khi nhận hàng', 5, '2023-12-08'),
(71, 3, 'Thanh Lâm An Thịnh', '0949093318', 'quyet', 'Trần Minh Quyết', 12100000, 1, 'Thanh toán khi nhận hàng', 5, '2023-12-08'),
(72, 32, 'Số 2A ngõ 173, Xã An Thịnh, Huyện Lương Tài, Tỉnh Bắc Ninh', '0333026322', 'demo', 'Đề Văn Mô', 70100000, 5, 'Thanh toán khi nhận hàng', 5, '2023-12-08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_info`
--

CREATE TABLE `bill_info` (
  `id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `pp_id` bigint(20) NOT NULL,
  `pro_price` float NOT NULL,
  `pro_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_info`
--

INSERT INTO `bill_info` (`id`, `bill_id`, `proid`, `userid`, `pp_id`, `pro_price`, `pro_count`) VALUES
(49, 45, 41, 16, 51, 32, 9),
(50, 46, 28, 16, 38, 32000000, 1),
(51, 46, 55, 16, 63, 30000000, 1),
(52, 51, 57, 1, 75, 3500000, 4),
(53, 52, 57, 20, 72, 36000000, 1),
(54, 53, 56, 20, 68, 32000000, 1),
(55, 54, 57, 23, 75, 3500000, 1),
(56, 55, 60, 20, 86, 6000000, 1),
(57, 55, 61, 20, 89, 20000000, 1),
(58, 56, 59, 22, 83, 15000000, 5),
(59, 56, 62, 22, 91, 22000000, 5),
(60, 56, 61, 22, 90, 30000000, 5),
(61, 57, 62, 22, 92, 30000000, 4),
(62, 57, 60, 22, 88, 12000000, 4),
(63, 58, 61, 24, 89, 20000000, 4),
(64, 59, 63, 22, 94, 10000000, 3),
(65, 59, 64, 22, 96, 3000000, 1),
(66, 60, 88, 23, 138, 6500000, 1),
(67, 61, 70, 29, 105, 19000000, 1),
(68, 62, 90, 29, 143, 10000000, 2),
(69, 63, 88, 29, 138, 6500000, 2),
(70, 63, 76, 29, 117, 14000000, 1),
(71, 64, 75, 29, 114, 14000000, 1),
(72, 65, 69, 23, 102, 20000000, 1),
(73, 66, 87, 23, 137, 20000000, 1),
(74, 67, 67, 29, 99, 30000000, 1),
(75, 68, 69, 23, 103, 30000000, 1),
(76, 69, 67, 23, 99, 30000000, 1),
(77, 69, 74, 23, 113, 50000000, 1),
(78, 69, 73, 23, 110, 5000000, 1),
(79, 69, 88, 23, 138, 6500000, 1),
(80, 69, 78, 23, 120, 14000000, 1),
(81, 70, 72, 23, 151, 13000000, 1),
(82, 71, 72, 3, 148, 12000000, 1),
(83, 72, 69, 32, 102, 20000000, 1),
(84, 72, 70, 32, 105, 19000000, 1),
(85, 72, 90, 32, 143, 10000000, 1),
(86, 72, 85, 32, 134, 14000000, 1),
(87, 72, 72, 32, 146, 12000000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_status`
--

CREATE TABLE `bill_status` (
  `id` int(11) NOT NULL,
  `sb_name` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_status`
--

INSERT INTO `bill_status` (`id`, `sb_name`) VALUES
(1, 'Chờ xác nhận'),
(2, 'Đã xác nhận'),
(3, 'Đã đóng gói'),
(4, 'Đang vận chuyển'),
(5, 'Đã nhận hàng'),
(6, 'Hủy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_idparent` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_idparent`) VALUES
(40, 'Laptop', 0),
(41, 'Điện thoại', 0),
(42, 'Điều hòa', 0),
(43, 'Tủ lạnh', 0),
(44, 'Máy giặt', 0),
(45, 'Iphone', 41),
(46, 'Samsung', 41),
(47, 'Oppo', 41),
(48, 'Acer', 40),
(49, 'Dell', 40),
(50, 'Asus', 40),
(51, 'MSI', 40),
(52, 'Casper', 42),
(53, 'Nokia', 41),
(54, 'Panasonic', 42),
(55, 'Samsung', 42),
(56, 'Panasonic', 43),
(57, 'LG', 43),
(58, 'Tivi', 0),
(59, 'Samsung', 58),
(60, 'LG', 58);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `com_content` varchar(155) NOT NULL,
  `com_img` varchar(155) DEFAULT NULL,
  `com_userid` int(11) NOT NULL,
  `com_proid` int(11) NOT NULL,
  `com_date` date NOT NULL,
  `com_reating` tinyint(5) NOT NULL,
  `com_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `com_content`, `com_img`, `com_userid`, `com_proid`, `com_date`, `com_reating`, `com_status`) VALUES
(14, 'Sản phẩm chất lượng cao', 'th.jpg', 23, 57, '2023-12-06', 4, 1),
(15, 'Quyết đẹp trai top 1 Việt Nam', '', 22, 62, '2023-12-06', 5, 2),
(16, 'quá là tuyệt zời ', '', 24, 61, '2023-12-06', 5, 1),
(18, 'Sản phẩm đúng với quảng cáo', 'ip1.jpg', 23, 69, '2023-12-08', 5, 1),
(19, 'Tạm ổn', 'ád.jpg', 23, 67, '2023-12-08', 4, 1),
(20, 'Cũng ok', 'iphone14.jpg', 23, 74, '2023-12-08', 5, 1),
(21, 'Điện thoại khá là ổn', '', 23, 73, '2023-12-08', 3, 1),
(22, 'Laptop xin á', '', 23, 88, '2023-12-08', 5, 1),
(23, 'Điều hòa dub', 'laptop.jpg', 23, 78, '2023-12-08', 4, 1),
(24, 'Sản phẩm uy tín nhá', 'ip3.jpg', 23, 72, '2023-12-08', 5, 1),
(25, 'điện thoại chụp rất nét', 'WIN_20231208_18_09_06_Pro.jpg', 3, 72, '2023-12-08', 5, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hot_products`
--

CREATE TABLE `hot_products` (
  `id` int(11) NOT NULL,
  `idpro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hot_products`
--

INSERT INTO `hot_products` (`id`, `idpro`) VALUES
(37, 67),
(38, 68),
(39, 69),
(40, 70),
(42, 71),
(41, 88);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_img` varchar(155) NOT NULL,
  `pro_desc` text NOT NULL,
  `pro_views` int(11) NOT NULL DEFAULT 0,
  `pro_status` tinyint(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_img`, `pro_desc`, `pro_views`, `pro_status`) VALUES
(66, 'Nokia 105 DS 4G', 'nokia-105-4g-black-200x200.jpg', '                                                                                    Nokia 105 DS 4G hoàn toàn mới với thiết kế hiện đại, độ bền đáng tin cậy và thời lượng pin siêu dài vốn đã thành thương hiệu của Nokia, giờ đây lại được bổ sung thêm kết nối mạng 4G LTE, giúp việc giữ liên lạc hay vào mạng trở nên dễ dàng hơn bao giờ hết.                                                ', 4, 1),
(67, 'Laptop Asus TUF Gaming FX506HF-HN017W i5 11400H/16', 'download.jpeg', '                                                        \r\n                        ASUS TUF Gaming F15 FX506HF HN017W là chiếc laptop gaming giá rẻ nhưng vô cùng mạnh mẽ. Không chỉ bộ vi xử lý Intel thế hệ thứ 11, card đồ họa RTX 20 series mà điểm mạnh còn đến từ việc trang bị sẵn 16GB RAM, cho bạn hiệu năng xuất sắc mà không cần nâng cấp máy.                        ', 12, 0),
(68, 'Laptop Acer Aspire 7 Gaming A715-76-57CY i5 12450H', 'images.jpeg', '                                                        \r\n                                                ', 6, 0),
(69, 'iphone 15 pro max', 'download (1).jpeg', '                                                        \r\n                        Lý do nên mua iPhone 15 Pro Max tại Điện máy XANH\r\niPhone 15 Pro Max là một trong những chiếc điện thoại thông minh cao cấp nằm trong bộ sản phẩm iPhone 15 series của Apple, sở hữu nhiều tính năng và công nghệ tiên tiến. Nếu bạn đang có ý định mua iPhone 15 Pro Max, Điện máy XANH là một lựa chọn đáng cân nhắc.\r\n\r\n• Sản phẩm chính hãng, chất lượng cao: Điện máy XANH cam kết cung cấp sản phẩm iPhone 15 Pro Max chính hãng, có nguồn gốc xuất xứ rõ ràng, được kiểm tra kỹ lưỡng trước khi bán ra thị trường.\r\n\r\n• Giá cả cạnh tranh: Điện máy XANH thường xuyên có các chương trình khuyến mãi, giảm giá và tặng quà kèm theo khi mua iPhone 15 Pro Max. Điều này giúp bạn tiết kiệm chi phí khi mua sắm.\r\n\r\n• Dịch vụ hậu mãi chu đáo: Điện máy XANH cung cấp dịch vụ bảo hành chính hãng cho iPhone 15 Pro Max với thời gian dài lâu. Ngoài ra, bạn còn có thể sử dụng dịch vụ sửa chữa, hỗ trợ kỹ thuật chuyên nghiệp của Điện máy XANH.\r\n\r\n• Tùy chọn trả góp linh hoạt: Điện máy XANH cung cấp các lựa chọn trả góp phù hợp với nhu cầu và khả năng tài chính của bạn. Điều này giúp bạn mua được sản phẩm mong muốn mà không cần thanh toán toàn bộ số tiền một lúc.\r\n\r\n• Tiện lợi khi mua sắm: Điện máy XANH có hệ thống cửa hàng rộng khắp cả nước, giúp bạn dễ dàng mua sắm trực tiếp. Ngoài ra, bạn cũng có thể mua sắm online qua website của Điện máy XANH một cách tiện lợi và nhanh chóng.\r\n\r\nBảng so sánh thông số phiên bản iPhone                         ', 30, 0),
(70, 'Điện thoại Samsung Galaxy A05s 6GB', 'download (2).jpeg', '                                                        Samsung Galaxy A05s 6GB được ra mắt tại Việt Nam vào tháng 9/2023. Máy gây chú ý ngay từ khi ra mắt nhờ sở hữu mức giá bán hợp lý nhưng vẫn được trang bị cấu hình ổn định, nổi bật với chip Snapdragon 680, hệ thống camera 50 MP chất lượng và trang bị pin lớn 5000 mAh.\r\n                                                ', 7, 0),
(71, 'Điện thoại OPPO Find N3 Flip 5G', 'download (3).jpeg', '                                                        \r\n                        OPPO Find N3 Flip 5G Hồng, mẫu smartphone màn hình gập thế hệ mới của OPPO đã chính thức ra mắt tại Việt Nam. Điện thoại gây ấn tượng với thiết kế độc đáo, hiệu năng mạnh mẽ nhờ con chip MediaTek Dimensity 9200 và màn hình phụ có kích thước lớn cùng nhiều tính năng tiện ích.                        ', 0, 0),
(72, 'Điện thoại OPPO Reno10 5G 128GB', 'download (4).jpeg', '                                                        \r\n                        Hãng điện thoại OPPO cho ra mắt sản phẩm mới tại thị trường Việt Nam - OPPO Reno10 5G 128GB, không làm người dùng thất vọng. Với thiết kế đẹp và hiệu năng mượt mà, chiếc điện thoại này đáp ứng đầy đủ nhu cầu công việc và giải trí. Bộ ba camera tinh xảo trên máy cùng những tính năng độc đáo mang đến những bức ảnh tuyệt đẹp.                        ', 25, 0),
(73, 'Điện thoại Samsung Galaxy A24 6GB', 'download (5).jpeg', '                                                        \r\n                        Samsung Galaxy A24 6GB - là thế hệ điện thoại thuộc dòng Galaxy vừa được nhà Samsung giới thiệu đến thị trường Việt Nam vào tháng 04/2023. Máy sở hữu cụm camera có độ phân giải chính 50 MP, chip tốt cùng màn hình Super AMOLED chất lượng.                        ', 6, 0),
(74, 'Laptop Apple MacBook Pro 14 inch M3 Pro 2023 11-co', 'download (6).jpeg', '                                                        \r\n                        Thể hiện đẳng cấp chuẩn doanh nhân luôn là những từ ngữ ta liên tưởng đầu tiên khi nhắc đến những dòng Macbook Pro của nhà Táo, mới đây thì phiên bản MacBook Pro M3 Pro với con chip thế hệ tân tiến hơn tích hợp nguyên vẹn với những \"bản sắc\" vốn có của những thế hệ tiền nhiệm dự là sẽ đánh gục mọi trải nghiệm của cộng đồng iFan.                        ', 6, 0),
(75, 'Laptop Acer Aspire 5 Gaming A515 58GM 51LB i5 1342', 'download (7).jpeg', '                                                        Khám phá thế giới đồ họa và gaming cực mượt với laptop Acer Aspire 5 Gaming A515 58GM 51LB i5 13420H (NX.KQ4SV.002), là sản phẩm đa năng với khả năng xử lý mạnh mẽ và hiệu suất đồ họa ấn tượng. Chiếc laptop đi kèm nhiều tính năng hiện đại cùng sự kết hợp hoàn hảo của công nghệ và thiết kế tinh tế là trợ thủ đắc lực cho công việc hàng ngày và thời gian giải trí, cho bạn trải nghiệm thú vị.\r\n                                                ', 4, 0),
(76, 'Laptop Dell Vostro 15 3520 i3 1215U/8GB/512GB/120H', 'download (8).jpeg', '                                                        \r\n                        Laptop Dell Vostro 15 3520 i3 1215U (5M2TT1) sở hữu hiệu năng tốt cùng màn hình 15.6 inch phù hợp với nhu cầu giải quyết công việc, học tập. Đây là lựa chọn hoàn hảo cho những bạn yêu thích dòng laptop học tập - văn phòng có tần số quét cao 120 Hz.                        ', 3, 0),
(77, 'Máy lạnh Casper Inverter 1 HP TC-09IS35', 'images (1).jpeg', '                                                        \r\n                        Máy lạnh Casper Inverter 1 HP TC-09IS35 cho khả năng làm mát hiệu quả với chế độ làm lạnh nhanh Turbo, tự động điều chỉnh nhiệt độ với cảm biến nhiệt độ iFeel, sử dụng tiết kiệm điện với công nghệ I-saving, tăng tuổi thọ thiết bị với chức năng tự làm sạch iClean.                        ', 0, 0),
(78, 'Máy lạnh Panasonic Inverter 1 HP CU/CS-XU9XKH-8', 'may-lanh-panasonic-inverter-1-hp-cu-cs-xu9xkh-8-10.jpg', '                                                        \r\n                        Máy lạnh Panasonic Inverter 1 HP CU/CS-XU9XKH-8 thiết kế màu trắng với phần vỏ làm bằng nhựa phủ một lớp nhám. Trên máy không có màn hình hiển thị nhiệt độ.\r\n\r\n- Dàn nóng với ống dẫn gas bằng đồng, lá tản nhiệt bằng nhôm có độ bền cao. Với môi chất lạnh R32 mang lại công suất làm mát cao và thân thiện với môi trường.                        ', 7, 0),
(79, 'Smart Tivi NanoCell LG 4K 75 inch 75NANO76SQA', 'download (9).jpeg', '                                                        \r\n                        Smart Tivi NanoCell LG 4K 75 inch 75NANO76SQA thể hiện khung hình 4K rực rỡ với công nghệ NanoCell, cuốn hút người dùng từ âm thanh tinh chỉnh theo nội dung, thỏa mãn nhu cầu giải trí cùng kho ứng dụng phong phú webOS 22, mang đến lựa chọn tuyệt vời cho gia đình bạn.\r\n                        ', 0, 0),
(80, 'Smart Tivi Neo QLED 4K 55 inch Samsung QA55QN90C', 'download (10).jpeg', '                                                        \r\n                        Smart Tivi Neo QLED 4K 55 inch Samsung QA55QN90C cho bạn choáng ngợp với khung hình 4K sắc nét, hình ảnh chi tiết, màu đen sâu nhờ bộ xử lý Neural Quantum 4K AI 20 nơ-ron, công nghệ Quantum Matrix Technology 14 bit, công nghệ Neo Quantum HDR+ tạo nên khung hình với độ sáng ấn tượng, màu sắc sống động, trải nghiệm âm thanh đa chiều lôi cuốn nhờ công nghệ Dolby Atmos, điều khiển bằng giọng nói tiếng Việt dễ dàng với Bixby.                        ', 0, 0),
(82, 'Android Tivi Casper 32 inch 32HG5200', 'images (2).jpeg', '                                                        \r\n                        Smart Tivi Casper 32 inch 32HG5200 được thiết kế với vóc dáng vô cùng đơn giản, viền tivi mỏng 0,8 mm kết hợp với chân đế hình chữ V úp ngược mang lại tổng thể chiếc tivi trở nên sang trọng.\r\nTivi Casper 32 inch phù hợp trưng bày ở những nơi có không gian nhỏ như: Phòng ngủ, phòng khách nhỏ,...                        ', 0, 0),
(83, 'Android Tivi Panasonic 50 Inch TH-50LX800V', 'download (11).jpeg', '                                                        \r\n                        Android Tivi Panasonic 50 Inch TH-50LX800V - Trải nghiệm tính năng cao cấp với mức giá cực ưu đãi\r\nThiết kế hiện đại, phù hợp nhiều xu hướng bày trí\r\nAndroid Tivi TH-50LX800V là một trong những dòng Smart LED TV vừa ra mắt năm 2022 của Panasonic, vì vậy thiết bị sở hữu lối thiết kế hiện đại và phù hợp với nhiều xu hướng bày trí hiện nay. Với màn hình lớn 50 inch, sản phẩm có kích thước rộng 1120 x cao 65,8 x dày 8,3 cm tương đối gọn gàng và dễ dàng bố trí trong nhiều không gian.                        ', 0, 0),
(84, 'Điều hòa LG 1 chiều Inverter 1HP-8.800BTU V10WIN', 'download (12).jpeg', '                                                        \r\n                        Công suất 1 HP - 8800 BTU phù hợp với diện tích không gian dưới 15 m2.\r\nLàm lạnh nhanh hơn nhờ chế độ Jet Cool.\r\nTiết kiệm lên đến điện năng, vận hành ổn định nhờ công nghệ Dual Inverter.\r\nỐng dẫn gas bằng đồng - lá tản nhiệt bằng nhôm phủ lớp Gold Fin có độ bền cao, tăng hiệu suất làm lạnh.\r\nTiết kiệm thời gian, chi phí sửa chữa nhờ chức năng tự chẩn đoán lỗi.\r\nBảo vệ sức khỏe của bạn với chế độ ngủ đêm tránh bu                        ', 0, 0),
(85, 'Máy giặt thông minh LG AI DD 9kg+ sấy 5kg FV1409G4', 'download (13).jpeg', '                                                        \r\n                        Máy giặt sấy tích hợp 2 trong 1 tiện lợi.\r\n\r\nBảo vệ làn da, loại bỏ các tác nhân gây dị ứng với công nghệ giặt hơi nước Steam+.\r\n\r\nGiảm thiểu hư tổn sợi vải nhờ công nghệ 6 chuyển động DD kết hợp trí thông minh nhân tạo AI.\r\n\r\nTiết kiệm điện với công nghệ Inverter, chuẩn đoán và xử lý nhanh các lỗi máy giặt nhờ tiện ích thông minh Smart ThinQ                        ', 4, 0),
(87, 'Tủ lạnh Samsung Inverter 488L 4 cửa RF48A4000B4/SV', 'download (14).jpeg', '                                                        \r\n                        Hoạt động êm ái, tiết kiệm điện năng nhờ công nghệ Digitai Inverter.\r\n\r\nLàm lạnh hiệu quả với hai dàn lạnh độc lập Twin cooling Plush.\r\n\r\nSử dụng thép không gỉ bền lâu với thời gian.\r\n\r\nCó ngăn tủ cân bằng độ ẩm giúp thực phẩm luôn tươi ngon.\r\n\r\nBảng điều chỉnh bên ngoài thuận tiện.\r\n\r\nThiết kế nhiều cánh tủ hiện đại tiện lợi khi sử dụng\r\n\r\nDung tích 488 lít chứa được nhiều thực phẩm phù hợp gia đình 4 - 5 thành viên\r\n                        ', 3, 0),
(88, 'Laptop Dell ProBook', 'laptop.jpg', '\r\n                        ', 29, 0),
(89, 'Tủ lạnh LG Inverter 635 lít Side By Side GR-D257WB', 'lg-inverter-635-lit-gr-d257wb-3-1.jpg', '\r\n                       - Đây là mẫu tủ lạnh Side by side với chất liệu cửa tủ là thép không gỉ màu đen nhám sang trọng, hiện đại. Phần tay cầm được thiết kế âm tủ tạo vẻ ngoài tinh tế, tối giản.\r\n\r\n- Mẫu tủ lạnh cỡ lớn này thích hợp để đặt trong những căn bếp rộng rãi với không gian thoáng đãng hoặc các nhà hàng, cửa tiệm đồ ăn.\r\n\r\n- Dung tích 635 lít có thể phục vụ cho nhu cầu của những gia đình từ 5 thành viên trở lên. ', 4, 0),
(90, 'Máy giặt Samsung Inverter 9.5 kg WW95TA046AX/SV', '01-1020x570-1.jpg', 'Giặt sạch sâu, bảo vệ sợi vải tốt hơn 45% với công nghệ giặt bong bóng siêu mịn EcoBubble\r\nMáy giặt Samsung Inverter 9.5kg WW95TA046AX/SV với công nghệ EcoBubble sẽ đánh tan chất giặt tẩy với sự kết hợp giữa khí và nước, tạo thành bong bóng siêu mịn thẩm thấu vào sợi vải nhanh gấp 40 lần, đánh bật các vết bẩn hiệu quả tốt hơn 24% và loại bỏ cặn bám.\r\n\r\nBên cạnh đó, công nghệ EcoBubble với cơ chế giặt nước lạnh sẽ hạn chế tối đa hư tổn, bảo vệ màu và chất liệu vải tốt hơn 45%, tiết kiệm đến 70% điện năng.\r\n                        ', 12, 0),
(92, 'Máy giặt Casper Inverter 9.5 KG WF-95I140BWC', 'casper-inverter-95-kg-wf-95i140bwc-2-1.jpg', 'Tích hợp công nghệ giặt hơi nước và nước nóng, máy giặt Casper Inverter 9.5 KG WF-95I140BWC phù hợp cho những người có làn da nhạy cảm dễ bị mẩn đỏ, dị ứng. Tính năng tự động cảnh báo và khử khuẩn lồng giặt bằng nước nóng còn giúp loại bỏ các mảng bám và nấm mốc lâu ngày tích tụ bên trong lồng giặt.\r\n                        ', 2, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `properties`
--

INSERT INTO `properties` (`id`, `p_name`) VALUES
(24, 'Chip'),
(25, 'CPU'),
(26, 'Màn Hình'),
(27, 'Pin'),
(28, 'Coin'),
(29, 'Ổ cứng'),
(30, 'Xuất xứ'),
(31, 'Độ phân giải'),
(32, 'SSD');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pro_cats`
--

CREATE TABLE `pro_cats` (
  `id` int(11) NOT NULL,
  `pc_idpro` int(11) NOT NULL,
  `pc_idcat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `pro_cats`
--

INSERT INTO `pro_cats` (`id`, `pc_idpro`, `pc_idcat`) VALUES
(649, 88, 40),
(650, 88, 49),
(652, 67, 40),
(653, 67, 50),
(654, 68, 40),
(655, 68, 48),
(656, 89, 43),
(657, 89, 57),
(658, 69, 41),
(659, 69, 45),
(660, 70, 41),
(661, 70, 46),
(662, 90, 44),
(664, 71, 41),
(665, 71, 47),
(666, 72, 41),
(667, 72, 47),
(668, 73, 41),
(669, 73, 46),
(670, 74, 40),
(671, 75, 40),
(672, 75, 48),
(673, 76, 40),
(674, 76, 49),
(675, 77, 42),
(676, 77, 52),
(677, 78, 42),
(678, 78, 54),
(679, 78, 56),
(680, 79, 58),
(681, 79, 60),
(682, 80, 55),
(683, 80, 58),
(684, 80, 59),
(685, 92, 44),
(686, 82, 52),
(687, 82, 58),
(688, 83, 54),
(689, 83, 56),
(690, 83, 58),
(691, 84, 42),
(692, 84, 57),
(693, 85, 44),
(694, 85, 60),
(695, 87, 43),
(696, 87, 55),
(697, 87, 59),
(698, 66, 41);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pro_img`
--

CREATE TABLE `pro_img` (
  `id` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `img` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `pro_img`
--

INSERT INTO `pro_img` (`id`, `proid`, `img`) VALUES
(52, 72, 'op1.jpg'),
(53, 72, 'op2.jpg'),
(54, 72, 'op3.jpg'),
(55, 72, 'op4.webp'),
(56, 72, 'op5.jpg'),
(57, 72, 'op6.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pro_properties`
--

CREATE TABLE `pro_properties` (
  `id` int(11) NOT NULL,
  `pp_proid` int(11) NOT NULL,
  `pp_price` float NOT NULL DEFAULT 0,
  `pp_color` varchar(50) NOT NULL,
  `pp_memory` varchar(50) NOT NULL,
  `pp_buys` int(11) NOT NULL DEFAULT 0,
  `pp_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `pro_properties`
--

INSERT INTO `pro_properties` (`id`, `pp_proid`, `pp_price`, `pp_color`, `pp_memory`, `pp_buys`, `pp_count`) VALUES
(98, 66, 3000000, 'Xanh', 'Ram 4g', 14, 50),
(99, 67, 30000000, 'Đen', 'i7', 22, 19),
(100, 68, 20000000, 'Trắng', 'i5', 14, 30),
(101, 66, 4500000, 'Đen', 'Ram 4g', 10, 10),
(102, 69, 20000000, 'Đen', 'Ram 8g', 1, 19),
(103, 69, 30000000, 'Trắng', 'Ram 16g', 1, 9),
(104, 70, 20000000, 'Đen', 'Ram 8g', 0, 20),
(105, 70, 19000000, 'Trắng', 'Ram 4g', 11, 9),
(106, 71, 22000000, 'Hồng', 'Ram 6g', 0, 20),
(107, 71, 30000000, 'Xanh', 'Ram 8g', 0, 30),
(108, 72, 9000000, 'Xanh', 'Ram 8gb', 0, 20),
(109, 72, 10000000, 'Đen', 'Ram 8gb', 0, 10),
(110, 73, 5000000, 'Xanh', 'Ram 4g', 1, 29),
(111, 73, 4500000, 'Đen', 'Ram 4g', 0, 10),
(112, 74, 45000000, 'Đen', 'Ram 16g', 0, 20),
(113, 74, 50000000, 'Trắng', '18gb', 1, 9),
(114, 75, 14000000, 'Đen', 'Ram 8g', 0, 20),
(115, 76, 1100000, 'Đen', 'Ram 4g', 0, 20),
(116, 75, 15000000, 'Trắng', 'Ram 16g', 0, 10),
(117, 76, 14000000, 'Trắng', 'Ram 6g', 0, 20),
(118, 77, 7000000, 'Trắng', '2 chiều', 0, 30),
(119, 77, 50000000, 'Trắng', '1 chiều', 0, 20),
(120, 78, 14000000, 'Trắng', '1 chiều', 1, 19),
(121, 78, 18000000, 'Trắng', '2 chiều', 0, 20),
(122, 79, 22000000, 'Đen', '75inch', 0, 20),
(123, 79, 30000000, 'Trắng', '80inch', 0, 10),
(124, 80, 40000000, 'Đen', '55inch', 0, 20),
(125, 80, 4500000, 'Trắng', '60inch', 0, 10),
(127, 82, 3000000, 'Đen', '32inch', 0, 50),
(128, 82, 4500000, 'Trắng', '40inch', 0, 50),
(129, 83, 1100000, 'Đen', '50inch', 0, 10),
(130, 83, 1100000, 'Đen', '55inch', 0, 20),
(131, 84, 14000000, 'Trắng', '1 chiều', 0, 20),
(132, 84, 15000000, 'Trắng', '2 chiều', 0, 10),
(133, 85, 14000000, 'Đen', '9kg', 0, 20),
(134, 85, 14000000, 'Trắng', '15kg', 1, 9),
(136, 87, 16000000, 'Đen', '511l', 0, 20),
(137, 87, 20000000, 'Trắng', '600l', 1, 9),
(138, 88, 6500000, 'i8', '512GB', 2, 13),
(139, 89, 24000000, 'Đen', '600l', 0, 10),
(140, 90, 8000000, 'Đen', '9.5kg', 0, 20),
(142, 89, 30000000, 'Trắng', '700l', 0, 10),
(143, 90, 10000000, 'Trắng', '15kg', 1, 4),
(144, 92, 4500000, 'Đen', '9.5kg', 0, 20),
(145, 92, 5000000, 'Trắng', '10kg', 0, 10),
(146, 72, 12000000, 'Xanh', 'Ram 16gb', 1, 4),
(147, 72, 15000000, 'Xanh', 'Ram 32gb', 0, 10),
(148, 72, 12000000, 'Đen', 'Ram 16gb', 1, 14),
(149, 72, 8000000, 'Tím', 'Ram 8gb', 0, 5),
(150, 72, 10000000, 'Tím', 'Ram 16gb', 0, 10),
(151, 72, 13000000, 'Tím', 'Ram 32gb', 1, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_properties`
--

CREATE TABLE `type_properties` (
  `id` int(11) NOT NULL,
  `tp_proid` int(11) NOT NULL,
  `tp_pid` int(11) NOT NULL,
  `tp_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `type_properties`
--

INSERT INTO `type_properties` (`id`, `tp_proid`, `tp_pid`, `tp_name`) VALUES
(379, 67, 24, ''),
(380, 67, 25, ''),
(381, 67, 26, ''),
(382, 67, 27, ''),
(383, 67, 28, ''),
(384, 67, 29, ''),
(385, 67, 30, ''),
(386, 67, 31, ''),
(387, 67, 32, ''),
(388, 71, 24, ''),
(389, 71, 25, ''),
(390, 71, 26, ''),
(391, 71, 27, ''),
(392, 71, 28, ''),
(393, 71, 29, ''),
(394, 71, 30, ''),
(395, 71, 31, ''),
(396, 71, 32, ''),
(397, 72, 24, ''),
(398, 72, 25, ''),
(399, 72, 26, ''),
(400, 72, 27, ''),
(401, 72, 28, ''),
(402, 72, 29, ''),
(403, 72, 30, ''),
(404, 72, 31, ''),
(405, 72, 32, ''),
(406, 73, 24, ''),
(407, 73, 25, ''),
(408, 73, 26, ''),
(409, 73, 27, ''),
(410, 73, 28, ''),
(411, 73, 29, ''),
(412, 73, 30, ''),
(413, 73, 31, ''),
(414, 73, 32, ''),
(415, 74, 24, ''),
(416, 74, 25, ''),
(417, 74, 26, ''),
(418, 74, 27, ''),
(419, 74, 28, ''),
(420, 74, 29, ''),
(421, 74, 30, ''),
(422, 74, 31, ''),
(423, 74, 32, ''),
(424, 75, 24, ''),
(425, 75, 25, ''),
(426, 75, 26, ''),
(427, 75, 27, ''),
(428, 75, 28, ''),
(429, 75, 29, ''),
(430, 75, 30, ''),
(431, 75, 31, ''),
(432, 75, 32, ''),
(433, 92, 24, ''),
(434, 92, 25, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `u_username` varchar(50) NOT NULL,
  `u_fullname` varchar(155) DEFAULT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_img` varchar(155) DEFAULT NULL,
  `u_password` varchar(50) NOT NULL,
  `u_address` varchar(255) DEFAULT NULL,
  `u_tel` varchar(10) DEFAULT NULL,
  `u_status` tinyint(5) NOT NULL DEFAULT 1,
  `u_role` tinyint(4) NOT NULL DEFAULT 2,
  `u_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `u_username`, `u_fullname`, `u_email`, `u_img`, `u_password`, `u_address`, `u_tel`, `u_status`, `u_role`, `u_create`) VALUES
(1, 'dqhien04', 'Đinh Quang HIến', 'dqhien2004@gmail.com', 'Screenshot (9).png', 'dqh@04082004', 'HX, Xã Hải Xuân, Huyện Hải Hậu, Tỉnh Nam Định', '0345987599', 1, 1, '2023-12-06'),
(2, 'hung', 'Phạm Văn Hùng', 'hungpv@gmail.com', '', 'dha$65546', 'Bắc Ninh', '0877655467', 2, 2, '2023-12-06'),
(3, 'quyet', '', 'quyettran1304@gmaail.com', '', '123', '', '', 1, 1, '2023-12-06'),
(20, 'duong', 'duong', 'caovanduong20@gmail.com', '', 'aaaaa', 'nhà 17, Xã Hoằng Phong, Huyện Hoằng Hóa, Tỉnh Thanh Hóa', '035252253', 1, 2, '2023-12-06'),
(22, 'ductung1410', '', 'nguyenductung2242gmail.com', '', 'tung14102005', '', '', 1, 1, '2023-12-06'),
(23, 'azhung2004', 'Phạm Văn Hùng', 'azhung081004@gmail.com', '307792141_1737303353329361_5061946699987281422_n.jpg', '@Zhung2004', 'Số 2a ngõ 1432, Xã An Thịnh, Huyện Lương Tài, Tỉnh Bắc Ninh', '0333026322', 1, 1, '2023-12-06'),
(24, 'phuongdz29', NULL, 'phamthithuphuong2004tb@gmail.com', NULL, 'phuong@29', NULL, NULL, 1, 2, '2023-12-06'),
(26, 'hine', 'Phạm Văn Hùng', 'hungpv@gmail.com', '', 'hah#9736362', 'Bắc Ninh VN', '0766467743', 2, 2, '2023-12-07'),
(27, 'abc123', 'Văn Hùng', 'hung123@gmail.com', 'images (3).jpeg', 'hag@7737362', 'Hà Nội', '0876456875', 1, 2, '2023-12-07'),
(28, 'hien123', 'Quang HIến', 'hien214653@gmail.com', '', 'gaf@66885556', 'Nam Từ Liêm - Hà Nội', '', 2, 2, '2023-12-07'),
(29, 'hien12345', 'Quang HIến', 'quanghien123@gmail.com', '', 'dqh$12345', 'cn, Phường Cổ Nhuế 2, Quận Bắc Từ Liêm, Thành phố Hà Nội', '0766467743', 1, 2, '2023-12-07'),
(30, 'hien231', NULL, 'hiennd123@gmail.com', NULL, 'dqh@04082004', NULL, NULL, 1, 2, '2023-12-07'),
(31, 'Binhdeptrai', NULL, 'binhtx', NULL, 'binhdeptrai', NULL, NULL, 1, 2, '2023-12-08'),
(32, 'demo', 'Đề Văn Mô', 'demo@gmail.com', 'WIN_20230814_07_09_47_Pro.jpg', 'demo', 'Số 2A ngõ 173, Xã Bình Định, Huyện Lương Tài, Tỉnh Bắc Ninh', '0333026322', 1, 2, '2023-12-08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vouchers`
--

CREATE TABLE `vouchers` (
  `id` int(11) NOT NULL,
  `v_name` varchar(155) NOT NULL,
  `v_price` float NOT NULL,
  `v_count` int(11) NOT NULL DEFAULT 0,
  `v_used` int(11) NOT NULL DEFAULT 0,
  `v_create` date NOT NULL,
  `v_arrtive` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `vouchers`
--

INSERT INTO `vouchers` (`id`, `v_name`, `v_price`, `v_count`, `v_used`, `v_create`, `v_arrtive`) VALUES
(10, 'UZP51JS3TJ0XY9G3', 200000, 50, 0, '2023-12-06', '2023-12-25'),
(11, 'NGUOINHA', 5000000, 50, 6, '2023-12-06', '2023-12-16'),
(12, 'W5DDTWNR2PL5HQKS', 1000000, 40, 0, '2023-12-06', '2023-12-06'),
(13, 'W8DPMYR8OCL7E31T', 2000000, 20, 20, '2023-12-06', '2023-12-16'),
(14, 'G6UO4WC5JM8OFUHR', 2000000, 20, 0, '2023-12-06', '2023-12-12'),
(15, 'GIANGSINH', 2000000, 20, 1, '2023-12-06', '2023-12-07'),
(16, '818SS1N72OP31B7N', 3000000, 30, 0, '2023-12-06', '2023-12-20'),
(17, 'EPAPNQWKKCMF9QKA', 1000000, 20, 0, '2023-12-06', '2023-12-05'),
(18, 'GWEVW4Z9W9Y6ITHU', 2000000, 50, 0, '2023-12-06', '2023-12-05'),
(19, 'M7CENUL0T3OJLY46', 1000000, 20, 0, '2023-12-06', '2023-12-28'),
(20, 'KFPII3NGK8BW4HZ8', 20000000, 10, 0, '2023-12-07', '2023-12-08'),
(21, 'X3D91ZR2VF3M6BS3', 20000000, 40, 0, '2023-12-07', '2023-12-09');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_bill_status` (`bill_status`);

--
-- Chỉ mục cho bảng `bill_info`
--
ALTER TABLE `bill_info`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill_status`
--
ALTER TABLE `bill_status`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hot_products`
--
ALTER TABLE `hot_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_hot_pro` (`idpro`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pro_cats`
--
ALTER TABLE `pro_cats`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pro_img`
--
ALTER TABLE `pro_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_pi-pro` (`proid`);

--
-- Chỉ mục cho bảng `pro_properties`
--
ALTER TABLE `pro_properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_pp-p` (`pp_proid`);

--
-- Chỉ mục cho bảng `type_properties`
--
ALTER TABLE `type_properties`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `bill_info`
--
ALTER TABLE `bill_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `bill_status`
--
ALTER TABLE `bill_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `hot_products`
--
ALTER TABLE `hot_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT cho bảng `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `pro_cats`
--
ALTER TABLE `pro_cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=699;

--
-- AUTO_INCREMENT cho bảng `pro_img`
--
ALTER TABLE `pro_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `pro_properties`
--
ALTER TABLE `pro_properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT cho bảng `type_properties`
--
ALTER TABLE `type_properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=435;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `lk_bill_status` FOREIGN KEY (`bill_status`) REFERENCES `bill_status` (`id`);

--
-- Các ràng buộc cho bảng `hot_products`
--
ALTER TABLE `hot_products`
  ADD CONSTRAINT `lk_hot_pro` FOREIGN KEY (`idpro`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `pro_img`
--
ALTER TABLE `pro_img`
  ADD CONSTRAINT `lk_pi-pro` FOREIGN KEY (`proid`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `pro_properties`
--
ALTER TABLE `pro_properties`
  ADD CONSTRAINT `lk_pp-p` FOREIGN KEY (`pp_proid`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
