/*
Navicat MySQL Data Transfer

Source Server         : localmysql
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2011-08-17 22:35:57
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `blog_blogroll`
-- ----------------------------
DROP TABLE IF EXISTS `blog_blogroll`;
CREATE TABLE `blog_blogroll` (
  `blbl_id` int(11) DEFAULT NULL,
  `blbl_name` varchar(50) DEFAULT NULL,
  `blbl_link` varchar(200) DEFAULT NULL,
  `blbl_create_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of blog_blogroll
-- ----------------------------
