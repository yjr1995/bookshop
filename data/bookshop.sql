-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 06 月 11 日 15:15
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `bookshop`
--
CREATE DATABASE IF NOT EXISTS `bookshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bookshop`;

-- --------------------------------------------------------

--
-- 表的结构 `classone`
--

CREATE TABLE IF NOT EXISTS `classone` (
  `classoneId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classonename` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`classoneId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `classone`
--

INSERT INTO `classone` (`classoneId`, `classonename`) VALUES
(1, '文学'),
(2, '社会科学'),
(3, '管理'),
(4, '生活');

-- --------------------------------------------------------

--
-- 表的结构 `classthree`
--

CREATE TABLE IF NOT EXISTS `classthree` (
  `classthreeId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classthreename` varchar(50) NOT NULL,
  `classtwoId` int(10) unsigned NOT NULL,
  `mender` varchar(50) DEFAULT NULL,
  `modificationtime` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`classthreeId`),
  KEY `classtwoId` (`classtwoId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=236 ;

--
-- 转存表中的数据 `classthree`
--

INSERT INTO `classthree` (`classthreeId`, `classthreename`, `classtwoId`, `mender`, `modificationtime`) VALUES
(1, '校园', 1, NULL, NULL),
(2, '爱情	', 1, NULL, NULL),
(3, '叛逆', 1, NULL, NULL),
(4, '网络	', 1, NULL, NULL),
(5, '恐怖|惊悚	', 1, NULL, NULL),
(6, '爆笑	', 1, NULL, NULL),
(7, '魔幻|奇幻	', 1, NULL, NULL),
(8, '大陆原创 ', 1, NULL, NULL),
(9, '港台原创	', 1, NULL, NULL),
(10, '韩国原创	', 1, NULL, NULL),
(11, '其他国原创', 1, NULL, NULL),
(12, '言情小说', 2, NULL, NULL),
(13, '历史小说	', 2, NULL, NULL),
(14, '外国小说', 2, NULL, NULL),
(15, '都市小说 ', 2, NULL, NULL),
(16, '悬疑推理', 2, NULL, NULL),
(17, '武侠小说	', 2, NULL, NULL),
(18, '影视小说	', 2, NULL, NULL),
(19, '科幻小说', 2, NULL, NULL),
(20, ' 中国古典小说	', 2, NULL, NULL),
(21, '中国现代小说', 2, NULL, NULL),
(22, '中国当代小说', 2, NULL, NULL),
(23, '政治人物', 3, NULL, NULL),
(24, '财经人物	', 3, NULL, NULL),
(25, '文体明星	', 3, NULL, NULL),
(26, '哲学家 ', 3, NULL, NULL),
(27, '领袖首脑	', 3, NULL, NULL),
(28, '历代亲王	', 3, NULL, NULL),
(29, '史学家	', 3, NULL, NULL),
(30, '艺术家 ', 3, NULL, NULL),
(31, '科学家	', 3, NULL, NULL),
(32, '思想家	', 3, NULL, NULL),
(33, '文学家', 3, NULL, NULL),
(34, '英语读物', 4, NULL, NULL),
(35, '口语', 4, NULL, NULL),
(36, '中英对照', 4, NULL, NULL),
(37, '日语', 4, NULL, NULL),
(38, '韩语', 4, NULL, NULL),
(39, '德语', 4, NULL, NULL),
(40, '商务英语', 4, NULL, NULL),
(41, '职业英语', 4, NULL, NULL),
(42, 'CET-4', 4, NULL, NULL),
(43, 'CET-6', 4, NULL, NULL),
(44, '艺术理论', 5, NULL, NULL),
(45, '人体艺术		', 5, NULL, NULL),
(46, '设计	', 5, NULL, NULL),
(47, '影视艺术 ', 5, NULL, NULL),
(48, '建筑艺术	', 5, NULL, NULL),
(49, '收藏鉴赏	', 5, NULL, NULL),
(50, '摄影	', 5, NULL, NULL),
(51, '美术 ', 5, NULL, NULL),
(52, '音乐	', 5, NULL, NULL),
(53, '书法	', 5, NULL, NULL),
(54, '篆刻	', 5, NULL, NULL),
(55, '字帖', 5, NULL, NULL),
(56, ' 民间艺术	', 5, NULL, NULL),
(57, '戏曲	', 5, NULL, NULL),
(58, '画谱|画册', 5, NULL, NULL),
(59, '中国儿童文学', 6, NULL, NULL),
(60, '外国儿童文学	', 6, NULL, NULL),
(61, '童话	', 6, NULL, NULL),
(62, '睡前故事 ', 6, NULL, NULL),
(63, ' 双语故事	', 6, NULL, NULL),
(64, '培生英语	', 6, NULL, NULL),
(65, '双语绘本	', 6, NULL, NULL),
(66, '英语歌谣', 6, NULL, NULL),
(67, '绘画技法	', 6, NULL, NULL),
(68, '剪纸	', 6, NULL, NULL),
(69, '贴纸	', 6, NULL, NULL),
(70, '手工书 ', 6, NULL, NULL),
(71, '智力开发	', 6, NULL, NULL),
(72, '脑筋急转弯	', 6, NULL, NULL),
(73, '亲近自然	', 6, NULL, NULL),
(74, '地理百科', 6, NULL, NULL),
(75, '大陆漫画	', 7, NULL, NULL),
(76, '日韩漫画	', 7, NULL, NULL),
(77, '港台漫画	', 7, NULL, NULL),
(78, '欧美漫画 ', 7, NULL, NULL),
(79, '爆笑漫画	', 7, NULL, NULL),
(80, '笑话/打油诗	', 7, NULL, NULL),
(81, '连环画', 7, NULL, NULL),
(82, '通俗历史', 8, NULL, NULL),
(83, '各国历史', 8, NULL, NULL),
(84, '中国通史', 8, NULL, NULL),
(85, '史学理论', 8, NULL, NULL),
(86, '文物考古', 8, NULL, NULL),
(87, '民国', 8, NULL, NULL),
(88, '宋元明清', 8, NULL, NULL),
(89, '隋唐', 8, NULL, NULL),
(90, '先秦/秦汉', 8, NULL, NULL),
(91, '经部', 9, NULL, NULL),
(92, '史部', 9, NULL, NULL),
(93, '子部', 9, NULL, NULL),
(94, '集部', 9, NULL, NULL),
(95, '国学名家', 9, NULL, NULL),
(96, '佛教', 10, NULL, NULL),
(97, '基督教', 10, NULL, NULL),
(98, '伊斯兰教', 10, NULL, NULL),
(99, '印度教', 10, NULL, NULL),
(100, '犹太教', 10, NULL, NULL),
(101, '道教', 10, NULL, NULL),
(102, '儒教', 10, NULL, NULL),
(103, '神道教', 10, NULL, NULL),
(104, '摩尼教', 10, NULL, NULL),
(105, '威卡教派', 10, NULL, NULL),
(106, '新兴宗教', 10, NULL, NULL),
(107, '中国政治', 11, NULL, NULL),
(108, '党政读物', 11, NULL, NULL),
(109, '政治理论', 11, NULL, NULL),
(110, '时政', 11, NULL, NULL),
(111, '外交/国际关系', 11, NULL, NULL),
(112, '世界政治', 11, NULL, NULL),
(113, '中国军事', 12, NULL, NULL),
(114, '外国军事', 12, NULL, NULL),
(115, '战略理论', 12, NULL, NULL),
(116, '战役/战术方面', 12, NULL, NULL),
(117, '后勤', 12, NULL, NULL),
(118, '军事地理', 12, NULL, NULL),
(119, '战史', 12, NULL, NULL),
(120, '心理学史', 13, NULL, NULL),
(121, '普通心理学', 13, NULL, NULL),
(122, '社会心理学', 13, NULL, NULL),
(123, '心理学研究方法', 13, NULL, NULL),
(124, '释梦', 13, NULL, NULL),
(125, '心理辅导', 13, NULL, NULL),
(126, '人格心理学', 13, NULL, NULL),
(127, '发展心理学', 13, NULL, NULL),
(128, '其他', 13, NULL, NULL),
(129, '经济学理论', 14, NULL, NULL),
(130, '会计/审计', 14, NULL, NULL),
(131, '各国经济概况', 14, NULL, NULL),
(132, '大众经济学', 14, NULL, NULL),
(133, '财务税收', 14, NULL, NULL),
(134, '行业经济', 14, NULL, NULL),
(135, '国际贸易', 14, NULL, NULL),
(136, '国际金融', 14, NULL, NULL),
(137, '中国经济', 14, NULL, NULL),
(138, '世界经济', 14, NULL, NULL),
(139, '经济史', 14, NULL, NULL),
(140, '电商思维', 15, NULL, NULL),
(141, '微信微店', 15, NULL, NULL),
(142, '网店管理', 15, NULL, NULL),
(143, '第三方平台', 15, NULL, NULL),
(144, '大数据', 15, NULL, NULL),
(145, '网络营销', 15, NULL, NULL),
(146, '客户服务', 15, NULL, NULL),
(147, '移动互联网', 15, NULL, NULL),
(148, '互谅网+', 15, NULL, NULL),
(149, '股票', 16, NULL, NULL),
(150, '基金', 16, NULL, NULL),
(151, '期货', 16, NULL, NULL),
(152, '保险', 16, NULL, NULL),
(153, '个人理财', 16, NULL, NULL),
(154, '境外投资', 16, NULL, NULL),
(155, '货币战争', 16, NULL, NULL),
(156, '贷款', 16, NULL, NULL),
(157, '销售管理', 17, NULL, NULL),
(158, '广告管理', 17, NULL, NULL),
(159, '品牌管理', 17, NULL, NULL),
(160, '产品管理', 17, NULL, NULL),
(161, '渠道管理', 17, NULL, NULL),
(162, '价格管理', 17, NULL, NULL),
(163, '公共服务', 17, NULL, NULL),
(164, '国际市场', 17, NULL, NULL),
(165, '客户服务', 17, NULL, NULL),
(166, '为人处世', 18, NULL, NULL),
(167, '青少年励志', 18, NULL, NULL),
(168, '创业必修', 18, NULL, NULL),
(169, '名人励志', 18, NULL, NULL),
(170, '情商EQ', 18, NULL, NULL),
(171, '财商FQ', 18, NULL, NULL),
(172, '智商IQ', 18, NULL, NULL),
(173, '成功学', 18, NULL, NULL),
(174, '女性励志', 18, NULL, NULL),
(175, '心灵鸡汤', 18, NULL, NULL),
(176, '体育理论', 19, NULL, NULL),
(177, '奥林匹克', 19, NULL, NULL),
(178, '田径', 19, NULL, NULL),
(179, '球类', 19, NULL, NULL),
(180, '武术', 19, NULL, NULL),
(181, '气功', 19, NULL, NULL),
(182, '男性健康', 20, NULL, NULL),
(183, '女性健康', 20, NULL, NULL),
(184, '中老年保健', 20, NULL, NULL),
(185, '孕产妇保健', 20, NULL, NULL),
(186, '健身', 20, NULL, NULL),
(187, '饮食营养/食疗', 20, NULL, NULL),
(188, '中医养生', 20, NULL, NULL),
(189, '常见病防治', 20, NULL, NULL),
(190, '家庭医生', 20, NULL, NULL),
(191, '准父母读物', 21, NULL, NULL),
(192, '婴幼儿护理', 21, NULL, NULL),
(193, '亲子读物', 21, NULL, NULL),
(194, '图画故事/拼音读物', 21, NULL, NULL),
(195, '育儿百科', 21, NULL, NULL),
(196, '好家长妙诀', 21, NULL, NULL),
(197, '孕产百科', 21, NULL, NULL),
(198, '青春期', 21, NULL, NULL),
(199, '好爸爸', 21, NULL, NULL),
(200, '个人修养', 22, NULL, NULL),
(201, '自我调节', 22, NULL, NULL),
(202, '礼仪', 22, NULL, NULL),
(203, '演讲/口才/辩论', 22, NULL, NULL),
(204, '人际沟通', 22, NULL, NULL),
(205, '格言/警句', 22, NULL, NULL),
(206, '求职/面试', 22, NULL, NULL),
(207, '职场', 22, NULL, NULL),
(208, '出国留学', 22, NULL, NULL),
(209, '减肥健身', 23, NULL, NULL),
(210, '瑜伽', 23, NULL, NULL),
(211, '服装/饰品', 23, NULL, NULL),
(212, '时尚DIY', 23, NULL, NULL),
(213, '宠物', 23, NULL, NULL),
(214, '占卜测试', 23, NULL, NULL),
(215, '明星', 23, NULL, NULL),
(216, '服装/饰品', 23, NULL, NULL),
(217, '美容/美体/化妆', 23, NULL, NULL),
(218, '旅游随笔', 24, NULL, NULL),
(219, '自然/名胜', 24, NULL, NULL),
(220, '人文之旅', 24, NULL, NULL),
(221, '旅游实用外语', 24, NULL, NULL),
(222, '老外游中国', 24, NULL, NULL),
(223, '生存探险', 24, NULL, NULL),
(224, '旅游指南/旅游手册', 24, NULL, NULL),
(225, '旅游理论/旅游实务', 24, NULL, NULL),
(226, '旅游管理', 24, NULL, NULL),
(227, '旅游教育/导游', 24, NULL, NULL),
(228, '旅游经济与旅游市场', 24, NULL, NULL),
(229, '交通运输地图', 25, NULL, NULL),
(230, '历史地图', 25, NULL, NULL),
(231, '旅游地图', 25, NULL, NULL),
(232, '生活地图', 25, NULL, NULL),
(233, '世界行政区划图', 25, NULL, NULL),
(234, '中国行政区划图 ', 25, NULL, NULL),
(235, '国家/地区概况', 25, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `classtwo`
--

CREATE TABLE IF NOT EXISTS `classtwo` (
  `classtwoId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classtwoname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `classoneId` int(10) unsigned NOT NULL,
  PRIMARY KEY (`classtwoId`),
  KEY `classoneId` (`classoneId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `classtwo`
--

INSERT INTO `classtwo` (`classtwoId`, `classtwoname`, `classoneId`) VALUES
(1, '青春', 1),
(2, '小说', 1),
(3, '传记', 1),
(4, '外语学习', 1),
(5, '艺术', 1),
(6, '少儿读物', 1),
(7, '漫画、幽默', 1),
(8, '历史', 2),
(9, '国学', 2),
(10, '宗教', 2),
(11, '政治', 2),
(12, '军事', 2),
(13, '心理学', 2),
(14, '经济金融', 3),
(15, '电子商务', 3),
(16, '理财', 3),
(17, '市场营销', 3),
(18, '励志与成功', 3),
(19, '体育', 4),
(20, '保健', 4),
(21, '育儿、成儿', 4),
(22, '自我实现', 4),
(23, '娱乐时尚', 4),
(24, '旅游', 4),
(25, '地理', 4);

-- --------------------------------------------------------

--
-- 表的结构 `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `ContactId` int(11) NOT NULL,
  `MemberId` int(11) NOT NULL,
  `Addressee` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `DefaultValue` int(11) DEFAULT NULL COMMENT '0 否 1 是',
  PRIMARY KEY (`ContactId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `LoginName` varchar(12) CHARACTER SET utf8 NOT NULL,
  `LoginPwd` varchar(12) CHARACTER SET utf8 NOT NULL,
  `Sex` varchar(4) CHARACTER SET utf8 DEFAULT NULL,
  `Brith` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Phone` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Address` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Zip` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Regdate` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Lastdate` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Logintime` int(50) unsigned DEFAULT NULL,
  `Memberlevel` int(10) unsigned DEFAULT NULL,
  `head` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `member`
--

INSERT INTO `member` (`Id`, `LoginName`, `LoginPwd`, `Sex`, `Brith`, `Phone`, `Address`, `Zip`, `Email`, `Regdate`, `Lastdate`, `Logintime`, `Memberlevel`, `head`) VALUES
(1, 'a123', 'aaa111', '男', '2010-10-01', '13567894678', '广东省', '515100', '1238522657@qq.com', '2010-04-27', '2017-04-25', 3, 1, 'image/1.png');

-- --------------------------------------------------------

--
-- 表的结构 `merchandisc`
--

CREATE TABLE IF NOT EXISTS `merchandisc` (
  `MerId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classthreeId` int(10) unsigned NOT NULL,
  `MerName` varchar(100) NOT NULL,
  `Writer` varchar(50) NOT NULL,
  `Pricture` varchar(50) NOT NULL,
  `Price` decimal(10,2) NOT NULL COMMENT '市场价格',
  `SPrice` decimal(10,2) NOT NULL COMMENT '实际价格',
  `GoodDesc` text NOT NULL,
  `Press` varchar(50) NOT NULL,
  `LeaveFactoryDate` varchar(50) NOT NULL,
  `Special` int(11) NOT NULL COMMENT '0:特价;1:非特价',
  `inputdate` varchar(50) NOT NULL,
  `Bengindate` varchar(50) DEFAULT NULL,
  `enddate` varchar(50) DEFAULT NULL,
  `mender` varchar(50) DEFAULT NULL,
  `modification time` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`MerId`),
  KEY `classtwoId` (`classthreeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `merchandisc`
--

INSERT INTO `merchandisc` (`MerId`, `classthreeId`, `MerName`, `Writer`, `Pricture`, `Price`, `SPrice`, `GoodDesc`, `Press`, `LeaveFactoryDate`, `Special`, `inputdate`, `Bengindate`, `enddate`, `mender`, `modification time`) VALUES
(1, 12, '《深海里的星星》', '独木舟', 'images/youth1.jpg', '21.80', '17.10', '你能行——但是你愿意去做吗？你是“时代的结晶”，如果你愿意，这个时代已经赋予了你良好的环境、优越的条件以及潜在的机会。向前走，做你想要做的事情，只要你愿意，你就能行。从现在就开始，不要等到明天，明天未必会比今天更有利于你，今天就是这一年中最好的一天，今天就是你向着目标起航的一天，让今天成为你迈向目的地的第一步。你生来就是个胜利者，你最终能否取得胜利，一切均取决于你自己。\r\n\r\n我们总想着遗忘过去，但过去却并未遗忘我们。落薰终于鼓起勇气从悲伤中走出，去医院探望素然姐以及她的新生女儿浅浅，这才发现白驹过隙，原来那些刻骨铭心痛彻心扉的事情和青春都轰然远去了，被毁容的珊珊、在酒吧做事的康捷、成为单身妈妈的素然姐，每个人都在背负了人生的痛苦与挫折踽踽独行，那些爱情啊梦想啊早已杳杳，离开医院一起吃饭时，模范情侣李珊珊和宋远竟然因为小事就大起干戈，康婕也因为深陷在阿龙和母亲的争吵中郁郁寡欢，青春从纯白变成了现实的灰暗。程落薰决定出走，离开了长沙远赴云南，却邂逅了风趣幽默却喜欢跟她作对的陆知遥，他们之间有着许多细碎如沙的不期而遇，却堆积不成一座安宁的城堡。酒吧里康婕闹出了误会却认识了开朗的萧航，李珊珊决定改变自己却改变不了爱情与人生的命运……她们以为此去经年的人和事，是可以慢慢回到从前，可却无奈的发现，他们早已不同，包括许至君以及他身边新出现的女孩……', '春风文艺出版社', '2011-10-01', 0, '2011-10-01', NULL, NULL, NULL, NULL),
(2, 2, '《苍耳》', '乐小米', 'images/youth2.jpg', '13.80', '13.80', '这是全国首部关注“被拐卖儿童”的残酷青春小说。\r\n\r\n　 也是故事主人公真实原型——小A姑娘的青春祭奠书！\r\n\r\n　 故事中主人公许暖（阮阮）命运坎坷、身世凄凉；\r\n\r\n　 她的命运从来不由自己掌控，出生时遭母亲遗弃，6岁被人贩子拐卖至偏远山村。\r\n\r\n　 她如同平凡的苍耳，沉默地跟随，沉默地等待，却终被弃之天涯，再也找不到家；\r\n\r\n　 她流落红尘，颠簸辗转，命运却让她沦为一枚棋子，从此，陷入一场爱恨情仇纠葛的漩涡中，谁终能许她一世的温暖？\r\n\r\n　 以一个平凡女子的青春、爱情传奇为蓝本，关于“命运”的深入思考和探讨，关于人性的犀利剖析和透视。青春、爱情，一切的一切，都挣不开命运这张网。\r\n\r\n　 全国各大媒体及数百万读者密切关注，首部关注“被拐卖儿童”的残酷青春小说，一本献给命运坎坷的女子——小A姑娘的青春祭奠书', '湖南少儿出版社', '2010-1-1', 1, '2010-1-1', NULL, NULL, NULL, NULL),
(3, 15, '《唱情歌旳少年请别忧伤》', '居尼尔斯', 'images/youth3.jpg', '22.80', '16.30', '简小从在遇见带着神秘色彩的沈自横之前一直以为自己会嫁给初恋男友何忘川。\r\n只可惜命运让你遇见了不该遇见的人，从此便改变了生命的齿轮。\r\n简小从也在不知不觉中悄悄爱上惹人心疼的沈自横，可当相恋多年的男友千里迢迢地赶回来…\r\n这段痴缠的恋情最终会奔向何方？谁又会是最终离开的那个人呢？', '花山文艺出版社', '2014-07-01', 0, '2014-07-01', NULL, NULL, NULL, NULL),
(4, 1, '《夜源绫同学》', '邢桂宇', 'images/youth4.jpg', '1880.60', '1880.60', '总计历时三年创作完成，是同系列小说的开篇之作，创作于2006年之夏，融合了推理，悬疑，冒险，军事，校园爱情喜剧，宗教科幻神话等诸多流行元素的一本轻小说。语言轻松有趣，主角心理活动的描写也是众多看点之一。其中有爆笑的喜剧桥段，有让人惊心动魄的冒险镜头，有温馨的校园爱情画面，也有富有传奇神话色彩的世界观。', '中央编译出版社', '2009-11-01', 1, '2009-11-01', NULL, NULL, NULL, NULL),
(5, 1, '《高三考生》', '罗英,王旭东', 'images/youth5.jpg', '170.00', '169.00', '施芸、朱刚、裴小军、宋海涛是高三文科班学生，四个人由于来往密切，在课堂上经常窃窃私语，被数学教师称为"四人帮"，但他们都是心地善良纯朴的孩子。施芸美丽而活泼，裴小军单纯而偏执，来自煤矿的朱刚很有才华宋海涛由于家庭不幸而沉默寡言。四个人在高考的压力之下，变的焦躁不安。颜明的"出走"，马莉娅的精神失常，即使他们震惊，又使他们恐慌，他么不得不借助"恋爱"排遣心中的寂寞和忧伤，但是美丽而短暂的早恋并没能使他们跳过高考这跟魔棒的"追杀"，他们像被恋人追赶的兔子左冲右突。庆幸的是他们有一个善解人意的班主任"曹老"，在曹老的呵护和帮助下，他们度过了这段人生*重要*苦闷的时光，并留下*美好的记忆。', '海天出版社出版', '2005年07月', 0, '2005年07月', NULL, NULL, NULL, NULL),
(6, 3, '《你让青春暗伤成茧》', '陌安凉', 'images/youth6.jpg', '26.80', '26.80', '你曾是我触手可及的幸福，你也是我永远触碰不到的遥远，我们被包裹在密不透风的坟场里——挣扎、拥抱、流泪、刺伤、离散。你让我的青春暗伤成茧，我为你一生不再破茧成蝶。', '天津人民出版社', '2017-05', 1, '2017-05', NULL, NULL, NULL, NULL),
(7, 4, '《计算机网络（第6版）》', '谢希仁', 'images/youth7.jpg', '0.00', '0.00', '该书自出版以来，受到国内各大专院校师生的好评，被国内著名高校如清华大学、北京邮电大学、成都电子科技大学、西安电子科技大学等100多所院校选为教材，特别是计算机网络专业、通信与信息化专业、电子工程专业使用本教材的比较多；有些相关专业也指定本教材为计算机网络方面的参考书，供学生深入掌握网络知识。', '电子工业出版社', '2013-06-01', 1, '2013-06-01', NULL, NULL, NULL, NULL),
(8, 5, '《超禁忌游戏-4》', '宁航一', 'images/youth8.jpg', '37.30', '37.30', '神的游戏依然在继续，不管守护者联盟如何竭力阻止，13班的同学仍脱离控制般接二连三死去，绝望和死别如影随形。\r\n被异国重火力军队逼入绝境，守护者联盟将如何杀出重围？怀揣对家人的愧疚和思念，历经万难回到祖国的他们，却遭遇国家的警惕和质疑，然而国安部的态度却更令人捉摸不透……\r\n“旧神”插手联盟，抛出的却是一截不怀好意的橄榄枝，杭一是否能够从容应对？\r\n三巨头一手创立的异世界刷新众人对超能力的认知，“创世诸神”一时兴起，现实世界摇摇欲坠。一边是艰难的挑战和未知的危机，一边却是巨大的诱惑和永远的安宁。众人该作何抉择？\r\n埋藏于三巨头内部成员暗涌终于爆发，短暂喘息后，一场让所有人意想不到的浩劫在破晓时分降临。这一切背后到底还酝酿着怎样的秘密和阴谋？', '中国友谊出版公司', '2016-11', 1, '2016-11', NULL, NULL, NULL, NULL),
(9, 6, '《鸡零狗碎的青春》', '南宫浩', 'images/youth9.jpg', '35.00', '35.00', '记述了一群城市青年的生长历程，他们才华横溢戏谑青春，但从来不做违背道德准则的事。他们追求真挚的爱情，却屡屡被残酷的现实作弄。\r\n主人公在追求林若弟的过程中，一直认为自己是爱情高手，可以通过恋爱技巧掌控一切，却自陷情网而不自知。当最终得知事情真相后，他选择了原谅过去的爱人，但一切已不可能重头再来了。他清醒地认识到：“每个男人都忘不了自己的初恋，其实并不是那个姑娘有多么的好，而是难以忘怀自己的鸡零狗碎的青春而已。', '东方出版社', '2012-9', 1, '2012-9', NULL, NULL, NULL, NULL),
(10, 7, '《不败战神10》', '方想', 'images/youth10.jpg', '25.00', '17.00', '少年，就是要在阳光下挥洒汗水！ 少年，就是要不断战斗，然后胜利！ 无尽天路之旅，无尽征途，见证少年的热血和传奇！ 心怀野望，烈血如燃！ 永远少年，不败战神！', '陕西人民出版社', '2016-06', 0, '2016-06', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `writetime` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`Id`, `content`, `autor`, `writetime`) VALUES
(1, '活动期间内，领取优惠券，购买中文图书（不含赠品专区图书、进口原版书、进口繁体中文书、电子书、第三方卖家商品、Z秒杀、Z实惠、海外购商品），单笔订单中参加本促销活动的商品满99元，赠畅销书', NULL, NULL),
(2, '2017年1月28日报道 新加坡《联合早报》网站1月27日报道称，作为日本札幌亚洲冬季运动会（亚冬会）官方指定酒店的APA酒店，因在其客房中摆放美化二战的右翼书籍，引来中国连日抗议。中国外交部26日证实，该酒店已决定从酒店客房、大堂、前台撤出所有涉事书籍。', NULL, NULL),
(3, '您还在担忧父母的身体健康吗？您是否还和爱人为琐事生气争吵？您还在为孩子学习不好而着急上火？BT社区免费赠送的王凤仪思想丛书之《伦理与健康之道》由《刘友生先生在广西中医学院讲座》《王元午爱心家庭讲座》《伦理演讲录》《家庭六步教育》等四部分组成，对身体健康、家庭和睦、子女教育等方面进行了详细的讲解，现在免费赠送中', NULL, NULL),
(4, '近一段时间里，许多KQ88口腔正畸网友在我的博客评论中纷纷留言，抱怨我和沈真祥教授编写的 《实用口腔正畸矫治方法与技巧》书难买，今天我与清华大学出版社联系了此事，编辑部的张老师告诉我准确信息，清华大学出版社邮购部有此书，邮购部的联系电话010-62786544，需要购书的朋友可与他们联系。', NULL, NULL),
(5, 'BT正在开展促销，书籍买一送一，多买多赠。选好专题内的图书放入购物车时，将赠品区中选择相对应数量的赠品一起放入购物车，输入促销码：E6AYIWTQ，结算时系统会将减去赠品的图书价格，即作为免费赠送的商品。赠品区有四十多款，如果赠品区中有看中的书，这个活动就非常合适了，活动链接在此，时间截止到：2011年9月30日23:59:59。\r\n                      感谢“乌鸦”的爆料。', NULL, NULL),
(6, '各部室、公司及社区： \r\n                    管委会兴建的党员群众服务中心，按照上级有关部门的要求和规定，现已全面竣工，即将投入使用。为了认真、切实抓好党建工作，搞好“创先争优”活动，将各项工作落到实处，使党员群众服务中心有内容、有看点、有实物。我们号召各部室、公司及社区的全体党员、干部同志们积极行动起来，为**的党员群众服务中心图书阅览室募捐如下书籍：  \r\n    一、马列主义、毛泽东思想、邓小平理论、江泽民三个代表和胡锦涛科学发展观等政治书籍。 \r\n    二、中国共产党成立以来各类政治书籍。 \r\n    三、改革开放以来，中共中央、国务院、省、市各级党组织、政府及党政各级部门、科研单位出版的各类政治、党务、科学等方面的各类书籍。 \r\n    四、党和政府改革开放以来的各类报刊、杂志。 \r\n    五、各类科教、科普、致富、养殖等书籍。 \r\n    希望广大党员、干部按照上述内容踊跃捐赠。我们的党员、干部同志们应积极带头。原则上每人 5 册（本、套）以上，多										   					捐不限。捐赠时间从即日起至 9 月 18 日 止。捐赠完成后，我们将把每位捐赠的书籍归类、编号、整理后注入捐赠者单位				 	和姓名，供大家在党员群众服务中心阅读和学习。同时，我们还将捐赠书籍的同志们的名单按照数量多少排序进行公示、表彰。', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
  `OrderId` int(10) unsigned NOT NULL,
  `MerId` int(10) unsigned NOT NULL,
  `Price` decimal(18,0) NOT NULL,
  `Amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`OrderId`,`MerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `OrderId` int(11) unsigned NOT NULL,
  `MerId` int(11) unsigned NOT NULL,
  `ContactId` int(11) unsigned NOT NULL,
  `Total` decimal(18,0) NOT NULL,
  `Status` int(11) NOT NULL COMMENT '0 订单成功1用户已经付款2已经发货3已经收获4完成评价',
  `OrderDate` varchar(50) NOT NULL,
  `PayDate` varchar(50) DEFAULT NULL,
  `DeliverDate` varchar(50) DEFAULT NULL,
  `ReceiptDate` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`OrderId`),
  KEY `MemberId` (`MerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `shoppingcart`
--

CREATE TABLE IF NOT EXISTS `shoppingcart` (
  `CartId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `MemberId` int(10) unsigned NOT NULL,
  `MerId` int(10) unsigned NOT NULL,
  `Amount` int(11) NOT NULL,
  PRIMARY KEY (`CartId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 限制导出的表
--

--
-- 限制表 `classthree`
--
ALTER TABLE `classthree`
  ADD CONSTRAINT `classthree_ibfk_1` FOREIGN KEY (`classtwoId`) REFERENCES `classtwo` (`classtwoId`);

--
-- 限制表 `classtwo`
--
ALTER TABLE `classtwo`
  ADD CONSTRAINT `classtwo_ibfk_1` FOREIGN KEY (`classoneId`) REFERENCES `classone` (`classoneId`);

--
-- 限制表 `merchandisc`
--
ALTER TABLE `merchandisc`
  ADD CONSTRAINT `merchandisc_ibfk_1` FOREIGN KEY (`classthreeId`) REFERENCES `classtwo` (`classtwoId`);

--
-- 限制表 `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`MerId`) REFERENCES `member` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
