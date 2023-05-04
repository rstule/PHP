-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2023 年 04 月 23 日 10:16
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `phpyxscxthsg5811z8zc`
--
CREATE DATABASE IF NOT EXISTS `phpyxscxthsg5811z8zc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `phpyxscxthsg5811z8zc`;

-- --------------------------------------------------------

--
-- 表的结构 `allusers`
--

CREATE TABLE IF NOT EXISTS `allusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `cx` varchar(50) DEFAULT '普通管理员',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `allusers`
--

INSERT INTO `allusers` (`id`, `username`, `pwd`, `cx`, `addtime`) VALUES
(2, 'hsg', 'hsg', '超级管理员', '2023-02-08 10:34:36');

-- --------------------------------------------------------

--
-- 表的结构 `caozuojilu`
--

CREATE TABLE IF NOT EXISTS `caozuojilu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mouren` varchar(50) DEFAULT NULL,
  `quanxian` varchar(50) DEFAULT NULL,
  `caozuoshixiang` varchar(50) DEFAULT NULL,
  `xiangyingbiao` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=gb2312 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dingdanxinxi`
--

CREATE TABLE IF NOT EXISTS `dingdanxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dingdanhao` varchar(50) DEFAULT NULL,
  `dingdanjine` varchar(50) DEFAULT NULL,
  `dingdanneirong` varchar(500) DEFAULT NULL,
  `goumairen` varchar(50) DEFAULT NULL,
  `dianhua` varchar(50) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `issh` varchar(10) DEFAULT '否',
  `iszf` varchar(10) DEFAULT '否',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `dingdanxinxi`
--

INSERT INTO `dingdanxinxi` (`id`, `dingdanhao`, `dingdanjine`, `dingdanneirong`, `goumairen`, `dianhua`, `beizhu`, `issh`, `iszf`, `addtime`) VALUES
(1, '16758530739333', '65', '埃尔登法环', 'rstule', '15203948588', '无', '否', '否', '2023-04-11 14:46:28'),
(2, '16758530739343', '199', '之狼', 'hsg', '18839480666', '无', '否', '否', '2023-04-11 14:50:15'),
(3, '16814801271403', '162', '商品编号：283207724289CDK：BGRBZBZG3KSS购买数量：1;\r\n商品编号：283235875906CDK：BGRBZBZG3K购买数量：1;\r\n商品编号：283207724289CDK：BGRBZBZG3KSS购买数量：1;\r\n', 'rstule', '15203948588', '无', '否', '否', '2023-04-14 13:49:07'),
(4, '16814801491314', '0', '', 'rstule', '15203948588', '无', '否', '否', '2023-04-14 13:55:46'),
(5, '1681480552799008', '0', '', 'rstule', '15203948588', '无', '否', '否', '2023-04-14 13:58:39'),
(6, '16819747274870', '97', '商品编号：283248182801CDK：BGRBZBZG3K购买数量：1;\r\n商品编号：283207724289CDK：BGRBZBZG3KSS购买数量：1;\r\n', 'rstule', '15203948588', 'wu', '是', '否', '2023-04-20 07:13:21');

-- --------------------------------------------------------

--
-- 表的结构 `dx`
--

CREATE TABLE IF NOT EXISTS `dx` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `leibie` varchar(255) DEFAULT NULL,
  `content` text,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `dx`
--

INSERT INTO `dx` (`ID`, `leibie`, `content`, `addtime`) VALUES
(1, '系统公告', '<P>&nbsp;&nbsp;&nbsp; 欢迎大家登录我站，我站主要是为广大朋友精心制作的一个系统，希望大家能够在我站获得一个好心情，谢谢！</P><P>&nbsp;&nbsp;&nbsp; 自强不息，海纳百川，努力学习！</P>', '2023-02-08 10:34:36'),
(2, '系统简介', '<p>以人为本：公司的软、硬环境的设计和管理都应满足人性化的要求，让人性化的关怀触手可及。</p><p>公司精神:团队精神 创新精神 挑战精神 奉献精神</p><p>企业宗旨：诚信为本，稳健经营</p><p>企业价值观：与客户同忧乐</p>', '2023-02-08 10:34:36'),
(3, '关于我们', '&nbsp; &nbsp; 本公司坚持走:以质量求生存,以科技求发展,重合同守信用的道路,生产经营得到迅速发展。我们将以优质的产品和最完善的售后服务来真诚与各界朋友开展广泛的合作,共同创造一个美好的未来!<br />  <br />  公司行为准则:忠信仁义，以人为本。 <br />  忠：即忠诚，  包括三重含义：企业忠于国家、忠于民族；企业忠于客户；员工忠于企业。 <br />  信：即诚信，做企业要立足根本道德、信义，要诚实、讲信用。 <br />  仁：即仁爱，上司对下属要仁爱、体贴，同事之间要关怀、友爱。 <br />  义：即大义，公司在与合作伙伴、客户的交往过程中，不做损人利己的事，维护自己利益的前提是不损害他人利益；对民族、社会要共襄义举，要识大义，明是非。 <br />', '2023-02-08 10:34:36'),
(4, '联系方式', '联系人：xxxxxxxx<br />  电话：0000-0000000<br />  手机：010000000000<br />  传真：0000-0000000<br />  邮件：xxxxxxxx@163.com<br />  地址：您公司的地址<br />  网址：http://www.xxxx.com<br />', '2023-02-08 10:34:36');

-- --------------------------------------------------------

--
-- 表的结构 `goumaijilu`
--

CREATE TABLE IF NOT EXISTS `goumaijilu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shangpinbianhao` varchar(50) DEFAULT NULL,
  `shangpinmingcheng` varchar(50) DEFAULT NULL,
  `jiage` varchar(50) DEFAULT NULL,
  `kucun` varchar(50) DEFAULT NULL,
  `xiaoliang` varchar(50) DEFAULT NULL,
  `CDK` varchar(50) DEFAULT NULL,
  `goumaishuliang` varchar(50) DEFAULT NULL,
  `goumaijine` varchar(50) DEFAULT NULL,
  `goumairen` varchar(50) DEFAULT NULL,
  `issh` varchar(10) DEFAULT '否',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `goumaijilu`
--

INSERT INTO `goumaijilu` (`id`, `shangpinbianhao`, `shangpinmingcheng`, `jiage`, `kucun`, `xiaoliang`, `CDK`, `goumaishuliang`, `goumaijine`, `goumairen`, `issh`, `addtime`) VALUES
(5, '283207724289', '埃尔登法环', '65', '66', '63', 'BGRBZBZG3K', '1', '65', 'hsg', '否', '2023-03-28 13:23:41'),
(8, '283207724289', '埃尔登法环', '65', '63', '66', 'BGRBZBZG3K', '12', '65', 'raoshun', '否', '2023-04-08 17:21:25'),
(9, '283235875906', '之狼', '32', '63', '14', 'BGRBZBZG3K', '1', '32', 'hsg', '是', '2023-04-11 04:15:28'),
(10, '283207724289', '埃尔登法环', '65', '62', '67', 'BGRBZBZG3KSS', '1', '65', 'rstule', '是', '2023-04-11 14:08:13'),
(11, '283207724289', '埃尔登法环', '65', '61', '68', 'BGRBZBZG3KSS', '2', '130', 'hsg', '是', '2023-04-11 14:09:10'),
(12, '283235875906', '之狼', '32', '62', '15', 'BGRBZBZG3K', '3', '96', 'hsg', '否', '2023-04-11 14:11:39'),
(13, '283235875906', '之狼', '32', '59', '18', 'BGRBZBZG3K', '1', '32', 'hsg', '否', '2023-04-11 14:11:45'),
(14, '283207724289', '埃尔登法环', '65', '59', '70', 'BGRBZBZG3KSS', '1', '65', 'hsg', '否', '2023-04-11 14:24:11'),
(15, '283235875906', '之狼', '32', '58', '19', 'BGRBZBZG3K', '1', '32', 'rstule', '是', '2023-04-11 14:32:26'),
(16, '283207724289', '埃尔登法环', '65', '58', '71', 'BGRBZBZG3KSS', '2', '130', 'hsg', '否', '2023-04-12 14:02:07'),
(17, '283207724289', '埃尔登法环', '65', '56', '73', 'BGRBZBZG3KSS', '1', '65', 'rstule', '是', '2023-04-12 14:02:55'),
(18, '283235875906', '之狼', '32', '57', '20', 'BGRBZBZG3K', '1', '32', 'rstule', '是', '2023-04-14 07:35:50'),
(20, '283248182801', '植物大战僵尸', '32', '65', '79', 'BGRBZBZG3K', '1', '32', 'rstule', '是', '2023-04-20 02:46:12'),
(21, '283207724289', '埃尔登法环', '65', '54', '75', 'BGRBZBZG3KSS', '1', '65', 'rstule', '否', '2023-04-20 07:11:59');

-- --------------------------------------------------------

--
-- 表的结构 `liuyanban`
--

CREATE TABLE IF NOT EXISTS `liuyanban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) DEFAULT NULL,
  `zhaopian` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `liuyan` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `huifu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `liuyanban`
--

INSERT INTO `liuyanban` (`id`, `zhanghao`, `zhaopian`, `xingming`, `liuyan`, `addtime`, `huifu`) VALUES
(5, 'rs', '', 'rao', '留言', '2023-04-08 17:11:15', '1');

-- --------------------------------------------------------

--
-- 表的结构 `pinglun`
--

CREATE TABLE IF NOT EXISTS `pinglun` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `wenzhangID` varchar(255) DEFAULT NULL,
  `pinglunneirong` varchar(1000) DEFAULT NULL,
  `pinglunren` varchar(255) DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `biao` varchar(50) DEFAULT NULL,
  `pingfen` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `pinglun`
--

INSERT INTO `pinglun` (`ID`, `wenzhangID`, `pinglunneirong`, `pinglunren`, `addtime`, `biao`, `pingfen`) VALUES
(2, '8', '1', 'hsg', '2023-04-11 14:11:30', 'shangpinxinxi', 1);

-- --------------------------------------------------------

--
-- 表的结构 `shangpinxinxi`
--

CREATE TABLE IF NOT EXISTS `shangpinxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shangpinbianhao` varchar(50) DEFAULT NULL,
  `shangpinmingcheng` varchar(50) DEFAULT NULL,
  `jiage` varchar(50) DEFAULT NULL,
  `kucun` varchar(50) DEFAULT NULL,
  `xiaoliang` varchar(50) DEFAULT NULL,
  `CDK` varchar(50) DEFAULT NULL,
  `tupian` varchar(50) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `shangpinxinxi`
--

INSERT INTO `shangpinxinxi` (`id`, `shangpinbianhao`, `shangpinmingcheng`, `jiage`, `kucun`, `xiaoliang`, `CDK`, `tupian`, `beizhu`, `addtime`) VALUES
(4, '283209191222', '大江湖之苍龙与白鸟', '77', '51', '85', 'BGRBZBZG3K', 'uploadfile/sp1.jpg', '暂无', '2023-02-08 10:34:36'),
(5, '283237252959', '森林之子', '24', '68', '16', 'BGRBZBZG3K', 'uploadfile/sl.jpg', 'ok', '2023-02-08 10:34:36'),
(6, '283248182801', '植物大战僵尸', '32', '64', '80', 'BGRBZBZG3K', 'uploadfile/pvz.jpg', 'ok', '2023-02-08 10:34:36'),
(7, '283298162470', 'Kingdom Rush', '65', '75', '87', 'BGRBZBZG3K', 'uploadfile/king.jpg', 'abc', '2023-02-08 10:34:36'),
(8, '283235875906', '之狼', '32', '56', '21', 'BGRBZBZG3K', 'uploadfile/zl.jpg', '无', '2023-02-08 10:34:36'),
(9, '283207724289', '埃尔登法环', '65', '53', '76', 'BGRBZBZG3KSS1111', 'uploadfile/fh.jpg', 'abc', '2023-02-08 10:34:36');

-- --------------------------------------------------------

--
-- 表的结构 `shoucangjilu`
--

CREATE TABLE IF NOT EXISTS `shoucangjilu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `xwid` varchar(255) DEFAULT NULL,
  `biao` varchar(100) DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ziduan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `shoucangjilu`
--

INSERT INTO `shoucangjilu` (`ID`, `username`, `xwid`, `biao`, `addtime`, `ziduan`) VALUES
(1, '006', '6', 'shangpinxinxi', '2023-02-08 10:44:04', 'shangpinmingcheng'),
(2, 'rst', '8', 'shangpinxinxi', '2023-03-28 13:19:44', 'shangpinmingcheng'),
(3, 'hsg', '6', 'shangpinxinxi', '2023-03-30 05:50:24', 'shangpinmingcheng');

-- --------------------------------------------------------

--
-- 表的结构 `xinwentongzhi`
--

CREATE TABLE IF NOT EXISTS `xinwentongzhi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `biaoti` varchar(500) DEFAULT NULL,
  `leibie` varchar(50) DEFAULT NULL,
  `neirong` text,
  `tianjiaren` varchar(50) DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `shouyetupian` varchar(50) DEFAULT NULL,
  `dianjilv` int(11) DEFAULT '1',
  `zhaiyao` varchar(800) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=207 ;

--
-- 转存表中的数据 `xinwentongzhi`
--

INSERT INTO `xinwentongzhi` (`id`, `biaoti`, `leibie`, `neirong`, `tianjiaren`, `addtime`, `shouyetupian`, `dianjilv`, `zhaiyao`) VALUES
(206, 'fewgewg', '变幻图', '', 'hsg', '2023-02-08 10:34:36', 'uploadfile/1675852538e3uu.jpg', 2, '');

-- --------------------------------------------------------

--
-- 表的结构 `yonghu`
--

CREATE TABLE IF NOT EXISTS `yonghu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) DEFAULT NULL,
  `mima` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `xingbie` varchar(50) DEFAULT NULL,
  `shouji` varchar(50) DEFAULT NULL,
  `shenfenzheng` varchar(50) DEFAULT NULL,
  `zhaopian` varchar(50) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `yonghu`
--

INSERT INTO `yonghu` (`id`, `zhanghao`, `mima`, `xingming`, `xingbie`, `shouji`, `shenfenzheng`, `zhaopian`, `beizhu`, `addtime`) VALUES
(3, '030', '001', '胡歌', '男', '13587835380', '330327198811020456', 'uploadfile/yonghu5.jpg', '没问题', '2023-02-08 10:34:36'),
(6, 'raoshun', 'hahaha04111', 'raoshun', '男', '15203948588', '412702200004110019', '', '', '2023-04-08 17:20:46'),
(8, 'rstule', 'hahaha0411', 'rstule', '男', '15203948588', '412702200004110019', '', '', '2023-04-11 14:07:37');

-- --------------------------------------------------------

--
-- 表的结构 `yonghuzhuce`
--

CREATE TABLE IF NOT EXISTS `yonghuzhuce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) DEFAULT NULL,
  `mima` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `xingbie` varchar(50) DEFAULT NULL,
  `diqu` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `zhaopian` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issh` varchar(10) DEFAULT '否',
  `shouji` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `yonghuzhuce`
--

INSERT INTO `yonghuzhuce` (`id`, `zhanghao`, `mima`, `xingming`, `xingbie`, `diqu`, `Email`, `zhaopian`, `addtime`, `issh`, `shouji`) VALUES
(26, '555', '555', '何升高', '男', '浙江', 'gsgs@163.com', 'uploadfile/yhtx1.jpg', '2023-02-08 10:34:36', '是', '32235643'),
(27, 'leejie', 'leejie', '李龙', '男', '湖北', 'fege@126.com', 'uploadfile/yhtx2.jpg', '2023-02-08 10:34:36', '是', '65754745'),
(28, 'mygod', 'mygod', '陈德才', '男', '河南', 'gshf@yahoo.com', 'uploadfile/yhtx3.jpg', '2023-02-08 10:34:36', '是', '53464373'),
(29, 'xwxxmx', 'xwxxmx', '吴江', '女', '北京', 'jrjtr@163.com', 'uploadfile/yhtx4.jpg', '2023-02-08 10:34:36', '否', '52356474');

-- --------------------------------------------------------

--
-- 表的结构 `youqinglianjie`
--

CREATE TABLE IF NOT EXISTS `youqinglianjie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wangzhanmingcheng` varchar(50) DEFAULT NULL,
  `wangzhi` varchar(50) DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `youqinglianjie`
--

INSERT INTO `youqinglianjie` (`id`, `wangzhanmingcheng`, `wangzhi`, `addtime`, `logo`) VALUES
(16, '百度', 'http://www.baidu.com', '2023-02-08 10:34:36', 'uploadfile/baidu.jpg'),
(17, '谷歌', 'http://www.google.cn', '2023-02-08 10:34:36', 'uploadfile/google.jpg'),
(18, '新浪', 'http://www.sina.com', '2023-02-08 10:34:36', 'uploadfile/sina.jpg'),
(19, 'QQ', 'http://www.qq.com', '2023-02-08 10:34:36', 'uploadfile/qq.jpg'),
(20, '网易', 'http://www.163.com', '2023-02-08 10:34:36', 'uploadfile/yahoo.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
