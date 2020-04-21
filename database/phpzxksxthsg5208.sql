/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50160
Source Host           : localhost:3306
Source Database       : phpzxksxthsg5208

Target Server Type    : MYSQL
Target Server Version : 50160
File Encoding         : 65001

Date: 2020-04-15 09:11:34
*/
create database phpzxksxthsg5208;
use   phpzxksxthsg5208;

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `allusers`
-- ----------------------------
DROP TABLE IF EXISTS `allusers`;
CREATE TABLE `allusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `cx` varchar(50) DEFAULT '普通管理员',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of allusers
-- ----------------------------
INSERT INTO `allusers` VALUES ('2', 'alj', '16300105', '超级管理员', '2020-03-09 09:05:05');

-- ----------------------------
-- Table structure for `chengji`
-- ----------------------------
DROP TABLE IF EXISTS `chengji`;
CREATE TABLE `chengji` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `yonghuming` varchar(255) DEFAULT NULL,
  `danxuanti` int(11) DEFAULT NULL,
  `tiankongti` int(11) DEFAULT NULL,
  `panduanti` int(11) DEFAULT NULL,
  `zf` int(11) DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bianhao` varchar(255) DEFAULT NULL,
  `kemu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of chengji
-- ----------------------------
INSERT INTO `chengji` VALUES ('44', '001', '24', '0', '30', '54', '2020-03-09 02:43:28', '003', '计算机');
INSERT INTO `chengji` VALUES ('45', '003', '15', '0', '30', '45', '2020-03-09 02:50:28', '004', '计算机');
INSERT INTO `chengji` VALUES ('46', '001', '40', '0', '10', '50', '2020-03-09 12:58:10', '212', '计算机');
INSERT INTO `chengji` VALUES ('47', '001', '40', '0', '20', '60', '2020-03-09 14:07:45', '212', '计算机');

-- ----------------------------
-- Table structure for `cuotijilu`
-- ----------------------------
DROP TABLE IF EXISTS `cuotijilu`;
CREATE TABLE `cuotijilu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `cuotiid` varchar(500) DEFAULT ',',
  `lb` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cuotijilu
-- ----------------------------
INSERT INTO `cuotijilu` VALUES ('133', '001', '20', '单选题');
INSERT INTO `cuotijilu` VALUES ('134', '001', '22', '单选题');
INSERT INTO `cuotijilu` VALUES ('135', '001', '7', '填空题');
INSERT INTO `cuotijilu` VALUES ('136', '001', '8', '填空题');
INSERT INTO `cuotijilu` VALUES ('137', '001', '9', '填空题');
INSERT INTO `cuotijilu` VALUES ('138', '001', '10', '填空题');
INSERT INTO `cuotijilu` VALUES ('139', '001', '11', '填空题');
INSERT INTO `cuotijilu` VALUES ('140', '003', '20', '单选题');
INSERT INTO `cuotijilu` VALUES ('141', '003', '22', '单选题');
INSERT INTO `cuotijilu` VALUES ('142', '003', '5', '填空题');
INSERT INTO `cuotijilu` VALUES ('143', '003', '7', '填空题');
INSERT INTO `cuotijilu` VALUES ('144', '003', '8', '填空题');
INSERT INTO `cuotijilu` VALUES ('145', '003', '10', '填空题');
INSERT INTO `cuotijilu` VALUES ('146', '003', '11', '填空题');
INSERT INTO `cuotijilu` VALUES ('147', '001', '20', '单选题');
INSERT INTO `cuotijilu` VALUES ('148', '001', '22', '单选题');
INSERT INTO `cuotijilu` VALUES ('149', '001', '6', '填空题');
INSERT INTO `cuotijilu` VALUES ('150', '001', '10', '填空题');
INSERT INTO `cuotijilu` VALUES ('151', '001', '20', '判断题');
INSERT INTO `cuotijilu` VALUES ('152', '001', '20', '单选题');
INSERT INTO `cuotijilu` VALUES ('153', '001', '22', '单选题');
INSERT INTO `cuotijilu` VALUES ('154', '001', '6', '填空题');
INSERT INTO `cuotijilu` VALUES ('155', '001', '10', '填空题');

-- ----------------------------
-- Table structure for `danxuanti`
-- ----------------------------
DROP TABLE IF EXISTS `danxuanti`;
CREATE TABLE `danxuanti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kemu` varchar(50) DEFAULT NULL,
  `timu` varchar(50) DEFAULT NULL,
  `xuanxiangA` varchar(50) DEFAULT NULL,
  `xuanxiangB` varchar(50) DEFAULT NULL,
  `xuanxiangC` varchar(50) DEFAULT NULL,
  `xuanxiangD` varchar(50) DEFAULT NULL,
  `daan` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of danxuanti
-- ----------------------------
INSERT INTO `danxuanti` VALUES ('2', '数学', 'rtjrt', 'rkrt', 'kr', 'ktrkr', 'rthrthr', 'A', '2020-03-09 09:05:05');
INSERT INTO `danxuanti` VALUES ('3', '数学', 'yuluylyu', 'he', 'erje', 'jrjt', 'rkrtkr', 'B', '2020-03-09 09:05:05');
INSERT INTO `danxuanti` VALUES ('4', '数学', 'ykytk', 'ererh', 'ejre', 'jrjtr', 'ktrktr', 'C', '2020-03-09 09:05:05');
INSERT INTO `danxuanti` VALUES ('5', '数学', 'kj.kj', 'jyt', 'jtyk', 'rtr', 'urtutr', 'D', '2020-03-09 09:05:05');
INSERT INTO `danxuanti` VALUES ('6', '数学', 'rehrej', 'tyjty', 'kytkty', 'hrthtr', 'jtrjrt', 'A', '2020-03-09 09:05:05');
INSERT INTO `danxuanti` VALUES ('7', '数学', 'erreyr', 'yjt', 'jytkr', 'krt', 'rjtrjkrt', 'A', '2020-03-09 09:05:05');
INSERT INTO `danxuanti` VALUES ('8', '数学', 'gfh', 'fjy', 'tyk', 'tykty', 'luylyu', 'B', '2020-03-09 09:05:05');
INSERT INTO `danxuanti` VALUES ('9', '数学', 'saf', 'dgsdg', 'erhre', 'erje', 'rgerge', 'C', '2020-03-09 09:05:05');
INSERT INTO `danxuanti` VALUES ('10', '数学', 'asfsa', 'gdfg', 'rehr', 'reher', 'jrejer', 'A', '2020-03-09 09:05:05');
INSERT INTO `danxuanti` VALUES ('11', '数学', 'gerg', 'wrqw', 'rwq', 'reher', 'jrejer', 'A', '2020-03-09 09:05:05');
INSERT INTO `danxuanti` VALUES ('12', '数学', '34y3y', '34y54', 'u45', 'u54u4', 'u54u54', 'A', '2020-03-09 09:05:05');
INSERT INTO `danxuanti` VALUES ('13', '数学', 'hrher', 'jrejre', 'reje', 'jrejre', 'jeje', 'A', '2020-03-09 09:05:05');
INSERT INTO `danxuanti` VALUES ('14', '数学', 'grehre', 'hre', 'hre', 'jree', 'rjere', 'A', '2020-03-09 09:05:05');
INSERT INTO `danxuanti` VALUES ('15', '法律', 'trjrtjrt', 'jtrj', 'rtkr', 'rtk', 'ktrr', 'A', '2020-03-09 09:05:05');
INSERT INTO `danxuanti` VALUES ('17', '计算机', 'fdffda', 'gfgs', 'gfsg', 'gfh', 'faf', 'A', '2020-03-09 01:12:24');
INSERT INTO `danxuanti` VALUES ('18', '计算机', 'fcddfaf', 'ghjh', 'jkgk', 'jhdfj', 'fgsf', 'A', '2020-03-09 01:14:36');
INSERT INTO `danxuanti` VALUES ('19', '计算机', 'jhjjgk', 'klkhl', 'uoyi', 'iuti', 'jdghj', 'A', '2020-03-09 01:14:48');
INSERT INTO `danxuanti` VALUES ('20', '计算机', 'jyjjhf', 'uk', 'hwsg', 'tr', 'erwt', 'C', '2020-03-09 01:14:57');
INSERT INTO `danxuanti` VALUES ('21', '计算机', 'yhig', 'iuo', 'oiy', 'oyt', 'req', 'A', '2020-03-09 01:15:02');
INSERT INTO `danxuanti` VALUES ('22', '计算机', 'tyui', 'orea', 'twy', 'fsyh', 'ytey', 'C', '2020-03-09 01:15:12');
INSERT INTO `danxuanti` VALUES ('23', '医学', 'aaa', 'fsfgsfg', 'gfsggh', 'hgjh', 'hgdh', 'A', '2020-03-09 03:18:03');
INSERT INTO `danxuanti` VALUES ('25', '医学', 'fdaf', 'gfgs', 'hg', 'hgfg', 'te', 'A', '2020-03-09 03:52:01');
INSERT INTO `danxuanti` VALUES ('27', '警章', 'fadfgaadf', 'gfda', 'ggfsg', 'gfa', 'fafdaf', 'A', '2020-03-09 02:49:10');

-- ----------------------------
-- Table structure for `jiaoshixinxi`
-- ----------------------------
DROP TABLE IF EXISTS `jiaoshixinxi`;
CREATE TABLE `jiaoshixinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gonghao` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `mima` varchar(50) DEFAULT NULL,
  `xingbie` varchar(50) DEFAULT NULL,
  `zhujiaokecheng` varchar(50) DEFAULT NULL,
  `zhaopian` varchar(50) DEFAULT NULL,
  `zhicheng` varchar(50) DEFAULT NULL,
  `lianxidianhua` varchar(50) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of jiaoshixinxi
-- ----------------------------
INSERT INTO `jiaoshixinxi` VALUES ('2', '009', '梅邹雁', '001', '男', '语文', 'uploadfile/nopic.jpg', '讲师', '64601233', '没问题', '2020-03-09 02:45:18');
INSERT INTO `jiaoshixinxi` VALUES ('3', '010', '何永康', '001', '男', '政治', 'uploadfile/nopic.jpg', '助教', '6548745', '无', '2020-03-09 02:45:18');
INSERT INTO `jiaoshixinxi` VALUES ('4', '026', '伍兆斌', '001', '女', '线性代数', 'uploadfile/nopic.jpg', '助理', '64601848', 'ok', '2020-03-09 02:45:18');
INSERT INTO `jiaoshixinxi` VALUES ('5', '004', '科比', '001', '女', '软件工程', 'uploadfile/nopic.jpg', '副教授', '89005461', '无', '2020-03-09 02:45:18');
INSERT INTO `jiaoshixinxi` VALUES ('6', '001', '梅西', '001', '女', '英语', 'uploadfile/nopic.jpg', '工程师', '4265325', 'abc', '2020-03-09 02:45:18');
INSERT INTO `jiaoshixinxi` VALUES ('7', '002', '张继科', '002', '男', '计算机', 'uploadfile/15837338552sn5.jpg', '教授', '15179062623', '砂垫层', '2020-03-09 14:04:29');

-- ----------------------------
-- Table structure for `kechengxinxi`
-- ----------------------------
DROP TABLE IF EXISTS `kechengxinxi`;
CREATE TABLE `kechengxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kechengmingcheng` varchar(300) DEFAULT NULL,
  `xueshi` varchar(50) DEFAULT NULL,
  `xuefen` varchar(50) DEFAULT NULL,
  `leixing` varchar(50) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of kechengxinxi
-- ----------------------------
INSERT INTO `kechengxinxi` VALUES ('2', '语文', '38', '2', '选修', 'weggw', '2020-03-09 09:05:05');
INSERT INTO `kechengxinxi` VALUES ('3', '数学', '30', '1', '必修', 'gewgwe', '2020-03-09 09:05:05');
INSERT INTO `kechengxinxi` VALUES ('4', '计算机', '40', '3', '必修', 'dsgsdgds', '2020-03-09 09:05:05');
INSERT INTO `kechengxinxi` VALUES ('5', '法律', '28', '1', '选修', 'fwegwegw', '2020-03-09 09:05:05');
INSERT INTO `kechengxinxi` VALUES ('9', '医学', '50', '5', '必修', 'fdafda', '2020-03-09 03:17:17');
INSERT INTO `kechengxinxi` VALUES ('11', '警章', '50', '5', '必修', 'fadfdaf', '2020-03-09 02:49:01');

-- ----------------------------
-- Table structure for `panduanti`
-- ----------------------------
DROP TABLE IF EXISTS `panduanti`;
CREATE TABLE `panduanti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timu` varchar(500) DEFAULT NULL,
  `kemu` varchar(50) DEFAULT NULL,
  `daan` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of panduanti
-- ----------------------------
INSERT INTO `panduanti` VALUES ('2', 'ewggew', '数学', '错', '2020-03-09 01:57:50');
INSERT INTO `panduanti` VALUES ('3', 'ewgewhewhw', '数学', '对', '2020-03-09 01:57:59');
INSERT INTO `panduanti` VALUES ('4', 'htrjtrjtr', '数学', '对', '2020-03-09 01:58:01');
INSERT INTO `panduanti` VALUES ('5', 'gdsgsdgwehwhew', '计算机', '对', '2020-03-09 01:58:03');
INSERT INTO `panduanti` VALUES ('6', 'grehrher', '数学', '错', '2020-03-09 01:58:07');
INSERT INTO `panduanti` VALUES ('7', 'nyjtjyjyt', '数学', '错', '2020-03-09 01:58:09');
INSERT INTO `panduanti` VALUES ('8', 'bsdgeweh54h5h54', '数学', '对', '2020-03-09 01:58:12');
INSERT INTO `panduanti` VALUES ('9', 'fgvfgag', '计算机', '对', '2020-03-09 01:57:16');
INSERT INTO `panduanti` VALUES ('10', 'gagaf', '计算机', '对', '2020-03-09 01:57:19');
INSERT INTO `panduanti` VALUES ('11', 'gjdjdjh', '计算机', '对', '2020-03-09 01:57:25');
INSERT INTO `panduanti` VALUES ('12', 'jdhgjhjhj', '法律', '对', '2020-03-09 01:57:27');
INSERT INTO `panduanti` VALUES ('13', 'jhjhdj', '计算机', '对', '2020-03-09 01:57:30');
INSERT INTO `panduanti` VALUES ('14', 'jhfkjfk', '法律', '对', '2020-03-09 01:57:32');
INSERT INTO `panduanti` VALUES ('15', 'jkjkjk', '法律', '对', '2020-03-09 01:57:34');
INSERT INTO `panduanti` VALUES ('16', 'hgfg', '法律', '对', '2020-03-09 01:57:37');
INSERT INTO `panduanti` VALUES ('17', 'gfgh', '计算机', '对', '2020-03-09 01:57:42');
INSERT INTO `panduanti` VALUES ('18', 'hgjhj', '法律', '对', '2020-03-09 01:57:44');
INSERT INTO `panduanti` VALUES ('19', 'hgdhg', '计算机', '对', '2020-03-09 01:57:47');
INSERT INTO `panduanti` VALUES ('20', 'hjkjh', '计算机', '对', '2020-03-09 01:57:50');
INSERT INTO `panduanti` VALUES ('22', 'fdafdf', '警章', '对', '2020-03-09 02:49:16');

-- ----------------------------
-- Table structure for `qunzuxinxi`
-- ----------------------------
DROP TABLE IF EXISTS `qunzuxinxi`;
CREATE TABLE `qunzuxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qunzubianhao` varchar(50) DEFAULT NULL,
  `qunzumingcheng` varchar(50) DEFAULT NULL,
  `fuzelaoshi` varchar(50) DEFAULT NULL,
  `zuyuanxuesheng` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of qunzuxinxi
-- ----------------------------
INSERT INTO `qunzuxinxi` VALUES ('2', '411522799', 'S群组', '024', '', '2020-03-09 04:52:04');
INSERT INTO `qunzuxinxi` VALUES ('3', '411512747', 'M群组', '006', '', '2020-03-09 04:52:04');
INSERT INTO `qunzuxinxi` VALUES ('4', '411512747', 'X群组', '002', '', '2020-03-09 04:52:04');
INSERT INTO `qunzuxinxi` VALUES ('5', '411522799', 'L群组', '016', '', '2020-03-09 04:52:04');
INSERT INTO `qunzuxinxi` VALUES ('6', '411572410', 'A群组', '001', '004；021；', '2020-03-09 04:52:04');
INSERT INTO `qunzuxinxi` VALUES ('7', '15549730267128', 'ffgg', '001', '009；005；', '2020-03-09 04:57:10');
INSERT INTO `qunzuxinxi` VALUES ('8', '15549731418019', 'fgghhjj', '001', '001；005；004；021；', '2020-03-09 04:59:08');

-- ----------------------------
-- Table structure for `shijuanshengcheng`
-- ----------------------------
DROP TABLE IF EXISTS `shijuanshengcheng`;
CREATE TABLE `shijuanshengcheng` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `bianhao` varchar(255) CHARACTER SET gb2312 DEFAULT NULL,
  `kemu` varchar(50) DEFAULT NULL,
  `danxuantishu` int(11) DEFAULT NULL,
  `danxuanfenzhi` int(11) DEFAULT NULL,
  `tiankongtishu` int(11) DEFAULT NULL,
  `tiankongfenzhi` int(11) DEFAULT NULL,
  `panduantishu` int(11) DEFAULT NULL,
  `panduanfenzhi` int(11) DEFAULT NULL,
  `danxuanti` varchar(255) CHARACTER SET gb2312 DEFAULT NULL,
  `tiankongti` varchar(255) CHARACTER SET gb2312 DEFAULT NULL,
  `panduanti` varchar(255) CHARACTER SET gb2312 DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shijuanshengcheng
-- ----------------------------
INSERT INTO `shijuanshengcheng` VALUES ('5', '001', '计算机', '5', '8', '5', '6', '5', '6', '19,18,17,21,22', '12,5,10,7,11', '13,9,10,11,20', '2020-03-09 02:14:37');
INSERT INTO `shijuanshengcheng` VALUES ('6', '002', '计算机', '3', '10', '3', '10', '4', '10', '19,17,21', '12,11,8', '11,10,13,5', '2020-03-09 03:19:34');
INSERT INTO `shijuanshengcheng` VALUES ('7', '003', '计算机', '5', '8', '5', '6', '5', '6', '21,18,17,20,22', '10,7,8,9,11', '11,13,19,9,17', '2020-03-09 03:53:28');
INSERT INTO `shijuanshengcheng` VALUES ('8', '004', '计算机', '5', '5', '5', '6', '5', '6', '18,20,21,17,22', '8,11,10,7,5', '9,13,11,10,19', '2020-03-09 02:49:46');
INSERT INTO `shijuanshengcheng` VALUES ('9', '212', '计算机', '6', '10', '2', '10', '2', '10', '22,20,19,17,21,18', '6,10', '20,13', '2020-03-09 12:57:38');

-- ----------------------------
-- Table structure for `tiankongti`
-- ----------------------------
DROP TABLE IF EXISTS `tiankongti`;
CREATE TABLE `tiankongti` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `timu` varchar(500) CHARACTER SET gb2312 DEFAULT NULL,
  `kemu` varchar(50) DEFAULT NULL,
  `daan` varchar(255) CHARACTER SET gb2312 DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tiankongti
-- ----------------------------
INSERT INTO `tiankongti` VALUES ('1', 'wegew', '数学', 'gwegew', '2020-03-09 02:00:11');
INSERT INTO `tiankongti` VALUES ('2', 'hhheh', '数学', 'rejej', '2020-03-09 02:00:05');
INSERT INTO `tiankongti` VALUES ('3', 'jytjytkytk', '数学', 'kytkyt', '2020-03-09 01:59:57');
INSERT INTO `tiankongti` VALUES ('4', 'gegewgw', '数学', 'weg', '2020-03-09 01:59:52');
INSERT INTO `tiankongti` VALUES ('5', 'jytyktkty', '计算机', 'kkt', '2020-03-09 01:58:26');
INSERT INTO `tiankongti` VALUES ('6', 'hewhewhw', '计算机', 'hwehw', '2020-03-09 01:58:34');
INSERT INTO `tiankongti` VALUES ('7', 'gsfg', '计算机', 'jkjgk', '2020-03-09 01:57:57');
INSERT INTO `tiankongti` VALUES ('8', 'kjgkljgkl', '计算机', 'kjkf', '2020-03-09 01:58:01');
INSERT INTO `tiankongti` VALUES ('9', 'kjgkj', '计算机', 'jhfjhf', '2020-03-09 01:58:04');
INSERT INTO `tiankongti` VALUES ('10', 'jgkjgk', '计算机', 'hgh', '2020-03-09 01:58:08');
INSERT INTO `tiankongti` VALUES ('11', 'hjkhjf', '计算机', 'gbdh', '2020-03-09 01:58:12');
INSERT INTO `tiankongti` VALUES ('12', 'jhfjfhj', '计算机', 'hghg', '2020-03-09 01:58:16');
INSERT INTO `tiankongti` VALUES ('13', 'fdafdf', '警章', 'fdafdf', '2020-03-09 02:49:23');

-- ----------------------------
-- Table structure for `xueshengxinxi`
-- ----------------------------
DROP TABLE IF EXISTS `xueshengxinxi`;
CREATE TABLE `xueshengxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yonghuming` varchar(50) DEFAULT NULL,
  `mima` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `xingbie` varchar(50) DEFAULT NULL,
  `nianling` varchar(50) DEFAULT NULL,
  `banji` varchar(50) DEFAULT NULL,
  `lianxifangshi` varchar(50) DEFAULT NULL,
  `youxiang` varchar(50) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of xueshengxinxi
-- ----------------------------
INSERT INTO `xueshengxinxi` VALUES ('2', '021', '001', '詹姆斯', '男', '33', '', '18759640002', 'trodd@yahoo.com', '无', '2020-03-09 12:46:29');
INSERT INTO `xueshengxinxi` VALUES ('3', '004', '001', '胡歌', '女', '33', '', '13159863241', 'regrodd@qq.com', '暂无', '2020-03-09 12:46:29');
INSERT INTO `xueshengxinxi` VALUES ('4', '005', '001', '周盛', '女', '33', '', '13623256544', 'grhtrhk@163.com', '没问题', '2020-03-09 12:46:29');
INSERT INTO `xueshengxinxi` VALUES ('5', '009', '001', '伍兆斌', '男', '23', '', '13910215489', '56547474@qq.com', '无', '2020-03-09 12:46:29');
INSERT INTO `xueshengxinxi` VALUES ('6', '001', '001', '邓超', '男', '33', '', '13769548711', '43643933@qq.com', 'ok', '2020-03-09 12:46:29');
INSERT INTO `xueshengxinxi` VALUES ('7', '444', '444', '刘诗雯', '女', '22', 'A01', '15112634563', '1451754085@qq.com', 'SD', '2020-03-09 14:04:58');
