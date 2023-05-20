<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<html lang="zh-CN">
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
		<!-- 使用链接函数跳转相关路径 -->
		<link rel="shortcut icon" href="<?php $this->options->logoCss(); ?>" type="image/x-icon">
		<link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/normalize/0/normalize.min.css">
		<link href="https://cdn.bootcdn.net/ajax/libs/animate.css/4.1.0/animate.min.css" rel="stylesheet">
		<link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('assets/css/main.css'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('assets/css/typo.css'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('assets/css/OwO.css'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('assets/css/custom.css'); ?>" />
		<!-- 通过自有函数输出HTML头部信息 -->
		<meta name="template" content="default" />
		<meta name="description" content="<?php $this->options->title() ?>" />
		<meta name="keywords" content="<?php $this->options->title() ?>, TEARANGEL17" />
		<meta name="generator" content="Typecho 1.1/17.10.30" />
		<link rel="alternate" type="application/rss+xml" title="<?php $this->options->title() ?> &raquo; RSS 2.0" href="<?php $this->options->siteUrl(); ?>/feed/" />
		<link rel="alternate" type="application/rdf+xml" title="<?php $this->options->title() ?> &raquo; RSS 1.0" href="<?php $this->options->siteUrl(); ?>/feed/rss/" />
		<link rel="alternate" type="application/atom+xml" title="<?php $this->options->title() ?> &raquo; ATOM 1.0" href="<?php $this->options->siteUrl(); ?>/feed/atom/" />
		<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.js"></script>
</head>
	<body background="<?php $this->options->background(); ?>" style="background-repeat:no-repeat; background-attachment:fixed; background-size:100% 100%; ">
		<div id="main">
			<div style="display:none;";>
				<div class="progress">
					<span class="start"></span>
					<div class="progress-bar">
						<div class="now"></div>
					</div>
					<span class="end"></span>
				</div>
			</div>
			<header>
				<div id="header-contaniner" class="clear">
					<!-- 头部左侧菜单 -->
					<div class="left header-contaniner">
						<nav class="nav-left">
							<a href="<?php $this->options->siteUrl(); ?>" class="current-page">主页</a>
							<a href="/blog">博客</a>
							<a href="/archives.html">归档</a>
							<a href="/photo.html">图库</a>
							<a href="/links.html">友链</a>
							<a href="/about.html">关于</a>
						</nav>
					</div>
				</div>
				<!-- 手机端头部 -->
				<div id="header-container-m">
					<div class="clear">
						<a href="https://blog.nonly.cn/">
							<img src="<?php $this->options->logoCss(); ?>" class="left">
							</img>
						</a>
						<img id="m-nav-switch" src="<?php $this->options->siteUrl(); ?>/usr/themes/nosky/assets/img/menu.svg" class="right">
						</img>
					</div>
				</div>
				<!-- 手机端头部导航栏 -->
				<div id="header-nav-m">
					<nav class="nav-left-m">
							<a href="<?php $this->options->siteUrl(); ?>" class="current-page">主页</a>
							<a href="/blog">博客</a>
							<a href="/archives.html">归档</a>
							<a href="/photo.html">图库</a>
							<a href="/links.html">友链</a>
							<a href="/about.html">关于</a>
					</nav>
				</div>
			</header>