/*
 Navicat Premium Data Transfer

 Source Server         : website
 Source Server Type    : MySQL
 Source Server Version : 80028
 Source Host           : localhost:3306
 Source Schema         : davetiye

 Target Server Type    : MySQL
 Target Server Version : 80028
 File Encoding         : 65001

 Date: 04/06/2022 05:13:15
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for urun
-- ----------------------------
DROP TABLE IF EXISTS `urun`;
CREATE TABLE `urun`  (
  `urun_id` int NOT NULL AUTO_INCREMENT,
  `urun_adi` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `urun_fiyat` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `urun_resim` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `urun_kategori` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`urun_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of urun
-- ----------------------------
INSERT INTO `urun` VALUES (11, 'Davetiye 1', '150', '416756091_2.png', 'Düğün Davetiyesi');
INSERT INTO `urun` VALUES (12, 'Davetiye 2', '285', '1659171852_Ekoline 223141.png', 'Düğün Davetiyesi');
INSERT INTO `urun` VALUES (14, 'Davetiye 4', '325', '869196877_15555708871446.png', 'Düğün Davetiyesi');
INSERT INTO `urun` VALUES (15, 'Davetiye 3', '270', '1567746827_Ekoline 223231.png', 'Düğün Davetiyesi');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `users_id` int NOT NULL AUTO_INCREMENT,
  `users_adi` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `users_soyadi` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `users_mail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `users_pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`users_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Fırat', 'Tonguç', 'fırattonguc@gmail.com', '111');

SET FOREIGN_KEY_CHECKS = 1;
