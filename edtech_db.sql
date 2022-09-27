-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2022 at 10:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edtech_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_settings`
--

CREATE TABLE `application_settings` (
  `m_app_id` int(11) NOT NULL,
  `m_app_key` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `m_app_value` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_settings`
--

INSERT INTO `application_settings` (`m_app_id`, `m_app_key`, `m_app_value`) VALUES
(1, 'app_name', 'Edtech'),
(2, 'app_title', 'Edtech'),
(3, 'app_icon', ''),
(4, 'app_logo', ''),
(5, 'app_banner', ''),
(6, 'app_email', ''),
(7, 'app_mobile', ''),
(8, 'app_keywords', ''),
(9, 'app_description', ''),
(10, 'app_fb_link', ''),
(11, 'app_insta_link', ''),
(12, 'app_youtube_link', ''),
(13, 'app_twitter_link', ''),
(14, 'app_status', ''),
(15, 'app_version', ''),
(16, 'app_website', ''),
(17, 'app_address', ''),
(18, 'app_timezone', ''),
(19, 'app_date_format', 'DD/MM/YY'),
(20, 'app_time_format', '12 Hours'),
(21, 'app_language', 'hindi'),
(22, 'app_currency', ''),
(23, 'app_online_payment', 'Active'),
(26, 'app_gateway_status', 'Live Mode'),
(27, 'app_alt_phone', ''),
(28, 'app_google_analyticscode', ''),
(29, 'app_smtp_port', ''),
(30, 'app_mail_encryption', ''),
(31, 'app_mail_fromname', ''),
(32, 'app_footer_logo', ''),
(33, 'app_mobile_logo', ''),
(34, 'app_fb_link', ''),
(35, 'app_insta_link', ''),
(36, 'app_twitter_link', ''),
(37, 'app_youtube_link', ''),
(38, 'app_website_url', ''),
(39, 'app_playstore_url', ''),
(40, 'app_appstore_url', ''),
(41, 'app_author', ''),
(42, 'app_google_recaptcha', 'Enable'),
(43, 'app_google_recaptcha_key', ''),
(44, 'app_google_recaptcha_secret', ''),
(45, 'app_smtp_host', ''),
(46, 'app_smtp_user', ''),
(47, 'app_smtp_password', ''),
(49, 'app_msg91_url', ''),
(50, 'app_msg91_authkey', ''),
(51, 'app_msg91_senderID', ''),
(52, 'app_razoarpay_key', ''),
(53, 'app_razoarpay_secrate', ''),
(54, 'app_razoarpay_live_key', ''),
(55, 'app_razoarpay_live_secrate', ''),
(57, 'app_favicon', ''),
(58, 'app_address2', '');

-- --------------------------------------------------------

--
-- Table structure for table `app_admin_tbl`
--

CREATE TABLE `app_admin_tbl` (
  `kh_userid` int(11) UNSIGNED NOT NULL,
  `kh_username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_admin_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_admin_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_admin_phone` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_role` int(10) DEFAULT NULL COMMENT '1= admin, 2= manager, 3 = operator, 4 = accounts',
  `kh_pic` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kh_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_admin_tbl`
--

INSERT INTO `app_admin_tbl` (`kh_userid`, `kh_username`, `kh_admin_name`, `kh_password`, `kh_admin_email`, `kh_admin_phone`, `kh_role`, `kh_pic`, `kh_added_on`, `kh_status`) VALUES
(1, 'admin@gmail.com', 'Aadya', '12345', 'admin@gmail.com', '', 1, 'Icon2.png', '2022-03-03 08:56:01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `user_agent`, `timestamp`, `data`) VALUES
('8e22lv39gf3pmov474nrs7fb4qbt1tp9', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664182145;'),
('454sj0aq1rmdf3otdf4p9gfi5hinkfki', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664182235;');

-- --------------------------------------------------------

--
-- Table structure for table `master_area`
--

CREATE TABLE `master_area` (
  `area_id` int(11) NOT NULL,
  `area_location` int(11) NOT NULL,
  `area_name` varchar(255) NOT NULL,
  `area_status` int(11) NOT NULL COMMENT '0-active 1-In-active',
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_banners_tbl`
--

CREATE TABLE `master_banners_tbl` (
  `m_banner_id` bigint(20) NOT NULL,
  `m_banner_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `m_banner_image` varchar(255) NOT NULL,
  `m_banner_size` varchar(255) NOT NULL,
  `m_banner_title` varchar(255) NOT NULL,
  `m_banner_description` varchar(255) NOT NULL,
  `m_banner_status` int(11) NOT NULL COMMENT '0=pending,1= running, 2 = expired'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_batch_tbl`
--

CREATE TABLE `master_batch_tbl` (
  `id` int(11) NOT NULL,
  `batch_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_course` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `strength` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_category`
--

CREATE TABLE `master_category` (
  `m_category_id` bigint(30) NOT NULL COMMENT '1. master_category_id (master_category_id, category_id, sub_category_id)',
  `m_category_for` int(11) NOT NULL COMMENT '1= course, 2= test series, 3 = notes',
  `m_category_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `m_category_desc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `m_category_icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `m_category_banner` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `m_category_status` int(11) NOT NULL COMMENT '0-active 1-In-active',
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_country_tbl`
--

CREATE TABLE `master_country_tbl` (
  `m_country_id` int(11) NOT NULL,
  `m_country_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_course_tbl`
--

CREATE TABLE `master_course_tbl` (
  `m_course_id` bigint(30) NOT NULL,
  `m_course_lang` int(11) NOT NULL,
  `m_course_category` bigint(30) DEFAULT NULL,
  `m_course_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `m_course_intro` text COLLATE utf8_unicode_ci NOT NULL,
  `m_course_code` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `m_course_banner` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `m_course_video_link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `m_course_description` text COLLATE utf8_unicode_ci NOT NULL,
  `m_course_type` int(11) NOT NULL COMMENT '1-Free 2-Paid',
  `m_course_price` double NOT NULL,
  `m_course_offer_price` double NOT NULL,
  `m_course_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `m_course_popular` int(11) NOT NULL DEFAULT 0,
  `m_course_recomended` int(11) NOT NULL DEFAULT 0,
  `m_course_keyword` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_course_status` int(11) NOT NULL,
  `m_course_view` bigint(40) NOT NULL DEFAULT 0,
  `m_course_like` bigint(40) NOT NULL DEFAULT 0,
  `m_course_dislike` bigint(40) NOT NULL DEFAULT 0,
  `m_course_share` bigint(40) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `master_course_tbl`
--

INSERT INTO `master_course_tbl` (`m_course_id`, `m_course_lang`, `m_course_category`, `m_course_title`, `m_course_intro`, `m_course_code`, `m_course_banner`, `m_course_video_link`, `m_course_description`, `m_course_type`, `m_course_price`, `m_course_offer_price`, `m_course_modified`, `m_course_popular`, `m_course_recomended`, `m_course_keyword`, `m_course_status`, `m_course_view`, `m_course_like`, `m_course_dislike`, `m_course_share`) VALUES
(1, 1, 2, 'The Complete Web Developer Course ', 'Learn Web Development by building 25 websites and mobile apps using HTML, CSS, Javascript, PHP, Python, MySQL & more!', 'HTMLC456', 'planning-a-career-in-web-development-everything-you-must-know.jpg', 'https://www.youtube.com/embed/l1EssrLxt7E', '<h2 class=\"udlite-heading-xl what-you-will-learn--title--hropy\" style=\"box-sizing: border-box; margin: 0px 2.4rem 1.6rem; padding: 0px; font-size: 2.4rem; max-width: 118.4rem; font-family: \'sf pro display\', -apple-system, BlinkMacSystemFont, Roboto, \'segoe ui\', Helvetica, Arial, sans-serif, \'apple color emoji\', \'segoe ui emoji\', \'segoe ui symbol\'; line-height: 1.2; letter-spacing: -0.02rem; color: #1c1d1f;\">What you\'ll learn</h2>\r\n<div class=\"what-you-will-learn--content-spacing--3btHJ\" style=\"box-sizing: border-box; margin: 0px 2.4rem; padding: 0px; color: #1c1d1f; font-family: \'sf pro text\', -apple-system, BlinkMacSystemFont, Roboto, \'segoe ui\', Helvetica, Arial, sans-serif, \'apple color emoji\', \'segoe ui emoji\', \'segoe ui symbol\'; font-size: 16px;\">\r\n<ul class=\"unstyled-list udlite-block-list what-you-will-learn--objectives-list--2cWZN\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: inherit; max-width: 118.4rem; list-style: none; display: flex; flex-flow: row wrap; justify-content: space-between;\">\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px; width: calc(50% - 1.2rem);\">\r\n<div class=\"udlite-block-list-item udlite-block-list-item-small udlite-block-list-item-tight udlite-block-list-item-neutral udlite-text-sm\" style=\"box-sizing: border-box; margin: 0px; padding: 0.4rem 0px; line-height: 1.4; font-size: 1.4rem; display: flex; align-items: flex-start; width: 313px; height: auto;\" data-purpose=\"objective\">\r\n<div class=\"udlite-block-list-item-content\" style=\"box-sizing: border-box; margin: 0px 0px 0px 1.6rem; padding: 0px; flex: 1 1 0%; min-width: 1px; min-height: 1.96rem;\"><span class=\"what-you-will-learn--objective-item--ECarc\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis; display: -webkit-box !important;\">Build websites and webapps</span></div>\r\n</div>\r\n</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px; width: calc(50% - 1.2rem);\">\r\n<div class=\"udlite-block-list-item udlite-block-list-item-small udlite-block-list-item-tight udlite-block-list-item-neutral udlite-text-sm\" style=\"box-sizing: border-box; margin: 0px; padding: 0.4rem 0px; line-height: 1.4; font-size: 1.4rem; display: flex; align-items: flex-start; width: 313px; height: auto;\" data-purpose=\"objective\">\r\n<div class=\"udlite-block-list-item-content\" style=\"box-sizing: border-box; margin: 0px 0px 0px 1.6rem; padding: 0px; flex: 1 1 0%; min-width: 1px; min-height: 1.96rem;\"><span class=\"what-you-will-learn--objective-item--ECarc\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis; display: -webkit-box !important;\">Build HTML-based mobile apps</span></div>\r\n</div>\r\n</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px; width: calc(50% - 1.2rem);\">\r\n<div class=\"udlite-block-list-item udlite-block-list-item-small udlite-block-list-item-tight udlite-block-list-item-neutral udlite-text-sm\" style=\"box-sizing: border-box; margin: 0px; padding: 0.4rem 0px; line-height: 1.4; font-size: 1.4rem; display: flex; align-items: flex-start; width: 313px; height: auto;\" data-purpose=\"objective\">\r\n<div class=\"udlite-block-list-item-content\" style=\"box-sizing: border-box; margin: 0px 0px 0px 1.6rem; padding: 0px; flex: 1 1 0%; min-width: 1px; min-height: 1.96rem;\"><span class=\"what-you-will-learn--objective-item--ECarc\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis; display: -webkit-box !important;\">Get a job as a junior web developer</span></div>\r\n</div>\r\n</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px; width: calc(50% - 1.2rem);\">\r\n<div class=\"udlite-block-list-item udlite-block-list-item-small udlite-block-list-item-tight udlite-block-list-item-neutral udlite-text-sm\" style=\"box-sizing: border-box; margin: 0px; padding: 0.4rem 0px; line-height: 1.4; font-size: 1.4rem; display: flex; align-items: flex-start; width: 313px; height: auto;\" data-purpose=\"objective\">\r\n<div class=\"udlite-block-list-item-content\" style=\"box-sizing: border-box; margin: 0px 0px 0px 1.6rem; padding: 0px; flex: 1 1 0%; min-width: 1px; min-height: 1.96rem;\"><span class=\"what-you-will-learn--objective-item--ECarc\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis; display: -webkit-box !important;\">Bid for projects on freelance websites</span></div>\r\n</div>\r\n</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px; width: calc(50% - 1.2rem);\">\r\n<div class=\"udlite-block-list-item udlite-block-list-item-small udlite-block-list-item-tight udlite-block-list-item-neutral udlite-text-sm\" style=\"box-sizing: border-box; margin: 0px; padding: 0.4rem 0px; line-height: 1.4; font-size: 1.4rem; display: flex; align-items: flex-start; width: 313px; height: auto;\" data-purpose=\"objective\">\r\n<div class=\"udlite-block-list-item-content\" style=\"box-sizing: border-box; margin: 0px 0px 0px 1.6rem; padding: 0px; flex: 1 1 0%; min-width: 1px; min-height: 1.96rem;\"><span class=\"what-you-will-learn--objective-item--ECarc\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis; display: -webkit-box !important;\">Start their own online business</span></div>\r\n</div>\r\n</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px; width: calc(50% - 1.2rem);\">\r\n<div class=\"udlite-block-list-item udlite-block-list-item-small udlite-block-list-item-tight udlite-block-list-item-neutral udlite-text-sm\" style=\"box-sizing: border-box; margin: 0px; padding: 0.4rem 0px; line-height: 1.4; font-size: 1.4rem; display: flex; align-items: flex-start; width: 313px; height: auto;\" data-purpose=\"objective\">\r\n<div class=\"udlite-block-list-item-content\" style=\"box-sizing: border-box; margin: 0px 0px 0px 1.6rem; padding: 0px; flex: 1 1 0%; min-width: 1px; min-height: 1.96rem;\"><span class=\"what-you-will-learn--objective-item--ECarc\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis; display: -webkit-box !important;\">Be a comfortable front-end developer</span></div>\r\n</div>\r\n</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px; width: calc(50% - 1.2rem);\">\r\n<div class=\"udlite-block-list-item udlite-block-list-item-small udlite-block-list-item-tight udlite-block-list-item-neutral udlite-text-sm\" style=\"box-sizing: border-box; margin: 0px; padding: 0.4rem 0px; line-height: 1.4; font-size: 1.4rem; display: flex; align-items: flex-start; width: 313px; height: auto;\" data-purpose=\"objective\">\r\n<div class=\"udlite-block-list-item-content\" style=\"box-sizing: border-box; margin: 0px 0px 0px 1.6rem; padding: 0px; flex: 1 1 0%; min-width: 1px; min-height: 1.96rem;\"><span class=\"what-you-will-learn--objective-item--ECarc\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis; display: -webkit-box !important;\">Be proficient with databases and server-side languages</span></div>\r\n</div>\r\n</li>\r\n</ul>\r\n</div>', 2, 4561, 1, '2022-09-26 08:50:41', 0, 1, 'HTML,CSS,Java Script', 1, 168, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `master_lecture_tbl`
--

CREATE TABLE `master_lecture_tbl` (
  `mlecture_id` bigint(30) NOT NULL,
  `ml_category` bigint(30) DEFAULT NULL,
  `ml_course` bigint(30) DEFAULT NULL,
  `ml_subject` int(11) NOT NULL,
  `ml_title` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `ml_code` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `ml_status` tinyint(4) DEFAULT NULL COMMENT '1 = Active',
  `ml_type` tinyint(4) DEFAULT NULL COMMENT '1 Link, 2 Video, 3 Audio, 4 Image, 5 PDF, 6 Other',
  `ml_file` tinytext COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ocl_type=1 then link else  file title',
  `ml_date` date DEFAULT NULL,
  `ml_time` time DEFAULT NULL,
  `ml_added_by` bigint(30) DEFAULT NULL,
  `ml_added_on` datetime DEFAULT NULL,
  `ml_modified_by` bigint(20) DEFAULT NULL,
  `ml_modified_on` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `master_lecture_tbl`
--

INSERT INTO `master_lecture_tbl` (`mlecture_id`, `ml_category`, `ml_course`, `ml_subject`, `ml_title`, `ml_code`, `ml_status`, `ml_type`, `ml_file`, `ml_date`, `ml_time`, `ml_added_by`, `ml_added_on`, `ml_modified_by`, `ml_modified_on`) VALUES
(3, 2, 1, 1, 'HTML Paragraph', '', 1, 1, 'https://youtu.be/UR1SDxDqGNE', '2022-03-02', '15:31:00', 1, '2022-02-05 13:28:57', 1, '2022-03-02 15:02:47'),
(2, 2, 1, 1, 'HTML Headings', '', 1, 1, 'https://youtu.be/Z9joX0GtiA8', '2022-03-01', '05:30:00', 1, '2022-02-05 13:28:19', 1, '2022-03-02 15:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `master_lession_tbl`
--

CREATE TABLE `master_lession_tbl` (
  `mlession_id` bigint(30) NOT NULL,
  `mlsn_category` bigint(30) DEFAULT NULL,
  `mlsn_subject` bigint(30) DEFAULT NULL,
  `mlsn_title` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `mlsn_code` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `mlsn_status` tinyint(4) DEFAULT NULL COMMENT '1 = Active',
  `mlsn_added_by` bigint(30) DEFAULT NULL,
  `mlsn_added_on` datetime DEFAULT NULL,
  `mlsn_modified_by` bigint(30) DEFAULT NULL,
  `mlsn_modified_on` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_locations_tbl`
--

CREATE TABLE `master_locations_tbl` (
  `m_location_id` int(11) NOT NULL,
  `m_location_country` int(11) NOT NULL,
  `m_location_state` int(11) NOT NULL,
  `m_location_city` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `m_location_status` int(11) NOT NULL COMMENT '0-active 1-In-active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_locations_tbl`
--

INSERT INTO `master_locations_tbl` (`m_location_id`, `m_location_country`, `m_location_state`, `m_location_city`, `m_location_status`) VALUES
(1, 1, 4, 'Durg-Bhilai', 1),
(2, 1, 4, 'Raipur', 1),
(3, 1, 1, 'Dantewada', 1),
(4, 1, 1, 'Sarguja', 1),
(5, 1, 1, 'Dhamtari', 1),
(6, 1, 1, 'Bilaspur', 1),
(7, 1, 1, 'Rajnandgaon', 1),
(8, 1, 1, 'Bastar(Jagdalpur) ', 1),
(9, 1, 1, 'Kanker', 1),
(10, 1, 1, 'Narayanpur', 1),
(11, 1, 1, 'Bijapur', 1),
(12, 1, 1, 'Sukma', 1),
(13, 1, 1, 'Mungeli', 1),
(14, 1, 1, 'Kabeerdham(Kawardha) ', 1),
(15, 1, 1, 'Koriya', 1),
(16, 1, 1, 'Jashpur', 1),
(17, 1, 1, 'Surajpur', 1),
(18, 1, 1, 'Balrampur', 1),
(19, 1, 1, 'Korba', 1),
(20, 1, 1, 'Janjgir Champa', 1),
(21, 1, 1, 'Raigarh', 1),
(22, 1, 1, 'GPM', 1),
(23, 1, 1, 'Mahasamund', 1),
(24, 1, 1, 'BalaodaBazar', 1),
(25, 1, 1, 'Gariyaband', 1),
(26, 1, 1, 'Kondagaon', 1),
(27, 1, 1, 'Bemetra', 1),
(28, 1, 1, 'Balod', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_notification`
--

CREATE TABLE `master_notification` (
  `notification_id` bigint(20) NOT NULL,
  `notification_text` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `notification_desc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nofification_date` date NOT NULL,
  `notification_user` int(11) NOT NULL COMMENT '1-user ',
  `notification_userid` int(11) NOT NULL,
  `notification_banner` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_offers_tbl`
--

CREATE TABLE `master_offers_tbl` (
  `m_offer_id` int(11) NOT NULL,
  `m_offer_title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `m_offer_image` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `m_offer_priority` int(11) NOT NULL,
  `m_offer_started` date NOT NULL,
  `m_offer_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_state_tbl`
--

CREATE TABLE `master_state_tbl` (
  `m_state_id` int(11) NOT NULL,
  `m_state_country` int(11) NOT NULL,
  `m_state_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_subject_tbl`
--

CREATE TABLE `master_subject_tbl` (
  `m_subject_id` int(11) NOT NULL,
  `m_subject_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `m_subject_icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `m_subject_desc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `m_subject_for` int(11) NOT NULL COMMENT '1-Course 2_notes',
  `m_subject_typeid` int(11) NOT NULL COMMENT 'For Course id or Notes id',
  `m_subject_status` int(11) NOT NULL COMMENT '0-active 1-In-active	'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `master_users`
--

CREATE TABLE `master_users` (
  `kh_user_id` bigint(20) NOT NULL,
  `kh_user_fname` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_user_password` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_user_contact` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_user_alt_contact` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_user_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_user_address` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_user_city` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_user_area_id` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_user_image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_user_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = un_verified, 2 = semi_verified 3 =  verified',
  `kh_user_otp` int(11) NOT NULL,
  `kh_user_session_token` varchar(200) NOT NULL,
  `kh_user_user_joined` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kh_user_fcm_id` text NOT NULL,
  `kh_user_gender` varchar(200) NOT NULL,
  `kh_user_dob` date NOT NULL,
  `kh_user_refer_by` bigint(20) NOT NULL,
  `kh_user_referal_code` varchar(200) NOT NULL,
  `kh_user_refered_users` int(11) NOT NULL,
  `kh_user_wallet_amount` double NOT NULL,
  `kh_user_wallet_added` double NOT NULL,
  `kh_user_wallet_winings` double NOT NULL,
  `m_father_name` text DEFAULT NULL,
  `m_mother_name` text DEFAULT NULL,
  `m_f_occupation` text DEFAULT NULL,
  `m_m_occupation` text DEFAULT NULL,
  `m_parent_mobile` varchar(256) DEFAULT NULL,
  `m_roll_number` bigint(15) DEFAULT NULL,
  `m_university_name` text DEFAULT NULL,
  `m_university_marks` int(10) DEFAULT 0,
  `m_school_name` text DEFAULT NULL,
  `m_xii_marks` int(10) NOT NULL DEFAULT 0,
  `m_x_marks` int(10) NOT NULL DEFAULT 0,
  `m_whatsapp_number` varchar(256) NOT NULL,
  `m_blood_group` varchar(256) NOT NULL,
  `khu_adhar_no` text DEFAULT NULL,
  `khu_adhar_file` text DEFAULT NULL,
  `khu_pan_no` text DEFAULT NULL,
  `khu_pan_file` text DEFAULT NULL,
  `khu_upi_id` text DEFAULT NULL,
  `khu_mobile_verified` int(11) NOT NULL DEFAULT 0 COMMENT '0 = Un-Verified, 1 = Verified',
  `khu_email_verified` int(11) NOT NULL DEFAULT 0 COMMENT '0 = Un-Verified, 1 = Verified'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_user_reviews`
--

CREATE TABLE `master_user_reviews` (
  `id` int(11) NOT NULL,
  `m_name` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_designation` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_image` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_review` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` bigint(20) NOT NULL,
  `notification_text` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `notification_desc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nofification_date` date NOT NULL,
  `notification_user` int(11) NOT NULL COMMENT '1-user ',
  `notification_userid` int(11) NOT NULL,
  `notification_banner` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offer_wise_course`
--

CREATE TABLE `offer_wise_course` (
  `owc_id` bigint(20) NOT NULL,
  `owc_course_id` bigint(20) NOT NULL COMMENT 'course id',
  `owc_offer_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `our_tems_master`
--

CREATE TABLE `our_tems_master` (
  `id` bigint(11) NOT NULL,
  `member_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `member_position` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `member_image` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_setting_tbl`
--

CREATE TABLE `page_setting_tbl` (
  `page_id` int(11) NOT NULL,
  `page_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `page_link` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '\'No address\'',
  `address2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '\'No address\'',
  `contact1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `page_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `partners_master`
--

CREATE TABLE `partners_master` (
  `id` bigint(11) NOT NULL,
  `partner_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `partner_url` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `partner_image` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject_rating_tbl`
--

CREATE TABLE `subject_rating_tbl` (
  `id` bigint(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `rating` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `review` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `s_category_id` bigint(30) NOT NULL,
  `s_m_category_id` bigint(30) NOT NULL DEFAULT 0,
  `s_category_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `s_category_desc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `s_category_icon` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `s_category_banner` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `s_category_status` int(11) NOT NULL COMMENT '0-active 1-In-active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials_tbl`
--

CREATE TABLE `testimonials_tbl` (
  `id` bigint(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `rating` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `review` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_type_tbl`
--

CREATE TABLE `users_type_tbl` (
  `utype_id` int(50) NOT NULL,
  `utype_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_courses_tbl`
--

CREATE TABLE `user_courses_tbl` (
  `t_reg_id` bigint(20) NOT NULL,
  `t_reg_type` int(11) NOT NULL COMMENT '1-course 2-test 3-notes',
  `t_reg_user` bigint(20) NOT NULL,
  `t_reg_course` bigint(20) NOT NULL,
  `t_reg_package` bigint(20) NOT NULL,
  `t_reg_notes` bigint(20) NOT NULL,
  `t_reg_date` date NOT NULL,
  `t_reg_amount` double NOT NULL,
  `t_reg_payble` double NOT NULL,
  `t_reg_discount` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_reg_coupon` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_reg_pay_mode` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_reg_transaction_id` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_reg_remarks` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_reg_status` int(11) NOT NULL,
  `t_payment_status` int(11) NOT NULL,
  `t_reg_added_on` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `t_reg_register_from` int(11) NOT NULL COMMENT '1-App 2-Web',
  `batch_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_course_status`
--

CREATE TABLE `user_course_status` (
  `u_course_statusid` int(11) NOT NULL,
  `u_course_subject` int(11) NOT NULL,
  `u_course_topic` int(11) NOT NULL,
  `u_course_userid` int(11) NOT NULL,
  `u_course_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_wishlist_tbl`
--

CREATE TABLE `user_wishlist_tbl` (
  `t_wishlist_id` bigint(20) NOT NULL,
  `t_wishlist_type` int(11) NOT NULL COMMENT '1-course 2-test 3-notes',
  `t_wishlist_user` bigint(20) NOT NULL,
  `t_wishlist_course` bigint(20) NOT NULL,
  `t_wishlist_package` int(11) NOT NULL,
  `t_wishlist_notes` int(11) NOT NULL,
  `t_wishlist_added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_settings`
--
ALTER TABLE `application_settings`
  ADD PRIMARY KEY (`m_app_id`);

--
-- Indexes for table `app_admin_tbl`
--
ALTER TABLE `app_admin_tbl`
  ADD PRIMARY KEY (`kh_userid`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_area`
--
ALTER TABLE `master_area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `master_banners_tbl`
--
ALTER TABLE `master_banners_tbl`
  ADD PRIMARY KEY (`m_banner_id`);

--
-- Indexes for table `master_batch_tbl`
--
ALTER TABLE `master_batch_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_category`
--
ALTER TABLE `master_category`
  ADD PRIMARY KEY (`m_category_id`);

--
-- Indexes for table `master_country_tbl`
--
ALTER TABLE `master_country_tbl`
  ADD PRIMARY KEY (`m_country_id`);

--
-- Indexes for table `master_course_tbl`
--
ALTER TABLE `master_course_tbl`
  ADD PRIMARY KEY (`m_course_id`);

--
-- Indexes for table `master_lecture_tbl`
--
ALTER TABLE `master_lecture_tbl`
  ADD PRIMARY KEY (`mlecture_id`);

--
-- Indexes for table `master_lession_tbl`
--
ALTER TABLE `master_lession_tbl`
  ADD PRIMARY KEY (`mlession_id`);

--
-- Indexes for table `master_locations_tbl`
--
ALTER TABLE `master_locations_tbl`
  ADD PRIMARY KEY (`m_location_id`);

--
-- Indexes for table `master_notification`
--
ALTER TABLE `master_notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `master_offers_tbl`
--
ALTER TABLE `master_offers_tbl`
  ADD PRIMARY KEY (`m_offer_id`);

--
-- Indexes for table `master_state_tbl`
--
ALTER TABLE `master_state_tbl`
  ADD PRIMARY KEY (`m_state_id`);

--
-- Indexes for table `master_subject_tbl`
--
ALTER TABLE `master_subject_tbl`
  ADD PRIMARY KEY (`m_subject_id`);

--
-- Indexes for table `master_users`
--
ALTER TABLE `master_users`
  ADD PRIMARY KEY (`kh_user_id`);

--
-- Indexes for table `master_user_reviews`
--
ALTER TABLE `master_user_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `offer_wise_course`
--
ALTER TABLE `offer_wise_course`
  ADD PRIMARY KEY (`owc_id`);

--
-- Indexes for table `our_tems_master`
--
ALTER TABLE `our_tems_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_setting_tbl`
--
ALTER TABLE `page_setting_tbl`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `partners_master`
--
ALTER TABLE `partners_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_rating_tbl`
--
ALTER TABLE `subject_rating_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`s_category_id`);

--
-- Indexes for table `testimonials_tbl`
--
ALTER TABLE `testimonials_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_type_tbl`
--
ALTER TABLE `users_type_tbl`
  ADD PRIMARY KEY (`utype_id`);

--
-- Indexes for table `user_courses_tbl`
--
ALTER TABLE `user_courses_tbl`
  ADD PRIMARY KEY (`t_reg_id`);

--
-- Indexes for table `user_course_status`
--
ALTER TABLE `user_course_status`
  ADD PRIMARY KEY (`u_course_statusid`);

--
-- Indexes for table `user_wishlist_tbl`
--
ALTER TABLE `user_wishlist_tbl`
  ADD PRIMARY KEY (`t_wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_settings`
--
ALTER TABLE `application_settings`
  MODIFY `m_app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `app_admin_tbl`
--
ALTER TABLE `app_admin_tbl`
  MODIFY `kh_userid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_area`
--
ALTER TABLE `master_area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_banners_tbl`
--
ALTER TABLE `master_banners_tbl`
  MODIFY `m_banner_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_batch_tbl`
--
ALTER TABLE `master_batch_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_category`
--
ALTER TABLE `master_category`
  MODIFY `m_category_id` bigint(30) NOT NULL AUTO_INCREMENT COMMENT '1. master_category_id (master_category_id, category_id, sub_category_id)';

--
-- AUTO_INCREMENT for table `master_country_tbl`
--
ALTER TABLE `master_country_tbl`
  MODIFY `m_country_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_course_tbl`
--
ALTER TABLE `master_course_tbl`
  MODIFY `m_course_id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `master_lecture_tbl`
--
ALTER TABLE `master_lecture_tbl`
  MODIFY `mlecture_id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `master_lession_tbl`
--
ALTER TABLE `master_lession_tbl`
  MODIFY `mlession_id` bigint(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_locations_tbl`
--
ALTER TABLE `master_locations_tbl`
  MODIFY `m_location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `master_notification`
--
ALTER TABLE `master_notification`
  MODIFY `notification_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_offers_tbl`
--
ALTER TABLE `master_offers_tbl`
  MODIFY `m_offer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_state_tbl`
--
ALTER TABLE `master_state_tbl`
  MODIFY `m_state_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_subject_tbl`
--
ALTER TABLE `master_subject_tbl`
  MODIFY `m_subject_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_users`
--
ALTER TABLE `master_users`
  MODIFY `kh_user_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_user_reviews`
--
ALTER TABLE `master_user_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer_wise_course`
--
ALTER TABLE `offer_wise_course`
  MODIFY `owc_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_tems_master`
--
ALTER TABLE `our_tems_master`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_setting_tbl`
--
ALTER TABLE `page_setting_tbl`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners_master`
--
ALTER TABLE `partners_master`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject_rating_tbl`
--
ALTER TABLE `subject_rating_tbl`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `s_category_id` bigint(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials_tbl`
--
ALTER TABLE `testimonials_tbl`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_type_tbl`
--
ALTER TABLE `users_type_tbl`
  MODIFY `utype_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_courses_tbl`
--
ALTER TABLE `user_courses_tbl`
  MODIFY `t_reg_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_course_status`
--
ALTER TABLE `user_course_status`
  MODIFY `u_course_statusid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_wishlist_tbl`
--
ALTER TABLE `user_wishlist_tbl`
  MODIFY `t_wishlist_id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
