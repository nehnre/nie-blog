/*
Navicat MySQL Data Transfer

Source Server         : localmysql
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2011-08-21 00:47:54
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `blog_message`
-- ----------------------------
DROP TABLE IF EXISTS `blog_message`;
CREATE TABLE `blog_message` (
  `blme_id` int(11) NOT NULL AUTO_INCREMENT,
  `blme_title` varchar(200) DEFAULT NULL,
  `blme_content` varchar(2000) DEFAULT NULL,
  `blme_nick_name` varchar(50) DEFAULT NULL,
  `blme_email` varchar(100) DEFAULT NULL,
  `blme_create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`blme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_message
-- ----------------------------
