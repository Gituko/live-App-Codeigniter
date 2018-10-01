/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : kpfiles_nutri2

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-01-19 14:37:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sys_nivel
-- ----------------------------
DROP TABLE IF EXISTS `sys_nivel`;
CREATE TABLE `sys_nivel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of sys_nivel
-- ----------------------------
INSERT INTO `sys_nivel` VALUES ('1', 'Super Administrador');
INSERT INTO `sys_nivel` VALUES ('2', 'Administrador Consultorio');
INSERT INTO `sys_nivel` VALUES ('3', 'Usuario Normal');
