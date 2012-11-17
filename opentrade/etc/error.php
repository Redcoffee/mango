<?php
	$g->page->title = '스타트업 :: 오픈트레이드';
	$g->page->css[] = STATIC_WWW.'/css/etc.css';
	$g->page->header[] = DIR_WWW."/modules/gnb-logout.php";
	$g->page->footer[] = DIR_WWW."/modules/footer.php";
	$g->page->display();
?>

<!-- body -->
<div class="container body-wrap error">
	<div class="main-wrap">
		<h1>오류 : 권한</h1>
		<p>
			현재 페이지에 접근할 수 있는 권한이 없습니다.
		</p>
	</div>
</div>
<div class="thingy" style="margin-bottom: 100px;"><img src="/images/thingy.png"></div>
