/*
Navicat MySQL Data Transfer

Source Server         : localmysql
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2011-08-21 00:47:26
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `blog_content`
-- ----------------------------
DROP TABLE IF EXISTS `blog_content`;
CREATE TABLE `blog_content` (
  `blar_id` int(11) NOT NULL,
  `blar_content` text,
  KEY `fk_blar_id_2` (`blar_id`),
  CONSTRAINT `fk_blar_id_2` FOREIGN KEY (`blar_id`) REFERENCES `blog_article` (`blar_id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_content
-- ----------------------------
