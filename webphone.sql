
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
REVOKE ALL PRIVILEGES ON `webphone`.* FROM 'dc01'@'localhost'; GRANT ALL PRIVILEGES ON `webphone`.* TO 'dc01'@'localhost'; ALTER USER 'dc01'@'localhost' ;
;

--
-- Database: `web_phone`
--
CREATE DATABASE IF NOT EXISTS `webphone` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `webphone`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `Username` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Fullname` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `Email` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `SDT` int COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
INSERT INTO `account` (`Username`, `Fullname`, `Email`, `SDT`) VALUES 
('Hung ', 'Cuong ', 'dangcuong9999@gmail.com ', '0123456781');

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `MaSP` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `TenSP` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `MoTaSP` text COLLATE utf8mb4_general_ci NOT NULL,
  `DonViTinh` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `DonGia` int NOT NULL,
  `SoLuong` int NOT NULL DEFAULT '0',
  `ThoiDiemCapNhat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LinkHinhAnh` varchar(512) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`MaSP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Dumping data for table `product`
--

INSERT INTO `product` (`MaSP`, `TenSP`, `MoTaSP`, `DonViTinh`, `DonGia`, `ThoiDiemCapNhat`, `link hinh anh`) VALUES
('01', 'Ốp điện thoại gỗ chất lượng cao', 'Được làm bằng gỗ chất lượng cao', 'Số lượng', '700000', '2023-04-26 08:35:21', 'opgoxiem.jpg');
('02', 'Ốp lưng gỗ xưa', 'Ốp lưng gỗ xưa chất lương cao không tì vết', NULL, '7000000', '2023-04-26 09:52:56', 'oplunghavard.jpg');
('03', 'Ốp gỗ quý nghìn năm', 'Ốp gỗ quý nghìn năm được làm bằng gỗ của cây cổ thụ hàng nghìn năm tuổi với chất lượng miễn bàn.', 'Số Lượng', '700000000', '2023-04-26 11:13:45', 'opgocothu.jpg');
('4', 'Ốp lưng gỗ trắc', 'Ốp lưng gỗ truyền thống', 'Số Lượng', '80000', '2023-04-29 21:58:32', 'opgo4.jpg');
('05', 'Ốp lưng gỗ CAND', 'Ốp lưng gỗ CAND-VNQT-VDPV', NULL, '400000', '2023-05-06 14:02:13', 'opgo5.jpg');
COMMIT;
/*!40101 SET 
CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;