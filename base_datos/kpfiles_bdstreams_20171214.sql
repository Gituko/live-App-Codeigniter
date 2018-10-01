/*
Navicat MySQL Data Transfer

Source Server         : streamFuncionando_230
Source Server Version : 50557
Source Host           : 173.255.192.230:3306
Source Database       : kpfiles_bdstreams

Target Server Type    : MYSQL
Target Server Version : 50557
File Encoding         : 65001

Date: 2017-12-14 11:59:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for stream_add_setting
-- ----------------------------
DROP TABLE IF EXISTS `stream_add_setting`;
CREATE TABLE `stream_add_setting` (
  `add_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_postion` varchar(255) NOT NULL,
  `price` double(7,2) NOT NULL,
  `size` varchar(255) NOT NULL,
  PRIMARY KEY (`add_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_add_setting
-- ----------------------------
INSERT INTO `stream_add_setting` VALUES ('1', 'home_top', '10.00', '871 X 73');
INSERT INTO `stream_add_setting` VALUES ('2', 'home_bottom', '10.00', '871 X 73');
INSERT INTO `stream_add_setting` VALUES ('3', 'video_detail_top', '12.00', '871 X 73');
INSERT INTO `stream_add_setting` VALUES ('4', 'video_detail_bottom', '11.00', '871 X 73');
INSERT INTO `stream_add_setting` VALUES ('5', 'video_detail_right', '10.00', '400 X 225');
INSERT INTO `stream_add_setting` VALUES ('6', 'artist_details_top', '10.00', '871 X 73');
INSERT INTO `stream_add_setting` VALUES ('7', 'artist_details_right', '10.00', '400 X 225');
INSERT INTO `stream_add_setting` VALUES ('8', 'artist_details_bottom', '10.00', '871 X 73');
INSERT INTO `stream_add_setting` VALUES ('9', 'category_list_bottom', '10.00', '871 X 73');

-- ----------------------------
-- Table structure for stream_admin_login
-- ----------------------------
DROP TABLE IF EXISTS `stream_admin_login`;
CREATE TABLE `stream_admin_login` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_user_name` varchar(30) NOT NULL,
  `admin_image` varchar(255) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_contactno` varchar(255) NOT NULL,
  `admin_type` int(11) NOT NULL,
  `admin_status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_admin_login
-- ----------------------------
INSERT INTO `stream_admin_login` VALUES ('1', 'admin', 'img1.png', 'YWRtaW4=', 'SuperAdmin', 'comprasintera@gmail.com', '', '0', 'Active');
INSERT INTO `stream_admin_login` VALUES ('7', 'Anuncio4', '0', 'MTIzNA==', 'anuncio 4', 'anuncio4@lapmaster.mx', '', '0', 'Active');

-- ----------------------------
-- Table structure for stream_advertisement_video
-- ----------------------------
DROP TABLE IF EXISTS `stream_advertisement_video`;
CREATE TABLE `stream_advertisement_video` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `video_status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_advertisement_video
-- ----------------------------
INSERT INTO `stream_advertisement_video` VALUES ('9', 'dd', '15052894201498490483_foo.mp4', 'Active');
INSERT INTO `stream_advertisement_video` VALUES ('10', 'test', '15052922701498490317_Snowball.mp4', 'Active');
INSERT INTO `stream_advertisement_video` VALUES ('11', 'www', '15052935291498489298_Snowball.mp4', 'Active');
INSERT INTO `stream_advertisement_video` VALUES ('12', 'vgbnvbn', '15052935001498488653_Snowball.mp4', 'Active');

-- ----------------------------
-- Table structure for stream_advertisement2
-- ----------------------------
DROP TABLE IF EXISTS `stream_advertisement2`;
CREATE TABLE `stream_advertisement2` (
  `advertisement_id` int(11) NOT NULL AUTO_INCREMENT,
  `advertisement_name` varchar(255) NOT NULL,
  `advertisement_image` varchar(255) NOT NULL,
  `advertisement_link` varchar(255) NOT NULL,
  `advertisement_start_date` date NOT NULL,
  `advertisement_end_date` date NOT NULL,
  `advertisement_date` date NOT NULL,
  `page` varchar(255) NOT NULL,
  `days` int(11) NOT NULL,
  `total_price` float(7,2) NOT NULL,
  `advertisement_code` varchar(255) NOT NULL,
  `advertisment_type` enum('image','code') NOT NULL,
  `advertisement_status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`advertisement_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_advertisement2
-- ----------------------------
INSERT INTO `stream_advertisement2` VALUES ('3', 'google add1', '1505142897_googleadd3.png', 'https://', '2017-09-10', '2017-10-10', '2017-09-11', 'home_top', '30', '10.00', '', 'image', 'Active');
INSERT INTO `stream_advertisement2` VALUES ('4', 'google add2', '1505142906_googleadd3.png', 'https://', '2017-09-09', '2017-10-09', '2017-09-11', 'home_top', '30', '10.00', '', 'image', 'Active');
INSERT INTO `stream_advertisement2` VALUES ('5', 'google add3', '1505142945_thumb_1505122022_1499254044_googleadd1.png', 'https://', '2017-09-11', '2017-10-11', '2017-09-11', 'home_top', '30', '10.00', '', 'image', 'Active');
INSERT INTO `stream_advertisement2` VALUES ('6', 'googleadd4', '1499265910_googleadd3.png', 'https://', '2017-09-09', '2017-10-09', '2017-07-05', 'artist_details_top', '30', '0.00', '', 'image', 'Active');
INSERT INTO `stream_advertisement2` VALUES ('7', 'googleadd5', '1499266017_googleadd4.png', 'https://', '2017-09-09', '2017-10-09', '2017-07-05', 'artist_details_right', '30', '0.00', '', 'image', 'Active');
INSERT INTO `stream_advertisement2` VALUES ('8', 'googleadd6', '1499266084_googleadd4.png', 'https://', '2017-09-09', '2017-10-09', '2017-07-05', 'artist_details_right', '30', '0.00', '', 'image', 'Active');
INSERT INTO `stream_advertisement2` VALUES ('9', 'googlebottom', '1505142996_thumb_1505122022_1499254044_googleadd1.png', 'https://', '2017-09-11', '2017-10-11', '2017-09-11', 'home_bottom', '30', '20.00', '', 'image', 'Active');
INSERT INTO `stream_advertisement2` VALUES ('10', 'testing_bottom', '1505143010_1505133470_googleadd3.png', 'https://', '2017-09-11', '2017-10-11', '2017-09-11', 'home_bottom', '30', '20.00', '', 'image', 'Active');
INSERT INTO `stream_advertisement2` VALUES ('11', 'googleadd', '1505133470_googleadd3.png', 'https://', '2017-09-11', '2017-10-11', '2017-09-11', 'video_detail_top', '30', '24.00', '', 'image', 'Active');
INSERT INTO `stream_advertisement2` VALUES ('12', 'googleadd video detail', '1505134515_googleadd4.png', 'https://', '2017-09-11', '2017-10-11', '2017-09-11', 'video_detail_right', '30', '20.00', '', 'image', 'Active');
INSERT INTO `stream_advertisement2` VALUES ('13', 'google ad video detail', '1505134207_googleadd4.png', 'https://', '2017-09-11', '2017-10-11', '2017-09-11', 'video_detail_right', '30', '20.00', '', 'image', 'Active');
INSERT INTO `stream_advertisement2` VALUES ('14', 'ad videodetail bottom', '1505135065_googleadd3.png', 'https://', '2017-09-11', '2017-10-11', '2017-09-11', 'video_detail_bottom', '30', '22.00', '', 'image', 'Active');
INSERT INTO `stream_advertisement2` VALUES ('15', 'googlead artist', '1505141848_googleadd3.png', 'https://', '2017-09-11', '2017-10-11', '2017-09-11', 'artist_details_bottom', '30', '20.00', '', 'image', 'Active');
INSERT INTO `stream_advertisement2` VALUES ('16', 'googlead categorylist', '1505142415_googleadd3.png', 'https://', '2017-09-11', '2017-10-11', '2017-09-11', 'category_list_bottom', '30', '20.00', '', 'image', 'Active');

-- ----------------------------
-- Table structure for stream_artist
-- ----------------------------
DROP TABLE IF EXISTS `stream_artist`;
CREATE TABLE `stream_artist` (
  `artist_id` int(11) NOT NULL AUTO_INCREMENT,
  `Column 11` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('Pending','Active','Inactive') NOT NULL,
  `forgot_password_id` varchar(255) NOT NULL,
  `activation_id` varchar(255) NOT NULL,
  `register_date` datetime NOT NULL,
  `login_date` datetime NOT NULL,
  `last_login_time` datetime NOT NULL,
  `online_status` enum('Online','Offline') NOT NULL,
  `sex` enum('male','female','others') NOT NULL,
  `artist_tag` text NOT NULL,
  `interested_in` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `last_broadcast` datetime NOT NULL,
  `language_known` varchar(255) NOT NULL,
  `body_type` varchar(255) NOT NULL,
  `about_me` text NOT NULL,
  `orientation` varchar(255) NOT NULL,
  `haircolor` varchar(255) NOT NULL,
  `ethnicity` varchar(255) NOT NULL,
  `eyecolor` varchar(255) NOT NULL,
  `category_type` int(11) NOT NULL,
  `live_video` int(11) NOT NULL,
  `recorded_video` int(11) NOT NULL,
  `live&recorded_video` int(11) NOT NULL,
  `paypal_id` varchar(255) NOT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_artist
-- ----------------------------
INSERT INTO `stream_artist` VALUES ('15', '0000-00-00', 'Barbara', 'Barbara', 'barbara@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'newtown2', 'b', '12345', '1234567890', '1974-02-23', '1504774790_03.jpg', 'Active', '', '0', '2017-06-20 14:32:42', '2017-08-29 16:18:07', '2017-12-13 04:19:59', 'Online', 'female', '', 'Men,Women,Trans,Couple', 'x', '0000-00-00 00:00:00', '', 'Slim or Petite', 'The good streamer', 'Bi-curious ', 'Bold', 'Arab', 'Blue', '1', '0', '0', '0', 'barbara@gmail.com');
INSERT INTO `stream_artist` VALUES ('28', '0000-00-00', 'Armando', 'armando', 'armando@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Laredo', 'TX', '78041', '1234', '0000-00-00', '1504719934_New.jpg', 'Active', '', 'bbb5bbf964881bd03e670f75706fd066', '2017-07-14 16:11:17', '2017-07-14 17:53:39', '2017-07-14 21:31:28', 'Online', 'male', '', '', 'dfhdfhdg', '0000-00-00 00:00:00', '', 'Athletic', 'hdfhdgfhd', 'Straight', 'Black', 'Arab', 'Black', '7', '0', '0', '0', '');
INSERT INTO `stream_artist` VALUES ('38', '0000-00-00', 'Angel', 'angel', 'angel@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Laredo', 'TX', '78041', '14785223696987', '2017-07-27', '1501226670_Koala.jpg', 'Active', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Online', 'male', 'funny,video', '', '', '0000-00-00 00:00:00', '', '', 'this is to test wther all is working fine or not', '', '', '', '', '1', '2', '2', '2', '');
INSERT INTO `stream_artist` VALUES ('42', '0000-00-00', 'Alan', 'Alan', 'alan@gmail.com', '', 'X', 'Y', '12345', '1234567890', '1974-02-11', '1503920535_Tulips.jpg', 'Active', '', '', '2017-08-28 16:34:56', '2017-08-28 17:21:48', '2017-08-28 17:17:18', 'Online', 'male', 'AlanTags', '', '', '0000-00-00 00:00:00', '', '', 'About alan', '', '', '', '', '0', '0', '0', '0', '');
INSERT INTO `stream_artist` VALUES ('62', '0000-00-00', 'Zach Kent', 'Kent005', 'Kent005@gmail.com', '', '', '', '', '', '0000-00-00', '', 'Active', '', '71e415fb5a418436ed94385c733928cd', '2017-11-06 04:20:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Offline', 'male', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '0', '0', '0', '0', '');
INSERT INTO `stream_artist` VALUES ('63', '0000-00-00', 'Brandon Garva', 'GARVA', 'brandon.garva@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'VISTA', 'CA', '92085', '7603908249', '1983-04-17', '', 'Active', '', '59f88dfae51ecb063d7e9498d18815ab', '2017-11-06 05:20:45', '0000-00-00 00:00:00', '2017-11-07 08:45:22', 'Offline', 'male', '', '', 'PO BOX 3785', '0000-00-00 00:00:00', '', '', 'I am a drum and bass, house and techno DJ based out of San Diego, California. I have been spinning since 2004 and producing electronic music events since 2005. ', '', '', '', '', '0', '0', '0', '0', '');
INSERT INTO `stream_artist` VALUES ('64', '0000-00-00', 'Christopher Kindt', 'cdip', 'deepbarrels@gmail.com', '', '', '', '', '', '0000-00-00', '', 'Active', '', '9ddddfb54162d9d52cf880f754cdc8b8', '2017-11-06 05:23:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Offline', 'male', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '0', '0', '0', '0', '');
INSERT INTO `stream_artist` VALUES ('67', '0000-00-00', 'jesus marinos', 'marinos', 'jesusmarinos@hotmail.com', 'ae10b4cf7e010a1529e9284a05f56c79', '', '', '', '', '0000-00-00', '', 'Active', '', '9c556aff190e957d7cfbde51dbcdc511', '2017-12-01 05:54:02', '0000-00-00 00:00:00', '2017-12-03 06:36:25', 'Offline', 'male', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '0', '0', '0', '0', '');
INSERT INTO `stream_artist` VALUES ('69', '0000-00-00', 'Cruz Guerra', 'CruzGG', 'dublg8150@gmail.com', '08faae3b43ca403d180ff40b95cb4f57', '', '', '', '', '0000-00-00', '1512287114_download.png', 'Active', '', '6e5e0260c013bdc9761083f4f1afeaa0', '2017-12-03 13:08:56', '0000-00-00 00:00:00', '2017-12-04 03:29:40', 'Offline', 'male', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '0', '0', '0', '0', '');
INSERT INTO `stream_artist` VALUES ('70', '0000-00-00', 'A4', 'A4', 'a4@lapmaster.mx', '', '', '', '', '', '0000-00-00', '', 'Active', '', '732ee335064c037c160ebbc6e8ea491c', '2017-12-03 22:18:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Offline', 'male', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '0', '0', '0', '0', '');
INSERT INTO `stream_artist` VALUES ('71', '0000-00-00', 'Stream-Act Team', 'Stream Act ', 'gabe_guerra@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'TBD', 'TBD', '', '', '0000-00-00', '', 'Active', '', '87e653a4d0f22fde1b9743892e49b532', '2017-12-14 00:38:54', '0000-00-00 00:00:00', '2017-12-14 01:40:27', 'Offline', 'male', '', '', 'TBD', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '0', '0', '0', '0', '');

-- ----------------------------
-- Table structure for stream_artist_follow
-- ----------------------------
DROP TABLE IF EXISTS `stream_artist_follow`;
CREATE TABLE `stream_artist_follow` (
  `follow_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `following_date` datetime NOT NULL,
  PRIMARY KEY (`follow_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_artist_follow
-- ----------------------------
INSERT INTO `stream_artist_follow` VALUES ('3', '0', '0', '2017-08-29 10:01:36');
INSERT INTO `stream_artist_follow` VALUES ('12', '17', '15', '2017-09-18 15:15:11');
INSERT INTO `stream_artist_follow` VALUES ('18', '12', '15', '2017-09-19 07:55:32');
INSERT INTO `stream_artist_follow` VALUES ('19', '0', '15', '2017-09-22 09:26:09');
INSERT INTO `stream_artist_follow` VALUES ('21', '1', '15', '2017-10-09 13:42:35');
INSERT INTO `stream_artist_follow` VALUES ('23', '28', '15', '2017-12-13 19:16:28');

-- ----------------------------
-- Table structure for stream_artist_image_album
-- ----------------------------
DROP TABLE IF EXISTS `stream_artist_image_album`;
CREATE TABLE `stream_artist_image_album` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `artist_id` int(11) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_artist_image_album
-- ----------------------------
INSERT INTO `stream_artist_image_album` VALUES ('26', '1497964025_Desert.jpg', '', '1');
INSERT INTO `stream_artist_image_album` VALUES ('27', '1497964282_Desert.jpg', '', '1');
INSERT INTO `stream_artist_image_album` VALUES ('28', '1497966249_Desert.jpg', '', '1');
INSERT INTO `stream_artist_image_album` VALUES ('31', '1497966259_Hydrangeas.jpg', '', '1');
INSERT INTO `stream_artist_image_album` VALUES ('32', '1497966367_Hydrangeas.jpg', '', '1');
INSERT INTO `stream_artist_image_album` VALUES ('33', '1497966371_Koala.jpg', 'sdfgsdgsdg', '1');
INSERT INTO `stream_artist_image_album` VALUES ('34', '1497966393_Hydrangeas.jpg', 'sdfgsdfgsd', '1');
INSERT INTO `stream_artist_image_album` VALUES ('35', '1497966452_Jellyfish.jpg', 'sdfgsdfg', '1');
INSERT INTO `stream_artist_image_album` VALUES ('60', '1499927356_makeThumbnail_(1).jpg', 'makeThumbnail (1)', '15');
INSERT INTO `stream_artist_image_album` VALUES ('61', '1499927366_makeThumbnail_(2).jpg', 'makeThumbnail (2)', '15');
INSERT INTO `stream_artist_image_album` VALUES ('62', '1498577199_Tulips.jpg', 'Tulips', '15');
INSERT INTO `stream_artist_image_album` VALUES ('63', '1498720656_Chrysanthemum.jpg', 'Chrysanthemum2', '15');
INSERT INTO `stream_artist_image_album` VALUES ('64', '1498720658_Desert.jpg', 'Desert', '15');
INSERT INTO `stream_artist_image_album` VALUES ('65', '1498720661_Jellyfish.jpg', 'Jellyfish', '15');
INSERT INTO `stream_artist_image_album` VALUES ('66', '1498720664_Penguins.jpg', 'Penguins', '15');
INSERT INTO `stream_artist_image_album` VALUES ('67', '1498720667_Chrysanthemum.jpg', 'Chrysanthemum', '15');
INSERT INTO `stream_artist_image_album` VALUES ('68', '1498720670_Tulips.jpg', 'Tulips', '15');
INSERT INTO `stream_artist_image_album` VALUES ('69', '1498720673_Penguins.jpg', 'Penguins', '15');
INSERT INTO `stream_artist_image_album` VALUES ('70', '1498720679_Chrysanthemum.jpg', 'Chrysanthemum', '15');
INSERT INTO `stream_artist_image_album` VALUES ('71', '1498720683_Tulips.jpg', 'Tulips', '15');
INSERT INTO `stream_artist_image_album` VALUES ('72', '1499850038_Chrysanthemum.jpg', 'Chrysanthemum', '15');
INSERT INTO `stream_artist_image_album` VALUES ('73', '1499850051_makeThumbnail.jpg', 'makeThumbnail', '15');
INSERT INTO `stream_artist_image_album` VALUES ('74', '1500540857_vss_img2.png', 'rose', '34');
INSERT INTO `stream_artist_image_album` VALUES ('75', '1500540881_profile_image.png', 'mery', '34');
INSERT INTO `stream_artist_image_album` VALUES ('76', '1500540930_s2.png', 'marlo', '34');
INSERT INTO `stream_artist_image_album` VALUES ('78', '1501148315_Koala.jpg', 'Koala', '37');
INSERT INTO `stream_artist_image_album` VALUES ('79', '1501148303_Penguins.jpg', 'Penguins', '37');
INSERT INTO `stream_artist_image_album` VALUES ('81', '1501149012_Lighthouse.jpg', 'Lighthouse', '37');
INSERT INTO `stream_artist_image_album` VALUES ('82', '1501150840_Penguins.jpg', 'Penguins', '37');
INSERT INTO `stream_artist_image_album` VALUES ('83', '1501150980_Tulips.jpg', 'Tulips', '37');
INSERT INTO `stream_artist_image_album` VALUES ('84', '1501151738_Tulips.jpg', 'Tulips', '37');
INSERT INTO `stream_artist_image_album` VALUES ('85', '1501151836_Tulips.jpg', 'Tulips', '37');
INSERT INTO `stream_artist_image_album` VALUES ('86', '1501151854_Penguins.jpg', 'Penguins', '37');
INSERT INTO `stream_artist_image_album` VALUES ('87', '1501151947_Tulips.jpg', 'Tulips', '37');
INSERT INTO `stream_artist_image_album` VALUES ('88', '1501151981_Tulips.jpg', 'Tulips', '37');
INSERT INTO `stream_artist_image_album` VALUES ('89', '1501152031_Lighthouse.jpg', 'Lighthouse', '37');
INSERT INTO `stream_artist_image_album` VALUES ('90', '1501152059_Chrysanthemum.jpg', 'Chrysanthemum', '37');
INSERT INTO `stream_artist_image_album` VALUES ('91', '1501225147_Tulips.jpg', 'Tulips', '37');
INSERT INTO `stream_artist_image_album` VALUES ('92', '1501226321_Desert.jpg', 'Desert', '37');
INSERT INTO `stream_artist_image_album` VALUES ('93', '1501226423_Tulips.jpg', 'Tulips', '37');
INSERT INTO `stream_artist_image_album` VALUES ('94', '1501226482_Tulips.jpg', 'Tulips', '37');
INSERT INTO `stream_artist_image_album` VALUES ('95', '1504776821_01.jpg', '01', '15');

-- ----------------------------
-- Table structure for stream_artist_video_album
-- ----------------------------
DROP TABLE IF EXISTS `stream_artist_video_album`;
CREATE TABLE `stream_artist_video_album` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_title` varchar(255) NOT NULL,
  `video_overview` text NOT NULL,
  `video_name` varchar(255) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `video_status` enum('Show','Hide') NOT NULL,
  `category_type` int(11) NOT NULL,
  `video_tags` text NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_artist_video_album
-- ----------------------------
INSERT INTO `stream_artist_video_album` VALUES ('27', 'Winter Season', 'This is a video of a dog ,who is playing in snow with his  master', '1498490321_foo.mp4', '15', 'Show', '1', 'video,tags');
INSERT INTO `stream_artist_video_album` VALUES ('56', 'funny videos', 'this a video about a dog ,whose owner takes him for a walk evryday', '1501051259_1498488461_foo.mp4', '34', 'Show', '1', 'funny,dog');

-- ----------------------------
-- Table structure for stream_artist_view
-- ----------------------------
DROP TABLE IF EXISTS `stream_artist_view`;
CREATE TABLE `stream_artist_view` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_artist_view
-- ----------------------------
INSERT INTO `stream_artist_view` VALUES ('1', '15', '2017-06-29', '::1');
INSERT INTO `stream_artist_view` VALUES ('2', '15', '2017-06-30', '::1');
INSERT INTO `stream_artist_view` VALUES ('3', '0', '2017-06-29', '::1');
INSERT INTO `stream_artist_view` VALUES ('4', '15', '2017-07-04', '::1');
INSERT INTO `stream_artist_view` VALUES ('5', '15', '2017-07-05', '::1');
INSERT INTO `stream_artist_view` VALUES ('6', '15', '2017-07-06', '::1');
INSERT INTO `stream_artist_view` VALUES ('7', '5', '2017-07-06', '::1');
INSERT INTO `stream_artist_view` VALUES ('8', '15', '2017-07-07', '::1');
INSERT INTO `stream_artist_view` VALUES ('9', '3', '2017-07-07', '::1');
INSERT INTO `stream_artist_view` VALUES ('10', '5', '2017-07-07', '::1');
INSERT INTO `stream_artist_view` VALUES ('11', '0', '2017-07-07', '::1');
INSERT INTO `stream_artist_view` VALUES ('12', '15', '2017-07-10', '::1');
INSERT INTO `stream_artist_view` VALUES ('13', '5', '2017-07-10', '::1');
INSERT INTO `stream_artist_view` VALUES ('14', '0', '2017-07-10', '::1');
INSERT INTO `stream_artist_view` VALUES ('15', '15', '2017-07-11', '::1');
INSERT INTO `stream_artist_view` VALUES ('16', '15', '2017-07-13', '::1');
INSERT INTO `stream_artist_view` VALUES ('17', '15', '2017-07-14', '::1');
INSERT INTO `stream_artist_view` VALUES ('18', '5', '2017-07-14', '::1');
INSERT INTO `stream_artist_view` VALUES ('19', '0', '2017-07-14', '::1');
INSERT INTO `stream_artist_view` VALUES ('20', '28', '2017-07-14', '::1');
INSERT INTO `stream_artist_view` VALUES ('21', '17', '2017-07-14', '::1');
INSERT INTO `stream_artist_view` VALUES ('22', '15', '2017-07-17', '::1');
INSERT INTO `stream_artist_view` VALUES ('23', '15', '2017-07-19', '59.97.159.208');
INSERT INTO `stream_artist_view` VALUES ('24', '15', '2017-07-20', '117.194.228.87');
INSERT INTO `stream_artist_view` VALUES ('25', '15', '2017-07-20', '47.15.1.82');
INSERT INTO `stream_artist_view` VALUES ('26', '15', '2017-07-27', '117.194.229.38');
INSERT INTO `stream_artist_view` VALUES ('27', '2', '2017-08-28', '59.90.53.26');
INSERT INTO `stream_artist_view` VALUES ('28', '15', '2017-08-29', '189.213.119.73');
INSERT INTO `stream_artist_view` VALUES ('29', '4', '2017-08-29', '189.213.119.73');
INSERT INTO `stream_artist_view` VALUES ('30', '34', '2017-08-29', '189.213.119.73');
INSERT INTO `stream_artist_view` VALUES ('31', '4', '2017-09-06', '47.15.14.74');
INSERT INTO `stream_artist_view` VALUES ('32', '15', '2017-09-06', '47.15.14.74');
INSERT INTO `stream_artist_view` VALUES ('33', '10', '2017-09-06', '47.15.14.74');
INSERT INTO `stream_artist_view` VALUES ('34', '16', '2017-09-06', '47.15.14.74');
INSERT INTO `stream_artist_view` VALUES ('35', '28', '2017-09-06', '47.15.14.74');
INSERT INTO `stream_artist_view` VALUES ('36', '37', '2017-09-06', '47.15.14.74');
INSERT INTO `stream_artist_view` VALUES ('37', '38', '2017-09-06', '47.15.14.74');
INSERT INTO `stream_artist_view` VALUES ('38', '42', '2017-09-06', '47.15.14.74');
INSERT INTO `stream_artist_view` VALUES ('39', '15', '2017-09-06', '117.194.239.231');
INSERT INTO `stream_artist_view` VALUES ('40', '4', '2017-09-06', '117.194.239.231');
INSERT INTO `stream_artist_view` VALUES ('41', '16', '2017-09-06', '117.194.239.231');
INSERT INTO `stream_artist_view` VALUES ('42', '28', '2017-09-06', '117.194.239.231');
INSERT INTO `stream_artist_view` VALUES ('43', '37', '2017-09-06', '117.194.239.231');
INSERT INTO `stream_artist_view` VALUES ('44', '10', '2017-09-06', '117.194.239.231');
INSERT INTO `stream_artist_view` VALUES ('45', '42', '2017-09-06', '117.194.239.231');
INSERT INTO `stream_artist_view` VALUES ('46', '0', '2017-09-06', '117.194.239.231');
INSERT INTO `stream_artist_view` VALUES ('47', '17', '2017-09-06', '117.194.239.231');
INSERT INTO `stream_artist_view` VALUES ('48', '38', '2017-09-06', '189.213.119.73');
INSERT INTO `stream_artist_view` VALUES ('49', '15', '2017-09-06', '189.213.119.73');
INSERT INTO `stream_artist_view` VALUES ('50', '28', '2017-09-06', '189.213.119.73');
INSERT INTO `stream_artist_view` VALUES ('51', '42', '2017-09-06', '189.213.119.73');
INSERT INTO `stream_artist_view` VALUES ('52', '15', '2017-09-07', '137.59.158.22');
INSERT INTO `stream_artist_view` VALUES ('53', '28', '2017-09-07', '137.59.158.22');
INSERT INTO `stream_artist_view` VALUES ('54', '38', '2017-09-07', '137.59.158.22');
INSERT INTO `stream_artist_view` VALUES ('55', '42', '2017-09-07', '137.59.158.22');
INSERT INTO `stream_artist_view` VALUES ('56', '15', '2017-09-08', '137.59.157.16');
INSERT INTO `stream_artist_view` VALUES ('57', '38', '2017-09-09', '117.194.230.62');
INSERT INTO `stream_artist_view` VALUES ('58', '15', '2017-09-09', '47.15.7.121');
INSERT INTO `stream_artist_view` VALUES ('59', '38', '2017-09-09', '47.15.7.121');
INSERT INTO `stream_artist_view` VALUES ('60', '42', '2017-09-09', '47.15.7.121');
INSERT INTO `stream_artist_view` VALUES ('61', '15', '2017-09-11', '189.213.119.73');
INSERT INTO `stream_artist_view` VALUES ('62', '42', '2017-09-11', '189.213.119.73');
INSERT INTO `stream_artist_view` VALUES ('63', '15', '2017-09-11', '137.59.159.58');
INSERT INTO `stream_artist_view` VALUES ('64', '15', '2017-09-12', '47.15.10.49');
INSERT INTO `stream_artist_view` VALUES ('65', '15', '2017-09-12', '137.59.158.31');
INSERT INTO `stream_artist_view` VALUES ('66', '15', '2017-09-13', '189.213.119.73');
INSERT INTO `stream_artist_view` VALUES ('67', '15', '2017-09-14', '117.248.137.254');
INSERT INTO `stream_artist_view` VALUES ('68', '15', '2017-09-19', '47.15.1.204');
INSERT INTO `stream_artist_view` VALUES ('69', '15', '2017-09-19', '189.213.119.73');
INSERT INTO `stream_artist_view` VALUES ('70', '57', '2017-09-19', '189.213.119.73');
INSERT INTO `stream_artist_view` VALUES ('71', '15', '2017-09-20', '189.213.119.73');
INSERT INTO `stream_artist_view` VALUES ('72', '15', '2017-09-21', '187.177.48.235');
INSERT INTO `stream_artist_view` VALUES ('73', '15', '2017-09-21', '47.15.8.86');
INSERT INTO `stream_artist_view` VALUES ('74', '15', '2017-09-21', '117.194.227.181');
INSERT INTO `stream_artist_view` VALUES ('75', '15', '2017-09-21', '189.213.119.73');
INSERT INTO `stream_artist_view` VALUES ('76', '15', '2017-09-22', '47.15.5.207');
INSERT INTO `stream_artist_view` VALUES ('77', '15', '2017-10-05', '189.213.119.73');
INSERT INTO `stream_artist_view` VALUES ('78', '15', '2017-10-06', '187.177.48.235');
INSERT INTO `stream_artist_view` VALUES ('79', '15', '2017-10-09', '189.213.119.73');
INSERT INTO `stream_artist_view` VALUES ('80', '15', '2017-10-14', '59.97.159.70');
INSERT INTO `stream_artist_view` VALUES ('81', '15', '2017-10-14', '47.15.8.82');
INSERT INTO `stream_artist_view` VALUES ('82', '15', '2017-10-16', '189.213.119.73');
INSERT INTO `stream_artist_view` VALUES ('83', '15', '2017-11-01', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('84', '42', '2017-11-01', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('85', '28', '2017-11-01', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('86', '38', '2017-11-01', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('87', '43', '2017-11-01', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('88', '56', '2017-11-01', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('89', '60', '2017-11-01', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('90', '0', '2017-11-01', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('91', '15', '2017-11-05', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('92', '42', '2017-11-05', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('93', '61', '2017-11-06', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('94', '28', '2017-11-06', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('95', '15', '2017-11-06', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('96', '38', '2017-11-06', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('97', '61', '2017-11-07', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('98', '15', '2017-11-11', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('99', '63', '2017-11-11', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('100', '61', '2017-11-11', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('101', '42', '2017-11-11', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('102', '28', '2017-11-11', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('103', '38', '2017-11-11', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('104', '62', '2017-11-11', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('105', '64', '2017-11-11', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('106', '65', '2017-11-11', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('107', '15', '2017-11-12', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('108', '63', '2017-11-12', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('109', '61', '2017-11-12', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('110', '42', '2017-11-12', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('111', '28', '2017-11-12', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('112', '38', '2017-11-12', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('113', '62', '2017-11-12', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('114', '64', '2017-11-12', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('115', '65', '2017-11-12', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('116', '15', '2017-11-20', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('117', '15', '2017-11-24', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('118', '15', '2017-12-05', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('119', '69', '2017-12-05', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('120', '67', '2017-12-05', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('121', '63', '2017-12-05', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('122', '61', '2017-12-05', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('123', '42', '2017-12-05', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('124', '28', '2017-12-05', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('125', '38', '2017-12-05', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('126', '62', '2017-12-05', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('127', '64', '2017-12-05', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('128', '65', '2017-12-05', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('129', '70', '2017-12-05', '127.0.0.1');
INSERT INTO `stream_artist_view` VALUES ('130', '15', '2017-12-13', '127.0.0.1');

-- ----------------------------
-- Table structure for stream_ban_user
-- ----------------------------
DROP TABLE IF EXISTS `stream_ban_user`;
CREATE TABLE `stream_ban_user` (
  `ban_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  PRIMARY KEY (`ban_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_ban_user
-- ----------------------------

-- ----------------------------
-- Table structure for stream_category
-- ----------------------------
DROP TABLE IF EXISTS `stream_category`;
CREATE TABLE `stream_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `overview` varchar(255) NOT NULL,
  `status` enum('Active','Inactive','Pending') NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_category
-- ----------------------------
INSERT INTO `stream_category` VALUES ('2', 'R&B', 'R&B', 'Active');
INSERT INTO `stream_category` VALUES ('6', 'Country Music ', 'ddddd', 'Active');
INSERT INTO `stream_category` VALUES ('16', 'Jazz', 'jazz', 'Active');
INSERT INTO `stream_category` VALUES ('17', 'Electronic', 'Electronic', 'Active');
INSERT INTO `stream_category` VALUES ('18', 'Rock Music ', 'Rock Music', 'Active');
INSERT INTO `stream_category` VALUES ('19', 'Hip Hop', 'Hip Hop', 'Active');
INSERT INTO `stream_category` VALUES ('20', 'Rapping', 'Rapping', 'Active');
INSERT INTO `stream_category` VALUES ('21', 'Reggae', 'Reggae', 'Active');

-- ----------------------------
-- Table structure for stream_chat
-- ----------------------------
DROP TABLE IF EXISTS `stream_chat`;
CREATE TABLE `stream_chat` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `message_status` enum('Active','Inactive') NOT NULL,
  `message_time` datetime NOT NULL,
  `sender_type` enum('Artist','User') NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=386 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_chat
-- ----------------------------
INSERT INTO `stream_chat` VALUES ('1', '1', '15', '0', 'hi hello how mr you', 'Active', '2017-07-10 15:32:17', 'Artist');
INSERT INTO `stream_chat` VALUES ('2', '1', '15', '0', 'this is to inform that you are working good', 'Active', '2017-07-10 15:43:13', 'Artist');
INSERT INTO `stream_chat` VALUES ('3', '0', '15', '0', 'jhgjkhljk', 'Active', '2017-07-10 19:43:33', 'Artist');
INSERT INTO `stream_chat` VALUES ('4', '0', '15', '0', 'hh', 'Active', '2017-07-10 20:26:28', 'Artist');
INSERT INTO `stream_chat` VALUES ('5', '0', '15', '0', 'hhh', 'Active', '2017-07-10 20:27:16', 'Artist');
INSERT INTO `stream_chat` VALUES ('6', '0', '15', '0', 'sssss', 'Active', '2017-07-10 20:29:21', 'Artist');
INSERT INTO `stream_chat` VALUES ('7', '0', '15', '0', 'gfchg', 'Active', '2017-07-10 20:29:30', 'Artist');
INSERT INTO `stream_chat` VALUES ('8', '0', '15', '0', 'jhgkj', 'Active', '2017-07-10 20:29:41', 'Artist');
INSERT INTO `stream_chat` VALUES ('9', '0', '15', '0', 'jgjg', 'Active', '2017-07-10 20:34:44', 'Artist');
INSERT INTO `stream_chat` VALUES ('10', '0', '15', '0', 'jhvfvh', 'Active', '2017-07-10 20:41:08', 'Artist');
INSERT INTO `stream_chat` VALUES ('11', '0', '15', '0', 'gdfgdfg', 'Active', '2017-07-10 20:41:42', 'Artist');
INSERT INTO `stream_chat` VALUES ('12', '0', '15', '0', 'vhhvh', 'Active', '2017-07-10 20:42:19', 'Artist');
INSERT INTO `stream_chat` VALUES ('13', '0', '15', '0', 'kjlh', 'Active', '2017-07-10 20:43:32', 'Artist');
INSERT INTO `stream_chat` VALUES ('14', '0', '15', '0', 'jfgjfh', 'Active', '2017-07-10 20:49:27', 'Artist');
INSERT INTO `stream_chat` VALUES ('15', '0', '15', '0', 'hgjfffh', 'Active', '2017-07-10 20:49:59', 'Artist');
INSERT INTO `stream_chat` VALUES ('16', '0', '15', '0', 'fhfghfhfghfg', 'Active', '2017-07-10 20:52:09', 'Artist');
INSERT INTO `stream_chat` VALUES ('17', '0', '15', '0', 'dggfdgdfgdfg', 'Active', '2017-07-10 20:52:25', 'Artist');
INSERT INTO `stream_chat` VALUES ('18', '0', '15', '0', 'khjhkgkhkgjgjgjh', 'Active', '2017-07-10 20:53:21', 'Artist');
INSERT INTO `stream_chat` VALUES ('19', '0', '15', '0', 'fhdfhgdghghdg4fdhgf4', 'Active', '2017-07-10 21:09:58', 'Artist');
INSERT INTO `stream_chat` VALUES ('20', '0', '15', '0', 'fdsgsfg', 'Active', '2017-07-10 21:10:41', 'Artist');
INSERT INTO `stream_chat` VALUES ('21', '0', '15', '0', 'fdsfsafdf', 'Active', '2017-07-10 21:11:53', 'Artist');
INSERT INTO `stream_chat` VALUES ('22', '0', '15', '0', 'sgfsdgsgfg', 'Active', '2017-07-10 21:12:26', 'Artist');
INSERT INTO `stream_chat` VALUES ('23', '0', '15', '0', 'erteterte', 'Active', '2017-07-10 21:13:38', 'Artist');
INSERT INTO `stream_chat` VALUES ('24', '0', '15', '0', 'sfdsgsfdg', 'Active', '2017-07-10 21:15:29', 'Artist');
INSERT INTO `stream_chat` VALUES ('25', '0', '15', '0', 'ktrjtiwrtwjerithwerhtuiwretwerhtuew', 'Active', '2017-07-10 21:16:27', 'Artist');
INSERT INTO `stream_chat` VALUES ('26', '0', '15', '0', 'hi sexy', 'Active', '2017-07-10 21:16:40', 'Artist');
INSERT INTO `stream_chat` VALUES ('27', '0', '15', '0', 'dsfsfsdfsfsdfsfsf', 'Active', '2017-07-10 21:17:25', 'Artist');
INSERT INTO `stream_chat` VALUES ('28', '0', '15', '0', 'cxvxcvxcvxc', 'Active', '2017-07-10 21:17:32', 'Artist');
INSERT INTO `stream_chat` VALUES ('29', '0', '15', '0', 'retzczxchzxc', 'Active', '2017-07-10 21:17:47', 'Artist');
INSERT INTO `stream_chat` VALUES ('30', '0', '15', '0', 'dfsdfsfsdfsd', 'Active', '2017-07-10 21:21:39', 'Artist');
INSERT INTO `stream_chat` VALUES ('31', '0', '15', '0', 'dtrdtertrtet', 'Active', '2017-07-10 21:21:43', 'Artist');
INSERT INTO `stream_chat` VALUES ('32', '0', '15', '0', 'retrhgjh', 'Active', '2017-07-10 21:21:46', 'Artist');
INSERT INTO `stream_chat` VALUES ('33', '1', '15', '0', '', 'Active', '2017-07-18 13:08:08', 'Artist');
INSERT INTO `stream_chat` VALUES ('34', '1', '15', '0', 'jiii', 'Active', '2017-07-18 13:08:14', 'Artist');
INSERT INTO `stream_chat` VALUES ('35', '1', '15', '0', '', 'Active', '2017-07-19 12:40:00', 'Artist');
INSERT INTO `stream_chat` VALUES ('36', '1', '15', '0', 'dd', 'Active', '2017-07-19 12:47:54', 'Artist');
INSERT INTO `stream_chat` VALUES ('37', '1', '15', '0', 'ggyyy', 'Active', '2017-07-19 12:48:03', 'Artist');
INSERT INTO `stream_chat` VALUES ('38', '1', '15', '0', 'ddd', 'Active', '2017-07-19 12:48:09', 'Artist');
INSERT INTO `stream_chat` VALUES ('39', '1', '15', '0', '1qaz', 'Active', '2017-07-19 12:48:28', 'Artist');
INSERT INTO `stream_chat` VALUES ('40', '1', '15', '0', 'tuki', 'Active', '2017-07-19 13:14:38', 'Artist');
INSERT INTO `stream_chat` VALUES ('41', '1', '15', '0', 'gu', 'Active', '2017-07-19 15:37:41', 'Artist');
INSERT INTO `stream_chat` VALUES ('42', '1', '15', '0', '<div class=\"chat_ico\"><img src=\"http://localhost/streams_site/site/chat_images/flower.png\"></div><div class=\"chat_ico\"><img src=\"http://localhost/streams_site/site/chat_images/flower.png\"></div><div class=\"chat_ico\"><img src=\"http://localhost/streams_site/site/chat_images/ghost.png\"></div><div class=\"chat_ico\"><img src=\"http://localhost/streams_site/site/chat_images/gift.png\"></div><div class=\"chat_ico\"><img src=\"http://localhost/streams_site/site/chat_images/gift.png\"></div><div class=\"chat_ico\"><img src=\"http://localhost/streams_site/site/chat_images/web.png\"></div><div class=\"chat_ico\"><img src=\"http://localhost/streams_site/site/chat_images/music2.png\"></div>', 'Active', '2017-07-19 16:12:19', 'Artist');
INSERT INTO `stream_chat` VALUES ('43', '1', '15', '0', '<div class=\"chat_ico\"><img class=\"emoji\" src=\"http://localhost/streams_site/site/chat_images/alien2.png\"></div>', 'Active', '2017-07-19 16:12:55', 'Artist');
INSERT INTO `stream_chat` VALUES ('44', '1', '15', '0', 'hi<div class=\"chat_ico\"><img src=\"http://localhost/streams_site/site/chat_images/blush.png\"></div>', 'Active', '2017-07-19 16:13:16', 'Artist');
INSERT INTO `stream_chat` VALUES ('45', '1', '15', '0', 'fff<img src=\"http://localhost/streams_site/site/chat_images/speechless.png\">', 'Active', '2017-07-19 16:14:19', 'Artist');
INSERT INTO `stream_chat` VALUES ('46', '1', '15', '0', '<div class=\"chat_ico\"><img src=\"http://localhost/streams_site/site/chat_images/annoyed.png\"></div><div class=\"chat_ico\"><img src=\"http://localhost/streams_site/site/chat_images/annoyed.png\"></div><div class=\"chat_ico\"><img src=\"http://localhost/streams_site/site/chat_images/annoyed.png\"></div><div class=\"chat_ico\"><img src=\"http://localhost/streams_site/site/chat_images/annoyed.png\"></div>', 'Active', '2017-07-19 16:16:09', 'Artist');
INSERT INTO `stream_chat` VALUES ('47', '1', '15', '0', '<div class=\"chat_ico\"><img src=\"http://localhost/streams_site/site/chat_images/File Blanco.png\"></div><div class=\"chat_ico\"><img src=\"http://localhost/streams_site/site/chat_images/File Blanco.png\"></div>', 'Active', '2017-07-19 16:35:54', 'Artist');
INSERT INTO `stream_chat` VALUES ('48', '1', '15', '0', '<div class=\"chat_ico\"><img src=\"http://localhost/streams_site/site/chat_images/tease.png\"></div><div class=\"chat_ico\"><img src=\"http://localhost/streams_site/site/chat_images/tease.png\"></div><div class=\"chat_ico\"><img src=\"http://localhost/streams_site/site/chat_images/tease.png\"></div>', 'Active', '2017-07-19 16:36:05', 'Artist');
INSERT INTO `stream_chat` VALUES ('49', '1', '15', '0', '<div class=\"chat_ico\"><img src=\"http://localhost/streams_site/site/chat_images/male.png\"></div><div class=\"chat_ico\"><img src=\"http://localhost/streams_site/site/chat_images/male.png\"></div>', 'Active', '2017-07-19 19:19:35', 'Artist');
INSERT INTO `stream_chat` VALUES ('50', '1', '15', '0', '<div class=\"chat_ico\"><img src=\"http://localhost/streams_site/site/chat_images/meow.png\"></div>', 'Active', '2017-07-19 19:25:49', 'Artist');
INSERT INTO `stream_chat` VALUES ('51', '1', '15', '0', 'hi', 'Active', '2017-07-19 19:26:33', 'Artist');
INSERT INTO `stream_chat` VALUES ('52', '1', '15', '0', ':flwr', 'Active', '2017-07-19 20:01:36', 'Artist');
INSERT INTO `stream_chat` VALUES ('53', '1', '15', '0', ':aln', 'Active', '2017-07-19 20:02:00', 'Artist');
INSERT INTO `stream_chat` VALUES ('54', '1', '15', '0', ' :aln :aln :aln :aln :aln :aln :aln', 'Active', '2017-07-19 20:08:49', 'Artist');
INSERT INTO `stream_chat` VALUES ('55', '1', '15', '0', ' :aln :aln :aln :aln :aln :aln :aln', 'Active', '2017-07-19 20:37:32', 'Artist');
INSERT INTO `stream_chat` VALUES ('56', '1', '15', '0', ' :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln', 'Active', '2017-07-19 20:39:27', 'Artist');
INSERT INTO `stream_chat` VALUES ('57', '1', '15', '0', ' :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln', 'Active', '2017-07-19 20:43:25', 'Artist');
INSERT INTO `stream_chat` VALUES ('58', '1', '15', '0', ' :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln', 'Active', '2017-07-19 20:44:27', 'Artist');
INSERT INTO `stream_chat` VALUES ('59', '1', '15', '0', ' :aln :aln :aln :aln :aln :aln :aln', 'Active', '2017-07-19 20:45:53', 'Artist');
INSERT INTO `stream_chat` VALUES ('60', '1', '15', '0', ' :aln :aln :aln :aln :aln :aln :aln', 'Active', '2017-07-19 20:48:50', 'Artist');
INSERT INTO `stream_chat` VALUES ('61', '1', '15', '0', ' :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln :aln', 'Active', '2017-07-19 21:00:13', 'Artist');
INSERT INTO `stream_chat` VALUES ('62', '0', '15', '0', ' :aln :aln :aln :aln :aln :aln :aln', 'Active', '2017-07-20 12:16:36', 'Artist');
INSERT INTO `stream_chat` VALUES ('63', '0', '15', '0', ' :thk :thk :thk', 'Active', '2017-07-20 12:16:56', 'Artist');
INSERT INTO `stream_chat` VALUES ('64', '0', '15', '0', ' :aln', 'Active', '2017-07-22 16:38:59', 'Artist');
INSERT INTO `stream_chat` VALUES ('65', '0', '15', '0', ' :aln', 'Active', '2017-07-23 14:14:31', 'Artist');
INSERT INTO `stream_chat` VALUES ('66', '0', '15', '0', 'hi :srpd', 'Active', '2017-07-24 17:58:42', 'Artist');
INSERT INTO `stream_chat` VALUES ('67', '0', '15', '0', 'ddd', 'Active', '2017-07-24 17:58:58', 'Artist');
INSERT INTO `stream_chat` VALUES ('68', '0', '15', '0', 'we1a', 'Active', '2017-07-24 17:59:08', 'Artist');
INSERT INTO `stream_chat` VALUES ('69', '0', '15', '7', 'helo hi how r u', 'Active', '2017-07-24 19:33:39', 'Artist');
INSERT INTO `stream_chat` VALUES ('70', '0', '15', '7', ' :ang :ang :ang :ang :ang :ang :ang :ang :ang :ang :ang', 'Active', '2017-07-24 19:33:50', 'Artist');
INSERT INTO `stream_chat` VALUES ('71', '1', '15', '7', ' :heart :heart :heart :heart', 'Active', '2017-07-27 17:02:27', 'Artist');
INSERT INTO `stream_chat` VALUES ('72', '1', '15', '7', 'fsdfsfsd', 'Active', '2017-07-27 17:03:01', 'Artist');
INSERT INTO `stream_chat` VALUES ('73', '1', '15', '7', 'hfhfghfghfgh', 'Active', '2017-07-27 17:03:19', 'Artist');
INSERT INTO `stream_chat` VALUES ('74', '1', '15', '7', 'fghfghfghfgdgfg', 'Active', '2017-07-27 17:03:34', 'Artist');
INSERT INTO `stream_chat` VALUES ('75', '1', '15', '7', 'llll', 'Active', '2017-07-27 17:16:27', 'Artist');
INSERT INTO `stream_chat` VALUES ('76', '1', '15', '7', 'sdgsdgsdfgs', 'Active', '2017-07-27 17:22:44', 'Artist');
INSERT INTO `stream_chat` VALUES ('77', '1', '15', '7', 'fgjhfhgjfgh', 'Active', '2017-07-27 17:24:59', 'Artist');
INSERT INTO `stream_chat` VALUES ('78', '1', '15', '7', ' :wink :wink :wink', 'Active', '2017-07-27 17:30:53', 'Artist');
INSERT INTO `stream_chat` VALUES ('79', '1', '15', '7', 'fghfgjhfgjh', 'Active', '2017-07-27 17:31:02', 'Artist');
INSERT INTO `stream_chat` VALUES ('80', '1', '15', '7', 'hjfhj', 'Active', '2017-07-27 17:31:16', 'Artist');
INSERT INTO `stream_chat` VALUES ('81', '1', '15', '7', ' :tease :tease :tease :tease', 'Active', '2017-07-27 17:31:49', 'Artist');
INSERT INTO `stream_chat` VALUES ('82', '1', '15', '7', ' :stop :stop :stop', 'Active', '2017-07-27 17:32:17', 'Artist');
INSERT INTO `stream_chat` VALUES ('83', '1', '15', '7', 'jhfgjhfhfgh', 'Active', '2017-07-27 17:32:22', 'Artist');
INSERT INTO `stream_chat` VALUES ('84', '1', '15', '7', 'testing wther the chat is working or not :aln :aln :aln :aln :aln :aln :aln', 'Active', '2017-07-31 20:25:22', 'Artist');
INSERT INTO `stream_chat` VALUES ('85', '1', '15', '7', 'hi testing again  :dvl :dvl :dvl :dvl :dvl :dvl :dvl :dvl :dvl :dvl', 'Active', '2017-07-31 20:27:01', 'Artist');
INSERT INTO `stream_chat` VALUES ('86', '3', '15', '7', 'hihiiiiiiii', 'Active', '2017-07-31 21:15:38', 'Artist');
INSERT INTO `stream_chat` VALUES ('87', '1', '15', '7', 'helo ,hi', 'Active', '2017-07-31 21:16:24', 'Artist');
INSERT INTO `stream_chat` VALUES ('88', '3', '15', '7', 'hii', 'Active', '2017-08-01 14:40:02', 'Artist');
INSERT INTO `stream_chat` VALUES ('89', '1', '15', '7', 'hello bittu', 'Active', '2017-08-01 14:40:16', 'Artist');
INSERT INTO `stream_chat` VALUES ('90', '3', '15', '7', 'hello bhaiya', 'Active', '2017-08-01 14:40:32', 'Artist');
INSERT INTO `stream_chat` VALUES ('91', '1', '15', '7', 'kya kar rahe ho', 'Active', '2017-08-01 14:40:40', 'Artist');
INSERT INTO `stream_chat` VALUES ('92', '3', '15', '7', 'chating', 'Active', '2017-08-01 14:40:57', 'Artist');
INSERT INTO `stream_chat` VALUES ('93', '3', '15', '7', 'or ap', 'Active', '2017-08-01 14:41:10', 'Artist');
INSERT INTO `stream_chat` VALUES ('94', '3', '15', '7', 'riya', 'Active', '2017-08-01 14:41:48', 'Artist');
INSERT INTO `stream_chat` VALUES ('95', '3', '15', '7', ' :ang :blnk :czy', 'Active', '2017-08-01 14:42:12', 'Artist');
INSERT INTO `stream_chat` VALUES ('96', '1', '15', '7', 'alam kya kar raha hai', 'Active', '2017-08-01 14:43:34', 'Artist');
INSERT INTO `stream_chat` VALUES ('97', '1', '15', '7', 'alam kya kar raha hai', 'Active', '2017-08-01 14:43:45', 'Artist');
INSERT INTO `stream_chat` VALUES ('98', '1', '15', '7', 'alam kya kar raha hai', 'Active', '2017-08-01 14:43:45', 'Artist');
INSERT INTO `stream_chat` VALUES ('99', '1', '15', '7', 'alam kya kar raha hai', 'Active', '2017-08-01 14:43:47', 'Artist');
INSERT INTO `stream_chat` VALUES ('100', '1', '15', '7', 'alam kya kar raha hai', 'Active', '2017-08-01 14:43:49', 'Artist');
INSERT INTO `stream_chat` VALUES ('101', '1', '15', '7', 'alam kya kar raha hai', 'Active', '2017-08-01 14:43:50', 'Artist');
INSERT INTO `stream_chat` VALUES ('102', '3', '15', '7', 'chating', 'Active', '2017-08-01 14:44:04', 'Artist');
INSERT INTO `stream_chat` VALUES ('103', '1', '15', '7', 'hiii bittu', 'Active', '2017-08-01 14:45:17', 'Artist');
INSERT INTO `stream_chat` VALUES ('104', '1', '15', '7', 'check wther', 'Active', '2017-08-01 14:47:02', 'Artist');
INSERT INTO `stream_chat` VALUES ('105', '1', '15', '7', 'rrrrrreetetetgtettetgdcfdgffdffdffd', 'Active', '2017-08-01 14:47:21', 'Artist');
INSERT INTO `stream_chat` VALUES ('106', '1', '15', '7', 'tum kaha ho', 'Active', '2017-08-01 14:47:37', 'Artist');
INSERT INTO `stream_chat` VALUES ('107', '3', '15', '7', 'mai ya hu', 'Active', '2017-08-01 14:47:55', 'Artist');
INSERT INTO `stream_chat` VALUES ('108', '1', '15', '7', 'kaha ho', 'Active', '2017-08-01 14:48:06', 'Artist');
INSERT INTO `stream_chat` VALUES ('109', '3', '15', '7', 'tuki', 'Active', '2017-08-01 14:48:28', 'Artist');
INSERT INTO `stream_chat` VALUES ('110', '1', '15', '7', 'mereko naraj ni aa rha rhe h', 'Active', '2017-08-01 14:48:34', 'Artist');
INSERT INTO `stream_chat` VALUES ('111', '3', '15', '7', 'love u', 'Active', '2017-08-01 14:48:37', 'Artist');
INSERT INTO `stream_chat` VALUES ('112', '3', '15', '7', 'hii riya', 'Active', '2017-08-01 14:49:21', 'Artist');
INSERT INTO `stream_chat` VALUES ('113', '1', '15', '7', ' :zip', 'Active', '2017-08-01 14:49:21', 'Artist');
INSERT INTO `stream_chat` VALUES ('114', '3', '15', '7', ' :grin :grin :grin :grin :grin', 'Active', '2017-08-01 14:49:35', 'Artist');
INSERT INTO `stream_chat` VALUES ('115', '1', '15', '7', ' :dvl :dvl :dvl :dvl', 'Active', '2017-08-01 14:49:40', 'Artist');
INSERT INTO `stream_chat` VALUES ('116', '3', '15', '7', ' :geek :geek :geek :geek :geek :geek :geek', 'Active', '2017-08-01 14:49:54', 'Artist');
INSERT INTO `stream_chat` VALUES ('117', '1', '15', '7', ' :bsy :bsy :bsy', 'Active', '2017-08-01 14:50:07', 'Artist');
INSERT INTO `stream_chat` VALUES ('118', '3', '15', '7', ' :brb :brb :brb :brb :brb :brb :brb :brb :brb', 'Active', '2017-08-01 14:50:11', 'Artist');
INSERT INTO `stream_chat` VALUES ('119', '1', '15', '7', ' :silly :silly :silly :silly', 'Active', '2017-08-01 14:50:20', 'Artist');
INSERT INTO `stream_chat` VALUES ('120', '3', '15', '7', ' :file :file :file :file', 'Active', '2017-08-01 14:50:28', 'Artist');
INSERT INTO `stream_chat` VALUES ('121', '3', '15', '7', 'hiii', 'Active', '2017-08-01 21:34:15', 'User');
INSERT INTO `stream_chat` VALUES ('122', '1', '15', '7', 'tuki', 'Active', '2017-08-01 21:34:23', 'User');
INSERT INTO `stream_chat` VALUES ('123', '3', '15', '7', 'bolo tuki', 'Active', '2017-08-01 21:34:47', 'User');
INSERT INTO `stream_chat` VALUES ('124', '1', '15', '7', 'ki korchs', 'Active', '2017-08-01 21:34:51', 'User');
INSERT INTO `stream_chat` VALUES ('125', '3', '15', '7', 'bolo tuki', 'Active', '2017-08-01 21:34:57', 'User');
INSERT INTO `stream_chat` VALUES ('126', '3', '15', '7', 'tu ki korcho', 'Active', '2017-08-01 21:35:35', 'User');
INSERT INTO `stream_chat` VALUES ('127', '3', '15', '7', 'tu ki korcho', 'Active', '2017-08-01 21:35:38', 'User');
INSERT INTO `stream_chat` VALUES ('128', '3', '15', '7', 'tu ki korcho', 'Active', '2017-08-01 21:35:39', 'User');
INSERT INTO `stream_chat` VALUES ('129', '3', '15', '7', 'tu ki korcho', 'Active', '2017-08-01 21:35:42', 'User');
INSERT INTO `stream_chat` VALUES ('130', '3', '15', '7', 'tu ki korcho', 'Active', '2017-08-01 21:35:43', 'User');
INSERT INTO `stream_chat` VALUES ('131', '3', '15', '7', 'tu ki korcho', 'Active', '2017-08-01 21:35:43', 'User');
INSERT INTO `stream_chat` VALUES ('132', '3', '15', '7', 'tu ki korcho', 'Active', '2017-08-01 21:35:43', 'User');
INSERT INTO `stream_chat` VALUES ('133', '3', '15', '7', 'tu ki korcho', 'Active', '2017-08-01 21:35:44', 'User');
INSERT INTO `stream_chat` VALUES ('134', '3', '15', '7', 'tu ki korcho', 'Active', '2017-08-01 21:35:47', 'User');
INSERT INTO `stream_chat` VALUES ('135', '3', '15', '7', 'tu ki korcho', 'Active', '2017-08-01 21:35:48', 'User');
INSERT INTO `stream_chat` VALUES ('136', '3', '15', '7', 'tu ki korcho', 'Active', '2017-08-01 21:35:48', 'User');
INSERT INTO `stream_chat` VALUES ('137', '3', '15', '7', 'tu ki korcho', 'Active', '2017-08-01 21:35:52', 'User');
INSERT INTO `stream_chat` VALUES ('138', '3', '15', '7', 'tu ki korcho', 'Active', '2017-08-01 21:35:57', 'User');
INSERT INTO `stream_chat` VALUES ('139', '3', '15', '7', ' :love :love :love :love', 'Active', '2017-08-01 21:36:49', 'User');
INSERT INTO `stream_chat` VALUES ('140', '0', '15', '7', 'Hi', 'Active', '2017-08-01 22:34:02', 'User');
INSERT INTO `stream_chat` VALUES ('141', '3', '15', '7', 'Hifrom 2nd window', 'Active', '2017-08-01 22:42:12', 'User');
INSERT INTO `stream_chat` VALUES ('142', '1', '15', '7', 'Hi from 1st window', 'Active', '2017-08-01 22:42:31', 'User');
INSERT INTO `stream_chat` VALUES ('143', '1', '15', '7', ' :ang', 'Active', '2017-08-01 22:42:49', 'User');
INSERT INTO `stream_chat` VALUES ('144', '1', '15', '7', ':ang', 'Active', '2017-08-01 22:42:57', 'User');
INSERT INTO `stream_chat` VALUES ('145', '3', '15', '7', ' :ill', 'Active', '2017-08-01 22:43:09', 'User');
INSERT INTO `stream_chat` VALUES ('146', '0', '15', '7', 'hi', 'Active', '2017-08-02 20:25:14', 'Artist');
INSERT INTO `stream_chat` VALUES ('147', '0', '15', '7', ' :ang :ang :ang :ang', 'Active', '2017-08-02 20:26:30', 'Artist');
INSERT INTO `stream_chat` VALUES ('148', '0', '15', '7', 'hi guys wassup :ang :ang', 'Active', '2017-08-02 20:29:29', 'Artist');
INSERT INTO `stream_chat` VALUES ('149', '1', '15', '7', 'hiiii', 'Active', '2017-08-02 20:31:19', 'User');
INSERT INTO `stream_chat` VALUES ('150', '0', '15', '7', 'hi,koko', 'Active', '2017-08-02 20:33:16', 'Artist');
INSERT INTO `stream_chat` VALUES ('151', '1', '15', '7', 'kuch ni', 'Active', '2017-08-02 20:34:07', 'User');
INSERT INTO `stream_chat` VALUES ('152', '1', '15', '7', 'bolo', 'Active', '2017-08-02 20:38:40', 'User');
INSERT INTO `stream_chat` VALUES ('153', '0', '15', '7', 'is evry thing working properly', 'Active', '2017-08-02 20:39:06', 'Artist');
INSERT INTO `stream_chat` VALUES ('154', '1', '15', '7', 'yes', 'Active', '2017-08-02 20:39:14', 'User');
INSERT INTO `stream_chat` VALUES ('155', '0', '15', '7', '????', 'Active', '2017-08-02 20:39:15', 'Artist');
INSERT INTO `stream_chat` VALUES ('156', '1', '15', '7', 'and u??', 'Active', '2017-08-02 20:39:28', 'User');
INSERT INTO `stream_chat` VALUES ('157', '0', '15', '7', 'yes it is working', 'Active', '2017-08-02 20:39:39', 'Artist');
INSERT INTO `stream_chat` VALUES ('158', '1', '15', '7', 'hi', 'Active', '2017-08-08 15:59:05', 'User');
INSERT INTO `stream_chat` VALUES ('159', '1', '15', '7', 'hl', 'Active', '2017-08-08 15:59:12', 'User');
INSERT INTO `stream_chat` VALUES ('160', '1', '15', '7', ' :wink :wink :wink :wink', 'Active', '2017-08-08 16:17:51', 'User');
INSERT INTO `stream_chat` VALUES ('161', '0', '15', '7', 'vbnvbn', 'Active', '2017-08-09 17:11:51', 'User');
INSERT INTO `stream_chat` VALUES ('162', '0', '15', '7', 'hh', 'Active', '2017-08-09 17:13:56', 'User');
INSERT INTO `stream_chat` VALUES ('163', '0', '15', '7', 'kk', 'Active', '2017-08-09 17:14:04', 'User');
INSERT INTO `stream_chat` VALUES ('164', '0', '15', '7', 'Hi', 'Active', '2017-08-26 21:59:03', 'User');
INSERT INTO `stream_chat` VALUES ('165', '1', '15', '7', 'hi', 'Active', '2017-08-28 17:31:39', 'User');
INSERT INTO `stream_chat` VALUES ('166', '1', '15', '7', 'how r you', 'Active', '2017-08-28 17:37:15', 'User');
INSERT INTO `stream_chat` VALUES ('167', '1', '15', '7', 'how r you', 'Active', '2017-08-28 17:37:30', 'User');
INSERT INTO `stream_chat` VALUES ('168', '1', '15', '7', 'ok', 'Active', '2017-08-28 17:43:55', 'User');
INSERT INTO `stream_chat` VALUES ('169', '1', '15', '7', 'Hi, today is Monday', 'Active', '2017-08-28 23:13:55', 'User');
INSERT INTO `stream_chat` VALUES ('170', '3', '15', '1', 'Hi', 'Active', '2017-08-28 23:16:10', 'User');
INSERT INTO `stream_chat` VALUES ('171', '0', '15', '1', 'hi', 'Active', '2017-08-29 13:19:12', 'User');
INSERT INTO `stream_chat` VALUES ('172', '0', '15', '1', 'this video is rocking', 'Active', '2017-08-29 13:19:35', 'User');
INSERT INTO `stream_chat` VALUES ('173', '12', '15', '1', 'this is rocking', 'Active', '2017-08-29 13:31:44', 'User');
INSERT INTO `stream_chat` VALUES ('174', '12', '15', '1', 'the weather is beautiful', 'Active', '2017-08-29 13:32:26', 'User');
INSERT INTO `stream_chat` VALUES ('175', '12', '15', '7', 'hi ', 'Active', '2017-08-29 16:34:16', 'User');
INSERT INTO `stream_chat` VALUES ('176', '0', '15', '7', 'wassup ', 'Active', '2017-08-29 16:35:26', 'Artist');
INSERT INTO `stream_chat` VALUES ('177', '12', '15', '7', 'nothing ', 'Active', '2017-08-29 16:36:05', 'User');
INSERT INTO `stream_chat` VALUES ('178', '0', '15', '7', 'oh ic', 'Active', '2017-08-29 16:36:34', 'Artist');
INSERT INTO `stream_chat` VALUES ('179', '0', '0', '0', 'Hi testing', 'Active', '2017-08-29 19:29:59', 'User');
INSERT INTO `stream_chat` VALUES ('180', '12', '15', '7', 'hi helo', 'Active', '2017-09-02 12:32:37', 'User');
INSERT INTO `stream_chat` VALUES ('181', '0', '15', '7', ':new', 'Active', '2017-09-06 22:54:16', 'User');
INSERT INTO `stream_chat` VALUES ('182', '0', '15', '7', ':New', 'Active', '2017-09-06 22:54:48', 'User');
INSERT INTO `stream_chat` VALUES ('183', '12', '15', '7', 'hi,i m hari', 'Active', '2017-09-07 12:27:27', 'User');
INSERT INTO `stream_chat` VALUES ('184', '12', '15', '7', ' :slp< :slp<', 'Active', '2017-09-07 12:27:36', 'User');
INSERT INTO `stream_chat` VALUES ('185', '0', '15', '7', 'helo,hari', 'Active', '2017-09-07 12:36:47', 'Artist');
INSERT INTO `stream_chat` VALUES ('186', '0', '15', '7', ' :thk', 'Active', '2017-09-07 12:36:54', 'Artist');
INSERT INTO `stream_chat` VALUES ('187', '0', '15', '7', ' :New :New', 'Active', '2017-09-11 14:32:39', 'User');
INSERT INTO `stream_chat` VALUES ('188', '0', '15', '7', 'cc', 'Active', '2017-09-11 21:45:27', 'User');
INSERT INTO `stream_chat` VALUES ('189', '0', '15', '7', 'cc', 'Active', '2017-09-11 21:45:29', 'User');
INSERT INTO `stream_chat` VALUES ('190', '0', '15', '7', 'cc', 'Active', '2017-09-11 21:45:30', 'User');
INSERT INTO `stream_chat` VALUES ('191', '0', '15', '7', 'cc', 'Active', '2017-09-11 21:45:30', 'User');
INSERT INTO `stream_chat` VALUES ('192', '0', '15', '7', 'cc', 'Active', '2017-09-11 21:45:30', 'User');
INSERT INTO `stream_chat` VALUES ('193', '0', '15', '7', 'cc', 'Active', '2017-09-11 21:45:30', 'User');
INSERT INTO `stream_chat` VALUES ('194', '0', '15', '7', 'cc', 'Active', '2017-09-11 21:45:31', 'User');
INSERT INTO `stream_chat` VALUES ('195', '0', '15', '7', 'cc', 'Active', '2017-09-11 21:45:31', 'User');
INSERT INTO `stream_chat` VALUES ('196', '0', '15', '7', 'cc', 'Active', '2017-09-11 21:45:32', 'User');
INSERT INTO `stream_chat` VALUES ('197', '0', '15', '7', 'cc :srpd :srpd', 'Active', '2017-09-11 21:45:37', 'User');
INSERT INTO `stream_chat` VALUES ('198', '0', '15', '7', 'xx', 'Active', '2017-09-12 11:49:11', 'User');
INSERT INTO `stream_chat` VALUES ('199', '0', '15', '7', 'xx', 'Active', '2017-09-12 11:49:12', 'User');
INSERT INTO `stream_chat` VALUES ('200', '0', '15', '7', 'xx', 'Active', '2017-09-12 11:49:12', 'User');
INSERT INTO `stream_chat` VALUES ('201', '0', '15', '7', 'xx', 'Active', '2017-09-12 11:49:13', 'User');
INSERT INTO `stream_chat` VALUES ('202', '0', '15', '7', 'zzz', 'Active', '2017-09-12 11:50:19', 'User');
INSERT INTO `stream_chat` VALUES ('203', '0', '15', '7', 'zzz', 'Active', '2017-09-12 11:50:19', 'User');
INSERT INTO `stream_chat` VALUES ('204', '0', '15', '7', 'zzz', 'Active', '2017-09-12 11:50:20', 'User');
INSERT INTO `stream_chat` VALUES ('205', '0', '15', '7', 'zzz', 'Active', '2017-09-12 11:50:20', 'User');
INSERT INTO `stream_chat` VALUES ('206', '0', '15', '7', 'zzz', 'Active', '2017-09-12 11:50:20', 'User');
INSERT INTO `stream_chat` VALUES ('207', '0', '15', '7', 'zzz', 'Active', '2017-09-12 11:50:20', 'User');
INSERT INTO `stream_chat` VALUES ('208', '0', '15', '7', 'ssss', 'Active', '2017-09-12 11:51:04', 'User');
INSERT INTO `stream_chat` VALUES ('209', '0', '15', '7', 'ssss', 'Active', '2017-09-12 11:51:04', 'User');
INSERT INTO `stream_chat` VALUES ('210', '0', '15', '7', 'ssss', 'Active', '2017-09-12 11:51:05', 'User');
INSERT INTO `stream_chat` VALUES ('211', '0', '15', '7', 'ssss', 'Active', '2017-09-12 11:51:05', 'User');
INSERT INTO `stream_chat` VALUES ('212', '0', '15', '7', 'ssss', 'Active', '2017-09-12 11:51:05', 'User');
INSERT INTO `stream_chat` VALUES ('213', '0', '15', '7', 'ssss', 'Active', '2017-09-12 11:51:06', 'User');
INSERT INTO `stream_chat` VALUES ('214', '0', '15', '7', 'ssss', 'Active', '2017-09-12 11:51:06', 'User');
INSERT INTO `stream_chat` VALUES ('215', '0', '15', '7', 'ssss', 'Active', '2017-09-12 11:51:06', 'User');
INSERT INTO `stream_chat` VALUES ('216', '0', '15', '7', 'ssss', 'Active', '2017-09-12 11:51:06', 'User');
INSERT INTO `stream_chat` VALUES ('217', '0', '15', '7', 'Hi', 'Active', '2017-09-12 12:32:25', 'User');
INSERT INTO `stream_chat` VALUES ('218', '0', '15', '7', 'Hi', 'Active', '2017-09-12 12:32:35', 'User');
INSERT INTO `stream_chat` VALUES ('219', '0', '15', '7', 'hlw', 'Active', '2017-09-12 12:35:35', 'User');
INSERT INTO `stream_chat` VALUES ('220', '0', '15', '7', 'hlw', 'Active', '2017-09-12 12:35:39', 'User');
INSERT INTO `stream_chat` VALUES ('221', '0', '15', '7', 'hi', 'Active', '2017-09-12 12:39:39', 'User');
INSERT INTO `stream_chat` VALUES ('222', '0', '15', '7', 'hi', 'Active', '2017-09-12 12:39:41', 'User');
INSERT INTO `stream_chat` VALUES ('223', '0', '15', '7', 'hi', 'Active', '2017-09-12 12:39:41', 'User');
INSERT INTO `stream_chat` VALUES ('224', '0', '15', '7', 'hi', 'Active', '2017-09-12 12:39:41', 'User');
INSERT INTO `stream_chat` VALUES ('225', '0', '15', '7', 'hi', 'Active', '2017-09-12 12:39:42', 'User');
INSERT INTO `stream_chat` VALUES ('226', '0', '15', '7', 'fff', 'Active', '2017-09-12 12:39:50', 'User');
INSERT INTO `stream_chat` VALUES ('227', '0', '15', '7', 'fff', 'Active', '2017-09-12 12:39:51', 'User');
INSERT INTO `stream_chat` VALUES ('228', '0', '15', '7', 'fff', 'Active', '2017-09-12 12:39:51', 'User');
INSERT INTO `stream_chat` VALUES ('229', '0', '15', '7', 'fff', 'Active', '2017-09-12 12:39:51', 'User');
INSERT INTO `stream_chat` VALUES ('230', '0', '15', '7', 'fff', 'Active', '2017-09-12 12:39:51', 'User');
INSERT INTO `stream_chat` VALUES ('231', '0', '15', '7', 'fff', 'Active', '2017-09-12 12:39:51', 'User');
INSERT INTO `stream_chat` VALUES ('232', '0', '15', '7', 'fff :sad :sad :sad :sad :sad', 'Active', '2017-09-12 12:39:53', 'User');
INSERT INTO `stream_chat` VALUES ('233', '0', '15', '7', 'fff :sad :sad :sad :sad :sad', 'Active', '2017-09-12 12:39:53', 'User');
INSERT INTO `stream_chat` VALUES ('234', '0', '15', '7', 'fff :sad :sad :sad :sad :sad', 'Active', '2017-09-12 12:39:53', 'User');
INSERT INTO `stream_chat` VALUES ('235', '0', '15', '7', 'fff :sad :sad :sad :sad :sad', 'Active', '2017-09-12 12:39:54', 'User');
INSERT INTO `stream_chat` VALUES ('236', '0', '15', '7', 'fff :sad :sad :sad :sad :sad', 'Active', '2017-09-12 12:39:54', 'User');
INSERT INTO `stream_chat` VALUES ('237', '0', '15', '7', 'fff :sad :sad :sad :sad :sad', 'Active', '2017-09-12 12:39:54', 'User');
INSERT INTO `stream_chat` VALUES ('238', '0', '15', '7', 'fff :sad :sad :sad :sad :sad', 'Active', '2017-09-12 12:39:54', 'User');
INSERT INTO `stream_chat` VALUES ('239', '0', '15', '7', 'fff :sad :sad :sad :sad :sad', 'Active', '2017-09-12 12:39:55', 'User');
INSERT INTO `stream_chat` VALUES ('240', '0', '15', '7', 'fff :sad :sad :sad :sad :sad', 'Active', '2017-09-12 12:39:55', 'User');
INSERT INTO `stream_chat` VALUES ('241', '0', '15', '7', 'fff :sad :sad :sad :sad :sad', 'Active', '2017-09-12 12:39:56', 'User');
INSERT INTO `stream_chat` VALUES ('242', '0', '15', '7', 'fff :sad :sad :sad :sad :sad', 'Active', '2017-09-12 12:39:56', 'User');
INSERT INTO `stream_chat` VALUES ('243', '0', '15', '7', 'fff :sad :sad :sad :sad :sad', 'Active', '2017-09-12 12:39:56', 'User');
INSERT INTO `stream_chat` VALUES ('244', '0', '15', '7', 'fff :sad :sad :sad :sad :sad', 'Active', '2017-09-12 12:39:56', 'User');
INSERT INTO `stream_chat` VALUES ('245', '0', '15', '7', 'fff :sad :sad :sad :sad :sad', 'Active', '2017-09-12 12:39:56', 'User');
INSERT INTO `stream_chat` VALUES ('246', '0', '15', '7', 'fff :sad :sad :sad :sad :sad', 'Active', '2017-09-12 12:39:56', 'User');
INSERT INTO `stream_chat` VALUES ('247', '0', '15', '7', 'fff :sad :sad :sad :sad :sad', 'Active', '2017-09-12 12:39:57', 'User');
INSERT INTO `stream_chat` VALUES ('248', '0', '15', '7', 'fff :sad :sad :sad :sad :sad', 'Active', '2017-09-12 12:39:57', 'User');
INSERT INTO `stream_chat` VALUES ('249', '0', '15', '7', 'fff :sad :sad :sad :sad :sad', 'Active', '2017-09-12 12:39:57', 'User');
INSERT INTO `stream_chat` VALUES ('250', '0', '15', '7', 'fff :sad :sad :sad :sad :sad', 'Active', '2017-09-12 12:39:58', 'User');
INSERT INTO `stream_chat` VALUES ('251', '0', '15', '7', 'fff :sad :sad :sad :sad :sad', 'Active', '2017-09-12 12:39:58', 'User');
INSERT INTO `stream_chat` VALUES ('252', '12', '15', '7', 'hi', 'Active', '2017-09-12 12:41:42', 'User');
INSERT INTO `stream_chat` VALUES ('253', '12', '15', '7', 'hi', 'Active', '2017-09-12 12:41:43', 'User');
INSERT INTO `stream_chat` VALUES ('254', '12', '15', '7', 'hi', 'Active', '2017-09-12 12:41:43', 'User');
INSERT INTO `stream_chat` VALUES ('255', '12', '15', '7', 'hi', 'Active', '2017-09-12 12:41:43', 'User');
INSERT INTO `stream_chat` VALUES ('256', '12', '15', '7', 'hi', 'Active', '2017-09-12 12:41:43', 'User');
INSERT INTO `stream_chat` VALUES ('257', '12', '15', '7', 'hi', 'Active', '2017-09-12 12:41:44', 'User');
INSERT INTO `stream_chat` VALUES ('258', '12', '15', '7', 'hi', 'Active', '2017-09-12 12:41:44', 'User');
INSERT INTO `stream_chat` VALUES ('259', '12', '15', '7', 'hi', 'Active', '2017-09-12 12:41:44', 'User');
INSERT INTO `stream_chat` VALUES ('260', '12', '15', '7', 'hi', 'Active', '2017-09-12 12:41:44', 'User');
INSERT INTO `stream_chat` VALUES ('261', '12', '15', '7', 'hi', 'Active', '2017-09-12 12:41:46', 'User');
INSERT INTO `stream_chat` VALUES ('262', '12', '15', '7', 'hi', 'Active', '2017-09-12 12:41:46', 'User');
INSERT INTO `stream_chat` VALUES ('263', '12', '15', '7', 'hi', 'Active', '2017-09-12 12:41:46', 'User');
INSERT INTO `stream_chat` VALUES ('264', '12', '15', '7', 'hi', 'Active', '2017-09-12 12:41:47', 'User');
INSERT INTO `stream_chat` VALUES ('265', '12', '15', '7', 'hi', 'Active', '2017-09-12 12:41:47', 'User');
INSERT INTO `stream_chat` VALUES ('266', '12', '15', '7', 'hi', 'Active', '2017-09-12 12:41:47', 'User');
INSERT INTO `stream_chat` VALUES ('267', '12', '15', '7', 'hi', 'Active', '2017-09-12 12:41:47', 'User');
INSERT INTO `stream_chat` VALUES ('268', '12', '15', '7', 'fffff :gift :gift :gift', 'Active', '2017-09-12 12:42:22', 'User');
INSERT INTO `stream_chat` VALUES ('269', '12', '15', '7', 'fffff :gift :gift :gift', 'Active', '2017-09-12 12:42:23', 'User');
INSERT INTO `stream_chat` VALUES ('270', '12', '15', '7', 'fffff :gift :gift :gift', 'Active', '2017-09-12 12:42:23', 'User');
INSERT INTO `stream_chat` VALUES ('271', '12', '15', '7', 'fffff :gift :gift :gift', 'Active', '2017-09-12 12:42:23', 'User');
INSERT INTO `stream_chat` VALUES ('272', '0', '15', '7', ' :ang :thk :slps', 'Active', '2017-09-12 12:47:18', 'User');
INSERT INTO `stream_chat` VALUES ('273', '12', '15', '7', 'Hi', 'Active', '2017-09-12 12:53:12', 'User');
INSERT INTO `stream_chat` VALUES ('274', '12', '15', '7', 'Hi', 'Active', '2017-09-12 12:53:24', 'User');
INSERT INTO `stream_chat` VALUES ('275', '12', '15', '7', 'gfdgdf', 'Active', '2017-09-12 13:01:04', 'User');
INSERT INTO `stream_chat` VALUES ('276', '12', '15', '7', 'gfdgdf', 'Active', '2017-09-12 13:01:06', 'User');
INSERT INTO `stream_chat` VALUES ('277', '12', '15', '7', 'gfdgdf', 'Active', '2017-09-12 13:01:06', 'User');
INSERT INTO `stream_chat` VALUES ('278', '12', '15', '7', 'gfdgdf', 'Active', '2017-09-12 13:01:06', 'User');
INSERT INTO `stream_chat` VALUES ('279', '12', '15', '7', 'gfdgdf :slp< :slp<', 'Active', '2017-09-12 13:01:11', 'User');
INSERT INTO `stream_chat` VALUES ('280', '12', '15', '7', 'gfdgdf :slp< :slp<', 'Active', '2017-09-12 13:01:11', 'User');
INSERT INTO `stream_chat` VALUES ('281', '12', '15', '7', 'gfdgdf :slp< :slp<', 'Active', '2017-09-12 13:01:11', 'User');
INSERT INTO `stream_chat` VALUES ('282', '0', '15', '7', 'hi', 'Active', '2017-09-12 13:19:54', 'Artist');
INSERT INTO `stream_chat` VALUES ('283', '0', '15', '7', 'hi', 'Active', '2017-09-12 13:20:24', 'User');
INSERT INTO `stream_chat` VALUES ('284', '0', '15', '7', 'hi', 'Active', '2017-09-12 13:20:27', 'User');
INSERT INTO `stream_chat` VALUES ('285', '0', '15', '7', 'hi :srpd', 'Active', '2017-09-12 13:20:28', 'Artist');
INSERT INTO `stream_chat` VALUES ('286', '0', '15', '7', 'jj', 'Active', '2017-09-12 13:20:35', 'Artist');
INSERT INTO `stream_chat` VALUES ('287', '0', '15', '7', 'jj', 'Active', '2017-09-12 13:20:35', 'Artist');
INSERT INTO `stream_chat` VALUES ('288', '0', '15', '7', 'hi', 'Active', '2017-09-12 13:24:10', 'User');
INSERT INTO `stream_chat` VALUES ('289', '0', '15', '7', 'hi', 'Active', '2017-09-12 13:24:11', 'User');
INSERT INTO `stream_chat` VALUES ('290', '0', '15', '7', 'hi', 'Active', '2017-09-12 13:24:11', 'User');
INSERT INTO `stream_chat` VALUES ('291', '0', '15', '7', 'hi', 'Active', '2017-09-12 13:24:11', 'User');
INSERT INTO `stream_chat` VALUES ('292', '0', '15', '7', 'hi', 'Active', '2017-09-12 13:24:12', 'User');
INSERT INTO `stream_chat` VALUES ('293', '0', '15', '7', 'hi', 'Active', '2017-09-12 13:24:12', 'User');
INSERT INTO `stream_chat` VALUES ('294', '0', '15', '7', 'hi', 'Active', '2017-09-12 13:24:13', 'User');
INSERT INTO `stream_chat` VALUES ('295', '0', '15', '7', 'hi', 'Active', '2017-09-12 13:24:14', 'User');
INSERT INTO `stream_chat` VALUES ('296', '0', '15', '7', 'hi', 'Active', '2017-09-12 13:24:14', 'User');
INSERT INTO `stream_chat` VALUES ('297', '0', '15', '7', 'hi', 'Active', '2017-09-12 13:24:16', 'User');
INSERT INTO `stream_chat` VALUES ('298', '0', '15', '7', 'hi', 'Active', '2017-09-12 13:24:16', 'User');
INSERT INTO `stream_chat` VALUES ('299', '0', '15', '7', 'ghfgh', 'Active', '2017-09-12 13:24:19', 'Artist');
INSERT INTO `stream_chat` VALUES ('300', '0', '15', '7', 'hi :geek :geek :geek :geek', 'Active', '2017-09-12 13:24:20', 'User');
INSERT INTO `stream_chat` VALUES ('301', '0', '15', '7', 'hi :geek :geek :geek :geek', 'Active', '2017-09-12 13:24:20', 'User');
INSERT INTO `stream_chat` VALUES ('302', '0', '15', '7', 'hi :geek :geek :geek :geek', 'Active', '2017-09-12 13:24:21', 'User');
INSERT INTO `stream_chat` VALUES ('303', '0', '15', '7', 'hi :geek :geek :geek :geek', 'Active', '2017-09-12 13:24:21', 'User');
INSERT INTO `stream_chat` VALUES ('304', '0', '15', '7', ' :geek :geek :geek :geek', 'Active', '2017-09-12 13:40:44', 'User');
INSERT INTO `stream_chat` VALUES ('305', '0', '15', '7', ' :geek :geek :geek :geek', 'Active', '2017-09-12 13:42:21', 'User');
INSERT INTO `stream_chat` VALUES ('306', '0', '15', '7', ' :geek :geek :geek :geek', 'Active', '2017-09-12 13:42:21', 'User');
INSERT INTO `stream_chat` VALUES ('307', '0', '15', '7', ' :geek :geek :geek :geek', 'Active', '2017-09-12 13:42:22', 'User');
INSERT INTO `stream_chat` VALUES ('308', '0', '15', '7', ' :geek :geek :geek :geek', 'Active', '2017-09-12 13:42:22', 'User');
INSERT INTO `stream_chat` VALUES ('309', '0', '15', '7', ' :geek :geek :geek :geek', 'Active', '2017-09-12 13:42:27', 'User');
INSERT INTO `stream_chat` VALUES ('310', '0', '15', '7', ' :geek :geek :geek :geek', 'Active', '2017-09-12 13:42:27', 'User');
INSERT INTO `stream_chat` VALUES ('311', '0', '15', '7', ' :geek :geek :geek :geek', 'Active', '2017-09-12 13:42:27', 'User');
INSERT INTO `stream_chat` VALUES ('312', '0', '15', '7', ' :geek :geek :geek :geek', 'Active', '2017-09-12 13:42:29', 'User');
INSERT INTO `stream_chat` VALUES ('313', '0', '15', '7', ' :geek :geek :geek :geek', 'Active', '2017-09-12 13:42:30', 'User');
INSERT INTO `stream_chat` VALUES ('314', '0', '15', '7', ' :geek :geek :geek :geek', 'Active', '2017-09-12 13:42:30', 'User');
INSERT INTO `stream_chat` VALUES ('315', '0', '15', '7', 'hi', 'Active', '2017-09-12 14:33:03', 'Artist');
INSERT INTO `stream_chat` VALUES ('316', '0', '15', '7', 'Hlw', 'Active', '2017-09-12 14:33:56', 'User');
INSERT INTO `stream_chat` VALUES ('317', '0', '15', '7', ' fff', 'Active', '2017-09-12 14:51:49', 'User');
INSERT INTO `stream_chat` VALUES ('318', '0', '15', '7', 'hi', 'Active', '2017-09-12 15:03:07', 'User');
INSERT INTO `stream_chat` VALUES ('319', '0', '15', '7', ' :New', 'Active', '2017-09-12 15:03:19', 'User');
INSERT INTO `stream_chat` VALUES ('320', '0', '15', '7', 'fthfg', 'Active', '2017-09-12 15:12:53', 'User');
INSERT INTO `stream_chat` VALUES ('321', '0', '15', '7', ' :New', 'Active', '2017-09-12 15:24:50', 'User');
INSERT INTO `stream_chat` VALUES ('322', '0', '15', '7', ' dd', 'Active', '2017-09-12 15:26:10', 'User');
INSERT INTO `stream_chat` VALUES ('323', '0', '15', '7', 'hi', 'Active', '2017-09-12 15:39:40', 'User');
INSERT INTO `stream_chat` VALUES ('324', '0', '15', '7', 'hi', 'Active', '2017-09-12 15:39:42', 'User');
INSERT INTO `stream_chat` VALUES ('325', '0', '15', '7', ' devil', 'Active', '2017-09-12 15:39:46', 'User');
INSERT INTO `stream_chat` VALUES ('326', '12', '15', '7', 'ggg', 'Active', '2017-09-12 16:02:27', 'User');
INSERT INTO `stream_chat` VALUES ('327', '12', '15', '7', 'dsfsdfdsfsdfd', 'Active', '2017-09-12 16:07:37', 'User');
INSERT INTO `stream_chat` VALUES ('328', '12', '15', '7', 'fdsafasdfads', 'Active', '2017-09-12 16:07:40', 'User');
INSERT INTO `stream_chat` VALUES ('329', '12', '15', '7', 'dsafasdfsd', 'Active', '2017-09-12 16:07:44', 'User');
INSERT INTO `stream_chat` VALUES ('330', '0', '15', '7', ' angel alien2', 'Active', '2017-09-12 16:15:33', 'Artist');
INSERT INTO `stream_chat` VALUES ('331', '0', '15', '7', 'ffgh', 'Active', '2017-09-12 16:58:17', 'Artist');
INSERT INTO `stream_chat` VALUES ('332', '0', '15', '7', 'Hi', 'Active', '2017-09-20 21:49:35', 'User');
INSERT INTO `stream_chat` VALUES ('333', '0', '15', '7', 'Hello', 'Active', '2017-09-20 21:49:40', 'User');
INSERT INTO `stream_chat` VALUES ('334', '0', '15', '7', 'alien1', 'Active', '2017-09-20 21:50:01', 'User');
INSERT INTO `stream_chat` VALUES ('335', '0', '15', '7', 'blanco', 'Active', '2017-09-20 21:50:21', 'User');
INSERT INTO `stream_chat` VALUES ('336', '0', '15', '7', 'new', 'Active', '2017-09-20 21:51:32', 'User');
INSERT INTO `stream_chat` VALUES ('337', '0', '15', '7', 'new2', 'Active', '2017-09-20 21:51:37', 'User');
INSERT INTO `stream_chat` VALUES ('338', '0', '15', '7', ' text_file web alien1 File Blanco xd music2', 'Active', '2017-09-20 21:52:30', 'User');
INSERT INTO `stream_chat` VALUES ('339', '0', '15', '7', 'iuyuiy', 'Active', '2017-09-22 15:54:08', 'User');
INSERT INTO `stream_chat` VALUES ('340', '17', '15', '9', 'hi', 'Active', '2017-09-22 21:07:34', 'User');
INSERT INTO `stream_chat` VALUES ('341', '17', '15', '9', ' web pencil', 'Active', '2017-09-22 21:07:47', 'User');
INSERT INTO `stream_chat` VALUES ('342', '17', '15', '9', 'hello geek', 'Active', '2017-09-22 21:08:04', 'User');
INSERT INTO `stream_chat` VALUES ('343', '17', '15', '7', 'hello hello new', 'Active', '2017-09-22 21:08:57', 'User');
INSERT INTO `stream_chat` VALUES ('344', '1', '15', '7', 'new', 'Active', '2017-10-07 06:18:04', 'User');
INSERT INTO `stream_chat` VALUES ('345', '1', '15', '7', 'Hi', 'Active', '2017-10-07 06:18:14', 'User');
INSERT INTO `stream_chat` VALUES ('346', '1', '15', '7', 'How are you ?', 'Active', '2017-10-07 06:18:24', 'User');
INSERT INTO `stream_chat` VALUES ('347', '1', '15', '10', 'Hi', 'Active', '2017-10-16 22:06:37', 'User');
INSERT INTO `stream_chat` VALUES ('348', '1', '15', '10', 'Hi how are you ?', 'Active', '2017-10-16 22:06:52', 'User');
INSERT INTO `stream_chat` VALUES ('349', '1', '15', '7', 'Hi', 'Active', '2017-10-20 00:55:44', 'User');
INSERT INTO `stream_chat` VALUES ('350', '1', '15', '7', 'hi', 'Active', '2017-10-21 21:58:01', 'User');
INSERT INTO `stream_chat` VALUES ('351', '1', '15', '7', 'hi', 'Active', '2017-10-21 21:58:09', 'User');
INSERT INTO `stream_chat` VALUES ('352', '12', '15', '7', 'helo dear', 'Active', '2017-10-23 20:45:19', 'User');
INSERT INTO `stream_chat` VALUES ('353', '12', '15', '7', 'hi', 'Active', '2017-10-23 20:45:43', 'User');
INSERT INTO `stream_chat` VALUES ('354', '1', '15', '7', 'new', 'Active', '2017-10-23 23:52:44', 'User');
INSERT INTO `stream_chat` VALUES ('355', '1', '15', '7', 'how are you ?', 'Active', '2017-10-23 23:53:02', 'User');
INSERT INTO `stream_chat` VALUES ('356', '0', '15', '7', 'asdf', 'Active', '2017-10-31 22:19:23', 'User');
INSERT INTO `stream_chat` VALUES ('357', '0', '15', '7', 'hola que hace', 'Active', '2017-10-31 22:19:29', 'User');
INSERT INTO `stream_chat` VALUES ('358', '1', '15', '7', 'hi', 'Active', '2017-11-01 02:51:41', 'User');
INSERT INTO `stream_chat` VALUES ('359', '26', '15', '24', 'test', 'Active', '2017-11-06 03:52:26', 'User');
INSERT INTO `stream_chat` VALUES ('360', '0', '15', '24', 'We', 'Active', '2017-11-06 04:16:42', 'User');
INSERT INTO `stream_chat` VALUES ('361', '0', '15', '24', 'Fuck', 'Active', '2017-11-06 04:17:03', 'User');
INSERT INTO `stream_chat` VALUES ('362', '0', '15', '24', 'Coc', 'Active', '2017-11-06 04:17:26', 'User');
INSERT INTO `stream_chat` VALUES ('363', '26', '15', '24', 'text me your name', 'Active', '2017-11-06 04:24:21', 'User');
INSERT INTO `stream_chat` VALUES ('364', '26', '15', '24', 'chat me your name', 'Active', '2017-11-06 04:24:25', 'User');
INSERT INTO `stream_chat` VALUES ('365', '26', '15', '24', 'Yoyo', 'Active', '2017-11-06 07:22:33', 'User');
INSERT INTO `stream_chat` VALUES ('366', '0', '61', '26', 'hola', 'Active', '2017-11-08 03:35:19', 'User');
INSERT INTO `stream_chat` VALUES ('367', '1', '63', '27', 'hi', 'Active', '2017-11-11 23:07:35', 'User');
INSERT INTO `stream_chat` VALUES ('368', '1', '63', '27', 'new', 'Active', '2017-11-11 23:08:06', 'User');
INSERT INTO `stream_chat` VALUES ('369', '1', '63', '27', 'new', 'Active', '2017-11-11 23:13:52', 'User');
INSERT INTO `stream_chat` VALUES ('370', '26', '15', '36', 'hello', 'Active', '2017-11-25 01:09:57', 'User');
INSERT INTO `stream_chat` VALUES ('371', '26', '15', '36', ' cool cool cool', 'Active', '2017-11-25 01:10:08', 'User');
INSERT INTO `stream_chat` VALUES ('372', '26', '15', '36', ' gift kissy kissy mario', 'Active', '2017-11-25 01:11:26', 'User');
INSERT INTO `stream_chat` VALUES ('373', '26', '15', '36', 'Yo', 'Active', '2017-11-25 02:25:28', 'User');
INSERT INTO `stream_chat` VALUES ('374', '26', '15', '36', 'Slut', 'Active', '2017-11-25 02:25:32', 'User');
INSERT INTO `stream_chat` VALUES ('375', '26', '15', '36', ' mario', 'Active', '2017-11-25 02:25:45', 'User');
INSERT INTO `stream_chat` VALUES ('376', '26', '15', '36', 'When I try and send a message though it kills the stream', 'Active', '2017-11-25 02:26:18', 'User');
INSERT INTO `stream_chat` VALUES ('377', '26', '15', '36', 'test chat', 'Active', '2017-11-25 02:43:50', 'User');
INSERT INTO `stream_chat` VALUES ('378', '0', '15', '39', 'hola', 'Active', '2017-12-02 23:32:37', 'User');
INSERT INTO `stream_chat` VALUES ('379', '0', '69', '45', 'hh', 'Active', '2017-12-03 13:27:54', 'User');
INSERT INTO `stream_chat` VALUES ('380', '3', '69', '47', 'Wow incredible !', 'Active', '2017-12-03 22:37:05', 'User');
INSERT INTO `stream_chat` VALUES ('381', '0', '69', '47', 'haha whats up brother', 'Active', '2017-12-03 22:37:51', 'User');
INSERT INTO `stream_chat` VALUES ('382', '0', '69', '47', 'haha whats up brother', 'Active', '2017-12-03 22:37:51', 'User');
INSERT INTO `stream_chat` VALUES ('383', '3', '69', '47', 'Great!', 'Active', '2017-12-03 22:38:51', 'User');
INSERT INTO `stream_chat` VALUES ('384', '3', '69', '47', 'Very Happy', 'Active', '2017-12-03 22:42:19', 'User');
INSERT INTO `stream_chat` VALUES ('385', '3', '69', '47', 'This message affect?', 'Active', '2017-12-03 22:46:46', 'User');

-- ----------------------------
-- Table structure for stream_ci_sessions
-- ----------------------------
DROP TABLE IF EXISTS `stream_ci_sessions`;
CREATE TABLE `stream_ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_ci_sessions
-- ----------------------------
INSERT INTO `stream_ci_sessions` VALUES ('626b77778284dbd2528cb2aa6c2ba1b7', '50.112.194.65', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', '1513195629', '');
INSERT INTO `stream_ci_sessions` VALUES ('18be35a59bfcfcb268c7c19816983fd6', '50.112.194.65', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', '1513195629', '');
INSERT INTO `stream_ci_sessions` VALUES ('721605ea836c39486de5d842adb8db55', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36', '1513272824', 'a:4:{s:9:\"user_data\";s:0:\"\";s:15:\"admin_user_name\";s:5:\"admin\";s:8:\"admin_id\";s:1:\"1\";s:12:\"is_logged_in\";b:1;}');
INSERT INTO `stream_ci_sessions` VALUES ('031ab882c0c7d5b7e7d87cec18200f69', '150.70.188.179', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', '1513212944', '');
INSERT INTO `stream_ci_sessions` VALUES ('1c13de1d0addde07b16e77deaea1013c', '150.70.188.179', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', '1513212917', '');
INSERT INTO `stream_ci_sessions` VALUES ('5adc495d56cc3a595f63692c6702def9', '150.70.188.172', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', '1513212917', '');
INSERT INTO `stream_ci_sessions` VALUES ('1cff923a206bc8d75fe7a4dc7933dbb1', '150.70.188.179', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', '1513212916', '');
INSERT INTO `stream_ci_sessions` VALUES ('91dcfb35110e81ac905b27efbe5274bd', '184.190.28.202', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; Trident/7.0; rv:11.0) like Gecko', '1513212799', 'a:3:{s:15:\"admin_user_name\";s:5:\"admin\";s:8:\"admin_id\";s:1:\"1\";s:12:\"is_logged_in\";b:1;}');
INSERT INTO `stream_ci_sessions` VALUES ('68c98b681e79ad05ac97d5f39612cec7', '184.190.28.202', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; Trident/7.0; rv:11.0) like Gecko', '1513212806', '');
INSERT INTO `stream_ci_sessions` VALUES ('4a5bf542358c5bc3f62bb59e95de97d6', '150.70.188.172', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', '1513212886', '');
INSERT INTO `stream_ci_sessions` VALUES ('f1f05307617068f7106d4bac4b295d3f', '150.70.188.170', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', '1513212908', '');
INSERT INTO `stream_ci_sessions` VALUES ('eb5f5e6002c8f0c9d2455908426f6068', '150.70.188.167', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', '1513212910', '');
INSERT INTO `stream_ci_sessions` VALUES ('22d4a83712a0786cfdffa44a5d988cf9', '150.70.188.172', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', '1513212916', '');
INSERT INTO `stream_ci_sessions` VALUES ('567cbfa36b39020d05a63ea8478758d3', '184.190.28.202', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; Trident/7.0; rv:11.0) like Gecko', '1513195569', '');
INSERT INTO `stream_ci_sessions` VALUES ('780a53b4829641e47ec0ce14ed6622d4', '184.190.28.202', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; Trident/7.0; rv:11.0) like Gecko', '1513195564', 'a:4:{s:9:\"user_data\";s:0:\"\";s:15:\"admin_user_name\";s:5:\"admin\";s:8:\"admin_id\";s:1:\"1\";s:12:\"is_logged_in\";b:1;}');
INSERT INTO `stream_ci_sessions` VALUES ('ac108868f3de92600f22ee69dc19f3be', '187.161.114.35', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36', '1513202409', 'a:4:{s:9:\"user_data\";s:0:\"\";s:15:\"admin_user_name\";s:5:\"admin\";s:8:\"admin_id\";s:1:\"1\";s:12:\"is_logged_in\";b:1;}');
INSERT INTO `stream_ci_sessions` VALUES ('ccd720ed1381173d35f62b8674c63b0d', '150.70.188.165', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', '1513209629', '');
INSERT INTO `stream_ci_sessions` VALUES ('df1b1b8e3d85e9c43b8cb1159daabae6', '150.70.188.171', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', '1513209612', '');

-- ----------------------------
-- Table structure for stream_comment
-- ----------------------------
DROP TABLE IF EXISTS `stream_comment`;
CREATE TABLE `stream_comment` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `message_status` enum('Active','Inactive') NOT NULL,
  `message_time` datetime NOT NULL,
  `sender_type` enum('Artist','User') NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of stream_comment
-- ----------------------------
INSERT INTO `stream_comment` VALUES ('1', '1', '15', '27', 'cccccccc', 'Active', '2017-09-08 13:14:27', 'User');
INSERT INTO `stream_comment` VALUES ('2', '1', '15', '27', 'hi', 'Active', '2017-09-08 13:31:47', 'User');
INSERT INTO `stream_comment` VALUES ('3', '12', '15', '27', 'tyuiu', 'Active', '2017-10-24 18:52:12', 'User');

-- ----------------------------
-- Table structure for stream_conversions_table
-- ----------------------------
DROP TABLE IF EXISTS `stream_conversions_table`;
CREATE TABLE `stream_conversions_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_moneda` varchar(255) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `moneda_referencia` int(11) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_conversions_table
-- ----------------------------
INSERT INTO `stream_conversions_table` VALUES ('1', 'credito', '100', '1', null);

-- ----------------------------
-- Table structure for stream_conversions_table_coin
-- ----------------------------
DROP TABLE IF EXISTS `stream_conversions_table_coin`;
CREATE TABLE `stream_conversions_table_coin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `moneda` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_conversions_table_coin
-- ----------------------------
INSERT INTO `stream_conversions_table_coin` VALUES ('1', 'USD');
INSERT INTO `stream_conversions_table_coin` VALUES ('2', 'MXN');

-- ----------------------------
-- Table structure for stream_emoji
-- ----------------------------
DROP TABLE IF EXISTS `stream_emoji`;
CREATE TABLE `stream_emoji` (
  `emoji_id` int(11) NOT NULL AUTO_INCREMENT,
  `emoji_text` varchar(255) NOT NULL,
  `emoji_image` varchar(255) NOT NULL,
  `emoji_status` enum('Active','Inactive') NOT NULL,
  `emoji_type` enum('FREE','PREMIUM') NOT NULL,
  PRIMARY KEY (`emoji_id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_emoji
-- ----------------------------
INSERT INTO `stream_emoji` VALUES ('6', 'alien2', '1504881483_alien2.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('7', 'angel', '1504881502_angel.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('8', 'angry', '1504881521_angry.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('9', 'annoyed', '1504881538_annoyed.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('10', 'blanco', '1504881553_blanco.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('11', 'blush', '1504881571_blush.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('12', 'boring', '1504881586_boring.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('13', 'busy', '1504881601_busy.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('14', 'cellphone', '1504881620_cellphone.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('15', 'clock', '1504881844_clock.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('16', 'cool', '1504881862_cool.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('17', 'cool', '1504881862_cool.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('18', 'crazy', '1504881877_crazy.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('19', 'cry', '1504881892_cry.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('20', 'devil', '1504881907_devil.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('21', 'de_laugh', '1504881927_devil_laugh.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('22', 'dnd', '1505213835_dnd.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('23', 'female', '1505213853_female.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('24', 'File Blanco', '1505213897_File_Blanco.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('25', 'flower', '1505213917_flower.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('26', 'fools', '1505213931_fools.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('27', 'geek', '1505213948_geek.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('28', 'ghost', '1505213966_ghost.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('29', 'gift', '1505214015_gift.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('30', 'goatse', '1505214120_goatse.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('31', 'hay', '1505214155_hay.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('32', 'heart', '1505214179_heart.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('33', 'ill', '1505214250_ill.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('34', 'image_file', '1505214272_image_file.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('35', 'in_love', '1505214288_in_love.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('36', 'info', '1505214352_info.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('37', 'james', '1505214368_james.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('38', 'kissy', '1505214399_kissy.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('39', 'laugh', '1505214420_laugh.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('40', 'mail', '1505215927_mail.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('41', 'male', '1505215943_male.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('42', 'mario', '1505215959_mario.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('43', 'meow', '1505215974_meow.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('44', 'minishock', '1505215991_minishock.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('45', 'minishock', '1505216010_minishock.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('46', 'music1', '1505216036_music1.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('47', 'music2', '1505216051_music2.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('48', 'nomnomnom', '1505216082_nomnomnom.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('49', 'not_guilty', '1505216113_not_guilty.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('50', 'not_one_care', '1505216133_not_one_care.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('51', 'oh', '1505216149_oh.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('52', 'pencil', '1505216188_pencil.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('53', 'photo_camera', '1505216718_photo_camera.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('54', 'please', '1505216739_please.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('55', 'sad', '1505216766_sad.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('56', 'silly', '1505216785_silly.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('57', 'smile', '1505216855_smile.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('58', 'speechless', '1505216875_speechless.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('59', 'surprised', '1505216896_surprised.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('60', 'tease', '1505216910_tease.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('61', 'text_file', '1505216929_text_file.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('62', 'total_shock', '1505216950_total_shock.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('63', 'web', '1505216967_web.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('64', 'why_thank_you', '1505216987_why_thank_you.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('65', 'wink', '1505217000_wink.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('66', 'xd', '1505217016_xd.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('67', 'zip_it', '1505217032_zip_it.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('68', 'zzz', '1505217045_zzz.png', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('69', 'alien1', '1505217097_alien1.png', 'Active', 'PREMIUM');
INSERT INTO `stream_emoji` VALUES ('70', 'new', '1505924479_New.jpg', 'Active', 'FREE');
INSERT INTO `stream_emoji` VALUES ('71', 'Money emoji', '1509907499_money_emoji.jpg', 'Active', 'FREE');

-- ----------------------------
-- Table structure for stream_like
-- ----------------------------
DROP TABLE IF EXISTS `stream_like`;
CREATE TABLE `stream_like` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_like
-- ----------------------------
INSERT INTO `stream_like` VALUES ('3', '12', '15', '3');
INSERT INTO `stream_like` VALUES ('4', '12', '15', '1');
INSERT INTO `stream_like` VALUES ('6', '19', '15', '3');
INSERT INTO `stream_like` VALUES ('7', '19', '15', '7');
INSERT INTO `stream_like` VALUES ('8', '0', '15', '1');
INSERT INTO `stream_like` VALUES ('9', '1', '15', '3');
INSERT INTO `stream_like` VALUES ('11', '0', '15', '39');

-- ----------------------------
-- Table structure for stream_like_video
-- ----------------------------
DROP TABLE IF EXISTS `stream_like_video`;
CREATE TABLE `stream_like_video` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_like_video
-- ----------------------------
INSERT INTO `stream_like_video` VALUES ('2', '1', '15', '27');

-- ----------------------------
-- Table structure for stream_message
-- ----------------------------
DROP TABLE IF EXISTS `stream_message`;
CREATE TABLE `stream_message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `message_status` enum('Active','Inactive') NOT NULL,
  `message_time` datetime NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_message
-- ----------------------------
INSERT INTO `stream_message` VALUES ('1', '1', '15', 'hi hello how mr you', 'Active', '2017-07-10 15:32:17');
INSERT INTO `stream_message` VALUES ('2', '1', '15', 'this is to inform that you are working good', 'Active', '2017-07-10 15:43:13');
INSERT INTO `stream_message` VALUES ('3', '0', '15', 'jhgjkhljk', 'Active', '2017-07-10 19:43:33');
INSERT INTO `stream_message` VALUES ('4', '0', '15', 'hh', 'Active', '2017-07-10 20:26:28');
INSERT INTO `stream_message` VALUES ('5', '0', '15', 'hhh', 'Active', '2017-07-10 20:27:16');
INSERT INTO `stream_message` VALUES ('6', '0', '15', 'sssss', 'Active', '2017-07-10 20:29:21');
INSERT INTO `stream_message` VALUES ('7', '0', '15', 'gfchg', 'Active', '2017-07-10 20:29:30');
INSERT INTO `stream_message` VALUES ('8', '0', '15', 'jhgkj', 'Active', '2017-07-10 20:29:41');
INSERT INTO `stream_message` VALUES ('9', '0', '15', 'jgjg', 'Active', '2017-07-10 20:34:44');
INSERT INTO `stream_message` VALUES ('10', '0', '15', 'jhvfvh', 'Active', '2017-07-10 20:41:08');
INSERT INTO `stream_message` VALUES ('11', '0', '15', 'gdfgdfg', 'Active', '2017-07-10 20:41:42');
INSERT INTO `stream_message` VALUES ('12', '0', '15', 'vhhvh', 'Active', '2017-07-10 20:42:19');
INSERT INTO `stream_message` VALUES ('13', '0', '15', 'kjlh', 'Active', '2017-07-10 20:43:32');
INSERT INTO `stream_message` VALUES ('14', '0', '15', 'jfgjfh', 'Active', '2017-07-10 20:49:27');
INSERT INTO `stream_message` VALUES ('15', '0', '15', 'hgjfffh', 'Active', '2017-07-10 20:49:59');
INSERT INTO `stream_message` VALUES ('16', '0', '15', 'fhfghfhfghfg', 'Active', '2017-07-10 20:52:09');
INSERT INTO `stream_message` VALUES ('17', '0', '15', 'dggfdgdfgdfg', 'Active', '2017-07-10 20:52:25');
INSERT INTO `stream_message` VALUES ('18', '0', '15', 'khjhkgkhkgjgjgjh', 'Active', '2017-07-10 20:53:21');
INSERT INTO `stream_message` VALUES ('19', '0', '15', 'fhdfhgdghghdg4fdhgf4', 'Active', '2017-07-10 21:09:58');
INSERT INTO `stream_message` VALUES ('20', '0', '15', 'fdsgsfg', 'Active', '2017-07-10 21:10:41');
INSERT INTO `stream_message` VALUES ('21', '0', '15', 'fdsfsafdf', 'Active', '2017-07-10 21:11:53');
INSERT INTO `stream_message` VALUES ('22', '0', '15', 'sgfsdgsgfg', 'Active', '2017-07-10 21:12:26');
INSERT INTO `stream_message` VALUES ('23', '0', '15', 'erteterte', 'Active', '2017-07-10 21:13:38');
INSERT INTO `stream_message` VALUES ('24', '0', '15', 'sfdsgsfdg', 'Active', '2017-07-10 21:15:29');
INSERT INTO `stream_message` VALUES ('25', '0', '15', 'ktrjtiwrtwjerithwerhtuiwretwerhtuew', 'Active', '2017-07-10 21:16:27');
INSERT INTO `stream_message` VALUES ('26', '0', '15', 'hi sexy', 'Active', '2017-07-10 21:16:40');
INSERT INTO `stream_message` VALUES ('27', '0', '15', 'dsfsfsdfsfsdfsfsf', 'Active', '2017-07-10 21:17:25');
INSERT INTO `stream_message` VALUES ('28', '0', '15', 'cxvxcvxcvxc', 'Active', '2017-07-10 21:17:32');
INSERT INTO `stream_message` VALUES ('29', '0', '15', 'retzczxchzxc', 'Active', '2017-07-10 21:17:47');
INSERT INTO `stream_message` VALUES ('30', '0', '15', 'dfsdfsfsdfsd', 'Active', '2017-07-10 21:21:39');
INSERT INTO `stream_message` VALUES ('31', '0', '15', 'dtrdtertrtet', 'Active', '2017-07-10 21:21:43');
INSERT INTO `stream_message` VALUES ('32', '0', '15', 'retrhgjh', 'Active', '2017-07-10 21:21:46');
INSERT INTO `stream_message` VALUES ('33', '0', '15', 'dee', 'Active', '2017-07-20 11:58:07');
INSERT INTO `stream_message` VALUES ('34', '0', '15', ' :blnk< :blnk< :blnk<', 'Active', '2017-07-20 12:05:52');
INSERT INTO `stream_message` VALUES ('35', '0', '15', '', 'Active', '2017-07-20 12:05:53');

-- ----------------------------
-- Table structure for stream_message_chat
-- ----------------------------
DROP TABLE IF EXISTS `stream_message_chat`;
CREATE TABLE `stream_message_chat` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `message_status` enum('Active','Inactive') NOT NULL,
  `message_time` datetime NOT NULL,
  `sender_type` enum('Artist','User') NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of stream_message_chat
-- ----------------------------
INSERT INTO `stream_message_chat` VALUES ('1', '0', '0', '0', 'sddsfsdfsdfsdf', 'Active', '2017-07-24 12:57:45', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('2', '0', '0', '0', 'gfhfghfgh', 'Active', '2017-07-24 13:00:25', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('3', '1', '15', '0', 'fgdgsdgdf', 'Active', '2017-07-24 13:08:27', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('4', '1', '15', '0', 'sdtgfgdfd', 'Active', '2017-07-24 13:32:53', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('5', '1', '15', '0', 'dfdfgsg', 'Active', '2017-07-24 14:22:41', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('6', '1', '15', '0', '', 'Active', '2017-07-24 14:22:45', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('7', '1', '15', '0', 'jkgjkhk', 'Active', '2017-07-24 14:22:56', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('8', '1', '15', '0', 'fsdfsfsdfsfsfsdf', 'Active', '2017-07-24 14:29:21', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('9', '1', '15', '0', 'fgdhdgdg', 'Active', '2017-07-24 14:29:36', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('10', '1', '15', '0', 'sdfafsdfaf', 'Active', '2017-07-24 14:30:11', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('11', '1', '15', '0', 'dghdgfhdg', 'Active', '2017-07-24 14:30:22', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('12', '1', '15', '0', 'gdfgsdfgsdfgsdf', 'Active', '2017-07-24 14:46:55', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('13', '1', '15', '0', 'dhdgdgf', 'Active', '2017-07-24 14:47:17', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('14', '1', '15', '0', 'dfgdfg', 'Active', '2017-07-24 14:52:17', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('15', '1', '15', '0', 'dsfsdfsd', 'Active', '2017-07-24 14:54:30', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('16', '1', '15', '0', 'gdfgdf', 'Active', '2017-07-24 14:56:15', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('17', '1', '15', '0', 'sdgdfgsfdgsdfgsdfg', 'Active', '2017-07-24 14:57:09', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('18', '1', '15', '0', 'fghfghfh', 'Active', '2017-07-24 14:59:58', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('19', '1', '15', '0', 'gfdgdgdg', 'Active', '2017-07-24 15:00:04', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('20', '1', '15', '0', 'gdfgdg', 'Active', '2017-07-24 15:00:11', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('21', '1', '15', '0', 'dghdfhdfgh', 'Active', '2017-07-24 15:09:20', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('22', '1', '15', '0', 'fgsdgdf', 'Active', '2017-07-24 15:26:03', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('23', '1', '15', '0', 'fghfg', 'Active', '2017-07-24 15:26:16', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('24', '1', '15', '0', 'sadad', 'Active', '2017-07-24 15:31:15', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('25', '1', '15', '0', 'dfgdfg', 'Active', '2017-07-24 15:34:34', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('26', '1', '15', '0', 'dfgdg', 'Active', '2017-07-24 15:35:50', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('27', '1', '15', '0', 'fdgdf', 'Active', '2017-07-24 15:35:57', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('28', '1', '15', '0', 'rtyur', 'Active', '2017-07-24 15:39:51', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('29', '1', '15', '0', 'ryuruy', 'Active', '2017-07-24 15:39:57', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('30', '1', '15', '0', 'sdfgdfgfdg', 'Active', '2017-07-24 15:49:41', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('31', '1', '15', '0', 'sdfgdfgfdg', 'Active', '2017-07-24 15:49:46', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('32', '1', '15', '0', 'sdfgdfgfdg', 'Active', '2017-07-24 15:49:47', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('33', '1', '15', '0', 'sdfgdfgfdg', 'Active', '2017-07-24 15:49:47', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('34', '1', '15', '0', 'sdfgdfgfdg', 'Active', '2017-07-24 15:49:48', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('35', '1', '15', '0', 'sdfgdfgfdg', 'Active', '2017-07-24 15:49:48', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('36', '1', '15', '0', 'jfhfgjhg', 'Active', '2017-07-24 15:50:28', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('37', '1', '15', '0', 'fgsdf', 'Active', '2017-07-24 15:51:14', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('38', '1', '15', '0', 'dgfgdf', 'Active', '2017-07-24 15:51:53', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('39', '1', '15', '0', 'gjfghjfgh', 'Active', '2017-07-24 16:57:02', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('40', '1', '15', '0', 'hgkhjk', 'Active', '2017-07-24 16:57:37', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('41', '1', '15', '0', 'ghjkghjk', 'Active', '2017-07-24 16:57:59', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('42', '1', '15', '0', 'kghjkghjkgjhk', 'Active', '2017-07-24 16:59:15', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('43', '1', '15', '0', 'kjhkghkghkj', 'Active', '2017-07-24 16:59:22', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('44', '1', '15', '0', 'fjghjfgjh', 'Active', '2017-07-24 17:00:32', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('45', '1', '15', '0', 'fjhjfhj', 'Active', '2017-07-24 17:01:10', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('46', '1', '15', '0', 'gkjgkjh', 'Active', '2017-07-24 17:01:14', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('47', '1', '15', '0', 'hgjkgjhk', 'Active', '2017-07-24 17:01:24', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('48', '1', '15', '0', 'gkgjkgjk', 'Active', '2017-07-24 17:01:32', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('49', '1', '15', '0', 'hjjjfhfjh', 'Active', '2017-07-24 17:03:17', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('50', '1', '15', '0', 'ghjkgjk', 'Active', '2017-07-24 17:03:23', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('51', '1', '15', '0', 'hfgjfhjfhgjfh', 'Active', '2017-07-24 17:05:19', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('52', '1', '15', '0', 'kjhkghkj', 'Active', '2017-07-24 17:05:32', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('53', '1', '15', '0', 'jgkgjhkghjk', 'Active', '2017-07-24 17:05:37', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('54', '1', '15', '0', 'ghjkghjkgh', 'Active', '2017-07-24 17:05:42', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('55', '1', '15', '0', 'gjkgjk', 'Active', '2017-07-24 17:05:52', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('56', '1', '15', '0', 'jkgjkgjk', 'Active', '2017-07-24 17:06:14', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('57', '1', '15', '0', 'jhkghjk', 'Active', '2017-07-24 17:06:19', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('58', '1', '15', '0', 'jhkgjhk', 'Active', '2017-07-24 17:06:37', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('59', '1', '15', '0', 'jhkghjkgjh', 'Active', '2017-07-24 17:06:42', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('60', '0', '15', '0', 'hi baba', 'Active', '2017-07-24 17:55:47', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('61', '0', '15', '0', 'kemon acho baba', 'Active', '2017-07-24 17:56:06', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('62', '0', '15', '0', 'hi', 'Active', '2017-07-24 17:57:47', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('63', '0', '15', '0', 'ffftt', 'Active', '2017-07-24 18:09:14', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('64', '0', '15', '0', 'fff', 'Active', '2017-07-24 18:09:31', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('65', '0', '15', '1', 'hyuio', 'Active', '2017-07-24 18:14:33', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('66', '0', '15', '1', 'hhhh', 'Active', '2017-07-24 18:19:27', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('68', '1', '15', '1', 'helo this is to test', 'Active', '2017-07-27 15:24:23', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('69', '1', '15', '1', 'testing wther message working or not', 'Active', '2017-07-27 15:24:58', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('70', '1', '15', '1', 'hi', 'Active', '2017-07-27 15:28:06', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('71', '1', '15', '3', 'hiiiii', 'Active', '2017-07-27 16:15:31', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('72', '1', '15', '1', 'yytytttttt', 'Active', '2017-07-27 16:16:21', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('74', '1', '15', '7', 'fdgdfgsetertetet', 'Active', '2017-07-27 17:03:46', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('75', '1', '15', '7', 'dgrythcfgdftgdfgdfgrdthhfgh', 'Active', '2017-07-27 17:03:53', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('76', '1', '15', '3', 'Hi', 'Active', '2017-07-28 04:02:13', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('77', '1', '15', '3', 'hello', 'Active', '2017-07-28 04:15:45', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('78', '1', '15', '8', 'hi ,helo', 'Active', '2017-07-28 21:49:09', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('79', '1', '15', '1', 'testing wther message working or not ', 'Active', '2017-07-31 20:21:35', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('80', '1', '15', '7', 'the streaming video is working properly', 'Active', '2017-07-31 20:22:19', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('81', '0', '15', '7', 'hi', 'Active', '2017-08-02 20:26:25', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('82', '0', '15', '7', 'hi,this is bittu ', 'Active', '2017-08-02 20:28:03', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('83', '0', '15', '7', 'hyui', 'Active', '2017-08-02 20:28:57', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('84', '0', '15', '7', 'hi,', 'Active', '2017-08-02 20:40:09', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('85', '0', '15', '7', 'helo again to all my viewers', 'Active', '2017-08-02 20:42:39', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('87', '0', '15', '3', 'Hi testing', 'Active', '2017-08-29 19:32:34', 'User');
INSERT INTO `stream_message_chat` VALUES ('88', '0', '15', '3', 'Hi testing', 'Active', '2017-08-29 19:32:46', 'User');
INSERT INTO `stream_message_chat` VALUES ('89', '0', '15', '3', 'hi', 'Active', '2017-08-29 19:32:57', 'User');
INSERT INTO `stream_message_chat` VALUES ('90', '12', '15', '7', 'very good video', 'Active', '2017-09-02 12:33:40', 'User');
INSERT INTO `stream_message_chat` VALUES ('91', '12', '15', '7', 'hi ', 'Active', '2017-09-02 12:54:33', 'User');
INSERT INTO `stream_message_chat` VALUES ('93', '12', '15', '4', 'hi', 'Active', '2017-09-02 15:40:20', 'User');
INSERT INTO `stream_message_chat` VALUES ('95', '1', '15', '3', 'hi', 'Active', '2017-09-11 19:19:26', 'User');
INSERT INTO `stream_message_chat` VALUES ('97', '0', '15', '7', 'fds', 'Active', '2017-09-12 16:29:08', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('98', '0', '15', '7', 'dfssdfsdfsdf', 'Active', '2017-09-12 16:58:58', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('99', '0', '15', '7', 'fdsdfsdf', 'Active', '2017-09-12 16:59:07', 'Artist');
INSERT INTO `stream_message_chat` VALUES ('100', '1', '15', '3', 'Hi how are you ?ddjldkldkaod', 'Active', '2017-10-07 06:15:34', 'User');
INSERT INTO `stream_message_chat` VALUES ('101', '12', '15', '3', 'hi', 'Active', '2017-10-24 18:49:49', 'User');
INSERT INTO `stream_message_chat` VALUES ('102', '12', '15', '3', 'hi', 'Active', '2017-10-24 18:49:49', 'User');
INSERT INTO `stream_message_chat` VALUES ('103', '1', '15', '1', 'new', 'Active', '2017-10-28 22:53:44', 'User');
INSERT INTO `stream_message_chat` VALUES ('104', '1', '15', '3', 'new', 'Active', '2017-10-29 02:51:59', 'User');
INSERT INTO `stream_message_chat` VALUES ('105', '1', '15', '21', 'hi', 'Active', '2017-11-01 02:32:05', 'User');

-- ----------------------------
-- Table structure for stream_meta_tag
-- ----------------------------
DROP TABLE IF EXISTS `stream_meta_tag`;
CREATE TABLE `stream_meta_tag` (
  `meta_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_tag` varchar(255) NOT NULL,
  `meta_status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`meta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_meta_tag
-- ----------------------------
INSERT INTO `stream_meta_tag` VALUES ('1', 'help', 'Streams:Help', 'Streams:Help', 'Active');
INSERT INTO `stream_meta_tag` VALUES ('2', 'terms&condition', 'Streams:Terms and Conditions', 'Streams:Terms and Conditions', 'Active');
INSERT INTO `stream_meta_tag` VALUES ('3', 'privacypolicy', 'Streams:Privacy Policy', 'Streams:Privacy Policy', 'Active');
INSERT INTO `stream_meta_tag` VALUES ('4', 'ad_choice', 'Streams:Ad Choice', 'Streams:Ad Choice', 'Active');
INSERT INTO `stream_meta_tag` VALUES ('5', 'aboutus', 'Streams:About Us', 'Streams:About Us', 'Active');
INSERT INTO `stream_meta_tag` VALUES ('6', 'myprofile', 'Streams:My Profile', 'Streams:My Profile', 'Active');
INSERT INTO `stream_meta_tag` VALUES ('7', 'edit_profile', 'Streams:Edit Profile', 'Streams:Edit Profile', 'Active');
INSERT INTO `stream_meta_tag` VALUES ('8', 'payment_setting', 'Streams:Payment Setting', 'Streams:Payment Setting', 'Active');
INSERT INTO `stream_meta_tag` VALUES ('9', 'artist_video', 'Streams:Artist Video', 'Streams:Artist Video', 'Active');
INSERT INTO `stream_meta_tag` VALUES ('10', 'recorded_video', 'Streams:Recorded Video', 'Streams:Recorded Video', 'Active');
INSERT INTO `stream_meta_tag` VALUES ('11', 'photos', 'Streams:Photos', 'Streams:Photos', 'Active');
INSERT INTO `stream_meta_tag` VALUES ('12', 'schedule_time', 'Streams:Schedule time', 'Streams:Schedule time', 'Active');
INSERT INTO `stream_meta_tag` VALUES ('13', 'changepassword', 'Streams:Change Password', 'Streams:Change Password', 'Active');
INSERT INTO `stream_meta_tag` VALUES ('14', 'home', 'Streams:Home', 'Streams:Home', 'Active');
INSERT INTO `stream_meta_tag` VALUES ('15', 'category', 'Streams:Category', 'Streams:Category', 'Active');
INSERT INTO `stream_meta_tag` VALUES ('16', 'streamer_details', 'Streams:Streamer Details', 'Streams:Streamer Details', 'Active');

-- ----------------------------
-- Table structure for stream_pagecontent
-- ----------------------------
DROP TABLE IF EXISTS `stream_pagecontent`;
CREATE TABLE `stream_pagecontent` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` varchar(255) NOT NULL,
  `page_content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_pagecontent
-- ----------------------------
INSERT INTO `stream_pagecontent` VALUES ('12', 'About Us', '<div class=\"container\">\n<div class=\"aboutus_body\">\n<h5>Founded in 2017, <strong>StreamAct</strong>&nbsp; is a direct to fan computer and phone app that caters to the performer. The platform offers the opportunity for any kind of musical talent, independent or up-and-coming artist to showcase their talent. Be it live at home or on stage Artists have the ability to gain exposure worldwide. This gives them the ability to make fans and make money with Steamact. Best of all it&#39;s free</h5>\n\n<p>Why do people stream music?</p>\n\n<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6 aboutleft\">\n<ul>\n	<li>It&rsquo;s fun and represents a compelling new social network to connect with friends and fans over a shared love of games and creative projects. Many streamers are making a living on Twitch based solely on how they entertain and interact with their audiences.</li>\n</ul>\n</div>\n\n<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6 aboutleft\">\n<h4>Why are people watching Twitch?</h4>\n\n<ul>\n	<li>People enjoy watching others who are highly skilled or extremely entertaining when it involves a shared interest.</li>\n	<li>Twitch is an honest means of discovery proven to influence video game purchase decisions.</li>\n	<li>Twitch is more than a spectator experience; it is social video that relies on audio and chat to enable streamers and their audiences to interact in real-time about everything from gaming and pop culture to life in general.</li>\n</ul>\n</div>\n\n<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6 aboutleft\">\n<h4>What are they watching?</h4>\n\n<ul>\n	<li><strong>Games:</strong> Every game and game genre is on Twitch!</li>\n	<li><strong>User Generated Programming:</strong> Original content created by community members, whether it&rsquo;s casual gaming with friends, a unique subculture like speedrunning, or a Twitch Plays game built with chat-driven gameplay.</li>\n	<li><strong>Esports:</strong> Competitive gaming has its own ecosystem with shows and events dedicated to this growing sport. Twitch features the top teams, leagues, players, talk shows and every major event.</li>\n	<li><strong>Publishers/Developers:</strong> Every major video game publisher and developer has a Twitch channel.</li>\n	<li>Editorial: All of the top video game media sites have a Twitch channel to bring live content to their readers.</li>\n</ul>\n</div>\n\n<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6 aboutleft\">\n<h4>&nbsp;</h4>\n</div>\n\n<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6 aboutleft\">\n<h4>&nbsp;</h4>\n</div>\n</div>\n</div>\n', '1500989777_about_us.png', 'Active');
INSERT INTO `stream_pagecontent` VALUES ('13', 'Help', '<div class=\"container\">\r\n<div class=\"aboutus_body\">\r\n<h2>Chat Basics</h2>\r\n\r\n<h5>Welcome to the web site www.streams.com , and any other web sites, applications, or services provided, owned, or operated by Twitch Interactive, Inc. (with its affiliates, &quot;Twitch&quot;) that link to this Privacy Policy (collectively, the &quot;Twitch Service&quot;). Twitch values the privacy of users, subscribers, publishers, members, and others who visit and use the Twitch Service (collectively or individually, &quot;you&quot; or &quot;users&quot;) and wants you to be familiar with how we collect, use, and disclose information from and about you.</h5>\r\n\r\n<h3>Chat Functionality</h3>\r\n\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 terms2\">\r\n<h4>Chat Badges Guide</h4>\r\n\r\n<p>You may provide a variety of information about yourself to us, such as your name, email address, postal mailing address, telephone number, credit card number, and billing information when you register for a Twitch Service; upload, purchase, view, or download certain content or products from the Twitch Service, enter contests or sweepstakes; or otherwise use the features and functionality of the Twitch Service.</p>\r\n</div>\r\n\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 terms2\">\r\n<h4>Chat Commends</h4>\r\n\r\n<p>When you access the Twitch Service or open one of our emails, we may automatically record and store certain information about your system by using cookies and other types of technologies. Cookies are small text files containing a string of alphanumeric characters that are sent to your browser. For information about what cookies are, how they work, how Twitch uses them, and how to remove them, please see our cookie policy at http://www.streams/cookie-policy.</p>\r\n</div>\r\n\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 terms2\">\r\n<h4>Guide to Custome Messeages</h4>\r\n\r\n<p>Twitch uses a variety of managerial, technical, and physical measures to protect the integrity and security of your information. These measures may vary based on the sensitivity of your information. However, no security precautions or systems can be completely secure. We cannot ensure or warrant the security of any information you transmit to Twitch, and you do so at your own risk. We cannot guarantee that such information may not be accessed, disclosed, altered, or destroyed by breach of any of our physical, technical, or managerial safeguards.</p>\r\n</div>\r\n\r\n<h3>Community &amp; Moderation</h3>\r\n\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 terms2\">\r\n<h4>Community Guideline</h4>\r\n\r\n<p>You may provide a variety of information about yourself to us, such as your name, email address, postal mailing address, telephone number, credit card number, and billing information when you register for a Twitch Service; upload, purchase, view, or download certain content or products from the Twitch Service, enter contests or sweepstakes; or otherwise use the features and functionality of the Twitch Service.</p>\r\n</div>\r\n\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 terms2\">\r\n<h4>How to Manage</h4>\r\n\r\n<p>When you access the Twitch Service or open one of our emails, we may automatically record and store certain information about your system by using cookies and other types of technologies. Cookies are small text files containing a string of alphanumeric characters that are sent to your browser. For information about what cookies are, how they work, how Twitch uses them, and how to remove them, please see our cookie policy at http://www.streams/cookie-policy.</p>\r\n</div>\r\n\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 terms2\">\r\n<h4>How to file User</h4>\r\n\r\n<p>Twitch uses a variety of managerial, technical, and physical measures to protect the integrity and security of your information. These measures may vary based on the sensitivity of your information. However, no security precautions or systems can be completely secure. We cannot ensure or warrant the security of any information you transmit to Twitch, and you do so at your own risk. We cannot guarantee that such information may not be accessed, disclosed, altered, or destroyed by breach of any of our physical, technical, or managerial safeguards.</p>\r\n</div>\r\n</div>\r\n</div>\r\n', '1500989862_help.png', 'Active');
INSERT INTO `stream_pagecontent` VALUES ('14', 'Terms and Condition', '<div class=\"container\">\n<div class=\"aboutus_body\">\n<h5>PLEASE READ THESE TERMS OF SERVICE CAREFULLY. THIS IS A BINDING CONTRACT.</h5>\n\n<h5>Welcome to the services operated by Twitch Interactive, Inc. (with its affiliates, &ldquo;Twitch&rdquo;) consisting of the website available at http://www.twitch.tv, and its network of websites, software applications, or any other products or services offered by Twitch (the &ldquo;Twitch Services&rdquo;). Other services offered by Twitch may be subject to separate terms.</h5>\n\n<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 terms\">\n<p>When using the Twitch Services, you may be subject to any additional posted guidelines or rules applicable to specific services and features that may be posted online from time to time (the &ldquo;Guidelines&rdquo;). One example is Twitch&#39;s Community Guidelines. Twitch may also offer certain paid services, which are subject to the Twitch Terms of Sale as well as any additional terms or conditions that are disclosed to you in connection with such services. All such terms and guidelines are incorporated into these Terms of Service by reference.</p>\n</div>\n\n<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 terms\">\n<p>The Terms of Service apply whether you are a user that registers an account with the Twitch Services or an unregistered user. You agree that by clicking &ldquo;Sign Up&rdquo; or otherwise registering, downloading, accessing or using the Twitch Services, you are entering into a legally binding agreement between you and Twitch regarding your use of the Twitch Services. You acknowledge that you have read, understood, and agree to be bound by these Terms of Service. If you do not agree to these Terms of Service, do not access or otherwise use any of the Twitch Services.</p>\n</div>\n\n<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 terms2\">\n<h4>Use of Twitch by Minors and Blocked Persons</h4>\n\n<p>The Twitch Services are not available to persons under the age of 13. If you are between the ages of 13 and 18 (or between 13 and the age of legal majority in your country of residence), you may only use the Twitch Services under the supervision of a parent or legal guardian who agrees to be bound by these Terms of Service.</p>\n\n<p>The Twitch Services are also not available to any users previously removed from the Twitch Services by Twitch. Finally, the Twitch Services are not available to any persons barred from receiving them under the laws of the United States (such as its export and re-export restrictions and regulations) or any other applicable jurisdiction.</p>\n</div>\n\n<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 terms2\">\n<h4>Use of Twitch by Minors and Blocked Persons</h4>\n\n<p>The Twitch Services are not available to persons under the age of 13. If you are between the ages of 13 and 18 (or between 13 and the age of legal majority in your country of residence), you may only use the Twitch Services under the supervision of a parent or legal guardian who agrees to be bound by these Terms of Service.</p>\n\n<p>The Twitch Services are also not available to any users previously removed from the Twitch Services by Twitch. Finally, the Twitch Services are not available to any persons barred from receiving them under the laws of the United States (such as its export and re-export restrictions and regulations) or any other applicable jurisdiction.</p>\n</div>\n\n<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 terms2\">\n<h4>Use of Twitch by Minors and Blocked Persons</h4>\n\n<p>The Twitch Services are not available to persons under the age of 13. If you are between the ages of 13 and 18 (or between 13 and the age of legal majority in your country of residence), you may only use the Twitch Services under the supervision of a parent or legal guardian who agrees to be bound by these Terms of Service.</p>\n\n<p>The Twitch Services are also not available to any users previously removed from the Twitch Services by Twitch. Finally, the Twitch Services are not available to any persons barred from receiving them under the laws of the United States (such as its export and re-export restrictions and regulations) or any other applicable jurisdiction.</p>\n</div>\n\n<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 terms2\">\n<h4>Use of Twitch by Minors and Blocked Persons</h4>\n\n<p>The Twitch Services are not available to persons under the age of 13. If you are between the ages of 13 and 18 (or between 13 and the age of legal majority in your country of residence), you may only use the Twitch Services under the supervision of a parent or legal guardian who agrees to be bound by these Terms of Service.</p>\n\n<p>The Twitch Services are also not available to any users previously removed from the Twitch Services by Twitch. Finally, the Twitch Services are not available to any persons barred from receiving them under the laws of the United States (such as its export and re-export restrictions and regulations) or any other applicable jurisdiction.</p>\n</div>\n</div>\n</div>\n', '1500990080_terms.png', 'Inactive');
INSERT INTO `stream_pagecontent` VALUES ('15', 'PrivacyPolicy', '<div class=\"container\">\n<div class=\"aboutus_body\">\n<h2>PRIVACY POLICY</h2>\n\n<h5>Welcome to the web site www.streams.com , and any other web sites, applications, or services provided, owned, or operated by Twitch Interactive, Inc. (with its affiliates, &quot;Twitch&quot;) that link to this Privacy Policy (collectively, the &quot;Twitch Service&quot;). Twitch values the privacy of users, subscribers, publishers, members, and others who visit and use the Twitch Service (collectively or individually, &quot;you&quot; or &quot;users&quot;) and wants you to be familiar with how we collect, use, and disclose information from and about you.</h5>\n\n<h5>There are many different ways you can use the Twitch Service (e.g., to view live broadcasts, upload content, communicate with others). Once you publish information publicly on the Twitch Service - such as when you broadcast content, participate in a chat room, post profile information, follow a channel, or subscribe to a broadcast channel &ndash; that information may be collected and used by others, so only share what you would want to be public. There are also ways in which you directly share information with Twitch; one example is by creating an account.</h5>\n\n<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 terms2\">\n<h4>User-provided Information</h4>\n\n<p>You may provide a variety of information about yourself to us, such as your name, email address, postal mailing address, telephone number, credit card number, and billing information when you register for a Twitch Service; upload, purchase, view, or download certain content or products from the Twitch Service, enter contests or sweepstakes; or otherwise use the features and functionality of the Twitch Service.</p>\n</div>\n\n<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 terms2\">\n<h4>Automatically Collected Information</h4>\n\n<p>When you access the Twitch Service or open one of our emails, we may automatically record and store certain information about your system by using cookies and other types of technologies. Cookies are small text files containing a string of alphanumeric characters that are sent to your browser. For information about what cookies are, how they work, how Twitch uses them, and how to remove them, please see our cookie policy at http://www.streams/cookie-policy.</p>\n</div>\n\n<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 terms2\">\n<h4>Data Security</h4>\n\n<p>Twitch uses a variety of managerial, technical, and physical measures to protect the integrity and security of your information. These measures may vary based on the sensitivity of your information. However, no security precautions or systems can be completely secure. We cannot ensure or warrant the security of any information you transmit to Twitch, and you do so at your own risk. We cannot guarantee that such information may not be accessed, disclosed, altered, or destroyed by breach of any of our physical, technical, or managerial safeguards.</p>\n</div>\n\n<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 terms2\">\n<h4>Changes and Updates to this Privacy Policy</h4>\n\n<p>Twitch reserves the right to change, modify, add, or remove portions of this Privacy Policy at any time (for example to reflect updates to the Twitch Service or to reflect changes in the law). If Twitch changes this Privacy Policy, we will provide you notice of these changes, such as by sending an email, posting a notice on the Twitch Service, or updating the &quot;Last Updated&quot; date above. Please check this Privacy Policy periodically for those changes. Your continued use of the Twitch Service after the posting of changes constitutes your binding acceptance of such changes.</p>\n</div>\n\n<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 terms2\">\n<h4>Streams Contact Information</h4>\n\n<p>Please contact Twitch with any questions or comments about this Privacy Policy at 225 Bush Street, 9th Floor, San Francisco, CA 94104 or by email to privacy@twitch.tv. We will respond to your inquiry within 30 days of its receipt. If you are a California resident, you may have this same information emailed to you by sending a letter to the foregoing address with your email address and a request for this information.</p>\n</div>\n\n<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 terms2\">\n<h4>Mexico Privacy Rights</h4>\n\n<p>California law permits users who are California residents to request and obtain from us once a year, free of charge, a list of the third parties to whom we have disclosed their personal information (if any) for their direct marketing purposes in the prior calendar year, as well as the type of personal information disclosed to those parties. Twitch does not currently disclose personal information to third parties for their direct marketing purposes.</p>\n</div>\n</div>\n</div>\n', '1500990046_privacy.png', 'Inactive');
INSERT INTO `stream_pagecontent` VALUES ('16', 'FAQ', '<div class=\"container\">\n<div class=\"aboutus_body\">\n<h5>Founded in June 2011, Twitch is the world&rsquo;s leading social video platform and community for gamers, video game culture, and the creative arts. Each day, close to 10 million visitors gather to watch and talk about video games with more than 2 million streamers. We invite you to join the millions of people who come to Twitch to stream, view, and interact around these shared passions together.</h5>\n\n<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6 aboutleft\">\n<h4>What are my choices about interest based advertising from Twitch.tv?</h4>\n\n<ul>\n	<li>Visit aboutads.info to learn about online behavioral advertising and the opt-out choices offered by advertisers and other companies that participate in the industry Consumer Choice program. For more information about your interest-based advertising choices on twitch.tv, please visit our <a href=\"#\">Privacy Policy.</a></li>\n</ul>\n</div>\n\n<p>&nbsp;</p>\n\n<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6 aboutleft\">\n<h4>Where can I learn more about the information Twitch collects about my online activities?</h4>\n\n<ul>\n	<li>For more detail about Twitch&#39;s practices, please visit our <a href=\"#\">Privacy Policy.</a></li>\n</ul>\n</div>\n\n<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6 aboutleft\">\n<h4>Where can I learn more about interest based advertising?</h4>\n\n<ul>\n	<li>Visit the Privacy Matters campaign website to learn more about browser controls that can help you exercise your privacy choices. Learn more about online advertising from the Network Advertising Initiative or the Digital Advertising Alliance.</li>\n</ul>\n</div>\n\n<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6 aboutleft\">\n<h4>Where can I learn more about the information Twitch collects about my online activities?</h4>\n\n<ul>\n	<li>For more detail about Twitch&#39;s practices, please visit our <a href=\"#\">Privacy Policy.</a></li>\n</ul>\n</div>\n\n<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6 aboutleft\">\n<h4>Where can I learn more about the information Twitch collects about my online activities?</h4>\n\n<ul>\n	<li>For more detail about Twitch&#39;s practices, please visit our <a href=\"#\">Privacy Policy.</a></li>\n</ul>\n</div>\n\n<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6 aboutleft\">\n<h4>What are my choices about interest based advertising from Twitch.tv?</h4>\n\n<ul>\n	<li>Visit aboutads.info to learn about online behavioral advertising and the opt-out choices offered by advertisers and other companies that participate in the industry Consumer Choice program. For more information about your interest-based advertising choices on twitch.tv, please visit our <a href=\"#\">Privacy Policy.</a></li>\n</ul>\n</div>\n</div>\n</div>\n', '1500989809_adchoice.png', 'Active');
INSERT INTO `stream_pagecontent` VALUES ('17', 'yyyyyyyyyyyyyy', '<p>hhhhhhhhhhhhhhhhhhh</p>\n', '1500988392_Chrysanthemum.jpg', 'Inactive');

-- ----------------------------
-- Table structure for stream_payment_details
-- ----------------------------
DROP TABLE IF EXISTS `stream_payment_details`;
CREATE TABLE `stream_payment_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_no` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `admin_charge` double(7,2) NOT NULL,
  `artist_charge` double(7,2) NOT NULL,
  `payment` double(7,2) NOT NULL,
  `date` date NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `txn_id` varchar(255) NOT NULL,
  `ipn_track_id` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_payment_details
-- ----------------------------
INSERT INTO `stream_payment_details` VALUES ('1', 'Stream_1499355621', '1', '15', '3', '2.75', '52.25', '55.00', '2017-07-06', 'Paid', '31J30454JH4363945', '5ecdc90112398', 'Feature', '', '0000-00-00');
INSERT INTO `stream_payment_details` VALUES ('2', 'Stream_1499355621', '1', '15', '1', '2.75', '57.25', '60.00', '2017-07-06', 'Paid', '31J30454JH4363945', '5ecdc90112398', 'Video', '', '0000-00-00');
INSERT INTO `stream_payment_details` VALUES ('3', 'Stream_1499355622', '3', '15', '3', '2.75', '52.25', '55.00', '2017-07-06', 'Paid', '31J30454JH4363945', '5ecdc90112398', 'Recorded video', '', '0000-00-00');
INSERT INTO `stream_payment_details` VALUES ('4', 'Stream_1499775999', '11', '0', '0', '10.00', '0.00', '10.00', '2017-07-11', 'Paid', '31J30454JH4363945', '5ecdc90112398', 'Feature', 'User', '2017-08-11');
INSERT INTO `stream_payment_details` VALUES ('5', 'Stream_1501154619', '1', '15', '7', '0.20', '3.80', '4.08', '2017-07-27', 'Paid', '31J30454JH4363945', '5ecdc90112398', 'Streaming Video', 'User', '0000-00-00');

-- ----------------------------
-- Table structure for stream_photo_view
-- ----------------------------
DROP TABLE IF EXISTS `stream_photo_view`;
CREATE TABLE `stream_photo_view` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_photo_view
-- ----------------------------
INSERT INTO `stream_photo_view` VALUES ('1', '15', '60', '::1', '2017-06-27');
INSERT INTO `stream_photo_view` VALUES ('2', '15', '61', '::1', '2017-06-27');
INSERT INTO `stream_photo_view` VALUES ('3', '15', '62', '::1', '2017-06-27');
INSERT INTO `stream_photo_view` VALUES ('4', '15', '60', '::1', '2017-06-28');
INSERT INTO `stream_photo_view` VALUES ('5', '15', '61', '::1', '2017-06-28');
INSERT INTO `stream_photo_view` VALUES ('6', '15', '62', '::1', '2017-06-28');
INSERT INTO `stream_photo_view` VALUES ('7', '15', '60', '::1', '2017-06-29');
INSERT INTO `stream_photo_view` VALUES ('8', '15', '60', '::1', '2017-07-05');
INSERT INTO `stream_photo_view` VALUES ('9', '15', '61', '::1', '2017-07-05');
INSERT INTO `stream_photo_view` VALUES ('10', '15', '62', '::1', '2017-07-05');
INSERT INTO `stream_photo_view` VALUES ('11', '15', '60', '::1', '2017-07-07');
INSERT INTO `stream_photo_view` VALUES ('12', '15', '62', '::1', '2017-07-07');
INSERT INTO `stream_photo_view` VALUES ('13', '15', '61', '::1', '2017-07-07');
INSERT INTO `stream_photo_view` VALUES ('14', '15', '61', '189.213.119.73', '2017-09-06');
INSERT INTO `stream_photo_view` VALUES ('15', '15', '60', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_photo_view` VALUES ('16', '15', '61', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_photo_view` VALUES ('17', '15', '62', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_photo_view` VALUES ('18', '15', '60', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_photo_view` VALUES ('19', '15', '61', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_photo_view` VALUES ('20', '15', '62', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_photo_view` VALUES ('21', '15', '60', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_photo_view` VALUES ('22', '15', '61', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_photo_view` VALUES ('23', '15', '62', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_photo_view` VALUES ('24', '15', '60', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_photo_view` VALUES ('25', '15', '61', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_photo_view` VALUES ('26', '15', '62', '127.0.0.1', '2017-12-05');

-- ----------------------------
-- Table structure for stream_private_message
-- ----------------------------
DROP TABLE IF EXISTS `stream_private_message`;
CREATE TABLE `stream_private_message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `message_status` enum('Active','Inactive') NOT NULL,
  `message_time` datetime NOT NULL,
  `sender_type` enum('Artist','User') NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of stream_private_message
-- ----------------------------
INSERT INTO `stream_private_message` VALUES ('12', '12', '15', '0', 'helo dear', 'Active', '2017-10-23 11:16:14', 'User');
INSERT INTO `stream_private_message` VALUES ('13', '12', '15', '0', 'i m fine how r you', 'Active', '2017-10-23 20:47:14', 'User');
INSERT INTO `stream_private_message` VALUES ('14', '12', '15', '0', 'm well', 'Active', '2017-10-23 20:49:04', 'Artist');
INSERT INTO `stream_private_message` VALUES ('15', '1', '15', '0', 'Hi Barbara', 'Active', '2017-10-23 15:21:26', 'User');
INSERT INTO `stream_private_message` VALUES ('16', '1', '15', '0', 'Hi barbara Live', 'Active', '2017-10-23 15:22:12', 'User');
INSERT INTO `stream_private_message` VALUES ('17', '1', '15', '0', 'hi', 'Active', '2017-10-23 17:20:34', 'User');
INSERT INTO `stream_private_message` VALUES ('18', '12', '15', '0', 'hi dear', 'Active', '2017-10-24 09:18:44', 'User');
INSERT INTO `stream_private_message` VALUES ('19', '12', '15', '0', 'wassup', 'Active', '2017-10-24 09:19:28', 'User');
INSERT INTO `stream_private_message` VALUES ('20', '12', '15', '0', 'ssss', 'Active', '2017-10-24 09:32:51', 'User');
INSERT INTO `stream_private_message` VALUES ('21', '1', '15', '0', 'hi Barbara, I send this message 24.10.2017   12:14', 'Active', '2017-10-24 13:14:12', 'User');
INSERT INTO `stream_private_message` VALUES ('22', '1', '15', '0', 'hi Kate', 'Active', '2017-10-24 22:48:29', 'Artist');
INSERT INTO `stream_private_message` VALUES ('23', '12', '15', '0', 'hi,i liked your video very much', 'Active', '2017-10-25 07:20:55', 'User');
INSERT INTO `stream_private_message` VALUES ('24', '12', '15', '0', 'testing testing', 'Active', '2017-10-25 07:24:14', 'User');
INSERT INTO `stream_private_message` VALUES ('25', '12', '15', '0', 'testing testing', 'Active', '2017-10-25 07:24:15', 'User');
INSERT INTO `stream_private_message` VALUES ('26', '12', '15', '0', 'ssssssssss', 'Active', '2017-10-25 07:24:43', 'User');
INSERT INTO `stream_private_message` VALUES ('27', '12', '15', '0', 'omg', 'Active', '2017-10-26 16:14:19', 'User');
INSERT INTO `stream_private_message` VALUES ('28', '12', '15', '0', 'ki j bolis', 'Active', '2017-10-26 16:18:09', 'User');
INSERT INTO `stream_private_message` VALUES ('29', '12', '15', '0', 'hii harris', 'Active', '2017-10-27 16:13:49', 'Artist');
INSERT INTO `stream_private_message` VALUES ('30', '12', '15', '0', 'helo', 'Active', '2017-10-27 16:14:14', 'User');
INSERT INTO `stream_private_message` VALUES ('31', '12', '15', '0', 'hru', 'Active', '2017-10-27 16:14:27', 'Artist');
INSERT INTO `stream_private_message` VALUES ('32', '12', '15', '0', 'thekua khilao??', 'Active', '2017-10-27 16:14:41', 'User');
INSERT INTO `stream_private_message` VALUES ('33', '12', '15', '0', 'mujkho thekuya chahiya??', 'Active', '2017-10-27 16:15:03', 'User');
INSERT INTO `stream_private_message` VALUES ('34', '12', '15', '0', 'what r u talking i dont understand', 'Active', '2017-10-27 16:15:16', 'Artist');
INSERT INTO `stream_private_message` VALUES ('35', '12', '15', '0', 'i want Thekua', 'Active', '2017-10-27 16:15:37', 'User');
INSERT INTO `stream_private_message` VALUES ('36', '12', '15', '0', 'what thekua', 'Active', '2017-10-27 16:15:53', 'Artist');
INSERT INTO `stream_private_message` VALUES ('37', '12', '15', '0', 'boozing hoga aj??', 'Active', '2017-10-27 16:16:09', 'User');
INSERT INTO `stream_private_message` VALUES ('38', '12', '15', '0', 'what', 'Active', '2017-10-27 16:16:24', 'Artist');
INSERT INTO `stream_private_message` VALUES ('39', '12', '15', '0', 'daru hoga aj?', 'Active', '2017-10-27 16:16:35', 'User');
INSERT INTO `stream_private_message` VALUES ('40', '12', '15', '0', 'what do u mean by daru', 'Active', '2017-10-27 16:17:02', 'Artist');
INSERT INTO `stream_private_message` VALUES ('41', '12', '15', '0', 'whisky??', 'Active', '2017-10-27 16:17:13', 'User');
INSERT INTO `stream_private_message` VALUES ('42', '1', '15', '0', 'new', 'Active', '2017-10-28 22:52:31', 'User');
INSERT INTO `stream_private_message` VALUES ('43', '1', '15', '0', 'new', 'Active', '2017-10-28 22:52:55', 'User');
INSERT INTO `stream_private_message` VALUES ('44', '1', '63', '0', 'Hi Privatechat', 'Active', '2017-11-11 23:07:52', 'User');
INSERT INTO `stream_private_message` VALUES ('45', '1', '63', '0', 'new', 'Active', '2017-11-11 23:08:17', 'User');
INSERT INTO `stream_private_message` VALUES ('46', '1', '15', '0', 'hi 11-11-2017', 'Active', '2017-11-11 23:13:18', 'User');
INSERT INTO `stream_private_message` VALUES ('47', '26', '15', '0', 'Hi sexy', 'Active', '2017-11-24 20:54:50', 'User');
INSERT INTO `stream_private_message` VALUES ('48', '26', '15', '0', 'Chat is good though', 'Active', '2017-11-25 02:26:48', 'User');
INSERT INTO `stream_private_message` VALUES ('49', '3', '69', '0', 'This is a private chat', 'Active', '2017-12-03 22:37:47', 'User');
INSERT INTO `stream_private_message` VALUES ('50', '3', '69', '0', 'here?', 'Active', '2017-12-03 22:51:35', 'Artist');
INSERT INTO `stream_private_message` VALUES ('51', '3', '0', '0', 'here?', 'Active', '2017-12-03 22:51:35', 'Artist');
INSERT INTO `stream_private_message` VALUES ('52', '3', '69', '0', 'i see your private message', 'Active', '2017-12-03 22:52:28', 'Artist');
INSERT INTO `stream_private_message` VALUES ('53', '3', '69', '0', 'Great', 'Active', '2017-12-03 22:56:35', 'User');
INSERT INTO `stream_private_message` VALUES ('54', '3', '69', '0', 'This is private :)', 'Active', '2017-12-03 22:56:53', 'User');

-- ----------------------------
-- Table structure for stream_recorded_video
-- ----------------------------
DROP TABLE IF EXISTS `stream_recorded_video`;
CREATE TABLE `stream_recorded_video` (
  `recorded_v_id` int(11) NOT NULL AUTO_INCREMENT,
  `recorded_v_title` varchar(255) NOT NULL,
  `recorded_v_overview` text NOT NULL,
  `artist_id` int(11) NOT NULL,
  `recorded_video_name` varchar(255) NOT NULL,
  `category_type` int(11) NOT NULL,
  `video_tags` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `recorded_v_status` enum('Show','Hide') NOT NULL,
  `video_type` enum('Recorded','Streaming') NOT NULL,
  `video_key` varchar(255) NOT NULL,
  `video_date` date NOT NULL,
  PRIMARY KEY (`recorded_v_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_recorded_video
-- ----------------------------
INSERT INTO `stream_recorded_video` VALUES ('26', 'prueba', 'asdf', '61', '', '2', 'asdf', '1509979774_43e89a6b4ae7a72478c6653100d7cf36.png', 'Show', 'Streaming', '1509979774', '2017-11-06');
INSERT INTO `stream_recorded_video` VALUES ('30', 'GG Test ', 'GG test', '0', '', '17', 'GG Test', '1510010043_KABOOM-expositions-13710481-800-600.jpg', 'Show', 'Recorded', '1510010043', '2017-11-06');
INSERT INTO `stream_recorded_video` VALUES ('48', 'Morning Test', 'Morning testing Recording', '15', '', '6', 'morning recording test', '1512319983_StreamACT_edited.jpg', 'Show', 'Recorded', '1512319983', '2017-12-03');
INSERT INTO `stream_recorded_video` VALUES ('55', 'Encoder test 3 ', 'Encoder test 3 ', '69', '', '17', 'Encoder test 3 ', '1512336490_DSC01495.JPG', 'Show', 'Recorded', '1512336490', '2017-12-03');

-- ----------------------------
-- Table structure for stream_recorded_video_view
-- ----------------------------
DROP TABLE IF EXISTS `stream_recorded_video_view`;
CREATE TABLE `stream_recorded_video_view` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recorded_v_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2693 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_recorded_video_view
-- ----------------------------
INSERT INTO `stream_recorded_video_view` VALUES ('1', '1', '15', '::1', '2017-07-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2', '2', '15', '::1', '2017-07-05');
INSERT INTO `stream_recorded_video_view` VALUES ('3', '1', '15', '::1', '2017-07-06');
INSERT INTO `stream_recorded_video_view` VALUES ('4', '2', '15', '::1', '2017-07-06');
INSERT INTO `stream_recorded_video_view` VALUES ('5', '3', '15', '::1', '2017-07-05');
INSERT INTO `stream_recorded_video_view` VALUES ('6', '8', '15', '::1', '2017-07-05');
INSERT INTO `stream_recorded_video_view` VALUES ('7', '4', '15', '::1', '2017-07-05');
INSERT INTO `stream_recorded_video_view` VALUES ('8', '7', '15', '::1', '2017-07-06');
INSERT INTO `stream_recorded_video_view` VALUES ('9', '5', '15', '::1', '2017-07-06');
INSERT INTO `stream_recorded_video_view` VALUES ('10', '3', '15', '::1', '2017-07-07');
INSERT INTO `stream_recorded_video_view` VALUES ('11', '1', '15', '47.15.9.112', '2017-07-27');
INSERT INTO `stream_recorded_video_view` VALUES ('12', '7', '15', '47.15.9.112', '2017-07-27');
INSERT INTO `stream_recorded_video_view` VALUES ('13', '3', '15', '47.15.9.112', '2017-07-27');
INSERT INTO `stream_recorded_video_view` VALUES ('14', '8', '15', '47.15.9.112', '2017-07-27');
INSERT INTO `stream_recorded_video_view` VALUES ('15', '7', '15', '117.194.229.38', '2017-07-27');
INSERT INTO `stream_recorded_video_view` VALUES ('16', '3', '15', '117.194.229.38', '2017-07-27');
INSERT INTO `stream_recorded_video_view` VALUES ('17', '1', '15', '117.194.229.38', '2017-07-27');
INSERT INTO `stream_recorded_video_view` VALUES ('18', '3', '15', '189.213.119.73', '2017-07-27');
INSERT INTO `stream_recorded_video_view` VALUES ('19', '7', '15', '189.213.119.73', '2017-07-27');
INSERT INTO `stream_recorded_video_view` VALUES ('20', '8', '15', '189.213.119.73', '2017-07-27');
INSERT INTO `stream_recorded_video_view` VALUES ('21', '1', '15', '189.213.119.73', '2017-07-27');
INSERT INTO `stream_recorded_video_view` VALUES ('22', '4', '15', '189.213.119.73', '2017-07-27');
INSERT INTO `stream_recorded_video_view` VALUES ('23', '8', '15', '117.194.31.142', '2017-07-28');
INSERT INTO `stream_recorded_video_view` VALUES ('24', '1', '15', '59.92.144.79', '2017-07-31');
INSERT INTO `stream_recorded_video_view` VALUES ('25', '7', '15', '59.92.144.79', '2017-07-31');
INSERT INTO `stream_recorded_video_view` VALUES ('26', '8', '15', '59.92.144.79', '2017-07-31');
INSERT INTO `stream_recorded_video_view` VALUES ('27', '1', '15', '117.194.232.82', '2017-08-01');
INSERT INTO `stream_recorded_video_view` VALUES ('28', '7', '15', '47.15.14.14', '2017-08-01');
INSERT INTO `stream_recorded_video_view` VALUES ('29', '7', '15', '117.194.232.82', '2017-08-01');
INSERT INTO `stream_recorded_video_view` VALUES ('30', '1', '15', '47.15.14.14', '2017-08-01');
INSERT INTO `stream_recorded_video_view` VALUES ('31', '7', '15', '189.213.119.73', '2017-08-01');
INSERT INTO `stream_recorded_video_view` VALUES ('32', '7', '15', '47.15.1.175', '2017-08-02');
INSERT INTO `stream_recorded_video_view` VALUES ('33', '7', '15', '187.177.48.62', '2017-08-05');
INSERT INTO `stream_recorded_video_view` VALUES ('34', '7', '15', '47.15.15.248', '2017-08-08');
INSERT INTO `stream_recorded_video_view` VALUES ('35', '7', '15', '47.15.4.236', '2017-08-09');
INSERT INTO `stream_recorded_video_view` VALUES ('36', '7', '15', '187.177.48.62', '2017-08-09');
INSERT INTO `stream_recorded_video_view` VALUES ('37', '7', '15', '189.210.80.166', '2017-08-15');
INSERT INTO `stream_recorded_video_view` VALUES ('38', '7', '15', '189.213.119.73', '2017-08-18');
INSERT INTO `stream_recorded_video_view` VALUES ('39', '7', '15', '187.177.48.62', '2017-08-19');
INSERT INTO `stream_recorded_video_view` VALUES ('40', '7', '15', '117.194.235.111', '2017-08-25');
INSERT INTO `stream_recorded_video_view` VALUES ('41', '7', '15', '189.213.119.73', '2017-08-26');
INSERT INTO `stream_recorded_video_view` VALUES ('42', '7', '15', '59.90.53.26', '2017-08-28');
INSERT INTO `stream_recorded_video_view` VALUES ('43', '1', '15', '59.90.53.26', '2017-08-28');
INSERT INTO `stream_recorded_video_view` VALUES ('44', '1', '15', '47.15.3.218', '2017-08-28');
INSERT INTO `stream_recorded_video_view` VALUES ('45', '4', '15', '189.213.119.73', '2017-08-28');
INSERT INTO `stream_recorded_video_view` VALUES ('46', '1', '15', '189.213.119.73', '2017-08-28');
INSERT INTO `stream_recorded_video_view` VALUES ('47', '7', '15', '189.213.119.73', '2017-08-28');
INSERT INTO `stream_recorded_video_view` VALUES ('48', '3', '15', '189.213.119.73', '2017-08-28');
INSERT INTO `stream_recorded_video_view` VALUES ('49', '8', '15', '189.213.119.73', '2017-08-28');
INSERT INTO `stream_recorded_video_view` VALUES ('50', '1', '15', '137.59.157.218', '2017-08-29');
INSERT INTO `stream_recorded_video_view` VALUES ('51', '3', '15', '137.59.157.218', '2017-08-29');
INSERT INTO `stream_recorded_video_view` VALUES ('52', '8', '15', '137.59.157.218', '2017-08-29');
INSERT INTO `stream_recorded_video_view` VALUES ('53', '7', '15', '137.59.157.218', '2017-08-29');
INSERT INTO `stream_recorded_video_view` VALUES ('54', '1', '15', '189.213.119.73', '2017-08-29');
INSERT INTO `stream_recorded_video_view` VALUES ('55', '3', '15', '189.213.119.73', '2017-08-29');
INSERT INTO `stream_recorded_video_view` VALUES ('56', '8', '15', '189.213.119.73', '2017-08-29');
INSERT INTO `stream_recorded_video_view` VALUES ('57', '4', '15', '189.213.119.73', '2017-08-29');
INSERT INTO `stream_recorded_video_view` VALUES ('58', '7', '15', '189.213.119.73', '2017-09-01');
INSERT INTO `stream_recorded_video_view` VALUES ('59', '7', '15', '117.194.239.236', '2017-09-02');
INSERT INTO `stream_recorded_video_view` VALUES ('60', '4', '15', '117.194.239.236', '2017-09-02');
INSERT INTO `stream_recorded_video_view` VALUES ('61', '3', '15', '117.194.239.236', '2017-09-02');
INSERT INTO `stream_recorded_video_view` VALUES ('62', '1', '15', '117.194.239.236', '2017-09-02');
INSERT INTO `stream_recorded_video_view` VALUES ('63', '1', '15', '47.15.14.74', '2017-09-06');
INSERT INTO `stream_recorded_video_view` VALUES ('64', '7', '15', '117.194.239.231', '2017-09-06');
INSERT INTO `stream_recorded_video_view` VALUES ('65', '1', '15', '117.194.239.231', '2017-09-06');
INSERT INTO `stream_recorded_video_view` VALUES ('66', '3', '15', '117.194.239.231', '2017-09-06');
INSERT INTO `stream_recorded_video_view` VALUES ('67', '7', '15', '189.213.119.73', '2017-09-06');
INSERT INTO `stream_recorded_video_view` VALUES ('68', '1', '15', '189.213.119.73', '2017-09-06');
INSERT INTO `stream_recorded_video_view` VALUES ('69', '4', '15', '189.213.119.73', '2017-09-06');
INSERT INTO `stream_recorded_video_view` VALUES ('70', '3', '15', '189.213.119.73', '2017-09-06');
INSERT INTO `stream_recorded_video_view` VALUES ('71', '8', '15', '189.213.119.73', '2017-09-06');
INSERT INTO `stream_recorded_video_view` VALUES ('72', '1', '15', '137.59.158.22', '2017-09-07');
INSERT INTO `stream_recorded_video_view` VALUES ('73', '7', '15', '137.59.158.22', '2017-09-07');
INSERT INTO `stream_recorded_video_view` VALUES ('74', '8', '15', '187.177.48.235', '2017-09-07');
INSERT INTO `stream_recorded_video_view` VALUES ('75', '3', '15', '187.177.48.235', '2017-09-07');
INSERT INTO `stream_recorded_video_view` VALUES ('76', '1', '15', '137.59.157.16', '2017-09-08');
INSERT INTO `stream_recorded_video_view` VALUES ('77', '7', '15', '137.59.157.16', '2017-09-08');
INSERT INTO `stream_recorded_video_view` VALUES ('78', '3', '15', '137.59.157.16', '2017-09-08');
INSERT INTO `stream_recorded_video_view` VALUES ('79', '3', '15', '117.194.230.62', '2017-09-09');
INSERT INTO `stream_recorded_video_view` VALUES ('80', '8', '15', '117.194.230.62', '2017-09-09');
INSERT INTO `stream_recorded_video_view` VALUES ('81', '7', '15', '47.15.7.121', '2017-09-09');
INSERT INTO `stream_recorded_video_view` VALUES ('82', '8', '15', '47.15.7.121', '2017-09-09');
INSERT INTO `stream_recorded_video_view` VALUES ('83', '3', '15', '47.15.7.121', '2017-09-09');
INSERT INTO `stream_recorded_video_view` VALUES ('84', '4', '15', '47.15.7.121', '2017-09-09');
INSERT INTO `stream_recorded_video_view` VALUES ('85', '1', '15', '47.15.7.121', '2017-09-09');
INSERT INTO `stream_recorded_video_view` VALUES ('86', '7', '15', '117.194.230.62', '2017-09-09');
INSERT INTO `stream_recorded_video_view` VALUES ('87', '7', '15', '47.15.15.206', '2017-09-11');
INSERT INTO `stream_recorded_video_view` VALUES ('88', '3', '15', '189.213.119.73', '2017-09-11');
INSERT INTO `stream_recorded_video_view` VALUES ('89', '8', '15', '189.213.119.73', '2017-09-11');
INSERT INTO `stream_recorded_video_view` VALUES ('90', '1', '15', '137.59.159.58', '2017-09-11');
INSERT INTO `stream_recorded_video_view` VALUES ('91', '7', '15', '137.59.159.58', '2017-09-11');
INSERT INTO `stream_recorded_video_view` VALUES ('92', '4', '15', '137.59.159.58', '2017-09-11');
INSERT INTO `stream_recorded_video_view` VALUES ('93', '7', '15', '137.59.158.31', '2017-09-12');
INSERT INTO `stream_recorded_video_view` VALUES ('94', '4', '15', '137.59.158.31', '2017-09-12');
INSERT INTO `stream_recorded_video_view` VALUES ('95', '7', '15', '47.15.10.49', '2017-09-12');
INSERT INTO `stream_recorded_video_view` VALUES ('96', '3', '15', '137.59.158.31', '2017-09-12');
INSERT INTO `stream_recorded_video_view` VALUES ('97', '4', '15', '47.15.10.49', '2017-09-12');
INSERT INTO `stream_recorded_video_view` VALUES ('98', '1', '15', '47.15.10.49', '2017-09-12');
INSERT INTO `stream_recorded_video_view` VALUES ('99', '1', '15', '137.59.158.31', '2017-09-12');
INSERT INTO `stream_recorded_video_view` VALUES ('100', '8', '15', '47.15.10.49', '2017-09-12');
INSERT INTO `stream_recorded_video_view` VALUES ('101', '3', '15', '47.15.10.49', '2017-09-12');
INSERT INTO `stream_recorded_video_view` VALUES ('102', '8', '15', '137.59.157.186', '2017-09-13');
INSERT INTO `stream_recorded_video_view` VALUES ('103', '3', '15', '137.59.157.186', '2017-09-13');
INSERT INTO `stream_recorded_video_view` VALUES ('104', '1', '15', '189.213.119.73', '2017-09-13');
INSERT INTO `stream_recorded_video_view` VALUES ('105', '1', '15', '117.248.137.254', '2017-09-14');
INSERT INTO `stream_recorded_video_view` VALUES ('106', '7', '15', '117.248.137.254', '2017-09-14');
INSERT INTO `stream_recorded_video_view` VALUES ('107', '4', '15', '117.248.137.254', '2017-09-14');
INSERT INTO `stream_recorded_video_view` VALUES ('108', '3', '15', '117.248.137.254', '2017-09-14');
INSERT INTO `stream_recorded_video_view` VALUES ('109', '3', '15', '137.59.158.154', '2017-09-15');
INSERT INTO `stream_recorded_video_view` VALUES ('110', '7', '15', '189.213.119.73', '2017-09-15');
INSERT INTO `stream_recorded_video_view` VALUES ('111', '1', '15', '137.59.159.65', '2017-09-18');
INSERT INTO `stream_recorded_video_view` VALUES ('112', '1', '15', '159.203.42.143', '2017-09-18');
INSERT INTO `stream_recorded_video_view` VALUES ('113', '3', '15', '137.59.159.65', '2017-09-18');
INSERT INTO `stream_recorded_video_view` VALUES ('114', '3', '15', '107.170.96.6', '2017-09-18');
INSERT INTO `stream_recorded_video_view` VALUES ('115', '8', '15', '137.59.159.65', '2017-09-18');
INSERT INTO `stream_recorded_video_view` VALUES ('116', '8', '15', '159.203.42.143', '2017-09-18');
INSERT INTO `stream_recorded_video_view` VALUES ('117', '1', '15', '189.213.119.73', '2017-09-18');
INSERT INTO `stream_recorded_video_view` VALUES ('118', '3', '15', '189.213.119.73', '2017-09-18');
INSERT INTO `stream_recorded_video_view` VALUES ('119', '1', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('120', '1', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('121', '1', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('122', '1', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('123', '1', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('124', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('125', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('126', '4', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('127', '4', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('128', '4', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('129', '4', '15', '162.243.69.215', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('130', '4', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('131', '4', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('132', '1', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('133', '1', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('134', '1', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('135', '1', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('136', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('137', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('138', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('139', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('140', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('141', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('142', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('143', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('144', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('145', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('146', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('147', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('148', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('149', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('150', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('151', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('152', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('153', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('154', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('155', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('156', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('157', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('158', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('159', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('160', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('161', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('162', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('163', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('164', '4', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('165', '4', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('166', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('167', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('168', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('169', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('170', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('171', '7', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('172', '7', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('173', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('174', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('175', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('176', '4', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('177', '4', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('178', '4', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('179', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('180', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('181', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('182', '1', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('183', '1', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('184', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('185', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('186', '1', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('187', '1', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('188', '1', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('189', '7', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('190', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('191', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('192', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('193', '4', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('194', '4', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('195', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('196', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('197', '1', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('198', '1', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('199', '7', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('200', '7', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('201', '1', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('202', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('203', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('204', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('205', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('206', '1', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('207', '1', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('208', '1', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('209', '8', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('210', '8', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('211', '8', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('212', '8', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('213', '8', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('214', '8', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('215', '7', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('216', '3', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('217', '3', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('218', '3', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('219', '3', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('220', '3', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('221', '3', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('222', '1', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('223', '1', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('224', '7', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('225', '7', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('226', '7', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('227', '3', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('228', '3', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('229', '8', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('230', '3', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('231', '3', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('232', '3', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('233', '7', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('234', '7', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('235', '7', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('236', '1', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('237', '1', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('238', '1', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('239', '1', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('240', '1', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('241', '1', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('242', '1', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('243', '1', '15', '47.15.1.204', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('244', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('245', '8', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('246', '4', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('247', '4', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('248', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('249', '3', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('250', '1', '15', '59.97.156.37', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('251', '1', '15', '189.213.119.73', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('252', '3', '15', '189.213.119.73', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('253', '3', '15', '189.213.119.73', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('254', '3', '15', '189.213.119.73', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('255', '3', '15', '189.213.119.73', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('256', '3', '15', '189.213.119.73', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('257', '3', '15', '189.213.119.73', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('258', '3', '15', '189.213.119.73', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('259', '3', '15', '189.213.119.73', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('260', '3', '15', '189.213.119.73', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('261', '1', '15', '189.213.119.73', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('262', '3', '15', '189.213.119.73', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('263', '3', '15', '189.213.119.73', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('264', '1', '15', '189.213.119.73', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('265', '1', '15', '189.213.119.73', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('266', '4', '15', '189.213.119.73', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('267', '3', '15', '189.213.119.73', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('268', '3', '15', '189.213.119.73', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('269', '7', '15', '189.213.119.73', '2017-09-19');
INSERT INTO `stream_recorded_video_view` VALUES ('270', '1', '15', '189.213.119.73', '2017-09-20');
INSERT INTO `stream_recorded_video_view` VALUES ('271', '1', '15', '189.213.119.73', '2017-09-20');
INSERT INTO `stream_recorded_video_view` VALUES ('272', '3', '15', '189.213.119.73', '2017-09-20');
INSERT INTO `stream_recorded_video_view` VALUES ('273', '1', '15', '189.213.119.73', '2017-09-20');
INSERT INTO `stream_recorded_video_view` VALUES ('274', '7', '15', '189.213.119.73', '2017-09-20');
INSERT INTO `stream_recorded_video_view` VALUES ('275', '7', '15', '189.213.119.73', '2017-09-20');
INSERT INTO `stream_recorded_video_view` VALUES ('276', '7', '15', '187.177.48.235', '2017-09-21');
INSERT INTO `stream_recorded_video_view` VALUES ('277', '1', '15', '187.177.48.235', '2017-09-21');
INSERT INTO `stream_recorded_video_view` VALUES ('278', '3', '15', '187.177.48.235', '2017-09-21');
INSERT INTO `stream_recorded_video_view` VALUES ('279', '3', '15', '187.177.48.235', '2017-09-21');
INSERT INTO `stream_recorded_video_view` VALUES ('280', '1', '15', '47.15.8.86', '2017-09-21');
INSERT INTO `stream_recorded_video_view` VALUES ('281', '1', '15', '117.194.227.181', '2017-09-21');
INSERT INTO `stream_recorded_video_view` VALUES ('282', '1', '15', '117.194.227.181', '2017-09-21');
INSERT INTO `stream_recorded_video_view` VALUES ('283', '8', '15', '117.194.227.181', '2017-09-21');
INSERT INTO `stream_recorded_video_view` VALUES ('284', '7', '15', '189.213.119.73', '2017-09-21');
INSERT INTO `stream_recorded_video_view` VALUES ('285', '1', '15', '189.213.119.73', '2017-09-21');
INSERT INTO `stream_recorded_video_view` VALUES ('286', '7', '15', '189.213.119.73', '2017-09-21');
INSERT INTO `stream_recorded_video_view` VALUES ('287', '1', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('288', '7', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('289', '7', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('290', '7', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('291', '7', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('292', '3', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('293', '7', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('294', '9', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('295', '9', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('296', '1', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('297', '1', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('298', '7', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('299', '9', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('300', '3', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('301', '3', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('302', '3', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('303', '7', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('304', '9', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('305', '9', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('306', '9', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('307', '7', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('308', '8', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('309', '7', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('310', '7', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('311', '1', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('312', '1', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('313', '1', '15', '47.15.5.207', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('314', '9', '15', '189.213.119.73', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('315', '9', '15', '189.213.119.73', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('316', '3', '15', '189.213.119.73', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('317', '9', '15', '189.213.119.73', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('318', '8', '15', '189.213.119.73', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('319', '7', '15', '189.213.119.73', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('320', '9', '15', '189.213.119.73', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('321', '1', '15', '47.15.1.242', '2017-09-22');
INSERT INTO `stream_recorded_video_view` VALUES ('322', '7', '15', '189.210.80.166', '2017-09-30');
INSERT INTO `stream_recorded_video_view` VALUES ('323', '7', '15', '187.177.48.235', '2017-10-06');
INSERT INTO `stream_recorded_video_view` VALUES ('324', '3', '15', '187.177.48.235', '2017-10-06');
INSERT INTO `stream_recorded_video_view` VALUES ('325', '1', '15', '187.177.48.235', '2017-10-06');
INSERT INTO `stream_recorded_video_view` VALUES ('326', '3', '15', '187.177.48.235', '2017-10-06');
INSERT INTO `stream_recorded_video_view` VALUES ('327', '3', '15', '187.177.48.235', '2017-10-06');
INSERT INTO `stream_recorded_video_view` VALUES ('328', '7', '15', '187.177.48.235', '2017-10-06');
INSERT INTO `stream_recorded_video_view` VALUES ('329', '7', '15', '187.177.48.235', '2017-10-06');
INSERT INTO `stream_recorded_video_view` VALUES ('330', '7', '15', '187.177.48.235', '2017-10-06');
INSERT INTO `stream_recorded_video_view` VALUES ('331', '7', '15', '189.213.119.73', '2017-10-09');
INSERT INTO `stream_recorded_video_view` VALUES ('332', '1', '15', '189.213.119.73', '2017-10-09');
INSERT INTO `stream_recorded_video_view` VALUES ('333', '1', '15', '189.213.119.73', '2017-10-09');
INSERT INTO `stream_recorded_video_view` VALUES ('334', '1', '15', '189.213.119.73', '2017-10-09');
INSERT INTO `stream_recorded_video_view` VALUES ('335', '1', '15', '189.213.119.73', '2017-10-09');
INSERT INTO `stream_recorded_video_view` VALUES ('336', '1', '15', '189.213.119.73', '2017-10-09');
INSERT INTO `stream_recorded_video_view` VALUES ('337', '1', '15', '189.213.119.73', '2017-10-09');
INSERT INTO `stream_recorded_video_view` VALUES ('338', '1', '15', '189.213.119.73', '2017-10-10');
INSERT INTO `stream_recorded_video_view` VALUES ('339', '7', '15', '189.213.119.73', '2017-10-11');
INSERT INTO `stream_recorded_video_view` VALUES ('340', '4', '15', '189.207.25.59', '2017-10-13');
INSERT INTO `stream_recorded_video_view` VALUES ('341', '4', '15', '189.207.25.59', '2017-10-13');
INSERT INTO `stream_recorded_video_view` VALUES ('342', '4', '15', '189.207.25.59', '2017-10-13');
INSERT INTO `stream_recorded_video_view` VALUES ('343', '4', '15', '189.207.25.59', '2017-10-13');
INSERT INTO `stream_recorded_video_view` VALUES ('344', '4', '15', '189.207.25.59', '2017-10-13');
INSERT INTO `stream_recorded_video_view` VALUES ('345', '4', '15', '189.213.119.73', '2017-10-13');
INSERT INTO `stream_recorded_video_view` VALUES ('346', '9', '15', '189.213.119.73', '2017-10-13');
INSERT INTO `stream_recorded_video_view` VALUES ('347', '7', '15', '189.213.119.73', '2017-10-13');
INSERT INTO `stream_recorded_video_view` VALUES ('348', '7', '15', '59.97.159.70', '2017-10-14');
INSERT INTO `stream_recorded_video_view` VALUES ('349', '7', '15', '47.15.8.82', '2017-10-14');
INSERT INTO `stream_recorded_video_view` VALUES ('350', '1', '15', '59.97.159.70', '2017-10-14');
INSERT INTO `stream_recorded_video_view` VALUES ('351', '1', '15', '189.213.119.73', '2017-10-16');
INSERT INTO `stream_recorded_video_view` VALUES ('352', '1', '15', '189.213.119.73', '2017-10-16');
INSERT INTO `stream_recorded_video_view` VALUES ('353', '7', '15', '189.213.119.73', '2017-10-16');
INSERT INTO `stream_recorded_video_view` VALUES ('354', '10', '15', '189.213.119.73', '2017-10-16');
INSERT INTO `stream_recorded_video_view` VALUES ('355', '10', '15', '189.213.119.73', '2017-10-16');
INSERT INTO `stream_recorded_video_view` VALUES ('356', '3', '15', '189.213.119.73', '2017-10-16');
INSERT INTO `stream_recorded_video_view` VALUES ('357', '3', '15', '189.213.119.73', '2017-10-16');
INSERT INTO `stream_recorded_video_view` VALUES ('358', '3', '15', '189.213.119.73', '2017-10-18');
INSERT INTO `stream_recorded_video_view` VALUES ('359', '7', '15', '189.213.119.73', '2017-10-18');
INSERT INTO `stream_recorded_video_view` VALUES ('360', '1', '15', '189.213.119.73', '2017-10-18');
INSERT INTO `stream_recorded_video_view` VALUES ('361', '7', '15', '189.213.119.73', '2017-10-18');
INSERT INTO `stream_recorded_video_view` VALUES ('362', '9', '15', '189.213.119.73', '2017-10-18');
INSERT INTO `stream_recorded_video_view` VALUES ('363', '1', '15', '189.213.119.73', '2017-10-18');
INSERT INTO `stream_recorded_video_view` VALUES ('364', '1', '15', '189.213.119.73', '2017-10-19');
INSERT INTO `stream_recorded_video_view` VALUES ('365', '7', '15', '189.213.119.73', '2017-10-19');
INSERT INTO `stream_recorded_video_view` VALUES ('366', '7', '15', '189.213.119.73', '2017-10-19');
INSERT INTO `stream_recorded_video_view` VALUES ('367', '7', '15', '189.213.119.73', '2017-10-19');
INSERT INTO `stream_recorded_video_view` VALUES ('368', '7', '15', '189.213.119.73', '2017-10-20');
INSERT INTO `stream_recorded_video_view` VALUES ('369', '7', '15', '189.213.119.73', '2017-10-20');
INSERT INTO `stream_recorded_video_view` VALUES ('370', '7', '15', '189.213.119.73', '2017-10-20');
INSERT INTO `stream_recorded_video_view` VALUES ('371', '3', '15', '189.207.25.59', '2017-10-21');
INSERT INTO `stream_recorded_video_view` VALUES ('372', '7', '15', '189.213.119.73', '2017-10-21');
INSERT INTO `stream_recorded_video_view` VALUES ('373', '7', '15', '189.213.119.73', '2017-10-21');
INSERT INTO `stream_recorded_video_view` VALUES ('374', '7', '15', '189.213.119.73', '2017-10-21');
INSERT INTO `stream_recorded_video_view` VALUES ('375', '7', '15', '189.213.119.73', '2017-10-21');
INSERT INTO `stream_recorded_video_view` VALUES ('376', '7', '15', '189.213.119.73', '2017-10-21');
INSERT INTO `stream_recorded_video_view` VALUES ('377', '9', '15', '189.207.25.59', '2017-10-21');
INSERT INTO `stream_recorded_video_view` VALUES ('378', '7', '15', '189.207.25.59', '2017-10-21');
INSERT INTO `stream_recorded_video_view` VALUES ('379', '7', '15', '47.15.13.42', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('380', '7', '15', '47.15.13.42', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('381', '7', '15', '47.15.13.42', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('382', '7', '15', '47.15.13.42', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('383', '7', '15', '189.207.25.59', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('384', '7', '15', '189.207.25.59', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('385', '7', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('386', '7', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('387', '7', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('388', '7', '15', '189.207.25.59', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('389', '7', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('390', '7', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('391', '7', '15', '189.207.25.59', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('392', '7', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('393', '7', '15', '189.207.25.59', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('394', '7', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('395', '9', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('396', '4', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('397', '7', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('398', '7', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('399', '7', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('400', '1', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('401', '1', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('402', '9', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('403', '7', '15', '189.207.25.59', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('404', '7', '15', '189.207.25.59', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('405', '9', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('406', '9', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('407', '7', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('408', '10', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('409', '7', '15', '189.207.25.59', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('410', '10', '15', '189.207.25.59', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('411', '10', '15', '189.207.25.59', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('412', '9', '15', '189.207.25.59', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('413', '10', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('414', '10', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('415', '10', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('416', '10', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('417', '10', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('418', '10', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('419', '10', '15', '189.207.25.59', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('420', '10', '15', '189.213.119.73', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('421', '10', '15', '189.210.80.166', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('422', '1', '15', '189.210.80.166', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('423', '1', '15', '189.210.80.166', '2017-10-23');
INSERT INTO `stream_recorded_video_view` VALUES ('424', '7', '15', '47.15.6.148', '2017-10-24');
INSERT INTO `stream_recorded_video_view` VALUES ('425', '3', '15', '47.15.6.148', '2017-10-24');
INSERT INTO `stream_recorded_video_view` VALUES ('426', '3', '15', '47.15.6.148', '2017-10-24');
INSERT INTO `stream_recorded_video_view` VALUES ('427', '3', '15', '47.15.6.148', '2017-10-24');
INSERT INTO `stream_recorded_video_view` VALUES ('428', '10', '15', '189.207.25.59', '2017-10-24');
INSERT INTO `stream_recorded_video_view` VALUES ('429', '9', '15', '189.207.25.59', '2017-10-24');
INSERT INTO `stream_recorded_video_view` VALUES ('430', '10', '15', '189.207.25.59', '2017-10-24');
INSERT INTO `stream_recorded_video_view` VALUES ('431', '9', '15', '189.207.25.59', '2017-10-24');
INSERT INTO `stream_recorded_video_view` VALUES ('432', '1', '15', '189.213.119.73', '2017-10-24');
INSERT INTO `stream_recorded_video_view` VALUES ('433', '1', '15', '189.213.119.73', '2017-10-24');
INSERT INTO `stream_recorded_video_view` VALUES ('434', '1', '15', '189.213.119.73', '2017-10-24');
INSERT INTO `stream_recorded_video_view` VALUES ('435', '1', '15', '189.213.119.73', '2017-10-24');
INSERT INTO `stream_recorded_video_view` VALUES ('436', '1', '15', '189.213.119.73', '2017-10-24');
INSERT INTO `stream_recorded_video_view` VALUES ('437', '10', '15', '189.213.119.73', '2017-10-24');
INSERT INTO `stream_recorded_video_view` VALUES ('438', '7', '15', '47.15.4.67', '2017-10-25');
INSERT INTO `stream_recorded_video_view` VALUES ('439', '7', '15', '47.15.4.67', '2017-10-25');
INSERT INTO `stream_recorded_video_view` VALUES ('440', '1', '15', '47.15.4.67', '2017-10-25');
INSERT INTO `stream_recorded_video_view` VALUES ('441', '1', '15', '47.15.4.67', '2017-10-25');
INSERT INTO `stream_recorded_video_view` VALUES ('442', '1', '15', '47.15.4.67', '2017-10-25');
INSERT INTO `stream_recorded_video_view` VALUES ('443', '9', '15', '189.207.25.59', '2017-10-25');
INSERT INTO `stream_recorded_video_view` VALUES ('444', '9', '15', '189.207.25.59', '2017-10-25');
INSERT INTO `stream_recorded_video_view` VALUES ('445', '9', '15', '189.207.25.59', '2017-10-25');
INSERT INTO `stream_recorded_video_view` VALUES ('446', '7', '15', '59.92.145.198', '2017-10-26');
INSERT INTO `stream_recorded_video_view` VALUES ('447', '7', '15', '59.92.145.198', '2017-10-26');
INSERT INTO `stream_recorded_video_view` VALUES ('448', '7', '15', '59.92.145.198', '2017-10-26');
INSERT INTO `stream_recorded_video_view` VALUES ('449', '10', '15', '189.213.119.73', '2017-10-26');
INSERT INTO `stream_recorded_video_view` VALUES ('450', '10', '15', '189.213.119.73', '2017-10-26');
INSERT INTO `stream_recorded_video_view` VALUES ('451', '3', '15', '189.213.119.73', '2017-10-26');
INSERT INTO `stream_recorded_video_view` VALUES ('452', '4', '15', '47.15.4.41', '2017-10-27');
INSERT INTO `stream_recorded_video_view` VALUES ('453', '7', '15', '47.15.4.41', '2017-10-27');
INSERT INTO `stream_recorded_video_view` VALUES ('454', '1', '15', '47.15.4.41', '2017-10-27');
INSERT INTO `stream_recorded_video_view` VALUES ('455', '3', '15', '189.213.119.73', '2017-10-27');
INSERT INTO `stream_recorded_video_view` VALUES ('456', '9', '15', '189.213.119.73', '2017-10-28');
INSERT INTO `stream_recorded_video_view` VALUES ('457', '1', '15', '189.213.119.73', '2017-10-28');
INSERT INTO `stream_recorded_video_view` VALUES ('458', '1', '15', '189.213.119.73', '2017-10-28');
INSERT INTO `stream_recorded_video_view` VALUES ('459', '1', '15', '189.213.119.73', '2017-10-28');
INSERT INTO `stream_recorded_video_view` VALUES ('460', '7', '15', '189.213.119.73', '2017-10-28');
INSERT INTO `stream_recorded_video_view` VALUES ('461', '7', '15', '189.213.119.73', '2017-10-28');
INSERT INTO `stream_recorded_video_view` VALUES ('462', '1', '15', '189.213.119.73', '2017-10-28');
INSERT INTO `stream_recorded_video_view` VALUES ('463', '10', '15', '189.207.25.59', '2017-10-28');
INSERT INTO `stream_recorded_video_view` VALUES ('464', '7', '15', '189.207.25.59', '2017-10-28');
INSERT INTO `stream_recorded_video_view` VALUES ('465', '7', '15', '189.207.25.59', '2017-10-28');
INSERT INTO `stream_recorded_video_view` VALUES ('466', '10', '15', '::1', '2017-10-28');
INSERT INTO `stream_recorded_video_view` VALUES ('467', '10', '15', '::1', '2017-10-28');
INSERT INTO `stream_recorded_video_view` VALUES ('468', '10', '15', '::1', '2017-10-28');
INSERT INTO `stream_recorded_video_view` VALUES ('469', '1', '15', '187.177.48.235', '2017-10-28');
INSERT INTO `stream_recorded_video_view` VALUES ('470', '1', '15', '187.177.48.235', '2017-10-28');
INSERT INTO `stream_recorded_video_view` VALUES ('471', '3', '15', '187.177.48.235', '2017-10-28');
INSERT INTO `stream_recorded_video_view` VALUES ('472', '10', '15', '::1', '2017-10-28');
INSERT INTO `stream_recorded_video_view` VALUES ('473', '7', '15', '::1', '2017-10-28');
INSERT INTO `stream_recorded_video_view` VALUES ('474', '9', '15', '::1', '2017-10-28');
INSERT INTO `stream_recorded_video_view` VALUES ('475', '9', '15', '::1', '2017-10-28');
INSERT INTO `stream_recorded_video_view` VALUES ('476', '9', '15', '::1', '2017-10-29');
INSERT INTO `stream_recorded_video_view` VALUES ('477', '8', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('478', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('479', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('480', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('481', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('482', '1', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('483', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('484', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('485', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('486', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('487', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('488', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('489', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('490', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('491', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('492', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('493', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('494', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('495', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('496', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('497', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('498', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('499', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('500', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('501', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('502', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('503', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('504', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('505', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('506', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('507', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('508', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('509', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('510', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('511', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('512', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('513', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('514', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('515', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('516', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('517', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('518', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('519', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('520', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('521', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('522', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('523', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('524', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('525', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('526', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('527', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('528', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('529', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('530', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('531', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('532', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('533', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('534', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('535', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('536', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('537', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('538', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('539', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('540', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('541', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('542', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('543', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('544', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('545', '21', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('546', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('547', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('548', '7', '15', '127.0.0.1', '2017-10-31');
INSERT INTO `stream_recorded_video_view` VALUES ('549', '1', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('550', '3', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('551', '8', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('552', '4', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('553', '21', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('554', '9', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('555', '10', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('556', '11', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('557', '7', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('558', '16', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('559', '19', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('560', '20', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('561', '17', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('562', '13', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('563', '12', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('564', '14', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('565', '18', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('566', '15', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('567', '1', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('568', '3', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('569', '8', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('570', '4', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('571', '21', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('572', '9', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('573', '10', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('574', '11', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('575', '20', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('576', '19', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('577', '18', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('578', '17', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('579', '16', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('580', '15', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('581', '14', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('582', '7', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('583', '7', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('584', '7', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('585', '7', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('586', '21', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('587', '7', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('588', '1', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('589', '3', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('590', '8', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('591', '4', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('592', '21', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('593', '9', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('594', '10', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('595', '11', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('596', '20', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('597', '19', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('598', '18', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('599', '17', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('600', '16', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('601', '15', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('602', '14', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('603', '7', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('604', '13', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('605', '12', '15', '127.0.0.1', '2017-11-01');
INSERT INTO `stream_recorded_video_view` VALUES ('606', '19', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('607', '15', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('608', '17', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('609', '9', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('610', '11', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('611', '4', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('612', '16', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('613', '8', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('614', '10', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('615', '20', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('616', '14', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('617', '1', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('618', '3', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('619', '18', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('620', '21', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('621', '7', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('622', '1', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('623', '22', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('624', '22', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('625', '22', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('626', '22', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('627', '22', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('628', '22', '15', '127.0.0.1', '2017-11-02');
INSERT INTO `stream_recorded_video_view` VALUES ('629', '1', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('630', '3', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('631', '8', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('632', '4', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('633', '21', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('634', '9', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('635', '10', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('636', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('637', '20', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('638', '19', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('639', '18', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('640', '17', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('641', '16', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('642', '15', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('643', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('644', '7', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('645', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('646', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('647', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('648', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('649', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('650', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('651', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('652', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('653', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('654', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('655', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('656', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('657', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('658', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('659', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('660', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('661', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('662', '7', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('663', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('664', '7', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('665', '7', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('666', '7', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('667', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('668', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('669', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('670', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('671', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('672', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('673', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('674', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('675', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('676', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('677', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('678', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('679', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('680', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('681', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('682', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('683', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('684', '22', '15', '127.0.0.1', '2017-11-03');
INSERT INTO `stream_recorded_video_view` VALUES ('685', '1', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('686', '3', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('687', '8', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('688', '4', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('689', '21', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('690', '9', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('691', '10', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('692', '16', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('693', '20', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('694', '19', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('695', '18', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('696', '17', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('697', '15', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('698', '14', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('699', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('700', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('701', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('702', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('703', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('704', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('705', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('706', '4', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('707', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('708', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('709', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('710', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('711', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('712', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('713', '8', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('714', '7', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('715', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('716', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('717', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('718', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('719', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('720', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('721', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('722', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('723', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('724', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('725', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('726', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('727', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('728', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('729', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('730', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('731', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('732', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('733', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('734', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('735', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('736', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('737', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('738', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('739', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('740', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('741', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('742', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('743', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('744', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('745', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('746', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('747', '22', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('748', '23', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('749', '23', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('750', '23', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('751', '23', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('752', '23', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('753', '23', '15', '127.0.0.1', '2017-11-04');
INSERT INTO `stream_recorded_video_view` VALUES ('754', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('755', '7', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('756', '1', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('757', '3', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('758', '22', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('759', '8', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('760', '4', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('761', '21', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('762', '9', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('763', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('764', '20', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('765', '19', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('766', '18', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('767', '17', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('768', '16', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('769', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('770', '13', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('771', '1', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('772', '1', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('773', '1', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('774', '7', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('775', '12', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('776', '9', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('777', '7', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('778', '7', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('779', '7', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('780', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('781', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('782', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('783', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('784', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('785', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('786', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('787', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('788', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('789', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('790', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('791', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('792', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('793', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('794', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('795', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('796', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('797', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('798', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('799', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('800', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('801', '17', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('802', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('803', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('804', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('805', '23', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('806', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('807', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('808', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('809', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('810', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('811', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('812', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('813', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('814', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('815', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('816', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('817', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('818', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('819', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('820', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('821', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('822', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('823', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('824', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('825', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('826', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('827', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('828', '24', '15', '127.0.0.1', '2017-11-05');
INSERT INTO `stream_recorded_video_view` VALUES ('829', '7', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('830', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('831', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('832', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('833', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('834', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('835', '23', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('836', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('837', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('838', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('839', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('840', '23', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('841', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('842', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('843', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('844', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('845', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('846', '7', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('847', '1', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('848', '3', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('849', '22', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('850', '8', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('851', '4', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('852', '21', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('853', '9', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('854', '20', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('855', '19', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('856', '18', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('857', '17', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('858', '16', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('859', '15', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('860', '26', '61', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('861', '26', '61', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('862', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('863', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('864', '26', '61', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('865', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('866', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('867', '26', '61', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('868', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('869', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('870', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('871', '27', '63', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('872', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('873', '27', '63', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('874', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('875', '27', '63', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('876', '27', '63', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('877', '27', '63', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('878', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('879', '27', '63', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('880', '27', '63', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('881', '27', '63', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('882', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('883', '27', '63', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('884', '27', '63', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('885', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('886', '27', '63', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('887', '27', '63', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('888', '21', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('889', '21', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('890', '27', '63', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('891', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('892', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('893', '19', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('894', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('895', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('896', '21', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('897', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('898', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('899', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('900', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('901', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('902', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('903', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('904', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('905', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('906', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('907', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('908', '24', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('909', '29', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('910', '29', '15', '127.0.0.1', '2017-11-06');
INSERT INTO `stream_recorded_video_view` VALUES ('911', '17', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('912', '22', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('913', '7', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('914', '1', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('915', '3', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('916', '24', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('917', '8', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('918', '4', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('919', '21', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('920', '24', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('921', '29', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('922', '29', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('923', '24', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('924', '29', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('925', '29', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('926', '29', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('927', '29', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('928', '29', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('929', '24', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('930', '29', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('931', '29', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('932', '29', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('933', '24', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('934', '31', '63', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('935', '24', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('936', '32', '63', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('937', '27', '63', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('938', '24', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('939', '27', '63', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('940', '27', '63', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('941', '27', '63', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('942', '24', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('943', '27', '63', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('944', '33', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('945', '33', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('946', '33', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('947', '33', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('948', '24', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('949', '32', '63', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('950', '32', '63', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('951', '32', '63', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('952', '32', '63', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('953', '34', '63', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('954', '20', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('955', '8', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('956', '21', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('957', '23', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('958', '9', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('959', '22', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('960', '20', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('961', '22', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('962', '22', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('963', '33', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('964', '33', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('965', '26', '61', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('966', '29', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('967', '26', '61', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('968', '26', '61', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('969', '23', '15', '127.0.0.1', '2017-11-07');
INSERT INTO `stream_recorded_video_view` VALUES ('970', '24', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('971', '24', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('972', '23', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('973', '23', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('974', '23', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('975', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('976', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('977', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('978', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('979', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('980', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('981', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('982', '1', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('983', '15', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('984', '26', '61', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('985', '3', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('986', '3', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('987', '3', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('988', '3', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('989', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('990', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('991', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('992', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('993', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('994', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('995', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('996', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('997', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('998', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('999', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('1000', '27', '63', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('1001', '27', '63', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('1002', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('1003', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('1004', '27', '63', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('1005', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('1006', '22', '15', '127.0.0.1', '2017-11-08');
INSERT INTO `stream_recorded_video_view` VALUES ('1007', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1008', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1009', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1010', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1011', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1012', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1013', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1014', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1015', '1', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1016', '1', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1017', '1', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1018', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1019', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1020', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1021', '24', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1022', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1023', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1024', '1', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1025', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1026', '24', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1027', '32', '63', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1028', '19', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1029', '31', '63', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1030', '21', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1031', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1032', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1033', '1', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1034', '1', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1035', '1', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1036', '1', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1037', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1038', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1039', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1040', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1041', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1042', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1043', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1044', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1045', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1046', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1047', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1048', '33', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1049', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1050', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1051', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1052', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1053', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1054', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1055', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1056', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1057', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1058', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1059', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1060', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1061', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1062', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1063', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1064', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1065', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1066', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1067', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1068', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1069', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1070', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1071', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1072', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1073', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1074', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1075', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1076', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1077', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1078', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1079', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1080', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1081', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1082', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1083', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1084', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1085', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1086', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1087', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1088', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1089', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1090', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1091', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1092', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1093', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1094', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1095', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1096', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1097', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1098', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1099', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1100', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1101', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1102', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1103', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1104', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1105', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1106', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1107', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1108', '23', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1109', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1110', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1111', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1112', '19', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1113', '1', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1114', '7', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1115', '3', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1116', '24', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1117', '8', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1118', '4', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1119', '21', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1120', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1121', '27', '63', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1122', '31', '63', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1123', '26', '61', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1124', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1125', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1126', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1127', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1128', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1129', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1130', '22', '15', '127.0.0.1', '2017-11-09');
INSERT INTO `stream_recorded_video_view` VALUES ('1131', '9', '15', '127.0.0.1', '2017-11-10');
INSERT INTO `stream_recorded_video_view` VALUES ('1132', '22', '15', '127.0.0.1', '2017-11-10');
INSERT INTO `stream_recorded_video_view` VALUES ('1133', '22', '15', '127.0.0.1', '2017-11-10');
INSERT INTO `stream_recorded_video_view` VALUES ('1134', '26', '61', '127.0.0.1', '2017-11-10');
INSERT INTO `stream_recorded_video_view` VALUES ('1135', '22', '15', '127.0.0.1', '2017-11-10');
INSERT INTO `stream_recorded_video_view` VALUES ('1136', '22', '15', '127.0.0.1', '2017-11-10');
INSERT INTO `stream_recorded_video_view` VALUES ('1137', '22', '15', '127.0.0.1', '2017-11-10');
INSERT INTO `stream_recorded_video_view` VALUES ('1138', '22', '15', '127.0.0.1', '2017-11-10');
INSERT INTO `stream_recorded_video_view` VALUES ('1139', '22', '15', '127.0.0.1', '2017-11-10');
INSERT INTO `stream_recorded_video_view` VALUES ('1140', '22', '15', '127.0.0.1', '2017-11-10');
INSERT INTO `stream_recorded_video_view` VALUES ('1141', '22', '15', '127.0.0.1', '2017-11-10');
INSERT INTO `stream_recorded_video_view` VALUES ('1142', '22', '15', '127.0.0.1', '2017-11-10');
INSERT INTO `stream_recorded_video_view` VALUES ('1143', '22', '15', '127.0.0.1', '2017-11-10');
INSERT INTO `stream_recorded_video_view` VALUES ('1144', '33', '15', '127.0.0.1', '2017-11-10');
INSERT INTO `stream_recorded_video_view` VALUES ('1145', '7', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1146', '22', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1147', '1', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1148', '3', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1149', '24', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1150', '8', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1151', '4', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1152', '21', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1153', '32', '63', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1154', '31', '63', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1155', '29', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1156', '20', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1157', '19', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1158', '33', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1159', '34', '63', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1160', '23', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1161', '26', '61', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1162', '27', '63', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1163', '9', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1164', '10', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1165', '17', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1166', '16', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1167', '18', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1168', '15', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1169', '14', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1170', '11', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1171', '13', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1172', '12', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1173', '28', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1174', '27', '63', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1175', '33', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1176', '22', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1177', '34', '63', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1178', '27', '63', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1179', '27', '63', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1180', '7', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1181', '27', '63', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1182', '22', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1183', '22', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1184', '1', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1185', '7', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1186', '1', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1187', '24', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1188', '7', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1189', '34', '63', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1190', '31', '63', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1191', '29', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1192', '4', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1193', '26', '61', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1194', '22', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1195', '7', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1196', '7', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1197', '7', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1198', '22', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1199', '1', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1200', '3', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1201', '24', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1202', '8', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1203', '4', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1204', '21', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1205', '32', '63', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1206', '31', '63', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1207', '29', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1208', '20', '15', '127.0.0.1', '2017-11-11');
INSERT INTO `stream_recorded_video_view` VALUES ('1209', '27', '63', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1210', '33', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1211', '27', '63', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1212', '27', '63', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1213', '33', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1214', '34', '63', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1215', '33', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1216', '33', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1217', '24', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1218', '33', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1219', '33', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1220', '24', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1221', '33', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1222', '24', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1223', '33', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1224', '7', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1225', '22', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1226', '1', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1227', '3', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1228', '24', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1229', '8', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1230', '4', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1231', '21', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1232', '32', '63', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1233', '31', '63', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1234', '29', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1235', '28', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1236', '20', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1237', '7', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1238', '22', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1239', '1', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1240', '3', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1241', '24', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1242', '8', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1243', '4', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1244', '21', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1245', '32', '63', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1246', '31', '63', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1247', '29', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1248', '28', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1249', '20', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1250', '33', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1251', '34', '63', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1252', '23', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1253', '26', '61', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1254', '27', '63', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1255', '9', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1256', '10', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1257', '19', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1258', '17', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1259', '16', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1260', '18', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1261', '15', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1262', '14', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1263', '11', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1264', '13', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1265', '12', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1266', '20', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1267', '22', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1268', '7', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1269', '1', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1270', '3', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1271', '24', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1272', '8', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1273', '4', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1274', '21', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1275', '20', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1276', '22', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1277', '1', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1278', '7', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1279', '3', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1280', '24', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1281', '8', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1282', '21', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1283', '4', '15', '127.0.0.1', '2017-11-12');
INSERT INTO `stream_recorded_video_view` VALUES ('1284', '33', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1285', '7', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1286', '22', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1287', '1', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1288', '3', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1289', '24', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1290', '8', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1291', '4', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1292', '21', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1293', '32', '63', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1294', '31', '63', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1295', '29', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1296', '28', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1297', '20', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1298', '7', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1299', '22', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1300', '1', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1301', '3', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1302', '24', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1303', '8', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1304', '4', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1305', '21', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1306', '32', '63', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1307', '31', '63', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1308', '29', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1309', '28', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1310', '20', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1311', '7', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1312', '22', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1313', '1', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1314', '3', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1315', '24', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1316', '8', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1317', '4', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1318', '21', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1319', '32', '63', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1320', '31', '63', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1321', '29', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1322', '20', '15', '127.0.0.1', '2017-11-13');
INSERT INTO `stream_recorded_video_view` VALUES ('1323', '24', '15', '127.0.0.1', '2017-11-14');
INSERT INTO `stream_recorded_video_view` VALUES ('1324', '7', '15', '127.0.0.1', '2017-11-15');
INSERT INTO `stream_recorded_video_view` VALUES ('1325', '22', '15', '127.0.0.1', '2017-11-15');
INSERT INTO `stream_recorded_video_view` VALUES ('1326', '1', '15', '127.0.0.1', '2017-11-15');
INSERT INTO `stream_recorded_video_view` VALUES ('1327', '3', '15', '127.0.0.1', '2017-11-15');
INSERT INTO `stream_recorded_video_view` VALUES ('1328', '24', '15', '127.0.0.1', '2017-11-15');
INSERT INTO `stream_recorded_video_view` VALUES ('1329', '8', '15', '127.0.0.1', '2017-11-15');
INSERT INTO `stream_recorded_video_view` VALUES ('1330', '4', '15', '127.0.0.1', '2017-11-15');
INSERT INTO `stream_recorded_video_view` VALUES ('1331', '21', '15', '127.0.0.1', '2017-11-15');
INSERT INTO `stream_recorded_video_view` VALUES ('1332', '32', '63', '127.0.0.1', '2017-11-15');
INSERT INTO `stream_recorded_video_view` VALUES ('1333', '31', '63', '127.0.0.1', '2017-11-15');
INSERT INTO `stream_recorded_video_view` VALUES ('1334', '29', '15', '127.0.0.1', '2017-11-15');
INSERT INTO `stream_recorded_video_view` VALUES ('1335', '28', '15', '127.0.0.1', '2017-11-15');
INSERT INTO `stream_recorded_video_view` VALUES ('1336', '20', '15', '127.0.0.1', '2017-11-15');
INSERT INTO `stream_recorded_video_view` VALUES ('1337', '18', '15', '127.0.0.1', '2017-11-15');
INSERT INTO `stream_recorded_video_view` VALUES ('1338', '33', '15', '127.0.0.1', '2017-11-15');
INSERT INTO `stream_recorded_video_view` VALUES ('1339', '33', '15', '127.0.0.1', '2017-11-15');
INSERT INTO `stream_recorded_video_view` VALUES ('1340', '34', '63', '127.0.0.1', '2017-11-15');
INSERT INTO `stream_recorded_video_view` VALUES ('1341', '29', '15', '127.0.0.1', '2017-11-15');
INSERT INTO `stream_recorded_video_view` VALUES ('1342', '27', '63', '127.0.0.1', '2017-11-15');
INSERT INTO `stream_recorded_video_view` VALUES ('1343', '24', '15', '127.0.0.1', '2017-11-16');
INSERT INTO `stream_recorded_video_view` VALUES ('1344', '24', '15', '127.0.0.1', '2017-11-16');
INSERT INTO `stream_recorded_video_view` VALUES ('1345', '24', '15', '127.0.0.1', '2017-11-16');
INSERT INTO `stream_recorded_video_view` VALUES ('1346', '24', '15', '127.0.0.1', '2017-11-16');
INSERT INTO `stream_recorded_video_view` VALUES ('1347', '24', '15', '127.0.0.1', '2017-11-16');
INSERT INTO `stream_recorded_video_view` VALUES ('1348', '24', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1349', '24', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1350', '22', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1351', '7', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1352', '26', '61', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1353', '32', '63', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1354', '7', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1355', '24', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1356', '4', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1357', '8', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1358', '29', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1359', '20', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1360', '3', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1361', '1', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1362', '31', '63', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1363', '21', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1364', '22', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1365', '28', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1366', '32', '63', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1367', '7', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1368', '24', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1369', '4', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1370', '8', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1371', '29', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1372', '20', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1373', '3', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1374', '1', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1375', '32', '63', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1376', '7', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1377', '4', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1378', '24', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1379', '8', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1380', '29', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1381', '20', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1382', '3', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1383', '1', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1384', '31', '63', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1385', '21', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1386', '22', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1387', '28', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1388', '21', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1389', '32', '63', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1390', '7', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1391', '4', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1392', '24', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1393', '8', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1394', '29', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1395', '20', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1396', '3', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1397', '1', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1398', '31', '63', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1399', '28', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1400', '22', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1401', '24', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1402', '34', '63', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1403', '22', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1404', '24', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1405', '34', '63', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1406', '1', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1407', '32', '63', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1408', '22', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1409', '1', '15', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1410', '32', '63', '127.0.0.1', '2017-11-17');
INSERT INTO `stream_recorded_video_view` VALUES ('1411', '32', '63', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1412', '7', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1413', '24', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1414', '29', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1415', '31', '63', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1416', '23', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1417', '35', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1418', '22', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1419', '22', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1420', '35', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1421', '35', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1422', '35', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1423', '35', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1424', '35', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1425', '23', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1426', '33', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1427', '33', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1428', '22', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1429', '32', '63', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1430', '7', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1431', '24', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1432', '4', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1433', '8', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1434', '29', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1435', '1', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1436', '3', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1437', '33', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1438', '31', '63', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1439', '21', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1440', '22', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1441', '28', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1442', '35', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1443', '32', '63', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1444', '7', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1445', '24', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1446', '4', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1447', '8', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1448', '29', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1449', '1', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1450', '3', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1451', '31', '63', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1452', '33', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1453', '21', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1454', '22', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1455', '28', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1456', '35', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1457', '32', '63', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1458', '7', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1459', '24', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1460', '4', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1461', '8', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1462', '29', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1463', '1', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1464', '3', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1465', '31', '63', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1466', '33', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1467', '21', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1468', '22', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1469', '28', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1470', '35', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1471', '32', '63', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1472', '7', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1473', '24', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1474', '4', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1475', '8', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1476', '29', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1477', '3', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1478', '1', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1479', '33', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1480', '31', '63', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1481', '21', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1482', '22', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1483', '28', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1484', '35', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1485', '32', '63', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1486', '7', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1487', '24', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1488', '4', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1489', '8', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1490', '29', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1491', '1', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1492', '3', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1493', '33', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1494', '31', '63', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1495', '21', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1496', '22', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1497', '28', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1498', '35', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1499', '33', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1500', '35', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1501', '32', '63', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1502', '7', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1503', '24', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1504', '4', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1505', '8', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1506', '29', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1507', '1', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1508', '3', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1509', '31', '63', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1510', '33', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1511', '21', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1512', '28', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1513', '22', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1514', '35', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1515', '7', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1516', '22', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1517', '1', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1518', '3', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1519', '24', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1520', '8', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1521', '4', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1522', '21', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1523', '35', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1524', '33', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1525', '32', '63', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1526', '31', '63', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1527', '29', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1528', '28', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1529', '7', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1530', '22', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1531', '31', '63', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1532', '32', '63', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1533', '3', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1534', '35', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1535', '7', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1536', '29', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1537', '11', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1538', '21', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1539', '19', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1540', '35', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1541', '35', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1542', '32', '63', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1543', '33', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1544', '31', '63', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1545', '21', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1546', '29', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1547', '28', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1548', '24', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1549', '1', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1550', '8', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1551', '4', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1552', '35', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1553', '22', '15', '127.0.0.1', '2017-11-18');
INSERT INTO `stream_recorded_video_view` VALUES ('1554', '31', '63', '127.0.0.1', '2017-11-19');
INSERT INTO `stream_recorded_video_view` VALUES ('1555', '21', '15', '127.0.0.1', '2017-11-19');
INSERT INTO `stream_recorded_video_view` VALUES ('1556', '22', '15', '127.0.0.1', '2017-11-19');
INSERT INTO `stream_recorded_video_view` VALUES ('1557', '28', '15', '127.0.0.1', '2017-11-19');
INSERT INTO `stream_recorded_video_view` VALUES ('1558', '7', '15', '127.0.0.1', '2017-11-19');
INSERT INTO `stream_recorded_video_view` VALUES ('1559', '33', '15', '127.0.0.1', '2017-11-19');
INSERT INTO `stream_recorded_video_view` VALUES ('1560', '24', '15', '127.0.0.1', '2017-11-19');
INSERT INTO `stream_recorded_video_view` VALUES ('1561', '22', '15', '127.0.0.1', '2017-11-19');
INSERT INTO `stream_recorded_video_view` VALUES ('1562', '31', '63', '127.0.0.1', '2017-11-19');
INSERT INTO `stream_recorded_video_view` VALUES ('1563', '3', '15', '127.0.0.1', '2017-11-19');
INSERT INTO `stream_recorded_video_view` VALUES ('1564', '21', '15', '127.0.0.1', '2017-11-19');
INSERT INTO `stream_recorded_video_view` VALUES ('1565', '22', '15', '127.0.0.1', '2017-11-19');
INSERT INTO `stream_recorded_video_view` VALUES ('1566', '28', '15', '127.0.0.1', '2017-11-19');
INSERT INTO `stream_recorded_video_view` VALUES ('1567', '29', '15', '127.0.0.1', '2017-11-19');
INSERT INTO `stream_recorded_video_view` VALUES ('1568', '32', '63', '127.0.0.1', '2017-11-19');
INSERT INTO `stream_recorded_video_view` VALUES ('1569', '8', '15', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1570', '1', '15', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1571', '4', '15', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1572', '35', '15', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1573', '7', '15', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1574', '22', '15', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1575', '1', '15', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1576', '3', '15', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1577', '24', '15', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1578', '8', '15', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1579', '4', '15', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1580', '21', '15', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1581', '35', '15', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1582', '33', '15', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1583', '32', '63', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1584', '31', '63', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1585', '29', '15', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1586', '28', '15', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1587', '35', '15', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1588', '33', '15', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1589', '32', '63', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1590', '4', '15', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1591', '33', '15', '127.0.0.1', '2017-11-20');
INSERT INTO `stream_recorded_video_view` VALUES ('1592', '8', '15', '127.0.0.1', '2017-11-21');
INSERT INTO `stream_recorded_video_view` VALUES ('1593', '35', '15', '127.0.0.1', '2017-11-21');
INSERT INTO `stream_recorded_video_view` VALUES ('1594', '8', '15', '127.0.0.1', '2017-11-21');
INSERT INTO `stream_recorded_video_view` VALUES ('1595', '8', '15', '127.0.0.1', '2017-11-23');
INSERT INTO `stream_recorded_video_view` VALUES ('1596', '32', '63', '127.0.0.1', '2017-11-23');
INSERT INTO `stream_recorded_video_view` VALUES ('1597', '24', '15', '127.0.0.1', '2017-11-23');
INSERT INTO `stream_recorded_video_view` VALUES ('1598', '7', '15', '127.0.0.1', '2017-11-23');
INSERT INTO `stream_recorded_video_view` VALUES ('1599', '29', '15', '127.0.0.1', '2017-11-23');
INSERT INTO `stream_recorded_video_view` VALUES ('1600', '4', '15', '127.0.0.1', '2017-11-23');
INSERT INTO `stream_recorded_video_view` VALUES ('1601', '1', '15', '127.0.0.1', '2017-11-23');
INSERT INTO `stream_recorded_video_view` VALUES ('1602', '3', '15', '127.0.0.1', '2017-11-23');
INSERT INTO `stream_recorded_video_view` VALUES ('1603', '31', '63', '127.0.0.1', '2017-11-23');
INSERT INTO `stream_recorded_video_view` VALUES ('1604', '33', '15', '127.0.0.1', '2017-11-23');
INSERT INTO `stream_recorded_video_view` VALUES ('1605', '22', '15', '127.0.0.1', '2017-11-23');
INSERT INTO `stream_recorded_video_view` VALUES ('1606', '28', '15', '127.0.0.1', '2017-11-23');
INSERT INTO `stream_recorded_video_view` VALUES ('1607', '21', '15', '127.0.0.1', '2017-11-23');
INSERT INTO `stream_recorded_video_view` VALUES ('1608', '35', '15', '127.0.0.1', '2017-11-23');
INSERT INTO `stream_recorded_video_view` VALUES ('1609', '32', '63', '127.0.0.1', '2017-11-23');
INSERT INTO `stream_recorded_video_view` VALUES ('1610', '24', '15', '127.0.0.1', '2017-11-23');
INSERT INTO `stream_recorded_video_view` VALUES ('1611', '7', '15', '127.0.0.1', '2017-11-23');
INSERT INTO `stream_recorded_video_view` VALUES ('1612', '29', '15', '127.0.0.1', '2017-11-23');
INSERT INTO `stream_recorded_video_view` VALUES ('1613', '8', '15', '127.0.0.1', '2017-11-23');
INSERT INTO `stream_recorded_video_view` VALUES ('1614', '4', '15', '127.0.0.1', '2017-11-23');
INSERT INTO `stream_recorded_video_view` VALUES ('1615', '32', '63', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1616', '7', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1617', '24', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1618', '4', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1619', '8', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1620', '7', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1621', '22', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1622', '1', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1623', '3', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1624', '24', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1625', '8', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1626', '4', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1627', '21', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1628', '35', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1629', '33', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1630', '32', '63', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1631', '31', '63', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1632', '29', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1633', '28', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1634', '29', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1635', '20', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1636', '3', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1637', '1', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1638', '31', '63', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1639', '21', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1640', '22', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1641', '28', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1642', '24', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1643', '35', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1644', '24', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1645', '27', '63', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1646', '27', '63', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1647', '27', '63', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1648', '27', '63', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1649', '27', '63', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1650', '27', '63', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1651', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1652', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1653', '24', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1654', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1655', '24', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1656', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1657', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1658', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1659', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1660', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1661', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1662', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1663', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1664', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1665', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1666', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1667', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1668', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1669', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1670', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1671', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1672', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1673', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1674', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1675', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1676', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1677', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1678', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1679', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1680', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1681', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1682', '24', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1683', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1684', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1685', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1686', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1687', '24', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1688', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1689', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1690', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1691', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1692', '36', '15', '127.0.0.1', '2017-11-24');
INSERT INTO `stream_recorded_video_view` VALUES ('1693', '20', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1694', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1695', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1696', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1697', '36', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1698', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1699', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1700', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1701', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1702', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1703', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1704', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1705', '34', '63', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1706', '34', '63', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1707', '23', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1708', '23', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1709', '33', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1710', '34', '63', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1711', '34', '63', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1712', '34', '63', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1713', '34', '63', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1714', '34', '63', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1715', '34', '63', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1716', '34', '63', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1717', '34', '63', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1718', '34', '63', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1719', '34', '63', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1720', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1721', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1722', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1723', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1724', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1725', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1726', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1727', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1728', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1729', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1730', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1731', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1732', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1733', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1734', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1735', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1736', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1737', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1738', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1739', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1740', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1741', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1742', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1743', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1744', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1745', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1746', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1747', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1748', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1749', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1750', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1751', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1752', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1753', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1754', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1755', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1756', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1757', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1758', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1759', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1760', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1761', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1762', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1763', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1764', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1765', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1766', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1767', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1768', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1769', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1770', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1771', '36', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1772', '36', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1773', '24', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1774', '24', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1775', '36', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1776', '23', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1777', '36', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1778', '40', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1779', '36', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1780', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1781', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1782', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1783', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1784', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1785', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1786', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1787', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1788', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1789', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1790', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1791', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1792', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1793', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1794', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1795', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1796', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1797', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1798', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1799', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1800', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1801', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1802', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1803', '39', '15', '127.0.0.1', '2017-11-25');
INSERT INTO `stream_recorded_video_view` VALUES ('1804', '39', '15', '127.0.0.1', '2017-11-26');
INSERT INTO `stream_recorded_video_view` VALUES ('1805', '40', '15', '127.0.0.1', '2017-11-26');
INSERT INTO `stream_recorded_video_view` VALUES ('1806', '36', '15', '127.0.0.1', '2017-11-26');
INSERT INTO `stream_recorded_video_view` VALUES ('1807', '33', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1808', '7', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1809', '22', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1810', '1', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1811', '3', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1812', '24', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1813', '8', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1814', '4', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1815', '21', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1816', '40', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1817', '36', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1818', '35', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1819', '33', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1820', '32', '63', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1821', '31', '63', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1822', '29', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1823', '28', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1824', '36', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1825', '32', '63', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1826', '7', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1827', '24', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1828', '4', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1829', '8', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1830', '40', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1831', '29', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1832', '1', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1833', '3', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1834', '31', '63', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1835', '21', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1836', '36', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1837', '28', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1838', '22', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1839', '35', '15', '127.0.0.1', '2017-11-27');
INSERT INTO `stream_recorded_video_view` VALUES ('1840', '34', '63', '127.0.0.1', '2017-11-28');
INSERT INTO `stream_recorded_video_view` VALUES ('1841', '34', '63', '127.0.0.1', '2017-11-28');
INSERT INTO `stream_recorded_video_view` VALUES ('1842', '7', '15', '127.0.0.1', '2017-11-28');
INSERT INTO `stream_recorded_video_view` VALUES ('1843', '22', '15', '127.0.0.1', '2017-11-28');
INSERT INTO `stream_recorded_video_view` VALUES ('1844', '1', '15', '127.0.0.1', '2017-11-28');
INSERT INTO `stream_recorded_video_view` VALUES ('1845', '3', '15', '127.0.0.1', '2017-11-28');
INSERT INTO `stream_recorded_video_view` VALUES ('1846', '24', '15', '127.0.0.1', '2017-11-28');
INSERT INTO `stream_recorded_video_view` VALUES ('1847', '8', '15', '127.0.0.1', '2017-11-28');
INSERT INTO `stream_recorded_video_view` VALUES ('1848', '4', '15', '127.0.0.1', '2017-11-28');
INSERT INTO `stream_recorded_video_view` VALUES ('1849', '21', '15', '127.0.0.1', '2017-11-28');
INSERT INTO `stream_recorded_video_view` VALUES ('1850', '40', '15', '127.0.0.1', '2017-11-28');
INSERT INTO `stream_recorded_video_view` VALUES ('1851', '36', '15', '127.0.0.1', '2017-11-28');
INSERT INTO `stream_recorded_video_view` VALUES ('1852', '35', '15', '127.0.0.1', '2017-11-28');
INSERT INTO `stream_recorded_video_view` VALUES ('1853', '33', '15', '127.0.0.1', '2017-11-28');
INSERT INTO `stream_recorded_video_view` VALUES ('1854', '32', '63', '127.0.0.1', '2017-11-28');
INSERT INTO `stream_recorded_video_view` VALUES ('1855', '31', '63', '127.0.0.1', '2017-11-28');
INSERT INTO `stream_recorded_video_view` VALUES ('1856', '29', '15', '127.0.0.1', '2017-11-28');
INSERT INTO `stream_recorded_video_view` VALUES ('1857', '28', '15', '127.0.0.1', '2017-11-28');
INSERT INTO `stream_recorded_video_view` VALUES ('1858', '7', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1859', '22', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1860', '1', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1861', '3', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1862', '24', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1863', '8', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1864', '4', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1865', '21', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1866', '40', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1867', '36', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1868', '35', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1869', '33', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1870', '32', '63', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1871', '31', '63', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1872', '29', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1873', '28', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1874', '40', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1875', '8', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1876', '1', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1877', '7', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1878', '24', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1879', '29', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1880', '21', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1881', '31', '63', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1882', '4', '15', '127.0.0.1', '2017-11-29');
INSERT INTO `stream_recorded_video_view` VALUES ('1883', '7', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1884', '3', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1885', '28', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1886', '36', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1887', '22', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1888', '1', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1889', '24', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1890', '39', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1891', '23', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1892', '23', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1893', '23', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1894', '36', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1895', '40', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1896', '8', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1897', '22', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1898', '7', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1899', '35', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1900', '35', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1901', '35', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1902', '35', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1903', '35', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1904', '35', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1905', '35', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1906', '35', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1907', '35', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1908', '35', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1909', '35', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1910', '35', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1911', '35', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1912', '35', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1913', '35', '15', '127.0.0.1', '2017-11-30');
INSERT INTO `stream_recorded_video_view` VALUES ('1914', '24', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1915', '43', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1916', '44', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1917', '44', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1918', '44', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1919', '44', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1920', '7', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1921', '22', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1922', '1', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1923', '3', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1924', '24', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1925', '8', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1926', '4', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1927', '21', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1928', '44', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1929', '43', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1930', '40', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1931', '36', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1932', '35', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1933', '33', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1934', '32', '63', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1935', '31', '63', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1936', '7', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1937', '22', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1938', '1', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1939', '3', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1940', '24', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1941', '8', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1942', '4', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1943', '21', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1944', '44', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1945', '43', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1946', '40', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1947', '36', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1948', '35', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1949', '33', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1950', '32', '63', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1951', '31', '63', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1952', '8', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1953', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1954', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1955', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1956', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1957', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1958', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1959', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1960', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1961', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1962', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1963', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1964', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1965', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1966', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1967', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1968', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1969', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1970', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1971', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1972', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1973', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1974', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1975', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1976', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1977', '23', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1978', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1979', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1980', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1981', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1982', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1983', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1984', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1985', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1986', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1987', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1988', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1989', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1990', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1991', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1992', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1993', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1994', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1995', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1996', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1997', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1998', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('1999', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2000', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2001', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2002', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2003', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2004', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2005', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2006', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2007', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2008', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2009', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2010', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2011', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2012', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2013', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2014', '7', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2015', '22', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2016', '1', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2017', '3', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2018', '24', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2019', '8', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2020', '4', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2021', '21', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2022', '44', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2023', '43', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2024', '40', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2025', '36', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2026', '35', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2027', '33', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2028', '32', '63', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2029', '31', '63', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2030', '39', '15', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2031', '42', '67', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2032', '42', '67', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2033', '42', '67', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2034', '42', '67', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2035', '42', '67', '127.0.0.1', '2017-12-02');
INSERT INTO `stream_recorded_video_view` VALUES ('2036', '24', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2037', '24', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2038', '24', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2039', '24', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2040', '45', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2041', '45', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2042', '45', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2043', '45', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2044', '46', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2045', '43', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2046', '46', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2047', '42', '67', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2048', '40', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2049', '45', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2050', '36', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2051', '44', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2052', '40', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2053', '46', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2054', '42', '67', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2055', '45', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2056', '43', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2057', '36', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2058', '44', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2059', '32', '63', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2060', '45', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2061', '46', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2062', '42', '67', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2063', '40', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2064', '43', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2065', '36', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2066', '44', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2067', '45', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2068', '46', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2069', '42', '67', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2070', '40', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2071', '36', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2072', '43', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2073', '44', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2074', '24', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2075', '24', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2076', '24', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2077', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2078', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2079', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2080', '24', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2081', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2082', '24', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2083', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2084', '24', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2085', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2086', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2087', '24', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2088', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2089', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2090', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2091', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2092', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2093', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2094', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2095', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2096', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2097', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2098', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2099', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2100', '45', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2101', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2102', '48', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2103', '48', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2104', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2105', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2106', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2107', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2108', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2109', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2110', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2111', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2112', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2113', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2114', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2115', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2116', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2117', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2118', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2119', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2120', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2121', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2122', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2123', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2124', '45', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2125', '45', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2126', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2127', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2128', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2129', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2130', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2131', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2132', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2133', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2134', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2135', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2136', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2137', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2138', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2139', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2140', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2141', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2142', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2143', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2144', '24', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2145', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2146', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2147', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2148', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2149', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2150', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2151', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2152', '36', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2153', '46', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2154', '42', '67', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2155', '40', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2156', '45', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2157', '48', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2158', '43', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2159', '44', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2160', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2161', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2162', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2163', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2164', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2165', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2166', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2167', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2168', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2169', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2170', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2171', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2172', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2173', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2174', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2175', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2176', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2177', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2178', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2179', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2180', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2181', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2182', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2183', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2184', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2185', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2186', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2187', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2188', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2189', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2190', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2191', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2192', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2193', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2194', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2195', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2196', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2197', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2198', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2199', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2200', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2201', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2202', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2203', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2204', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2205', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2206', '45', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2207', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2208', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2209', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2210', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2211', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2212', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2213', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2214', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2215', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2216', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2217', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2218', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2219', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2220', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2221', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2222', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2223', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2224', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2225', '7', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2226', '22', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2227', '1', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2228', '24', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2229', '3', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2230', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2231', '8', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2232', '4', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2233', '48', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2234', '46', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2235', '45', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2236', '44', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2237', '43', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2238', '42', '67', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2239', '40', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2240', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2241', '48', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2242', '48', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2243', '44', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2244', '48', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2245', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2246', '24', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2247', '49', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2248', '49', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2249', '50', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2250', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2251', '48', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2252', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2253', '51', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2254', '7', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2255', '22', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2256', '1', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2257', '24', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2258', '3', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2259', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2260', '8', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2261', '4', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2262', '51', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2263', '50', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2264', '49', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2265', '48', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2266', '46', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2267', '45', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2268', '44', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2269', '53', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2270', '24', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2271', '54', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2272', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2273', '54', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2274', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2275', '24', '15', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2276', '55', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2277', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2278', '55', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2279', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2280', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2281', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2282', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2283', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2284', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2285', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2286', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2287', '47', '69', '127.0.0.1', '2017-12-03');
INSERT INTO `stream_recorded_video_view` VALUES ('2288', '48', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2289', '48', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2290', '47', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2291', '47', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2292', '47', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2293', '47', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2294', '47', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2295', '47', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2296', '47', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2297', '47', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2298', '55', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2299', '47', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2300', '7', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2301', '22', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2302', '1', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2303', '24', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2304', '47', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2305', '3', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2306', '8', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2307', '4', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2308', '55', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2309', '54', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2310', '53', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2311', '51', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2312', '50', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2313', '49', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2314', '48', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2315', '7', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2316', '22', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2317', '1', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2318', '24', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2319', '47', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2320', '3', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2321', '8', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2322', '4', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2323', '55', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2324', '54', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2325', '53', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2326', '51', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2327', '50', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2328', '49', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2329', '48', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2330', '31', '63', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2331', '47', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2332', '47', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2333', '47', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2334', '47', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2335', '47', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2336', '47', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2337', '24', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2338', '55', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2339', '55', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2340', '24', '15', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2341', '55', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2342', '55', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2343', '55', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2344', '47', '69', '127.0.0.1', '2017-12-04');
INSERT INTO `stream_recorded_video_view` VALUES ('2345', '55', '69', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2346', '55', '69', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2347', '54', '69', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2348', '47', '69', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2349', '47', '69', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2350', '47', '69', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2351', '7', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2352', '22', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2353', '1', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2354', '47', '69', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2355', '24', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2356', '3', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2357', '8', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2358', '4', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2359', '55', '69', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2360', '54', '69', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2361', '53', '69', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2362', '51', '69', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2363', '50', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2364', '49', '69', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2365', '48', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2366', '39', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2367', '35', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2368', '42', '67', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2369', '38', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2370', '41', '67', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2371', '36', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2372', '33', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2373', '32', '63', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2374', '31', '63', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2375', '34', '63', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2376', '40', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2377', '44', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2378', '43', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2379', '23', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2380', '26', '61', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2381', '27', '63', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2382', '21', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2383', '29', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2384', '9', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2385', '10', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2386', '28', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2387', '20', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2388', '19', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2389', '17', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2390', '18', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2391', '16', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2392', '15', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2393', '11', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2394', '14', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2395', '13', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2396', '12', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2397', '37', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2398', '45', '69', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2399', '46', '69', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2400', '52', '69', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2401', '47', '69', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2402', '40', '15', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2403', '47', '69', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2404', '47', '69', '127.0.0.1', '2017-12-05');
INSERT INTO `stream_recorded_video_view` VALUES ('2405', '7', '15', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2406', '46', '69', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2407', '47', '69', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2408', '47', '69', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2409', '47', '69', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2410', '31', '63', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2411', '48', '15', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2412', '50', '15', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2413', '51', '69', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2414', '49', '69', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2415', '53', '69', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2416', '47', '69', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2417', '28', '15', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2418', '32', '63', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2419', '1', '15', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2420', '33', '15', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2421', '4', '15', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2422', '35', '15', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2423', '8', '15', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2424', '55', '69', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2425', '34', '63', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2426', '31', '63', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2427', '32', '63', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2428', '32', '63', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2429', '32', '63', '127.0.0.1', '2017-12-06');
INSERT INTO `stream_recorded_video_view` VALUES ('2430', '47', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2431', '47', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2432', '55', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2433', '40', '15', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2434', '47', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2435', '49', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2436', '47', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2437', '51', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2438', '54', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2439', '55', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2440', '48', '15', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2441', '54', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2442', '55', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2443', '49', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2444', '52', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2445', '51', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2446', '47', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2447', '53', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2448', '7', '15', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2449', '33', '15', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2450', '24', '15', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2451', '50', '15', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2452', '31', '63', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2453', '3', '15', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2454', '21', '15', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2455', '29', '15', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2456', '35', '15', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2457', '50', '15', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2458', '50', '15', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2459', '48', '15', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2460', '54', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2461', '55', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2462', '49', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2463', '53', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2464', '52', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2465', '51', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2466', '47', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2467', '48', '15', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2468', '48', '15', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2469', '54', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2470', '55', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2471', '49', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2472', '52', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2473', '51', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2474', '47', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2475', '53', '69', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2476', '50', '15', '127.0.0.1', '2017-12-07');
INSERT INTO `stream_recorded_video_view` VALUES ('2477', '53', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2478', '7', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2479', '22', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2480', '47', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2481', '1', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2482', '24', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2483', '3', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2484', '8', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2485', '4', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2486', '55', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2487', '54', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2488', '53', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2489', '52', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2490', '51', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2491', '50', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2492', '49', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2493', '48', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2494', '55', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2495', '48', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2496', '54', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2497', '49', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2498', '51', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2499', '47', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2500', '53', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2501', '52', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2502', '50', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2503', '48', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2504', '54', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2505', '55', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2506', '49', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2507', '47', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2508', '51', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2509', '53', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2510', '52', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2511', '50', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2512', '32', '63', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2513', '47', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2514', '55', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2515', '48', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2516', '54', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2517', '49', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2518', '53', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2519', '52', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2520', '47', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2521', '51', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2522', '50', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2523', '55', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2524', '48', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2525', '54', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2526', '49', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2527', '53', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2528', '51', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2529', '47', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2530', '52', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2531', '50', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2532', '48', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2533', '54', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2534', '55', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2535', '49', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2536', '53', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2537', '52', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2538', '47', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2539', '51', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2540', '50', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2541', '47', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2542', '48', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2543', '54', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2544', '55', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2545', '49', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2546', '53', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2547', '52', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2548', '47', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2549', '51', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2550', '50', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2551', '47', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2552', '54', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2553', '55', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2554', '49', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2555', '52', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2556', '53', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2557', '51', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2558', '50', '15', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2559', '55', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2560', '47', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2561', '55', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2562', '55', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2563', '32', '63', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2564', '55', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2565', '32', '63', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2566', '55', '69', '127.0.0.1', '2017-12-08');
INSERT INTO `stream_recorded_video_view` VALUES ('2567', '7', '15', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2568', '22', '15', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2569', '47', '69', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2570', '1', '15', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2571', '24', '15', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2572', '3', '15', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2573', '8', '15', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2574', '4', '15', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2575', '55', '69', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2576', '54', '69', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2577', '53', '69', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2578', '52', '69', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2579', '51', '69', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2580', '50', '15', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2581', '49', '69', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2582', '48', '15', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2583', '54', '69', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2584', '52', '69', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2585', '50', '15', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2586', '55', '69', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2587', '51', '69', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2588', '55', '69', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2589', '55', '69', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2590', '55', '69', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2591', '55', '69', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2592', '49', '69', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2593', '53', '69', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2594', '47', '69', '127.0.0.1', '2017-12-09');
INSERT INTO `stream_recorded_video_view` VALUES ('2595', '55', '69', '127.0.0.1', '2017-12-10');
INSERT INTO `stream_recorded_video_view` VALUES ('2596', '48', '15', '127.0.0.1', '2017-12-10');
INSERT INTO `stream_recorded_video_view` VALUES ('2597', '39', '15', '127.0.0.1', '2017-12-10');
INSERT INTO `stream_recorded_video_view` VALUES ('2598', '52', '69', '127.0.0.1', '2017-12-10');
INSERT INTO `stream_recorded_video_view` VALUES ('2599', '55', '69', '127.0.0.1', '2017-12-10');
INSERT INTO `stream_recorded_video_view` VALUES ('2600', '48', '15', '127.0.0.1', '2017-12-10');
INSERT INTO `stream_recorded_video_view` VALUES ('2601', '47', '69', '127.0.0.1', '2017-12-10');
INSERT INTO `stream_recorded_video_view` VALUES ('2602', '24', '15', '127.0.0.1', '2017-12-10');
INSERT INTO `stream_recorded_video_view` VALUES ('2603', '7', '15', '127.0.0.1', '2017-12-10');
INSERT INTO `stream_recorded_video_view` VALUES ('2604', '4', '15', '127.0.0.1', '2017-12-10');
INSERT INTO `stream_recorded_video_view` VALUES ('2605', '8', '15', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2606', '52', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2607', '1', '15', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2608', '3', '15', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2609', '48', '15', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2610', '49', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2611', '52', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2612', '51', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2613', '53', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2614', '47', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2615', '50', '15', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2616', '54', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2617', '55', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2618', '22', '15', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2619', '7', '15', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2620', '22', '15', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2621', '47', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2622', '1', '15', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2623', '24', '15', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2624', '3', '15', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2625', '8', '15', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2626', '4', '15', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2627', '55', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2628', '54', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2629', '53', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2630', '52', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2631', '51', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2632', '50', '15', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2633', '49', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2634', '48', '15', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2635', '49', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2636', '52', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2637', '51', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2638', '47', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2639', '53', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2640', '50', '15', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2641', '55', '69', '127.0.0.1', '2017-12-11');
INSERT INTO `stream_recorded_video_view` VALUES ('2642', '7', '15', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2643', '22', '15', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2644', '47', '69', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2645', '1', '15', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2646', '24', '15', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2647', '3', '15', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2648', '8', '15', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2649', '4', '15', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2650', '55', '69', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2651', '54', '69', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2652', '53', '69', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2653', '52', '69', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2654', '51', '69', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2655', '50', '15', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2656', '49', '69', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2657', '48', '15', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2658', '47', '69', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2659', '49', '69', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2660', '51', '69', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2661', '7', '15', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2662', '22', '15', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2663', '39', '15', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2664', '39', '15', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2665', '39', '15', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2666', '55', '69', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2667', '55', '69', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2668', '55', '69', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2669', '48', '15', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2670', '55', '69', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2671', '48', '15', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2672', '55', '69', '127.0.0.1', '2017-12-12');
INSERT INTO `stream_recorded_video_view` VALUES ('2673', '55', '69', '127.0.0.1', '2017-12-13');
INSERT INTO `stream_recorded_video_view` VALUES ('2674', '48', '15', '127.0.0.1', '2017-12-13');
INSERT INTO `stream_recorded_video_view` VALUES ('2675', '48', '15', '127.0.0.1', '2017-12-13');
INSERT INTO `stream_recorded_video_view` VALUES ('2676', '55', '69', '127.0.0.1', '2017-12-13');
INSERT INTO `stream_recorded_video_view` VALUES ('2677', '55', '69', '127.0.0.1', '2017-12-13');
INSERT INTO `stream_recorded_video_view` VALUES ('2678', '55', '69', '127.0.0.1', '2017-12-13');
INSERT INTO `stream_recorded_video_view` VALUES ('2679', '55', '69', '127.0.0.1', '2017-12-13');
INSERT INTO `stream_recorded_video_view` VALUES ('2680', '55', '69', '127.0.0.1', '2017-12-13');
INSERT INTO `stream_recorded_video_view` VALUES ('2681', '48', '15', '127.0.0.1', '2017-12-13');
INSERT INTO `stream_recorded_video_view` VALUES ('2682', '48', '15', '127.0.0.1', '2017-12-13');
INSERT INTO `stream_recorded_video_view` VALUES ('2683', '48', '15', '127.0.0.1', '2017-12-13');
INSERT INTO `stream_recorded_video_view` VALUES ('2684', '55', '69', '127.0.0.1', '2017-12-13');
INSERT INTO `stream_recorded_video_view` VALUES ('2685', '55', '69', '127.0.0.1', '2017-12-13');
INSERT INTO `stream_recorded_video_view` VALUES ('2686', '55', '69', '127.0.0.1', '2017-12-14');
INSERT INTO `stream_recorded_video_view` VALUES ('2687', '55', '69', '127.0.0.1', '2017-12-14');
INSERT INTO `stream_recorded_video_view` VALUES ('2688', '55', '69', '127.0.0.1', '2017-12-14');
INSERT INTO `stream_recorded_video_view` VALUES ('2689', '55', '69', '127.0.0.1', '2017-12-14');
INSERT INTO `stream_recorded_video_view` VALUES ('2690', '55', '69', '127.0.0.1', '2017-12-14');
INSERT INTO `stream_recorded_video_view` VALUES ('2691', '48', '15', '127.0.0.1', '2017-12-14');
INSERT INTO `stream_recorded_video_view` VALUES ('2692', '48', '15', '127.0.0.1', '2017-12-14');

-- ----------------------------
-- Table structure for stream_schedule
-- ----------------------------
DROP TABLE IF EXISTS `stream_schedule`;
CREATE TABLE `stream_schedule` (
  `schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `duration` int(3) NOT NULL,
  `intro_text` varchar(255) NOT NULL,
  `artist_id` int(11) NOT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_schedule
-- ----------------------------
INSERT INTO `stream_schedule` VALUES ('20', '2017-07-14', '1', '1', '1', '0');
INSERT INTO `stream_schedule` VALUES ('39', '2017-07-20', 'sdfsd122', '0', 'dsfsdfsd11', '16');
INSERT INTO `stream_schedule` VALUES ('40', '2017-07-14', '16:30', '2', 'this is a ver good video', '34');
INSERT INTO `stream_schedule` VALUES ('41', '2017-09-22', '04:30', '20', 'Want to share about toys', '15');
INSERT INTO `stream_schedule` VALUES ('42', '2017-09-28', '04:00', '40', 'Discuss about how to save earth', '15');
INSERT INTO `stream_schedule` VALUES ('43', '2017-09-21', '02:00 AM', '50', 'Save water', '15');
INSERT INTO `stream_schedule` VALUES ('45', '2017-09-26', '11:00 AM', '50', 'zzzzzzzz', '57');
INSERT INTO `stream_schedule` VALUES ('46', '2017-09-26', '11:00 PM', '80', '', '57');
INSERT INTO `stream_schedule` VALUES ('48', '2017-09-15', '07:30 AM', '30', 'Early moring show', '15');
INSERT INTO `stream_schedule` VALUES ('49', '2017-10-15', '11:00 AM', '45', 'Breakfast Stream', '15');
INSERT INTO `stream_schedule` VALUES ('50', '2017-10-28', '03:00 PM', '3', 'Forest life', '15');
INSERT INTO `stream_schedule` VALUES ('51', '2017-10-27', '08:00 AM', '30', 'Barbara online', '15');

-- ----------------------------
-- Table structure for stream_setting
-- ----------------------------
DROP TABLE IF EXISTS `stream_setting`;
CREATE TABLE `stream_setting` (
  `setting_id` int(11) NOT NULL AUTO_INCREMENT,
  `setting_key` text NOT NULL,
  `setting_value` text NOT NULL,
  PRIMARY KEY (`setting_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_setting
-- ----------------------------
INSERT INTO `stream_setting` VALUES ('1', 'google link', 'https://plus.google.com/u/0/b/103223340704127134943/dashboard/overview');
INSERT INTO `stream_setting` VALUES ('2', 'facebook link', 'https://www.facebook.com/');
INSERT INTO `stream_setting` VALUES ('7', 'map location', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3226.5813962584957!2d-115.21775179999997!3d36.03051430000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8c8eb5cb34333%3A0x9a57d3a43f3a8a57!2s8765+Lindell+Rd+%23150%2C+Las+Vegas%2C+NV+89139!5e0!3m2!1sen!2sus!4v1427781219241\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\"></iframe>');
INSERT INTO `stream_setting` VALUES ('9', 'First Phone Number', '8765 Lindell Rd #150<br />Las Vegas, NV 89139');
INSERT INTO `stream_setting` VALUES ('10', 'contact_no', '702-650-5494');
INSERT INTO `stream_setting` VALUES ('24', 'form_email', 'donotreply@kpfiles.com');
INSERT INTO `stream_setting` VALUES ('25', 'admin_email', 'hello@gmail.com');
INSERT INTO `stream_setting` VALUES ('26', 'youtube_link', 'https://www.youtube.com/');
INSERT INTO `stream_setting` VALUES ('27', 'yelp_link', 'https://www.yelp.com');
INSERT INTO `stream_setting` VALUES ('37', 'twitter_link', 'https://twitter.com/');
INSERT INTO `stream_setting` VALUES ('38', 'linkedin_link', 'https://in.linkedin.com/');
INSERT INTO `stream_setting` VALUES ('39', 'admin_commission_%', '5');
INSERT INTO `stream_setting` VALUES ('40', 'subscription_price_$', '10');
INSERT INTO `stream_setting` VALUES ('41', 'paypal_commission_%', '2');
INSERT INTO `stream_setting` VALUES ('42', 'paypal_email', 'fcanavati@gmail.com');
INSERT INTO `stream_setting` VALUES ('43', 'business_id', 'fcanavati@gmail.com');

-- ----------------------------
-- Table structure for stream_slider
-- ----------------------------
DROP TABLE IF EXISTS `stream_slider`;
CREATE TABLE `stream_slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_name` varchar(255) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `slider_video` varchar(255) NOT NULL,
  `slider_overview` varchar(255) NOT NULL,
  `slider_link` varchar(255) NOT NULL,
  `slider_status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_slider
-- ----------------------------
INSERT INTO `stream_slider` VALUES ('10', 'blank', '1512869586_white.jpg', '', 'blank', 'aaaa', 'Active');

-- ----------------------------
-- Table structure for stream_temp_payment
-- ----------------------------
DROP TABLE IF EXISTS `stream_temp_payment`;
CREATE TABLE `stream_temp_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_no` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `admin_charge` double(7,2) NOT NULL,
  `artist_charge` double(7,2) NOT NULL,
  `total_amount` double(7,2) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_temp_payment
-- ----------------------------
INSERT INTO `stream_temp_payment` VALUES ('1', 'Stream_1499408496', '1', '15', '3', '2.75', '52.25', '55.00', '');
INSERT INTO `stream_temp_payment` VALUES ('2', 'Stream_1499408815', '1', '15', '2', '27722.20', '99999.99', '99999.99', '');
INSERT INTO `stream_temp_payment` VALUES ('3', 'Stream_1499412816', '0', '15', '2', '27722.20', '99999.99', '99999.99', '');
INSERT INTO `stream_temp_payment` VALUES ('4', 'Stream_1499436533', '0', '15', '3', '2.75', '52.25', '55.00', '');
INSERT INTO `stream_temp_payment` VALUES ('5', 'Stream_1499776910', '0', '15', '1', '3.00', '57.00', '60.00', '');
INSERT INTO `stream_temp_payment` VALUES ('6', 'Stream_1501149354', '1', '15', '7', '0.20', '3.80', '4.08', 'Streaming Video');
INSERT INTO `stream_temp_payment` VALUES ('7', 'Stream_1501152394', '1', '15', '8', '0.20', '3.80', '4.08', 'Recorded Video');
INSERT INTO `stream_temp_payment` VALUES ('8', 'Stream_1501152752', '1', '15', '7', '0.20', '3.80', '4.08', 'Streaming Video');
INSERT INTO `stream_temp_payment` VALUES ('9', 'Stream_1501154504', '1', '15', '7', '0.20', '3.80', '4.08', 'Streaming Video');
INSERT INTO `stream_temp_payment` VALUES ('10', 'Stream_1501154515', '1', '15', '7', '0.20', '3.80', '4.08', 'Streaming Video');
INSERT INTO `stream_temp_payment` VALUES ('12', 'Stream_1501194975', '1', '15', '8', '0.20', '3.80', '4.08', 'Recorded Video');
INSERT INTO `stream_temp_payment` VALUES ('13', 'Stream_1501195284', '1', '15', '8', '0.20', '3.80', '4.08', 'Recorded Video');
INSERT INTO `stream_temp_payment` VALUES ('14', 'Stream_1501195295', '1', '15', '4', '0.20', '3.80', '4.08', 'Recorded Video');
INSERT INTO `stream_temp_payment` VALUES ('15', 'Stream_1501195564', '1', '15', '8', '0.20', '3.80', '4.08', 'Recorded Video');
INSERT INTO `stream_temp_payment` VALUES ('16', 'Stream_1501515626', '3', '15', '7', '0.20', '3.80', '4.08', 'Streaming Video');
INSERT INTO `stream_temp_payment` VALUES ('17', 'Stream_1501515758', '3', '15', '7', '0.00', '0.00', '0.00', 'Streaming Video');
INSERT INTO `stream_temp_payment` VALUES ('18', 'Stream_1501578398', '3', '15', '7', '0.00', '0.00', '0.00', 'Streaming Video');
INSERT INTO `stream_temp_payment` VALUES ('19', 'Stream_1501578420', '3', '15', '7', '0.00', '0.00', '0.00', 'Streaming Video');
INSERT INTO `stream_temp_payment` VALUES ('20', 'Stream_1503942334', '3', '15', '7', '0.50', '9.50', '10.20', 'Streaming Video');
INSERT INTO `stream_temp_payment` VALUES ('21', 'Stream_1503942517', '3', '15', '7', '0.50', '9.50', '10.20', 'Streaming Video');
INSERT INTO `stream_temp_payment` VALUES ('22', 'Stream_1504004540', '12', '15', '7', '0.50', '9.50', '10.20', 'Streaming Video');
INSERT INTO `stream_temp_payment` VALUES ('23', 'Stream_1504712938', '12', '15', '0', '0.60', '11.40', '12.24', 'tips');
INSERT INTO `stream_temp_payment` VALUES ('24', 'Stream_1504721619', '0', '15', '0', '0.05', '0.95', '1.02', 'tips');
INSERT INTO `stream_temp_payment` VALUES ('25', 'Stream_1504721633', '0', '15', '0', '0.05', '0.95', '1.02', 'tips');
INSERT INTO `stream_temp_payment` VALUES ('26', 'Stream_1504744727', '1', '15', '0', '0.50', '9.50', '10.20', 'tips');
INSERT INTO `stream_temp_payment` VALUES ('27', 'Stream_1504955191', '0', '15', '0', '0.75', '14.25', '15.30', 'tips');
INSERT INTO `stream_temp_payment` VALUES ('28', 'Stream_1505214224', '0', '15', '3', '0.75', '14.25', '15.30', 'tips');
INSERT INTO `stream_temp_payment` VALUES ('29', 'Stream_1505214339', '12', '15', '1', '0.10', '1.90', '2.04', 'Recorded Video');
INSERT INTO `stream_temp_payment` VALUES ('30', 'Stream_1505214368', '12', '15', '7', '0.05', '0.95', '1.02', 'Streaming Video');
INSERT INTO `stream_temp_payment` VALUES ('31', 'Stream_1505215429', '12', '15', '7', '0.05', '0.95', '1.02', 'Streaming Video');
INSERT INTO `stream_temp_payment` VALUES ('32', 'Stream_1505215480', '12', '15', '1', '0.10', '1.90', '2.04', 'Recorded Video');
INSERT INTO `stream_temp_payment` VALUES ('33', 'Stream_1505341645', '1', '15', '1', '0.50', '9.50', '10.20', 'tips');
INSERT INTO `stream_temp_payment` VALUES ('34', 'Stream_1505861621', '0', '15', '3', '5.00', '95.00', '102.00', 'tips');
INSERT INTO `stream_temp_payment` VALUES ('35', 'Stream_1507337651', '1', '15', '3', '0.60', '11.40', '12.24', 'tips');
INSERT INTO `stream_temp_payment` VALUES ('36', 'Stream_1507569226', '1', '0', '1', '0.50', '9.50', '10.20', 'tips');
INSERT INTO `stream_temp_payment` VALUES ('37', 'Stream_1511556877', '26', '15', '0', '5000.00', '95000.00', '99999.99', 'tips');
INSERT INTO `stream_temp_payment` VALUES ('38', 'Stream_1513192572', '28', '15', '48', '30.00', '570.00', '612.00', 'tips');
INSERT INTO `stream_temp_payment` VALUES ('39', 'Stream_1513192576', '28', '15', '48', '30.00', '570.00', '612.00', 'tips');
INSERT INTO `stream_temp_payment` VALUES ('40', 'Stream_1513192595', '28', '15', '48', '2.50', '47.50', '51.00', 'tips');
INSERT INTO `stream_temp_payment` VALUES ('41', 'Stream_1513192902', '28', '15', '48', '0.50', '9.50', '10.20', 'tips');
INSERT INTO `stream_temp_payment` VALUES ('42', 'Stream_1513195909', '28', '15', '48', '0.50', '9.50', '10.20', 'tips');
INSERT INTO `stream_temp_payment` VALUES ('43', 'Stream_1513199045', '28', '15', '0', '0.50', '9.50', '10.20', 'tips');

-- ----------------------------
-- Table structure for stream_timeline
-- ----------------------------
DROP TABLE IF EXISTS `stream_timeline`;
CREATE TABLE `stream_timeline` (
  `timeline_id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `upload_id` int(11) NOT NULL,
  `post_type` enum('Image','Video') NOT NULL,
  PRIMARY KEY (`timeline_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_timeline
-- ----------------------------
INSERT INTO `stream_timeline` VALUES ('1', '15', '1', '95', 'Image');
INSERT INTO `stream_timeline` VALUES ('2', '15', '0', '95', 'Image');
INSERT INTO `stream_timeline` VALUES ('3', '15', '0', '95', 'Image');
INSERT INTO `stream_timeline` VALUES ('4', '15', '1', '95', 'Image');
INSERT INTO `stream_timeline` VALUES ('5', '15', '1', '95', 'Image');
INSERT INTO `stream_timeline` VALUES ('6', '15', '1', '95', 'Image');

-- ----------------------------
-- Table structure for stream_user
-- ----------------------------
DROP TABLE IF EXISTS `stream_user`;
CREATE TABLE `stream_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_status` enum('Active','Inactive','Pending') NOT NULL,
  `forgot_password_id` varchar(255) NOT NULL,
  `activation_id` varchar(255) NOT NULL,
  `register_date` datetime NOT NULL,
  `login_date` datetime NOT NULL,
  `subscription` enum('Free','Premium') NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_user
-- ----------------------------
INSERT INTO `stream_user` VALUES ('1', 'F', 'Kate', 'fcanavati@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2016-03-07', 'agdadgsgasdgasdg', 'gfdhdgh', 'hfgdhdfg', 'ghdghdg', '9876543210', '1498808869_Chrysanthemum.jpg', 'Active', '', 'fcc1b96c62c28de149057507ce455c1a', '2017-06-19 17:52:29', '0000-00-00 00:00:00', '');
INSERT INTO `stream_user` VALUES ('3', 'Tom', 'Tom111', 't@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '0000-00-00', 'ggsg', 'TX', '1215', 'Laredo', '865945464', '1501515479_Dirt_Bike.jpg', 'Active', '', '1a4797fdddd0d2b6e252aaf27d3c47ce', '2017-06-24 19:17:56', '0000-00-00 00:00:00', '');
INSERT INTO `stream_user` VALUES ('13', 'Franklin3', 'Frank', 'fcanavati@gmail.com', '1c592e3481c4df3b64a4dd38fae38280', '0000-00-00', 'LocationX', 'TX', '78041', 'Laredo', '123', '', 'Active', '', '104e13e25201c6bf5d9d0bb461cd6d63', '2017-09-07 04:24:27', '0000-00-00 00:00:00', '');
INSERT INTO `stream_user` VALUES ('26', 'Gabriel Guerra', 'DubG', 'dublgsd@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '0000-00-00', '', '', '', '', '', '', 'Active', '', '9981891f2335c3717997a191241ecf2c', '2017-11-06 00:09:58', '0000-00-00 00:00:00', 'Free');
INSERT INTO `stream_user` VALUES ('27', 'Zach Kent', 'Xman', 'Zachariha@gmail.com', '84ccbff3890d86732275a4eb196b38aa', '0000-00-00', '', '', '', '', '', '', 'Pending', '', 'fd154f59614ef8c2520885149edc2a01', '2017-11-25 02:19:22', '0000-00-00 00:00:00', 'Free');
INSERT INTO `stream_user` VALUES ('28', 'jesus marinos', 'portacos@gmail.com', 'portacos@gmail.com', 'ae10b4cf7e010a1529e9284a05f56c79', '0000-00-00', '', '', '', '', '', '', 'Active', '', '0501d7150cdfee6e233817ba80235be4', '2017-12-13 05:08:25', '0000-00-00 00:00:00', 'Free');

-- ----------------------------
-- Table structure for stream_video_admin
-- ----------------------------
DROP TABLE IF EXISTS `stream_video_admin`;
CREATE TABLE `stream_video_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `overview` text NOT NULL,
  `video` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_video_admin
-- ----------------------------
INSERT INTO `stream_video_admin` VALUES ('7', 'Stream Until Your Dream Comes True', '<p>Founded in 2017, <strong>StreamAct</strong>&nbsp; is a direct to fan computer and phone app that caters to the performer. The platform offers the opportunity for any kind of musical talent, independent or up-and-coming artist to showcase their talent. Be it live at home or on stage Artists have the ability to gain exposure worldwide. This gives them the ability to make fans and make money with Steamact. Best of all it&#39;s free</p>\n', '15018451171498488653_Snowball.mp4', 'Active');

-- ----------------------------
-- Table structure for stream_video_view
-- ----------------------------
DROP TABLE IF EXISTS `stream_video_view`;
CREATE TABLE `stream_video_view` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stream_video_view
-- ----------------------------
INSERT INTO `stream_video_view` VALUES ('1', '1', '15', '::1', '2017-06-29');
INSERT INTO `stream_video_view` VALUES ('2', '2', '15', '::1', '2017-06-29');
INSERT INTO `stream_video_view` VALUES ('3', '3', '15', '::1', '2017-06-29');
INSERT INTO `stream_video_view` VALUES ('4', '32', '15', '::1', '2017-06-29');
INSERT INTO `stream_video_view` VALUES ('5', '27', '15', '::1', '2017-06-29');
INSERT INTO `stream_video_view` VALUES ('6', '25', '15', '::1', '2017-06-29');
INSERT INTO `stream_video_view` VALUES ('7', '20', '15', '::1', '2017-06-29');
INSERT INTO `stream_video_view` VALUES ('8', '14', '15', '::1', '2017-06-29');
INSERT INTO `stream_video_view` VALUES ('9', '35', '15', '::1', '2017-06-29');
INSERT INTO `stream_video_view` VALUES ('10', '34', '15', '::1', '2017-06-29');
INSERT INTO `stream_video_view` VALUES ('11', '35', '15', '::1', '2017-06-30');
INSERT INTO `stream_video_view` VALUES ('12', '7', '15', '::1', '2017-06-29');
INSERT INTO `stream_video_view` VALUES ('13', '6', '15', '::1', '2017-06-29');
INSERT INTO `stream_video_view` VALUES ('14', '12', '15', '::1', '2017-06-29');
INSERT INTO `stream_video_view` VALUES ('15', '20', '15', '::1', '2017-06-30');
INSERT INTO `stream_video_view` VALUES ('16', '20', '15', '::1', '2017-07-04');
INSERT INTO `stream_video_view` VALUES ('17', '20', '15', '::1', '2017-07-05');
INSERT INTO `stream_video_view` VALUES ('18', '19', '15', '::1', '2017-07-05');
INSERT INTO `stream_video_view` VALUES ('19', '27', '15', '::1', '2017-07-05');
INSERT INTO `stream_video_view` VALUES ('20', '6', '15', '::1', '2017-07-05');
INSERT INTO `stream_video_view` VALUES ('21', '12', '15', '::1', '2017-07-05');
INSERT INTO `stream_video_view` VALUES ('22', '34', '15', '::1', '2017-07-05');
INSERT INTO `stream_video_view` VALUES ('23', '35', '15', '::1', '2017-07-05');
INSERT INTO `stream_video_view` VALUES ('24', '20', '15', '::1', '2017-07-11');
INSERT INTO `stream_video_view` VALUES ('25', '35', '15', '59.97.159.208', '2017-07-19');
INSERT INTO `stream_video_view` VALUES ('26', '35', '15', '189.213.119.73', '2017-07-19');
INSERT INTO `stream_video_view` VALUES ('27', '6', '15', '189.213.119.73', '2017-07-19');
INSERT INTO `stream_video_view` VALUES ('28', '34', '15', '117.194.228.87', '2017-07-20');
INSERT INTO `stream_video_view` VALUES ('29', '1', '15', '117.194.228.87', '2017-07-20');
INSERT INTO `stream_video_view` VALUES ('30', '2', '15', '117.194.228.87', '2017-07-20');
INSERT INTO `stream_video_view` VALUES ('31', '35', '15', '117.194.228.87', '2017-07-20');
INSERT INTO `stream_video_view` VALUES ('32', '6', '15', '117.194.228.87', '2017-07-20');
INSERT INTO `stream_video_view` VALUES ('33', '20', '15', '187.177.48.62', '2017-07-20');
INSERT INTO `stream_video_view` VALUES ('34', '6', '15', '187.177.48.62', '2017-07-20');
INSERT INTO `stream_video_view` VALUES ('35', '35', '15', '189.213.119.73', '2017-07-20');
INSERT INTO `stream_video_view` VALUES ('36', '35', '15', '12.31.235.99', '2017-07-21');
INSERT INTO `stream_video_view` VALUES ('37', '20', '15', '12.31.235.99', '2017-07-21');
INSERT INTO `stream_video_view` VALUES ('38', '6', '15', '12.31.235.99', '2017-07-21');
INSERT INTO `stream_video_view` VALUES ('39', '34', '15', '189.213.119.73', '2017-07-25');
INSERT INTO `stream_video_view` VALUES ('40', '6', '15', '117.194.31.230', '2017-07-26');
INSERT INTO `stream_video_view` VALUES ('41', '6', '15', '47.15.14.15', '2017-07-26');
INSERT INTO `stream_video_view` VALUES ('42', '20', '15', '47.15.14.15', '2017-07-26');
INSERT INTO `stream_video_view` VALUES ('43', '34', '15', '47.15.14.15', '2017-07-26');
INSERT INTO `stream_video_view` VALUES ('44', '27', '15', '47.15.14.15', '2017-07-26');
INSERT INTO `stream_video_view` VALUES ('45', '6', '15', '66.102.6.168', '2017-07-26');
INSERT INTO `stream_video_view` VALUES ('46', '6', '15', '66.102.6.170', '2017-07-26');
INSERT INTO `stream_video_view` VALUES ('47', '6', '15', '117.194.229.38', '2017-07-27');
INSERT INTO `stream_video_view` VALUES ('48', '20', '15', '117.194.229.38', '2017-07-27');
INSERT INTO `stream_video_view` VALUES ('49', '34', '15', '117.194.229.38', '2017-07-27');
INSERT INTO `stream_video_view` VALUES ('50', '20', '15', '189.213.119.73', '2017-07-27');
INSERT INTO `stream_video_view` VALUES ('51', '34', '15', '189.213.119.73', '2017-07-27');
INSERT INTO `stream_video_view` VALUES ('52', '20', '15', '189.213.119.73', '2017-07-28');
INSERT INTO `stream_video_view` VALUES ('53', '6', '15', '189.213.119.73', '2017-08-02');
INSERT INTO `stream_video_view` VALUES ('54', '6', '15', '117.194.228.7', '2017-08-03');
INSERT INTO `stream_video_view` VALUES ('55', '20', '15', '117.194.228.7', '2017-08-03');
INSERT INTO `stream_video_view` VALUES ('56', '27', '15', '117.194.228.7', '2017-08-03');
INSERT INTO `stream_video_view` VALUES ('57', '12', '15', '117.194.228.7', '2017-08-03');
INSERT INTO `stream_video_view` VALUES ('58', '34', '15', '117.194.228.7', '2017-08-03');
INSERT INTO `stream_video_view` VALUES ('59', '32', '15', '117.194.228.7', '2017-08-03');
INSERT INTO `stream_video_view` VALUES ('60', '25', '15', '117.194.228.7', '2017-08-03');
INSERT INTO `stream_video_view` VALUES ('61', '14', '15', '117.194.228.7', '2017-08-03');
INSERT INTO `stream_video_view` VALUES ('62', '6', '15', '117.194.239.185', '2017-08-04');
INSERT INTO `stream_video_view` VALUES ('63', '20', '15', '117.194.239.185', '2017-08-04');
INSERT INTO `stream_video_view` VALUES ('64', '34', '15', '117.194.239.185', '2017-08-04');
INSERT INTO `stream_video_view` VALUES ('65', '27', '15', '117.194.239.185', '2017-08-04');
INSERT INTO `stream_video_view` VALUES ('66', '12', '15', '117.194.239.185', '2017-08-04');
INSERT INTO `stream_video_view` VALUES ('67', '32', '15', '117.194.239.185', '2017-08-04');
INSERT INTO `stream_video_view` VALUES ('68', '14', '15', '117.194.239.185', '2017-08-04');
INSERT INTO `stream_video_view` VALUES ('69', '25', '15', '117.194.239.185', '2017-08-04');
INSERT INTO `stream_video_view` VALUES ('70', '34', '15', '189.213.119.73', '2017-08-04');
INSERT INTO `stream_video_view` VALUES ('71', '27', '15', '47.15.15.248', '2017-08-08');
INSERT INTO `stream_video_view` VALUES ('72', '34', '15', '189.213.119.73', '2017-08-18');
INSERT INTO `stream_video_view` VALUES ('73', '6', '15', '189.213.119.73', '2017-09-06');
INSERT INTO `stream_video_view` VALUES ('74', '20', '15', '189.213.119.73', '2017-09-06');
INSERT INTO `stream_video_view` VALUES ('75', '34', '15', '189.213.119.73', '2017-09-06');
INSERT INTO `stream_video_view` VALUES ('76', '27', '15', '189.213.119.73', '2017-09-06');
