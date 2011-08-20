/*
Navicat MySQL Data Transfer

Source Server         : localmysql
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2011-08-21 00:46:57
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `blog_comment`
-- ----------------------------
DROP TABLE IF EXISTS `blog_comment`;
CREATE TABLE `blog_comment` (
  `blco_id` int(11) NOT NULL AUTO_INCREMENT,
  `blco_nick_name` varchar(50) DEFAULT NULL,
  `blco_email` varchar(100) DEFAULT NULL,
  `blco_home_page` varchar(200) DEFAULT NULL,
  `blco_content` varchar(2000) DEFAULT NULL,
  `blco_create_time` datetime DEFAULT NULL,
  `blco_if_publish` int(11) DEFAULT NULL,
  `blco_ip_address` varchar(50) DEFAULT NULL,
  `blar_id` int(11) DEFAULT NULL,
  `parent_blco_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`blco_id`),
  KEY `fk_blar_id_3` (`blar_id`),
  KEY `fk_blco_id` (`parent_blco_id`),
  CONSTRAINT `fk_blar_id_3` FOREIGN KEY (`blar_id`) REFERENCES `blog_article` (`blar_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_blco_id` FOREIGN KEY (`parent_blco_id`) REFERENCES `blog_comment` (`blco_id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_comment
-- ----------------------------
