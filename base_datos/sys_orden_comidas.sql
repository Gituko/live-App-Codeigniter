/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : kpfiles_nutri2

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-01-19 14:38:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sys_orden_comidas
-- ----------------------------
DROP TABLE IF EXISTS `sys_orden_comidas`;
CREATE TABLE `sys_orden_comidas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) DEFAULT NULL,
  `status` bit(1) NOT NULL DEFAULT b'1',
  `horario` varchar(50) DEFAULT NULL,
  `calorias` int(11) DEFAULT NULL,
  `hidratos` int(11) DEFAULT NULL,
  `proteinas` int(11) DEFAULT NULL,
  `lipidos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of sys_orden_comidas
-- ----------------------------
INSERT INTO `sys_orden_comidas` VALUES ('1', 'Almuerzo', '', '9:00', null, null, null, null);
INSERT INTO `sys_orden_comidas` VALUES ('2', 'Comida', '', '2:00', null, null, null, null);
INSERT INTO `sys_orden_comidas` VALUES ('3', 'Cena', '', '8:00', null, null, null, null);
INSERT INTO `sys_orden_comidas` VALUES ('7', 'antes del almuerso', '', null, null, null, null, null);
INSERT INTO `sys_orden_comidas` VALUES ('9', 'antes de entrenar', '', null, null, null, null, null);
