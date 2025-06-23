<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 引入 Codicons 图标库 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vscode-codicons@0.0.17/dist/codicon.min.css">
    <!-- 引入主题样式 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    
    <?php $this->header(); ?>
</head>
<body>

<div class="vscode-container">
    <!-- Activity Bar -->
    <nav class="activity-bar">
        <a href="<?php $this->options->siteUrl(); ?>" title="Home"><i class="codicon codicon-home"></i></a>
        <!-- 你可以添加更多图标链接，例如归档、关于页面等 -->
        <a href="<?php $this->options->siteUrl('archive.html'); ?>" title="Archive"><i class="codicon codicon-archive"></i></a>
        <a href="<?php $this->options->siteUrl('about.html'); ?>" title="About"><i class="codicon codicon-person"></i></a>
    </nav>

    <!-- Side Bar -->
    <?php $this->need('sidebar.php'); ?>

    <!-- Main Content Area -->
    <main class="main-content">
