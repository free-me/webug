/*
 Navicat Premium Data Transfer

 Source Server         : 测试服务器
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : 10.204.100.243:3306
 Source Schema         : demodb

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 08/09/2020 20:19:15
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for drops
-- ----------------------------
DROP TABLE IF EXISTS `drops`;
CREATE TABLE `drops`  (
  `id` int(11) NOT NULL,
  `title` varchar(300) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL,
  `drops` mediumtext CHARACTER SET gbk COLLATE gbk_chinese_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = gbk COLLATE = gbk_chinese_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of drops
-- ----------------------------
INSERT INTO `drops` VALUES (100, '宽字节注入', 'https://www.freebuf.com/articles/web/243108.html');
INSERT INTO `drops` VALUES (101, 'java安全开发之spring boot Thymeleaf模板注入', 'https://www.freebuf.com/articles/web/248877.html');
INSERT INTO `drops` VALUES (102, 'php后门隐藏技巧大全', 'https://www.freebuf.com/articles/web/248569.html');
INSERT INTO `drops` VALUES (103, 'API的五个常见漏洞', 'https://www.freebuf.com/articles/web/248402.html');
INSERT INTO `drops` VALUES (104, '渗透测试之小白的常见web漏洞总结', 'https://www.freebuf.com/articles/web/248335.html');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `user` varchar(200) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `passwd` varchar(100) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL,
  PRIMARY KEY (`user`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = gbk COLLATE = gbk_chinese_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('admin', '73cec70ee17e0e7cc337736fa6e880a8', 'admin@qdsw.com');
INSERT INTO `user` VALUES ('test', '73cec70ee17e0e7cc337736fa6e880a8', 'test@qdsw.com');
INSERT INTO `user` VALUES ('user', '73cec70ee17e0e7cc337736fa6e880a8', 'user@qdsw.com');
INSERT INTO `user` VALUES ('abc', '1234', 'qqq');
INSERT INTO `user` VALUES ('aaa', '23.', 'aaa@a.com');

SET FOREIGN_KEY_CHECKS = 1;
