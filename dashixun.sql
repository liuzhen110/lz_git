/*
Navicat MySQL Data Transfer

Source Server         : lz
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : dashixun

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-03-24 11:13:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for content
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `content_name` text,
  PRIMARY KEY (`content_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of content
-- ----------------------------
INSERT INTO `content` VALUES ('9', 'hgfhgh');
INSERT INTO `content` VALUES ('8', 'ghdsfgdszfsdrfwerew');
INSERT INTO `content` VALUES ('6', 'ghdsfgdszfsdrfwerew');
INSERT INTO `content` VALUES ('7', 'fgfhgheqefg56d2grt2ytry');
INSERT INTO `content` VALUES ('10', 'fgfhgheqefg56d2grt2ytry');
INSERT INTO `content` VALUES ('11', 'ghdsfgdszfsdrfwerew');
INSERT INTO `content` VALUES ('12', 'fgfhgheqefg56d2grt2ytry');
INSERT INTO `content` VALUES ('13', 'ghdsfgdszfsdrfwerew');
INSERT INTO `content` VALUES ('14', 'fgfhgheqefg56d2grt2ytry');
INSERT INTO `content` VALUES ('15', 'fgfhgheqefg56d2grt2ytry');
INSERT INTO `content` VALUES ('16', 'fgfhgheqefg56d2grt2ytry');
INSERT INTO `content` VALUES ('17', 'ghdsfgdszfsdrfwerew');
INSERT INTO `content` VALUES ('18', 'fgfhgheqefg56d2grt2ytry');
INSERT INTO `content` VALUES ('19', 'ghdsfgdszfsdrfwerew');
INSERT INTO `content` VALUES ('20', 'fgfhgheqefg56d2grt2ytry');
INSERT INTO `content` VALUES ('21', 'ghdsfgdszfsdrfwerew');
INSERT INTO `content` VALUES ('22', 'fgfhgheqefg56d2grt2ytry');
INSERT INTO `content` VALUES ('23', 'ghdsfgdszfsdrfwerew');
