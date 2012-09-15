-- phpMyAdmin SQL Dump
-- version 3.4.8
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 09 月 15 日 19:33
-- 服务器版本: 5.1.60
-- PHP 版本: 5.2.17p1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `erp`
--

-- --------------------------------------------------------

--
-- 表的结构 `AuthAssignment`
--

CREATE TABLE IF NOT EXISTS `AuthAssignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `AuthAssignment`
--

INSERT INTO `AuthAssignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('Admin', '1', NULL, 'N;');

-- --------------------------------------------------------

--
-- 表的结构 `AuthItem`
--

CREATE TABLE IF NOT EXISTS `AuthItem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `AuthItem`
--

INSERT INTO `AuthItem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('Admin', 2, NULL, NULL, 'N;'),
('Authenticated', 2, NULL, NULL, 'N;'),
('Guest', 2, NULL, NULL, 'N;');

-- --------------------------------------------------------

--
-- 表的结构 `AuthItemChild`
--

CREATE TABLE IF NOT EXISTS `AuthItemChild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `erp_channel`
--

CREATE TABLE IF NOT EXISTS `erp_channel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL COMMENT '销售渠道',
  `realname` char(20) NOT NULL COMMENT '联系人',
  `mobile` char(20) NOT NULL,
  `note` text NOT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `erp_channel`
--

INSERT INTO `erp_channel` (`id`, `name`, `realname`, `mobile`, `note`) VALUES
(1, '卡麦仑官方店', '乔翔', '13701167583', '测试数据');

-- --------------------------------------------------------

--
-- 表的结构 `erp_express`
--

CREATE TABLE IF NOT EXISTS `erp_express` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL,
  `delivery` char(20) NOT NULL,
  `mobile` char(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `erp_express`
--

INSERT INTO `erp_express` (`id`, `name`, `delivery`, `mobile`) VALUES
(1, '中通快递', '测试', '15901506035');

-- --------------------------------------------------------

--
-- 表的结构 `erp_order`
--

CREATE TABLE IF NOT EXISTS `erp_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_nubmer` char(30) NOT NULL COMMENT '淘宝订单号',
  `nickname` char(50) NOT NULL COMMENT '淘宝用户名',
  `realname` char(20) NOT NULL COMMENT '真实姓名',
  `contact` text NOT NULL COMMENT '联系方式',
  `channel_id` int(10) unsigned NOT NULL COMMENT '销售渠道',
  `sales` decimal(8,2) unsigned NOT NULL COMMENT '销售额',
  `cost` decimal(8,2) unsigned NOT NULL COMMENT '产品成本',
  `express_cost` decimal(8,2) unsigned NOT NULL COMMENT '快递成本',
  `express_id` int(10) unsigned NOT NULL COMMENT '快递',
  `express_number` char(30) NOT NULL COMMENT '快递单号',
  `profit` decimal(8,2) unsigned NOT NULL COMMENT '利润',
  `status` tinyint(1) NOT NULL COMMENT '订单状态',
  `note` text NOT NULL COMMENT '备注',
  `username` char(20) NOT NULL COMMENT '操作员',
  `create_time` int(10) unsigned NOT NULL COMMENT '创建时间',
  `modify_time` int(10) unsigned NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `order_nubmer` (`order_nubmer`),
  KEY `express_number` (`express_number`),
  KEY `realname` (`realname`),
  KEY `status` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `erp_order`
--

INSERT INTO `erp_order` (`id`, `order_nubmer`, `nickname`, `realname`, `contact`, `channel_id`, `sales`, `cost`, `express_cost`, `express_id`, `express_number`, `profit`, `status`, `note`, `username`, `create_time`, `modify_time`) VALUES
(3, '158055571969323', 'beky1314yang', '缪新航', '缪新航 ，13508170535 ， ，四川省 自贡市 自流井区 檀木林大街76号 ，643000 ', 1, 43.00, 0.00, 0.00, 1, '', 0.00, 0, '', 'admin', 1347701919, 0);

-- --------------------------------------------------------

--
-- 表的结构 `erp_order_item`
--

CREATE TABLE IF NOT EXISTS `erp_order_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `product_name` char(255) NOT NULL COMMENT '产品名称',
  `quantity` int(10) unsigned NOT NULL COMMENT '数量',
  `price` decimal(5,2) unsigned NOT NULL COMMENT '售价',
  `status` tinyint(1) unsigned NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `erp_order_item`
--

INSERT INTO `erp_order_item` (`id`, `order_id`, `product_id`, `product_name`, `quantity`, `price`, `status`) VALUES
(1, 3, 1, 'm1橙色磨砂后盖', 1, 20.00, 0),
(2, 3, 1, 'm1橙色磨砂后盖', 1, 20.00, 0);

-- --------------------------------------------------------

--
-- 表的结构 `erp_order_log`
--

CREATE TABLE IF NOT EXISTS `erp_order_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `username` char(20) NOT NULL,
  `log` char(255) NOT NULL,
  `create_time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `erp_products`
--

CREATE TABLE IF NOT EXISTS `erp_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `name` char(255) NOT NULL COMMENT '产品名称',
  `short_name` char(10) NOT NULL COMMENT '产品速查短名',
  `stock` int(10) unsigned NOT NULL COMMENT '库存',
  `cost_price` decimal(5,2) unsigned NOT NULL COMMENT '进货成本价格',
  `status` tinyint(1) unsigned NOT NULL COMMENT '产品状态',
  PRIMARY KEY (`id`),
  UNIQUE KEY `short_name` (`short_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `erp_products`
--

INSERT INTO `erp_products` (`id`, `category_id`, `name`, `short_name`, `stock`, `cost_price`, `status`) VALUES
(1, 1, 'm1橙色磨砂后盖', 'cg', 100, 12.00, 0);

-- --------------------------------------------------------

--
-- 表的结构 `erp_products_category`
--

CREATE TABLE IF NOT EXISTS `erp_products_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `erp_products_category`
--

INSERT INTO `erp_products_category` (`id`, `name`) VALUES
(1, '小米手机Mione'),
(2, '小米手机Mi1s'),
(3, '小米手机Mi2');

-- --------------------------------------------------------

--
-- 表的结构 `erp_user`
--

CREATE TABLE IF NOT EXISTS `erp_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `salt` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `profile` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `erp_user`
--

INSERT INTO `erp_user` (`id`, `username`, `password`, `salt`, `email`, `profile`) VALUES
(1, 'admin', 'd533c74fd58a7b59e2845be8b44a1b6a', '4E4M2OVnp7C837nfbEdOnd8pT0nb3CIR', 'test@kamlen.com', ''),
(2, 'test', '92d244b1397d41d82bd23853f694d1e8', 'jEp91248ljR6GC8lVTCu2063K0sp9jI3', 'test1@kamlen.com', '');

-- --------------------------------------------------------

--
-- 表的结构 `Rights`
--

CREATE TABLE IF NOT EXISTS `Rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
