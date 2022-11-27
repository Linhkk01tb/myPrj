-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 21, 2022 lúc 09:23 PM
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
-- Cơ sở dữ liệu: `weblaptop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `account`, `password`, `created_at`, `updated_at`) VALUES
(1, 'duc', '$2y$10$.s74jd4lRBvscP8jSnQgLeZ.UZ5QelLMT6YnyV7vIS9X0m7tV2yJe', '2022-08-08 10:43:46', '2022-08-08 10:43:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_chitiethoadon` int(11) NOT NULL,
  `id_hoadon` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(255) NOT NULL,
  `dongia` float NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id_chitiethoadon`, `id_hoadon`, `id_sanpham`, `tensanpham`, `dongia`, `soluong`) VALUES
(8, 7, 18, 'Laptop Dell Vostro 3510', 16000000, 4),
(9, 8, 18, 'Laptop Dell Vostro 3510', 16000000, 2),
(10, 9, 18, 'Laptop Dell Vostro 3510', 16000000, 8),
(11, 10, 18, 'Laptop Dell Vostro 3510', 16000000, 5),
(12, 11, 18, 'Laptop Dell Vostro 3510', 16000000, 1),
(13, 12, 18, 'Laptop Dell Vostro 3510', 16000000, 5),
(14, 13, 18, 'Laptop Dell Vostro 3510', 16000000, 4),
(15, 14, 19, 'Laptop Dell Inspiron 3511', 14900000, 10),
(16, 15, 42, 'Laptop HP 348 G7', 22490000, 8),
(17, 15, 36, 'Laptop Gaming Acer Nitro 5', 18990000, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `slug_danhmuc` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `kichhoat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `tendanhmuc`, `slug_danhmuc`, `mota`, `kichhoat`) VALUES
(1, 'Asus', 'asus', 'Hàng chính hãng nhập khẩu', 0),
(3, 'DELL', 'dell', 'Hàng chính hãng chất lượng cao', 0),
(4, 'HP', 'hp', 'HP tiện ích ai cũng dùng được', 0),
(6, 'Acer', 'acer', 'Laptop Acer nhập khẩu chính hãng', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `id_nhanhang` int(11) NOT NULL,
  `id_thanhtoan` int(11) NOT NULL,
  `tongtien` float NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id_hoadon`, `id_khachhang`, `id_nhanhang`, `id_thanhtoan`, `tongtien`, `trangthai`) VALUES
(10, 4, 13, 17, 80000000, 1),
(13, 4, 16, 21, 64000000, 2),
(14, 4, 18, 22, 149000000, 0),
(15, 4, 20, 23, 255880000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id_khachhang` int(11) NOT NULL,
  `hoten_khachhang` varchar(255) NOT NULL,
  `email_khachhang` varchar(255) NOT NULL,
  `password_khachhang` varchar(255) NOT NULL,
  `sodienthoai_khachhang` int(11) NOT NULL,
  `diachi_khachhang` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id_khachhang`, `hoten_khachhang`, `email_khachhang`, `password_khachhang`, `sodienthoai_khachhang`, `diachi_khachhang`) VALUES
(4, 'Lê Quang Linh', 'dragmedown113@gmail.com', '6d254f0541ae7f7141e98bece72c976f', 869143513, 'Minh Hoà-Hưng Hà-Thái Bình'),
(5, 'Trinh Cong Duc', 'duc@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 112334567, 'Thái Bình');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `tensanpham` varchar(255) NOT NULL,
  `slug_sanpham` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `kichhoat` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensanpham`, `slug_sanpham`, `mota`, `hinhanh`, `danhmuc_id`, `kichhoat`, `dongia`, `soluong`) VALUES
(18, 'Laptop Dell Vostro 3510', 'laptop-dell-vostro-3510', 'Hệ điều hành: Windows 11 Home + Office Home and Student 2021\r\nChíp xử lý: Intel Core i5-1135G7 2.40GHz up to 4.20GHz, 8MB\r\nBộ nhớ Ram: 8GB DDR4 3200MHz (1x8GB), 2 khe cắm Ram\r\nỔ đĩa cứng: 512GB SSD PCIe NVMe\r\nCard đồ họa: NVIDIA GeForce MX350 2GB GDDR5\r\nMàn hình: 15.6 FHD (1920 x 1080), Anti-glare, Narrow Border Display', 'similar46.jpg', 3, 0, 16000000, 100),
(19, 'Laptop Dell Inspiron 3511', 'laptop-dell-inspiron-3511', 'Dell Inspiron chế tác từ vỏ nhựa bền bỉ, chắn chắn, phủ gam màu đen huyền bí làm tôn lên thêm sức mạnh cho phái nam khi mang bên mình cũng như tăng sức cuốn hút lúc ở cạnh phái nữ, phù hợp cho nhiều đối tượng ở các độ tuổi khác nhau. Laptop có độ dày 18.9 mm và trọng lượng 1.7 kg, vẫn vừa vặn trong phân khúc, sẵn sàng đồng hành cùng bạn đi học tập, làm việc mọi lúc mọi nơi mà không lo quá cồng kềnh, mệt nhọc.', 'similar617.jpg', 3, 0, 14900000, 500),
(20, 'Laptop Dell Gaming G15 5511', 'laptop-dell-gaming-g15-5511', 'Laptop Dell gaming G15 5511 sở hữu vẻ ngoài khá hoàn mỹ với trọng lượng khoảng hơn 2kg. Với thiết kế bàn phím fullsize, laptop mang lại trải nghiệm gõ thoải mái cùng độ nảy tốt, hỗ trợ tối đa người dùng trong quá trình sử dụng. Bên cạnh đó là hệ thống cổng kết nối đa dạng, đáp ứng tốt nhu cầu sử dụng của người dùng.', 'laptop-dell-gaming-g15-5511-56.jpg', 3, 0, 19990000, 20),
(21, 'Laptop Dell Inspiron 5625 99VP91', 'laptop-dell-inspiron-5625-99vp91', 'Laptop Dell Inspiron 5625 99VP91 nhận được sự chú ý của rất nhiều người làm việc từ xa nhờ thiết kế di chuyển đầy tiện lợi. Kiểu dáng mỏng gọn với trọng lượng nhẹ là yếu tố giúp Dell Inspiron 5625 99VP91 “ghi điểm” lớn. Lớp vỏ được hoàn thiện tinh xảo với màu bạc tạo nên ngoại hình sang trọng cho máy. Laptop Dell Inspiron 5625 99VP91 cũng tích hợp bộ bàn phím full-size và touchpad chạm đa điểm cho thao tác sử dụng thêm linh hoạt.', 'laptopdell2237.jpg', 3, 0, 22500000, 11),
(22, 'Laptop Dell Vostro 5510 70270646', 'laptop-dell-vostro-5510-70270646', 'Laptop Dell Vostro 5510 70270646 có thiết kế sang trọng với phần nắp lưng kim loại mang màu xám lạnh. Chế tác khéo léo khiến laptop trông gọn gàng, bố trí khoa học tại mọi điểm.\r\n\r\nLaptop còn được tích hợp bộ bàn phím lớn Full size có nút bấm êm nhẹ, độ nảy tốt. Khoảng cách giữa các phím vừa phải rất tiện sử dụng trong khoảng thời gian dài.', 'dell-vostro-5510-i5-a54.jpg', 3, 0, 20490000, 13),
(23, 'Laptop Dell Latitude 3520 70251592', 'laptop-dell-latitude-3520-70251592', 'Laptop Dell Latitude 3520 70251592 được thiết kế vô cùng mỏng nhẹ. Chất liệu hoàn thiện cứng cáp, các cạnh được đánh bóng bo tròn mềm mại và viền mỏng. Đặc biệt màn hình lớn cho góc nhìn rộng hơn để bạn có những trải nghiệm hình ảnh rõ nét và chân thực hơn.', 'laptop-dell-latitude-3520-7025159244.jpg', 3, 0, 17900000, 21),
(24, 'Laptop Dell Vostro 3510 7T2YC2', 'laptop-dell-vostro-3510-7t2yc2', 'Laptop Dell Inspiron 3510 7T2YC2 là chiếc laptop có cân nặng 1.67kg và kích thước khá nhỏ gọn tiện lợi. Laptop với trọng lượng và kích thước vừa phải này nhờ đó người dùng có thể tự tin mang lap đi cùng để làm việc không lo nặng nề vất vả.\r\n\r\nLaptop Dell Inspiron 3510 7T2YC2 mang sắc đen cổ điển không nổi bật nhưng có thể dành cho bất cứ ai, không kể độ tuổi giới tính,... Màu đen cũng giúp máy trông sạch sẽ và bền màu hơn khi sử dụng laptop trong thời gian dài.', 'dellaasss28.jpg', 3, 0, 16490000, 22),
(25, 'Laptop Dell Inspiron 14 7420', 'laptop-dell-inspiron-14-7420', 'Chiếc laptop Dell Inspiron 14 7420 P16G001ASL mang trong mình thiết kế hiện đại và phong cách theo xu hướng trẻ trung. Được làm bằng những vật liệu cao cấp nên chiếc laptop có trọng lượng rất nhẹ nên bạn có thể mang nó đến khắp nơi rất tiện lợi', 'dellgapnguoc28.jpg', 3, 0, 23990000, 15),
(26, 'Laptop Dell Insprion 3515 G6GR71', 'laptop-dell-insprion-3515-g6gr71', 'Laptop Dell Inspiron 3515 G6GR71 là chiếc laptop được sở hữu bộ vi xử lý AMD Ryzen 3 3250U. Cùng với đó là card đồ họa tích hợp AMD Radeon Graphics hỗ trợ cho những tác vụ cơ bản như soạn văn bản, làm bài thuyết trình hay nhập liệu, tính toán.', '14_2_11945.jpg', 3, 0, 9900000, 32),
(27, 'Laptop Asus Gaming Rog Strix G15', 'laptop-asus-gaming-rog-strix-g15', 'Asus ROG Strix G15 G513IH-HN015TW là chiếc laptop có cấu hình mạnh mẽ, đáp ứng được hầu hết các tựa game trên thị trường hiện nay. Ngay cả khi hoạt động trong nhiều giờ liền máy vẫn khá mát mẻ do có hệ thống tản nhiệt cao cấp. Nếu bạn là một game thủ hay người dùng muốn tìm máy có cấu hình cao thì đừng bỏ qua chiếc laptop Asus chất lượng này.', '6_22_2422.jpg', 1, 0, 18290000, 19),
(28, 'Laptop ASUS VivoBook 15X', 'laptop-asus-vivobook-15x', 'Ấn tượng đầu tiên mà laptop Asus Vivobook 15X A1503ZA-L1422W mang tới cho người dùng đó là sự tinh tế với thiết kế mỏng, vuông vức cùng màu xanh đen trang nhã, cuốn hút. Phần bản lề chắc chắn với khả năng gập - mở linh hoạt đáp ứng tốt nhu cầu sử dụng của người dùng.', 'asus_vivobook_1521.jpg', 1, 0, 18490000, 14),
(29, 'Laptop ASUS TUF Dash Gaming F15', 'laptop-asus-tuf-dash-gaming-f15', 'Laptop Asus Tuf Dash Gaming F15 FX516PC-HN558W là chiếc laptop sở hữu CPU Intel Core i5 dòng H thế hệ 11. Con chip này đủ sức mạnh để chơi game mạnh mẽ, điều khiển mọi tác vụ nhanh chóng.\r\n\r\nPhần đồ họa siêu mượt với GPU GeForce RTX 3050 có tốc độ cao. Bộ nhớ RAM 8GB giúp cho laptop thiết kế đồ họa hoạt động trơn tru, ổ cứng SSD PCIE với tốc độc đọc – ghi nhanh chóng cùng dung lượng 512GB mở rộng không gian lưu trữ siêu rộng lớn.', 'asus_gaming_tuf_das_4_92.jpg', 1, 0, 17990000, 16),
(30, 'Laptop Asus Vivobook Flip 14', 'laptop-asus-vivobook-flip-14', 'Asus VivoBook Flip 14 TP470EA-EC346W sở hữu thiết kế có thể nói là một trong những thiết kế laptop Asus Vivobook hiện đại nhất ngày nay. Phong cách màu Bạc tinh tế với trọng lượng nhẹ chỉ 1.5 kg đã trở thành một phần của ngôn ngữ thiết kế dòng Asus VivoBook. Đặc biệt, điểm nhấn trên laptop chính là thiết kế \"Flip\" - bản lề ErgoLift xoay gập 360 độ linh hoạt giúp bạn thay đổi tính đa dạng trong cách sử dụng laptop Asus VivoBook Flip 14 TP470EA-EC346W.', 'laptop-asus-vivobook-flip-1420.jpg', 1, 0, 12490000, 15),
(31, 'Laptop Asus Rog Strix G15', 'laptop-asus-rog-strix-g15', 'Laptop Asus gaming Rog Strix G15 G513IE-HN192W sở hữu một thiết kế nhỏ gọn nhưng vẫn giữ được nét mạnh mẽ cần có của một dòng laptop gaming. Với thiết kế phong cách thể thao cùng những đường cắt tính tế, logo ROG nổi bật. Chiếu nghỉ tay trên Asus Rog Strix G15 G513IE-HN192W mang lại cảm giác mát mẻ, dễ chịu khi tiếp xúc.', 'asus_rog_strick49.jpg', 1, 0, 22990000, 22),
(32, 'Laptop ASUS TUF Dash F15', 'laptop-asus-tuf-dash-f15', 'Sẵn sàng cho mọi hành trình, Asus TUF Dash F15 FX517ZC-HN007W xử lý mọi tác vụ một cách dễ dàng cho dù đó là chơi game, phát trực tuyến và hơn thế nữa. Sức mạnh CPU Intel Core i5 với 12M Cache và lên đến 4.4GHz cung cấp sức mạnh bạn cần để vượt qua các tác vụ của mình. RAM 8GB cung cấp nhiều bộ nhớ cho đa nhiệm.', 'asus_tuf_dash_f15_f93.jpg', 1, 0, 23190000, 16),
(33, 'Laptop Asus Rog Flow Z13', 'laptop-asus-rog-flow-z13', 'Rog Strix GZ301ZC-LD110W được trang bị con chip thế hệ 12 Gen Intel Core i7-12700H có tốc độ trung bình 2.3 GHz, tốc độ tối đa có thể đạt đến 4.7GHz. Bộ xử lý mạnh mẽ này cho phép máy thực hiện nhiều tác vụ khỏe một cách đáng ngạc nhiên. Hình ảnh được hỗ trợ bởi NVDIA GeForce RTX 3050 giúp sinh động, đồ họa chất lượng cực tốt.\r\nChiếc laptop cảm ứng này được trang bị bộ Ram tối đa 16GB đủ để bạn thoải mái đa nhiệm không lo lag giật khi xài nhiều thao tác cùng lúc. Rog Strix GZ301ZC-LD110W còn giúp bạn lưu trữ an toàn dữ liệu với 512GB M2 2230 NVMe PCle 4.0 SSD.', 'asus_gaming_zephyru4.jpg', 1, 0, 45490000, 5),
(34, 'Laptop Acer Aspire 5 A515-56-36UT', 'laptop-acer-aspire-5-a515-56-36ut', 'Cấu hình sử dụng ổn định với các tác vụ văn phòng - Chip Intel Core i3-1115G4\r\nMàn hình phục vụ giải trí - Màn hình kích thước 15.6\" Full HD, viền mỏng\r\nĐa dạng cổng kết nối, dễ dàng chia sẻ - USB-C, HDMI, RJ-45, USB 2.0\r\nThiết kết nhỏ gọn, thời trang, phù hợp với các bạn trẻ năng động, cá tính', '61xcwjyiqys61.jpg', 6, 0, 8990000, 21),
(35, 'Laptop Gaming Acer Nitro 5 AN515', 'laptop-gaming-acer-nitro-5-an515', 'Laptop Gaming Acer Nitro 5 AN515-45-R6EV sở hữu kiểu dáng vô cùng thu hút với mặt lưng nổi bật, hầm hố. Khung viền hoàn thiệt chắc chắn từ nguyên liệu chất lượng cao, dày 23.9mm hầm hố nhưng không quá nặng nề.\r\n\r\nBàn phím trên chiếc laptop làm đồ họa gaming được thiết kế fullsize với đèn nền chuyển màu. Bàn phím có độ nảy êm ái, có đèn ánh sáng rất dễ dùng không cần lo điều kiện ánh sáng có tốt không.', '3_54_2045.jpg', 6, 0, 18990000, 12),
(36, 'Laptop Gaming Acer Nitro 5', 'laptop-gaming-acer-nitro-5', 'Laptop Gaming Acer Nitro 5 AN515-45-R6EV sở hữu kiểu dáng vô cùng thu hút với mặt lưng nổi bật, hầm hố. Khung viền hoàn thiệt chắc chắn từ nguyên liệu chất lượng cao, dày 23.9mm hầm hố nhưng không quá nặng nề.\r\n\r\nBàn phím trên chiếc laptop làm đồ họa gaming được thiết kế fullsize với đèn nền chuyển màu. Bàn phím có độ nảy êm ái, có đèn ánh sáng rất dễ dùng không cần lo điều kiện ánh sáng có tốt không.', 'acer_gaming_nitro_5_1_89.jpg', 6, 0, 18990000, 12),
(37, 'Laptop HP 14-CF2033WM', 'laptop-hp-14-cf2033wm', 'Laptop HP 14-cf2033wm 3V7G4UA đáp ứng nhu cầu làm việc từ xa của nhiều người dùng hiện nay. Chiếc máy có thiết kế bề ngoài sang trọng, với sắc màu Bạc làm nên nét tinh tế cho tổng thể laptop. Nhờ trọng lượng nhẹ và kiểu dáng gọn gàng, laptop HP 14-cf2033wm 3V7G4UA thích hợp cho nhu cầu xử lý công việc tiện lợi ở bất kỳ nơi đâu.', '5cb9252e618c4537be38b0b8ea227d29-244.jpg', 4, 0, 6490000, 23),
(38, 'Laptop HP Gaming Victus 16-E', 'laptop-hp-gaming-victus-16-e', '<p><span style=\"color:#000000\">HP Victus 16-e0175AX 4R0U8PA được thi&ecirc;́t k&ecirc;́ kh&ocirc;ng chỉ cho nhu c&acirc;̀u gaming, mà còn phục vụ c&ocirc;ng vi&ecirc;̣c và học t&acirc;̣p m&ocirc;̣t cách linh hoạt.</span></p>\r\n\r\n<p><span style=\"color:#000000\">Chi&ecirc;́c máy được ch&ecirc;́ tạo với đ&ocirc;̣ mỏng cùng trọng lượng gọn nhẹ, đảm bảo cho nhu c&acirc;̀u di chuy&ecirc;̉n máy thu&acirc;̣n ti&ecirc;̣n.</span></p>\r\n\r\n<p><span style=\"color:#000000\">Toàn th&acirc;n HP Victus 16-e0175AX 4R0U8PA được hoàn thi&ecirc;̣n với ch&acirc;́t li&ecirc;̣u cứng cáp cùng logo Victus đ&acirc;̀y lịch lãm và tinh t&ecirc;́.</span></p>\r\n\r\n<p><span style=\"color:#000000\">Bàn phím tr&ecirc;n máy được t&ocirc;́i ưu với hành trình phím th&acirc;́p cùng dãy NumPad cho nhu c&acirc;̀u gaming l&acirc;̃n làm vi&ecirc;̣c hi&ecirc;̣u quả hơn.</span></p>\r\n\r\n<p><span style=\"color:#000000\">&Acirc;m thanh tr&ecirc;n máy cũng được tinh chỉnh bởi c&ocirc;ng ngh&ecirc;̣ B&amp;O tạo n&ecirc;n ch&acirc;́t &acirc;m. đa dạng và bắt tai</span></p>', '_0004_hp_victus_16-e0175ax__4r0u8pa__b49.jpg', 4, 0, 18490000, 23),
(39, 'Laptop HP Envy 13-BA1536TU', 'laptop-hp-envy-13-ba1536tu', 'Với chất liệu kim loại nguyên khối chắc chắn, bền bỉ, laptop HP Envy 13-ba1536TU 4U6M5PA được hoàn thiện bởi các đường viền tỉ mỉ, cho ra một vẻ ngoài đơn giản nhưng hiện đại, lớp vỏ sang trọng hơn nhờ được phủ gam màu đồng, logo HP được đặt ở giữa nắp lưng càng làm tăng tính thẩm mỹ cao hơn cho máy.', '7_18_1090.jpg', 4, 0, 18990000, 23),
(40, 'Laptop HP 15-EF2126WM', 'laptop-hp-15-ef2126wm', 'Laptop HP 15-EF2126WM 4J771UA sở hữu một thiết kế khá gọn nhẹ cùng khung viền siêu mỏng. Với trọng lượng này, HP 15-EF2126WM 4J771UA có thể dễ dàng di chuyển và mang theo trong công việc và học tập.', 'text_d_i_1_17.png', 4, 0, 12990000, 21),
(41, 'Laptop HP Gaming Victus 15-FA', 'laptop-hp-gaming-victus-15-fa', 'Với chất liệu kim loại nguyên khối chắc chắn, bền bỉ, laptop HP Envy 13-ba1536TU 4U6M5PA được hoàn thiện bởi các đường viền tỉ mỉ, cho ra một vẻ ngoài đơn giản nhưng hiện đại, lớp vỏ sang trọng hơn nhờ được phủ gam màu đồng, logo HP được đặt ở giữa nắp lưng càng làm tăng tính thẩm mỹ cao hơn cho máy.', 'laptop-hp-gaming-victus-15-fa0031dx-6503849-186.jpg', 4, 0, 18490000, 20),
(42, 'Laptop HP 348 G7', 'laptop-hp-348-g7', '<p>HP Pavilion sở hữu bộ n&atilde;o Intel Core i7 10510U xung nhịp l&ecirc;n tới 4.9GHz, cung cấp hiệu năng si&ecirc;u mạnh mẽ c&ugrave;ng khả năng tiết kiệm điện tối ưu.</p>\r\n\r\n<p>Laptop HP 348 G7 c&ograve;n được trang bị bộ Ram DDR4 8GB v&agrave; ổ cứng SSD 512GB cho khả năng đa nhiệm cao.</p>', 'laptop-hp-348-g7-9ph19pa-5_256.jpg', 4, 0, 22490000, 10),
(43, 'Laptop HP Pavilion 15-EG', 'laptop-hp-pavilion-15-eg', '<ol>\r\n	<li><span style=\"font-size:16px\">Laptop HP Pavilion 15-eg2038TX 6K784PA được nhiều người lựa chọn một phần l&agrave; do k&iacute;ch thước nhỏ gọn, trọng lượng kh&aacute; nhẹ n&ecirc;n rất thuận tiện cho việc di chuyển ra ngo&agrave;i.</span>\r\n	<hr /></li>\r\n	<li><span style=\"font-size:16px\">Với thiết kế s&aacute;ng tạo bằng kim loại vừa cứng c&aacute;p, vừa bền bỉ tạo cảm gi&aacute;c dễ chịu, m&aacute;t tay cho người d&ugrave;ng. Kết hợp với t&ocirc;ng m&agrave;u bạc tinh tế thu h&uacute;t rất nhiều &aacute;nh mắt của người ti&ecirc;u d&ugrave;ng.</span></li>\r\n</ol>', '_0001_aaljguxszntooy2bl_dztqglbictnk4e36.jpg', 4, 0, 18490000, 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `id_thanhtoan` int(11) NOT NULL,
  `hinhthuc` varchar(255) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thanhtoan`
--

INSERT INTO `thanhtoan` (`id_thanhtoan`, `hinhthuc`, `trangthai`) VALUES
(17, '1', 0),
(18, '1', 0),
(19, '1', 0),
(20, '1', 0),
(21, '1', 0),
(22, '1', 0),
(23, '1', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinnhanhang`
--

CREATE TABLE `thongtinnhanhang` (
  `id_nhanhang` int(11) NOT NULL,
  `tennguoinhan` varchar(300) NOT NULL,
  `diachinhanhang` varchar(300) NOT NULL,
  `sodienthoai` varchar(20) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongtinnhanhang`
--

INSERT INTO `thongtinnhanhang` (`id_nhanhang`, `tennguoinhan`, `diachinhanhang`, `sodienthoai`, `email`) VALUES
(13, 'Trịnh Công Đức', 'Phương Canh-Nam Từ Liêm-Hà Nội', '0988765456', 'heathcliff0704@gmail.com'),
(16, 'linh la liếm', 'hhhdha', '12345', 'linhkk01tb'),
(18, '123', 'hhhdha', '12345', 'linhkk01tb'),
(19, 'Duc', 'Thái Bình', '0112334567', 'tocduc237@gmail.com'),
(20, 'Trịnh Công Đức', 'Minh Hoà-Hưng Hà-Thái Bình', '0988765456', 'heathcliff0704@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_account_unique` (`account`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_chitiethoadon`),
  ADD KEY `id_hoadon` (`id_hoadon`),
  ADD KEY `id_sanpham` (`id_sanpham`),
  ADD KEY `id_hoadon_2` (`id_hoadon`),
  ADD KEY `id_sanpham_2` (`id_sanpham`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoadon`),
  ADD KEY `id_khachhang` (`id_khachhang`),
  ADD KEY `id_nhanhang` (`id_nhanhang`),
  ADD KEY `id_thanhtoan` (`id_thanhtoan`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhmuc_id` (`danhmuc_id`);

--
-- Chỉ mục cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`id_thanhtoan`);

--
-- Chỉ mục cho bảng `thongtinnhanhang`
--
ALTER TABLE `thongtinnhanhang`
  ADD PRIMARY KEY (`id_nhanhang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_chitiethoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `id_thanhtoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `thongtinnhanhang`
--
ALTER TABLE `thongtinnhanhang`
  MODIFY `id_nhanhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `khachhang` (`id_khachhang`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
