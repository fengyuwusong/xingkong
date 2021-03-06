/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : index

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-03-24 16:32:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `index_config`
-- ----------------------------
DROP TABLE IF EXISTS `index_config`;
CREATE TABLE `index_config` (
  `id` int(11) NOT NULL,
  `banner1` varchar(300) NOT NULL,
  `banner2` varchar(300) NOT NULL,
  `banner3` varchar(300) NOT NULL,
  `banner4` varchar(300) NOT NULL,
  `article_url` varchar(1200) NOT NULL,
  `article_author` varchar(300) NOT NULL,
  `article_title` varchar(500) NOT NULL,
  `article_img` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of index_config
-- ----------------------------
INSERT INTO `index_config` VALUES ('1', 'tree.jpg', 'banner1.png', 'esbanner.png', 'live_common.jpg', '[\"http:\\/\\/mp.weixin.qq.com\\/s\\/HQe4ocmVxlKDLH3Wt1Edtg\",\"http:\\/\\/mp.weixin.qq.com\\/s\\/7BLsNrK3u-XxtSo0MWHD-g\",\"http:\\/\\/mp.weixin.qq.com\\/s\\/9uHldKS1Ms3rPiz-G9lnuw\",\"http:\\/\\/mp.weixin.qq.com\\/s\\/secF4V3loJFSlDiFRoeUdw\",\"http:\\/\\/mp.weixin.qq.com\\/s\\/Nsxvqel4h2QfCi3HqrngeQ\",\"http:\\/\\/mp.weixin.qq.com\\/s\\/Pld6J5qrpFIgJ3vMBYioFg\"]', '[\"01-22-2017 \\u73ca\\u59b9\",\"01-25-2017 \\u67d2\\u5b50\",\"02-07-2017 -23\",\"02-02-2017 \\u554a\\u7720\",\"10-25-2016 \\u5927\\u5b9d\",\"11-01-2016 \\u68ee\\u5f25\"]', '[\"\\u5e72\\u8d27\\u4f60\\u9020\\u5417 | \\u8981\\u4e0d\\u8981\\u6765\\u4e00\\u6b21\\u7a77\\u6e38\\uff1f\",\"\\u6211\\u4e0d\\u60f3\\u8d8a\\u6765\\u8d8a\\u4e0d\\u559c\\u6b22\\u8fc7\\u5e74\",\"\\u738b\\u8005\\u519c\\u836f\\u4e3a\\u4ec0\\u4e48\\u8fd9\\u4e48\\u6bd2\",\"\\u6807\\u7b7e\\u672a\\u843d\\uff0c\\u6807\\u7b7e\\u53c8\\u8d77\",\"\\u5927\\u5b9d | \\u4f60\\u522b\\u4e60\\u60ef\\uff0c\\u6211\\u4e0d\\u5728\",\"\\u68ee\\u5f25\\uff5c\\u662f\\u591c\"]', '[\"http://read.html5.qq.com/image?src=forum&q=5&r=0&imgflag=7&imageUrl=http://mmbiz.qpic.cn/mmbiz_jpg/2bo7fwPUPsaxOQuBreB03eZhqzdxjL9AsL6G82Hib1ia11T2pCCqUDYR98ygiarbaPcrhO5DzsiagkWKxMg8kTfDcg/0?wx_fmt=jpeg\",\"http://read.html5.qq.com/image?src=forum&q=5&r=0&imgflag=7&imageUrl=http://mmbiz.qpic.cn/mmbiz_jpg/2bo7fwPUPsb5DAPO1Z3fCH1XQZounfl5w7h9cy7JhfRibrLcMctEqeTHkV0ciawV5icIiaAXRBC3E1uQRKyoIYK1icQ/0?wx_fmt=jpeg\",\"http://read.html5.qq.com/image?src=forum&q=5&r=0&imgflag=7&imageUrl=http://mmbiz.qpic.cn/mmbiz_jpg/2bo7fwPUPsb9ALZhR12O0OxnViawqKEHoeKibSQeZHxfDw46CO9BGg09tsBTBxu4QfKnNtJqjnGm2pI9UWWQSITw/0?wx_fmt=jpeg\",\"http://read.html5.qq.com/image?src=forum&q=5&r=0&imgflag=7&imageUrl=http://mmbiz.qpic.cn/mmbiz_jpg/2bo7fwPUPsacGpYybbLmRR1aEPCkF7rODhvouLwhht8aaRkmb72GdneiaRnI1wbJibGhU1bZibZSmQ0ZpCHbpkQNg/0?wx_fmt=jpeg\",\"http://read.html5.qq.com/image?src=forum&q=5&r=0&imgflag=7&imageUrl=http://mmbiz.qpic.cn/mmbiz_jpg/2bo7fwPUPsYwMqahZaoOWKWB3bJjY8qtJjkJeWUUOLmib0luET9ibiaKRZXicvibBHPvfiaFyv4D8atTQa5NjoTiaxrng/0?wx_fmt=jpeg\",\"http://read.html5.qq.com/image?src=forum&q=5&r=0&imgflag=7&imageUrl=http://mmbiz.qpic.cn/mmbiz_jpg/2bo7fwPUPsYhkL7loIXLHXPU9w6do3x25TiaV7bPGHJIChrJgRnwgm31q3xWJkvI5aL2K1XIvicvnc690JVEj7yA/640?wx_fmt=jpeg&tp=webp&wxfrom=5&wx_lazy=1\"]');
