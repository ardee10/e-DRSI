/*
 Navicat Premium Data Transfer

 Source Server         : db_localhost
 Source Server Type    : MySQL
 Source Server Version : 100421
 Source Host           : localhost:3306
 Source Schema         : bc-shoes

 Target Server Type    : MySQL
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 05/02/2025 21:27:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_cell
-- ----------------------------
DROP TABLE IF EXISTS `tbl_cell`;
CREATE TABLE `tbl_cell`  (
  `urutan` int NOT NULL AUTO_INCREMENT,
  `id_cell` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_factory` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_cell` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `is_active` int NULL DEFAULT NULL,
  PRIMARY KEY (`urutan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 219 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_cell
-- ----------------------------
INSERT INTO `tbl_cell` VALUES (3, 'A601', 'F1', 'F1-1', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (4, 'A602', 'F1', 'F1-2', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (5, 'A603', 'F1', 'F1-3', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (6, 'A604', 'F1', 'F1-4', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (7, 'A605', 'F1', 'F1-5', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (8, 'A606', 'F1', 'F1-6', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (9, 'A607', 'F1', 'F1-7', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (10, 'A608', 'F1', 'F1-8', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (11, 'A609', 'F1', 'F1-9', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (12, 'A610', 'F1', 'F1-10', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (13, 'A611', 'F1', 'F1-11', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (14, 'A612', 'F1', 'F1-12', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (15, 'A613', 'F1', 'F1-13', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (16, 'A614', 'F1', 'F1-14', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (17, 'A615', 'F1', 'F1-15', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (18, 'A616', 'F1', 'F1-16', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (19, 'A617', 'F1', 'F1-17', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (20, 'A618', 'F1', 'F1-18', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (21, 'A619', 'F1', 'F1-19', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (22, 'A620', 'F1', 'F1-20', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (23, 'A906', 'F2', 'F2-1', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (24, 'A621', 'F2', 'F2-2', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (25, 'A622', 'F2', 'F2-3', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (26, 'A843', 'F2', 'F2-4', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (27, 'A623', 'F2', 'F2-5', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (28, 'A624', 'F2', 'F2-6', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (29, 'A842', 'F2', 'F2-7', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (30, 'A625', 'F2', 'F2-8', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (31, 'A626', 'F2', 'F2-9', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (32, 'A627', 'F2', 'F2-10', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (33, 'A628', 'F2', 'F2-11', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (34, 'A629', 'F2', 'F2-12', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (35, 'A630', 'F2', 'F2-13', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (36, 'A631', 'F2', 'F2-14', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (37, 'A632', 'F2', 'F2-15', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (38, 'A633', 'F2', 'F2-16', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (39, 'A634', 'F2', 'F2-17', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (40, 'A635', 'F2', 'F2-18', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (41, 'A636', 'F2', 'F2-19', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (42, 'A637', 'F2', 'F2-20', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (43, 'A638', 'F2', 'F2-21', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (44, 'A639', 'F2', 'F2-22', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (45, 'A640', 'F2', 'F2-23', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (46, 'A708', 'F3', 'F3-1', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (47, 'A709', 'F3', 'F3-2', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (48, 'A710', 'F3', 'F3-3', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (49, 'A711', 'F3', 'F3-4', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (50, 'A712', 'F3', 'F3-5', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (51, 'A713', 'F3', 'F3-6', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (52, 'A647', 'F3', 'F3-7', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (53, 'A648', 'F3', 'F3-8', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (54, 'A649', 'F3', 'F3-9', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (55, 'A650', 'F3', 'F3-10', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (56, 'A651', 'F3', 'F3-11', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (57, 'A652', 'F3', 'F3-12', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (58, 'A653', 'F3', 'F3-13', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (59, 'A654', 'F3', 'F3-14', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (60, 'A655', 'F3', 'F3-15', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (61, 'A700', 'F3', 'F3-16', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (62, 'A701', 'F3', 'F3-17', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (63, 'A702', 'F3', 'F3-18', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (64, 'A703', 'F3', 'F3-19', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (65, 'A704', 'F3', 'F3-20', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (66, 'A705', 'F3', 'F3-21', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (71, 'A727', 'F4', 'F4-1 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (72, 'A728', 'F4', 'F4-2 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (73, 'A749', 'F4', 'F4-3 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (74, 'A750', 'F4', 'F4-4 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (75, 'A751', 'F4', 'F4-5 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (76, 'A752', 'F4', 'F4-6 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (77, 'A753', 'F4', 'F4-7 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (78, 'A754', 'F4', 'F4-8 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (79, 'A755', 'F4', 'F4-9 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (80, 'A756', 'F4', 'F4-10 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (81, 'A757', 'F4', 'F4-11 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (82, 'A758', 'F4', 'F4-12', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (83, 'A759', 'F4', 'F4-13', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (84, 'A760', 'F4', 'F4-14', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (85, 'A761', 'F4', 'F4-15', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (86, 'A762', 'F4', 'F4-16', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (87, 'A763', 'F4', 'F4-17', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (88, 'A764', 'F4', 'F4-18', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (89, 'A765', 'F4', 'F4-19', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (90, 'A766', 'F4', 'F4-20 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (91, 'A768', 'F4', 'F4-21 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (92, 'A769', 'F4', 'F4-22 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (93, 'A770', 'F4', 'F4-23 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (94, 'A771', 'F4', 'F4-24 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (95, 'A772', 'F4', 'F4-25 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (96, 'A773', 'F4', 'F4-26 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (97, 'A774', 'F4', 'F4-27 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (98, 'A775', 'F4', 'F4-28 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (99, 'A776', 'F4', 'F4-29 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (100, 'A777', 'F4', 'F4-30 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (101, 'A788', 'F4', 'F4-31 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (102, 'A789', 'F4', 'F4-32 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (103, 'A790', 'F4', 'F4-33 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (104, 'A726', 'F4', 'F4-34 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (105, 'A791', 'F4', 'F4-35 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (106, 'A792', 'F4', 'F4-36 aSC', 'asc', 1);
INSERT INTO `tbl_cell` VALUES (107, 'A68C', 'F4', 'F4-37', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (108, 'A68D', 'F4', 'F4-38', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (109, 'A68E', 'F4', 'F4-39', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (110, 'A68F', 'F4', 'F4-40', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (111, 'A690', 'F4', 'F4-41', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (112, 'A691', 'F4', 'F4-42', 'reguler', 1);
INSERT INTO `tbl_cell` VALUES (113, 'A814', 'F5', 'F5-1', 'assy', 0);
INSERT INTO `tbl_cell` VALUES (114, 'A815', 'F5', 'F5-2', 'assy', 0);
INSERT INTO `tbl_cell` VALUES (115, 'A816', 'F5', 'F5-3', 'assy', 1);
INSERT INTO `tbl_cell` VALUES (116, 'A817', 'F5', 'F5-4', 'assy', 1);
INSERT INTO `tbl_cell` VALUES (117, 'A818', 'F5', 'F5-5', 'assy', 1);
INSERT INTO `tbl_cell` VALUES (118, 'A819', 'F5', 'F5-6', 'assy', 1);
INSERT INTO `tbl_cell` VALUES (119, 'A820', 'F5', 'F5-7', 'assy', 1);
INSERT INTO `tbl_cell` VALUES (120, 'A821', 'F5', 'F5-8', 'assy', 1);
INSERT INTO `tbl_cell` VALUES (124, 'A825', 'F5', 'F5-12', 'assy', 0);
INSERT INTO `tbl_cell` VALUES (125, 'A826', 'F5', 'F5-13', 'assy', 0);
INSERT INTO `tbl_cell` VALUES (126, 'A827', 'F5', 'F5-14', 'assy', 0);
INSERT INTO `tbl_cell` VALUES (127, 'A828', 'F5', 'F5-15', 'assy', 0);
INSERT INTO `tbl_cell` VALUES (128, 'A829', 'F5', 'F5-16', 'assy', 0);
INSERT INTO `tbl_cell` VALUES (129, 'A830', 'F5', 'F5-17', 'assy', 0);
INSERT INTO `tbl_cell` VALUES (130, 'A831', 'F5', 'F5-18', 'assy', 0);
INSERT INTO `tbl_cell` VALUES (131, 'A832', 'F5', 'F5-19', 'assy', 0);
INSERT INTO `tbl_cell` VALUES (153, 'A869', 'F6', 'F6-1', 'reguler', 0);
INSERT INTO `tbl_cell` VALUES (154, 'A870', 'F6', 'F6-2', 'reguler', 0);
INSERT INTO `tbl_cell` VALUES (155, 'A871', 'F6', 'F6-3', 'reguler', 0);
INSERT INTO `tbl_cell` VALUES (156, 'A872', 'F6', 'F6-4', 'reguler', 0);
INSERT INTO `tbl_cell` VALUES (157, 'A873', 'F6', 'F6-5', 'reguler', 0);
INSERT INTO `tbl_cell` VALUES (158, 'A874', 'F6', 'F6-6', 'reguler', 0);
INSERT INTO `tbl_cell` VALUES (159, 'A875', 'F6', 'F6-7', 'reguler', 0);
INSERT INTO `tbl_cell` VALUES (160, 'A876', 'F6', 'F6-8', 'reguler', 0);
INSERT INTO `tbl_cell` VALUES (161, 'A877', 'F6', 'F6-9', 'reguler', 0);
INSERT INTO `tbl_cell` VALUES (162, 'A878', 'F6', 'F6-10', 'reguler', 0);
INSERT INTO `tbl_cell` VALUES (163, 'A879', 'F6', 'F6-11', 'reguler', 0);
INSERT INTO `tbl_cell` VALUES (164, 'A880', 'F6', 'F6-12', 'reguler', 0);
INSERT INTO `tbl_cell` VALUES (165, 'A881', 'F6', 'F6-13', 'reguler', 0);
INSERT INTO `tbl_cell` VALUES (166, 'A882', 'F6', 'F6-14', 'reguler', 0);
INSERT INTO `tbl_cell` VALUES (167, 'A883', 'F6', 'F6-15', 'reguler', 0);
INSERT INTO `tbl_cell` VALUES (168, 'A884', 'F6', 'F6-16', 'reguler', 0);
INSERT INTO `tbl_cell` VALUES (169, 'A885', 'F6', 'F6-17', 'reguler', 0);
INSERT INTO `tbl_cell` VALUES (170, 'A886', 'F6', 'F6-18', 'reguler', 0);
INSERT INTO `tbl_cell` VALUES (171, 'A887', 'F6', 'F6-19', 'reguler', 0);
INSERT INTO `tbl_cell` VALUES (172, 'A888', 'F6', 'F6-20', 'reguler', 0);
INSERT INTO `tbl_cell` VALUES (193, 'A793', 'SF', 'SF-1 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (194, 'A795', 'SF', 'SF-2 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (195, 'A797', 'SF', 'SF-3 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (196, 'A799', 'SF', 'SF-4 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (197, 'A801', 'SF', 'SF-5 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (198, 'A803', 'SF', 'SF-6 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (199, 'A849', 'SF', 'SF-7 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (200, 'A850', 'SF', 'SF-8 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (201, 'A805', 'SF', 'SF-9 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (202, 'A807', 'SF', 'SF-10 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (203, 'A809', 'SF', 'SF-11 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (204, 'A811', 'SF', 'SF-12 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (205, 'A794', 'SF', 'SF-13 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (206, 'A796', 'SF', 'SF-14 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (207, 'A798', 'SF', 'SF-15 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (208, 'A800', 'SF', 'SF-16 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (209, 'A802', 'SF', 'SF-17 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (210, 'A804', 'SF', 'SF-18 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (211, 'A851', 'SF', 'SF-19 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (212, 'A852', 'SF', 'SF-20 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (213, 'A806', 'SF', 'SF-21 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (214, 'A812', 'SF', 'SF-22 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (215, 'A810', 'SF', 'SF-23 aSC', 'asc', 0);
INSERT INTO `tbl_cell` VALUES (216, 'A822', 'F5', 'F5-9', 'assy', 1);
INSERT INTO `tbl_cell` VALUES (217, 'A823', 'F5', 'F5-10', 'assy', 1);
INSERT INTO `tbl_cell` VALUES (218, 'A824', 'F5', 'F5-11', 'assy', 0);

-- ----------------------------
-- Table structure for tbl_defect
-- ----------------------------
DROP TABLE IF EXISTS `tbl_defect`;
CREATE TABLE `tbl_defect`  (
  `id_defect` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_defect` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_defect`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_defect
-- ----------------------------
INSERT INTO `tbl_defect` VALUES ('CC', 'CUTTING COMPONENT');
INSERT INTO `tbl_defect` VALUES ('CT', 'COMPONEN TREATMENT');
INSERT INTO `tbl_defect` VALUES ('FS', 'FINISHED SHOES');
INSERT INTO `tbl_defect` VALUES ('OS', 'OUTSOLE');
INSERT INTO `tbl_defect` VALUES ('SLU', 'STITCHED / LASTED UPPER');

-- ----------------------------
-- Table structure for tbl_defect_area
-- ----------------------------
DROP TABLE IF EXISTS `tbl_defect_area`;
CREATE TABLE `tbl_defect_area`  (
  `id_defect_area` int NOT NULL,
  `area` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_defect_area`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_defect_area
-- ----------------------------
INSERT INTO `tbl_defect_area` VALUES (1, 'COMP.STITCH');
INSERT INTO `tbl_defect_area` VALUES (2, 'PREPARATION');
INSERT INTO `tbl_defect_area` VALUES (3, 'CUTTING');
INSERT INTO `tbl_defect_area` VALUES (4, 'SEWING\r\n');
INSERT INTO `tbl_defect_area` VALUES (5, 'TQC');
INSERT INTO `tbl_defect_area` VALUES (6, 'ASSEMBLY');

-- ----------------------------
-- Table structure for tbl_defect_class
-- ----------------------------
DROP TABLE IF EXISTS `tbl_defect_class`;
CREATE TABLE `tbl_defect_class`  (
  `id_defect_class` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_defect_class` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `id_defect` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_defect_class`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_defect_class
-- ----------------------------
INSERT INTO `tbl_defect_class` VALUES ('CC', 'CUTTING COMPONENT (CC)', 'CC');
INSERT INTO `tbl_defect_class` VALUES ('CTEMB', 'COMPONENT TREATMENT EMBROIDERY (CT)', 'CT');
INSERT INTO `tbl_defect_class` VALUES ('CTHPNS', 'COMPONENT TREATMENT HF, PRINT & NO-SEW (CT)', 'CT');
INSERT INTO `tbl_defect_class` VALUES ('CTSUB', 'COMPONENT TREATMENT SUBLIMATION (CT)', 'CT');
INSERT INTO `tbl_defect_class` VALUES ('FS', 'FINISH SHOES (FS)', 'FS');
INSERT INTO `tbl_defect_class` VALUES ('OS', 'OUTSOLE (OS)', 'OS');
INSERT INTO `tbl_defect_class` VALUES ('SLU', 'STITCHED / LASTED UPPER (SLU)', 'SLU');

-- ----------------------------
-- Table structure for tbl_defect_source
-- ----------------------------
DROP TABLE IF EXISTS `tbl_defect_source`;
CREATE TABLE `tbl_defect_source`  (
  `ide_defect_source` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `source` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_sub_defect_class` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ide_defect_source`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_defect_source
-- ----------------------------
INSERT INTO `tbl_defect_source` VALUES ('1', 'CUTTING', NULL);
INSERT INTO `tbl_defect_source` VALUES ('2', 'T2', NULL);
INSERT INTO `tbl_defect_source` VALUES ('3', 'IN-HOUSE / SUBCONTRACTORS', NULL);
INSERT INTO `tbl_defect_source` VALUES ('4', 'STITCHING \r\n', NULL);
INSERT INTO `tbl_defect_source` VALUES ('5', 'INPUT SUBCONT\r\n', NULL);
INSERT INTO `tbl_defect_source` VALUES ('6', 'BOTTOM B1/B2\r\n', NULL);
INSERT INTO `tbl_defect_source` VALUES ('7', 'ASSEMBLY\r\n', NULL);

-- ----------------------------
-- Table structure for tbl_defect_sub_class
-- ----------------------------
DROP TABLE IF EXISTS `tbl_defect_sub_class`;
CREATE TABLE `tbl_defect_sub_class`  (
  `id_defect_sub_class` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_defect_sub_class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_defect` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_defect_class` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_defect_sub_class`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_defect_sub_class
-- ----------------------------
INSERT INTO `tbl_defect_sub_class` VALUES ('CC11', 'CC KURANG / LEBIH POTONG TIDAK SEMPURNA', 'CC', 'CC');
INSERT INTO `tbl_defect_sub_class` VALUES ('CC12', 'CC ALAT CUTTING RUSAK', 'CC', 'CC');
INSERT INTO `tbl_defect_sub_class` VALUES ('CC13', 'CC NODA / KONTAMINASI', 'CC', 'CC');
INSERT INTO `tbl_defect_sub_class` VALUES ('CC14', 'CC RUSAK,PECAH / PERMUKAAN LECET', 'CC', 'CC');
INSERT INTO `tbl_defect_sub_class` VALUES ('CC15', 'CC PERMUKAAN KENDOR / PINGGGIRAN BERBULU (KULIT)', 'CC', 'CC');
INSERT INTO `tbl_defect_sub_class` VALUES ('CC16', 'CC TANDA LAMINASI / PENYAMBUNGAN', 'CC', 'CC');
INSERT INTO `tbl_defect_sub_class` VALUES ('CT11', 'CTHPNS PERMUKAAN RUSAK, PECAH / TERGORES', 'CT', 'CTHPNS');
INSERT INTO `tbl_defect_sub_class` VALUES ('CT12', 'CTHPNS MENGELUPAS, LEPAS', 'CT', 'CTHPNS');
INSERT INTO `tbl_defect_sub_class` VALUES ('CT13', 'CTHPNS NODA / KONTAMINASI', 'CT', 'CTHPNS');
INSERT INTO `tbl_defect_sub_class` VALUES ('CT14', 'CTHPNS WARNA & POSISI SALAH', 'CT', 'CTHPNS');
INSERT INTO `tbl_defect_sub_class` VALUES ('CT21', 'CTEMB BENTUK JELEK', 'CT', 'CTEMB');
INSERT INTO `tbl_defect_sub_class` VALUES ('CT22', 'CTEMB BENANG KENDOR', 'CT', 'CTEMB');
INSERT INTO `tbl_defect_sub_class` VALUES ('CT23', 'CTEMB BENANG PUTUS', 'CT', 'CTEMB');
INSERT INTO `tbl_defect_sub_class` VALUES ('CT24', 'CTEMB WARNA & POSISI SALAH', 'CT', 'CTEMB');
INSERT INTO `tbl_defect_sub_class` VALUES ('CT31', 'CTSUB WARNA TIDAK SESUAI / SALAH', 'CT', 'CTSUB');
INSERT INTO `tbl_defect_sub_class` VALUES ('CT32', 'CTSUB PRINTING SALAH / KELAINAN', 'CT', 'CTSUB');
INSERT INTO `tbl_defect_sub_class` VALUES ('CT33', 'CTSUB NODA / KONTAMINASI', 'CT', 'CTSUB');
INSERT INTO `tbl_defect_sub_class` VALUES ('CT34', 'CTSUB WARNA & POSISI SALAH', 'CT', 'CTSUB');
INSERT INTO `tbl_defect_sub_class` VALUES ('FS51', 'FS KERIPUT, RUSAK / BENTUK JELEK', 'FS', 'FS');
INSERT INTO `tbl_defect_sub_class` VALUES ('FS510', ' FS HASIL COMPONENT TREATMENT JELEK', 'FS', 'FS');
INSERT INTO `tbl_defect_sub_class` VALUES ('FS52', 'FS NODA / KONTAMINASI PRIMER & LEM', 'FS', 'FS');
INSERT INTO `tbl_defect_sub_class` VALUES ('FS53', 'FS TIDAK LURUS / MELINTIR / KANAN & KIRI BEDA', 'FS', 'FS');
INSERT INTO `tbl_defect_sub_class` VALUES ('FS54', ' FS RUSAK / PECAH & BUFING TERLALU BESAR', 'FS', 'FS');
INSERT INTO `tbl_defect_sub_class` VALUES ('FS55', 'FS CELAH TERBUKJA / MENGELUPAS BOTTOM KE UPPER', 'FS', 'FS');
INSERT INTO `tbl_defect_sub_class` VALUES ('FS56', 'FS JAHITAN UPPER JELEK', 'FS', 'FS');
INSERT INTO `tbl_defect_sub_class` VALUES ('FS57', 'FS OUTSOLE JELEK', 'FS', 'FS');
INSERT INTO `tbl_defect_sub_class` VALUES ('FS58', 'FS MATERIAL JELEK', 'FS', 'FS');
INSERT INTO `tbl_defect_sub_class` VALUES ('FS59', 'FS HASIL POTONG JELEK', 'FS', 'FS');
INSERT INTO `tbl_defect_sub_class` VALUES ('OS41', 'OS MELINTIR, PENYOK, BENTUK JELEK', 'OS', 'OS');
INSERT INTO `tbl_defect_sub_class` VALUES ('OS42', 'OS NODA / KONTAMINASI PRIMER 7 LEM', 'OS', 'OS');
INSERT INTO `tbl_defect_sub_class` VALUES ('OS43', 'OS SIZE SALAH / KIRI & KANAN BEDA', 'OS', 'OS');
INSERT INTO `tbl_defect_sub_class` VALUES ('OS44', 'OS PENGECATAN JELEK, TIDAK SESUAI / MENGELUPAS', 'OS', 'OS');
INSERT INTO `tbl_defect_sub_class` VALUES ('OS45', 'OS BONDING GAP / DELAMINATE RUBBER TO MIDSOLE', 'OS', 'OS');
INSERT INTO `tbl_defect_sub_class` VALUES ('OS46', 'OS MIDSOLE JELEK', 'OS', 'OS');
INSERT INTO `tbl_defect_sub_class` VALUES ('OS47', 'OS RUBBERSOLE JELEK', 'OS', 'OS');
INSERT INTO `tbl_defect_sub_class` VALUES ('OS48', 'OS SPRAY SUBCONT JELEK', 'OS', 'OS');
INSERT INTO `tbl_defect_sub_class` VALUES ('SLU1', 'SLU PANJANG & JARAK SISI JAHITAN SALAH', 'SLU', 'SLU');
INSERT INTO `tbl_defect_sub_class` VALUES ('SLU2', 'SLU JAHITAN PUTUS, KENDOR, LONCAT & KUNCI SALAH', 'SLU', 'SLU');
INSERT INTO `tbl_defect_sub_class` VALUES ('SLU3', 'SLU JAHITAN BERGELOMBANG, BENTUK JAHIT TIDAK BAGUS', 'SLU', 'SLU');
INSERT INTO `tbl_defect_sub_class` VALUES ('SLU4', 'SLU WARNA & JENIS BENANG SALAH', 'SLU', 'SLU');
INSERT INTO `tbl_defect_sub_class` VALUES ('SLU5', 'SLU LUBANG JARUM JELEK', 'SLU', 'SLU');
INSERT INTO `tbl_defect_sub_class` VALUES ('SLU6', 'SLU MATERIAL JELEK', 'SLU', 'SLU');
INSERT INTO `tbl_defect_sub_class` VALUES ('SLU8', 'SLU HASIL SUBCONT / TREATMENT JELEK', 'SLU', 'SLU');

-- ----------------------------
-- Table structure for tbl_finding
-- ----------------------------
DROP TABLE IF EXISTS `tbl_finding`;
CREATE TABLE `tbl_finding`  (
  `id_finding` int NOT NULL AUTO_INCREMENT,
  `date` date NULL DEFAULT NULL,
  `gedung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `cell` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `artikel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `defect_stage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `defect_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `defect_name2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pairs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_estonian_ci NULL DEFAULT NULL,
  `defect_source` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `self_inspect` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `who_defect_go` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `count` int NULL DEFAULT NULL,
  `defect_area` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `who_stop_defect` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `count2` int NULL DEFAULT NULL,
  `remark` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_finding`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 39 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_finding
-- ----------------------------
INSERT INTO `tbl_finding` VALUES (33, '2025-01-31', 'F4', 'F4-12', 'GY6577', 'ACTIVLEX BOA', 'CT', 'CTEMB', 'CT21', 'GY6577.PNG', '1', 'CUTTING', 'INPUT COMP.TREATMENT\r\n', 'NANANG SRI WIDODO\r\nRIAN AGUSTIAN', 2, 'COMP.STITCH', 'ADAM', 2, 'MOHON SEGERA DIPERBAIKI. THANKS');
INSERT INTO `tbl_finding` VALUES (34, '2025-01-31', 'F2', 'F2-1', 'JP6528', 'ADIZERO BK', 'FS', 'FS', 'FS56', 'JP6528.PNG', '1', 'STITCHING \r\n', 'INPUT COMP.TREATMENT\r\n', 'HANAFI\r\nYUDHIKA\r\nAZIZ', 2, 'PREPARATION', '148759 - RIAN AGUSTIAN', 1, 'TOLONG DI FOLLOW UP');
INSERT INTO `tbl_finding` VALUES (35, '2025-02-03', 'F3', 'F3-13', 'ID9572', 'ADVANTAGE BASE', 'CT', 'CTSUB', 'CT32', 'ID9572.PNG', '3', 'CUTTING', 'CUTTER\r\n', 'ADAM', 2, 'COMP.STITCH', '123456 - ADAM', 2, 'TOLONG FOLLOW UP');
INSERT INTO `tbl_finding` VALUES (36, '2025-02-04', 'F1', 'F1-2', 'TEST', 'TEST---2', 'CC', 'CC', 'CC11', 'TEST.PNG', '2', 'STITCHING \r\n', 'INPUT COMP.TREATMENT\r\n', 'NANANG\r\nRIAN\r\nAZIZ', 2, 'PREPARATION', 'ANAFI', 2, 'TOLONG DI FOLLOW UP');
INSERT INTO `tbl_finding` VALUES (37, '2025-02-05', 'F4', 'F4-12', 'GW9284', 'ADVANTAGE BASE', 'CT', 'CTEMB', 'CT21', 'GW9284.PNG', '2', 'BOTTOM B1/B2\r\n', 'SEWING\r\n', 'YUDI', 12, 'COMP.STITCH', 'NANANG SRI WIDODO', 2, 'TOLONG DI TINDAK LANJUTI');
INSERT INTO `tbl_finding` VALUES (38, '2025-02-05', 'F2', 'F2-11', 'IF8007', 'ADVANTAGE BASE', 'FS', 'FS', 'FS58', 'IF8007.PNG', '1', 'CUTTING', 'INPUT COMP.TREATMENT\r\n', 'YUDI\r\nARIF\r\nAZIZ', 2, 'COMP.STITCH', '123456 - ADAM', 2, 'Lebih detail dalam pengecekan');

-- ----------------------------
-- Table structure for tbl_gedung
-- ----------------------------
DROP TABLE IF EXISTS `tbl_gedung`;
CREATE TABLE `tbl_gedung`  (
  `id_gedung` int NOT NULL AUTO_INCREMENT,
  `gedung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `active` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '1',
  PRIMARY KEY (`id_gedung`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_gedung
-- ----------------------------
INSERT INTO `tbl_gedung` VALUES (1, 'F1', '1');
INSERT INTO `tbl_gedung` VALUES (2, 'F2', '1');
INSERT INTO `tbl_gedung` VALUES (3, 'F3', '1');
INSERT INTO `tbl_gedung` VALUES (4, 'F4', '1');
INSERT INTO `tbl_gedung` VALUES (5, 'F5', '1');
INSERT INTO `tbl_gedung` VALUES (6, 'F6', '1');
INSERT INTO `tbl_gedung` VALUES (7, 'SF', '0');
INSERT INTO `tbl_gedung` VALUES (8, 'MAIN OFFICE', '0');
INSERT INTO `tbl_gedung` VALUES (9, 'BOTTOM-1', '0');
INSERT INTO `tbl_gedung` VALUES (10, 'BOTTOM-2', '0');
INSERT INTO `tbl_gedung` VALUES (11, 'INHOUSE-TREATMENT', '0');

-- ----------------------------
-- Table structure for tbl_model
-- ----------------------------
DROP TABLE IF EXISTS `tbl_model`;
CREATE TABLE `tbl_model`  (
  `id_model` int NOT NULL AUTO_INCREMENT,
  `nama_model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `img_model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `model_created` date NULL DEFAULT NULL,
  `artikel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_model`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_model
-- ----------------------------
INSERT INTO `tbl_model` VALUES (1, 'DURAMO SL EL I FW23', 'ID5894.PNG', '2025-01-14', 'ID5894');
INSERT INTO `tbl_model` VALUES (2, 'DURAMO SL W FW23', 'IE7979.PNG', '2025-01-14', 'IE7979');
INSERT INTO `tbl_model` VALUES (3, 'RUNFALCON 5', 'IE8818.PNG', '2025-01-13', 'IE8812');
INSERT INTO `tbl_model` VALUES (4, 'ULTRARUN 5 J\r\n', 'IF4144.PNG\r\n', '2025-01-07', 'IF4144\r\n');
INSERT INTO `tbl_model` VALUES (5, 'TEAM COURT\r\n', 'EG8402.PNG', '2025-01-01', 'EG8402\r\n');

-- ----------------------------
-- Table structure for tbl_self_inspect
-- ----------------------------
DROP TABLE IF EXISTS `tbl_self_inspect`;
CREATE TABLE `tbl_self_inspect`  (
  `id_inspect` int NOT NULL,
  `self_inspect` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_inspect`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_self_inspect
-- ----------------------------
INSERT INTO `tbl_self_inspect` VALUES (1, 'CUTTER\r\n');
INSERT INTO `tbl_self_inspect` VALUES (2, 'INPUT COMP.TREATMENT\r\n');
INSERT INTO `tbl_self_inspect` VALUES (3, 'SEWING\r\n');
INSERT INTO `tbl_self_inspect` VALUES (4, 'ASSY INPUT OUTSOLE / MARKING\r\n');
INSERT INTO `tbl_self_inspect` VALUES (5, 'ASSEMBLY\r\n');

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user`  (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `is_active` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Adam', 1);
INSERT INTO `tbl_user` VALUES (2, 'adam', '$2y$10$AbOpVermHsaoMaFCyE0wgeoEQJVed4y9m07iME6Y3MaAxca7WftHG', 'Adam 1', 0);

SET FOREIGN_KEY_CHECKS = 1;
