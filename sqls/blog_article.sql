/*
Navicat MySQL Data Transfer

Source Server         : localmysql
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2011-08-21 00:48:51
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `blog_article`
-- ----------------------------
DROP TABLE IF EXISTS `blog_article`;
CREATE TABLE `blog_article` (
  `blar_id` int(11) NOT NULL AUTO_INCREMENT,
  `blar_title` varchar(100) DEFAULT NULL,
  `blar_abstract` varchar(2000) DEFAULT NULL,
  `blar_author` varchar(100) DEFAULT NULL,
  `blar_from` varchar(100) DEFAULT NULL,
  `blar_clicks` int(11) DEFAULT NULL,
  `blar_status` int(11) DEFAULT NULL,
  `blar_create_time` datetime DEFAULT NULL,
  `blar_modify_time` datetime DEFAULT NULL,
  PRIMARY KEY (`blar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_article
-- ----------------------------