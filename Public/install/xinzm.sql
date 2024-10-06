/*
Navicat MySQL Data Transfer

Source Server         : 333333333333333333333
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : lzm

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-06-10 15:04:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `yn_admin`
-- ----------------------------
DROP TABLE IF EXISTS `yn_admin`;
CREATE TABLE `yn_admin` (
  `id` int(111) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yn_admin
-- ----------------------------
INSERT INTO `yn_admin` VALUES ('1', 'admin', 'b1bbf3562257761f54e6e051aaf7e1af');

-- ----------------------------
-- Table structure for `yn_adver`
-- ----------------------------
DROP TABLE IF EXISTS `yn_adver`;
CREATE TABLE `yn_adver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `picname` varchar(255) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yn_adver
-- ----------------------------
INSERT INTO `yn_adver` VALUES ('12', '免费小说', 'https://m.biquge5200.cc/', '6', 'http://zm.aun5.cn/Public/uploads/5c5008eadf81a.jpg', '首页');
INSERT INTO `yn_adver` VALUES ('13', '超级优惠', 'http://www.baidu.com', '7', 'http://zm.aun5.cn/Public/uploads/5c67a5243d909.png', '首页');
INSERT INTO `yn_adver` VALUES ('14', '抓娃娃', 'http://www.baidu.com', '8', 'http://zm.aun5.cn/Public/uploads/5c67a54195cb0.png', '首页');
INSERT INTO `yn_adver` VALUES ('15', '捞宝箱', 'http://www.baidu.com', '9', 'http://zm.aun5.cn/Public/uploads/5c67a55b748a3.jpg', '首页');
INSERT INTO `yn_adver` VALUES ('18', '爱奇艺', 'http://m.iqiyi.com/vip', '1', 'http://zm.aun5.cn/Public/uploads/5c5006cb695e7.jpg', 'VIP');
INSERT INTO `yn_adver` VALUES ('19', '腾讯视频', 'http://m.v.qq.com/tv.html', '2', 'http://zm.aun5.cn/Public/uploads/5c5006f3dfc6f.png', 'VIP');
INSERT INTO `yn_adver` VALUES ('20', '优酷视频', 'https://youku.com', '3', 'http://zm.aun5.cn/Public/uploads/5c50070a53d14.jpg', 'VIP');
INSERT INTO `yn_adver` VALUES ('21', '搜狐视频', 'https://m.tv.sohu.com', '4', 'http://zm.aun5.cn/Public/uploads/5c50072699eb9.jpg', 'VIP');
INSERT INTO `yn_adver` VALUES ('24', '待续', 'http://www.baidu.com', '1', 'http://zm.aun5.cn/Public/uploads/5c5012bd9a985.jpg', '推荐');
INSERT INTO `yn_adver` VALUES ('26', '11', 'http://www.baidu.com', '1', 'http://zm.aun5.cn/Public/uploads/5c62ffe3dc290.png', '直播轮播');
INSERT INTO `yn_adver` VALUES ('27', '11', 'http://www.baidu.com', '1', 'http://zm.aun5.cn/Public/uploads/5c7d32f012c7e.jpg', '直播图');
INSERT INTO `yn_adver` VALUES ('33', '疯狂', 'http://www.baidu.com', '3', 'http://zm.aun5.cn/Public/uploads/5c62fe95600cd.jpg', '首页轮播');
INSERT INTO `yn_adver` VALUES ('32', '日日日日日1', 'http://www.baidu.com', '1', 'http://zm.aun5.cn/Public/uploads/5c62fe3b312b3.jpg', '首页轮播');
INSERT INTO `yn_adver` VALUES ('34', 'PPTV', 'http://m.pptv.com', '6', 'http://zm.aun5.cn/Public/uploads/5c67a40c97f15.jpg', 'VIP');
INSERT INTO `yn_adver` VALUES ('35', 'M1905', 'http://vip.1905.com/?fr=homeh5_menu_wow', '7', 'http://zm.aun5.cn/Public/uploads/5c67a42faf3a5.jpg', 'VIP');
INSERT INTO `yn_adver` VALUES ('36', '暴风影音', 'http://m.baofeng.com/', '8', 'http://zm.aun5.cn/Public/uploads/5c67a442d6dcc.jpg', 'VIP');
INSERT INTO `yn_adver` VALUES ('37', '乐视视频', 'http://m.le.com', '9', 'http://zm.aun5.cn/Public/uploads/5c67a46673a12.jpg', 'VIP');
INSERT INTO `yn_adver` VALUES ('38', '风行视频', 'http://m.fun.tv/', '10', 'http://zm.aun5.cn/Public/uploads/5c67a477f40a1.jpg', 'VIP');
INSERT INTO `yn_adver` VALUES ('42', '123', 'www.baidu.com', '12', 'http://xzm.aun5.cn/Public/uploads/5cdd2b38a6bf1.jpg', 'VIP');
INSERT INTO `yn_adver` VALUES ('43', '11', '2', '2', 'http://xzm.aun5.cn/Public/uploads/5cee78b361150.png', '直播轮播');

-- ----------------------------
-- Table structure for `yn_config`
-- ----------------------------
DROP TABLE IF EXISTS `yn_config`;
CREATE TABLE `yn_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `webname` varchar(255) DEFAULT NULL,
  `jx1` varchar(255) DEFAULT NULL,
  `jx2` varchar(255) DEFAULT NULL,
  `jx3` varchar(255) DEFAULT NULL,
  `jx4` varchar(255) DEFAULT NULL,
  `jx5` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `yi` int(11) DEFAULT NULL,
  `er` int(11) DEFAULT NULL,
  `san` int(11) DEFAULT NULL,
  `tiyan` varchar(255) DEFAULT NULL,
  `yue` varchar(255) DEFAULT NULL,
  `jidu` varchar(255) DEFAULT NULL,
  `bannian` varchar(255) DEFAULT NULL,
  `nian` varchar(255) DEFAULT NULL,
  `yong` varchar(255) DEFAULT NULL,
  `daili` varchar(11) DEFAULT NULL,
  `dyi` int(11) DEFAULT NULL,
  `der` int(11) DEFAULT NULL,
  `dsan` int(11) DEFAULT NULL,
  `dsi` int(11) DEFAULT NULL,
  `dwu` int(11) DEFAULT NULL,
  `si` int(11) DEFAULT NULL,
  `wu` int(11) DEFAULT NULL,
  `jifen` int(11) DEFAULT NULL,
  `dailiqi` varchar(200) DEFAULT NULL,
  `dailiyi` varchar(200) DEFAULT NULL,
  `dailisan` varchar(200) DEFAULT NULL,
  `daililiu` varchar(200) DEFAULT NULL,
  `dailinian` varchar(200) DEFAULT NULL,
  `bangding` varchar(200) DEFAULT NULL,
  `xiazai` varchar(255) DEFAULT NULL,
  `zengji` varchar(255) DEFAULT NULL,
  `mima` varchar(255) DEFAULT NULL,
  `moshi` int(11) DEFAULT '2',
  `payh` varchar(200) DEFAULT NULL,
  `payk` varchar(200) DEFAULT NULL,
  `payt` varchar(200) DEFAULT NULL,
  `payu` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yn_config
-- ----------------------------
INSERT INTO `yn_config` VALUES ('1', '123', '新筑梦', 'http://jx.huodongz.com/?v=', 'http://api.nw3w.cn/youyi/?url=', 'http://api.xfsub.com/index.php?url=', 'http://api.bbbbbb.me/jx/?url=', 'https://jx.618g.com/?url=', '200', '56', '45', '34', '1', '2', '3', '4', '5', '6', null, '70', '60', '50', '20', '10', '10', '5', '1', '1', '2', '3', '4', '29', '30', 'https://fir.im/qz85', '10', '123123', '2', '1000', 'tC9P3Z3Q52Ejppi7mEP5xIz3Qz2rPxi2', 'http', 'http://pay.yabao6.com/');

-- ----------------------------
-- Table structure for `yn_djian`
-- ----------------------------
DROP TABLE IF EXISTS `yn_djian`;
CREATE TABLE `yn_djian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fuli` text,
  `dang` text,
  `shi` text,
  `jian` text,
  `shou` text,
  `dan` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yn_djian
-- ----------------------------
INSERT INTO `yn_djian` VALUES ('1', '&lt;p&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;1.赠送1个独立的后台&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;2.赠送自助生成激活码的权限&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;3.赠送个人专属的宣传海报&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;4.赠送个人专属的宣传网页&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;5.赠送全套宣传推广的方案和技术&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;6.免费培训，包教会，包赚钱&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;7.赠送3年VIP会员&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;8.赠送5张价值400元的年卡&amp;lt;br&amp;gt;（限量5万张,送完即止！！&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★仅需要398元，就能升级为【全网影视】的代理&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★导师手把手指导，免费培训&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★让每个学员找到适合自己的营销方式&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★我们将免费赠送你人脉和资源&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★轻轻松松就能月入10000元，甚至更多，包教会&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★并且全网VIP视频终生享有优先观看权&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★不管你是宝妈、上班族、学生、或失业在家均可&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★不限你的学历、性别、年龄&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★不管你是兼职还是全职都可以&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★只需要一部手机就可以上岗，不限工作地点&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★视频网站众多，分类不齐，想看的视频没有&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★视频网站太多，VIP充了一个又一个&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★视频APP太多，安装一个又一个&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★全网影视是一款汇聚全网视频的APP&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★它涵盖爱奇艺，腾讯，优酷等20多个视频资源&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★同时享有各大视频平台VIP会员的观影福利&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★手机只要安装了全网影视APP&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★从此在也不需在重复购买多个视频平台的VIP会员了&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★相当于拥有了十几种影视vip特权&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★用户只要安装了全网影视一般就不会再卸载&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★成为代理之后，你将会拥有一个独立的后台&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★可以在后台自由生成激活码&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★然后以官方价卖出，空手套白狼，零成本赚钱&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★用户到期后会主动找你续费买激活码&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★而且80%的用户体验后都会再次购买，不怕没有销路&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★假如你每天找到6个新用户买你的激活码&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★你卖60元/年，那么你就直接赚360元&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★一个月就赚10800元&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★并且你还可以批发激活码给给他人销售，赚中间差价&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★你还可以印刷实体卡片出售&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★仅仅卖激活码这一项收入就很可观了&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★只要你肯干，不怕你赚不到钱&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★成为代理之后，你就会享受三级分成&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★一级提成40%，二级提成20%，三级提成10%&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★假设，你成为代理之后，你推荐朋友A也成为代理&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★你可以直接得到A的40%的返利&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★这时候A发现这个是个好项目于是又推荐B也加入&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★这时候你还能得到B的20%的返利&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★没过多久B又推荐C也加入，你还能得到C的10%的返利&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★开通代理需要398元，假设你推荐了10位一级代理&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★每个一级代理也推荐了10位代理&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★每个二级代理又推荐了10位代理&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;&amp;lt;strong&amp;gt;★你的收入约为160×10+80×10²+40×10³=5万元&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★假如你有20个一级代理，能赚35万元&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★假如你有50个一级代理，能赚520万元&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★假如你有100个一级代理，能赚4080万元&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★被吓到了吧，这一切都是真的&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★只要你有能力推广&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;★后期收益无限放大12&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', null);

-- ----------------------------
-- Table structure for `yn_fanxian`
-- ----------------------------
DROP TABLE IF EXISTS `yn_fanxian`;
CREATE TABLE `yn_fanxian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `addtime` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yn_fanxian
-- ----------------------------

-- ----------------------------
-- Table structure for `yn_gonggao`
-- ----------------------------
DROP TABLE IF EXISTS `yn_gonggao`;
CREATE TABLE `yn_gonggao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `neirong` varchar(255) DEFAULT NULL,
  `addtime` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yn_gonggao
-- ----------------------------
INSERT INTO `yn_gonggao` VALUES ('8', '仅此一家正版，发现盗版从此不更新', '1550888869', null);
INSERT INTO `yn_gonggao` VALUES ('9', '搭建联系QQ1：2529218024 ', '1550889475', 'http://www.baidu.com');

-- ----------------------------
-- Table structure for `yn_jiage`
-- ----------------------------
DROP TABLE IF EXISTS `yn_jiage`;
CREATE TABLE `yn_jiage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qitian` double(8,2) DEFAULT NULL,
  `yigeyue` double(8,2) DEFAULT NULL,
  `sangeyue` double(8,2) DEFAULT NULL,
  `liugeyue` double(8,2) DEFAULT NULL,
  `yinian` double(8,2) DEFAULT NULL,
  `yongjiu` double(8,2) DEFAULT NULL,
  `daili` double(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yn_jiage
-- ----------------------------
INSERT INTO `yn_jiage` VALUES ('1', '0.10', '6.88', '18.88', '28.88', '38.88', '58.88', '0.10');

-- ----------------------------
-- Table structure for `yn_jifen`
-- ----------------------------
DROP TABLE IF EXISTS `yn_jifen`;
CREATE TABLE `yn_jifen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `fen` int(11) DEFAULT NULL,
  `picname` varchar(255) DEFAULT NULL,
  `con` text,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yn_jifen
-- ----------------------------
INSERT INTO `yn_jifen` VALUES ('6', '111222', '1', 'http://xzm.aun5.cn/Public/uploads/5cee7918833e1.png', '&lt;p&gt;3333333333&lt;br/&gt;&lt;/p&gt;', '1');

-- ----------------------------
-- Table structure for `yn_jilu`
-- ----------------------------
DROP TABLE IF EXISTS `yn_jilu`;
CREATE TABLE `yn_jilu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `time` varchar(255) NOT NULL,
  `ping` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2385 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yn_jilu
-- ----------------------------
INSERT INTO `yn_jilu` VALUES ('2371', '515', '破冰行动', 'http://www.iqiyi.com/v_19rsjr50nw.html?vfm=f_191_360y', '1560059803', '');
INSERT INTO `yn_jilu` VALUES ('2372', '515', '破冰行动', 'http://www.iqiyi.com/v_19rsjr4qag.html?vfm=f_191_360y', '1560059805', '');
INSERT INTO `yn_jilu` VALUES ('2373', '515', '破冰行动', 'http://www.iqiyi.com/v_19rsjr50nw.html?vfm=f_191_360y', '1560059808', '');
INSERT INTO `yn_jilu` VALUES ('2374', '515', '破冰行动', 'http://www.iqiyi.com/v_19rsjr50nw.html?vfm=f_191_360y', '1560059952', '');
INSERT INTO `yn_jilu` VALUES ('2375', '515', '破冰行动', 'http://www.iqiyi.com/v_19rsjr50nw.html?vfm=f_191_360y', '1560059954', '');
INSERT INTO `yn_jilu` VALUES ('2376', '515', '破冰行动', 'http://www.iqiyi.com/v_19rsjr50nw.html?vfm=f_191_360y', '1560059955', '');
INSERT INTO `yn_jilu` VALUES ('2377', '515', '破冰行动', 'http://www.iqiyi.com/v_19rsjr50nw.html?vfm=f_191_360y', '1560059956', '');
INSERT INTO `yn_jilu` VALUES ('2378', '515', '破冰行动', 'http://www.iqiyi.com/v_19rsjr50nw.html?vfm=f_191_360y', '1560059956', '');
INSERT INTO `yn_jilu` VALUES ('2379', '515', '破冰行动', 'http://www.iqiyi.com/v_19rsjr50nw.html?vfm=f_191_360y', '1560059957', '');
INSERT INTO `yn_jilu` VALUES ('2380', '515', '破冰行动', 'http://www.iqiyi.com/v_19rsgig534.html?vfm=f_191_360y', '1560059957', '');
INSERT INTO `yn_jilu` VALUES ('2381', '515', '破冰行动', 'http://www.iqiyi.com/v_19rsgig534.html?vfm=f_191_360y', '1560059958', '');
INSERT INTO `yn_jilu` VALUES ('2382', '515', '破冰行动', 'http://www.iqiyi.com/v_19rsjr4qag.html?vfm=f_191_360y', '1560059958', '');
INSERT INTO `yn_jilu` VALUES ('2383', '515', '破冰行动', 'http://www.iqiyi.com/v_19rsjr50nw.html?vfm=f_191_360y', '1560059966', '');
INSERT INTO `yn_jilu` VALUES ('2384', '515', '破冰行动', 'http://www.iqiyi.com/v_19rsjr50nw.html?vfm=f_191_360y', '1560060030', '');

-- ----------------------------
-- Table structure for `yn_jiorder`
-- ----------------------------
DROP TABLE IF EXISTS `yn_jiorder`;
CREATE TABLE `yn_jiorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `addtime` varchar(255) DEFAULT NULL,
  `dizhi` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yn_jiorder
-- ----------------------------

-- ----------------------------
-- Table structure for `yn_kami`
-- ----------------------------
DROP TABLE IF EXISTS `yn_kami`;
CREATE TABLE `yn_kami` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dianka` varchar(255) NOT NULL,
  `uid` int(11) DEFAULT '1',
  `ctime` int(11) DEFAULT '1528330296',
  `y` int(1) DEFAULT '0',
  `cha` int(11) DEFAULT NULL,
  `yid` int(1) DEFAULT '0',
  `time` int(11) DEFAULT NULL,
  `type` int(1) DEFAULT '0',
  `name` varchar(255) DEFAULT '一年',
  `stime` int(11) DEFAULT NULL,
  `sbh` int(11) DEFAULT NULL,
  `syr` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dianka` (`dianka`)
) ENGINE=InnoDB AUTO_INCREMENT=16512 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yn_kami
-- ----------------------------

-- ----------------------------
-- Table structure for `yn_news`
-- ----------------------------
DROP TABLE IF EXISTS `yn_news`;
CREATE TABLE `yn_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `con` text,
  `addtime` varchar(255) DEFAULT NULL,
  `jian` varchar(255) DEFAULT NULL,
  `picname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yn_news
-- ----------------------------
INSERT INTO `yn_news` VALUES ('2', '欢迎访问筑梦视频', '&lt;p&gt;欢迎访问筑梦视频&lt;/p&gt;', '1559133181', '欢迎访问筑梦视频', 'http://xzm.aun5.cn/Public/uploads/5cee7918833e1.png');

-- ----------------------------
-- Table structure for `yn_pay`
-- ----------------------------
DROP TABLE IF EXISTS `yn_pay`;
CREATE TABLE `yn_pay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `outtrade` varchar(200) NOT NULL,
  `trade` varchar(200) NOT NULL,
  `type` char(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `money` decimal(11,2) NOT NULL,
  `trade_status` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `time` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=174 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yn_pay
-- ----------------------------
INSERT INTO `yn_pay` VALUES ('166', '20190609122655515', '2019060912265517430', 'alipay', '周卡', '0.10', 'TRADE_SUCCESS', '515', '1560054457');
INSERT INTO `yn_pay` VALUES ('167', '20190609123026515', '2019060912302749120', 'alipay', '周卡', '0.10', 'TRADE_SUCCESS', '515', '1560054666');
INSERT INTO `yn_pay` VALUES ('168', '20190609133401515', '2019060913340230798', 'alipay', '周卡', '0.10', 'TRADE_SUCCESS', '515', '1560058462');
INSERT INTO `yn_pay` VALUES ('169', '20190609133935515', '2019060913393658835', 'alipay', '周卡', '0.10', 'TRADE_SUCCESS', '515', '1560058787');
INSERT INTO `yn_pay` VALUES ('170', '20190609134048515', '2019060913404978113', 'alipay', '周卡', '0.10', 'TRADE_SUCCESS', '515', '1560058867');
INSERT INTO `yn_pay` VALUES ('171', '20190609134138515', '2019060913413826898', 'alipay', '周卡', '0.10', 'TRADE_SUCCESS', '515', '1560058908');
INSERT INTO `yn_pay` VALUES ('172', '20190609134348515', '2019060913434952841', 'alipay', '周卡', '0.10', 'TRADE_SUCCESS', '515', '1560059038');
INSERT INTO `yn_pay` VALUES ('173', '20190609172700515', '2019060917270115887', 'alipay', '尊贵代理', '0.10', 'TRADE_SUCCESS', '515', '1560072433');

-- ----------------------------
-- Table structure for `yn_tan`
-- ----------------------------
DROP TABLE IF EXISTS `yn_tan`;
CREATE TABLE `yn_tan` (
  `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `nei` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `kai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yn_tan
-- ----------------------------
INSERT INTO `yn_tan` VALUES ('00000000001', '筑梦视频提醒您', '邀请还有免费获得会员哦！', 'http://zm.aun5.cn/App/Login/news.html', '2');

-- ----------------------------
-- Table structure for `yn_tixian`
-- ----------------------------
DROP TABLE IF EXISTS `yn_tixian`;
CREATE TABLE `yn_tixian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `addtime` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `beizhu` varchar(255) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `zhifubao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yn_tixian
-- ----------------------------

-- ----------------------------
-- Table structure for `yn_tv`
-- ----------------------------
DROP TABLE IF EXISTS `yn_tv`;
CREATE TABLE `yn_tv` (
  `title` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `url` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yn_tv
-- ----------------------------
INSERT INTO `yn_tv` VALUES ('CCTV-1', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521439425198&di=e943a6d00521e52c19ccea11b58463e5&imgtype=0&src=http%3A%2F%2Fimg.shiting5.com%2Fallimg%2F141014%2F6-1410141J5095D.jpg', 'http://183.252.176.10/PLTV/88888888/224/3221225829/index.m3u8', '1', 'tv');
INSERT INTO `yn_tv` VALUES ('CCTV-10', 'https://timgsa.baidu.com/timg?image&quality=80&size=b10000_10000&sec=1521435358&di=d07f3e1a7c6900b835e1d5c0d0c4e273&src=http://www.haoqu.net/uploadfile/2015/1121/20151121053338284.jpg', 'rtsp://119.39.49.116:554/ch00000090990000001021.sdp?vcdnid=001', '2', 'tv');
INSERT INTO `yn_tv` VALUES ('CCTV-11', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521445878977&di=4f085689f5c96dea17d00a92ea5fb93f&imgtype=0&src=http%3A%2F%2Fimg.weixinyidu.com%2F160229%2F9e23af76.jpg', 'rtsp://119.39.49.116:554/ch00000090990000001027.sdp?vcdnid=001', '3', 'tv');
INSERT INTO `yn_tv` VALUES ('CCTV-12', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521446009467&di=74027d7b08b44ba055d6222f7a0680f5&imgtype=0&src=http%3A%2F%2Fimg.shiting5.com%2Fallimg%2F160112%2F9-160112151ANa.jpg', 'http://ivi.bupt.edu.cn/hls/cctv12.m3u8', '4', 'tv');
INSERT INTO `yn_tv` VALUES ('CCTV-13', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521446098526&di=8a7c552f8607e78c0468f8439a62b17e&imgtype=0&src=http%3A%2F%2Fs.b2b168.com%2F2015%2F10%2F13%2F15%2F201510131507128198194.jpg', 'http://ivi.bupt.edu.cn/hls/cctv13.m3u8', '5', 'tv');
INSERT INTO `yn_tv` VALUES ('CCTV-14', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521446154197&di=5e5ed3bb182f5d4e8e173c1e7b049d75&imgtype=0&src=http%3A%2F%2Fwww.zhiboba.cc%2Fzbbimg%2Fcctv14.jpg', 'http://ivi.bupt.edu.cn/hls/cctv14.m3u8', '6', 'tv');
INSERT INTO `yn_tv` VALUES ('CCTV-15', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521446285189&di=f34f729320b6170aa86008079d8ae1f1&imgtype=0&src=http%3A%2F%2Fwww.twwiki.com%2Fuploads%2Fwiki%2Ff4%2F28%2F787680_0.jpg', 'http://ivi.bupt.edu.cn/hls/cctv15.m3u8', '7', 'tv');
INSERT INTO `yn_tv` VALUES ('CCTV-2', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521445199467&di=2b016bd3727e98473d3c91b08fd09a67&imgtype=0&src=http%3A%2F%2Fimg02.hc360.com%2Fjcz%2F201706%2F201706191030074170.jpg', 'http://223.110.243.172/PLTV/3/224/3221227207/index.m3u8', '8', 'tv');
INSERT INTO `yn_tv` VALUES ('CCTV-3', 'https://timgsa.baidu.com/timg?image&quality=80&size=b10000_10000&sec=1521429363&di=17950519d8cb8de1aba78b9be2bbe193&src=http://www.zhiboba.cc/zbbimg/cctv3.jpg', 'http://ivi.bupt.edu.cn/hls/cctv3hd.m3u8', '9', 'tv');
INSERT INTO `yn_tv` VALUES ('CCTV-4', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521445020972&di=6c8cf4e1261b6255b1bf50bac0b3a723&imgtype=jpg&src=http%3A%2F%2Fimg0.imgtn.bdimg.com%2Fit%2Fu%3D2514945715%2C2651028036%26fm%3D214%26gp%3D0.jpg', 'http://ivi.bupt.edu.cn/hls/cctv4.m3u8', '10', 'tv');
INSERT INTO `yn_tv` VALUES ('CCTV-5', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521439317567&di=2d8483699aa0e9e7669e6b61f60a32ad&imgtype=0&src=http%3A%2F%2Fwww.haoqu.net%2Fuploadfile%2F2015%2F0417%2F20150417122518526.jpg', 'http://ivi.bupt.edu.cn/hls/cctv5hd.m3u8', '11', 'tv');
INSERT INTO `yn_tv` VALUES ('CCTV-5+', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521439320868&di=86cabdc2f60308622d390e4600fc8908&imgtype=0&src=http%3A%2F%2Fpic.xwh.cn%2F0%2F10%2F32%2F75%2F10327574_955325.jpg', 'http://ivi.bupt.edu.cn/hls/cctv5phd.m3u8', '12', 'tv');
INSERT INTO `yn_tv` VALUES ('CCTV-6', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521439252964&di=95d46a04663c7c026a6efff6f7887d5d&imgtype=0&src=http%3A%2F%2Fimgsrc.baidu.com%2Fbaike%2Fpic%2Fitem%2Fac345982b2b7d0a2ad07fdafc8ef76094b369a32.jpg', 'http://ivi.bupt.edu.cn/hls/cctv6hd.m3u8', '13', 'tv');
INSERT INTO `yn_tv` VALUES ('CCTV-7', 'https://upload.wikimedia.org/wikipedia/commons/1/15/CCTV-7%E5%86%9B%E4%BA%8B%E5%86%9C%E4%B8%9A.png', 'http://ivi.bupt.edu.cn/hls/cctv7.m3u8', '14', 'tv');
INSERT INTO `yn_tv` VALUES ('CCTV-8', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521439215396&di=dc00a5466f59e6a95ea6e2bdda3ea5dd&imgtype=0&src=http%3A%2F%2Fwww.zhiboba.cc%2Fzbbimg%2Fcctv8.jpg', 'http://ivi.bupt.edu.cn/hls/cctv8hd.m3u8', '15', 'tv');
INSERT INTO `yn_tv` VALUES ('CCTV-9', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521445566698&di=15c7acdc129677bc1267effc0ac217d0&imgtype=0&src=http%3A%2F%2Fimg.shiting5.com%2Fallimg%2F160112%2F9-1601121F942D3.jpg', 'http://ivi.bupt.edu.cn/hls/cctv9.m3u8', '16', 'tv');
INSERT INTO `yn_tv` VALUES ('CCTV-NEW', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521446379998&di=2c70041e525559cfdc9fd511ee31d2ab&imgtype=0&src=http%3A%2F%2Fwww.tvyan.com%2Fuploads%2Fdianshi%2Fcctvnews.jpg', 'http://ivi.bupt.edu.cn/hls/cctv16.m3u8', '17', 'tv');
INSERT INTO `yn_tv` VALUES ('CHC高清电影', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521449765264&di=d34fdbee49173710e247b888dfaf799c&imgtype=0&src=http%3A%2F%2Fwww.5etime.com%2Finfo5%2Fuploads%2Fallimg%2F140204%2F6-1402040913150-L.jpg', 'http://ivi.bupt.edu.cn/hls/chchd.m3u8', '18', 'tv');
INSERT INTO `yn_tv` VALUES ('东方卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521438560889&di=a810c43c8006c83cd67c1a1a7f21a018&imgtype=0&src=http%3A%2F%2Fwww.askququ.com%2Fuploads%2Fallimg%2F160417%2F1_160417235823_1.jpg', 'http://ivi.bupt.edu.cn/hls/dfhd.m3u8', '19', 'tv');
INSERT INTO `yn_tv` VALUES ('云南卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521446996898&di=0c9e1f4fceb009660f8e13ab098f0e09&imgtype=jpg&src=http%3A%2F%2Fimg2.imgtn.bdimg.com%2Fit%2Fu%3D4167813717%2C485108299%26fm%3D214%26gp%3D0.jpg', 'http://ivi.bupt.edu.cn/hls/yntv.m3u8', '20', 'tv');
INSERT INTO `yn_tv` VALUES ('内蒙古卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521448672137&di=a06d1b4333aa024205e38dca84d1aa95&imgtype=0&src=http%3A%2F%2Fwww.zhiboba.cc%2Fzbbimg%2Fneimengguweishi_zbb.jpg', 'http://ivi.bupt.edu.cn/hls/nmtv.m3u8', '21', 'tv');
INSERT INTO `yn_tv` VALUES ('北京体育', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521438875915&di=76b9adf8f628c6cfc98e958c22bd63b4&imgtype=0&src=http%3A%2F%2Fimgbdb3.bendibao.com%2Fbjbdb%2F201512%2F17%2F20151217211837_18180.jpg', 'http://ivi.bupt.edu.cn/hls/btv6hd.m3u8', '22', 'tv');
INSERT INTO `yn_tv` VALUES ('北京卡酷少儿', 'https://timgsa.baidu.com/timg?image&quality=80&size=b10000_10000&sec=1521431022&di=35b5372e3943f45dd98ac14cf1176bce&src=http://i6.qhimg.com/dr/250_500_/t01cce007620ff6c031.jpg', 'http://ivi.bupt.edu.cn/hls/btv10.m3u8', '23', 'tv');
INSERT INTO `yn_tv` VALUES ('北京卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521438875915&di=76b9adf8f628c6cfc98e958c22bd63b4&imgtype=0&src=http%3A%2F%2Fimgbdb3.bendibao.com%2Fbjbdb%2F201512%2F17%2F20151217211837_18180.jpg', 'http://ivi.bupt.edu.cn/hls/btv1hd.m3u8', '24', 'tv');
INSERT INTO `yn_tv` VALUES ('北京影视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521449195463&di=b81841e08a3583fe2fee9b5fdb8ec201&imgtype=0&src=http%3A%2F%2Fimgbdb3.bendibao.com%2Fbjbdb%2F201512%2F17%2F20151217211837_18180.jpg', 'http://ivi.bupt.edu.cn/hls/btv4.m3u8', '25', 'tv');
INSERT INTO `yn_tv` VALUES ('北京文艺', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521438875915&di=76b9adf8f628c6cfc98e958c22bd63b4&imgtype=0&src=http%3A%2F%2Fimgbdb3.bendibao.com%2Fbjbdb%2F201512%2F17%2F20151217211837_18180.jpg', 'http://ivi.bupt.edu.cn/hls/btv2hd.m3u8', '26', 'tv');
INSERT INTO `yn_tv` VALUES ('厦门卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521440961685&di=56323ff2c8157013bcbd670c342cb87b&imgtype=0&src=http%3A%2F%2Fp2.img.cctvpic.com%2Fphotoworkspace%2Fcontentimg%2F2015%2F04%2F03%2F2015040317221992933.jpg', 'http://ivi.bupt.edu.cn/hls/jstv.m3u8', '27', 'tv');
INSERT INTO `yn_tv` VALUES ('四川卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521444118075&di=61bea82fed90d8c3aba7f28a833e4c80&imgtype=0&src=http%3A%2F%2Fwww.guojitv.com%2Fepg%2Fupfile%2F6922487a-5351-4924-9646-aa23331cb1e3.jpg', 'http://ivi.bupt.edu.cn/hls/sctv.m3u8', '28', 'tv');
INSERT INTO `yn_tv` VALUES ('天津卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521438045785&di=45ac121f3546beb424ed684869d48fc1&imgtype=jpg&src=http%3A%2F%2Fimg2.imgtn.bdimg.com%2Fit%2Fu%3D2388055552%2C3521134445%26fm%3D214%26gp%3D0.jpg', 'http://ivi.bupt.edu.cn/hls/tjhd.m3u8', '29', 'tv');
INSERT INTO `yn_tv` VALUES ('宁夏卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521447468222&di=5734aae221d04e164c1949c8155fa489&imgtype=0&src=http%3A%2F%2Fg.hiphotos.baidu.com%2Fzhidao%2Fpic%2Fitem%2Fd01373f082025aaf4a28b028fcedab64034f1a3f.jpg', 'http://ivi.bupt.edu.cn/hls/nxtv.m3u8', '30', 'tv');
INSERT INTO `yn_tv` VALUES ('安徽卫视', 'https://gss2.bdstatic.com/-fo3dSag_xI4khGkpoWK1HF6hhy/baike/w%3D268%3Bg%3D0/sign=c1b27653972f07085f052d06d11fdfa4/5fdf8db1cb1349544f478c785f4e9258d1094a54.jpg', 'http://ivi.bupt.edu.cn/hls/ahhd.m3u8', '31', 'tv');
INSERT INTO `yn_tv` VALUES ('山东卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521437766886&di=b7bfe474813aa2f4fc104537f08ea7d0&imgtype=0&src=http%3A%2F%2Fimg.sj33.cn%2Fuploads%2Fallimg%2F201402%2F104P93039-0.png', 'http://ivi.bupt.edu.cn/hls/sdhd.m3u8', '32', 'tv');
INSERT INTO `yn_tv` VALUES ('山西卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521448925319&di=a62df4a2fdf910baf00d4b2bf730f12d&imgtype=0&src=http%3A%2F%2Fwww.jinqiao-ad.com%2FUploadFile%2F2011913155047134.jpg', 'http://ivi.bupt.edu.cn/hls/sxrtv.m3u8', '33', 'tv');
INSERT INTO `yn_tv` VALUES ('广东卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521438132116&di=4805195ca7dc53af5804e28a917ff26a&imgtype=0&src=http%3A%2F%2Fwww.haoqu.net%2Fuploadfile%2F2015%2F0417%2F20150417123256441.jpg', 'http://ivi.bupt.edu.cn/hls/gdhd.m3u8', '34', 'tv');
INSERT INTO `yn_tv` VALUES ('广西卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521448570971&di=ba08008dd3bacccdad92314d9d4a1940&imgtype=0&src=http%3A%2F%2Fimg2.cache.netease.com%2Fent%2F2013%2F2%2F5%2F2013020513352409c8f.jpg', 'http://ivi.bupt.edu.cn/hls/gxtv.m3u8', '35', 'tv');
INSERT INTO `yn_tv` VALUES ('江苏卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521438608006&di=7e901d515c4e5732670c9ab0704ef311&imgtype=0&src=http%3A%2F%2Fphoto.renwen.com%2F3%2F740%2F374023_1354724541617895_s.jpg', 'http://ivi.bupt.edu.cn/hls/jshd.m3u8', '36', 'tv');
INSERT INTO `yn_tv` VALUES ('江西卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521447093511&di=ca7e7cdebaf7f6388a3f134acdb61796&imgtype=0&src=http%3A%2F%2Fi3.qhmsg.com%2Ft01325f825f5a837518.png', 'http://ivi.bupt.edu.cn/hls/jxtv.m3u8', '37', 'tv');
INSERT INTO `yn_tv` VALUES ('河北卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521441248113&di=bb63ad2313598edc50ded73b064ccd76&imgtype=0&src=http%3A%2F%2Fimg3.cache.netease.com%2Fent%2F2013%2F7%2F30%2F20130730163703b283f_550.jpg', 'http://ivi.bupt.edu.cn/hls/hebtv.m3u8', '38', 'tv');
INSERT INTO `yn_tv` VALUES ('河南卫视', 'https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/w%3D268%3Bg%3D0/sign=6cb4d33fdb160924dc25a51dec3c52c7/faf2b2119313b07e10c9e46107d7912397dd8c67.jpg', 'http://ivi.bupt.edu.cn/hls/hntv.m3u8', '39', 'tv');
INSERT INTO `yn_tv` VALUES ('浙江卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521438648272&di=9e9ceaa2e60008d3841f1a67da647e7c&imgtype=0&src=http%3A%2F%2Fimgbdb3.bendibao.com%2Fguangzhou%2F201511%2F20%2F2015112015311480.jpg', 'http://ivi.bupt.edu.cn/hls/zjhd.m3u8', '40', 'tv');
INSERT INTO `yn_tv` VALUES ('深圳卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521438330833&di=79b07ba371c9a9d29265e5291fd05bcf&imgtype=0&src=http%3A%2F%2Fphoto.hanyu.iciba.com%2Fupload%2Fencyclopedia_2%2F20%2F83%2Fbk_20831bb807a45638cfaf81df1122024d_4vR9PJ.jpg', 'http://ivi.bupt.edu.cn/hls/szhd.m3u8', '41', 'tv');
INSERT INTO `yn_tv` VALUES ('湖北卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b10000_10000&sec=1521427881&di=6e7f41afb9ea26065bc744129e2a2bba&src=http://img.sj33.cn/uploads/allimg/201402/7-140225100443R3.png', 'http://ivi.bupt.edu.cn/hls/hbhd.m3u8', '42', 'tv');
INSERT INTO `yn_tv` VALUES ('湖南卫视', 'https://gss1.bdstatic.com/9vo3dSag_xI4khGkpoWK1HF6hhy/baike/w%3D268%3Bg%3D0/sign=e737c9718c94a4c20a23e02d36cf7ce8/5ab5c9ea15ce36d3e486ab4e31f33a87e850b1c9.jpg', 'http://ivi.bupt.edu.cn/hls/hunanhd.m3u8', '43', 'tv');
INSERT INTO `yn_tv` VALUES ('甘肃卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521447579015&di=8a6c0bc5c0b82f09acbfe4aa18bd9839&imgtype=0&src=http%3A%2F%2Fwww.cctvmt.com%2Fmedia%2Fbig%2F41b61a89018d02b74cea19c16dfbfa1a.jpg', 'http://ivi.bupt.edu.cn/hls/gstv.m3u8', '44', 'tv');
INSERT INTO `yn_tv` VALUES ('福建东南卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521447260326&di=ee736f021eec49f3777d3f7388725162&imgtype=0&src=http%3A%2F%2Fs2.sinaimg.cn%2Fmw690%2F7e130453g7c6744376401%26690', 'http://ivi.bupt.edu.cn/hls/dntv.m3u8', '45', 'tv');
INSERT INTO `yn_tv` VALUES ('翡翠台', 'http://www.leshizhibo.com/uploads/images/53a3fd6f109eftvb.jpg', 'http://acm.gg/jade.m3u8', '46', 'tv');
INSERT INTO `yn_tv` VALUES ('贵州卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521447335101&di=ef7aaedeeba668817393768219d57940&imgtype=0&src=http%3A%2F%2Fxianzhi.net%2Fuploads%2F140728%2F1-140HQ43916194.jpg', 'http://ivi.bupt.edu.cn/hls/gztv.m3u8', '47', 'tv');
INSERT INTO `yn_tv` VALUES ('辽宁卫视', 'http://awb.img.xmtbang.com/img/uploadnew/201512/24/4ea7c36869c54392a3049fd70b50c3f6.jpg', 'http://ivi.bupt.edu.cn/hls/lnhd.m3u8', '48', 'tv');
INSERT INTO `yn_tv` VALUES ('重庆卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521439764215&di=e3c095e4061a9f71c22f9291ce99004b&imgtype=0&src=http%3A%2F%2Fwww.zqzhibo.com%2Fimages%2Fchannels%2Fcqws.gif', 'http://ivi.bupt.edu.cn/hls/cqhd.m3u8', '49', 'tv');
INSERT INTO `yn_tv` VALUES ('陕西卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521448386452&di=dd97e921ff61a30d5c267307111e8f04&imgtype=0&src=http%3A%2F%2Fimages.movie.xunlei.kankan.com%2Fgallery%2F1318%2F96be848cc1bb45bfb0768702eb03715f.jpg', 'http://ivi.bupt.edu.cn/hls/sxtv.m3u8', '50', 'tv');
INSERT INTO `yn_tv` VALUES ('青海卫视', 'http://img.shiting5.com/allimg/150119/6-150119212913J7.jpg', 'http://ivi.bupt.edu.cn/hls/gxtv.m3u8', '51', 'tv');
INSERT INTO `yn_tv` VALUES ('香港卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521450276217&di=1c4ff77aa56cb0ad739935130b06649b&imgtype=0&src=http%3A%2F%2Fwww.hinews.cn%2Fpic%2F0%2F13%2F47%2F28%2F13472840_865544.jpg', 'http://live.hkstv.hk.lxdns.com/live/hks/playlist.m3u8', '52', 'tv');
INSERT INTO `yn_tv` VALUES ('黑龙江卫视', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1521438462748&di=dab59ceb5ca559fc711dd2ef872f5e54&imgtype=0&src=http%3A%2F%2Fwww.hlyy.cc%2Fuploadfile%2F20150411%2Flmmr152l4vc.jpg', 'http://ivi.bupt.edu.cn/hls/hljhd.m3u8', '53', 'tv');

-- ----------------------------
-- Table structure for `yn_user`
-- ----------------------------
DROP TABLE IF EXISTS `yn_user`;
CREATE TABLE `yn_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `addtime` varchar(255) DEFAULT NULL,
  `jifen` int(255) DEFAULT '0',
  `zhifubao` varchar(255) DEFAULT NULL,
  `price` double(8,2) DEFAULT '0.00',
  `money` double(8,2) DEFAULT '0.00',
  `logintime` varchar(255) DEFAULT NULL,
  `regip` varchar(255) DEFAULT NULL,
  `mim` varchar(255) DEFAULT NULL,
  `viptime` varchar(255) DEFAULT NULL,
  `count` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '1' COMMENT '//1默认/2代理',
  `pid` int(11) DEFAULT '0',
  `path` varchar(255) DEFAULT '0,',
  `qdtime` varchar(255) DEFAULT NULL,
  `dizhi` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `yi1` int(11) DEFAULT '0',
  `yi2` int(11) DEFAULT '0',
  `yi3` int(11) DEFAULT '0',
  `yi4` int(11) DEFAULT '0',
  `zzz` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=520 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yn_user
-- ----------------------------

-- ----------------------------
-- Table structure for `yn_user_rel`
-- ----------------------------
DROP TABLE IF EXISTS `yn_user_rel`;
CREATE TABLE `yn_user_rel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lv` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT '0',
  `addtime` varchar(255) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=136 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yn_user_rel
-- ----------------------------
INSERT INTO `yn_user_rel` VALUES ('134', '1', '518', '518', '1560150040', '58837599');
INSERT INTO `yn_user_rel` VALUES ('135', '1', '519', '519', '1560150128', '58826239');
