/*
Navicat MySQL Data Transfer

Source Server         : localmysql
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2011-08-21 00:46:06
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `blog_article_tags`
-- ----------------------------
DROP TABLE IF EXISTS `blog_article_tags`;
CREATE TABLE `blog_article_tags` (
  `blat_id` int(11) NOT NULL AUTO_INCREMENT,
  `blar_id` int(11) DEFAULT NULL,
  `blta_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`blat_id`),
  KEY `fk_blar_id` (`blar_id`),
  KEY `fk_blta_id` (`blta_id`),
  CONSTRAINT `fk_blar_id` FOREIGN KEY (`blar_id`) REFERENCES `blog_article` (`blar_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_blta_id` FOREIGN KEY (`blta_id`) REFERENCES `blog_tags` (`blta_id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_article_tags
-- ----------------------------
