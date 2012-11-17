<?php
	$g->page->title = '스타트업 :: 오픈트레이드';
	$g->page->css[] = STATIC_WWW.'/css/register.css';
	$g->page->header[] = DIR_WWW."/modules/gnb-logout.php";
	$g->page->footer[] = DIR_WWW."/modules/footer.php";
	$g->page->display();
?>

<!-- body -->
<div class="container body-wrap">
	<div class="head-wrap">
		<h1><strong>스타트업</strong> 회원가입</h1>
		<p>
			OpenTrade는 스타트업의 비즈니스모델 개발 및 크라우드펀딩과 엔젤투자를 위한 플랫폼 입니다.</br>
			가능한 자세하게 작성해 주시길 부탁드립니다.
		</p>
		<div class="thingy"><img src="/images/thingy.png"></div>
	</div>
	<div class="main-wrap">
		<div class="navbar">
			<div class="navbar-inner">
				<ul class="nav">
					<li class="active"><a href="#account" data-toggle="tab">기본정보</a></li>
					<li><a href="#businessmodel" data-toggle="tab">비즈니스모델</a></li>
					<li><a href="#team" data-toggle="tab">팀구성</a></li>
					<li><a href="#unique" data-toggle="tab">차별성</a></li>
					<li><a href="#ip-right" data-toggle="tab">지적재산</a></li>
					<li><a href="#milestone" data-toggle="tab">마일스톤</a></li>
					<li><a href="#complete" data-toggle="tab">완료</a></li>
				</ul>
			</div>
		</div>
		<div class="tab-content">
			<div class="tab-pane active" id="account">
				<form class="form-horizontal">
					<div class="terms">
						<? include("../modules/terms-startup.htm");?>
					</div>
					<div class="terms-checkbox">
						<label class="checkbox"><input type="checkbox">서비스 이용약관에 동의 합니다.</label>
					</div>
					<h4>계정 정보</h4>
					<div class="control-group">
						<label class="control-label">실명인증</label>
						<div class="controls">
							<a href="" class="btn btn-info">실명학인</a>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">이메일 주소(ID)</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="profile">프로필 이미지</label>
						<div class="controls profile-upload clearfix">
							<a href="#" class="profile pull-left"><img src="http://profile.ak.fbcdn.net/hprofile-ak-snc4/368821_100000888744543_761385340_n.jpg"></a>
							<a href="#" id="profile" class="btn">이미지 업로드</a>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">비빌번호</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">비빌번호 확인</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">비빌번호 힌트</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">메일 수신 여부</label>
						<div class="controls">
							<label class="radio inline"><input type="radio" name="mailing" value="" checked> 메일을 받습니다.</label>
							<label class="radio inline"><input type="radio" name="mailing" value=""> 메일을 받지 않습니다.</label>
						</div>
					</div>
					<h4>법인 정보</h4>
					<div class="control-group">
						<label class="control-label">법인명</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">사업자 등록 번호</label>
						<div class="controls">
							<input type="text" maxlength="4" style="width: 60px;"> - <input type="text" maxlength="2" style="width: 30px;"> - <input type="text" maxlength="5" style="width: 75px;">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">법인 등록 번호</label>
						<div class="controls">
							<input type="text" maxlength="6" style="width: 90px;"> - <input type="text" maxlength="7" style="width: 115px;">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">회사의 비전</label>
						<div class="controls">
							<textarea style="width: 440px;" placeholder="간단한 회사소개를 적어주세요. 프로필 사진과 함께 표시됩니다."></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">회사 주소</label>
						<div class="controls">
							<input type="text" style="width: 440px;">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">전화번호</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>
					<h4>재무 정보</h4>
					<div class="control-group">
						<label class="control-label">자본금</label>
						<div class="controls">
							<input type="text"> 원
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">액면가</label>
						<div class="controls">
							<input type="text"> 원
						</div>
					</div>
					<hr />
				</form>
				<div class="clearfix">
					<a href="#" class="btn btn-success pull-right">비즈니스모델 &rarr;</a>
					<a href="#" data-toggle="tab" class="btn">&larr; 약관동의</a>
				</div>
			</div>
			<div class="tab-pane" id="businessmodel">
				<form class ="form-horizontal">
					<div class="well">
						<p>
							<b>비즈니스 모델 캔버스</b>는 각 기업의 고객과 고객과의 관계, 파트너, 기업이 고객에게 전하는 가치와 채널, 가치를 창출하기 위한 활동 및 자원, 기업이 지출하는 비용, 기업이 창출하는 수익 등 총 9가지 영역으로 나눠져 있습니다.
						</p>
						<p>
							비즈니스 모델 캔버스는 기업 운영자가 기업이 가지고 있는 비즈니스 모델을 정리, 수정, 보완 하는 것을 도움과 동시에 투자자가 각 기업의 비즈니스 모델을 쉽게 이해 할 수 있게 만들어 줍니다. 아래에 정의된 <b>9개의 비즈니스 모델 빌딩 블록</b>을 잘 읽고, 다음 단계에서 각 기업에 맞는 비즈니스모델을 작성해 주십시오.
						</p>
						<p>
							<u>투자자들에게 중요한 의사 결정 요인이 될 수 있는 부분이기 때문에 최대한 상세하게 작성해 주시길 바랍니다.</u>
						</p>
					</div>
					<p>
						<img src="/images/bm_canvas_def.png">
					</p>
					<br />
					<h4>Value Proposition (가치 제안)</h4>
					<div class="control-group">
						<label class="control-label">설명</label>
						<div class="controls">
							<textarea style="width: 440px;"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">키워드</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>
					<hr />
					<h4>Key Activities (핵심 활동)</h4>
					<div class="control-group">
						<label class="control-label">설명</label>
						<div class="controls">
							<textarea style="width: 440px;"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">키워드</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>
					<hr />
					<h4>Key Resources (핵심 자원)</h4>
					<div class="control-group">
						<label class="control-label">설명</label>
						<div class="controls">
							<textarea style="width: 440px;"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">키워드</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>
					<hr />
					<h4>Customer Segments (대상 고객)</h4>
					<div class="control-group">
						<label class="control-label">설명</label>
						<div class="controls">
							<textarea style="width: 440px;"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">키워드</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>
					<hr />
					<h4>Channels (채널)</h4>
					<div class="control-group">
						<label class="control-label">설명</label>
						<div class="controls">
							<textarea style="width: 440px;"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">키워드</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>
					<hr />
					<h4>Customer Relationships (고객 관계)</h4>
					<div class="control-group">
						<label class="control-label">설명</label>
						<div class="controls">
							<textarea style="width: 440px;"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">키워드</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>
					<hr />
					<h4>Revenue Streams (수익원)</h4>
					<div class="control-group">
						<label class="control-label">설명</label>
						<div class="controls">
							<textarea style="width: 440px;"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">키워드</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>
					<hr />
					<h4>Cost Structure (비용구조)</h4>
					<div class="control-group">
						<label class="control-label">설명</label>
						<div class="controls">
							<textarea style="width: 440px;"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">키워드</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>
					<hr />
					<h4>Key Partners (핵심 파트너)</h4>
					<div class="control-group">
						<label class="control-label">설명</label>
						<div class="controls">
							<textarea style="width: 440px;"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">키워드</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>
					<hr />
				</form>
				<div class="clearfix">
					<a href="#" data-toggle="tab" class="btn btn-success pull-right">팀구성 &rarr;</a>
					<a href="#" data-toggle="tab" class="btn">&larr; 계정</a>
				</div>
			</div>
			<div class="tab-pane" id="team">
				<form class="form-horizontal">
					<h4>대표</h4>
					<div class="control-group">
						<label class="control-label">이름</label>
						<div class="controls">
							<input type="text" placeholder="이름">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">성별</label>
						<div class="controls">
							<label class="radio inline"><input type="radio" name="gender" value="" checked> 남성</label>
							<label class="radio inline"><input type="radio" name="gender" value=""> 여성</label>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">학력</label>
						<div class="controls">
							<input type="text" placeholder="학교" style="width: 100px;">
							<input type="text" placeholder="학과" style="width: 100px;">
							<select style="width: 100px;">
								<option>재학</option>
								<option>졸업</option>
								<option>휴학</option>
								<option>중퇴</option>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">담당부서</label>
						<div class="controls">
							<input type="text" placeholder="담당부서">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">경력사항</label>
						<div class="controls">
							<textarea style="width: 440px;"></textarea>
						</div>
					</div>
					<hr />

					<h4>팀구성원 <a href="" class="btn btn-small">추가</a></h4>
					<div class="control-group">
						<label class="control-label">이름</label>
						<div class="controls">
							<input type="text" placeholder="이름">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">성별</label>
						<div class="controls">
							<label class="radio inline"><input type="radio" name="gender" value="" checked> 남성</label>
							<label class="radio inline"><input type="radio" name="gender" value=""> 여성</label>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">학력</label>
						<div class="controls">
							<input type="text" placeholder="학교" style="width: 100px;">
							<input type="text" placeholder="학과" style="width: 100px;">
							<select style="width: 100px;">
								<option>재학</option>
								<option>졸업</option>
								<option>휴학</option>
								<option>중퇴</option>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">담당부서</label>
						<div class="controls">
							<input type="text" placeholder="담당부서">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">경력사항</label>
						<div class="controls">
							<textarea style="width: 440px;"></textarea>
						</div>
					</div>
					<hr />
				</form>
				<div class="clearfix">
					<a href="#" data-toggle="tab" class="btn btn-success pull-right">차별성 &rarr;</a>
					<a href="#" data-toggle="tab" class="btn">&larr; 팀구성</a>
				</div>
			</div>
			<div class="tab-pane" id="unique">
				<form class="form-horizontal">
					<h4>차별성</h4>
					<div class="control-group">
						<label class="control-label">설명</label>
						<div class="controls">
							<textarea style="width: 440px;"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="capital">근거자료</label>
						<div class="controls">
							<a href="#" id="profile" class="btn">자료 업로드</a>
						</div>
					</div>
					<hr />
				</form>
				<div class="clearfix">
					<a href="#" data-toggle="tab" class="btn btn-success pull-right">지적재산 &rarr;</a>
					<a href="#" data-toggle="tab" class="btn">&larr; 팀구성</a>
				</div>
			</div>
			<div class="tab-pane" id="ip-right">
				<form class="form-horizontal">
					<h4>특허</h4>
					<div class="control-group">
						<label class="control-label">특허출원번호</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">특허등록번호</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="debt">발명의 명칭</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">전략</label>
						<div class="controls">
							<textarea style="width: 440px;"></textarea>
						</div>
					</div>
					<hr />
				</form>
				<div class="clearfix">
					<a href="#" data-toggle="tab" class="btn btn-success pull-right">마일스톤 &rarr;</a>
					<a href="#" data-toggle="tab" class="btn">&larr; 차별성</a>
				</div>
			</div>
			<div class="tab-pane" id="milestone">
				<form class="form-horizontal">
					<div class="well">
						<p>
							장기적인 사업계획을 달성하기 위한 단기적이고 세부적인 마일스톤을 작성하세요.
						</p>
						<p>
							최대 10개까지 등록이 가능하며, <b>법인 설립</b>과 <b>월별 BEP 달성</b> 항목은 의무 등록 사항 입니다.
						</p>
					</div>
					<h4>마일스톤 단계 설정  <a href="" class="btn btn-small"><i class="icon icon-plus"></i> 법인설립이후</a> <a href="" class="btn btn-small"><i class="icon icon-plus"></i> 월별BEP달성이후</a></h4>
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>단계</th>
								<th>항목</th>
								<th>설명</th>
								<th>삭제</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1단계</td>
								<td><input type="text" style="width: 150px;" value="법인설립" readonly></td>
								<td><input type="text" style="width: 380px;"></td>
								<td></td>
							</tr>
							<tr>
								<td>2단계</td>
								<td><input type="text" style="width: 150px;"></td>
								<td><input type="text" style="width: 380px;"></td>
								<td><a href="" class="btn">삭제</a></td>
							</tr>
							<tr>
								<td>3단계</td>
								<td><input type="text" style="width: 150px;" value="BEP달성" readonly></td>
								<td><input type="text" style="width: 380px;"></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</form>
				<div class="clearfix">
					<a href="#" data-toggle="tab" class="btn btn-primary pull-right">가입 완료</a>
					<a href="#" data-toggle="tab" class="btn">&larr; 지적재산</a>
				</div>
			</div>
			<div class="tab-pane" id="complete">
				<div class="complete">
					<a href="#" class="profile"><img src="http://profile.ak.fbcdn.net/hprofile-ak-snc4/368821_100000888744543_761385340_n.jpg"></a>
					<h1>축하합니다!</h1>
					<p class="lead">회원가입이 완료되었습니다!</p>
					<div class="well">
						- 가입하신 이메일과 비밀번호는 암호화되어 안전하게 보관 됩니다.<br/>
						- 비밀번호를 잊으신 경우에는 비밀번호 찾기를 이용해 주세요.
					</div>
					<p>회원님의 아이디는 <b>htkwon@ccvc.co.kr</b> 입니다. 홈에서 다시 로그인 해주세요.</p>
					<br/><br/><br/>
					<a href="#" class="btn btn-large">홈으로 이동</a>
				</div>
			</div>
		</div>

	</div>

</div>
<div class="thingy"><img src="/images/thingy.png"></div>