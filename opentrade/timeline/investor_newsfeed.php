<?php
	$g->page->title = '투자자 :: 오픈트레이드';
	$g->page->css[] = STATIC_WWW.'/css/page.css';
	$g->page->header[] = DIR_WWW."/modules/gnb.php";
	$g->page->footer[] = DIR_WWW."/modules/footer.php";
	$g->page->display();
?>

<!-- body -->
<div class="container body-wrap">
<?
	// 타임라인 영역
	include ("./modules/newsfeed_investor.php");
	// 사이드 영역
	include ("./modules/side_investor.php");
?>
</div>
<div class="thingy"><img src="/images/thingy.png"></div>