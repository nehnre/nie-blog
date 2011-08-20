/*
Navicat MySQL Data Transfer

Source Server         : localmysql
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2011-08-21 00:46:41
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `blog_blogroll`
-- ----------------------------
DROP TABLE IF EXISTS `blog_blogroll`;
CREATE TABLE `blog_blogroll` (
  `blbl_id` int(11) NOT NULL AUTO_INCREMENT,
  `blbl_name` varchar(50) DEFAULT NULL,
  `blbl_link` varchar(200) DEFAULT NULL,
  `blbl_create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`blbl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_blogroll
-- ----------------------------
