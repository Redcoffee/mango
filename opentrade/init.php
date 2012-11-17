<?php
// 에러 출력 컨트롤
error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 'On');

$g->page->title = '오픈트레이드';
$g->page->css[] = STATIC_WWW.'/vendor/bootstrap/css/bootstrap.min.css';
$g->page->css[] = STATIC_WWW.'/css/common.css';
$g->page->js[] = 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js';
$g->page->js[] = STATIC_WWW.'/vendor/bootstrap/js/bootstrap.min.js';
$g->page->head[] = DIR_WWW.'/modules/head.php';
?>