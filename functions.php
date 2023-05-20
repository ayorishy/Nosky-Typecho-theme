<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($custom)
{
    $logoCss = new Typecho_Widget_Helper_Form_Element_Text('logoCss', NULL, NULL, _t('站点头像地址'), _t('在这里填入一个图片 URL 地址, 以修改头像'));
    $custom->addInput($logoCss);

    $logoName = new Typecho_Widget_Helper_Form_Element_Text('logoName', NULL, NULL, _t('博主名字'), _t('在这里填入你的博客名'));
    $custom->addInput($logoName);
    
    $background = new Typecho_Widget_Helper_Form_Element_Text('background', NULL, NULL, _t('站点背景'), _t('在这里填入一个图片 URL 地址 或 API'));
    $custom->addInput($background);
    
    $link1 = new Typecho_Widget_Helper_Form_Element_Text('link1', NULL, NULL, _t('home'), _t('输入url链接'));
    $custom->addInput($link1);
    
    $link2 = new Typecho_Widget_Helper_Form_Element_Text('link2', NULL, NULL, _t('Github'), _t('输入url链接'));
    $custom->addInput($link2);
    
    $link3 = new Typecho_Widget_Helper_Form_Element_Text('link3', NULL, NULL, _t('QQ'), _t('输入url链接'));
    $custom->addInput($link3);
    
    $description1 = new Typecho_Widget_Helper_Form_Element_Text('description1', NULL, NULL, _t('介绍1'), _t('输入你的介绍'));
    $custom->addInput($description1);
    
    $description2 = new Typecho_Widget_Helper_Form_Element_Text('description2', NULL, NULL, _t('介绍2'), _t('输入你的介绍'));
    $custom->addInput($description2);
    
    $description3 = new Typecho_Widget_Helper_Form_Element_Text('description3', NULL, NULL, _t('介绍3'), _t('输入你的介绍'));
    $custom->addInput($description3);
    
    $description4 = new Typecho_Widget_Helper_Form_Element_Text('description4', NULL, NULL, _t('介绍4'), _t('输入你的介绍'));
    $custom->addInput($description4);
    
    $description5 = new Typecho_Widget_Helper_Form_Element_Text('description5', NULL, NULL, _t('介绍5'), _t('输入你的介绍'));
    $custom->addInput($description5);

    $description6 = new Typecho_Widget_Helper_Form_Element_Text('description6', NULL, NULL, _t('介绍6'), _t('输入你的介绍'));
    $custom->addInput($description6);
    
    $photo1 = new Typecho_Widget_Helper_Form_Element_Text('photo1', NULL, NULL, _t('图库1'), _t('在这里填入一个图片 URL 地址 或 API'));
    $custom->addInput($photo1);
    
    $photo2 = new Typecho_Widget_Helper_Form_Element_Text('photo2', NULL, NULL, _t('图库2'), _t('在这里填入一个图片 URL 地址 或 API'));
    $custom->addInput($photo2);
    
    $photo3 = new Typecho_Widget_Helper_Form_Element_Text('photo3', NULL, NULL, _t('图库3'), _t('在这里填入一个图片 URL 地址 或 API'));
    $custom->addInput($photo3);
    
    $photo4 = new Typecho_Widget_Helper_Form_Element_Text('photo4', NULL, NULL, _t('图库4'), _t('在这里填入一个图片 URL 地址 或 API'));
    $custom->addInput($photo4);
    
    $photo5 = new Typecho_Widget_Helper_Form_Element_Text('photo5', NULL, NULL, _t('图库5'), _t('在这里填入一个图片 URL 地址 或 API'));
    $custom->addInput($photo5);
    
    $photo6 = new Typecho_Widget_Helper_Form_Element_Text('photo6', NULL, NULL, _t('图库6'), _t('在这里填入一个图片 URL 地址 或 API'));
    $custom->addInput($photo6);
    
    $photo7 = new Typecho_Widget_Helper_Form_Element_Text('photo7', NULL, NULL, _t('图库7'), _t('在这里填入一个图片 URL 地址 或 API'));
    $custom->addInput($photo7);  
    
    $photo8 = new Typecho_Widget_Helper_Form_Element_Text('photo8', NULL, NULL, _t('图库8'), _t('在这里填入一个图片 URL 地址 或 API'));
    $custom->addInput($photo8); 
    
}
