/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50731
Source Host           : localhost:3306
Source Database       : myboke

Target Server Type    : MYSQL
Target Server Version : 50731
File Encoding         : 65001

Date: 2022-03-03 09:55:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `conment`
-- ----------------------------
DROP TABLE IF EXISTS `conment`;
CREATE TABLE `conment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of conment
-- ----------------------------
INSERT INTO `conment` VALUES ('1', '1', '1');
INSERT INTO `conment` VALUES ('2', 'äºŽå›½é¾™', '2');
INSERT INTO `conment` VALUES ('3', '1', '1');
INSERT INTO `conment` VALUES ('4', '111', 'äºŽå›½é¾™');
INSERT INTO `conment` VALUES ('5', '1', '1');
INSERT INTO `conment` VALUES ('6', '1', '111');
INSERT INTO `conment` VALUES ('7', '1', '1');
INSERT INTO `conment` VALUES ('8', '1', '1');

-- ----------------------------
-- Table structure for `login`
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('1', '2143191301@qq.com', 'yuguolong.0920..');
INSERT INTO `login` VALUES ('2', '2143191301@qq.com', 'yuguolong.0920..');
INSERT INTO `login` VALUES ('3', '2143191302@qq.com', '123456');

-- ----------------------------
-- Table structure for `msg`
-- ----------------------------
DROP TABLE IF EXISTS `msg`;
CREATE TABLE `msg` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of msg
-- ----------------------------
INSERT INTO `msg` VALUES ('1', 'äºŽå›½é¾™', 'hello');
INSERT INTO `msg` VALUES ('2', 'äºŽå›½é¾™', 'yqqqq');
INSERT INTO `msg` VALUES ('3', 'äºŽå›½é¾™', 'æ”¹å®Œäº†');

-- ----------------------------
-- Table structure for `page`
-- ----------------------------
DROP TABLE IF EXISTS `page`;
CREATE TABLE `page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of page
-- ----------------------------
INSERT INTO `page` VALUES ('1', 'äºŽå›½é¾™', 'æ¬¢è¿Žæ¥åˆ°é¾™é¾™çš„blog', '2022-03-02 22:33:01', 'BLOG');
INSERT INTO `page` VALUES ('6', 'äºŽå›½é¾™', '22222', '2022-02-26 19:23:54', '3333');
INSERT INTO `page` VALUES ('7', '1111', '444', '2022-02-26 19:24:07', '2222');
INSERT INTO `page` VALUES ('8', '333', '2r3534', '2022-02-26 19:24:29', '13234324');
