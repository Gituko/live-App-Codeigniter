/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : kpfiles_nutri2

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-01-19 14:57:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sys_orden_comidas_paciente
-- ----------------------------
DROP TABLE IF EXISTS `sys_orden_comidas_paciente`;
CREATE TABLE `sys_orden_comidas_paciente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `status` bit(1) NOT NULL DEFAULT b'1',
  `horario` datetime(6) DEFAULT NULL,
  `calorias` int(11) DEFAULT NULL,
  `hidratos` int(11) DEFAULT NULL,
  `proteinas` int(11) DEFAULT NULL,
  `lipidos` int(11) DEFAULT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of sys_orden_comidas_paciente
-- ----------------------------
