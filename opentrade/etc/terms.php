<?php
	$g->page->title = '스타트업 :: 오픈트레이드';
	$g->page->css[] = STATIC_WWW.'/css/etc.css';
	$g->page->header[] = DIR_WWW."/modules/gnb-logout.php";
	$g->page->footer[] = DIR_WWW."/modules/footer.php";
	$g->page->display();
?>

<!-- body -->
<div class="container body-wrap">
	<div class="main-wrap">
		<div class="navbar">
			<div class="navbar-inner">
				<ul class="nav">
					<li class="active"><a href="#startup" data-toggle="tab">피투자자기업용 이용약관</a></li>
					<li><a href="#capital" data-toggle="tab">투자자용 이용약관</a></li>
					<li><a href="#privacy" data-toggle="tab">개인정보보호정책</a></li>
				</ul>
			</div>
		</div>
		<div class="tab-content terms">
			<div class="tab-pane active" id="startup">
				<? include ("../modules/terms-startup.htm"); ?>
			</div>
			<div class="tab-pane" id="capital">
				<? include ("../modules/terms-capital.htm"); ?>
			</div>
			<div class="tab-pane" id="privacy">
				<? include ("../modules/terms-privacy.htm"); ?>
			</div>
		</div>
	</div>
</div>
<div class="thingy"><img src="/images/thingy.png"></div>