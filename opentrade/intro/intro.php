<?php
	$g->page->title = '오픈트레이드';
	$g->page->css[] = STATIC_WWW.'/css/intro.css';
	$g->page->header[] = DIR_WWW."/modules/gnb-logout.php";
	$g->page->footer[] = DIR_WWW."/modules/footer.php";
	$g->page->display();
?>

<!-- body -->
<div class="container body-wrap">
	<div class="welcome">
		<h1><strong>오픈트레이드</strong>에 오신 것을 환영 합니다!</h1>
		<p>"<b>오픈트레이드</b>는 예비 창업자를 포함 스타트업과 엔젤 및 법인 투자자들의 든든한 다리가 되어 드리겠습니다!"</p>
	</div>
	<div class="intro">
		<ul class="thumbnails">
			<li class="span4">
				<div class="thumbnail">
					<img src="/images/intro-1.jpg" alt="">
					<h3>비즈니스 모델 개발</h3>
					<p>예비 창업자 및 스타트업의 비즈니스 모델 개발과 정리를 체계적으로 도와드립니다.</p>
				</div>
			</li>
			<li class="span4">
				<div class="thumbnail">
					<img src="/images/intro-2.jpg" alt="">
					<h3>크라우드펀딩</h3>
					<p>많은 엔젤 및 법인 투자자들에게 기업소식을 실시간으로 알리고, 크라우드 펀딩을 받을 수 있습니다.</p>
				</div>
			</li>
			<li class="span4">
				<div class="thumbnail">
					<img src="/images/intro-3.jpg" alt="">
					<h3>투자자 플렛폼</h3>
					<p>좋은 창업자를 찾고, 투자한 기업들의 포트폴리오로 등록하여 편리하게 살펴보며 관리할 수 있습니다.</p>
				</div>
			</li>
		</ul>
	</div>
	<hr/>

	<div class="member clearfix">
		<div class="signup pull-left">
			<h3><i class="icon icon-big icon-user-add"></i>아직 회원이 아니신가요?</h3>
			<p>
				예비 창업자로부터 투자자까지 모두 가입이 가능합니다.<br/>
				지금 바로 가입하여 오픈트레이드의 모든 기능을 이용하세요.
			</p>
			<a href="#" class="btn btn-large btn-info">바로 회원가입하기</a>
		</div>
		<div class="signin pull-right">
			<h3><i class="icon icon-big icon-user"></i>회원이시라면, 바로 로그인 하세요!</h3>
			<form class="form-horizontal">
				<div class="control-group">
					<label class="control-label">이메일</label>
					<div class="controls">
						<input type="text" class="input-xlarge" placeholder="이메일">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">비밀번호</label>
					<div class="controls">
						<input type="password" class="input-xlarge" placeholder="비밀번호">
					</div>
				</div>
				<div class="controls form-inline submit">
					<button type="submit" class="btn btn-success btn-large">로그인</button>
					<label class="checkbox"><input type="checkbox"> 자동로그인</label>
					<a href="#reset-password" class="reset-password" data-toggle="modal">비밀번호 초기화</a>
				</div>
			</form>
		</div>
	</div>
	<hr/>
	<div class="status">
		<h3><i class="icon icon-big icon-now"></i>현재 오픈트레이드에는 ...</h3>
		<ul class="thumbnails">
			<li class="span3">
				<div class="thumbnail">
					<strong>예비창업자</strong>
					1,512
				</div>
			</li>
			<li class="span3">
				<div class="thumbnail">
					<strong>스타트업</strong>
					320
				</div>
			</li>
			<li class="span3">
				<div class="thumbnail">
					<strong>엔젤 투자자</strong>
					50
				</div>
			</li>
			<li class="span3">
				<div class="thumbnail">
					<strong>법인 투자자</strong>
					12
				</div>
			</li>
		</ul>
	</div>
	<div class="thingy"><img src="/images/thingy.png"></div>
</div>

<!-- Modal find password-->
<div class="modal fade hide reset-password" id="reset-password">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>비밀번호 초기화</h3>
	</div>
	<div class="modal-body">
		<div class="form-horizontal well">
			<div class="control-group">
				<label class="control-label">이메일</label>
				<div class="controls">
					<input type="text" class="input-xlarge" placeholder="이메일">
				</div>
			</div>
		</div>
		<p>이메일을 입력하시면 새로운 비밀번호를 전송해드립니다.</p>
	</div>
	<div class="modal-footer">
		<button class="btn btn-primary">비밀번호 초기화</button>
		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>